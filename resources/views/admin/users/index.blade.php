@extends('admin.layouts.master')
@section('dash')
users 
@endsection
@section('title')
Users
@endsection
@section('body')
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 bg-gradient-dark shadow-color">
          <h6 class="text-white text-capitalize ps-3">Users</h6>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>
                <div class="col-lg-3 col-sm-6 col-12 mt-sm-0 mt-2 p-l-15 pb-3">
                  <a class="btn  filter bg-gradient-info" href="{{url('users/create')}}" role="button">
                   <span class="material-icons">add</span>Add new user </a>
                 </div>
               </tr>
               <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">name</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> birthday</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> gender</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> email</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> phone_number</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">city</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">district</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
              <tr>
                <td>
                  <p class="text-sm font-weight-bold mb-0">{{ $user->first_name }}  {{ $user->last_name }}</p>
                </td>
                <td>
                  <p class="text-sm font-weight-bold mb-0">{{ $user->birthday }}</p>
                </td>
                <td>
                  <p class="text-sm font-weight-bold mb-0">{{ $user->gender }}</p>
                </td>
                <td>
                  <p class="text-sm font-weight-bold mb-0">{{ $user->email }}</p>
                </td>
                <td>
                  <p class="text-sm font-weight-bold mb-0">{{ $user->phone }}</p>
                </td>
                <td>
                 <p class="text-sm font-weight-bold mb-0">{{ $user->district->city->name }}</p>
               </td>
               <td>
                <p class="text-sm font-weight-bold mb-0">{{ $user->district->name}}</p> 
              </td>

              <td class="align-middle">
                <div class="d-flex justify-content-center ">
                  <div>
                    <a href="{{url ('/users/edit')}}/{{$user->id}}" class="" data-toggle="tooltip" data-original-title="Edit user">
                     <i class="material-icons ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="  Edit">edit</i>
                   </a>
                 </div>
                   <div>
                     <form action="{{url ('/users/destroy')}}/{{$user->id}}" method="get">
                      @method('DELETE')
                      @csrf
                     <button><i class="material-icons ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="delete ">delete</i> </button>
                     </form>
                   </div>
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

