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

namespace digitalastronaut\craftauthortoolbar\web\assets;

use craft\web\AssetBundle;

/**
 * Class AuthorToolbarAssets
 *
 * Doesn't declare `$css`/`$js` itself — actually loading the built (or, in
 * dev mode, live) entry is `VitePluginService::register()`'s job, called
 * from `PluginTrait::registerAssetBundles()`. This bundle's only purpose is
 * to give the Vite service a `sourcePath` to publish and resolve
 * `/cpresources/` URLs (manifest.json, hashed asset paths) against once
 * built.
 *
 * @author      Digitalastronaut
 * @package     AuthorToolbar
 * @since       v1.0.0-beta
 */
class AuthorToolbarAssets extends AssetBundle {
    /**
     * @return void
     */
    public function init(): void {
        $this->sourcePath = "@digitalastronaut/craftauthortoolbar/web/assets/dist";

        parent::init();
    }
}
