<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Felix Kopp <felix-source@phorax.com>
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
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class Tx_Beuser_Domain_Model_Demand
 *
 * @author Felix Kopp <felix-source@phorax.com>
 * @package TYPO3
 * @subpackage beuser
 */
class Tx_Beuser_Domain_Model_DemandTest extends Tx_Extbase_Tests_Unit_BaseTestCase {

	/**
	 * @var Tx_Beuser_Domain_Model_Demand
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Beuser_Domain_Model_Demand();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function setUsertypeAllExpectedValueForInt() {
		$usertype = Tx_Beuser_Domain_Model_Demand::ALL;
		$this->fixture->setUsertype($usertype);
		$this->assertSame($this->fixture->getUsertype(), $usertype);
	}

	/**
	 * @test
	 */
	public function setUsertypeAdminOnlyExpectedValueForInt() {
		$usertype = Tx_Beuser_Domain_Model_Demand::USERTYPE_ADMINONLY;
		$this->fixture->setUsertype($usertype);
		$this->assertSame($this->fixture->getUsertype(), $usertype);
	}

	/**
	 * @test
	 */
	public function setUsertypeUserOnlyExpectedValueForInt() {
		$usertype = Tx_Beuser_Domain_Model_Demand::USERTYPE_USERONLY;
		$this->fixture->setUsertype($usertype);
		$this->assertSame($this->fixture->getUsertype(), $usertype);
	}

	/**
	 * @test
	 */
	public function setStatusAllExpectedValueForInt() {
		$status = Tx_Beuser_Domain_Model_Demand::ALL;
		$this->fixture->setStatus($status);
		$this->assertSame($this->fixture->getStatus(), $status);
	}

	/**
	 * @test
	 */
	public function setStatusActiveExpectedValueForInt() {
		$status = Tx_Beuser_Domain_Model_Demand::STATUS_ACTIVE;
		$this->fixture->setStatus($status);
		$this->assertSame($this->fixture->getStatus(), $status);
	}

	/**
	 * @test
	 */
	public function setStatusInactiveExpectedValueForInt() {
		$status = Tx_Beuser_Domain_Model_Demand::STATUS_INACTIVE;
		$this->fixture->setStatus($status);
		$this->assertSame($this->fixture->getStatus(), $status);
	}

	/**
	 * @test
	 */
	public function setLoginAllExpectedValueForInt() {
		$login = Tx_Beuser_Domain_Model_Demand::ALL;
		$this->fixture->setLogins($login);
		$this->assertSame($this->fixture->getLogins(), $login);
	}

	/**
	 * @test
	 */
	public function setLoginNoneExpectedValueForInt() {
		$login = Tx_Beuser_Domain_Model_Demand::LOGIN_NONE;
		$this->fixture->setLogins($login);
		$this->assertSame($this->fixture->getLogins(), $login);
	}

	/**
	 * @test
	 */
	public function setLoginxSameExpectedValueForInt() {
		$login = Tx_Beuser_Domain_Model_Demand::LOGIN_SOME;
		$this->fixture->setLogins($login);
		$this->assertSame($this->fixture->getLogins(), $login);
	}


	/**
	 * @test
	 */
	public function getUsernameInitialValueForString() {
		$this->assertSame($this->fixture->getUsername(), '', 'Username must be empty string.');
	}

	/**
	 * @test
	 */
	public function setUsernameReturnExpectedValueForString() {
		$newUsername = 'User#ää*%^name';
		$this->fixture->setUsername($newUsername);
		$this->assertSame(
			$this->fixture->getUsername(),
			$newUsername,
			'Username is not as set before.'
		);
	}

}

?>