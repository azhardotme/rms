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


        <h1>Customers Orders</h1>
        <form action="{{url('/search')}}" method="GET" align="center">
            @csrf

        <input type="text" name="search" style="color: blue">
        <input type="submit" value="Search" class="btn btn-success">

        </form>
        <br>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Customer Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Food Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total Price</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($orders as $order)
              <tr>
                <td>{{$order->name}}</td>
                <td>{{$order->phone}}</td>
                <td>{{$order->address}}</td>
                <td>{{$order->foodname}}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->price*$order->quantity}} TK</td>

              </tr>
              @endforeach
            </tbody>

          </table>
          {{-- {{ $allmenu->links() }} --}}
    </div>

  </div>
</div>
@endsection()
