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
                    <div class="row messages">
                        @foreach($messages as $message)

                            <div class="col-sm-4 block-content">
                                <div class="metric">
                                    <a class="title-new" href="/admin/messages/{{$message->id}}">
                                        {{$message->firstname}}<br>
                                        {{$message->lastname}}<br>
                                    </a>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <a href="/admin/messages/{{$message->id}}">
                                            <button class="btn btn-alert view">Visualiser</button>
                                        </a>
                                    </div>
                                    <div class="col-xs-6">
                                        <button to-delete="{{$message->id}}" class="btn btn-danger delete">
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
    </div>

    <script src="/js/jquery/jquery-2.1.0.js"></script>

    <script>
        $('.messages .delete').click(function(){
            var id = $(this).attr('to-delete');

            $.post('/admin/messages/delete/'+id,
                {
                    '_token': $('meta[name=csrf-token]').attr('content'),
                    id: id
                })
                .error(
                    //
            )
            .success(function(){
                    location.reload();
            }
            );
        })
    </script>

@stop