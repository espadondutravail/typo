<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2010-2012 GridView Team
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

class tx_cms_BackendLayout_ProcFunc implements t3lib_Singleton {

	/*
	 * @var tx_cms_BackendLayout $backendLayout
	 */
	protected $backendLayout;

	/**
	 * Constructor
	 *
	 * @return	void
	 */
	function __construct() {
		$this->backendLayout = t3lib_div::makeInstance('tx_cms_BackendLayout'); 
	}

	/**
	 * ItemProcFunc for layout items
	 *
	 * @author Arno Dudek <webmaster@adgrafik.at>
	 * @param array	$params: An array containing the items and parameters
	 * @return void
	 */
	public function backendLayoutItemsProcFunc(&$params) {

		$this->backendLayout
			->loadSetup($this->getCurrentPageUid($params))
			->addBackendLayoutSelectItems($params['items'], $params['field']);
	}

	/**
	 * ItemsProcFunc for colpos items
	 *
	 * @param array	$params: An array containing the items and parameters
	 * @return void
	 */
	public function colPosListItemsProcFunc(&$params) {
		$this->backendLayout
			->loadSetup($this->getCurrentPageUid($params))
			->addColPosSelectItems($params['items']);
	}

	/**
	 * Returns the current page UID.
	 *
	 * @author GridView Team
	 * @author Arno Dudek <webmaster@adgrafik.at>
	 * @param array	$params: An array containing the items and parameters
	 * @return integer
	 */
	protected function getCurrentPageUid($params) {

		if (strpos($params['row']['uid'], 'NEW') === 0) {
			// negative uid_pid values of content elements indicate that the element has been inserted after an existing element
			// so there is no pid to get the backendLayout for and we have to get that first
			if ($params['row']['pid'] < 0) {
				$existingElement = $GLOBALS['TYPO3_DB']->exec_SELECTgetSingleRow('pid', $params['table'], 'uid=' . -(intval($params['row']['pid'])));
				if ($existingElement !== NULL) {
					$pid = $existingElement['pid'];
				}
			} else {
				$pid = $params['row']['pid'];
			}
		} else {
			$pid = ($params['table'] == 'pages')
				? $params['row']['uid']
				: $params['row']['pid'];
		}

		return $pid;
	}
}
?>