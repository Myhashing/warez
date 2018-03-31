@extends('vendor.admin.layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

    <form method="post" action="{{route('product.store')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <input class="form-control" placeholder="Enter Name" type="text" name="name">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="description" placeholder="description" >
        </div>
        <div class="form-group">
            <select name="status">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
                <option value="deleted">Deleted</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection
