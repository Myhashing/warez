@extends('vendor.admin.layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{route('plan.store')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label>
                Plan Name
            <input class="form-control"  type="text" name="name" placeholder="name">
            </label>
        </div>
        <div class="form-group">
            <label>
                Code
                <input class="form-control"  type="text" name="code" placeholder="code">
            </label>
        </div>
        <div class="form-group">
            <label>
                Price
            <input class="form-control"  type="text" name="price" placeholder="price">
            </label>
        </div>
        <div class="form-group">
            <label>
                Billing Frequency
            <input class="form-control"  type="text" name="bill_frequency"placeholder="bill_frequency">
            </label>
        </div>
        <div class="form-group">
            <label>
                Trail Period
            <input class="form-control"  type="text" name="trial_period"placeholder="trial_period">
            </label>
        </div>
        {{Form::select('bill_cycle',['week'=>'week','month'=>'month','year'=>'year'],['class'=>'form-control'])
        }}
        <div class="form-group">
            <label>
                Recommended
                <select name="recommended">
                    <option value=1>Yes</option>
                    <option value=0>No</option>
                </select>
            </label>
        </div>
        <div class="form-group">
            <label>
                Free plan
                <select name="free_plan">
                    <option value=1>Yes</option>
                    <option value=0>No</option>
                </select>
            </label>
        </div>
        <div class="form-group">
            <label>
                Display Order
            <input class="form-control"  type="text" name="display_order" placeholder="display_order">
            </label>
        </div>
        <div class="form-group">
            <label>Description
            <input class="form-control" type="text" name="description" placeholder="description"  >
            </label>
        </div>
        <div class="form-group">
            <label>
                Status
                <select name="status">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                    <option value="deleted">deleted</option>
                </select>
            </label>
        </div>
        <div class="form-group">
                <label>
                    Product Name
                <!-- ProductNames as collections include the key as product name and value as product name -->

                    <select name="product_id">
                        @foreach($productNames as $productName)
                            <option value="{{$productName}}">{{$productName}}</option>
                        @endforeach
                    </select>
                </label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection
