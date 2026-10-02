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

use nystudio107\pluginvite\helpers\FileHelper;
use nystudio107\pluginvite\services\VitePluginService;

/**
 * Class AuthorToolbarViteService
 *
 * @author      Digitalastronaut
 * @package     AuthorToolbar
 * @since       v1.0.0-beta
 */
class AuthorToolbarViteService extends VitePluginService {
    protected const MANIFEST_FILE_NAME = '.vite/manifest.json';

    /**
     * @return void
     */
    public function init(): void {
        parent::init();

        if ($this->assetClass) {
            $bundle = new $this->assetClass();
            $this->manifestPath = FileHelper::createUrl($bundle->sourcePath, static::MANIFEST_FILE_NAME);
        }
    }
}
