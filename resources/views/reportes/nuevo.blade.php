@extends('layouts.master')
@section('add_styles')

{!! HTML::style('css\awesome-bootstrap-checkbox.css') !!}
{!! HTML::style('vendor\picEdit-master\dist\css\picedit.min.css') !!}
{!! HTML::style('vendor\bootstrap-tagsinput-latest\dist\bootstrap-tagsinput.css') !!}

{!! HTML::style('vendor\select2-master\dist\css\select2.css') !!}
{!! HTML::style('bower_components/ion.rangeslider/css/ion.rangeSlider.css') !!}
@stop

@section('content')
<div class="col-lg-10 col-lg-offset-1">
	<button class="btn btn-lg btn-primary"><i class="icon-pencil-5"></i> Nuevo Reporte</button>
</div>
@stop


@section('add_scripts')
{!! HTML::script('datetimepicker/jquery.datetimepicker.min.js') !!}

<script type="text/javascript">
	$(function(){
 $('#date_timepicker_start').datetimepicker({
  format:'Y/m/d',
  onShow:function( ct ){
   this.setOptions({
    maxDate:jQuery('#date_timepicker_end').val()?jQuery('#date_timepicker_end').val():false
   })
  },
  timepicker:false
 });
 $('#date_timepicker_end').datetimepicker({
  format:'Y/m/d',
  onShow:function( ct ){
   this.setOptions({
    minDate:jQuery('#date_timepicker_start').val()?jQuery('#date_timepicker_start').val():false
   })
  },
  timepicker:false
 });
});
</script>

@stop