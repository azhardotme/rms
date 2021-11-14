@extends('backend.admin.index')

@section('content')
<div class="container-fluid page-body-wrapper">
<div class="main-panel">
    <div class="content-wrapper">

        <form action="{{url('/uploadfood')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Title</label>
              <div class="col-sm-6">
                <input style="color: red" type="text" name="title" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Write menu title">
              </div>
            </div>

            <div class="form-group row">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Price</label>
              <div class="col-sm-6">
                <input style="color: red" type="num" name="price" class="form-control" id="colFormLabel" placeholder="Write menu price">
              </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-6">
                    <textarea style="color: red" name="description" id="colFormLabel" cols="44" rows="8"></textarea>

                </div>
              </div>

            <div class="form-group row">
              <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Image</label>
              <div class="col-sm-6">
                <input type="file" name="image" class="form-control form-control-lg" id="colFormLabelLg">
              </div>
            </div>

            <div class="form-grip row">
                <button type="submit" class="btn btn-success">Create Menu</button>
            </div>

          </form>
    </div>

  </div>
</div>
@endsection()
