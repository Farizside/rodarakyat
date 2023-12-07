@extends('layouts.master')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <h6>Rent</h6>
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
        <form action="/home/rent/{{$cars->id}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="duration">Duration (Day)</label>
            <input name="duration" type="text" class="form-control" id="duration" placeholder="Enter Duration">
          </div>
          <div class="form-group">
            <label for="payment_proof">Payment Proof</label>
            <input name="payment_proof" type="file" class="form-control" id="payment_proof" placeholder="Enter Payment Proof">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection