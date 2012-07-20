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
 * Views sprite icon for a record (object)
 *
 * @author Felix Kopp <felix-source@phorax.com>
 * @package TYPO3
 * @subpackage beuser
 */
class Tx_Beuser_ViewHelpers_SpriteIconForRecordViewHelper extends Tx_Fluid_ViewHelpers_Be_AbstractBackendViewHelper {

	/**
	 * Displays spriteIcon for database table and object
	 *
	 * @param string $table
	 * @param object $object
	 * @return string
	 * @see t3lib_iconWorks::getSpriteIconForRecord($table, $row)
	 */
	public function render($table, $object) {
		if (!is_object($object) || !method_exists($object, 'getUid')) {
			return '';
		}

		$row = array(
			'uid' => $object->getUid(),
			'disable' => $object->getDisable() ? $object->getDisable() : 0,
			'startTime' => FALSE,
			'endTime' => FALSE,
		);

		if ($table === 'be_users' && get_class($object) === 'Tx_Beuser_Domain_Model_BackendUser') {
			$row['admin'] = $object->getAdmin();
		}

		if (method_exists($object, 'getStarttime')) {
			$row['startTime'] = $object->getStartTime();
		}

		if (method_exists($object, 'getEndtime')) {
			$row['endTime'] = $object->getEndTime();
		}

		return t3lib_iconWorks::getSpriteIconForRecord($table, $row);
	}
}

?>
