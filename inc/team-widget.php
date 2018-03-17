<?php
/**
 * Wonkasoft Theme Team Member and definitions
 *
 * @link http://wonkasoft.com/wonkasoft-theme
 *
 * @package WonkasoftTheme
 * @since 1.0.0 [<init>]
 */
class Team_Widget extends WP_Widget {
  
  // Setup widget name description etc...
  public function __construct() {
    
    $widget_options = array(
      'classname' => 'team-member',
      'description' => 'Team Member'  
    );

  parent::__construct( 'team-member','Team Member', $widget_options );
  }
  // back-end
  public function form( $instance ) {
    $instance = wp_parse_args((array) $instance, array(
      'id' => $this->id,
      'team_profile_picture' => '', 
      'team_member_name' => '', 
      'team_member_bio' => '', 
      'social_facebook' => '', 
      'social_twitter' => '', 
      'social_instagram' => '', 
      'social_github' => '', 
      'social_behance' => '', 
      'team_member_page' => '', 
      ));
    $custom_id = $instance['id'];
    $team_profile_picture = $instance['team_profile_picture'];
    $team_member_name = sanitize_text_field( $instance['team_member_name'] );
    $team_member_bio = sanitize_text_field( $instance['team_member_bio'] );
    $social_facebook = sanitize_text_field( $instance['social_facebook'] );
    $social_twitter = sanitize_text_field( $instance['social_twitter'] );
    $social_instagram = sanitize_text_field( $instance['social_instagram'] );
    $social_github = sanitize_text_field( $instance['social_github'] );
    $social_behance = sanitize_text_field( $instance['social_behance'] );
    $team_member_page = sanitize_text_field( $instance['team_member_page'] );
    ?>

  <!-- Input -->
  <label for="<?php echo $this->get_field_id( 'team_profile_picture' ); ?>"><?php _e( 'Profile Picture:' ); ?></label>
  <input type="hidden" name="<?php echo $this->get_field_name('id'); ?>" value="<?php echo $this->id ?>"> 
  <?php  
    if ( $instance['team_profile_picture'] != '' ) :
      echo '<img class="custom_media_image" src="' . $instance['team_profile_picture'] . '" /><br />';
    endif;
  ?>
  <input type="text" class="widefat custom_media_url <?php echo $this->id; ?>" name="<?php echo $this->get_field_name( 'team_profile_picture' ); ?>" id="<?php echo $this->id;?>" value="<?php echo $instance['team_profile_picture']; ?>"><br />
  <input type="button" class="button button-primary custom_media_button <?php echo $this->id;?>" id="custom_media_button_<?php echo $this->id; ?>" name="<?php echo $this->get_field_name( 'team_profile_picture' ); ?>" value="Upload Image" /><br /><br />
   
  <label for="<?php echo $this->get_field_id( 'team_member_name' ); ?>"><?php _e( 'User Name:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'team_member_name' ); ?>" name="<?php echo $this->get_field_name( 'team_member_name' ); ?>" type="text" value="<?php echo esc_attr( $team_member_name ); ?>" />
  
  <label for="<?php echo $this->get_field_id( 'team_member_bio' ); ?>"><?php _e( 'Bio:') ; ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'team_member_bio' ); ?>" name="<?php echo $this->get_field_name( 'team_member_bio' ); ?>" type="textarea" value="<?php echo esc_attr( $team_member_bio ); ?>" />
  
  <label for="<?php echo $this->get_field_id( 'social_facebook' ); ?>"><?php _e( 'Social Facebook:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'social_facebook' ); ?>" name="<?php echo $this->get_field_name( 'social_facebook' ); ?>" type="text" value="<?php echo esc_attr( $social_facebook ); ?>" />
  
  <label for="<?php echo $this->get_field_id( 'social_twitter' ); ?>"><?php _e( 'Social Twitter:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'social_twitter' ); ?>" name="<?php echo $this->get_field_name( 'social_twitter' ); ?>" type="text" value="<?php echo esc_attr( $social_twitter ); ?>" />
  
  <label for="<?php echo $this->get_field_id( 'social_instagram' ); ?>"><?php _e( 'Social Instagram:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'social_instagram' ); ?>" name="<?php echo $this->get_field_name( 'social_instagram' ); ?>" type="text" value="<?php echo esc_attr( $social_instagram ); ?>" />
  
  <label for="<?php echo $this->get_field_id( 'social_github' ); ?>"><?php _e( 'Social GitHub:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'social_github' ); ?>" name="<?php echo $this->get_field_name( 'social_github' ); ?>" type="text" value="<?php echo esc_attr( $social_github ); ?>" />
  
  <label for="<?php echo $this->get_field_id( 'social_behance' ); ?>"><?php _e( 'Social BeHance:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'social_behance' ); ?>" name="<?php echo $this->get_field_name( 'social_behance' ); ?>" type="text" value="<?php echo esc_attr( $social_behance ); ?>" />
  
  <label for="<?php echo $this->get_field_id( 'team_member_page' ); ?>"><?php _e('Member Page:'); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'team_member_page' ); ?>" name="<?php echo $this->get_field_name( 'team_member_page' ); ?>" type="text" value="<?php echo esc_attr( $team_member_page ); ?>" />
  

    <?php
  }
  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $new_instance = wp_parse_args((array) $new_instance, array(
      'id' => $this->id,
      'team_profile_picture' => '', 
      'team_member_name' => '', 
      'team_member_bio' => '', 
      'social_facebook' => '', 
      'social_twitter' => '', 
      'social_instagram' => '', 
      'social_github' => '', 
      'social_behance' => '', 
      'team_member_page' => '', 
      ));
    $instance['id'] = $new_instance['id'];
    $instance['team_profile_picture'] = $new_instance['team_profile_picture'];
    $instance['team_member_name'] = sanitize_text_field($new_instance['team_member_name']);
    $instance['team_member_bio'] = sanitize_text_field($new_instance['team_member_bio']);
    $instance['social_facebook'] = sanitize_text_field($new_instance['social_facebook']);
    $instance['social_twitter'] = sanitize_text_field($new_instance['social_twitter']);
    $instance['social_instagram'] = sanitize_text_field($new_instance['social_instagram']);
    $instance['social_github'] = sanitize_text_field($new_instance['social_github']);
    $instance['social_behance'] = sanitize_text_field($new_instance['social_behance']);
    $instance['team_member_page'] = sanitize_text_field($new_instance['team_member_page']);
    return $instance;
  }
  // front-end
  public function widget( $args, $instance ) {
    $instance_id = isset($instance['id']) ? $instance['id'] : false;
    $team_profile_picture = isset($instance['team_profile_picture']) ? $instance['team_profile_picture'] : false;
    $team_member_name = isset($instance['team_member_name']) ? $instance['team_member_name'] : false;
    $team_member_bio = isset($instance['team_member_bio']) ? $instance['team_member_bio'] : false;
    $social_facebook = isset($instance['social_facebook']) ? $instance['social_facebook'] : false;
    $social_twitter = isset($instance['social_twitter']) ? $instance['social_twitter'] : false;
    $social_instagram = isset($instance['social_instagram']) ? $instance['social_instagram'] : false;
    $social_github = isset($instance['social_github']) ? $instance['social_github'] : false;
    $social_behance = isset($instance['social_behance']) ? $instance['social_behance'] : false;
    $team_member_page = isset($instance['team_member_page']) ? $instance['team_member_page'] : false;
    // widget is parsed
    $output ='';
    $output .= '<div class="col member-wrap">';
      $output .= '<div class="member-box">';
        $output .= '<div class="row row-profile-picture">';
          $output .= '<div class="col">';
            $output .= '<img src="'.$team_profile_picture.'" />';
          $output .= '</div><!-- /col -->';
        $output .= '</div><!-- /row row-profile-picture -->';
        $output .= '<div class="row row-member-name">';
          $output .= '<div class="col">';
            $output .= '<span><h3>'.$team_member_name.'</h3></span>';
          $output .= '</div><!-- /col-->';
        $output .= '</div><!-- /row row-member-name-->';
        $output .= '<div class="row row-member-bio">';
          $output .= '<div class="col">';
            $output .= '<p>'.$team_member_bio.'</p>';
          $output .= '</div><!-- /col -->';
        $output .= '</div><!-- /row row-member-bio -->';
        $output .= '<div class="row row-socials justify-content-space-evenly">';
          if ( $social_facebook ) {
            $output .= '<span class="member-facebook-link">';
              $output .= '<a href="'.$social_facebook.'" target="_blank"><i class="fa fa-facebook"></i></a>';
            $output .= '</span><!-- /member-facebook-link -->';
          }
          if ( $social_twitter ) {
            $output .= '<span class="member-twitter-link">';
              $output .= '<a href="'.$social_twitter.'" target="_blank"><i class="fa fa-twitter"></i></a>';
            $output .= '</span><!-- /member-twitter-link -->';
          }

          if ( $social_instagram ) {
            $output .= '<span class="member-instagram-link">';
              $output .= '<a href="'.$social_instagram.'" target="_blank"><i class="fa fa-instagram"></i></a>';
            $output .= '</span><!-- /member-instagram-link -->';
          }
          if ( $social_github ) {
            $output .= '<span class="member-github-link">';
              $output .= '<a href="'.$social_github.'" target="_blank"><i class="fa fa-git"></i></a>';
            $output .= '</span><!-- /member-github-link -->';
          }
          if ( $social_behance ) {
            $output .= '<span class="member-behance-link">';
              $output .= '<a href="'.$social_behance.'" target="_blank"><i class="fa fa-behance"></i></a>';
            $output .= '</span><!-- /member-behance-link -->';
          }
        $output .= '</div><!-- /row row-socials -->';
        
        if ( $team_member_page ) {
          $output .= '<div class="row row-member-page">';
            $output .= '<a href="'.$team_member_page.'">Read More</a>';
          $output .= '</div><!-- /row row-member-page-->';
        }
      $output .= '</div><!-- /member-box -->';
    $output .= '</div><!-- /col memeber-wrap -->';
    ob_start();
    $output .= ob_get_clean();
    echo $output;
  }
}
add_action( 'widgets_init', function() {
  register_widget('Team_Widget');
} );