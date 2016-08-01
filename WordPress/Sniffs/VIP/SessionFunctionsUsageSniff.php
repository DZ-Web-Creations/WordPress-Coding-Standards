<?php
/**
 * WordPress Coding Standard.
 *
 * @package  PHP\CodeSniffer\WordPress-Coding-Standards
 * @link     https://make.wordpress.org/core/handbook/best-practices/coding-standards/
 */

if ( ! class_exists( 'Generic_Sniffs_PHP_ForbiddenFunctionsSniff', true ) ) {
	throw new PHP_CodeSniffer_Exception( 'Class Generic_Sniffs_PHP_ForbiddenFunctionsSniff not found' );
}

/**
 * WordPress_Sniffs_VIP_SessionFunctionsUsageSniff.
 *
 * Discourages the use of session functions.
 *
 * @link     https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/75
 *
 * @package  PHP\CodeSniffer\WordPress-Coding-Standards
 * @author   Shady Sharaf <shady@x-team.com>
 */
class WordPress_Sniffs_VIP_SessionFunctionsUsageSniff extends Generic_Sniffs_PHP_ForbiddenFunctionsSniff {

	/**
	 * A list of forbidden functions with their alternatives.
	 *
	 * The value is NULL if no alternative exists. I.e. the
	 * function should just not be used.
	 *
	 * @var array(string => string|null)
	 */
	public $forbiddenFunctions = array(
		'session_cache_expire'      => null,
		'session_cache_limiter'     => null,
		'session_commit'            => null,
		'session_decode'            => null,
		'session_destroy'           => null,
		'session_encode'            => null,
		'session_get_cookie_params' => null,
		'session_id'                => null,
		'session_is_registered'     => null,
		'session_module_name'       => null,
		'session_name'              => null,
		'session_regenerate_id'     => null,
		'session_register_shutdown' => null,
		'session_register'          => null,
		'session_save_path'         => null,
		'session_set_cookie_params' => null,
		'session_set_save_handler'  => null,
		'session_start'             => null,
		'session_status'            => null,
		'session_unregister'        => null,
		'session_unset'             => null,
		'session_write_close'       => null,
	);

	protected function addError( $phpcsFile, $stackPtr, $function, $pattern = null ) {
		$data  = array( $function );
		$error = 'The use of PHP session function %s() is prohibited.';

		$phpcsFile->addError( $error, $stackPtr, $function, $data );

	} // end addError()

} // End class.
