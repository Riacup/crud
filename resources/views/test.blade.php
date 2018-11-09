@extends('layouts.app')

@section('content')
	<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Box title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        	<form id="validate">
          @component('components.input',['label'=>'Nama Lengkap','type' => 'text'])
          @endcomponent

          @component('components.input',['label'=>'Nama Orang Tua','type' => 'text'])
          @endcomponent

          @component('components.input',['label'=>'Tanggal Lahir','type' => 'text','id'=> 'tanggal_lahir'])
          @endcomponent
          <button class="btn btn-primary" type="submit">simpan</button>
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
@endsection

@section('css')
	<link rel="stylesheet" href="{{url('/')}}/admin_lte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

@endsection

@section('js')
	@component('components.validate',['id' => 'validate'])
		@slot('rules')
		nama_lengkap: {
      		required: true,
    		minlength: 10
    	}
		@endslot
	@endcomponent
	@component('components.datepicker',['id'=>'tanggal_lahir'])@endcomponent
@endsection