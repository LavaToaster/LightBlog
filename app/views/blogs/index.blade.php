@section('content')
<div class="container">
    <div class="row" id="posts">
        <div class="col-lg-12 text-center">
            <button id="new-post" class="btn btn-default btn-lg">New Post</button>
        </div>
        <br>
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