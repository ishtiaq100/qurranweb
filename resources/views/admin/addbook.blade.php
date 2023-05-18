@extends('admin.adminlayout')
@section('title','Add Book')
@section('content')
<div class="container-fluid">
    <form method="post" action="{{ url('admin/book/save') }}" enctype="multipart/form-data">
    <!-- Course Introduction -->
    <div class="alert">@foreach($errors->all() as $error)
        {{ $error }}
        @endforeach
        @if(session('messages'))
        {{session('messages')}}
        @endif</div>
    <div class="card card-default">
      <div class="card-header" style="background-color: cadetblue;">
        <h3 class="card-title" style="color: white;">Book Introduction</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus" style="color: white;"></i>
          </button>
        </div>
      </div>
                <!-- /.card-header -->
      @csrf
        <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Book Name</label>
              <input type="text" class="form-control" required name="name" placeholder="Enter book name" >
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Book Author</label>
              <input type="text" class="form-control" required name="author" placeholder="Enter book Author" >
            </div>
          </div>

        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Course Banner (670x450)</label>
                    <input type="file" class="form-control"  name="book_img1" accept="image/jpeg">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Course Related Image (369x251)</label>
                    <input type="file" class="form-control"  name="book_img2" accept="image/jpeg">
              </div>
            </div>
          </div>


      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Avail Status</label>
            <select class="form-control select2 select2-hidden-accessible" required style="width: 100%;" name="avail_status" >
                <option selected="selected" >Choose Status</option>
                <option value="1">Price</option>
                <option value="0">Free</option>
              </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" required value="0" name="price" placeholder="Enter book price" >
          </div>
        </div>

      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Book Status</label>
            <select class="form-control select2 select2-hidden-accessible" required style="width: 100%;" name="status">
                <option selected="selected" >Choose Status</option>
                <option value="1">Active</option>
                <option value="0">Deactive</option>
              </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <button type="submit" class="btn btn-primary" style="float: right; margin: 30px 50px;">Submit</button>
                </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    </form>

  </div>
@endsection
