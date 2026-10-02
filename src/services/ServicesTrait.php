<?php
/**
 * Author toolbar plugin for Craft CMS
 *
 * A frontend toolbar that enhances the authoring experience by giving content
 * editors quick access to editing tools, entry actions, and contextual
 * controls directly from the site frontend.
 *
 * @link      https://digitalastronaut.be
 * @copyright Copyright (c) 2026 Digitalastronaut
 */

namespace digitalastronaut\craftauthortoolbar\services;

use craft\helpers\App;

use digitalastronaut\craftauthortoolbar\web\assets\AuthorToolbarAssets;

use nystudio107\pluginvite\services\VitePluginService;

/**
 * Class ServicesTrait
 *
 * @author      Digitalastronaut
 * @package     AuthorToolbar
 * @since       v1.0.0-beta
 */
trait ServicesTrait {
    /**
     * @return array
     */
    public static function config(): array {
        return [
            'components' => [
                'vite' => [
                    'class' => AuthorToolbarViteService::class,
                    'assetClass' => AuthorToolbarAssets::class,
                    'useForAllRequests' => true,
                    'pluginDevServerEnvVar' => 'AUTHOR_TOOLBAR_VITE_DEVSERVER',
                    'useDevServer' => true,
                    'checkDevServer' => true,
                    'devServerInternal' => 'http://localhost:3006',
                    'devServerPublic' => App::env('PRIMARY_SITE_URL') . ':3007',
                    'errorEntry' => 'src/web/assets/src/js/index.js',
                ],
            ],
        ];
    }

    /**
     * @return VitePluginService
     */
    public function getVite(): VitePluginService {
        return $this->get('vite');
    }
}
