@extends('backend.admin.index')

@section('content')
<div class="container-fluid page-body-wrapper">
<div class="main-panel">
    <div class="content-wrapper">

        <h1>All Reservation</h1>

        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Guest</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Message</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($allreser as $allreserv)
              <tr>
                <td>{{$allreserv->name}}</td>
                <td>{{$allreserv->email}}</td>
                <td>{{$allreserv->phone}}</td>
                <td>{{$allreserv->guest}}</td>
                <td>{{$allreserv->date}}</td>
                <td>{{$allreserv->time}}</td>
                <td>{{$allreserv->message}}</td>

              </tr
            </tbody>
           @endforeach
          </table>


    </div>

  </div>
</div>
@endsection()

