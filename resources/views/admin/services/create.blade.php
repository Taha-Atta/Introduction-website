@extends('admin.master')


@section('title', __('keywords.create_services'))

@section('content')


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex alighn-item-center  justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.create_services') }}</h2>
                    <div class="page-title-right">
                        <a href="{{ route('admin.services.index') }}" class="btn  btn-warning">{{ __('keywords.back') }}</a>
                    </div>
                </div>
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <form action="{{ route('admin.services.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="row">
                                    <div class="col-md-6">
                                        <x-form-lable name="title"></x-form-lable>
                                        <input type="text" id="example-email" name="title" class="form-control"
                                            placeholder="{{ __('keywords.title') }}">
                                            <x-form-error name="title"> </x-form-error>

                                    </div>
                                    <div class="col-md-6">

                                        <x-form-lable name="icon"></x-form-lable>
                                        <input type="text" name="icon" class="form-control"
                                            placeholder="{{ __('keywords.icon') }}">
                                            <x-form-error name="icon"> </x-form-error>

                                    </div>
                                    <div class="col-md-12">
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
