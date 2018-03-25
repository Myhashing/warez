@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

    <form method="post" action="{{route('role.update',$role->id)}}">
        {{ csrf_field() }}
        {{method_field('put')}}
        <div class="form-group">
            <input class="form-control" value={{ $role->name }} type="text" name="name">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="lable" value={{ $role->lable }} >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <hr>
    <p></p>
    
        <tr role="row" class="odd">
            <td class="sorting_1">{{ $role->lable }}</td>
            <form method="post" action="/role/permission/{{$role->id}}">
                {{ csrf_field() }}

            @foreach($permissionsAll as $permission)

                <td>
                    {{$permission->name}}
                    <input type="checkbox" name="{{$permission->name}}"
                           @foreach($permissions as $pe)
                           @if($permission->name == $pe->name )
                           checked
                            @endif
                            @endforeach
                    >
                </td>

            @endforeach
                <td>
                    <button type="submit" class="btn btn-primary">save role</button>

                </td>
            </form>
        </tr>



@endsection
