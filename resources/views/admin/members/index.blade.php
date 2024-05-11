@extends('admin.master')


@section('title', __('keywords.members'))

@section('content')


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex alighn-item-center  justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.members') }}</h2>
                    <div class="page-title-right">
                        <a href="{{ route('admin.members.create') }}"
                            class="btn  btn-warning">{{ __('keywords.add_new') }}</a>

                    </div>
                </div>
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">

                            <x-success></x-success>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('keywords.name') }}</th>
                                        <th>{{ __('keywords.position') }}</th>
                                        <th>{{ __('keywords.facebook') }}</th>
                                        <th>{{ __('keywords.twitter') }}</th>
                                        {{-- <th>{{ __('keywords.youtube') }}</th> --}}
                                        {{-- <th>{{ __('keywords.linkedin') }}</th>
                                        <th>{{ __('keywords.instagram') }}</th> --}}
                                        <th>{{ __('keywords.image') }}</th>
                                        <th>{{ __('keywords.action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($members) > 0)
                                        @foreach ($members as $key => $member)
                                            <tr>
                                                <td>{{ $loop->index }}</td>
                                                <td>{{ $member->name }}</td>
                                                <td>{{ $member->slug }}</td>
                                                <td>{{ $member->facebook }}</td>
                                                <td>{{ $member->twitter }}</td>
                                                {{-- <td>{{ $member->youtube }}</td> --}}
                                                {{-- <td>{{ $member->linkedin }}</td>
                                                <td>{{ $member->instagram }}</td> --}}

                                                <td>
                                                    <img src="{{ asset("storage/$member->image") }}" alt="#"
                                                        width="50px">
                                                </td>

                                                <td>
                                                    {{-- @php
                                                        $slug = Illuminate\Support\Str::slug( $member->name, '-');
                                                    @endphp --}}
                                                    <a href="{{ route('admin.members.edit', $member) }}"
                                                        class="btn btn-sm btn-success">

                                                        <li class="fe fe-edit fa-2x"></li>
                                                    </a>

                                                    <a href="{{ route('admin.members.show', $member) }}"
                                                        class="btn btn-sm  btn-primary">

                                                        <li class="fe fe-eye fa-2x"></li>
                                                    </a>

                                                    <form class="d-inline"
                                                        action="{{ route('admin.members.destroy', $member) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm  btn-danger">
                                                            <li class="fe fe-trash-2 fa-2x"></li>
                                                        </button>
                                                    </form>

                                                </td>

                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>

                                            <x-alert-danger></x-alert-danger>
                                        </tr>

                                    @endif
                                </tbody>
                            </table>
                            {{-- {{$members->render('pagination::bootstrap-4')}} --}}
                        </div>
                    </div>
                </div>
            @endsection
