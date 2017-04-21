@extends('layouts.admin')
@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Les statistiques</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-comments"></i></span>
                                <p>
                                    <span class="number">4</span>
                                    <span class="title">Messages reçus ce mois-ci</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon" style="background-color: #FF8E2B"><i class="fa fa-phone"></i></span>
                                <p>
                                    <span class="number">23</span>
                                    <span class="title">Demandes d'appels ce mois-ci</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop