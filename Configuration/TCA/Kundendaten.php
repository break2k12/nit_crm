<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_brwkunden_domain_model_kundendaten'] = array(
	'ctrl' => $TCA['tx_brwkunden_domain_model_kundendaten']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, user, hiderecord, erstellt, projekt, bauart, gebaeudeart, kategorie, plzbau, lkzbau, ortbau, strbau, bl, lkr, planstand, gepl_bau_beg, gepl_bauzeit, mauerwerk, dachkonstr, dacheind, fassade, sonst_baudet, ausstatt_aussen, ausstatt_innen, gewerk_vorber, gewerk_aussenanlage, allg_gewerk, dl_gewerke, vergabe_kz, bh_funktion, bh_adressnr, b_h_name, bhlkz, bh_plz, bh_ort, bh_str, bh_tel, bh_fax, bh_mail, bh_zust, direkt_telbh, bh_direkt_fax, bh_direkt_mail, bh_homepage, bh_handy, bu_funktion, bu_adress_nr, bu_name, bu_plz, bu_ort, bu_str, bu_tel, bu_fax, bu_mail, buzust_a_p, budirekt_tel, bu_direkt_fax, budirekt_mail, buwebsite, bu_handy, ar_funktion_arch, ar_adressnr, ar_name, ar_p_l_z, ar_ort, ar_str, ar_tel, ar_fax, ar_mail, arzust_a_p, ar_direkt_tel, ardirekt_fax, ardirekt_mail, ar_website, ar_handy, called_on, recall, notice, proirity',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1,hiderecord, erstellt, user, projekt, bauart, gebaeudeart, kategorie, plzbau, lkzbau, ortbau, strbau, bl, lkr, planstand, gepl_bau_beg, gepl_bauzeit, mauerwerk, dachkonstr, dacheind, fassade, sonst_baudet, ausstatt_aussen, ausstatt_innen, gewerk_vorber, gewerk_aussenanlage, allg_gewerk, dl_gewerke, vergabe_kz, bh_funktion, bh_adressnr, b_h_name, bhlkz, bh_plz, bh_ort, bh_str, bh_tel, bh_fax, bh_mail, bh_zust, direkt_telbh, bh_direkt_fax, bh_direkt_mail, bh_homepage, bh_handy, bu_funktion, bu_adress_nr, bu_name, bu_plz, bu_ort, bu_str, bu_tel, bu_fax, bu_mail, buzust_a_p, budirekt_tel, bu_direkt_fax, budirekt_mail, buwebsite, bu_handy, ar_funktion_arch, ar_adressnr, ar_name, ar_p_l_z, ar_ort, ar_str, ar_tel, ar_fax, ar_mail, arzust_a_p, ar_direkt_tel, ardirekt_fax, ardirekt_mail, ar_website, ar_handy, called_on, recall, notice, proirity,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_brwkunden_domain_model_kundendaten',
				'foreign_table_where' => 'AND tx_brwkunden_domain_model_kundendaten.pid=###CURRENT_PID### AND tx_brwkunden_domain_model_kundendaten.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hiderecord' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
    
    'tstamp' => Array (
            'exclude' => 1,
            'label' => 'Timestamp',
            'config' => Array (
                'type' => 'input',
                'format' => 'date',
                'eval' => 'date',
        
            )
        ),
    
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'erstellt' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.erstellt',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'projekt' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.projekt',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
    'user' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.user',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bauart' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bauart',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'gebaeudeart' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.gebaeudeart',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'kategorie' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.kategorie',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'plzbau' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.plzbau',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'lkzbau' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.lkzbau',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ortbau' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.ortbau',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'strbau' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.strbau',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bl' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bl',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'lkr' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.lkr',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'planstand' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.planstand',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'gepl_bau_beg' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.gepl_bau_beg',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'gepl_bauzeit' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.gepl_bauzeit',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'mauerwerk' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.mauerwerk',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'dachkonstr' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.dachkonstr',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'dacheind' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.dacheind',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'fassade' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.fassade',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'sonst_baudet' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.sonst_baudet',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ausstatt_aussen' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.ausstatt_aussen',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ausstatt_innen' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.ausstatt_innen',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'gewerk_vorber' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.gewerk_vorber',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'gewerk_aussenanlage' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.gewerk_aussenanlage',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'allg_gewerk' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.allg_gewerk',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'dl_gewerke' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.dl_gewerke',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'vergabe_kz' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.vergabe_kz',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bh_funktion' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bh_funktion',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bh_adressnr' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bh_adressnr',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'b_h_name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.b_h_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bhlkz' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bhlkz',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bh_plz' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bh_plz',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bh_ort' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bh_ort',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bh_str' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bh_str',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bh_tel' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bh_tel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bh_fax' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bh_fax',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bh_mail' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bh_mail',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bh_zust' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bh_zust',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'direkt_telbh' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.direkt_telbh',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bh_direkt_fax' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bh_direkt_fax',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bh_direkt_mail' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bh_direkt_mail',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bh_homepage' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bh_homepage',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bh_handy' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bh_handy',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bu_funktion' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bu_funktion',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bu_adress_nr' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bu_adress_nr',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bu_name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bu_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bu_plz' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bu_plz',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bu_ort' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bu_ort',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bu_str' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bu_str',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bu_tel' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bu_tel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bu_fax' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bu_fax',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bu_mail' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bu_mail',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'buzust_a_p' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.buzust_a_p',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'budirekt_tel' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.budirekt_tel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bu_direkt_fax' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bu_direkt_fax',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'budirekt_mail' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.budirekt_mail',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'buwebsite' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.buwebsite',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bu_handy' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.bu_handy',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ar_funktion_arch' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.ar_funktion_arch',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ar_adressnr' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.ar_adressnr',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ar_name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.ar_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ar_p_l_z' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.ar_p_l_z',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ar_ort' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.ar_ort',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ar_str' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.ar_str',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ar_tel' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.ar_tel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ar_fax' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.ar_fax',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ar_mail' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.ar_mail',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'arzust_a_p' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.arzust_a_p',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ar_direkt_tel' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.ar_direkt_tel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ardirekt_fax' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.ardirekt_fax',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ardirekt_mail' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.ardirekt_mail',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ar_website' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.ar_website',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ar_handy' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.ar_handy',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'called_on' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.called_on',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'recall' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.recall',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'notice' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.notice',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
			'defaultExtras' => 'richtext:rte_transform[flag=rte_enabled|mode=ts]',
		),
		'proirity' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:brw_kunden/Resources/Private/Language/locallang_db.xlf:tx_brwkunden_domain_model_kundendaten.proirity',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
	),
);

?>