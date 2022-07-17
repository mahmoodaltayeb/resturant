        @extends('admin.layouts.master')
        @section('dash')
        Tables
        @endsection
        @section('title')
        Tables
        @endsection
        @section('body')






        <div class="container-fluid py-4">
          <div class="row">
            <div class="col-12">
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="shadow-primary border-radius-lg pt-4 pb-3 bg-gradient-dark shadow-color">
                    <h6 class="text-white text-capitalize ps-3">Add table</h6>
                  </div>
                </div>
                <div class="card-body px-0 pb-2">


                  <div class="row">  
                    <div class="form-border rounded mt-2">
                     <form role="form" action="{{route('tables.store')}}" role="form" class="mt-4 m-5">
                      @csrf
                      <div class="row"> 
                       <div class="col">
                        <label class="form-label">table number</label>
                        <div class="input-group input-group-outline mb-3">
                          <input name="table_number" type="text" class="form-control">
                        </div>
                      </div>
                    </div>

                      <div class="row"> 
                       <div class="col">
                        <label class="form-label">booking status</label>
                        <div class="input-group input-group-outline mb-3">
                          <input name="booking_status" type="text" class="form-control">
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