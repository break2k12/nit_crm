<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Brwkundendaten',
	'Berewa Kundendaten'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'berewa_kundendaten');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_brwkunden_domain_model_kundendaten', 'EXT:brw_kunden/Resources/Private/Language/locallang_csh_tx_brwkunden_domain_model_kundendaten.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_brwkunden_domain_model_kundendaten');
$TCA['tx_brwkunden_domain_model_kundendaten'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten',
		'label' => 'erstellt',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'tstamp,hiderecord,hidden,user,erstellt,projekt,bauart,gebaeudeart,kategorie,plzbau,lkzbau,ortbau,strbau,bl,lkr,planstand,gepl_bau_beg,gepl_bauzeit,mauerwerk,dachkonstr,dacheind,fassade,sonst_baudet,ausstatt_aussen,ausstatt_innen,gewerk_vorber,gewerk_aussenanlage,allg_gewerk,dl_gewerke,vergabe_kz,bh_funktion,bh_adressnr,b_h_name,bhlkz,bh_plz,bh_ort,bh_str,bh_tel,bh_fax,bh_mail,bh_zust,direkt_telbh,bh_direkt_fax,bh_direkt_mail,bh_homepage,bh_handy,bu_funktion,bu_adress_nr,bu_name,bu_plz,bu_ort,bu_str,bu_tel,bu_fax,bu_mail,buzust_a_p,budirekt_tel,bu_direkt_fax,budirekt_mail,buwebsite,bu_handy,ar_funktion_arch,ar_adressnr,ar_name,ar_p_l_z,ar_ort,ar_str,ar_tel,ar_fax,ar_mail,arzust_a_p,ar_direkt_tel,ardirekt_fax,ardirekt_mail,ar_website,ar_handy,called_on,recall,notice,proirity,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Kundendaten.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_brwkunden_domain_model_kundendaten.gif'
	),
);

?>