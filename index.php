<?php 

/**
 * The View Class
 */
class View
{
	public $base;
	public $components;


	function __construct($base, $components)
	{
		$this->base = $base; 
	}


	public function render() 
	{
		header('Location: ' . $this->base);
	}

}


$view = new View('layouts/base.php', ['our-mission', 'our-causes', 'how-can-you-help', 'help-cindy', 'where-the-money-goes', 'our-blog', 'donate']);
$view->render();