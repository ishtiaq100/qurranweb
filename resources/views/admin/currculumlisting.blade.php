@extends('admin.adminlayout')
@section('title','Currculum')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
                                <h3 class="card-title" style="margin-top: 10px;"></h3> <!-- <input type="text" style="border-style: none; margin-top: 5px; margin-left: 10px;">  -->
                            </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap">               <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>CSV</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>PDF</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button"><span>Print</span></button> <div class="btn-group"><button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true" aria-expanded="false"><span>Column visibility</span></button></div> </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
              <thead>
              <tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Sr. No: activate to sort column descending">Sr. No</th>

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Course Name: activate to sort column ascending">Course Name</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending">Lesson Heading</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Duration: activate to sort column ascending">Duration</th>

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Status(Live): activate to sort column ascending">Action</th></tr>
              </thead>
              <tbody>

                <?php $i=1; ?>
                @forelse ($currculum as $curcum )
                <tr class="odd">
                    <td class="dtr-control sorting_1" tabindex="{{ $i }}"><p>{{ $i }}</p></td>

                    <td>{{ $curcum->course->course_name }}</td>
                    <td>{{ $curcum->lesson_heading }}</td>
                    <td>{{ $curcum->lesson_duration }}</td>

                    <td></td>
                    <td><a href="{{ url('admin/currculum/delete/'.$curcum->id) }}" class="btn-sm btn-info dropdown-hover" onclick="return confirm('Are you want to delete')"  >
                        Delete
                    </a>&nbsp; <a href="{{ url('admin/editcurcum/'.$curcum->id) }}" class="btn-sm btn-info dropdown-hover">
                        Edit
                    </a>


                </td>
                  </tr>
                  <?php $i++; ?>
                  @empty
                <tr class="odd">
                    <td class="dtr-control sorting_1" tabindex="{{ $i }}"><p>{{ $i }}</p></td>
                    <td>Not Recored</td>

                    <td></td>
                    <td></td>

                    <td></td>
                  </tr>

                @endforelse



              </tbody>
              <tfoot>
              <tr><th style="padding: 12px 25px;" rowspan="1" colspan="1">Sr. No</th>

                <th rowspan="1" colspan="1">Course Name </th>
                <th rowspan="1" colspan="1">Lesson Heading</th>
                <th rowspan="1" colspan="1">Duration</th>

                <th rowspan="1" colspan="1">Action</th></tr>
              </tfoot>
            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 4 of 4 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
@endsection
