@extends('admin.master')


@section('title', __('keywords.show_features'))

@section('content')


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex alighn-item-center  justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.show_features') }}</h2>
                    <div class="page-title-right">
                        <a href="{{ route('admin.features.index') }}" class="btn  btn-warning">{{ __('keywords.back') }}</a>
                    </div>
                </div>
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">

                            <div class="row">
                                    <div class="col-md-6">
                                        <label for="example-email">{{ __('keywords.title') }}</label>
                                            <p class="form-control">{{$feature->title}}</p>

                                    </div>
                                    <div class="col-md-6">

                                        <label for="icon">{{ __('keywords.icon') }}</label>

                                            <div class="mt-2">
                                                <li class="fe {{$feature->icon}} fa-2x"></li>
                                            </div>


                                    </div>
                                    <div class="col-md-12">
                                        <label class="mt-2" for="Description">{{ __('keywords.description') }}</label>
                                            <p class="form-control">{{$feature->description}}</p>
                                    </div>


                            </div>
                        </div>
                    </div>
                </div>
            @endsection
