@extends('vendor.admin.layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
            <div class="col-sm-2">
           <a href="{{ route('permission.create') }}">     <button type="button" class="btn btn-block btn-primary">add new permission</button></a>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-12">
                <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                    <thead>
                    <tr role="row">

                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            Name
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                            label
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                            Action
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($permissions as $permission)
                    <tr role="row" class="odd">

                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->label }}</td>
                        <td>
                            <div class="col-sm-4">
                           <a href="permission/{{$permission->id}}/edit"> <button type="button" class="btn btn-block btn-primary">Edit permission</button></a>



                                {{ Form::open(['route'=>['permission.destroy',$permission->id],'method'=>'delete', 'style'=>'display:inline']) }}
                                <button type="submit" class="btn btn-block btn-danger">Remove permission</button>
                                {{ Form::close() }}


                            </div>

                        </td>
                    </tr>
                    @endforeach

                    </tbody>

                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                    Showing 1 to 10 of 57 entries
                </div>
            </div>
            <div class="col-sm-7">
                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                    <ul class="pagination">
                        <li class="paginate_button previous disabled" id="example2_previous">
                            <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">
                                Previous
                            </a>
                        </li>
                        <li class="paginate_button active">
                            <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">
                                1
                            </a>
                        </li>
                        <li class="paginate_button ">
                            <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">
                                2
                            </a>
                        </li>
                        <li class="paginate_button ">
                            <a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">
                                3
                            </a>
                        </li>
                        <li class="paginate_button ">
                            <a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">
                                4
                            </a>
                        </li>
                        <li class="paginate_button ">
                            <a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">
                                5
                            </a>
                        </li>
                        <li class="paginate_button ">
                            <a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">
                                6
                            </a>
                        </li>
                        <li class="paginate_button next" id="example2_next">
                            <a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">
                                Next
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
