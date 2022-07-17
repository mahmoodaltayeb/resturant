        @extends('admin.layouts.master')
        @section('dash')
        Districts
        @endsection
        @section('title')
        Districts
        @endsection
        @section('body')






        <div class="container-fluid py-4">
          <div class="row">
            <div class="col-12">
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="shadow-primary border-radius-lg pt-4 pb-3 bg-gradient-dark shadow-color">
                    <h6 class="text-white text-capitalize ps-3">Edit District </h6>
                  </div>
                </div>
                <div class="card-body px-0 pb-2">
                  <div class="row">  
                    <div class="form-border rounded mt-2">
                     <form action="{{route('districts.update',$districts->id)}}" method="POST" role="form" class="mt-4 m-5">
                      @csrf
                      @method('PUT')
                      <div class="row"> 
                       <div class="col">
                        <label class="form-label">District name</label>
                        <div class="input-group input-group-outline mb-3">
                          <input name="name" value="{{$districts->name}}" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-6">
                  <label for="exampleFormControlSelect1">category</label>
                  <div class="input-group input-group-outline mb-3 select-width">
                   <div class="form-group">
                    <!--<label for="exampleFormControlSelect1">District</label> -->     
                    <select name="city_id" class="form-control" id="exampleFormControlSelect1">
                      @foreach($cities as $city)
                      <option value="{{$city->id}}" 
                       @if($city->id == $districts->category_id) selected @endif > {{ $city->name }}
                     </option>
                     @endforeach 
                   </select>
                 </div>
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