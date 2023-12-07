@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header container-fluid pb-0"> 
        <h6 class="float-start">Cars</h6>
        <a href="{{route('cars.create')}}" class="btn btn-primary float-end">Add</a>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">License Plate</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Car Type</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Capacity</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                <th class="text-center text-uppercase text-xxs font-weight-bolder text-secondary opacity-7">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($cars as $car)
                <tr>
                  <td class="mb-0 text-sm px-4 py-1">{{ $car -> license_plate }}</td>
                  <td class="mb-0 text-sm px-4 py-1">{{ $car -> car_type }}</td>
                  <td class="text-center">{{ $car -> price }}</td>
                  <td class="text-center">{{ $car -> capacity }}</td>
                  <td class="align-middle text-center">
                    @if ($car -> status == 'Ready')
                      <span class="badge badge-sm bg-gradient-success px-4">{{ $car -> status }}</span>
                    @else
                      <span class="badge badge-sm bg-gradient-secondary">{{ $car -> status }}</span>
                    @endif
                  </td>
                  <td class="align-middle text-center">
                    <a href="/admin/cars/{{ $car->id }}/edit" class="btn btn-warning my-1 px-4">Edit</a>
                    <form action="/admin/cars/{{ $car->id }}" method="POST" class="">
                      @csrf
                      @method('DELETE')
                      <input type="submit", class="btn btn-danger align-middle my-1 px-3" value="Delete">
                    </form>
                  </td>
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