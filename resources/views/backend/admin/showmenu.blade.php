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


        <h1>All Menu Item</h1>

        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($allmenu as $allmenus)
              <tr>
                <td>{{$allmenus->title}}</td>
                <td>{{$allmenus->price}}</td>
                <td>{{$allmenus->description}}</td>
                <td><img src="/foodimage/{{$allmenus->image}}"></td>
                <td>
                    <a class="btn btn-primary" href="{{url('/updatemenu',$allmenus->id)}}">Update</a>
                    <a class="btn btn-danger" href="{{url('/deletemenu',$allmenus->id)}}">Delete</a>
                </td>

              </tr>
              @endforeach
            </tbody>

          </table>
          {{ $allmenu->links() }}
    </div>

  </div>
</div>
@endsection()
