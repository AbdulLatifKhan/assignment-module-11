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
                          <h4 class="fs-16 mb-1">Sale Transaction History :</h4>
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
                <div class="col-8">
                    <table class="table table-primary table-striped align-middle table-nowrap mb-0">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Product Id</th>
                                <th scope="col">Product Title</th>
                                <th scope="col">Product Quantity</th>
                                <th scope="col">Product Unit Price</th>
                                <th scope="col">Total Price</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($sales as $sale)
                            <tr>
                                <td>{{ $sale->id }}</td>
                                <td>{{ $sale->product_id }}</td>
                                <td>{{ $sale->title }}</td>
                                <td>{{ $sale->quantity }}</td>
                                <td>{{ $sale->unit_price }}</td>
                                <td>{{ $sale->total_price }}</td>
                                <td>{{ $sale->created_at}}</td>
                            </tr>
                            @endforeach
                    
                        </tbody>
                    </table>
                </div>
                <div class="col-3">

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