@extends('backend.admin.index')

@section('content')
<div class="container-fluid page-body-wrapper">
<div class="main-panel">
    <div class="content-wrapper">

        <form action="{{url('createchef')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Name</label>
              <div class="col-sm-6">
                <input style="color: red" type="text" name="name" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Write chef name">
              </div>
            </div>

            <div class="form-group row">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Speciality</label>
              <div class="col-sm-6">
                <input style="color: red" type="text" name="speciality" class="form-control" id="colFormLabel" placeholder="Write chef speciality">
              </div>
            </div>

            <div class="form-group row">
              <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Image</label>
              <div class="col-sm-6">
                <input type="file" name="image" class="form-control form-control-lg" id="colFormLabelLg">
              </div>
            </div>

            <div class="form-grip row">
                <button type="submit" class="btn btn-success">Create Chef</button>
            </div>

          </form>
    </div>

  </div>
</div>
@endsection()
