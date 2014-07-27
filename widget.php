<?

/** Widget Class */
class oypie_cart extends WP_Widget {
 
    function oypie_cart() {
        parent::WP_Widget(false, $name = 'OYPie Winkelwagen');    
    }
 
	function widget($args, $instance) {
 
	extract( $args );
		
			$title = apply_filters( 'widget_title', empty($instance['title']) ? 'Recent Posts' : $instance['title'], $instance, $this->id_base);	
            $url = $instance['url'];
            $class = $instance['class'];
            $no_pro = $instance['no_pro'];

			
			echo $before_widget;
			
			// Widget title
			
			echo $before_title;
			echo $instance["title"];
			echo $after_title;
			
			// Post list in widget
			
            echo '<a class="'.$class.'" href="'.$instance['url'].'">
            Afrekenen</a>';
            
            echo '<ul id="PixxerSelection">'.$no_pro.'</ul>';

		 wp_reset_query();

		echo "</table>\n";
		echo $after_widget;
        
        echo '<script src="http://www.oypo.nl/pixxer/api/pixxerinit.asp?nologo=1" type="text/javascript"></script>';

	}
 
    function update($new_instance, $old_instance) {        
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['url'] = strip_tags($new_instance['url']);
        $instance['class'] = strip_tags($new_instance['class']);
        $instance['no_pro'] = strip_tags($new_instance['no_pro']);
        return $instance;
    }
 
    function form($instance) {    
 
        $title         = esc_attr($instance['title']);
        $url    = esc_attr($instance['url']);
        $class    = esc_attr($instance['class']);
        $no_pro    = esc_attr($instance['no_pro']);
        ?>
         <p>
          <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Titel:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('url'); ?>">Afrekenurl</label> 
          <input class="widefat" id="<?php echo $this->get_field_id('url'); ?>" placeholder="" name="<?php echo $this->get_field_name('url'); ?>" type="text" value="<?php echo $url; ?>" />
          <small><strong>Bijvoorbeeld:</strong> http://www.oypo.nl/content.asp?path=eanbc1ni</small>
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('class'); ?>">Button class</label> 
          <input class="widefat" id="<?php echo $this->get_field_id('class'); ?>" placeholder="btn" name="<?php echo $this->get_field_name('class'); ?>" type="text" value="<?php echo $class; ?>" />
          <small><strong>Bijvoorbeeld:</strong> btn</small>
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('class'); ?>">Melding lege winkelwagen</label> 
          <input class="widefat" id="<?php echo $this->get_field_id('no_pro'); ?>" placeholder="Geen producten in de winkelwagen." name="<?php echo $this->get_field_name('no_pro'); ?>" type="text" value="<?php echo $no_pro; ?>" />
          <small><strong>Bijvoorbeeld:</strong> Geen producten in de winkelwagen.</small>
        </p>
        <?php 
    }
 
} // end class
add_action('widgets_init', create_function('', 'return register_widget("oypie_cart");'));
