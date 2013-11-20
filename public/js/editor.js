(function() {
    new SirTrevor.Editor({ el: $('.js-st-instance') });

    SirTrevor.setDefaults({
        uploadUrl: "/editor/attachment"
    });

    SirTrevor.setBlockOptions("Tweet", {
        fetchUrl: function(tweetID) {
            return "/editor/tweet/" + tweetID;
        }
    });
})();