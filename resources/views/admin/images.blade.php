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
                                    <input type="file" name="image-{{$image->id}}" id="file" class="input-file">
                                    <label for="file" class="btn btn-tertiary js-labelFile">
                                        <i class="icon fa fa-check"></i>
                                        <span class="js-fileName">Choisir une image</span>
                                    </label>
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
        (function() {

            'use strict';

            $('.input-file').each(function() {
                var $input = $(this),
                    $label = $input.next('.js-labelFile'),
                    labelVal = $label.html();

                $input.on('change', function(element) {
                    var fileName = '';
                    if (element.target.value) fileName = element.target.value.split('\\').pop();
                    fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label.removeClass('has-file').html(labelVal);
                });
            });

        })();
    </script>

@stop