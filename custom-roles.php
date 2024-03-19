<?php
/*
Plugin Name: Custom Role Titles
Description: Correctly changes the names of the roles to more correctly match those for 3M Club
Version: 1.0
Author: Rick Swanson
*/

function customize_roles( $roles ) {
    // Hide roles
    $roles_to_hide = array( 'contributor', 'content_editor', 'author'); // Add 'Pending' if you want to hide it

    foreach ( $roles_to_hide as $role ) {
        if ( isset( $roles[ $role ] ) ) {
            unset( $roles[ $role ] );
        }
    }

    // Change role name
    $roles['subscriber']['name'] = 'Member';

    return $roles;
}
add_filter( 'editable_roles', 'customize_roles' );
