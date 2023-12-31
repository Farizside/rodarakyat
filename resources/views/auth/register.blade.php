<!--
=========================================================
* Soft UI Dashboard - v1.0.7
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
@extends('layouts.assets')
  <!-- Navbar -->
<body>
@section('content')
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
    <div class="container">
      <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="{{route('/')}}">
        Roda Rakyat
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav mx-auto ms-xl-auto me-xl-3">
          <li class="nav-item">
            <a class="nav-link me-2" href="{{route('register')}}">
              <i class="fas fa-user-circle opacity-6  me-1"></i>
              Register
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="{{route('login')}}">
              <i class="fas fa-key opacity-6  me-1"></i>
              Login
            </a>
          </li>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <main class="main-content  mt-0">
    <section class="min-vh-70 mb-n5">
      <div class="page-header align-items-start min-vh-50 pt-5 m-3 mb-n12 border-radius-lg" style="background-image: url('{{asset('img/curved-images/curved14.jpg')}}');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 text-center mx-auto">
              <h1 class="text-white mb-2 mt-5">Welcome!</h1>
              <p class="text-lead text-white">Roda Rakyat</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-lg-n12 mt-md-n11 mt-n10">
          <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0 mb-5">
              <div class="card-body">
                <form role="form text-left" method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="mb-3">
                    <input type="text" placeholder="Name" aria-label="Name" aria-describedby="email-addon" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                  </div>
                  <div class="mb-3">
                    <input type="text" placeholder="NIK" aria-label="nik" aria-describedby="email-addon" id="nik" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" required autocomplete="nik" autofocus>
                  </div>
                  <div class="mb-3">
                    <input type="text" placeholder="Alamat" aria-label="alamat" aria-describedby="email-addon" id="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>
                  </div>
                  <div class="mb-3">
                    <input type="text" placeholder="No Handphone" aria-label="no_hp" aria-describedby="email-addon" id="no_hp" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp" autofocus>
                  </div>
                  <div class="mb-3">
                    <input type="email" placeholder="Email" aria-label="Email" aria-describedby="email-addon"id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                  </div>
                  <div class="mb-3">
                    <input type="password" placeholder="Password" aria-label="Password" aria-describedby="password-addon" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                  </div>
                  <div class="mb-3">
                    <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div>
                  <div class="form-check form-check-info text-left">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                    <label class="form-check-label" for="flexCheckDefault">
                      I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                    </label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">
                      {{ __('Register') }}
                    </button>
                  </div>
                  <p class="text-sm mt-3 mb-0">Already have an account? <a href="{{route('login')}}" class="text-dark font-weight-bolder">Sign in</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection