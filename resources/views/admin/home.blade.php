@extends('layouts.master')
  
@section('content')
<div class="row">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card mb-4">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Profit</p>
                <h5 class="font-weight-bolder mb-0">
                  Rp. {{ $total }}
                </h5>
            </div>
          </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Users</p>
                    <h5 class="font-weight-bolder mb-0">
                      {{ $user }}
                    </h5>
                </div>
              </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
             </div>
            </div>
          </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
  <div class="numbers">
  <p class="text-sm mb-0 text-capitalize font-weight-bold">Ready Cars</p>
  <h5 class="font-weight-bolder mb-0">
  {{ $ReadyCars }}
  </h5>
  </div>
  </div>
  <div class="col-4 text-end">
  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
  <i class="fas fa-car text-lg opacity-10" aria-hidden="true"></i>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="col-xl-3 col-sm-6">
  <div class="card">
  <div class="card-body p-3">
  <div class="row">
  <div class="col-8">
  <div class="numbers">
  <p class="text-sm mb-0 text-capitalize font-weight-bold">Not Ready Cars</p>
  <h5 class="font-weight-bolder mb-0">
  {{ $NotReadyCars }}
  </h5>
  </div>
  </div>
  <div class="col-4 text-end">
  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
  <i class="fas fa-car text-lg opacity-10" aria-hidden="true"></i>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Waiting List</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">License Plate</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Car Type</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Duration</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Payment Proof</th>
                  <th class="text-center text-uppercase text-xxs font-weight-bolder text-secondary opacity-7">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($transactions as $transaction)
                @if ($transaction -> status == "Pending")
                <tr>
                  <td class="mb-0 text-sm px-4 py-1">{{ $transaction -> name }}</td>
                  <td class="mb-0 text-sm px-4 py-1">{{ $transaction -> license_plate }}</td>
                  <td class="mb-0 text-sm px-4 py-1">{{ $transaction -> car_type }}</td>
                  <td class="mb-0 text-sm px-4 py-1">{{ $transaction -> duration }}</td>
                  <td class="mb-0 text-sm px-4 py-1">{{ $transaction -> total }}</td>
                  <td class="mb-0 text-sm px-4 py-1">{{ $transaction -> paymet_proof }}</td>
                  <td class="align-middle text-center">
                    <form action="/admin/home/{{ $transaction->id }}" method="POST" class="">
                      @method('put')
                      @csrf
                      <button type="submit" class="btn btn-primary align-middle my-1">Accept</button>
                    </form>
                  </td>
                </tr>
                @endif
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>On Going</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">License Plate</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Car Type</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Duration</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Time Start</th>
                  <th class="text-center text-uppercase text-xxs font-weight-bolder text-secondary opacity-7">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($transactions as $transaction)
                @if ($transaction -> status == "Unfinished")
                  <tr>
                    <td class="mb-0 text-sm px-4 py-1">{{ $transaction -> name }}</td>
                    <td class="mb-0 text-sm px-4 py-1">{{ $transaction -> license_plate }}</td>
                    <td class="mb-0 text-sm px-4 py-1">{{ $transaction -> car_type }}</td>
                    <td class="mb-0 text-sm px-4 py-1">{{ $transaction -> duration }}</td>
                    <td class="mb-0 text-sm px-4 py-1">{{ $transaction -> time_start }}</td>
                    <td class="align-middle text-center">
                        <form action="/admin/home/{{ $transaction->id }}" method="POST" class="">
                          @method('put')
                          @csrf
                          <button type="submit" class="btn btn-primary align-middle">Submit</button>
                        </form>
                      </td>
                  </tr>
                @endif
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection