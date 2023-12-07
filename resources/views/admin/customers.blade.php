@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <h6>Customers</h6>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIK</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone Number</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Address</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($customers as $customer)
                <tr>
                  <td class="mb-0 text-sm px-4 py-1">{{ $customer -> name }}</td>
                  <td class="mb-0 text-sm px-4 py-1">{{ $customer -> nik }}</td>
                  <td class="mb-0 text-sm px-4 py-1">{{ $customer -> no_hp }}</td>
                  <td class="mb-0 text-sm px-4 py-1">{{ $customer -> alamat }}</td>
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