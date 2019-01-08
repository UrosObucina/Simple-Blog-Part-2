<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Simpleblog.Simpleblog',
            'Simplebloglist',
            [
                'Blog' => 'list'
            ],
            // non-cacheable actions
            [
                'Blog' => 'list'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    simplebloglist {
                        iconIdentifier = simpleblog-plugin-simplebloglist
                        title = LLL:EXT:simpleblog/Resources/Private/Language/locallang_db.xlf:tx_simpleblog_simplebloglist.name
                        description = LLL:EXT:simpleblog/Resources/Private/Language/locallang_db.xlf:tx_simpleblog_simplebloglist.description
                        tt_content_defValues {
                            CType = list
                            list_type = simpleblog_simplebloglist
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'simpleblog-plugin-simplebloglist',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:simpleblog/Resources/Public/Icons/user_plugin_simplebloglist.svg']
			);
		
    }
);
