@extends('vendor.admin.layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <form method="post" action="{{route('plan.update',$plan->id)}}">
        {{ csrf_field() }}
        {{method_field('put')}}
        <div class="form-group">
            <input class="form-control" value="{{ $plan->name }}" type="text" name="name">
        </div>
        <div class="form-group">
            <input class="form-control" value="{{ $plan->code }}" type="text" name="code">
        </div>
        <div class="form-group">
            <input class="form-control" value="{{ $plan->price }}" type="text" name="price">
        </div>
        <div class="form-group">
            <input class="form-control" value="{{ $plan->bill_frequency }}" type="text" name="bill_frequency">
        </div>
        <div class="form-group">
            <input class="form-control" value="{{ $plan->trial_period }}" type="text" name="trial_period">
        </div>
        {{Form::select('bill_cycle',['week'=>'week','month'=>'month','year'=>'year'],$plan->bill_cycle,['class'=>'form-control'])
        }}
        <div class="form-group">
            <input class="form-control" value=" {{ $plan->recommended }}" type="text" name="recommended">
        </div>
        <div class="form-group">
            <input class="form-control" value=" {{ $plan->free_plan }}" type="text" name="free_plan">
        </div>
        <div class="form-group">
            <input class="form-control" value=" {{ $plan->display_order }}" type="text" name="display_order">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="description" value="{{ $plan->description }}" >
        </div>
        <div class="form-group">
            <input class="form-control" value="{{ $plan->status }}" type="text" name="status">
        </div>
        <!-- ProductNames as collections include the key as product name and value as product name -->
        {{Form::select('product_id',$productNames,$plan->product->name,['class'=>'form-control'])
        }}



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>





@endsection
