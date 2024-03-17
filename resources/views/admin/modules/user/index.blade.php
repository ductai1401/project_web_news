@extends('admin/master')

@section('title','News')

@push('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css ') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css ') }}">
{{-- <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}"> --}}
@endpush

@push('js')
<!-- AdminLTE App -->
{{-- <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script> --}}
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{ asset('admin/dist/js/demo.js') }}"></script> --}}
<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->

<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endpush

@push('hanldejs')

<script>
    $(function () {
      $("#users").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#users_wrapper .col-md-6:eq(0)');
    });
  </script>
@endpush

@section('content')
<section class="content-header">
    <!--section starts-->
    <h2>@yield('title')</h2>
    <ol class="breadcrumb">
        <li>
            <a href='{{route('admin.dashboard')}}'>
                <i class="fa fa-fw fa-home"></i> Dashboard
            </a>
        </li>
        <li>
            <a href='#'>@yield('title')</a>
        </li>
        <li>
            <a href='#'>@yield('name')</a>
        </li>
    </ol>
</section>

<div class="container-fluid">
    <!--main content-->
    <div class="row">
        <div class="col-lg-12">
            <!-- Basic charts strats here-->
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h4 class="panel-title">
            <i class="fa fa-fw fa-file-text-o"></i> Users List
        </h4>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel"></i>
                    </span>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-bordered" id="users">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Contact Number</th>
                                <th>Status</th>
                                <th>Edit/Save</th>
                                <th>Delete/Cancel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Bella</td>
                                <td>gankunding@hotmail.com</td>
                                <td>(999) 999-9999</td>
                                <td>Approved</td>
                                <td>
                                    <a class="edit btn btn-primary" href="javascript:;">
                                        <i class="fa fa-fw fa-edit"></i> Edit
                                    </a>
                                </td>
                                <td>
                                    <a class="delete btn btn-danger" href="javascript:;">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Timothy</td>
                                <td>Timothy@test.com</td>
                                <td>+1-222-222-222</td>
                                <td>Suspended</td>
                                <td>
                                    <a class="edit btn btn-primary" href="javascript:;">
                                        <i class="fa fa-fw fa-edit"></i> Edit
                                    </a>
                                </td>
                                <td>
                                    <a class="delete btn btn-danger" href="javascript:;">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- col-md-6 -->
    <!--row -->
</div>
<!--row ends-->
<!-- end content -->

@endsection