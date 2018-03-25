@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

    <form method="post" action="{{route('user.update',$user->id)}}">
        {{ csrf_field() }}
        {{method_field('put')}}
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >

                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <hr>
    <p></p>

    <tr role="row" class="odd">
        <td class="sorting_1">{{ $user->name }}</td>
        <form method="post" action="/user/role/{{$user->id}}">
            {{ csrf_field() }}

            @foreach($allRoles as $role)

                <td>
                    {{$role->name}}
                    <input type="checkbox" name="{{$role->name}}"
                           @foreach($roles as $pe)
                               @if($role->name == $pe->name )
                               checked
                                @endif
                            @endforeach
                    >
                </td>

            @endforeach
            <td>
                <button type="submit" class="btn btn-primary">save User's role</button>

            </td>
        </form>
    </tr>

@endsection
