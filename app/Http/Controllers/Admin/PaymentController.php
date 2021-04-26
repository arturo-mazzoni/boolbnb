<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Property;
use App\Sponsor;
use Carbon\Carbon;
class PaymentController extends Controller
{
    public function request(Property $property)
    {
      //  if(Auth::id() == $property->admin_id) {
        //gateway
        $gateway = new \Braintree\Gateway([
          'environment' => config('services.braintree.environment'),
          'merchantId' => config('services.braintree.merchantId'),
          'publicKey' => config('services.braintree.publicKey'),
          'privateKey' => config('services.braintree.privateKey')
        ]);
        $sponsor = DB::table('property_sponsor')->where('property_id', $property->id)->latest('end')->first();
        if($sponsor != null) {
          ($sponsor->end > Carbon::now()) ? $sponsor = false : $sponsor = true;
        }
        else {
          $sponsor = true;
        }
        $data = [
          'token' => $clientToken = $gateway->clientToken()->generate(),
          'property' => $property,
          'sponsor' => $sponsor
        ];
        return view('admin.payment.request', $data);
      // }
      // return redirect()->route('home');
    }
    public function payment(Request $request, Property $property)
    {
        $data = $request->all();
        //gateway
        $gateway = new \Braintree\Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
        ]);
        $sponsor = Sponsor::find($data['sponsor']);
        //transaction
        $result = $gateway->transaction()->sale([
            'amount' => $sponsor->price,
            'paymentMethodNonce' => $data['payment_method_nonce'],
            // 'deviceData' => $deviceDataFromTheClient,
            'options' => [
                'submitForSettlement' => True
            ]
        ]);
        $status = false;
        if($result) {
          $status = true;
          $end = Carbon::now()->addDay($sponsor->duration / 24);
          $property->sponsors()->attach($data['sponsor'], ['end'=> $end ]);
        }
        return redirect()->route('payment.check')->with('status', $status);
    }
    public function check()
    {
      return view('admin.payment.check');
    }
}