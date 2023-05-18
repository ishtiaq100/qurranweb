@extends('admin.adminlayout')
@section('title','Add Course')
@section('content')
<div class="container-fluid">
    <form method="post" action="{{ url('admin/course/save') }}" enctype="multipart/form-data">
    <!-- Course Introduction -->
    <div class="alert">@foreach($errors->all() as $error)
        {{ $error }}
        @endforeach
        @if(session('messages'))
        {{session('messages')}}
        @endif</div>
    <div class="card card-default">
      <div class="card-header" style="background-color: cadetblue;">
        <h3 class="card-title" style="color: white;">Course Introduction</h3>

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
              <label>Course Name</label>
              <input type="text" class="form-control" required name="course_name" placeholder="Enter course name (30-40 letters)" minlength="10" maxlength="140">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Course Category</label>
              <input type="text" class="form-control" required name="course_catg" placeholder="Enter course category (5-10 letters)" minlength="5" maxlength="150">
            </div>
          </div>

        </div>
        <!-- /.row -->
      </div>
    </div>
     <!-- Course Features -->
    <!-- Course Details -->
    <div class="card card-default">
      <div class="card-header" style="background-color: cadetblue;">
        <h3 class="card-title" style="color: white;">Course Overview</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus" style="color: white;"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Course Summary</label>
              <textarea class="form-control" rows="3" required placeholder="Enter course summary (250-300 letters)" name="course_summry" minlength="250" maxlength="300"></textarea>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Course Requirements</label>
              <textarea class="form-control" rows="3" required placeholder="Enter course requirements (250-300 letters)" name="course_reqments" minlength="250" maxlength="300"></textarea>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
    </div>
        <!--  Picture -->
     <div class="card card-default">
      <div class="card-header" style="background-color: cadetblue;">
        <h3 class="card-title" style="color: white;">Course Banner</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus" style="color: white;"></i>
          </button>
        </div>
      </div>
    <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Course Banner (670x450)</label>
                  <input type="file" class="form-control" required name="course_banner_1" accept="image/jpeg">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Course Related Image (369x251)</label>
                  <input type="file" class="form-control" required name="course_banner_2" accept="image/jpeg">
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
    </div>
    <div class="card card-default">
      <div class="card-header" style="background-color: cadetblue;">
        <h3 class="card-title" style="color: white;">Fees Structure</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus" style="color: white;"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Course Duration</label>
              <select class="form-control select2" required style="width: 100%;" name="course_duration" >
                <option value="1"  >1 year</option>
                <option value="1.5" >1.5 year</option>
                <option value="2">2 year</option>
                <option value="2.5">2.5 year</option>
                <option value="3">3 year</option>
                <option value="3.5">3.5 year</option>
                <option value="4">4 year</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Live Session/Day</label>
                  <input type="name" required class="form-control" required name="live_session_day" placeholder="30 minutes" value="30" readonly>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Fee Calculation</label> </div>
          </div>
          <div class="col-md-6" style="margin-top: -25px;">
            <div class="form-group">
              <label>Days</label>
              <input type="number" class="form-control" name="text" placeholder="2 days " disabled="">
              <input type="number" class="form-control" name="text" placeholder="3 days " disabled="" style="margin-top: 5px;">
              <input type="number" class="form-control" name="text" placeholder="4 days " disabled="" style="margin-top: 5px;">
              <input type="number" class="form-control" name="text" placeholder="5 days " disabled="" style="margin-top: 5px;">
            </div>
          </div>
          <div class="col-md-6" style="margin-top: -25px;">
            <div class="form-group">
              <label>Enter Fee</label>
              <input type="number" class="form-control" required name="fee_days_2" placeholder="Enter fee for 2 days in ($)dollars ">
              <input type="number" class="form-control" required name="fee_days_3" placeholder="Enter fee for 3 days in ($)dollars " style="margin-top: 5px;">
              <input type="number" class="form-control" required name="fee_days_4" placeholder="Enter fee for 4 days in ($)dollars " style="margin-top: 5px;">
              <input type="number" class="form-control" required name="fee_days_5" placeholder="Enter fee for 5 days in ($)dollars " style="margin-top: 5px;">
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </div>
         <!-- Assign Teacher -->
         <div class="card card-default">
          <div class="card-header" style="background-color: cadetblue;">
            <h3 class="card-title" style="color: white;">Assign Teacher</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus" style="color: white;"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Assign Teacher</label>
                  <select class="form-control select2 select2-hidden-accessible" required style="width: 100%;" name="course_assgn_teacher" data-select2-id="4" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="6">Choose Teacher</option>
                                                <option value=""></option>
                                                    <option value="1">Hafiz Muhammad Usman</option>
                                                    <option value="2">Muhammad Sooban Zaib Warraich</option>
                                                    <option value="3">Abdur Rehman</option>
                                                    <option value="4">Muhammad Hamza</option>
                                                    <option value="5">Jawaria Zubair</option>
                                                    <option value="6">Hafiz Muhammad Junaid</option>
                                                    <option value="7">Shoaib Safdar</option>
                                              </select>
                </div>
              </div>
              <div class="col-md-6" data-select2-id="24">
                <div class="form-group" data-select2-id="23">
                  <label>Select Role</label>
                  <select class="form-control " required style="width: 100%;" name="course_teacher_role" >
                    <option selected="selected" >Choose Roll</option>
                    <option value="1">Lacturar</option>
                    <option value="2">Pro Lacturar</option>
                    <option value="3">Vice Lacturar</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Teacher Introduction</label>
                  <textarea class="form-control" rows="3" required placeholder="Enter course requirements (250-300 letters)" name="course_teacher_intro" minlength="250" maxlength="300"></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Teacher Profile Image (60x60 white-bg) </label>
                  <input type="file" class="form-control" required name="course_teacher_img1" accept="image/jpg">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Teacher Image (150x150) </label>
                  <input type="file" class="form-control" required name="course_teacher_img2" accept="image/jpg">
                </div>
              </div>
              <div class="col-md-6" data-select2-id="15">
            <div class="form-group" data-select2-id="14">
              <label>Status</label>
              <select class="form-control select2 select2-hidden-accessible" required style="width: 100%;" name="course_status" data-select2-id="10" tabindex="-1" aria-hidden="true">
                <option selected="selected" data-select2-id="12">Choose Status</option>
                <option value="1">Active</option>
                <option value="0">Deactive</option>
              </select>
            </div>
          </div>
            </div>
            <!-- /.row -->
          </div>
          <div>
            <button type="submit" class="btn btn-primary" style="float: right; margin: 30px 50px;">Submit</button>
          </div>
        </div>
    </form>
    <!-- /.card -->
  </div>
@endsection
