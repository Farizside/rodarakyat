@extends('layouts.master')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <h6>Add Car</h6>
      </div>
      <div class="card-body px-3 pt-0 pb-2">
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li class="text-white my-0">{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form action="/admin/cars" method="POST">
          @csrf
          <div class="form-group">
            <label for="license_plate">License Plate</label>
            <input name="license_plate" type="text" class="form-control" id="license_plate" placeholder="Enter License Plate">
          </div>
          <div class="form-group">
            <label for="car_type">Car type</label>
            <input name="car_type" type="text" class="form-control" id="car_type" placeholder="Enter Car Type">
          </div>
          <div class="form-group">
            <label for="price_fullday">Price Fullday</label>
            <input name="price_fullday" type="number" class="form-control" id="price_fullday" placeholder="Enter Price Fullday">
          </div>
          <div class="form-group">
            <label for="price_halfday">Price Halfday</label>
            <input name="price_halfday" type="number" class="form-control" id="price_halfday" placeholder="Enter Price Halfday">
          </div>
          <div class="form-group">
            <label for="capacity">Capacity</label>
            <input name="capacity" type="number" class="form-control" id="capacity" placeholder="Enter Capacity">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection