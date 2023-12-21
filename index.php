<?php

/**
 * Plugin Name: Interactive Accordion Block
 * Plugin URI:  https://github.com/netzberufler/interactive-accordion-block
 * Description: Accordion Block created with Interactivity API
 * Version:     1.0
 * Author:      Inpsyde GmbH
 * Author URI:  https://inpsyde.com/
 * Update URI:  https://github.com/Netzberufler/interactive-accordion-block
 * License:     GPL-2.0-or-later
 * Text Domain: interactive-accordion-block
 * Domain Path: /languages
 */

declare(strict_types=1);

namespace Interactive\AccordionBlock;

// phpcs:disable PSR1.Files.SideEffects

use Throwable;
use Inpsyde\Modularity\Package;
use Inpsyde\Modularity\Properties\PluginProperties;
use Interactive\AccordionBlock\Example\ExampleModule;

/**
 * Display an error message in the WP admin.
 *
 * @param string $message The message content
 *
 * @return void
 */
function errorNotice(string $message)
{
    add_action(
        'all_admin_notices',
        static function () use ($message) {
            $class = 'notice notice-error';
            printf(
                '<div class="%1$s"><p>%2$s</p></div>',
                esc_attr($class),
                wp_kses_post($message)
            );
        }
    );
}

/**
 * Handle any exception that might occur during plugin setup.
 *
 * @param Throwable $throwable The Exception
 *
 * @return void
 */
function handleException(Throwable $throwable)
{
    do_action('inpsyde.interactive-accordion-block.critical', $throwable);

    errorNotice(
        sprintf(
            '<strong>Error:</strong> %s <br><pre>%s</pre>',
            $throwable->getMessage(),
            $throwable->getTraceAsString()
        )
    );
}

/**
 * Provide the plugin instance.
 *
 * @link https://github.com/inpsyde/modularity#access-from-external
 */
function plugin(): Package
{
    static $package;
    if (!$package) {
        $properties = PluginProperties::new(__FILE__);
        $package = Package::new($properties);
    }

    return $package;
}

/**
 * Initialize all the plugin things.
 *
 * @throws Throwable
 */
function initialize()
{
    try {
        load_plugin_textdomain('interactive-accordion-block');

        if (is_readable(__DIR__ . '/vendor/autoload.php')) {
            /* @noinspection PhpIncludeInspection */
            include_once __DIR__ . '/vendor/autoload.php';
        }

        plugin()
            ->addModule(new ExampleModule())
            ->boot();

    } catch (Throwable $throwable) {
        handleException($throwable);
    }
}

add_action('plugins_loaded', __NAMESPACE__ . '\\initialize');
