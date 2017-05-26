@extends('layouts.app')

@section('content')
<div class="container">

    <a href="/users/create"  class="btn btn-primary"><b><span class="glyphicon glyphicon-plus"></span>Add User</b></a>

    <div class="invisible">&nbsp;</div>
    <div class="panel panel-default">

        <div class="panel-heading" style="font-size: 20px;font-family:Ubuntu">
        Current User Details
        </div>

        <div class="panel-body">
        <div class="col-sm-12">

        <table class="table table-striped ">
              <thead>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Contact</th>
                  <th>Edit</th>
                  <th>Show</th>
                  <th>Delete</th>
              </thead>
              @foreach($users as $user)
              <tbody>
              
              <tr><td>{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->phone}}</td>
              <td><a href= "{{ url('/users/'.$user->id.'/edit' ) }}"  class="btn btn-success"><b>Edit</b></a></td>
              <td><a href= "{{ url('/users/'.$user->id) }}"  class="btn btn-btn btn-warning"><b>Show</b></a></td>
              <td><form action="/users/{{ $user->id }}" method="POST">
                       {{ csrf_field() }}
                       {{ method_field('DELETE') }}
                   <button type="submit"  onclick="return confirm('Are you sure you want to delete this item?');" id="delete-page-{{ $user->id }}" class="btn btn-danger">
                   <i class="fa fa-btn fa-trash"></i><b>Delete</b></button>
                     </form>

              </td></tr>
              
              </tbody>
              @endforeach
        </table>
        </div>
        </div>

    </div>

</div>
<div style="margin-left:8%;">
<ul class="pagination">
  <li><a href="/users?page=1">1</a></li>
  <li><a href="/users?page=2">2</a></li>
  <li><a href="/users?page=3">3</a></li>
  <li><a href="/users?page=4">4</a></li>
  <li><a href="/users?page=5">5</a></li>
</ul>
</div>

@endsection
