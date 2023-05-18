@extends('admin.adminlayout')
@section('title','Add Book')
@section('content')
<div class="container-fluid">
    <form method="post" action="{{ url('admin/book/update/'.$book->id) }}" enctype="multipart/form-data">
    @method('put')
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
              <input type="text" class="form-control" required name="name" value="{{ $book->name }}" placeholder="Enter book name" >
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Book Author</label>
              <input type="text" class="form-control" required name="author" value="{{ $book->author }}" placeholder="Enter book Author" >
            </div>
          </div>

        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Course Banner (670x450) <img src="{{ asset('uploads/books/'.$book->book_img1) }}" width="85" height="95" /></label>
                    <input type="file" class="form-control"  name="book_img1" accept="image/jpeg">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Course Related Image (369x251) <img src="{{ asset('uploads/books/'.$book->book_img2) }}" width="85" height="95" /> </label>
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
                <option value="1" <?php
                  if($book->avail_status== 1) { echo 'Selected'; }
                  ?>>Price</option>
                <option value="0" <?php
               if($book->avail_status== 0) { echo 'Selected'; }
                ?>>Free</option>
              </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" required value="{{ $book->price }}" name="price" placeholder="Enter book price" >
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
                <option value="1" <?php if($book->status== 1) { echo 'Selected'; } ?> >Active</option>
                <option value="0" <?php if($book->status== 0) { echo 'Selected'; } ?> >Deactive</option>
              </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <button type="submit" class="btn btn-primary" style="float: right; margin: 30px 50px;">Update</button>
                </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    </form>

  </div>
@endsection
