<?php
class Movie
{
	public $title;
	public $genre;
	public $year;
	public $duration;
	public $actors;

	public function __construct($title, $genre)
	{
		$this->title = $title;
		$this->genre = $genre;
	}
}