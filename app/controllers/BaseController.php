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
            $this->layout->title = 'LightBlog';
		}
	}

}