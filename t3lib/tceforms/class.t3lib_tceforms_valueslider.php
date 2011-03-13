<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2010-2011 Steffen Ritter <info@steffen-ritter.net>
 *  (c) 2010-2011 Steffen Kamper <steffen@typo3.org>
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
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
/**
 * TCEforms wizard for rendering an AJAX selector for records
 *
 * $Id: class.t3lib_tceforms_suggest.php 7905 2010-06-13 14:42:33Z ohader $
 *
 * @author Steffen Kamper <steffen@typo3.org>
 */

class t3lib_TCEforms_ValueSlider {

	/**
	 * Renders the slider value wizard
	 *
	 * @param array $params
	 * @param t3lib_TCEforms $pObj
	 * @return string
	 */
	function renderWizard(&$params, &$pObj) {

		$jsPath = '../t3lib/js/extjs/components/slider/';
		$pObj->loadJavascriptLib($jsPath . 'ValueSlider.js');

		$field = $params['field'];
		$value = intval($params['row'][$field]);
		$itemName = $params['itemName'];
		$min = intval($params['fieldConfig']['min']);
		$max = intval($params['fieldConfig']['max']);
		$elementType = $params['fieldConfig']['type'];
		$step =  $params['wConf']['step'] ? $params['wConf']['step'] : 1;
		$width = intval($params['wConf']['width']) ? intval($params['wConf']['width']) : 400;

		$type = 'null';
		if (isset($params['fieldConfig']['eval'])) {
			$eval = t3lib_div::trimExplode(',', $params['fieldConfig']['eval'], TRUE);
			if (in_array('time', $eval)) {
				$type = 'time';
			} elseif (in_array('int', $eval)) {
				$type = 'int';
			} elseif (in_array('double2', $eval)) {
				$type = 'double';
			}
		}
		if (isset($params['fieldConfig']['items'])) {
			$type = 'array';
		}
		$callback = $params['fieldChangeFunc']['TBE_EDITOR_fieldChanged'];
		$getField = $params['fieldChangeFunc']['typo3form.fieldGet'];
		$id = 'slider-' . $params['md5ID'];
		$div = '<div id="' . $id . '"></div>';
		$js = '
		new TYPO3.Components.TcaValueSlider({
			minValue: ' . $min . ',
			maxValue: ' . $max . ',
			value: ' . $value . ',
			increment: ' . $step . ',
			renderTo: "' . $id . '",
			itemName: "' . $itemName . '",
			changeCallback: "' . $callback . '",
			getField: "' . $getField . '",
			width: "' . $width . '",
			type: "' . $type . '",
			elementType: "' . $elementType . '"
		});
		';
		/** @var $pageRenderer t3lib_pageRenderer */
		$pageRenderer = $GLOBALS['SOBE']->doc->getPageRenderer();
		$pageRenderer->addExtOnReadyCode($js);

		return $div;
	}
}


if (defined('TYPO3_MODE') && isset($GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['classes/t3lib/tceforms/class.t3lib_tceforms_valueslider.php'])) {
	include_once($GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['classes/t3lib/tceforms/class.t3lib_tceforms_valueslider.php']);
}

?>