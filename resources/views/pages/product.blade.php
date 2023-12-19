@extends('layouts.app')

@section('content')

<div class="page-content">
    <div class="container-fluid">
        
      <div class="row">
        <div class="col">
          <div class="h-100">

            <div class="row mb-3 pb-1">
              <div class="col-12">

                  <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                      <div class="flex-grow-1">
                          <h4 class="fs-16 mb-1">Products List</h4>
                      </div>
                  </div>
                    {{-- end card header --}}
              </div>
              {{--end col--}}
            </div>
            {{--end row--}}

 <table class="table table-primary table-striped align-middle table-nowrap mb-0">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Product Title</th>
            <th scope="col">Quantity</th>
   
            <th scope="col">Unit Price</th>
            <th scope="col">Sale Product</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

      @foreach ($products as $product)
          
        <tr>
            <th scope="row">{{  $product->id }}</th>
            <td>{{  $product->title }}</td>
            <td>{{  $product->quantity }}</td>

            <td>{{  $product->unit_price }}</td>
            <td>
          <form action="{{ route('admin.sales.store',['id'  => $product->id]) }}" method="POST">
            @csrf
              <div class="input-group w-75">
                <input type="text" class="form-control" name="saleQuantity" id="saleQuantity" placeholder="Enter Product Quantity">
                <button class="btn btn-success" type="submit" >Sale</button>
            </div>
              </form>
            </td>

            <td>
              <a class="btn btn-primary" href="{{ route('admin.priceUpdate', ['id' => $product->id]) }}" >Edit Price</a>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>
            {{-- end row--}}


          </div>
          {{-- end .h-100--}}
        </div>
        {{-- end col --}}
      </div>
    </div>
    {{-- container-fluid --}}
  </div>
    
@endsection