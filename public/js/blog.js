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
            data: $('#new-post').serialize() + '&title=' + $('#post-title').html(),
            success: function(data) {
                // TODO: Something
            }
        });
    };

    $('#new-post').submit(Blog.createPost);
})();