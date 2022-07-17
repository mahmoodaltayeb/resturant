d@extends('admin.layouts.master')
@section('dash')
Orders
@endsection
@section('title')
User Roles
@endsection
@section('body')
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 bg-gradient-dark shadow-color">
          <h6 class="text-white text-capitalize ps-3">Orders</h6>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>
                <div class="col-lg-3 col-sm-6 col-12 mt-sm-0 mt-2 p-l-15 pb-3">
                  <a class="btn  filter bg-gradient-info" href="/create-orders" role="button">
                   <!-- <span class="material-icons">add</span>Add new order</a> -->
                 </div>
               </tr>
               <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> table-number</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">date</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">time</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">num-of-people  </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">customer-name </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">total-price  </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">quantity</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">cash or payment  </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">meals-in-order  </th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <p class="text-sm font-weight-bold mb-0">1</p>
                </td>
                <td>
                  <p class="text-sm font-weight-bold mb-0">$2,500</p>
                </td>
                <td>
                  <p class="text-sm font-weight-bold mb-0">$2,500</p>
                </td>
                <td>
                  <p class="text-sm font-weight-bold mb-0">$2,500</p>
                </td>
                <td>
                  <p class="text-sm font-weight-bold mb-0">$2,500</p>
                </td>
                <td>
                  <p class="text-sm font-weight-bold mb-0">$2,500</p>
                </td>
                <td>
                  <p class="text-sm font-weight-bold mb-0">$2,500</p>
                </td>
                <td>
                  <p class="text-sm font-weight-bold mb-0">$2,500</p>
                </td>
                <td>
                  <p class="text-sm font-weight-bold mb-0">$2,500</p>
                </td>
                
                <td class="align-middle">
                  <div class="d-flex justify-content-center ">
                    <div>
                      <a href="{{url ('/edit-orders')}}" class="" data-toggle="tooltip" data-original-title="Edit user">
                       <i class="material-icons ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="  Edit">edit</i>
                     </a></div>

                     <div>
                      <a href="{{url ('/edit-orders')}}" class="" data-toggle="tooltip" data-original-title="delete user">
                       <i class="material-icons ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="delete ">delete</i></div>
                     </a>
                   </div> 
                 </td>
               </tr>
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

