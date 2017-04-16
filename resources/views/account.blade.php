@extends('layouts.master')

@section('title')
    account
@endsection

@section('content')
    <div class="row">
        @include('includes.message-block')
        <div class="col-md-6 col-md-offset-3">
            <header>
                <h2>Account</h2>
            </header>
            <form action="{{ route('account.save') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="frist_name">Frist Name</label>
                    <input type="text" class="form-control" id="frist_name" name="frist_name" value="{{ $user->frist_name }}">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" name="image" value="">
                </div>
                <button type="submit" class="btn btn-primary">Save Account</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
    @if (Storage::disk('local')->has($user->frist_name . '-' . $user->id . '.jpg'))
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <img src="{{ route('account.image', ['filename' => $user->frist_name . '-' . $user->id . '.jpg']) }}" alt="" />
            </div>
        </div>
    @endif
@endsection
