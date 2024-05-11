@extends('admin.master')


@section('title',__('keywords.subscribers'))

@section('content')


<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="page-title-box d-sm-flex alighn-item-center  justify-content-between mb-3">
            <h2 class="h5 page-title">{{__('keywords.subscribers')}}</h2>

        </div>
        <div class="col-md-12 my-4">
            <div class="card shadow">
              <div class="card-body">

                <x-success></x-success>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th width="5%">#</th>

                      <th >{{__('keywords.email')}}</th>

                      <th width="15%">{{__('keywords.action')}}</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (count($subscribers)>0)
                    @foreach ( $subscribers as $key => $subscriber )

                    <tr>
                        <td>{{$subscribers->firstItem() + $loop->index}}</td>

                        <td>{{$subscriber->email}}</td>


                        <td>




                            <form  class="d-inline" action="{{route('admin.subscribers.destroy',$subscriber)}}" method="post">
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
                {{$subscribers->render('pagination::bootstrap-4')}}
              </div>
            </div>
          </div>
@endsection