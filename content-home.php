<?php
/**
 * Created by PhpStorm.
 * User: gbueno
 * Date: 10/14/2014
 * Time: 11:05 AM
 *
 * @package WordPress
 * @subpackage Musicwhore 2015
 * @since Musicwhore 2014 1.0
 */

namespace ObservantRecords\WordPress\Themes\PenziasAndWilson;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php the_content( __( 'Continue reading &raquo;', WP_TEXT_DOMAIN ) ); ?>

</article>
