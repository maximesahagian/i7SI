@extends('layouts.admin')
@section('content')
    <div class="main-content news">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Les appels</h3>
                </div>
                <div class="panel-body">
                    <div class="row messages">
                        @foreach($calls as $call)

                            <div class="col-sm-4 block-content">
                                <div class="metric">
                                    <a class="title-new" href="/admin/messages/{{$call->id}}">
                                        {{$call->country}} {{$call->number}}
                                    </a>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <button to-delete="{{$call->id}}" class="btn btn-danger delete">
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

            $.post('/admin/calls/delete/'+id,
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