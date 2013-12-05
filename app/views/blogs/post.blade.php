<div class="container">
    <div class="box post" data-post-id="{{ $post->getId() }}">
        <div class="box">
            <div class="col-lg-12 text-center">
                <h2>{{ $post->getTitle() }}<br><small>{{ $post->getPublishDate() }}</small></h2>
                <p>{{ Str::words($post->getContent(), 100) }}</p>
                <a href="{{ URL::route('post.show', [$post->getId()]) }}" class="btn btn-default btn-lg">Read More</a>
                <hr>
            </div>
        </div>
    </div>
</div>