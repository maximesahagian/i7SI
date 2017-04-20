@extends('layouts.admin')
@section('content')
<div class="main-content news texts-admin">
    <div class="container-fluid">
        <!-- OVERVIEW -->
        <div class="panel panel-headline">
            <div class="panel-heading">
                <h3 class="panel-title">Titres et textes du site</h3>
            </div>
            <div class="panel-body">
                <form method="post" action="/admin/texts/edit">
                    {{csrf_field()}}
                    @foreach($texts as $text)
                    <div class="row">
                        <h2>{{$text->libelle}}</h2>
                        <div class="before"></div>
                        <textarea name="{{$text->id}}" id="text-{{$text->id}}" cols="30"
                                  rows="10">{{$text->text}}</textarea>
                    </div>
                    @endforeach
                    <input type="submit" class="btn btn-success" value="Valider">
                </form>
            </div>
        </div>
    </div>
</div>

@stop