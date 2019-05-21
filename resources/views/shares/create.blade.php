@extends('layout')

@section('content')

<div class="card uper">
  <div class="card-header">
    Add Shares
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div> <br/>
    @endif
      <form method="post" action="{{ route('shares.store') }}">
        <div class="form-group">
          {{ csrf_field() }}  
          <label for="name">Share Name:</label>
          <input type="text" class="form-control" name="share_name"/>
        </div>
        <div class="form-group">
          <label for="price">Share Price:</label>
          <input type="text" class="form-control" name="share_price"/>
        </div>
        <div class="form-group">
          <label for="name">Share Quantity:</label>
          <input type="text" class="form-control" name="share_quantity"/>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
      </form>
    </div>
  </div>
@endsection
