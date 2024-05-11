@extends('admin.master')


@section('title', __('keywords.show_messages'))

@section('content')


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex alighn-item-center  justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.show_messages') }}</h2>
                    <div class="page-title-right">
                        <a href="{{ route('admin.messages.index') }}" class="btn  btn-warning">{{ __('keywords.back') }}</a>
                    </div>
                </div>
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">

                            <div class="row">
                                    <div class="col-md-6">
                                        <label for="name">{{ __('keywords.name') }}</label>
                                            <p class="form-control">{{$message->name}}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">{{ __('keywords.email') }}</label>
                                        <p class="form-control">{{$message->email}}</p>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="subject">{{ __('keywords.subject') }}</label>
                                        <p class="form-control">{{$message->subject}}</p>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="mt-2" for="message">{{ __('keywords.message') }}</label>
                                            <p class="form-control">{{$message->message}}</p>
                                    </div>


                            </div>
                        </div>
                    </div>
                </div>
            @endsection
