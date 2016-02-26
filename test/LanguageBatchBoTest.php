<?php

include_once  'src/LanguageBatchBo.php';

class LanguageBatchBoTest extends PHPUnit_Framework_TestCase {

	/**
     * @expectedException PHPUnit_Framework_Error
    */
	public function testCanNotBeErrors()
    {
    	//$LanguageBatchBo = new Language\LanguageBatchBo;
    	// Optional: Test anything here, if you want.
        $this->assertTrue(TRUE, 'This should already work.');

        // Stop here and mark this test as incomplete.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

}

?>