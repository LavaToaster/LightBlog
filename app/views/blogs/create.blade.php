<div class="box">
    <div class="col-lg-12 text-center">
        <form id="post-form" method="post">
            <h2><span id="post-title" contenteditable="true">Test</span><br><small id="post-date">{{ \Carbon\Carbon::now() }}</small></h2>

            <div class="editor">
                <textarea name="post-content" class="js-st-instance"></textarea>
            </div>

            <button type="submit" class="btn btn-default btn-lg">Add Post</button>
            <hr>
        </form>
    </div>
</div>