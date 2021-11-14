@extends('backend.admin.index')

@section('content')
<div class="container-fluid page-body-wrapper">
<div class="main-panel">
    <div class="content-wrapper">


        <h1 class="form-control">All Users</h1>

        <table class="table">
            <thead class="thead-dark">
              <tr>

                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">User Type</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

             @foreach ($users as $user)
              <tr>

                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->user_type}}</td>

                @if ($user->user_type=='0')
                <td>
                    <a href="{{url('deleteuser',$user->id)}}" class="btn btn-danger">Delete</a>
                </td>
                @else
                <td>
                    <a class="btn btn-danger">Not Allowed</a>
                </td>
@endif
              </tr>
              @endforeach


            </tbody>
          </table>


    </div>

  </div>
</div>
@endsection()
