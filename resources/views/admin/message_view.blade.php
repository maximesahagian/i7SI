@extends('layouts.admin')
@section('content')
    <div class="main-content news">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline message-view">
                <div class="panel-heading">
                    <h3 class="panel-title">Message de {{$message->firstname}} {{$message->lastname}}</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <h3>Numéro de téléphone : {{$message->number}}</h3>
                        <h3>Adresse e-mail : {{$message->email}}</h3>
                        <h3>Objet : {{$message->object}}</h3>
                        <h4>Message : </h4>
                        <div class="message">
                            {{$message->message}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@stop