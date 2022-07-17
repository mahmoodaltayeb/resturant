@extends('admin.layouts.master')
@section('dash')
user roles
@endsection
@section('title')
User Roles
@endsection
@section('body')

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="shadow-primary border-radius-lg pt-4 pb-3 bg-gradient-dark shadow-color">
            <h6 class="text-white text-capitalize ps-3">Add new  user </h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="row">
            <div class="form-border rounded mt-2">
             <form role="form" action="{{url ('/users/store')}}" method="Post" class="mt-4 m-5">
              @csrf
              <div class="row"> 
               <div class="col">
                <label class="form-label">First name</label>
                <div class="input-group input-group-outline mb-3">
                  <input type="text" name="first_name" class="form-control">
                </div>
              </div>
              <div class="col">
                <label class="form-label">Last name</label>
                <div class="input-group input-group-outline mb-3">
                  <input name="last_name" type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="row"> 
             <div class="col">
              <label class="form-label">birthday</label>
              <div class="input-group input-group-outline mb-3">
                <input name="birthday" type="date" class="form-control">
              </div>
            </div>
            <div class="col">
              <label class="form-label">gender</label>
              <div class="input-group input-group-outline mb-3">
      
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
                <label class="form-check-label" for="inlineRadio1">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Female">
                <label class="form-check-label" for="inlineRadio1">Female</label>
              </div>

              </div>
            </div>
          </div>
          <div class="row"> 
           <div class="col">
            <label class="form-label">email</label>
            <div class="input-group input-group-outline mb-3">
              <input name="email" type="text" class="form-control">
            </div>
          </div>
          <div class="col">
            <label class="form-label">phone number</label>
            <div class="input-group input-group-outline mb-3">
              <input name="phone" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="row"> 
         <div class="col">
          <label class="form-label">Password</label>
          <div class="input-group input-group-outline mb-3">
            <input name="password" type="Password" class="form-control">
          </div>
        </div>
        <div class="col">
          <label class="form-label">Re Password</label>
          <div class="input-group input-group-outline mb-3">
            <input type="password" class="form-control">
          </div>
        </div>
      </div>
      <div class="row"> 
       <div class="col-5">
        <label for="exampleFormControlSelect1">City</label> 
        <div class="input-group input-group-outline mb-3 select-width">
         <div class="form-group">
          <!--<label for="exampleFormControlSelect1">City</label> -->
          <select name="city" class="form-control " id="city">
            @foreach($cities as $city)
            <option value="" disabled selected hidden>Please Choose...</option>
            <option value="{{$city->id}}">{{ $city->name }}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>
    <div class="col-5">
      <label for="exampleFormControlSelect1">District</label>
      <div class="input-group input-group-outline mb-3 select-width">
       <div class="form-group">

        <select name="district_id" class="form-control" id="district">
        <option value=""></option>
        </select>
      </div>
    </div>
  </div>
  <div class="col-2">
    <label for="exampleFormControlSelect1">role</label>
    <div class="input-group input-group-outline mb-3 select-width">
     <div class="form-group">
      <!--<label for="exampleFormControlSelect1">District</label> -->     
      <select name="role_id" class="form-control" id="role">
        @foreach($roles as $role)
        <option value="{{$role->id}}">{{$role->name}}</option>
        @endforeach 
      </select>
    </div>
  </div>
</div>
</div>
<div class="text-center mb-3">
  <button type="submit" class="btn btn-lg  btn-lg  mt-4 mb-0 bg-gradient-dark">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>




@endsection