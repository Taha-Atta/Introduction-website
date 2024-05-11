@extends('admin.master')


@section('title', __('keywords.create_testimonials'))

@section('content')


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex alighn-item-center  justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.create_testimonials') }}</h2>
                    <div class="page-title-right">
                        <a href="{{ route('admin.testimonials.index') }}" class="btn  btn-warning">{{ __('keywords.back') }}</a>
                    </div>
                </div>
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <form action="{{ route('admin.testimonials.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="row">
                                    <div class="col-md-6">
                                        <x-form-lable name="name"></x-form-lable>
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="{{ __('keywords.name') }}">
                                            <x-form-error name="position"> </x-form-error>

                                    </div>
                                    <div class="col-md-6">

                                        <x-form-lable name="position"></x-form-lable>
                                        <input type="text" name="position" class="form-control"
                                            placeholder="{{ __('keywords.position') }}">
                                            <x-form-error name="position"> </x-form-error>

                                    </div>
                                    <div class="col-md-12 mt-3" >

                                        <x-form-lable name="image"></x-form-lable>
                                        <input type="file" name="image" class="form-control"
                                            placeholder="{{ __('keywords.image') }}">
                                            <x-form-error name="image"> </x-form-error>

                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <x-form-lable name="description"></x-form-lable>
                                            <textarea name="description" class="form-control " placeholder="{{ __('keywords.description') }}"></textarea>
                                            <x-form-error name="description"> </x-form-error>
                                    </div>
                                        <x-submit-Button> </x-submit-Button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            @endsection
