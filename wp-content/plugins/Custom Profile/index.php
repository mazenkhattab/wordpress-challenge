<?php 
/*
 * Plugin Name: Age Field for Users
 * Description: This plugin adds an age field to the user profile page in WordPress.
 */

 add_action( 'show_user_profile', 'add_extra_user_fields' );
 add_action( 'edit_user_profile', 'add_extra_user_fields' );
 
 function add_extra_user_fields( $user ) {
 ?>
     <h3>Extra user information</h3>
 
     <table class="form-table">
         <tr>
             <th><label for="age">Age</label></th>
             <td>
                 <input type="text" name="age" id="age" value="<?php echo esc_attr( get_the_author_meta( 'age', $user->ID ) ); ?>" class="regular-text" /><br />
                 <span class="description">Please enter your age.</span>
             </td>
         </tr>
     </table>
 <?php }
 
 add_action( 'personal_options_update', 'save_extra_user_fields' );
 add_action( 'edit_user_profile_update', 'save_extra_user_fields' );
 
 function save_extra_user_fields( $user_id ) {
 
     if ( !current_user_can( 'edit_user', $user_id ) )
         return false;
 
     update_usermeta( $user_id, 'age', $_POST['age'] );
 }




 function age_sanitize_callback($value, $user_id) {
    // Make sure the value is a positive integer
    $value = absint($value);

    return $value;
}

// Register a custom meta field for the age of the user 
add_action( 'rest_api_init', 'register_age_meta_field' );
function register_age_meta_field() {
    // Age meta field
    register_rest_field( 
        'user',
        'age',
        array(
            'get_callback' => 'age_meta_field_callback',
            'update_callback' => 'age_meta_field_update_callback',
            'schema' => array(
                'description' => __( 'The age of the user.' ),
                'type' => 'string',
                'context' => array( 'view', 'edit', 'embed' ),
                'arg_options' => array(
                    'sanitize_callback' => 'sanitize_age_field',
                ),
            ),
        )
    );
}

// Returns the value of the age field
function age_meta_field_callback( $object, $field_name, $request ) {
    return get_user_meta( $object[ 'id' ], $field_name, true );
}

// Updates the value of the age field
function age_meta_field_update_callback( $value, $object, $field_name ) {
    return update_user_meta( $object->ID, $field_name, $value );
}

// Sanitizes the age field
function sanitize_age_field( $value, $request, $field_name ) {
    if ( $value <= 18 || $value > 110 ) {
        return new WP_Error( 'invalid_age', 'The age should be between 18 and 110' );
    }
    return $value;
}

 