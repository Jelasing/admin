@extends('layouts.app')

@section('content')

<div class="container">
<div class="panel panel-default">

 <div class="panel-body">
        <div class="col-sm-12">

        <table class="table table-striped ">
         <thead>
         	<th>Table:MIGRATIONS</th>
         	<tr>
         		<td>id</td>
         		<td>migration</td>
         		<td>batch</td>
         	</tr>
         	
         	<?php
         		foreach($migrations as $migration){
         			?>
         			<tr>
         				<td><?php echo $migration->id?></td>
         				<td><?php echo $migration->migration?></td>
         				<td><?php echo $migration->batch?></td>	
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
	