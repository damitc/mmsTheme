<?php
/**
 * @link              https://github.com/mathewcallaghan/wp-widget-bootstrap-card/
 * @since             1.0.0
 * @package           Bootstrap_Card_Widget
 *
 * @wordpress-plugin
 * Plugin Name:       Bootstrap Card Widget
 * Plugin URI:        https://github.com/mathewcallaghan/wp-widget-bootstrap-card/
 * Description:       Add a Bootstrap Card to the sidebar (requires Bootstrap 4).
 * Version:           1.0.2
 * Author:            Mathew Callaghan
 * Author URI:        https://mathew.callaghan.xyz/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bootstrap-card-widget
 * Domain Path:       /languages
 */


/**
 * Widget API: WP_Widget_Bootstrap_Card class
 *
 * @package WordPress
 * @subpackage Widgets
 * @since 4.4.0
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

class WP_Widget_Bootstrap_Card extends WP_Widget {

	/**
	 * Sets up a new Bootstrap Card widget instance.
	 *
	 * @since 2.8.0
	 * @access public
	 */
	public function __construct() {
		$widget_ops = array(
			'classname' => 'wp_widget_bootstrap_card',
			'description' => __( 'Add a Bootstrap Card to the sidebar.' ),
			'customize_selective_refresh' => true,
		);
		$control_ops = array( 'width' => 400, 'height' => 350 );
		parent::__construct( 'bootstrap_card', __( 'Bootstrap Card' ), $widget_ops, $control_ops );
	}

	/**
	 * Outputs the content for the current Bootstrap Card widget instance.
	 *
	 * @since 2.8.0
	 * @access public
	 *
	 * @param array $args     Display arguments including 'before_title', 'after_title',
	 *                        'before_widget', and 'after_widget'.
	 * @param array $instance Settings for the current Bootstrap Card widget instance.
	 */
	public function widget( $args, $instance ) {
		
		$card_img = ! empty( $instance['card-img'] ) ? $instance['card-img'] : '';

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

		$widget_text = ! empty( $instance['bootstrap-card-text'] ) ? $instance['bootstrap-card-text'] : '';

		/**
		 * Filters the content of the Bootstrap Card widget.
		 *
		 * @since 2.3.0
		 * @since 4.4.0 Added the `$this` parameter.
		 *
		 * @param string         $widget_text The widget content.
		 * @param array          $instance    Array of settings for the current widget.
		 * @param WP_Widget_Bootstrap_Card $this        Current Bootstrap Card widget instance.
		 */
		$text = apply_filters( 'widget_text', $widget_text, $instance, $this );
		$img = apply_filters( 'card_img', $card_img, $instance, $this ); 	
		
		echo $args['before_widget'];?>

		<div class="card">
			<?php if ( ! empty( $card_img ) ) { ?>
			<img class="card-img-top img-fluid" src="<?php echo !empty( $instance['filter'] ) ? wpautop( $img ) : $img; ?>" alt="">
			<?php } ?>
				<div class="card-body">
				
		<?php if ( ! empty( $title ) ) {
			echo '<div class="card-title">' . $args['before_title'] . $title . $args['after_title'] . '</div>';
		} ?>
			<div class="card-text"><?php echo !empty( $instance['filter'] ) ? wpautop( $text ) : $text; ?></div>
				</div>
		</div>
		<?php
		echo $args['after_widget'];
	}

	/**
	 * Handles updating settings for the current Bootstrap Card widget instance.
	 *
	 * @since 2.8.0
	 * @access public
	 *
	 * @param array $new_instance New settings for this instance as input by the user via
	 *                            WP_Widget::form().
	 * @param array $old_instance Old settings for this instance.
	 * @return array Settings to save or bool false to cancel saving.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		if ( current_user_can( 'unfiltered_html' ) ) {
			$instance['bootstrap-card-text'] = $new_instance['bootstrap-card-text'];
			$instance['card-img'] = $new_instance['card-img'];
		} else {
			$instance['bootstrap-card-text'] = wp_kses_post( $new_instance['bootstrap-card-text'] );
			$instance['card-img'] = wp_kses_post( $new_instance['card-img'] );
		}
		$instance['filter'] = ! empty( $new_instance['filter'] );
		return $instance;
	}

	/**
	 * Outputs the Bootstrap Card widget settings form.
	 *
	 * @since 2.8.0
	 * @access public
	 *
	 * @param array $instance Current settings.
	 */
	public function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'bootstrap-card-text' => '' ) );
		$instance = wp_parse_args( (array) $instance, array( 'card_img' => '', 'card-img' => '' ) );
		$filter = isset( $instance['filter'] ) ? $instance['filter'] : 0;
		$title = sanitize_text_field( $instance['title'] );

		?>
		<p><label for="<?php echo $this->get_field_id('card-img'); ?>"><?php _e('Image URL:'); ?></label>
		<textarea class="widefat" rows="2" cols="20" id="<?php echo $this->get_field_id('card-img'); ?>" name="<?php echo $this->get_field_name('card-img'); ?>"><?php echo esc_textarea( $instance['card-img'] ); ?></textarea>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

		<p><label for="<?php echo $this->get_field_id( 'bootstrap-card-text' ); ?>"><?php _e( 'Content:' ); ?></label>
		<textarea class="widefat" rows="11" cols="20" id="<?php echo $this->get_field_id('bootstrap-card-text'); ?>" name="<?php echo $this->get_field_name('bootstrap-card-text'); ?>"><?php echo esc_textarea( $instance['bootstrap-card-text'] ); ?></textarea></p>

		<p><input id="<?php echo $this->get_field_id('filter'); ?>" name="<?php echo $this->get_field_name('filter'); ?>" type="checkbox"<?php checked( $filter ); ?> />&nbsp;<label for="<?php echo $this->get_field_id('filter'); ?>"><?php _e('Automatically add paragraphs'); ?></label></p>
		<?php
	}
}


// Register Widget
function register_wp_widget_bootstrap_card() {
    register_widget( 'WP_Widget_Bootstrap_Card' );
}

add_action( 'widgets_init', 'register_wp_widget_bootstrap_card' );