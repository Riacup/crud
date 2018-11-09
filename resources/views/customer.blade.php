@extends('layouts.main')

@section('content')
        <div class="container-fluid">
            <!-- Hover Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                HOVER ROWS
                                                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Store </th>
                                        <th>first name</th>
                                        <th>last name</th>
                                        <th>email</th>
                                        <th>address id</th>
                                        <th> active </th>
                                        <th>create date</th>
                                        <th>last update</th>
                                    </tr>

                                </thead>
                                <tbody>
                                	@foreach($customer as $data)
                                    <tr>
                                        <th scope="row">{{$data->customer_id}}</th>
                                        <td> {{$data->store_id}} </td>
                                        <td> {{$data->first_name}} </td>
                                        <td> {{$data->last_name}} </td>
                                        <td> {{$data->email}} </td>
                                        <td> {{$data->address_id}} </td>
                                        <td> {{$data->active}} </td>
                                        <td> {{$data->create_date}} </td>
                                        <td> {{$data->last_update}} </td>
                                        
                                    </tr>
                					@endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Rows -->
        </div>

    @endsection