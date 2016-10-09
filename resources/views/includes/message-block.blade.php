@if (count($errors) > 0)
    <div class="row">
        <div class="col-md-4 col-md-offset-4 clickme">
            @foreach ($errors->all() as $e)
                <div class="alert alert-danger">
                    {{ $e }}
                </div>
            @endforeach
        </div>
    </div>
@endif
@if (Session::has('message'))
    <div class="row">
        <div class="col-md-4 col-md-offset-4 clickme">
            <div class="alert alert-success">{{ Session::get('message') }}</div>
        </div>
    </div>
@endif
