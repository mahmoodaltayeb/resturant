        @extends('admin.layouts.master')
        @section('dash')
        Edit role
        @endsection
        @section('title')
        Edit role
        @endsection
        @section('body')






        <div class="container-fluid py-4">
          <div class="row">
            <div class="col-12">
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="shadow-primary border-radius-lg pt-4 pb-3 bg-gradient-dark shadow-color">
                    <h6 class="text-white text-capitalize ps-3">Edit role </h6>
                  </div>
                </div>
                <div class="card-body px-0 pb-2">


                  <div class="row">  
                    <div class="form-border rounded mt-2">
                     <form action="{{route('categories.update',$categories->id)}}" method="POST" role="form" class="mt-4 m-5">
                      @csrf
                      @method('PUT')
                      <div class="row"> 
                       <div class="col">
                        <label class="form-label">Category name</label>
                        <div class="input-group input-group-outline mb-3">
                          <input name="name" value="{{$categories->name}}" type="text" class="form-control">
                        </div>
                      </div>
                    </div>

                  <div class="container">
                    <form method="post" action="{{ route('images.store') }}" 
                      enctype="multipart/form-data">
                      @csrf
                      <div class="image">
                        <label><h4>Add image</h4></label>
                        <input type="file" class="form-control" required name="image">
                      </div>

                      <div class="post_button">
                        <button type="submit" class="btn btn-success">Add</button>
                      </div>
                    </form>
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