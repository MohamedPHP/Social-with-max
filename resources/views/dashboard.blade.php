@extends('layouts.master')


@section('title')
    Dashboard
@endsection

@section('content')
    @include('includes.message-block')
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header>
                <h3>What Do You Have To Say?</h3>
            </header>
            <hr>
            <form action="{{ route('post.create') }}" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Your Post"></textarea>
                </div>
                <div class="btn-group">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </section>
    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header>
                <h3>Time Line</h3>
            </header>
            <hr>
            @foreach ($posts as $post)
                <article class="post" data-postid="{{ $post->id }}">
                    <p>{{ $post->body }}</p>
                    <div class="info">
                        Posted By {{ $post->user->frist_name }} On {{ $post->created_at }}
                    </div>
                    <div class="interaction">
                        <a href="#">Like</a> |
                        <a href="#">Dislike</a>
                        @if (Auth::user() == $post->user)
                            |
                           <a class="edit" href="#">Edit</a> |
                           <a href="{{ route('post.delete', ['postid' => $post->id]) }}">Delete</a>
                        @endif
                    </div>
                </article>
            @endforeach
        </div>
    </section>
    {{-- Start Edit Post --}}
        <div class="modal fade" role="dialog" tabindex="-1" id="Edit-Modal">
        	<div class="modal-dialog" role="document">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
        				<h4 class="modal-title">Edit Post</h4>
        			</div>
        			<div class="modal-body">
                        <form>
                            <div class="form-group">
                              <label for="post-body">Edit The Post</label>
                              <textarea class="form-control" name="post-body" id="post-body" rows="5"></textarea>
                            </div>
                        </form>
        			</div>
        			<div class="modal-footer">
        				<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                        <button class="btn btn-primary" type="button" id="modal-save">Save changes</button>
        			</div>
        		</div><!-- /.modal-content -->
        	</div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    {{-- End Edit Post --}}
    <script type="text/javascript">
        var token = '{{ Session::token()  }}';
        var url = '{{ route('edit') }}';
    </script>
@endsection
