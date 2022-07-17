@extends('admin.layouts.master')
@section('dash')
cities
@endsection
@section('title')
cities
@endsection
@section('body')
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 bg-gradient-dark shadow-color">
          <h6 class="text-white text-capitalize ps-3">cities</h6>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>
                <div class="col-lg-3 col-sm-6 col-12 mt-sm-0 mt-2 p-l-15 pb-3">
                  <a class="btn  filter bg-gradient-info" href="{{ route('cities.create') }}" role="button">
                   <span class="material-icons">add</span>Add new City</a>
                 </div>
               </tr>
               <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">id</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">name</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($cities as $city)
              <tr>
                <td>
                  <p class="text-sm font-weight-bold mb-0">{{$city->id}}</p>
                </td>
                <td>
                  <p class="text-sm font-weight-bold mb-0">{{$city->name}}</p>
                </td>
                <td class="align-middle">
                      <div class="d-flex justify-content-center ">
                          <div>
                          <a href="{{ route('cities.edit',$city->id)}}" class="" data-toggle="tooltip" data-original-title="Edit user">
                           <i class="material-icons ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="  Edit">edit</i>
                          </a></div>

                             <div>
                            <a href="" class="" data-toggle="tooltip" data-original-title="delete user">
                           <i class="material-icons ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="delete ">delete</i></div>
                          </a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                    <tr>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection

