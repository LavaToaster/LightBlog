var Blog = {};

(function() {
    Blog.createPostOpen = false;

    Blog.newPost = function(event) {
        if(Blog.createPostOpen) {
            $('#control-bar').slideUp('normal', function() {
                $('#create-post').addClass('pulse animated');
                setTimeout(function() {
                    $('#create-post').removeClass('pulse animated');
                }, 1000);
            });

            return;
        }

        Blog.createPostOpen = true;

        $.ajax({
            type: 'get',
            url: '/post/create',
            success: function(html) {

                $('#posts').prepend($(html).addClass('bounceIn animated'));
                $('#control-bar').slideUp();

                Editor.bind();

                $('#post-form').submit(Blog.createPost);

                setTimeout(function() {
                    $('#create-post').removeClass('bounceIn animated');
                }, 1000);
            },
            error: function(data) {
                Blog.createPostOpen = false;
                alert('There was an error retrieving the create post form');
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
                    $('#posts').prepend($(data.html).find('div').addClass('bounceIn animated').parent().html());
                    twttr.widgets.load();
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

    Blog.removePost = function(event) {
        var $this = $(this).closest('.box');

        $.ajax({
            type: 'delete',
            url: '/post/' + $this.data('post-id'),
            success: function(data) {
                $this.addClass('bounceOut animated');
                setTimeout(function() {
                    $this.slideUp('normal', function() {
                        $this.remove();
                    });
                }, 1000);
            },
            error: function(request) {
                $this.addClass('shake animated');
                setTimeout(function() {
                    $this.removeClass('bounceIn animated');
                }, 1000);
            }
        });
    };

    $('#new-post').click(Blog.newPost);

    $('#drawer').click(function() {
        $('#control-bar').slideToggle();
    });

    $('.delete-post').click(Blog.removePost);

})();