@extends('layouts.master')
  
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Detail</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="card-group">
                <div class="card">
                    <div class="card-body pt-2">
                      <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">{{ $data['license_plate'] }}</span>
                      <p class="card-title h5 d-block text-darker">
                        {{ $data['car_type'] }}
                      </p>
                      <p class="card-description mb-4">
                        Duration : {{ $data['duration'] }} day
                      </p>
                      <p class="card-title h5 d-block text-darker">
                        Total : {{ $data['total'] }}
                      </p>
                      <form action="/home/rent/detail/{{ $data['car_id'] }}" method="POST">
                        @csrf
                        <input type="hidden" name="car_id" value="{{ $data['car_id']}}">
                        <input type="hidden" name="total" value="{{ $data['total']}}">
                        <input type="hidden" name="duration" value="{{ $data['duration']}}">
                        <input type="hidden" name="payment_proof" value="{{ $data['payment_proof']}}">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
                  </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection