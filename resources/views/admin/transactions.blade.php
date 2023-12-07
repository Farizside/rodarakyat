@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <h6>Transactions</h6>
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
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Time End</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Payment Proof</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($transactions as $transactions)
                <tr>
                  <td class="mb-0 text-sm px-4 py-1">{{ $transactions -> name }}</td>
                  <td class="mb-0 text-sm px-4 py-1">{{ $transactions -> license_plate }}</td>
                  <td class="mb-0 text-sm px-4 py-1">{{ $transactions -> car_type }}</td>
                  <td class="mb-0 text-sm px-4 py-1">{{ $transactions -> duration }}</td>
                  <td class="mb-0 text-sm px-4 py-1">{{ $transactions -> time_start }}</td>
                  <td class="mb-0 text-sm px-4 py-1">{{ $transactions -> time_end }}</td>
                  <td class="mb-0 text-sm px-4 py-1">{{ $transactions -> total }}</td>
                  <td class="mb-0 text-sm px-4 py-1">{{ $transactions -> paymet_proof }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection