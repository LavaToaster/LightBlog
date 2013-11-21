var Blog = {};

(function() {
    Blog.newPost = function(event) {
        $.ajax({
            type: 'get',
            url: '/post/create',
            success: function(html) {

                $('#posts').prepend(html);
                $('#new-post').fadeOut();

                $('#post-form').submit(Blog.createPost);
                Editor.bind();
            },
            dataType: 'html'
        });
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

    $('#new-post').click(Blog.newPost);

})();