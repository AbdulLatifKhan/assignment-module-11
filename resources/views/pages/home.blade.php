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
                          <h4 class="fs-16 mb-1">Overall Sales Update</h4>
                      </div>
                  </div>
                    {{-- end card header --}}
              </div>
              {{--end col--}}
            </div>
            {{--end row--}}

            <div class="row">

              <div class="col-xl-3 col-md-6">

                {{-- card --}}
                <div class="card card-animate">
                  <div class="card-body">
                    <div class="d-flex align-items-center">

                      <div class="flex-grow-1 overflow-hidden">
                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                          Today's sales
                        </p>
                      </div>


                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                      <div>
                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                         $ {{$todaySaleAmount}} K
                        </h4>
                      </div>
                    </div>
                  </div>
                  {{-- end card body --}}
                </div>
                {{-- end card --}}

              </div>

              <div class="col-xl-3 col-md-6">
                {{-- card --}}
                <div class="card card-animate">
                  <div class="card-body">
                    <div class="d-flex align-items-center">

                      <div class="flex-grow-1 overflow-hidden">
                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                          Yesterday sales
                        </p>
                      </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                      <div>
                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                         $ {{$yesterdaySaleAmount}} K
                        </h4>
                      </div>
                    </div>
                  </div>
                  {{-- end card body --}}
                </div>
                {{-- end card --}}

              </div>
              <div class="col-xl-3 col-md-6">
                {{-- card --}}
                <div class="card card-animate">
                  <div class="card-body">
                    <div class="d-flex align-items-center">

                      <div class="flex-grow-1 overflow-hidden">
                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                          This Month sales
                        </p>
                      </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                      <div>
                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                         $ {{$thisMonthSaleAmount}} K
                        </h4>
                      </div>
                    </div>
                  </div>
                  {{-- end card body --}}
                </div>
                {{-- end card --}}

              </div>
              <div class="col-xl-3 col-md-6">
                {{-- card --}}
                <div class="card card-animate">
                  <div class="card-body">
                    <div class="d-flex align-items-center">

                      <div class="flex-grow-1 overflow-hidden">
                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                          This Year sales
                        </p>
                      </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                      <div>
                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                         $ {{$thisYearSaleAmount}} K
                        </h4>
                      </div>
                    </div>
                  </div>
                  {{-- end card body --}}
                </div>
                {{-- end card --}}

              </div>
              {{-- end col --}}
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