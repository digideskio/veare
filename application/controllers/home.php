<?php if (! defined('BASEPATH')) exit('No direct script access');

class Home extends MY_Controller {

	//php 5 constructor
	function __construct()
 	{
		parent::__construct();
	}

	function index( $url )
	{
		/*if( mobile() != true || ipad() == true )
		{
			js_add(array('http://maps.googleapis.com/maps/api/js?sensor=true', 'gmaps'), 'first');
		}*/
		// check for ajax

		if( $url == 'privacy' )
		{
			$this->data['body_class'] = 'white-logo privacy';
			$this->data['meta_title'] = "Lukas Oppermann, Interface Design - Privacy";
			$this->view('home/privacy', $this->data);

		}
		elseif( $url == 'imprint' )
		{
			$this->data['body_class'] = 'white-logo';
			$this->data['meta_title'] = "Lukas Oppermann, Interface Design - Imprint";
			$this->view('home/imprint', $this->data);
		}
		else
		{
			$this->data['body_class'] = 'header-absolute';
			$this->data['meta_title'] = "interface design, print design, branding & information graphics";
			$this->view('home/block', $this->data);
		}
	}

// close class
}
