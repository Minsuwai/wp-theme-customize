<?php

/*
 * Clock Widget
 *
 * @package Aquila
 */

namespace Aquila_Theme\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;
use WP_Widget;

class Clock_Widget extends WP_Widget {
	use Singleton;

	protected function __construct() {

		//load class
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/*
		 * Actions.
		 */
    }
}