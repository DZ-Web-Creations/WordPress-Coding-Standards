<?php
/**
 * Unit test class for WordPress Coding Standard.
 *
 * @package  PHP\CodeSniffer\WordPress-Coding-Standards
 * @link     https://make.wordpress.org/core/handbook/best-practices/coding-standards/
 */

/**
 * Unit test class for the PHP_DiscouragedFunctions sniff.
 *
 * @package PHP\CodeSniffer\WordPress-Coding-Standards
 * @author  Akeda Bagus <akeda@x-team.com>
 * @since   2013-06-11
 */
class WordPress_Tests_PHP_DiscouragedFunctionsUnitTest extends AbstractSniffUnitTest {

	/**
	 * Returns the lines where errors should occur.
	 *
	 * @return array <int line number> => <int number of errors>
	 */
	public function getErrorList() {
		return array();

	}

	/**
	 * Returns the lines where warnings should occur.
	 *
	 * @return array <int line number> => <int number of warnings>
	 */
	public function getWarningList() {
		return array(
			8 => 1,
			9 => 1,
			15 => 1,
			17 => 1,
			19 => 1,
			21 => 1,
			23 => 1,
			25 => 1,
			27 => 1,
			29 => 1,
			31 => 1,
			33 => 1,
			35 => 1,
			37 => 1,
			39 => 1,
			45 => 1,
			47 => 1,
			52 => 1,
			54 => 1,
		);

	}

} // End class.
