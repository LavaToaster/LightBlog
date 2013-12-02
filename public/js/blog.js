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

                $('#posts').prepend(html);
                $('#control-bar').slideUp();

                $('#post-form').submit(Blog.createPost);
                Editor.bind();
            },
            dataType: 'html'
        });
    };

    Blog.createPost = function(event) {
        event.preventDefault();

        Editor.triggerSubmission(); // Nudge Sir Trevor to serialize the data

        $.ajax({
            type: 'post',
            url: '/post',
            data: $('#new-post').serialize() + '&post-title=' + $('#post-title').html(),
            success: function(data) {
                window.location.reload();
            }
        });
    };

    $('#new-post').click(Blog.newPost);

    $('#drawer').click(function() {
        $('#control-bar').slideToggle();
    });
})();