<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2012 Andreas Lappe <a.lappe@kuehlhaus.com>, kuehlhaus AG
*
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

require_once('Helper.php');

/**
 * Test case for class tx_form_System_Validate_Ip.
 *
 * @author Andreas Lappe <a.lappe@kuehlhaus.com>
 * @package TYPO3
 * @subpackage form
 */
class tx_form_System_Validate_IpTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var tx_form_System_Validate_Helper
	 */
	protected $helper;

	/**
	 * @var tx_form_System_Validate_Ip
	 */
	protected $fixture;

	public function setUp() {
		$this->helper = new tx_form_System_Validate_Helper();
		$this->fixture = new tx_form_System_Validate_Ip();
	}

	public function tearDown() {
		unset($this->helper);
		unset($this->fixture);
	}

	public function validIpv4Provider() {
		return array(
			'127.0.0.1'   => array('127.0.0.1', TRUE),
			'10.0.0.4'    => array('10.0.0.4', TRUE),
			'192.168.0.4' => array('192.168.0.4', TRUE),
			'0.0.0.0'     => array('0.0.0.0', TRUE)
		);
	}

	public function invalidIpv4Provider() {
		return array(
			'127.0.0.256' => array('127.0.0.256', FALSE),
			'256.0.0.2'   => array('256.0.0.2', FALSE)
		);
	}

	/**
	 * @test
	 * @dataProvider validIpv4Provider
	 */
	public function isValidForValidInputReturnsTrue($input, $expected) {
		$this->fixture->setFieldName('myIp');
		$requestHandlerMock = $this->helper->getRequestHandler(array(
			'myIp' => $input
		));
		$this->fixture->injectRequestHandler($requestHandlerMock);

		$this->assertSame(
			$expected,
			$this->fixture->isValid()
		);
	}

	/**
	 * @test
	 * @dataProvider invalidIpv4Provider
	 */
	public function isValidForInvalidInputReturnsFalse($input, $expected) {
		$this->fixture->setFieldName('myIp');
		$requestHandlerMock = $this->helper->getRequestHandler(array(
			'myIp' => $input
		));
		$this->fixture->injectRequestHandler($requestHandlerMock);

		$this->assertSame(
			$expected,
			$this->fixture->isValid()
		);
	}
}
?>