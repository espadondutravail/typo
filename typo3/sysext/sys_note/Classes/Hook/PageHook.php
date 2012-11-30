<?php
namespace TYPO3\CMS\SysNote\Hook;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Georg Ringer <typo3@ringerge.org>
 *      2012 Kai Vogel <kai.vogel@speedprogs.de>, Speedprogs.de
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
 * Hook for the page module
 *
 * @author Georg Ringer <typo3@ringerge.org>
 * @author Kai Vogel <kai.vogel@speedprogs.de>
 */
class PageHook {

	/**
	 * Add sys_notes as additional content to the footer of the page module
	 *
	 * @param array $params
	 * @param \TYPO3\CMS\Backend\Controller\PageLayoutController $parentObject
	 * @return string
	 */
	public function render(array $params = array(), \TYPO3\CMS\Backend\Controller\PageLayoutController $parentObject) {
		$noteController = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\SysNote\\Controller\\NoteController');
		return $noteController->renderNotes($parentObject->id);
	}

}


?>