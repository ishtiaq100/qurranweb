@extends('admin.adminlayout')
@section('title','Add Currculum')
@section('content')
<div class="container-fluid">
    <form method="post" action="{{ url('admin/currculum/save') }}" enctype="multipart/form-data">
    <!-- Course Introduction -->
    <div class="alert">@foreach($errors->all() as $error)
        {{ $error }}
        @endforeach
        @if(session('messages'))
        {{session('messages')}}
        @endif</div>
    <div class="card card-default">
      <div class="card-header" style="background-color: cadetblue;">
        <h3 class="card-title" style="color: white;">Curriculum
        </h3>

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
              <label>Select Course</label>
              <select class="form-control select2" required style="width: 100%;" name="course_id" >
                @foreach ($course as $crse )

                <option value="{{ $crse->id }}"  >{{ $crse->course_name }}</option>

                @endforeach

              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Lesson Heading </label>
              <input type="text" class="form-control" required name="lesson_heading" placeholder="Enter Lesson Heading" minlength="5" >
            </div>
          </div>

        </div>

        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Lesson Duration</label>
                <input type="number" class="form-control" required name="lesson_duration" min="1" max="100" >
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Lesson Description </label>
                <input type="text" class="form-control" required name="lesson_descp" placeholder="Enter Lesson Description" minlength="5" >
              </div>
            </div>

          </div>
        <!-- /.row -->
      </div>
    </div>
     <!-- Course Features -->
    <!-- Course Details -->
        <!--  Picture -->

          <div>
            <button type="submit" class="btn btn-primary" style="float: right; margin: 30px 50px;">Submit</button>
          </div>
        </div>
    </form>
    <!-- /.card -->
  </div>
@endsection
