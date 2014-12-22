<?php
/**
 * Created by PhpStorm.
 * User: gbueno
 * Date: 12/22/2014
 * Time: 10:37 AM
 */

namespace ObservantRecords\WordPress\Themes\PenziasAndWilson;


class Setup {

	public static function init() {
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'wp_enqueue_styles'), 21);
	}

	public static function wp_enqueue_styles() {
		wp_dequeue_style( 'observantrecords2015-style' );
		wp_dequeue_style( 'observantrecords2015-typography' );
		wp_dequeue_style( 'observantrecords2015-layout' );

		wp_enqueue_style( 'penziasandwilson2015-style', get_stylesheet_uri() );
		wp_enqueue_style( 'penziasandwilson2015-typography', get_stylesheet_directory_uri() . '/css/typography.css' );
		wp_enqueue_style( 'penziasandwilson2015-layout', get_stylesheet_directory_uri() . '/css/layout.css' );
		wp_enqueue_style( 'penziasandwilson2015-fonts', '//fonts.googleapis.com/css?family=Montserrat+Subrayada:400,700' );
	}

}