var Blog = {};

(function() {
    Blog.newPost = function(event) {
        if($('#create-post').length) {
            $('#control-bar').slideUp();
            return;
        }

        $.ajax({
            type: 'get',
            url: '/post/create',
            success: function(html) {

                $('#posts').prepend($(html).addClass('bounceIn animated'));
                $('#control-bar').slideUp();

                $('#post-form').submit(Blog.createPost);
                Editor.bind();

                setTimeout(function() {
                    $('#create-post').removeClass('bounceIn animated');
                }, 1000);
            },
            dataType: 'html'
        });
    };

    Blog.createPost = function(event) {
        var $createPost = $('#create-post');

        event.preventDefault();

        Editor.triggerSubmission(); // Nudge Sir Trevor to serialize the data

        $.ajax({
            type: 'post',
            url: '/post',
            data: $('#post-form').serialize() + '&post-title=' + $('#post-title').html(),
            success: function(data) {
                $createPost.addClass('bounceOut animated');
                setTimeout(function() {
                    $createPost.remove();
                    $('#posts').prepend($(data.html).find('div').addClass('bounceIn animated').html());
                }, 1000);
            },
            error: function(request) {
                $createPost.addClass('shake animated');
                setTimeout(function() {
                   $createPost.removeClass('bounceIn animated');
                }, 1000);
            }
        });
    };

    $('#new-post').click(Blog.newPost);

    $('#drawer').click(function() {
        $('#control-bar').slideToggle();
    });
})();