@extends('layouts.app')

@section('content')
<div class="container">
<div class="panel panel-default">

 <div class="panel-body">
        <div class="col-sm-12">

        <table class="table table-striped ">
         <thead>
         	<th>admin</th>
         </thead>
          <tbody>
                <tr>
                        <td><a href="/migrate">migrations</a></td>
                </tr>
                <tr>
                        <td><a href="#">password_reset</a></td>
                </tr>
                <tr>
                        <td><a href="/users_db">users</a></td>
                </tr>

         </table>
         </div>
         </div>
         </div>
         </div>
 @endsection        