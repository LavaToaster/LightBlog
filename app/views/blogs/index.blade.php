@section('content')
<div class="container">

    <div class="row">
        <div class="box">
            @foreach($posts as $post)
            <div class="col-lg-12 text-center">
                <img class="img-responsive img-border img-full" src="img/slide-3.jpg">
                <h2>{{ $post->getTitle() }}<br><small>{{ $post->getPublishDate() }}</small></h2>
                <p>{{ Str::words($post->getContent(), 100) }}</p>
                <a href="#" class="btn btn-default btn-lg">Read More</a>
                <hr>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection