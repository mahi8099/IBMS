@extends('layouts.mainlayout')
@section('content')
<div class="album text-muted">
    <div class="container">
    	<?php 
    		if(session()->has('message'))
			echo '<div class="alert alert-success alert-dismissible">
    				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    				<strong>Success!</strong>'.session()->get('message').
				'</div>';
		?>
        <div class="row">
        	<table class="table table-responsive" id="tableID">
        		<thead>
        			<th>id</th>
        			<th>Title</th>
        			<th>First Name</th>
        			<th>Last Name</th>
        			<th>Street</th>
        			<th>City</th>
        			<th>State</th>
        			<th>Country</th>
        			<th>PostCode</th>
        			<th>email</th>
        			<th>Phone</th>
        			<th>Picture</th>
        			<th>Actions</th>
        		</thead>
        		<body>
        			<?php
        			foreach ($data as $userObj) {
	        			echo '<tr>
	        				<td>'.$userObj['id'].'</td>
	        				<td>'.$userObj['title'].'</td>
	        				<td>'.$userObj['first_name'].'</td>
	        				<td>'.$userObj['last_name'].'</td>
	        				<td>'.$userObj['street'].'</td>
	        				<td>'.$userObj['city'].'</td>
	        				<td>'.$userObj['state'].'</td>
	        				<td>'.$userObj['country'].'</td>
	        				<td>'.$userObj['postcode'].'</td>
	        				<td>'.$userObj['email'].'</td>
	        				<td>'.$userObj['phone'].'</td>
	        				<td><img src="'.$userObj['picture'].'" width="50" height="50" /></td>
	        				<td><a class="btn btn-success" href="'.url("/edit-user/".$userObj['id']).'">Edit<a/></td>
	        			</tr>';
	        		}
        			?>
        		</body>
        	</table>
        </div>
    </div>
</div>
@endsection