@extends('layout.detaillayout')
@section('main_content')

  <div class="container p-5 my-5 bg-dark text-white">
    <h1>Store Details</h1>
  </div>

  <div class="offcanvas offcanvas-start" id="demo">
    <div class="offcanvas-header">
      <h2 class="offcanvas-title">K-Market's Story</h2>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <p class="kev">K-Market is an online marketplace and clothing reseller, primarily of sneakers. 
        Since November 2020, it has also opened up to electronic products such as game consoles, smartphones, computer hardware and our newest feature is food. 
        The Indonesia-based company was founded by Kevin William by himself in 2015–2016.</p>
    </div>
  </div>

  <div class="main-body">
        <div class="row gutters-sm">
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                  <img src="/img/Travis.png" alt="Admin" class="rounded-circle" width="165">
                  <div class="mt-3">
                    <h4 class="kev">{{ $store['store'] }}</h4>
                    <p class="text-secondary mb-1">K-Market Online Market Place</p>
                    <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mt-3">
              <ul class="list-group list-group-flush">
                <h3 class="text">K-Market Card</h3>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                  <span class="text-secondary">K-Market</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0"> Contact us at </h6>
                  <span class="text-secondary">(0541)-742231</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Short Story of K-Market</h6>
                  <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
                    Open Story
                  </button>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-8">
            <div class="kev card mb-3">
              <div class="card-body">
                  <div class="col-sm-3">
                    <h6 class="kev mb-0">Store Name : {{ $store['store'] }}</h6>
                  </div>
                <hr>
                  <div class="col-sm-3">
                    <h6 class="kev mb-0">Full Name : {{ $store->ownerforeign->fullname}} </h6>
                  </div>
                <hr>
                  <div class="kev col-sm-3">
                    <h6 class="mb-0">Founded on: {{ $store['datestore'] }}</h6>
                  </div>
                <hr>
                  <div class="kev col-sm-3">
                    <h6 class="mb-0">Type of the Store : {{ $store['typestore'] }}</h6>
                  </div>
                <hr>
                  <div class="kev col-sm-3">
                    <h6 class="mb-0">Description Store: {{ $store['description'] }}</h6>
                  </div>
                <hr>
                  <div class="col-sm-12">
                    <a class="btn btn-info " href="{{ route('storelist.edit', $store->id) }}">Edit</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection