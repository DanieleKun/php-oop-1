<?php
class Movie
{
	public $title;
	public $genre;
	public $year;
	public $duration;
	public $valutation = 0;

	public function __construct($title, $genre)
	{
		$this->title = $title;
		$this->genre = $genre;
	}

	public function getValutation() {
		if ($this->valutation <= 3) {
			echo '<h3>Valutazione:</h3><p class="bad">'.$this->valutation.'</p>';
		} else {
			echo '<h3>Valutazione:</h3><p class="good">'.$this->valutation.'</p>';
		}
	}
}