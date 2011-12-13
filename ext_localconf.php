<?php
if (!defined ('TYPO3_MODE'))     die ('Access denied.');

/* xclass for rte typolink page browser*/
if(file_exists(t3lib_extMgm::extPath($_EXTKEY).'typo3_versions/'.TYPO3_version.'/class.ux_tx_rtehtmlarea_browse_links.php')){
	$TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/rtehtmlarea/mod3/class.tx_rtehtmlarea_browse_links.php'] = t3lib_extMgm::extPath($_EXTKEY).'typo3_versions/'.TYPO3_version.'/class.ux_tx_rtehtmlarea_browse_links.php';
}

/* xclass for typolink page browser */
if(file_exists(t3lib_extMgm::extPath($_EXTKEY).'typo3_versions/'.TYPO3_version.'/class.ux_browse_links.php')){
	$TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['typo3/class.browse_links.php'] = t3lib_extMgm::extPath($_EXTKEY).'typo3_versions/'.TYPO3_version.'/class.ux_browse_links.php';
}

/* hook to display the langlink as a page link */
if(file_exists(t3lib_extMgm::extPath($_EXTKEY).'typo3_versions/'.TYPO3_version.'/class.tx_cabaglanglink_browseLinksHook.php')){
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/class.browse_links.php']['browseLinksHook'][] = t3lib_extMgm::extPath($_EXTKEY).'typo3_versions/'.TYPO3_version.'/class.tx_cabaglanglink_browseLinksHook.php:&tx_cabaglanglink_browseLinksHook';
	$TYPO3_CONF_VARS['SC_OPTIONS']['ext/rtehtmlarea/mod3/class.tx_rtehtmlarea_browse_links.php']['browseLinksHook'][] = t3lib_extMgm::extPath($_EXTKEY).'typo3_versions/'.TYPO3_version.'/class.tx_cabaglanglink_browseLinksHook.php:&tx_cabaglanglink_browseLinksHook';
}

/* hook for rte typolink parsing */
 $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_content.php']['typolinkLinkHandler']['?id=L'] = 'EXT:cabag_langlink/typo3_versions/'.TYPO3_version.'/class.user_tslib_content_typolinkHook.php:&user_tslib_content_typolinkHook';

/* hook for browse_links typolink parsing */
 $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_content.php']['typolinkLinkHandler']['L'] = 'EXT:cabag_langlink/typo3_versions/'.TYPO3_version.'/class.user_tslib_content_typolinkHook.php:&user_tslib_content_typolinkHook';


?>
