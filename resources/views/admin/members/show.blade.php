@extends('admin.master')


@section('title', __('keywords.show_members'))

@section('content')


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex alighn-item-center  justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.show_members') }}</h2>
                    <div class="page-title-right">
                        <a href="{{ route('admin.members.index') }}" class="btn  btn-warning">{{ __('keywords.back') }}</a>
                    </div>
                </div>
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-5">
                                    <x-form-lable name="name"></x-form-lable>
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="{{ __('keywords.name') }}" value="{{$member->name}}">
                                    <x-form-error name="position"> </x-form-error>

                                </div>
                                <div class="col-md-5">

                                    <x-form-lable name="position"></x-form-lable>
                                    <input type="text" name="position" class="form-control"
                                        placeholder="{{ __('keywords.position') }}" value="{{$member->position}}">
                                    <x-form-error name="position"> </x-form-error>

                                </div>

                                <div class="col-md-2 ">
                                    <x-form-lable name="image"></x-form-lable>
                                    <div class="div">
                                        <img src="{{asset("storage/$member->image")}}" alt="#" width="100px">

                                    </div>

                                </div>
                                <div class="col-md-12 mt-3">
                                    <x-form-lable name="description"></x-form-lable>
                                    <textarea name="description" class="form-control " placeholder="{{ __('keywords.description') }}"></textarea>
                                    <x-form-error name="description"> {{$member->description}}</x-form-error>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
