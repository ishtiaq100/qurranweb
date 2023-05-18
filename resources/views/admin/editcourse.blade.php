@extends('admin.adminlayout')
@section('title','Update Course')
@section('content')
<div class="container-fluid">
    <form method="post" action="{{ url('admin/course/update/'.$course->id) }}" enctype="multipart/form-data">
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
     @method('put')                <!-- /.card-header -->
      @csrf
        <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Course Name</label>
              <input type="text" class="form-control" required name="course_name" placeholder="Enter course name (30-40 letters)" minlength="10" value="{{ $course->course_name }}" maxlength="140">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Course Category</label>
              <input type="text" class="form-control" required name="course_catg" value="{{ $course->course_catg }}" placeholder="Enter course category (5-10 letters)" minlength="5" maxlength="150">
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
              <textarea class="form-control" rows="3" required placeholder="Enter course summary (250-300 letters)" name="course_summry" minlength="250" maxlength="300">{{ $course->course_summry }}</textarea>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Course Requirements</label>
              <textarea class="form-control" rows="3" required placeholder="Enter course requirements (250-300 letters)" name="course_reqments" minlength="250" maxlength="300">{{ $course->course_reqments }}</textarea>
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
              <label>Course Banner (670x450) &nbsp; <img src="{{ asset('uploads/course_banner/'.$course->course_banner_1) }}" width="75" height="85" /> </label>
                  <input type="file" class="form-control"  name="course_banner_1" accept="image/jpeg">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Course Related Image (369x251) &nbsp; <img src="{{ asset('uploads/course_banner/'.$course->course_banner_2) }}" width="75" height="85" /></label>
                  <input type="file" class="form-control"  name="course_banner_2" accept="image/jpeg">
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
                <option value="1" <?php if($course->course_duration=='1') { echo 'selected'; } ?>  >1 year</option>
                <option value="1.5" <?php if($course->course_duration=='1.5') { echo 'selected'; } ?>  >1.5 year</option>
                <option value="2" <?php if($course->course_duration=='2') { echo 'selected'; } ?> >2 year</option>
                <option value="2.5" <?php if($course->course_duration=='2.5') { echo 'selected'; } ?> >2.5 year</option>
                <option value="3" <?php if($course->course_duration=='3') { echo 'selected'; } ?> >3 year</option>
                <option value="3.5" <?php if($course->course_duration=='3.5') { echo 'selected'; } ?>  >3.5 year</option>
                <option value="4" <?php if($course->course_duration=='4') { echo 'selected'; } ?>  >4 year</option>
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
              <input type="number" class="form-control" required name="fee_days_2" placeholder="Enter fee for 2 days in ($)dollars " value="{{$course->fee_days_2  }}">
              <input type="number" class="form-control" required name="fee_days_3" placeholder="Enter fee for 3 days in ($)dollars " value="{{$course->fee_days_3  }}" style="margin-top: 5px;">
              <input type="number" class="form-control" required name="fee_days_4" placeholder="Enter fee for 4 days in ($)dollars " value="{{$course->fee_days_4  }}" style="margin-top: 5px;">
              <input type="number" class="form-control" required name="fee_days_5" placeholder="Enter fee for 5 days in ($)dollars " value="{{$course->fee_days_5  }}" style="margin-top: 5px;">
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
                                                    <option value="1"  <?php if($course->course_assgn_teacher == '1') { echo 'selected'; } ?>  >Hafiz Muhammad Usman</option>
                                                    <option value="2" <?php if($course->course_assgn_teacher == '2') { echo 'selected'; } ?>  >Muhammad Sooban Zaib Warraich</option>
                                                    <option value="3" <?php if($course->course_assgn_teacher == '3') { echo 'selected'; } ?>  >Abdur Rehman</option>
                                                    <option value="4" <?php if($course->course_assgn_teacher == '4') { echo 'selected'; } ?>  >Muhammad Hamza</option>
                                                    <option value="5" <?php if($course->course_assgn_teacher == '5') { echo 'selected'; } ?>  >Jawaria Zubair</option>
                                                    <option value="6" <?php if($course->course_assgn_teacher == '6') { echo 'selected'; } ?> >Hafiz Muhammad Junaid</option>
                                                    <option value="7" <?php if($course->course_assgn_teacher == '7') { echo 'selected'; } ?>  >Shoaib Safdar</option>
                                              </select>
                </div>
              </div>
              <div class="col-md-6" data-select2-id="24">
                <div class="form-group" data-select2-id="23">
                  <label>Select Role</label>
                  <select class="form-control " required style="width: 100%;" name="course_teacher_role" >
                    <option selected="selected" >Choose Roll</option>
                    <option value="1" <?php if($course->course_teacher_role == '1') { echo 'selected'; } ?> >Lacturar</option>
                    <option value="2" <?php if($course->course_teacher_role == '2') { echo 'selected'; } ?>  >Pro Lacturar</option>
                    <option value="3" <?php if($course->course_teacher_role == '3') { echo 'selected'; } ?>  >Vice Lacturar</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Teacher Introduction</label>
                  <textarea class="form-control" rows="3" required placeholder="Enter course requirements (250-300 letters)" name="course_teacher_intro" minlength="250" maxlength="300">{{ $course->course_teacher_intro  }}</textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Teacher Profile Image (60x60 white-bg) <img src="{{ asset('uploads/course_teacher/'.$course->course_teacher_img1) }}" width="75" height="85" /> </label>
                  <input type="file" class="form-control"  name="course_teacher_img1" accept="image/jpg">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Teacher Image (150x150) <img src="{{ asset('uploads/course_teacher/'.$course->course_teacher_img2) }}" width="75" height="85" /></label>
                  <input type="file" class="form-control"  name="course_teacher_img2" accept="image/jpg">
                </div>
              </div>
              <div class="col-md-6" data-select2-id="15">
            <div class="form-group" data-select2-id="14">
              <label>Status</label>
              <select class="form-control select2 select2-hidden-accessible" required style="width: 100%;" name="course_status" data-select2-id="10" tabindex="-1" aria-hidden="true">
                <option selected="selected" data-select2-id="12">Choose Status</option>
                <option value="1" <?php if($course->course_status == '1') { echo 'selected'; } ?> >Active</option>
                <option value="0" <?php if($course->course_status == '0') { echo 'selected'; } ?> >Deactive</option>
              </select>
            </div>

          </div>
            </div>
            <!-- /.row -->
          </div>
          <div>
            <button type="submit" class="btn btn-primary" style="float: right; margin: 30px 50px;">Update</button>
          </div>
        </div>
    </form>
    <!-- /.card -->
  </div>
@endsection
