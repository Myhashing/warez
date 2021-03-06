@extends('vendor.admin.layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
            <div class="col-sm-8">
                <div class="col-sm-8">
                    <a href="{{ route('plan.create') }}">     <button type="button" class="btn btn-block btn-primary">add new product</button></a>
                </div>

            </div>
            <div class="col-sm-6">

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                    <thead>
                    <tr role="row">

                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            Plan Name

                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            Code
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            Price
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            Bill frequncy
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            Trial period
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            Bill cycle
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            Recommended
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            Free plan
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            Display order
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            Description
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            Product name
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            Status
                        </th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($plans as $plan)
                    <tr role="row" class="odd">

                        <td class="sorting_1">
                            {{ $plan->name }}
                        </td>
                        <td class="sorting_1">
                            {{ $plan->code }}
                        </td>
                        <td class="sorting_1">
                            {{ $plan->price }}
                        </td>
                        <td class="sorting_1">
                            {{ $plan->bill_frequency }}
                        </td>
                        <td class="sorting_1">
                            {{ $plan->trial_period }}
                        </td>
                        <td class="sorting_1">
                            {{ $plan->bill_cycle }}
                        </td>
                        <!--TODO: Set recommendad and free_plan to dispaly yes and no -->
                        <td class="sorting_1">
                            {{ $plan->recommended }}
                        </td>
                        <td class="sorting_1">
                            {{ $plan->free_plan }}
                        </td>
                        <td class="sorting_1">
                            {{ $plan->display_order }}
                        </td>
                        <td class="sorting_1">
                            {{ $plan->description }}
                        </td>
                        <td class="sorting_1">
                            {{ $plan->product->name }}
                        </td>
                        <td class="sorting_1">
                            {{ $plan->status }}
                        </td>

                        <td>
                            <a href="{{ route('plan.edit',$plan->id) }}">
                                <button type="button" class="btn btn-block btn-primary">
                                    Edit product
                                </button>
                            </a>
                            {{ Form::open(['route'=>['plan.destroy',$plan->id],'method'=>'delete', 'style'=>'display:inline']) }}
                            <button type="submit" class="btn btn-block btn-danger">Remove product</button>
                            {{ Form::close() }}
                        </td>

                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th rowspan="1" colspan="1">
                            Rendering engine
                        </th>
                        <th rowspan="1" colspan="1">
                            Browser
                        </th>
                        <th rowspan="1" colspan="1">
                            Platform(s)
                        </th>
                        <th rowspan="1" colspan="1">
                            Engine version
                        </th>
                        <th rowspan="1" colspan="1">
                            CSS grade
                        </th>
                    </tr>
                    </tfoot>
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
