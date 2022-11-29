@extends('layouts.mainlayout')
@section('content')
<div class="container">
    <form class="form-horizontal" action="<?php echo url('update-user');?>" method="POST">
    	<?php @csrf ?>
        <div class="form-group">
        	<input type="hidden"id="id" name="id" value="<?php echo $data['id'];?>">
        	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
        	<div class="row">
        		<div class="col-md-6">
		            <label class="control-label" for="inputPassword">Title</label>
		            <input class="form-control" type="text" id="title" name="title" value="<?php echo $data['title'];?>" value="<?php echo $data['title'];?>" placeholder="Title" />
	            </div>
	            <div class="col-md-6">
	            	<label class="control-label" for="inputPassword">First Name</label>
		      		<input class="form-control" type="text" id="first_name" name="first_name" value="<?php echo $data['first_name'];?>" placeholder="First Name"/>
	            </div>
            </div>
            <div class="row">
        		<div class="col-md-6">
        			<label class="control-label" for="inputPassword">Last Name</label>
		            <input class="form-control" type="text" id="last_name" name="last_name" value="<?php echo $data['last_name'];?>" placeholder="Last Name" />	           
	            </div>
	            <div class="col-md-6">
		            <label class="control-label" for="inputPassword">Street</label>
		            <input class="form-control" type="text" id="street" name="street" value="<?php echo $data['street'];?>" placeholder="Street" />
	            </div>
            </div>
            <div class="row">
        		<div class="col-md-6">
		            <label class="control-label" for="inputPassword">City</label>
		            <input class="form-control" type="text" id="city" name="city" value="<?php echo $data['city'];?>" placeholder="City" />
		            
	            </div>
	            <div class="col-md-6">
		            <label class="control-label" for="inputPassword">State</label>
		            <input class="form-control" type="text" id="state" name="state" value="<?php echo $data['title'];?>" placeholder="State" />
	            </div>
            </div>
            <div class="row">
        		<div class="col-md-6">
		            <label class="control-label" for="inputPassword">Country</label>
		            <input class="form-control" type="text" id="country" name="country" value="<?php echo $data['country'];?>" placeholder="Country" />
	            </div>
	            <div class="col-md-6">
		            <label class="control-label" for="inputPassword">Post Code</label>
		            <input class="form-control" type="text" id="postcode" name="postcode" value="<?php echo $data['postcode'];?>" placeholder="Post Code" />
	            </div>
            </div>
            <div class="row">
        		<div class="col-md-6">
		            <label class="control-label" for="inputPassword">Email</label>
		            <input class="form-control" type="text" id="email" name="email" value="<?php echo $data['email'];?>" placeholder="Email" />
	            </div>
	            <div class="col-md-6">
		            <label class="control-label" for="inputPassword">Phone</label>
		            <input class="form-control" type="text" id="phone" name="phone" value="<?php echo $data['phone'];?>" placeholder="Phone" />
	            </div>
            </div>
            <br/>
            <div class="row">
            	<div class="col-md-12">
            		<input type="submit" class="btn btn-success form-control" id="update" />
            	</div>
            </div>
        </div>
    </form>
</div>
@endsection