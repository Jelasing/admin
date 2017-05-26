@extends('layouts.app')

@section('content')
<div class="container">
<div class="panel panel-default">

 <div class="panel-body">
        <div class="col-sm-12">

        <table class="table table-striped ">
         <thead>
         	<th>Table:USERS</th>
         	<tr>
         		<td>id</td>
         		<td>name</td>
         		<td>email</td>
         		<td>phone</td>
         		<td>password</td>
         	</tr>

         	<?php
         		foreach($users as $user){
         			?>
         			<tr>
         				<td><?php echo $user->id?></td>
         				<td><?php echo $user->name?></td>
         				<td><?php echo $user->email?></td>
         				<td><?php echo $user->phone?></td>
         				<td><?php echo $user->password?></td>
         			</tr>
         			<?php
         				}
         				?>
         		</thead>
         		</table>
         		</div>
         		</div>
         		</div>
         		</div>

         		@endsection			
