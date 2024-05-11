@extends('admin.master')


@section('title',__('keywords.messages'))

@section('content')


<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="page-title-box d-sm-flex alighn-item-center  justify-content-between mb-3">
            <h2 class="h5 page-title">{{__('keywords.messages')}}</h2>

        </div>
        <div class="col-md-12 my-4">
            <div class="card shadow">
              <div class="card-body">

                <x-success></x-success>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th width="5%">#</th>
                      <th >{{__('keywords.name')}}</th>
                      <th >{{__('keywords.email')}}</th>
                      <th >{{__('keywords.subject')}}</th>
                      <th width="15%">{{__('keywords.action')}}</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (count($messages)>0)
                    @foreach ( $messages as $key => $message )

                    <tr>
                        <td>{{$messages->firstItem() + $loop->index}}</td>
                        <td>{{$message->name}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->subject}}</td>

                        <td>


                            <a href="{{route('admin.messages.show', $message)}}" class="btn btn-primary">

                                <li class="fe fe-eye fa-2x"></li>
                            </a>

                            <form  class="d-inline" action="{{route('admin.messages.destroy',$message)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit"  class="btn btn-danger"> <li class="fe fe-trash-2 fa-2x"></li></button>
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
                {{$messages->render('pagination::bootstrap-4')}}
              </div>
            </div>
          </div>
@endsection