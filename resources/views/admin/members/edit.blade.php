@extends('admin.master')


@section('title', __('keywords.edit_members'))

@section('content')


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex alighn-item-center  justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.edit_members') }}</h2>
                    <div class="page-title-right">
                        <a href="{{ route('admin.members.index') }}" class="btn  btn-warning">{{ __('keywords.back') }}</a>
                    </div>
                </div>
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <form action="{{ route('admin.members.update', $member) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">
                                        <x-form-lable name="name"></x-form-lable>
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="{{ __('keywords.name') }}" value="{{ $member->name }}">
                                        <x-form-error name="position"> </x-form-error>

                                    </div>
                                    <div class="col-md-6">

                                        <x-form-lable name="position"></x-form-lable>
                                        <input type="text" name="position" class="form-control"
                                            placeholder="{{ __('keywords.position') }}" value="{{ $member->position }}">
                                        <x-form-error name="position"> </x-form-error>

                                    </div>
                                    <div class="col-md-6">
                                        <x-form-lable name="facebook"></x-form-lable>
                                        <input type="url" name="facebook" class="form-control"
                                            placeholder="{{ __('keywords.facebook') }}"  value="{{ $member->facebook }}">
                                        <x-form-error name="facebook"> </x-form-error>
                                    </div>
                                    <div class="col-md-6">
                                        <x-form-lable name="twitter"></x-form-lable>
                                        <input type="url" name="twitter" class="form-control"
                                            placeholder="{{ __('keywords.twitter') }}"  value="{{ $member->twitter }}">
                                        <x-form-error name="twitter"> </x-form-error>
                                    </div>
                                    <div class="col-md-6">
                                        <x-form-lable name="instagram"></x-form-lable>
                                        <input type="url" name="instagram" class="form-control"
                                            placeholder="{{ __('keywords.instagram') }}"  value="{{ $member->instagram }}">
                                        <x-form-error name="instagram"> </x-form-error>
                                    </div>
                                    <div class="col-md-6">
                                        <x-form-lable name="youtube"></x-form-lable>
                                        <input type="url" name="youtube" class="form-control"
                                            placeholder="{{ __('keywords.youtube') }}" value="{{ $member->youtube }}">
                                        <x-form-error name="youtube"> </x-form-error>
                                    </div>
                                    <div class="col-md-6">
                                        <x-form-lable name="linkedin"></x-form-lable>
                                        <input type="url" name="linkedin" class="form-control"
                                            placeholder="{{ __('keywords.linkedin') }}"  value="{{ $member->linkedin }}">
                                        <x-form-error name="linkedin"> </x-form-error>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <x-form-lable name="image"></x-form-lable>
                                        <input type="file" name="image" class="form-control"
                                            placeholder="{{ __('keywords.image') }}">
                                        <x-form-error name="image"> </x-form-error>

                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <x-form-lable name="old_image"></x-form-lable>
                                        <div class="div">
                                            <img src="{{ asset("storage/$member->image") }}" alt="#" width="100px">
                                        </div>
                                    </div>

                                </div>
                                <x-edit-Button> </x-edit-Button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
