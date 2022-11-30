<?php
/**
 * Assets class file.
 *
 * @package Serbian Addons for WooCommerce
 * @subpackage Core
 */

namespace Oblak\WCRS\Core;

use Oblak\Asset\Loader;

/**
 * Handles asset management
 */
class Assets {

    /**
     * Class constructor
     */
    public function __construct() {
        add_action( 'plugins_loaded', array( $this, 'initialize_loader' ), PHP_INT_MAX );
    }

    /**
     * Initializes asset loader
     */
    public function initialize_loader() {
        Loader::getInstance()->registerNamespace( 'wcrs', require_once WCRS_PLUGIN_PATH . 'config/assets.php' );
    }
}