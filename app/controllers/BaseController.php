<?php

class BaseController extends Controller {

    public $layout = 'layouts.master';

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
            $this->layout->title = Config::get('blog.name');
            $this->layout->tagline = Config::get('blog.tagline');

            if(\Auth::check()) {
                $this->layout->user = \Auth::getUser();
            }
        }
    }

}