<?php 
// h/t to andersnoren.se, on whose lovecraft theme this widget is entirely based

class hhproto2_recent_posts extends WP_Widget {

	function hhproto2_recent_posts() {
		parent::WP_Widget(false, $name = __('Recent Posts', 'hhproto2'), array('description' => __('Displays recent blog entries.', 'hhproto2') ));	
	}
	
	function widget($args, $instance) {
	}
	
	
	function update($new_instance, $old_instance) {
	}
	
	function form($instance) {
	}
}

register_widget('hhproto2_recent_posts'); ?>