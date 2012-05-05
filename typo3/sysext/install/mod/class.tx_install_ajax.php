<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2009-2011 Marcus Krause, Helmut Hummel (security@typo3.org)
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
 * This is the eID handler for install tool AJAX calls.
 *
 * @author	Marcus Krause <security@typo3.org>
 */
class tx_install_ajax {


	/**
	 * Keeps content to be printed.
	 *
	 * @var string
	 */
	var $content;

	/**
	 * Keeps command to process.
	 *
	 * @var string
	 */
	var $cmd = '';


	/**
	 * Init function, setting the input vars in the class scope.
	 *
	 * @return	void
	 */
	function init()	{
		$this->cmd = t3lib_div::_GP('cmd');
	}

	/**
	 * Main function which creates the AJAX call return string.
	 * It is stored in $this->content.
	 *
	 * @return	void
	 */
	function main()	{
			// Create output:
		switch ($this->cmd) {
			case 'encryptionKey':
			default:
				$this->content = $this->createEncryptionKey();
				$this->addTempContentHttpHeaders();
				break;
		}
	}

	/**
	 * Outputs the content from $this->content
	 *
	 * @return	void
	 */
	function printContent()	{
		if (!headers_sent()) {
			header('Content-Length: ' . strlen($this->content));
		}
		echo $this->content;
	}

	/**
	 * Returns a newly created TYPO3 encryption key with a given length.
	 *
	 * @param  integer  $keyLength  desired key length
	 * @return string
	 */
	function createEncryptionKey($keyLength = 96) {
		if (!headers_sent()) {
			header("Content-type: text/plain");
		}

		return t3lib_div::getRandomHexString($keyLength);
	}

	/**
	 * Sends cache control headers that prevent caching in user agents.
	 *
	 */
	function addTempContentHttpHeaders() {
		if (!headers_sent()) {
				// see RFC 2616
				// see Microsoft Knowledge Base #234067
			header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
			header('Cache-Control: no-cache, must-revalidate');
			header('Pragma: no-cache');
			header('Expires: -1');
		}
	}
}

// Make instance:
$SOBE = t3lib_div::makeInstance('tx_install_ajax');
$SOBE->init();
$SOBE->main();
$SOBE->printContent();
?>