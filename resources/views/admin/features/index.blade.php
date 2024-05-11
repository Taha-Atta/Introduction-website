@extends('admin.master')


@section('title',__('keywords.features'))

@section('content')


<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="page-title-box d-sm-flex alighn-item-center  justify-content-between mb-3">
            <h2 class="h5 page-title">{{__('keywords.features')}}</h2>
            <div class="page-title-right">
                <a href="{{route('admin.features.create')}}" class="btn  btn-warning">{{__("keywords.add_new")}}</a>

            </div>
        </div>
        <div class="col-md-12 my-4">
            <div class="card shadow">
              <div class="card-body">

                <x-success></x-success>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th width="5%">#</th>
                      <th >{{__('keywords.title')}}</th>
                      <th width="10%">{{__('keywords.icon')}}</th>
                      <th width="25%">{{__('keywords.action')}}</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (count($features)>0)
                    @foreach ( $features as $key => $feature )

                    <tr>
                        <td>{{$features->firstItem() + $loop->index}}</td>
                        <td>{{$feature->title}}</td>
                        <td>
                            <li class="fe {{$feature->icon}} fa-2x"></li>
                        </td>
                        <td>
                            <a href="{{route('admin.features.edit',$feature)}}" class="btn  btn-success">

                                <li class="fe fe-edit fa-2x"></li>
                            </a>

                            <a href="{{route('admin.features.show', $feature)}}" class="btn btn-primary">

                                <li class="fe fe-eye fa-2x"></li>
                            </a>

                            <form  class="d-inline" action="{{route('admin.features.destroy',$feature)}}" method="post">
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
                {{$features->render('pagination::bootstrap-4')}}
              </div>
            </div>
          </div>
@endsection