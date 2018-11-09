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
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
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
                                	<caption>
                                		 <button type="button" class="btn btn-primary waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal"> Tambah </button>

                                	</caption>
                                    <tr>
                                        <th>city_id</th>
                                        <th>city </th>
                                        <th>country_id</th>
                                        <th>last update</th>
                                        <th> action </th>
                                   

                                    </tr>

                                </thead>
                                <tbody>
                                	@foreach($city as $data)
                                    <tr>
                                        <th scope="row">{{$data->city_id}}</th>
                                        <td> {{$data->city}} </td>
                                        <td> {{$data->country_id}} </td>
                                		<td> {{$data->last_update}} </td>

                                		<td>
                                		 <button type="button" class="btn btn-success waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal"> Edit Data</button>

                                		 
                                         <button type="button" class="btn btn-danger waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal"> Hapus Data</button>
										</td>
                
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

         <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                             <!-- FORM TAMBAH  -->

                             <form method="POST" action="{{route('tambah')}}">
                             	<label for="email_address">City</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="city" type="text" id="email_address" class="form-control" placeholder="Enter your city">
                                    </div>
                                </div>
                                <label for="email_address">Country Id</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="country_id" type="text" id="email_address" class="form-control" placeholder="Enter your country id">
                                    </div>
                                </div>
                            {{csrf_field()}}
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-link waves-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                         </form>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                             <!-- FORM UBAH  -->

                             <form method="POST" action="{{route('ubah')}}">
                             	<label for="email_address">City</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="city" type="text" id="email_address" class="form-control" placeholder="Enter your city">
                                    </div>
                                </div>
                                <label for="email_address">Country Id</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="country_id" type="text" id="email_address" class="form-control" placeholder="Enter your country id">
                                    </div>
                                </div>
                            {{csrf_field()}}
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-link waves-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                         </form>
                    </div>
                </div>
            </div>

@endsection