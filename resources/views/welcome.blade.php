@extends('layouts.master')

@section('title')
    welcome
@endsection

@section('content')
    @include('includes.message-block')
    <div class="row">
        <div class="col-md-6">
            <h2>Sign Up</h2>
            <form action="{{ route('signup') }}" method="post">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                  <label for="email">Your E-mail</label>
                  <input type="text" class="form-control" name="email" id="email" placeholder="Write A Valied Email Please" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group {{ $errors->has('frist_name') ? 'has-error' : '' }}">
                  <label for="fristname">Your Frist Name</label>
                  <input type="text" class="form-control" name="frist_name" id="frist_name" placeholder="Write Your Frist Name" value="{{ Request::old('frist_name') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                  <label for="password">Your Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Write A Complex Password Please" value="{{ Request::old('password') }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
        <div class="col-md-6">
            <h2>Sign In</h2>
            <form action="{{ route('signin') }}" method="post">
                <div class="form-group">
                  <label for="email">Your Frist Name</label>
                  <input type="text" class="form-control" name="email" id="email" placeholder="Write Your Frist Name" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group">
                  <label for="password">Your Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Write A Complex Password Please" value="{{ Request::old('password') }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@endsection
