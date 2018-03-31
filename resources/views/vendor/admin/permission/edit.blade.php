@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

    <form method="post" action="{{route('permission.update',$permission->id)}}">
        {{ csrf_field() }}
        {{method_field('put')}}
        <div class="form-group">
            <input class="form-control" value={{ $permission->name }} type="text" name="name">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="lable" value={{ $permission->lable }} >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection
