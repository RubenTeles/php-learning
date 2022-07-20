<?php

class Post
{
	public  $post;

	public  $autor;

	public $published;

	public function __construct($post, $autor, $published)
	{
		$this->post = $post;
		$this->autor = $autor;
		$this->published = $published;
	}
}

$posts = [
	new Post('My First Post', 'RT', false),
	new Post('My Second Post', 'JR', true),
	new Post('My Third Post', 'MK', false),
	new Post('My Fourth Post', 'GF', true),
];

$autors = array_column($posts, 'autor');

$not_published = array_filter( $posts, function ($post) {
	return !$post->published;
});

$is_published = array_filter( $posts, function ($post) {
	return !$post->published;
});

array_map( function ($posts) {
	$posts->published = true;

}, $posts );

//var_dump($posts);
//var_dump($autors);
//var_dump($not_published);
//var_dump($is_published);
