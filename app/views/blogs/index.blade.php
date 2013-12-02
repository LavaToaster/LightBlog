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
        @foreach($posts as $post)
        <div class="box">
            <div class="col-lg-12 text-center">
                <h2>{{ $post->getTitle() }}<br><small>{{ $post->getPublishDate() }}</small></h2>
                <p>{{ Str::words($post->getContent(), 100) }}</p>
                <a href="#" class="btn btn-default btn-lg">Read More</a>
                <hr>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection