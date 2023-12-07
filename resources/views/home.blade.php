@extends('layouts.master')
  
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Cars List</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="card-group">
                @foreach ($cars as $car)
                <div class="card">
                    <div class="card-body pt-2">
                      <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">{{ $car->license_plate }}</span>
                      <a href="javascript:;" class="card-title h5 d-block text-darker">
                        {{ $car->car_type }}
                      </a>
                      <p class="card-description mb-4">
                        Price per Day : Rp. {{ $car->price }},~<br>
                      </p>
                      <a href="/home/rent/{{ $car->id }}" class="btn btn-success">Rent</a>
                    </div>
                  </div>
                @endforeach
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection