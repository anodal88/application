@extends('layouts.backend')

@section('title','Manage Roles')

@section('stylesheets')
    @parent
    <!-- Data Tables -->
    <link href="{{asset('css/plugins/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/dataTables/dataTables.responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/dataTables/dataTables.tableTools.min.css')}}" rel="stylesheet">
@endsection


@section('search-form-action','#')

@section('main-content')

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Manage Roles</h5>
                    <div class="ibox-tools">

                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="ibox-content">
                    <table  class="table table-striped table-bordered table-hover roles">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Display Name</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                        </thead>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection


@section('javascripts')
    @parent
    <!-- Data Tables -->
    <script src="{{asset('js/plugins/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('js/plugins/dataTables/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('js/plugins/dataTables/dataTables.responsive.js')}}"></script>
    <script src="{{asset('js/plugins/dataTables/dataTables.tableTools.min.js')}}"></script>

    <script type="text/javascript">
        $(function () {
           var table= $('.roles').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.dashboard.rolesdata') !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'display_name', name: 'display_name'},
                    {data: 'description', name: ''},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'updated_at', name: 'updated_at'}
                ],

            });

        });
    </script>
@endsection

