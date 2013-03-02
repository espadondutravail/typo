<?php
namespace TYPO3\CMS\Backend\Controller\File;

/**
 * Script Class for the rename-file form.
 *
 * @author Kasper Skårhøj <kasperYYYY@typo3.com>
 */
class RenameFileController {

	// Internal, static:
	/**
	 * Document template object
	 *
	 * @var \TYPO3\CMS\Backend\Template\DocumentTemplate
	 * @todo Define visibility
	 */
	public $doc;

	// Name of the filemount
	/**
	 * @todo Define visibility
	 */
	public $title;

	// Internal, static (GPVar):
	// Set with the target path inputted in &target
	/**
	 * @todo Define visibility
	 */
	public $target;

	/**
	 * The file or folder object that should be renamed
	 *
	 * @var \TYPO3\CMS\Core\Resource\ResourceInterface $fileOrFolderObject
	 */
	protected $fileOrFolderObject;

	// Return URL of list module.
	/**
	 * @todo Define visibility
	 */
	public $returnUrl;

	// Internal, dynamic:
	// Accumulating content
	/**
	 * @todo Define visibility
	 */
	public $content;

	/**
	 * Constructor function for class
	 *
	 * @return 	void
	 * @todo Define visibility
	 */
	public function init() {
		// Initialize GPvars:
		$this->target = \TYPO3\CMS\Core\Utility\GeneralUtility::_GP('target');
		$this->returnUrl = \TYPO3\CMS\Core\Utility\GeneralUtility::sanitizeLocalUrl(\TYPO3\CMS\Core\Utility\GeneralUtility::_GP('returnUrl'));
		// Cleaning and checking target
		if ($this->target) {
			$this->fileOrFolderObject = \TYPO3\CMS\Core\Resource\ResourceFactory::getInstance()->retrieveFileOrFolderObject($this->target);
		}
		if (!$this->fileOrFolderObject) {
			$title = $GLOBALS['LANG']->sL('LLL:EXT:lang/locallang_mod_file_list.xml:paramError', TRUE);
			$message = $GLOBALS['LANG']->sL('LLL:EXT:lang/locallang_mod_file_list.xml:targetNoDir', TRUE);
			throw new \RuntimeException($title . ': ' . $message, 1294586844);
		}
		// If a folder should be renamed, AND the returnURL should go to the old directory name, the redirect is forced
		// so the redirect will NOT end in a error message
		// this case only happens if you select the folder itself in the foldertree and then use the clickmenu to
		// rename the folder
		if ($this->fileOrFolderObject instanceof \TYPO3\CMS\Core\Resource\Folder) {
			$parsedUrl = parse_url($this->returnUrl);
			$queryParts = \TYPO3\CMS\Core\Utility\GeneralUtility::explodeUrl2Array(urldecode($parsedUrl['query']));
			if ($queryParts['id'] === $this->fileOrFolderObject->getCombinedIdentifier()) {
				$this->returnUrl = str_replace(urlencode($queryParts['id']), urlencode($this->fileOrFolderObject->getStorage()->getRootLevelFolder()->getCombinedIdentifier()), $this->returnUrl);
			}
		}
		// Setting icon and title
		$icon = \TYPO3\CMS\Backend\Utility\IconUtility::getSpriteIcon('apps-filetree-root');
		$this->title = $icon . htmlspecialchars($this->fileOrFolderObject->getStorage()->getName()) . ': ' . htmlspecialchars($this->fileOrFolderObject->getIdentifier());
		// Setting template object
		$this->doc = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Backend\\Template\\DocumentTemplate');
		$this->doc->setModuleTemplate('templates/file_rename.html');
		$this->doc->backPath = $GLOBALS['BACK_PATH'];
		$this->doc->JScode = $this->doc->wrapScriptTags('
			function backToList() {	//
				top.goToModule("file_list");
			}
		');
	}

	/**
	 * Main function, rendering the content of the rename form
	 *
	 * @return void
	 * @todo Define visibility
	 */
	public function main() {
		//TODO: change locallang*.php to locallang*.xml
		// Make page header:
		$this->content = $this->doc->startPage($GLOBALS['LANG']->sL('LLL:EXT:lang/locallang_core.php:file_rename.php.pagetitle'));
		$pageContent = $this->doc->header($GLOBALS['LANG']->sL('LLL:EXT:lang/locallang_core.php:file_rename.php.pagetitle'));
		$pageContent .= $this->doc->spacer(5);
		$pageContent .= $this->doc->divider(5);
		if ($this->fileOrFolderObject instanceof \TYPO3\CMS\Core\Resource\Folder) {
			$fileIdentifier = $this->fileOrFolderObject->getCombinedIdentifier();
		} else {
			$fileIdentifier = $this->fileOrFolderObject->getUid();
		}
		$code = '<form action="tce_file.php" method="post" name="editform">';
		// Making the formfields for renaming:
		$code .= '

			<div id="c-rename">
				<input type="text" name="file[rename][0][target]" value="' . htmlspecialchars($this->fileOrFolderObject->getName()) . '"' . $GLOBALS['TBE_TEMPLATE']->formWidth(40) . ' />
				<input type="hidden" name="file[rename][0][data]" value="' . htmlspecialchars($fileIdentifier) . '" />
			</div>
		';
		// Making submit button:
		$code .= '
			<div id="c-submit">
				<input type="submit" value="' . $GLOBALS['LANG']->sL('LLL:EXT:lang/locallang_core.php:file_rename.php.submit', 1) . '" />
				<input type="submit" value="' . $GLOBALS['LANG']->sL('LLL:EXT:lang/locallang_core.php:labels.cancel', 1) . '" onclick="backToList(); return false;" />
				<input type="hidden" name="redirect" value="' . htmlspecialchars($this->returnUrl) . '" />
			</div>
		';
		$code .= '</form>';
		// Add the HTML as a section:
		$pageContent .= $code;
		$docHeaderButtons = array();
		$docHeaderButtons['csh'] = \TYPO3\CMS\Backend\Utility\BackendUtility::cshItem('xMOD_csh_corebe', 'file_rename', $GLOBALS['BACK_PATH']);
		// Add the HTML as a section:
		$markerArray = array(
			'CSH' => $docHeaderButtons['csh'],
			'FUNC_MENU' => \TYPO3\CMS\Backend\Utility\BackendUtility::getFuncMenu($this->id, 'SET[function]', $this->MOD_SETTINGS['function'], $this->MOD_MENU['function']),
			'CONTENT' => $pageContent,
			'PATH' => $this->title
		);
		$this->content .= $this->doc->moduleBody(array(), $docHeaderButtons, $markerArray);
		$this->content .= $this->doc->endPage();
		$this->content = $this->doc->insertStylesAndJS($this->content);
	}

	/**
	 * Outputting the accumulated content to screen
	 *
	 * @return void
	 * @todo Define visibility
	 */
	public function printContent() {
		echo $this->content;
	}

}


?>