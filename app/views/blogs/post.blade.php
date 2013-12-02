<div class="container">
    <div class="row" id="posts">
        <div class="box">
            <div class="col-lg-12 text-center">
                <h2>{{ $post->getTitle() }}<br><small>{{ $post->getPublishDate() }}</small></h2>
                <p>{{ Str::words($post->getContent(), 100) }}</p>
                <a href="#" class="btn btn-default btn-lg">Read More</a>
                <hr>
            </div>
        </div>
    </div>
</div>