<?php
/**
 * Class ConstantsTest
 *
 * @package Acf_Svg_Icon_Picker
 */

/**
 * Sample test case.
 */
class ConstantsTest extends WP_UnitTestCase {

	public function test_version_const() {
		
		$has_version = defined( 'ACF_SVG_ICON_PICKER_VERSION' );

		$this->assertTrue($has_version);
	}

	public function test_plugin_file_const() {
		
		$has_plugin_file = defined( 'ACF_SVG_ICON_PICKER_URL' );

		$this->assertTrue($has_plugin_file);
	}

	public function test_plugin_dir_const() {
		
		$has_plugin_dir = defined( 'ACF_SVG_ICON_PICKER_PATH' );

		$this->assertTrue($has_plugin_dir);
	}

}
