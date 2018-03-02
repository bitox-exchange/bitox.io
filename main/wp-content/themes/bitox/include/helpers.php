<?php
/**
 * Add custom classes to element
 * @param string $class
 * @param string $element
 */
function set_custom_class($class, $element) {
  $GLOBALS['custom_class'][$element] = ' ' . $class;
}

/**
 * Get custom classes
 * @param string $element
 * @return null|string
 */
function get_custom_class($element) {
  if (
    is_array( $GLOBALS['custom_class'] ) &&
    array_key_exists( $element, $GLOBALS['custom_class'] )
  ) {
    return $GLOBALS['custom_class'][$element];
  }

  return null;
}

/**
 * Handle CFS field values with translation.
 * Plugins used: CFS, Polylang.
 *
 * @param string $field_name Custom field slug
 * @param int|bool $post_id
 * @param bool $default_value Return value from default language
 * @return mixed
 */
function theme_get_CFS_field( $field_name, $post_id = false, $default_value = true ) {
  global $post;

  !$post_id ? $post_id = $post->ID : null;

  $result = CFS()->get( $field_name, $post_id );

  // get value from default lang
  if ( !$result && $default_value ) {
    $post_id_default = pll_get_post( $post_id, pll_default_language() );

    $result = CFS()->get( $field_name, $post_id_default );
  }

  return $result;
}
