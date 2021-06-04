<?php

/**
 * Base unit test class for Co-Authors Plus Social Pack
 */
class CoAuthorsPlusSocialPack_TestCase extends WP_UnitTestCase {
	public function setUp() {
		parent::setUp();

		global $coauthors_plus_social_pack;
		$this->_capsp = $coauthors_plus_social_pack;
	}
}
