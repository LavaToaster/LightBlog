@section('content')
<div class="container">
    <div class="row">
        <div class="box control-bar" id="control-bar">
            <div class="col-lg-12 text-center">
                <button id="new-post" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-pencil"></span> New Post</button>
            </div>
        </div>
        <div class="box drawer" id="drawer">
            <div class="col-lg-12 text-center" id="">
                <p><span class="glyphicon glyphicon-chevron-down"></span></p>
            </div>
        </div>
    </div>
    <div class="row" id="posts">
        <div class="box post" data-post-id="{{ $post->getId() }}">
            <div class="post-interaction">
                <button class="btn btn-link glyphicon glyphicon-pencil edit-post"></button>
                <button class="btn btn-link glyphicon glyphicon-trash delete-post"></button>
            </div>
            <div class="col-lg-12 text-center">
                <h2>{{ $post->getTitle() }}<br><small>{{ $post->getPublishDate() }}</small></h2>
                <p>{{ $post->getContent() }}</p>
            </div>
        </div>
    </div>
</div>
@endsection