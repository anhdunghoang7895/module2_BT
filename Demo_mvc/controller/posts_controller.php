<?php
require_once('controller/base_controller.php');
require_once('model/post.php');

class PostsController extends BaseController
{
	function __construct()
	{
		$this->folder = 'post';
	}

	public function index()
	{
		$post = Post::all();
		$data = array('post' => $post);
		$this->render('index', $data);
	}
}