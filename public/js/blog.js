var Blog = {};

(function() {
    Blog.addPost = function(event) {
        event.preventDefault();

    };

    Blog.createPost = function(event) {
        event.preventDefault();

        $.ajax({
            type: 'post',
            url: '/post',
            data: $('#new-post').serialize() + '&post-title=' + $('#post-title').html(),
            success: function(data) {
                window.location.reload();
            }
        });
    };

    $('#new-post').submit(Blog.createPost);
})();