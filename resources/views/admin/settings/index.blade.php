@extends('admin.master')


@section('title', __('keywords.edit_settings'))

@section('content')


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex alighn-item-center  justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.edit_settings') }}</h2>
                </div>
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <x-success></x-success>
                            <form action="{{ route('admin.settings.update', $setting) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <x-form-lable name="address"></x-form-lable>
                                        <input type="text"  name="address" class="form-control"
                                            placeholder="{{ __('keywords.address') }}" value="{{ $setting->address }}">
                                        <x-form-error name="address"> </x-form-error>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <x-form-lable name="email"></x-form-lable>
                                        <input type="email"  name="email" class="form-control"
                                            placeholder="{{ __('keywords.email') }}" value="{{ $setting->email }}">
                                        <x-form-error name="email"> </x-form-error>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <x-form-lable name="phone"></x-form-lable>
                                        <input type="text"  name="phone" class="form-control"
                                            placeholder="{{ __('keywords.phone') }}" value="{{ $setting->phone }}">
                                        <x-form-error name="phone"> </x-form-error>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <x-form-lable name="facebook"></x-form-lable>
                                        <input type="url"  name="facebook" class="form-control"
                                            placeholder="{{ __('keywords.facebook') }}" value="{{ $setting->facebook }}">
                                        <x-form-error name="facebook"> </x-form-error>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <x-form-lable name="twitter"></x-form-lable>
                                        <input type="url"  name="twitter" class="form-control"
                                            placeholder="{{ __('keywords.twitter') }}" value="{{ $setting->twitter }}">
                                        <x-form-error name="twitter"> </x-form-error>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <x-form-lable name="youtube"></x-form-lable>
                                        <input type="url"  name="youtube" class="form-control"
                                            placeholder="{{ __('keywords.youtube') }}" value="{{ $setting->youtube }}">
                                        <x-form-error name="youtube"> </x-form-error>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <x-form-lable name="linkedin"></x-form-lable>
                                        <input type="url"  name="linkedin" class="form-control"
                                            placeholder="{{ __('keywords.linkedin') }}" value="{{ $setting->linkedin }}">
                                        <x-form-error name="linkedin"> </x-form-error>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <x-form-lable name="instagram"></x-form-lable>
                                        <input type="url"  name="instagram" class="form-control"
                                            placeholder="{{ __('keywords.instagram') }}" value="{{ $setting->instagram }}">
                                        <x-form-error name="instagram"> </x-form-error>
                                    </div>


                                    <x-edit-Button></x-edit-Button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        @endsection
