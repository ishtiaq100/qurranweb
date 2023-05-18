@extends('admin.adminlayout')
@section('title','All books')
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

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Course Name: activate to sort column ascending">Book Name</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending">Book Author</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Duration: activate to sort column ascending">Avail Status</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Duration: activate to sort column ascending"> Status</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Duration: activate to sort column ascending"> Price</th>

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Status(Live): activate to sort column ascending">Action</th></tr>
              </thead>
              <tbody>

                <?php $i=1; ?>
                @forelse ($books as $book )
                <tr class="odd">
                    <td class="dtr-control sorting_1" tabindex="{{ $i }}"><p>{{ $i }}</p></td>

                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->avail_status==1 ? 'price':'free' }}</td>
                    <td>{{ $book->status==1 ? 'Active':'Disable' }}</td>
                    <td>{{ $book->price }}</td>
                    <td><a href="{{ url('admin/book/delete/'.$book->id) }}" class="btn-sm btn-info dropdown-hover" onclick="return confirm('Are you want to delete')"  >
                        Delete
                    </a>&nbsp; <a href="{{ url('admin/editbook/'.$book->id) }}" class="btn-sm btn-info dropdown-hover">
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
