<?php namespace Masent\Address;

use Backend;
use System\Classes\PluginBase;

/**
 * Address Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Address',
            'description' => 'Manage address',
            'author'      => 'Masent',
            'icon'        => 'icon-bus'
        ];
    }
}
