@extends('vendor.admin.layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <form method="post" action="{{route('product.update',$product->id)}}">
        {{ csrf_field() }}
        {{method_field('put')}}
        <div class="form-group">

            <input class="form-control" value="{{ $product->name }}" type="text" name="name">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="description" value="{{ $product->description }}" >
        </div>
        {{Form::select('status',['active'=>'active','inactive'=>'inactive','deleted'=>'deleted'],$product->status,['class'=>'form-control'])
        }}

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>





@endsection
