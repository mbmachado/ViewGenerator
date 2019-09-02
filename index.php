<?php 

/**
 * The View Class
 */
class View
{
	public $data;


	function __construct($data)
	{
		$this->data = $data; 
	}


	public function render($file, $attributes = NULL) 
	{
		$view = $this;
        ob_start();
        include( 'layouts/' . $file . '.php' );
        return ob_get_clean();
	}

}

$data = json_decode('{
	"base": "base-1",
	"header": "header-1",
	"slider": "slider-1",
	"footer": "footer-1",
	"color-scheme": "primary",
	"components": {
		"our-mission-component": {
			"title": "Nossa Missão",
			"subtitle": "Protecting the rights and wellbeing of EVERY child",
			"cards": [
				{
					"text": "Promoting the right and wellbeing of every child, in everything we do.",
					"image": "layouts/images/mission_1.png"
				},
				{
					"text": "Supporting Hope programs for children in more than 150 countries and territories.",
					"image": "layouts/images/mission_2.png"
				},
				{
					"text": "Focus on reaching the most vunerable children, to benefit all children, everywhere.",
					"image": "layouts/images/mission_3.png"
				}
			],
			"button": {
				"link": "#",
				"text": "Learn more about Hope"
			}
		},
		"our-causes-component": {
			"title": "Título"
		},
		"how-can-you-help-component": {
			"title": "Título"
		},
		"help-cindy-component": {
			"title": "Título"
		},	
		"where-the-money-goes-component": {
			"title": "Título"
		},
		"our-blog-component": {
			"title": "Título"
		},
		"donate-component": {
			"title": "Título"
		}
	}

}', true);

$view = new View($data);
echo $view->render($view->data['base']);

