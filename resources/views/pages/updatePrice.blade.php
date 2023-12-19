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
                          <h4 class="fs-16 mb-1">Update Product Price :</h4>
                      </div>
                  </div>
                    {{-- end card header --}}
              </div>
              {{--end col--}}
            </div>
            {{--end row--}}
            <div class="row mb-3 pb-1">
                <div class="col-1">

                </div>
                <div class="col-6">


@foreach($products as $product)

                    <p>Product Name : {{ $product->title}}</p>
                   
                    <form action="{{ route('admin.updatePriceStore') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="employeeUrl" class="form-label"> </label>
                            <input type="hidden" class="form-control" name="id" id="id" value="{{$product->id}}">
                        </div>
                        <div class="mb-3">
                            <label for="employeeUrl" class="form-label">Product Price : </label>
                            <input type="text" class="form-control" name="price" id="price" value="{{$product->unit_price}}" placeholder="Enter Product Category">
                        </div>
        
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary form-control">Update Price</button>
                        </div>
                    </form>
@endforeach
                </div>
                <div class="col-5">

                </div>
                {{--end col--}}
              </div>

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