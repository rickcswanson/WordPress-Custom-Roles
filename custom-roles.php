<?php
/*
Plugin Name: Custom Role Titles
Description: Correctly changes the names of the roles to more correctly match those for 3M Club
Version: 1.0
Author: Rick Swanson
*/

function customize_roles( $roles ) {
    // Add roles within the array to hide
    $roles_to_hide = array( 'contributor', 'author'); // For example, add 'editor' if you want to hide that specific role

    foreach ( $roles_to_hide as $role ) {
        if ( isset( $roles[ $role ] ) ) {
            unset( $roles[ $role ] );
        }
    }

    // This changes the name of a role to correctly fit whatever you need it for
    $roles['subscriber']['name'] = 'Member';

    return $roles;
}
add_filter( 'editable_roles', 'customize_roles' );
