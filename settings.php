<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * elegance theme with the underlying Bootstrap theme.
 *
 * @package    theme
 * @subpackage elegance
 * @author     Julian (@moodleman) Ridden
 * @author     Based on code originally written by G J Barnard, Mary Evans, Bas Brands, Stuart Lamour and David Scotson.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // Invert Navbar to dark background.
    $name = 'theme_elegance/invert';
    $title = get_string('invert', 'theme_elegance');
    $description = get_string('invertdesc', 'theme_elegance');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Logo file setting.
    $name = 'theme_elegance/logo';
    $title = get_string('logo','theme_elegance');
    $description = get_string('logodesc', 'theme_elegance');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Custom CSS file.
    $name = 'theme_elegance/customcss';
    $title = get_string('customcss', 'theme_elegance');
    $description = get_string('customcssdesc', 'theme_elegance');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
    // Main theme colour setting.
    $name = 'theme_elegance/themecolor';
    $title = get_string('themecolor', 'theme_elegance');
    $description = get_string('themecolordesc', 'theme_elegance');
    $default = '#2d91d0';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
     // Copyright setting.
    $name = 'theme_elegance/copyright';
    $title = get_string('copyright', 'theme_elegance');
    $description = get_string('copyrightdesc', 'theme_elegance');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $settings->add($setting);

    // Footnote setting.
    $name = 'theme_elegance/footnote';
    $title = get_string('footnote', 'theme_elegance');
    $description = get_string('footnotedesc', 'theme_elegance');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
}
