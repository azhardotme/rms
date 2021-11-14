@extends('backend.admin.index')

@section('content')
<div class="container-fluid page-body-wrapper">
<div class="main-panel">
    <div class="content-wrapper">

        <style>
            .table th img, .jsgrid .jsgrid-table th img, .table td img, .jsgrid .jsgrid-table td img {
            width: 100px;
            height: 80px;
            border-radius: 0;
        }
            </style>


        <h1>All Chefs</h1>

        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Speciality</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($chefs as $chef)
              <tr>
                <td>{{$chef->name}}</td>
                <td>{{$chef->speciality}}</td>
                <td><img src="/chefimage/{{$chef->image}}"></td>
                <td>
                    <a class="btn btn-primary" href="{{url('/upchef',$chef->id)}}">Update</a>
                    <a class="btn btn-danger" href="{{url('/deletechef',$chef->id)}}">Delete</a>
                </td>

              </tr>
              @endforeach
            </tbody>

          </table>
          {{-- {{ $allmenu->links() }} --}}
    </div>

  </div>
</div>
@endsection()
