@section('content')
<div class="container">

    <div class="row">
        <!-- Dummy Add post box -->
        <div class="box">
            <div class="col-lg-12 text-center">
                <form>
                    <h2><span id="post-title" contenteditable="true">Test</span><br><small id="post-date">{{ \Carbon\Carbon::now() }}</small></h2>
                    <textarea name="post-content" class="js-st-instance"></textarea>

                    <button type="submit" class="btn btn-default btn-lg">Add Post</button>
                    <hr>
                </form>
            </div>
        </div>

        @foreach($posts as $post)
        <div class="box">
            <div class="col-lg-12 text-center">
                <img class="img-responsive img-border img-full" src="img/slide-3.jpg">
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