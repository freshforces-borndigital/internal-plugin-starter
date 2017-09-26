<?php
namespace Plugin\YourComponent;

defined('ABSPATH') or die('Can\'t access directly');

class Setup
{
	public function __construct()
	{
		// $this->_dir = INTERNAL_PLUGIN_DIR . '/your-component';
		// $this->_url = INTERNAL_PLUGIN_URL . '/your-component';
		// $this->_register_post_types();
	}

	private function _register_post_types()
	{
		// ;)
	}
}

new Setup();
