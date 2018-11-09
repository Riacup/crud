@extends('layouts.app')

@section('content')
<div class="container-fluid">
            <!-- Hover Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CREATE DATA
                            </h2>
                            <br>
                        </div>
<div class="card uper">
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('citys.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">City</label>
              <input type="text" class="form-control" name="city"/>
          </div>
          <div class="form-group">
              <label for="price">Country Id :</label>
              <input type="text" class="form-control" name="country_id"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection