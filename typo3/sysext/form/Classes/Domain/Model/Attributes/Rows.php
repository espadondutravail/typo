<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2008 Patrick Broens (patrick@patrickbroens.nl)
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

/**
 * Attribute 'rows'
 *
 * @author Patrick Broens <patrick@patrickbroens.nl>
 * @package TYPO3
 * @subpackage form
 */
class tx_Form_Domain_Model_Attributes_Rows extends tx_Form_Domain_Model_Attributes_Abstract implements tx_Form_Domain_Model_Attributes_Interface {

	/**
	 * Constructor
	 *
	 * @param string $value Attribute value
	 * @param integer $elementId The ID of the element
	 * @return void
	 */
	public function __construct($value, $elementId) {
		parent::__construct($value, $elementId);
	}

	/**
	 * Sets the attribute 'rows'.
	 * Used with the element 'textarea'
	 * Not subject to case changes, because it's an integer
	 *
	 * This attribute specifies the number of visible text lines.
	 * Users should be able to enter more lines than this,
	 * so user agents should provide some means to scroll
	 * through the contents of the control when the contents extend
	 * beyond the visible area.
	 *
	 * @return integer Attribute value
	 */
	public function getValue() {
		$value = (integer) $this->value;

		if($value <= 0) {
			$attribute = 80;
		} else {
			$attribute = $value;
		}

		return $attribute;
	}
}
?>