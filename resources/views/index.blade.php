@extends('layouts.app')

@section('head')
<meta charset="UTF-8">
    <link rel="icon" href="{{url('/')}}/admin_bsb/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/admin_bsb/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/admin_bsb/plugins/node-waves/waves.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/admin_bsb/css/style.css" rel="stylesheet" />
    <link href="{{url('/')}}/admin_bsb/css/themes/theme-red.min.css" rel="stylesheet" />

@endsection
@section('content')

<div class="container-fluid">
            <!-- Hover Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                TABEL CITY
                            </h2>
                            <br>

                            <a href="{{ route('citys.create')}}" class="btn btn-primary">Create Data</a>

                        </div>
                        <br>


<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
   <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>City Id</th>
                                        <th>City</th>
                                        <th>Country Id</th>
                                        <th>last Update</th>
                                        <th colspan="2">Action</th>
                                    </tr>

                                </thead>
                                <tbody>
                                  
                                     @foreach($citys as $city)
                                    <tr>
                                        <td>{{$city->city_id}}</td>
                                        <td>{{$city->city}}</td>
                                        <td>{{$city->country_id}}</td>
                                        <td>{{$city->last_update}}</td>

                                        <td>
                                                <a href="{{ route('citys.edit',$city->city_id)}}" class="btn btn-primary"> <span class="glyphicon glyphicon-pencil" </span>Edit</a>
                                        </td>
                                        <td>

                                            <form action="{{ route('citys.destroy', $city->city_id)}}" method="post">
                                              @csrf
                                              @method('DELETE')
                                              <button onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash" </span>Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                         
                                </tbody>
                            </table>
                            {{$citys->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Rows -->
        </div>
@endsection