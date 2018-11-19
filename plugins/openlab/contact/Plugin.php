<?php namespace Openlab\Contact;

use Backend;
use System\Classes\PluginBase;

/**
 * Contact Plugin Information File
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
            'name'        => 'Contact',
            'description' => 'No description provided yet...',
            'author'      => 'Openlab',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Openlab\Contact\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'openlab.contact.some_permission' => [
                'tab' => 'Contact',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'contact' => [
                'label'       => 'Contact',
                'url'         => Backend::url('openlab/contact/contacts'),
                'icon'        => 'icon-leaf',
                'permissions' => ['openlab.contact.*'],
                'order'       => 500,
            ],
        ];
    }
}
