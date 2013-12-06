@section('content')
<div class="container">
    <div class="row" id="posts">
        <div class="box post" data-post-id="{{ $post->getId() }}">
            @if(\Auth::check())
            <div class="post-interaction">
                <button class="btn btn-link glyphicon glyphicon-pencil edit-post"></button>
                <button class="btn btn-link glyphicon glyphicon-trash delete-post"></button>
            </div>
            @endif
            <div class="col-lg-12 text-center">
                <h2>{{ $post->getTitle() }}<br><small>{{ $post->getPublishDate() }}</small></h2>
                <p>{{ $post->getContent() }}</p>
            </div>
        </div>
    </div>
</div>
@endsection