@extends('vendor.admin.layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

    <form method="post" action="{{route('permission.store')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <input class="form-control" placeholder="Enter Name" type="text" name="name">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="label" placeholder="Enter Label" }} >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection
