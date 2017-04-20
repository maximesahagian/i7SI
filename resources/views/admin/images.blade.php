@extends('layouts.admin')
@section('content')
    <div class="main-content news">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline images-admin">
                <div class="panel-heading">
                    <h3 class="panel-title">Images du site</h3>
                </div>
                <div class="panel-body">
                        @foreach($images as $image)
                        <form method="post" action="/admin/images/edit/{{$image->id}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <h2>{{$image->libelle}}</h2>
                                <div class="image" style="background-image: url('/images/{{$image->link}}'); width: 450px; height: 250px; background-size: cover;"></div>
                                <div class="form-group">
                                    <input type="file" name="image" id="file" class="input-file">
                                </div>
                                <input type="submit" class="btn btn-success" value="Éditer">
                            </div>
                        </form>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    <script>

    </script>

@stop