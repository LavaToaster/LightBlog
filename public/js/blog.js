var Blog = {};

(function() {
    Blog.addPost = function(event) {
        event.preventDefault();


    }

    $('#new-post').submit(Blog.addPost);
})();