@extends('layouts.master')
@section('content')
<div class="col-lg-5 col-sm-12 mx-auto">
<div class="card">
	<div class="card-body">
	<h3 class="card-title">Edit Category</h3>
	<hr>
	  <form class="form-horizontal">
	  	<div class="form-group">
	  		<label>Name</label>
	  		<input type="text" name="name" class="form-control" placeholder="Category name">
	  	</div>
	  	<div class="form-group">
	  		<label>Order</label>
	  		<select name="order" class="form-control custom-select">
	  		<option>1</option>
	  		<option>2</option>
	  		<option>3</option>
	  		</select>
	  	</div>
	  	<div class="form-group">
	  		<label>Description</label>
	  		<textarea class="form-control" placeholder="Description"></textarea>
	  	</div>
	  	<button class="btn btn-primary btn-block">Update</button>
	  </form>
	</div>
</div>
</div>
@stop

