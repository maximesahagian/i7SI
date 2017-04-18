@extends('layouts.admin')
@section('content')
    <div class="main-content news">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Les messages</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($messages as $message)

                            <div class="col-sm-4">
                                <div class="metric">
                                    <a class="title-new" href="">
                                        {{$message->firstname}}<br>
                                        {{$message->lastname}}<br>
                                        @if($message->number != "" && $message->number != null)
                                                Rappeler : {{$message->number}}
                                        @endif
                                    </a>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <a href="">
                                            <button class="btn btn-alert">Visualiser</button>
                                        </a>
                                    </div>
                                    <div class="col-xs-6">
                                        <button to-delete="{{$message->id}}" class="btn btn-danger delete-new">
                                            Supprimer
                                        </button>
                                    </div>
                                </div>
                            </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>

@stop