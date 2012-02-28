<?php defined('SYSPATH') OR die('No direct access allowed.');

class Home_Controller extends Controller {
	public function index(){
		$view_app = new View('home_content');
		$view_app->test = 'arakiel';
		$view_app->render(true);
		
	}

}
