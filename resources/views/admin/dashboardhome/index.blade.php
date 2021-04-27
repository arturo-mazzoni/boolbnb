@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <div class="row dashboard-table">
        <table class="table tabella">
            <thead class="testa-tabella">
                <tr>
                    <th scope="col">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">La mia Dashboard</li>
                        </ol>
                        <!-- Area Grafico 1 -->
                        <div class="card mb-3">
                            <div class="card-header">
                            <i class="fa fa-area-chart"></i> FAQ </div>
                            <div class="card-body">
                              <ul class="list-group list-group-flush">
                                <li class="list-group-item" data-toggle="modal" data-target="#firstModal" style="cursor: pointer">Come gestisco i messaggi?</li>
                                <li class="list-group-item" data-toggle="modal" data-target="#secondModal" style="cursor: pointer">Cosa visualizzo nella sezione appartamenti?</li>
                                <li class="list-group-item" data-toggle="modal" data-target="#thirdModal" style="cursor: pointer">Come aggiungo un appartamento?</li>
                                <li class="list-group-item" data-toggle="modal" data-target="#fourthModal" style="cursor: pointer">Come modifico un appartamento?</li>
                                <li class="list-group-item" data-toggle="modal" data-target="#fifthModal" style="cursor: pointer">Come elimino un appartamento?</li>
                                <li class="list-group-item" data-toggle="modal" data-target="#sixthModal" style="cursor: pointer">Come posso sponsorizzare il mio appartamento?</li>
                                <li class="list-group-item" data-toggle="modal" data-target="#seventhModal" style="cursor: pointer">Dove trovo le statistiche di visualizzazione?</li>
                              </ul>
                            </div>
                        </div>                     
                    </th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="modal fade" id="firstModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Come gestisco i messaggi?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis est consequuntur voluptatem obcaecati aperiam eligendi assumenda, odit, consectetur deserunt iste exercitationem recusandae! Placeat autem aliquid, eligendi est similique reprehenderit nesciunt.<br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi repudiandae, nihil nostrum ipsam natus deleniti esse dolorum perspiciatis! Excepturi sapiente quo architecto odio similique enim voluptatem placeat quia atque asperiores?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #004C99; color: #F5B964">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="secondModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cosa visualizzo nella sezione appartamenti?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis est consequuntur voluptatem obcaecati aperiam eligendi assumenda, odit, consectetur deserunt iste exercitationem recusandae! Placeat autem aliquid, eligendi est similique reprehenderit nesciunt.<br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi repudiandae, nihil nostrum ipsam natus deleniti esse dolorum perspiciatis! Excepturi sapiente quo architecto odio similique enim voluptatem placeat quia atque asperiores?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #004C99; color: #F5B964">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="thirdModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Come aggiungo un appartamento?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis est consequuntur voluptatem obcaecati aperiam eligendi assumenda, odit, consectetur deserunt iste exercitationem recusandae! Placeat autem aliquid, eligendi est similique reprehenderit nesciunt.<br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi repudiandae, nihil nostrum ipsam natus deleniti esse dolorum perspiciatis! Excepturi sapiente quo architecto odio similique enim voluptatem placeat quia atque asperiores?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #004C99; color: #F5B964">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="fourthModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Come modifico un appartamento?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis est consequuntur voluptatem obcaecati aperiam eligendi assumenda, odit, consectetur deserunt iste exercitationem recusandae! Placeat autem aliquid, eligendi est similique reprehenderit nesciunt.<br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi repudiandae, nihil nostrum ipsam natus deleniti esse dolorum perspiciatis! Excepturi sapiente quo architecto odio similique enim voluptatem placeat quia atque asperiores?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #004C99; color: #F5B964">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="fifthModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Come elimino un appartamento?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis est consequuntur voluptatem obcaecati aperiam eligendi assumenda, odit, consectetur deserunt iste exercitationem recusandae! Placeat autem aliquid, eligendi est similique reprehenderit nesciunt.<br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi repudiandae, nihil nostrum ipsam natus deleniti esse dolorum perspiciatis! Excepturi sapiente quo architecto odio similique enim voluptatem placeat quia atque asperiores?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #004C99; color: #F5B964">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="sixthModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Come posso sponsorizzare il mio appartamento?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis est consequuntur voluptatem obcaecati aperiam eligendi assumenda, odit, consectetur deserunt iste exercitationem recusandae! Placeat autem aliquid, eligendi est similique reprehenderit nesciunt.<br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi repudiandae, nihil nostrum ipsam natus deleniti esse dolorum perspiciatis! Excepturi sapiente quo architecto odio similique enim voluptatem placeat quia atque asperiores?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #004C99; color: #F5B964">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="seventhModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Dove trovo le statistiche di visualizzazione?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis est consequuntur voluptatem obcaecati aperiam eligendi assumenda, odit, consectetur deserunt iste exercitationem recusandae! Placeat autem aliquid, eligendi est similique reprehenderit nesciunt.<br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi repudiandae, nihil nostrum ipsam natus deleniti esse dolorum perspiciatis! Excepturi sapiente quo architecto odio similique enim voluptatem placeat quia atque asperiores?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #004C99; color: #F5B964">Close</button>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection