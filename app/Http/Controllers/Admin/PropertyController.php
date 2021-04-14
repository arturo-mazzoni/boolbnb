<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Property;
use App\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $id_user=Auth::id();
      $properties = Property::where('user_id', $id_user)->get();
      
      $data = ['properties' => $properties];
      return view('admin.property.index', $data);//collegamento pagina app.ti admin
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.property.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all();
      $id = Auth::id();
      
      $request->validate([
        'title' => 'required|max:80',
        'rooms_number' => 'required|max:5',
        'beds_number' => 'required|max:5',
        'bathrooms_number' => 'required|max:5',
        'sqm_number' => 'required|max:5',
        'address' => 'required',
        /* 'longitude' => 'required',
        'latitude' => 'required', */
        'image' => 'required',
        'visible' => 'required',
        'price_per_night' => 'required',
        'floor' => 'required',
        'description' => 'required'
      ]);

      $newProperty = new Property();
      $newProperty->user_id = $id;

      $newProperty->fill($data);
      $image_path=Storage::put('image',$data['image']);
      $newProperty->image=$image_path;
      $newProperty->save();
      
        if($request->hasFile('images')){
          
          foreach($request->images as $image){
              $image_car=new image();
              $image_path=Storage::put('image',$image);
              $image_car->property_id=$newProperty->id;
              $image_car->image=$image_path;
              $image_car->save();
          }
        }
    
      

      return redirect()->route('property.show', $newProperty->id)->with('status','appartamento-aggiunto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
      $data = ['property' => $property];

      return view('admin.property.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
      if ($property) {
        $tags = Property::all();
        $data = [
          'property' => $property
        ];

        return view('admin.property.edit', $data);
      }

      abort('404');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
      $data = $request->all();

      $request->validate([
        'title' => 'required|max:80',
        'rooms_number' => 'required|max:5',
        'beds_number' => 'required|max:5',
        'bathrooms_number' => 'required|max:5',
        'sqm_number' => 'required|max:5',
        'address' => 'required',
        /* 'longitude' => 'required',
        'latitude' => 'required', */
        
        'visible' => 'required',
        'price_per_night' => 'required',
        'floor' => 'required',
        'description' => 'required'
      ]);
      if(array_key_exists('image',$data)){
      
        
        Storage::delete($property->image);
         $image_path=Storage::put('image',$data['image']);
        $data['image']=$image_path;
      }
     
      

      $property->update($data);

      return redirect()->route('property.show', $property)->with('status', 'Record updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
      $image= Image::where('property_id',$property->id);
      
      $image->delete();
      $property->delete();

      return redirect()->route('property.index');
    }
}
