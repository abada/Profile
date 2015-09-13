@extends('layouts.master')

@section('title')
{{ trans('user::auth.login') }} | @parent
@stop

@section('content')
<div class="header">Edit your account</div>
@include('flash::message')

{!! Form::open(['route' => 'user.account.update']) !!}
               <div class="row uniform 50%">
                   <div class="12u">
                       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           <input type="email" name="email" class="form-control"
                                  placeholder="{{ trans('user::auth.email') }}" value="{{ Input::old('email', $user->email)}}"/>
                           {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                       </div>
                   </div>
               </div>
               <div class="row uniform 50%">
                   <div class="12u">
                       <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                           <input type="text" name="first_name" class="form-control"
                                  placeholder="First name" value="{{ Input::old('first_name', $user->first_name)}}"/>
                           {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
                       </div>
                   </div>
               </div>
               <div class="row uniform 50%">
                   <div class="12u">
                       <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                           <input type="text" name="last_name" class="form-control"
                                  placeholder="Last name" value="{{ Input::old('last_name', $user->last_name)}}"/>
                           {!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
                       </div>
                   </div>
               </div>

               <div class="row uniform 50%">
                   <div class="12u">
                       <input type="submit" class="btn btn-info btn-block" value="Update"/>
                   </div>
               </div>
               {!! Form::close() !!}

@stop
