<?php namespace Rezgui\BlogViews\Models;

use October\Rain\Database\Model;
use System\Classes\PluginManager;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];
    public $settingsCode = 'rezgui_blogviews_settings';
    public $settingsFields = 'fields.yaml';

}