        @extends('admin.layouts.master')
        @section('dash')
        categories
        @endsection
        @section('title')
        categories 
        @endsection
        @section('body')
        <div class="container-fluid py-4">
          <div class="row">
            <div class="col-12">
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="shadow-primary border-radius-lg pt-4 pb-3 bg-gradient-dark shadow-color">
                    <h6 class="text-white text-capitalize ps-3">Add new image</h6>
                  </div>
                </div>
                <div class="card-body px-0 pb-2">
                  <div class="container">
                    <form method="POST" action="{{route('mealimages.store')}}" 
                    enctype="multipart/form-data">
                    @csrf
                    <div class="image">
                      <input type="file" class="form-control" required name="path">
                    </div>
                    <div class="col-4">
                    <select name="meal_id" class="form-control" id="role">
                      @foreach($meals as $meal)
                      <option value="{{$meal->id}}">{{ $meal->name }}</option>
                      @endforeach 
                    </select>
                    </div>
                  </div>
                  <div class="text-center mb-3">
                    <button type="submit  " class="btn btn-lg  btn-lg  mt-4 mb-0 bg-gradient-dark">Submit</button>
                  </div>
                </div>
              </form>
            </div>     
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




@endsection