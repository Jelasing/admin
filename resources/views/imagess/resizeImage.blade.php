@extends('layouts.app')

@section('content')

<div class="container">
<h1 style="text-align: center;">IMAGE MANIPULATION</h1>
@if (count($errors) > 0)
	<div class="alert alert-danger">
		<strong>Whoops!</strong> There were some problems with your input.<br><br>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
    <strong>{{ $message }}</strong>
</div>
<div class="row">
	<div class="col-md-12">
		<strong>Original Image:</strong>
		<br/>
		<img src="/images/{{ Session::get('imageName') }}" />
	</div>
	<div class="col-md-12">
		<strong>Thumbnail Image:</strong>
		<br/>
		<img src="/thumnail/{{ Session::get('imageName') }}" />
	</div>

	<div class="col-md-12">
		<strong>Timeline Image:</strong>
		<br/>
		<img src="/timeline/{{ Session::get('imageName') }}" />
	</div>
</div>



</div>
@endif
<div class="panel panel-primary" style="width:50%;margin-left:25%;">
  <div class="panel-body">
<form  enctype="multipart/form-data" action="resizeImagePost" method="POST">
{{csrf_field()}}
<center>
  <input type="file" name="imageName" accept="image/"><br>
  <input style="background-color:sky blue;color:black;" type="submit">
</center>
</form>
</div>
</div>

@endsection
 