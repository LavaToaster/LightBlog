<blockquote class='twitter-tweet' align='center'>
    <p>{{ $tweet['text'] }}</p>
    &mdash; {{ $tweet['user']['name'] }} (@{{ $tweet['user']['screen_name'] }})
    <a href='{{ $tweet['status_url'] }}' data-datetime='{{ $tweet['created_at'] }}'>{{ $tweet['created_at'] }}</a>
</blockquote>