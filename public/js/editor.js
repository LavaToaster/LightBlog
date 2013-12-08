var Editor = {};

(function() {

    Editor.bind = function() {
        new SirTrevor.Editor({ el: $('.js-st-instance') });
    };
	
    Editor.triggerSubmission = function() {
        SirTrevor.onFormSubmit();
    };

    SirTrevor.setDefaults({
        uploadUrl: "/editor/attachment"
    });

    SirTrevor.setBlockOptions("Tweet", {
        fetchUrl: function(tweetID) {
            return "/editor/tweet/" + tweetID;
        }
    });
})();