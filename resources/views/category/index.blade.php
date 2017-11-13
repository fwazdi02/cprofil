@extends('layouts.master')
@section('content')
<div class="col-lg-5 col-sm-12 mx-auto">
<div class="card">
	<div class="card-block">
	<h3 class="card-title">Categories</h3>
	<hr>
	<ul class="list-group">
	@foreach ($categories as $c)
	  <li class="list-group-item justify-content-between">
	    <a data-toggle="modal" data-target="#cModal-{{$c->category_id}}" class="card-link">{{$c->category_name}}</a>
	    <span class="badge badge-primary badge-pill">{{$c->order_category}}</span>
	  </li>

	  <!-- Modal -->
		<div class="modal fade" id="cModal-{{$c->category_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">View</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<div class="form-horizontal">
		      		<label>Name </label>
		      		<p class="form-control-static">
				      	{{$c->category_name}}
		      		</p>
		      		<label>Order </label>
		      		<p class="form-control-static">
				        {{$c->order_category}}
		      		</p>
		      		<label>Description</label>
		      		<p class="form-control-static">
		        		{{$c->category_description}}
		      		</p>
		      	</div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>
	 @endforeach

	 </ul>
	</div>
</div>
</div>
@stop

