        @extends('admin.layouts.master')
        @section('dash')
        Meals
        @endsection
        @section('title')
        Meals
        @endsection
        @section('body')
        <div class="container-fluid py-4">
          <div class="row">
            <div class="col-12">
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="shadow-primary border-radius-lg pt-4 pb-3 bg-gradient-dark shadow-color">
                    <h6 class="text-white text-capitalize ps-3">Add meal</h6>
                  </div>
                </div>
                <div class="card-body px-0 pb-2">
                  <div class="row">  
                    <div class="form-border rounded mt-2">
                     <form action="{{route('meals.store')}}" enctype="multipart/form-data" method="Post" role="POST" class="mt-4 m-5">
                      @csrf
                      <div class="row"> 
                       <div class="col">
                        <label class="form-label">name</label>
                        <div class="input-group input-group-outline mb-3">
                          <input name="name" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row"> 
                     <div class="col">
                      <label class="form-label">price</label>
                      <div class="input-group input-group-outline mb-3">
                        <input name="price" type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row"> 
                   <div class="col">
                    <label class="form-label">descreption</label>
                    <div class="input-group input-group-outline mb-3">
                      <input name="descreption" type="text" class="form-control ">
                    </div>
                  </div>
                </div>
                <div class="row"> 
                <div class="col-6">
                  <label for="exampleFormControlSelect1">category</label>
                  <div class="input-group input-group-outline mb-3 select-width">
                   <div class="form-group">
                    <!--<label for="exampleFormControlSelect1">District</label> -->     
                    <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                      @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <label for="exampleFormControlSelect1">Meal images</label>
                <div class="input-group input-group-outline mb-3 select-width">
                 <div class="form-group">
                  <!--<label for="exampleFormControlSelect1">District</label> -->     
                  <div class="image">
                    <input required type="file" class="btn bg-gradient-dark" multiple name="paths[]">
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
          <div class="text-center mb-3">
            <button type="submit" class="btn  mt-4 mb-0 bg-gradient-dark">Submit</button>
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