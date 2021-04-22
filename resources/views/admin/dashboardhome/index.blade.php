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
                            <i class="fa fa-area-chart"></i> Area Grafico Andamento</div>
                            <div class="card-body">
                            <canvas id="myAreaChart" width="100%" height="30"></canvas>
                            </div>
                            <div class="card-footer small text-muted">Aggiornato oggi</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                        <!-- Area Grafico 2-->
                            <div class="card mb-3">
                                <div class="card-header">
                                    <i class="fa fa-bar-chart"></i> Area Grafico a candele
                                </div>
                                {{-- <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-8 my-auto">
                                            <canvas id="myBarChart" width="100" height="50"></canvas>
                                        </div>
                                        <div class="col-sm-4 text-center my-auto">
                                            <div class="h4 mb-0 text-primary">100</div>
                                            <div class="small text-muted">visualizzazioni mese</div>
                                            <hr>
                                            <div class="h4 mb-0 text-warning">50</div>
                                            <div class="small text-muted">visualizzazioni settimana</div>
                                            <hr>
                                            <div class="h4 mb-0 text-success">25</div>
                                            <div class="small text-muted">visualizzazioni di oggi</div>
                                        </div>
                                    </div>
                                </div> --}}
                            <div class="card-footer small text-muted">Aggiornato oggi</div>
                        </div>
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>


@endsection