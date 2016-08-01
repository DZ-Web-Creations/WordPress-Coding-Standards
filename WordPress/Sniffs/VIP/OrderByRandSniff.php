<?php
/**
 * WordPress Coding Standard.
 *
 * @package  PHP\CodeSniffer\WordPress-Coding-Standards
 * @link     https://make.wordpress.org/core/handbook/best-practices/coding-standards/
 */

/**
 * Flag using orderby => rand.
 *
 * @link     https://vip.wordpress.com/documentation/code-review-what-we-look-for/#order-by-rand
 *
 * @package  PHP\CodeSniffer\WordPress-Coding-Standards
 */
class WordPress_Sniffs_VIP_OrderByRandSniff extends WordPress_AbstractArrayAssignmentRestrictionsSniff {

	/**
	 * Groups of variables to restrict.
	 *
	 * @return array
	 */
	public function getGroups() {
		return array(
			'orderby' => array(
				'type' => 'error',
				'keys' => array(
					'orderby',
				),
			),
		);
	}

	/**
	 * Callback to process each confirmed key, to check value
	 * This must be extended to add the logic to check assignment value
	 *
	 * @param  string $key   Array index / key.
	 * @param  mixed  $val   Assigned value.
	 * @param  int    $line  Token line.
	 * @param  array  $group Group definition.
	 * @return mixed         FALSE if no match, TRUE if matches, STRING if matches with custom error message passed to ->process().
	 */
	public function callback( $key, $val, $line, $group ) {
		if ( 'rand' === strtolower( $val ) ) {
			return 'Detected forbidden query_var "%s" of "%s". Use vip_get_random_posts() instead.';
		} else {
			return false;
		}
	} // end callback()

} // end class
