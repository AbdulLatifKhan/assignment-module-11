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
                          <h4 class="fs-16 mb-1">Add New Products :</h4>
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
                    <form action="{{ route('admin.product.store')}}" method="POST">
                      @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Product Title</label>
                            <input type="text" class="form-control" value="{{ old('title')}}" id="title" name="title" placeholder="Enter Product Title">
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Product Quantity</label>
                            <input type="text" class="form-control" value="{{ old('quantity')}}" id="quantity" name="quantity" placeholder="Enter Product Quantity">
                        </div>
                        <div class="mb-3">
                            <label for="Price" class="form-label">Product Unit Price</label>
                            <input type="text" class="form-control" value="{{ old('unitPrice')}}" id="Price" name="unitPrice" placeholder="Enter Product Price">
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary form-control">Add Product</button>
                        </div>
                    </form>
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