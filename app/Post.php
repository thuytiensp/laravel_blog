<?php
namespace App;
class Post
{
	public function getPosts($session)
	{
		if(!$session->has('posts')){
			$this->createDummyData($session);
		}
		return $session->get('posts');
	}

	private function createDummyData($session)
	{
		$post=[
			[
				'title' =>	'Learning laravel',
				'content' => 'This blog will get you right on track with Laravel!'
			],
			[
				'title' =>	'Something else',
				'content' => 'Some other content'
			]
		];
		$session->put('posts',$post);
	}
}
?>