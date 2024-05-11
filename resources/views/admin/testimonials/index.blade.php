@extends('admin.master')


@section('title',__('keywords.testimonials'))

@section('content')


<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="page-title-box d-sm-flex alighn-item-center  justify-content-between mb-3">
            <h2 class="h5 page-title">{{__('keywords.testimonials')}}</h2>
            <div class="page-title-right">
                <a href="{{route('admin.testimonials.create')}}" class="btn  btn-warning">{{__("keywords.add_new")}}</a>

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
                      <th >{{__('keywords.name')}}</th>
                      <th >{{__('keywords.position')}}</th>
                      <th width="25%">{{__('keywords.image')}}</th>
                      <th width="25%">{{__('keywords.action')}}</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (count($testimonials)>0)
                    @foreach ( $testimonials as $key => $testimonial )



                    <tr>
                        <td>{{$testimonials->firstItem() + $loop->index}}</td>
                        <td>{{$testimonial->name}}</td>
                        <td>{{$testimonial->position}}</td>
                        <td>
                            <img src="{{asset("storage/$testimonial->image")}}" alt="#" width="50px">
                        </td>

                        <td>
                            <a href="{{route('admin.testimonials.edit',$testimonial)}}" class="btn btn-sm btn-success">

                                <li class="fe fe-edit fa-2x"></li>
                            </a>

                            <a href="{{route('admin.testimonials.show', $testimonial)}}" class="btn btn-sm  btn-primary">

                                <li class="fe fe-eye fa-2x"></li>
                            </a>

                            <form  class="d-inline" action="{{route('admin.testimonials.destroy',$testimonial)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit"  class="btn btn-sm  btn-danger"> <li class="fe fe-trash-2 fa-2x"></li></button>
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
                {{$testimonials->render('pagination::bootstrap-4')}}
              </div>
            </div>
          </div>
@endsection