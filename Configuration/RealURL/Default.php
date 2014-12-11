<?php

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl'] = array (
    '_DEFAULT' => array (
        'init' => array (
            'enableCHashCache' => TRUE,
            'appendMissingSlash' => 'ifNotFile',
            'enableUrlDecodeCache' => TRUE,
            'enableUrlEncodeCache' => TRUE,
            'emptyUrlReturnValue' => \TYPO3\CMS\Core\Utility\GeneralUtility::getIndpEnv('TYPO3_SITE_URL'),
        ),
        'pagePath' => array (
            'type' => 'user',
            'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
            'spaceCharacter' => '-',
            'languageGetVar' => 'L',
        ),
        'redirects' => array (
        ),
        'preVars' => array (
            '0' => array (
                'GETvar' => 'no_cache',
                'valueMap' => array (
                    '' => '1',
                ),
                'noMatch' => 'bypass'
            ),
            '1' => array (
                'GETvar' => 'L',
                'valueMap' => array (
                    'da' => '1',
                    'de' => '2',
                ),
                'noMatch' => 'bypass',
            ),
        ),
		'fixedPostVars' => array(
                'newsDetailConfiguration' => array(
                        /*array(
                                'GETvar' => 'tx_news_pi1[action]',
                                'valueMap' => array(
                                        'detail' => '',
                                ),
                                'noMatch' => 'bypass'
                        ),
                        array(
                                'GETvar' => 'tx_news_pi1[controller]',
                                'valueMap' => array(
                                        'News' => '',
                                ),
                                'noMatch' => 'bypass'
                        ),*/
                        array(
                                'GETvar' => 'tx_news_pi1[news]',
                                'lookUpTable' => array(
                                        'table' => 'tx_news_domain_model_news',
                                        'id_field' => 'uid',
                                        'alias_field' => 'title',
                                        'addWhereClause' => ' AND NOT deleted',
                                        'useUniqueCache' => 1,
                                        'useUniqueCache_conf' => array(
                                                'strtolower' => 1,
                                                'spaceCharacter' => '-'
                                        ),
                                        'languageGetVar' => 'L',
                                        'languageExceptionUids' => '',
                                        'languageField' => 'sys_language_uid',
                                        'transOrigPointerField' => 'l10n_parent',
                                        'autoUpdate' => 1,
                                        'expireDays' => 180,
                                )
                        )
                ),
                'firmProfil' => array(
                        array(
                                'GETvar' => 'tx_news_pi1[news]',
								'valueMap' => array (
									'' => '1',
								),
								'noMatch' => 'bypass'
                        )
                ),					
                'newsCategoryConfiguration' => array(
                        array(
                                'GETvar' => 'tx_news_pi1[overwriteDemand][categories]',
                                'lookUpTable' => array(
                                        'table' => 'sys_category',
                                        'id_field' => 'uid',
                                        'alias_field' => 'title',
                                        'addWhereClause' => ' AND NOT deleted',
                                        'useUniqueCache' => 1,
                                        'useUniqueCache_conf' => array(
                                                'strtolower' => 1,
                                                'spaceCharacter' => '-'
                                        )
                                )
                        )
                ),
                'newsTagConfiguration' => array(
                        array(
                                'GETvar' => 'tx_news_pi1[overwriteDemand][tags]',
                                'lookUpTable' => array(
                                        'table' => 'tx_news_domain_model_tag',
                                        'id_field' => 'uid',
                                        'alias_field' => 'title',
                                        'addWhereClause' => ' AND NOT deleted',
                                        'useUniqueCache' => 1,
                                        'useUniqueCache_conf' => array(
                                                'strtolower' => 1,
                                                'spaceCharacter' => '-'
                                        )
                                )
                        )
                ),
                '39' => 'newsDetailConfiguration', // Blog
				'59' => 'firmProfil',
				'47' => 'firmProfil',
				'18' => 'firmProfil',
                '73' => 'newsDetailConfiguration',  //Profil
                '73' => 'newsCategoryConfiguration',//Profil
				'74' => 'newsCategoryConfiguration',//Presse
				'84' => 'newsCategoryConfiguration',//Presse Details
				'76' => 'newsCategoryConfiguration',//Marken
				'85' => 'newsCategoryConfiguration',//Marken Details				
				'75' => 'newsCategoryConfiguration',//Rezepte
				'86' => 'newsCategoryConfiguration',//Rezepte Details
				'82' => 'newsCategoryConfiguration',//Foto
				'83' => 'newsCategoryConfiguration',//Kontakt
        ),
        'postVarSets' => array (
            '_DEFAULT' => array (
               /* 'page' => array(
                    0 => array(
                        'GETvar' => 'page',
                    ),
                ),*/
				/*	'cat' => array(
						array(
							'GETvar' => 'tx_news_pi1[overwriteDemand][categories]',
							'lookUpTable' => array(
								'table' => 'tx_news_domain_model_category',
								'id_field' => 'uid',
								//'alias_field' => 'coalesce(NULLIF(description, ""), title)',
								'alias_field' => 'title',
								'addWhereClause' => ' AND NOT deleted',
								'useUniqueCache' => 1,
								'useUniqueCache_conf' => array(
									'strtolower' => 1,
									'spaceCharacter' => '-',
								),
							),
						),
					),*/	
						'artikel' => array(
							array(
                                'GETvar' => 'tx_news_pi1[news]',
                                'lookUpTable' => array(
                                        'table' => 'tx_news_domain_model_news',
                                        'id_field' => 'uid',
                                        'alias_field' => 'title',
                                        'addWhereClause' => ' AND NOT deleted',
                                        'useUniqueCache' => 1,
                                        'useUniqueCache_conf' => array(
                                                'strtolower' => 1,
                                                'spaceCharacter' => '-'
                                        ),
                                        'languageGetVar' => 'L',
                                        'languageExceptionUids' => '',
                                        'languageField' => 'sys_language_uid',
                                        'transOrigPointerField' => 'l10n_parent',
                                        'autoUpdate' => 1,
                                        'expireDays' => 180,
                                )
							),
						),
                        'page' => array(
                                array(
                                        'GETvar' => 'tx_news_pi1[@widget_0][currentPage]',
                                ),
                        ),				
            ),
        ),
        'fileName' => array (
            'defaultToHTMLsuffixOnPrev' => false,
        ),
    )
);