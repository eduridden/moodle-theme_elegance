<?php
// This file is part of the custom Moodle elegance theme
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
 * Renderers to align Moodle's HTML with that expected by elegance
 *
 * @package    theme_elegance
 * @copyright  2014 Julian Ridden http://moodleman.net
 * @authors    Julian Ridden -  Bootstrap 3 work by Bas Brands, David Scotson
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$settings = null;

defined('MOODLE_INTERNAL') || die;


	$ADMIN->add('themes', new admin_category('theme_elegance', 'elegance'));

	// "geneicsettings" settingpage
	$temp = new admin_settingpage('theme_elegance_generic',  get_string('geneicsettings', 'theme_elegance'));
	
	// Custom Subtitle
	$name = 'theme_elegance/subtitle';
    $title = get_string('subtitle','theme_elegance');
    $description = get_string('subtitle_desc', 'theme_elegance');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $temp->add($setting);
	
    // Invert Navbar to dark background.
    $name = 'theme_elegance/invert';
    $title = get_string('invert', 'theme_elegance');
    $description = get_string('invertdesc', 'theme_elegance');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Logo file setting.
    $name = 'theme_elegance/logo';
    $title = get_string('logo','theme_elegance');
    $description = get_string('logodesc', 'theme_elegance');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Custom CSS file.
    $name = 'theme_elegance/customcss';
    $title = get_string('customcss', 'theme_elegance');
    $description = get_string('customcssdesc', 'theme_elegance');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Main theme colour setting.
    $name = 'theme_elegance/themecolor';
    $title = get_string('themecolor', 'theme_elegance');
    $description = get_string('themecolordesc', 'theme_elegance');
    $default = '#2d91d0';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
     // Copyright setting.
    $name = 'theme_elegance/copyright';
    $title = get_string('copyright', 'theme_elegance');
    $description = get_string('copyrightdesc', 'theme_elegance');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Footnote setting.
    $name = 'theme_elegance/footnote';
    $title = get_string('footnote', 'theme_elegance');
    $description = get_string('footnotedesc', 'theme_elegance');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $ADMIN->add('theme_elegance', $temp);
    
    /* Category Settings */
    $temp = new admin_settingpage('theme_elegance_categoryicon', get_string('categoryiconheading', 'theme_elegance'));
	$temp->add(new admin_setting_heading('theme_elegance_categoryicon', get_string('categoryiconheadingsub', 'theme_elegance'),
            format_text(get_string('categoryicondesc' , 'theme_elegance'), FORMAT_MARKDOWN)));
    
    // Default Icon Selector.
    $name = 'theme_elegance/defaultcategoryicon';
    $title = get_string('defaultcategoryicon' , 'theme_elegance');
    $description = get_string('defaultcategoryicondesc', 'theme_elegance');
    $default = 'f07c';
    $choices = array(
		'f000'=>'fa-glass',
    	'f001'=>'fa-music',
    	'f002'=>'fa-search',
    	'f003'=>'fa-envelope-o',
    	'f004'=>'fa-heart',
    	'f005'=>'fa-star',
    	'f006'=>'fa-star-o',
    	'f007'=>'fa-user',
    	'f008'=>'fa-film',
    	'f009'=>'fa-th-large',
    	'f00a'=>'fa-th',
    	'f00b'=>'fa-th-list',
    	'f00c'=>'fa-check',
    	'f00d'=>'fa-times',
    	'f00e'=>'fa-search-plus',
    	'f010'=>'fa-search-minus',
    	'f011'=>'fa-power-off',
    	'f012'=>'fa-signal',
    	'f013'=>'fa-cog',
    	'f014'=>'fa-trash-o',
    	'f015'=>'fa-home',
    	'f016'=>'fa-file-o',
    	'f017'=>'fa-clock-o',
    	'f018'=>'fa-road',
    	'f019'=>'fa-download',
    	'f01a'=>'fa-arrow-circle-o-down',
    	'f01b'=>'fa-arrow-circle-o-up',
    	'f01c'=>'fa-inbox',
    	'f01d'=>'fa-play-circle-o',
    	'f01e'=>'fa-repeat',
    	'f021'=>'fa-refresh',
    	'f022'=>'fa-list-alt',
    	'f023'=>'fa-lock',
    	'f024'=>'fa-flag',
    	'f025'=>'fa-headphones',
    	'f026'=>'fa-volume-off',
    	'f027'=>'fa-volume-down',
    	'f028'=>'fa-volume-up',
    	'f029'=>'fa-qrcode',
    	'f02a'=>'fa-barcode',
    	'f02b'=>'fa-tag',
    	'f02c'=>'fa-tags',
    	'f02d'=>'fa-book',
    	'f02e'=>'fa-bookmark',
    	'f02f'=>'fa-print',
    	'f030'=>'fa-camera',
    	'f031'=>'fa-font',
    	'f032'=>'fa-bold',
    	'f033'=>'fa-italic',
    	'f034'=>'fa-text-height',
    	'f035'=>'fa-text-width',
    	'f036'=>'fa-align-left',
    	'f037'=>'fa-align-center',
    	'f038'=>'fa-align-right',
    	'f039'=>'fa-align-justify',
    	'f03a'=>'fa-list',
    	'f03b'=>'fa-outdent',
    	'f03c'=>'fa-indent',
    	'f03d'=>'fa-video-camera',
    	'f03e'=>'fa-picture-o',
    	'f040'=>'fa-pencil',
    	'f041'=>'fa-map-marker',
    	'f042'=>'fa-adjust',
    	'f043'=>'fa-tint',
    	'f044'=>'fa-pencil-square-o',
    	'f045'=>'fa-share-square-o',
    	'f046'=>'fa-check-square-o',
    	'f047'=>'fa-arrows',
    	'f048'=>'fa-step-backward',
    	'f049'=>'fa-fast-backward',
    	'f04a'=>'fa-backward',
    	'f04b'=>'fa-play',
    	'f04c'=>'fa-pause',
    	'f04d'=>'fa-stop',
    	'f04e'=>'fa-forward',
    	'f050'=>'fa-fast-forward',
    	'f051'=>'fa-step-forward',
    	'f052'=>'fa-eject',
    	'f053'=>'fa-chevron-left',
    	'f054'=>'fa-chevron-right',
    	'f055'=>'fa-plus-circle',
    	'f056'=>'fa-minus-circle',
    	'f057'=>'fa-times-circle',
    	'f058'=>'fa-check-circle',
    	'f059'=>'fa-question-circle',
    	'f05a'=>'fa-info-circle',
    	'f05b'=>'fa-crosshairs',
    	'f05c'=>'fa-times-circle-o',
    	'f05d'=>'fa-check-circle-o',
    	'f05e'=>'fa-ban',
    	'f060'=>'fa-arrow-left',
    	'f061'=>'fa-arrow-right',
    	'f062'=>'fa-arrow-up',
    	'f063'=>'fa-arrow-down',
    	'f064'=>'fa-share',
    	'f065'=>'fa-expand',
    	'f066'=>'fa-compress',
    	'f067'=>'fa-plus',
    	'f068'=>'fa-minus',
    	'f069'=>'fa-asterisk',
    	'f06a'=>'fa-exclamation-circle',
    	'f06b'=>'fa-gift',
    	'f06c'=>'fa-leaf',
    	'f06d'=>'fa-fire',
    	'f06e'=>'fa-eye',
    	'f070'=>'fa-eye-slash',
    	'f071'=>'fa-exclamation-triangle',
    	'f072'=>'fa-plane',
    	'f073'=>'fa-calendar',
    	'f074'=>'fa-random',
    	'f075'=>'fa-comment',
    	'f076'=>'fa-magnet',
    	'f077'=>'fa-chevron-up',
    	'f078'=>'fa-chevron-down',
    	'f079'=>'fa-retweet',
    	'f07a'=>'fa-shopping-cart',
    	'f07b'=>'fa-folder',
    	'f07c'=>'fa-folder-open',
    	'f07d'=>'fa-arrows-v',
    	'f07e'=>'fa-arrows-h',
    	'f080'=>'fa-bar-chart-o',
    	'f081'=>'fa-twitter-square',
    	'f082'=>'fa-facebook-square',
    	'f083'=>'fa-camera-retro',
    	'f084'=>'fa-key',		'f085'=>'fa-cogs',
		'f086'=>'fa-comments',
    	'f087'=>'fa-thumbs-o-up',
    	'f088'=>'fa-thumbs-o-down',
    	'f089'=>'fa-star-half',
    	'f08a'=>'fa-heart-o',
    	'f08b'=>'fa-sign-out',
    	'f08c'=>'fa-linkedin-square',
    	'f08d'=>'fa-thumb-tack',
    	'f08e'=>'fa-external-link',
    	'f090'=>'fa-sign-in',
    	'f091'=>'fa-trophy',
    	'f092'=>'fa-github-square',
    	'f093'=>'fa-upload',
    	'f094'=>'fa-lemon-o',
    	'f095'=>'fa-phone',
    	'f096'=>'fa-square-o',
    	'f097'=>'fa-bookmark-o',
    	'f098'=>'fa-phone-square',
    	'f099'=>'fa-twitter',
    	'f09a'=>'fa-facebook',
    	'f09b'=>'fa-github',
    	'f09c'=>'fa-unlock',
    	'f09d'=>'fa-credit-card',
    	'f09e'=>'fa-rss',
    	'f0a0'=>'fa-hdd-o',
    	'f0a1'=>'fa-bullhorn',
    	'f0f3'=>'fa-bell',
    	'f0a3'=>'fa-certificate',
    	'f0a4'=>'fa-hand-o-right',
    	'f0a5'=>'fa-hand-o-left',
    	'f0a6'=>'fa-hand-o-up',
    	'f0a7'=>'fa-hand-o-down',
    	'f0a8'=>'fa-arrow-circle-left',
    	'f0a9'=>'fa-arrow-circle-right',
    	'f0aa'=>'fa-arrow-circle-up',
    	'f0ab'=>'fa-arrow-circle-down',
    	'f0ac'=>'fa-globe',
    	'f0ad'=>'fa-wrench',
    	'f0ae'=>'fa-tasks',
    	'f0b0'=>'fa-filter',
    	'f0b1'=>'fa-briefcase',
    	'f0b2'=>'fa-arrows-alt',
    	'f0c0'=>'fa-users',
    	'f0c1'=>'fa-link',
    	'f0c2'=>'fa-cloud',
    	'f0c3'=>'fa-flask',
    	'f0c4'=>'fa-scissors',
    	'f0c5'=>'fa-files-o',
    	'f0c6'=>'fa-paperclip',
    	'f0c7'=>'fa-floppy-o',
    	'f0c8'=>'fa-square',
    	'f0c9'=>'fa-bars',
    	'f0ca'=>'fa-list-ul',
    	'f0cb'=>'fa-list-ol',
    	'f0cc'=>'fa-strikethrough',
    	'f0cd,a-underline',
    	'f0ce'=>'fa-table',
    	'f0d0'=>'fa-magic',
    	'f0d1'=>'fa-truck',
    	'f0d2'=>'fa-pinterest',
    	'f0d3'=>'fa-pinterest-square',
    	'f0d4'=>'fa-google-plus-square',
    	'f0d5'=>'fa-google-plus',
    	'f0d6'=>'fa-money',
    	'f0d7'=>'fa-caret-down',
    	'f0d8'=>'fa-caret-up',
    	'f0d9'=>'fa-caret-left',
    	'f0da'=>'fa-caret-right',
    	'f0db'=>'fa-columns',
    	'f0dc'=>'fa-sort',
    	'f0dd'=>'fa-sort-asc',
    	'f0de'=>'fa-sort-desc',
    	'f0e0'=>'fa-envelope',
    	'f0e1'=>'fa-linkedin',
    	'f0e2'=>'fa-undo',
    	'f0e3,a-gavel',
    	'f0e4'=>'fa-tachometer',
    	'f0e5'=>'fa-comment-o',
    	'f0e6'=>'fa-comments-o',
    	'f0e7'=>'fa-bolt',
    	'f0e8'=>'fa-sitemap',
    	'f0e9'=>'fa-umbrella',
    	'f0ea'=>'fa-clipboard',
    	'f0eb'=>'fa-lightbulb-o',
    	'f0ec'=>'fa-exchange',
    	'f0ed'=>'fa-cloud-download',
    	'f0ee'=>'fa-cloud-upload',
    	'f0f0'=>'fa-user-md',
    	'f0f1'=>'fa-stethoscope',
    	'f0f2'=>'fa-suitcase',
    	'f0a2'=>'fa-bell-o',
    	'f0f4'=>'fa-coffee',
    	'f0f5'=>'fa-cutlery',
    	'f0f6'=>'fa-file-text-o',
    	'f0f7'=>'fa-building-o',
    	'f0f8'=>'fa-hospital-o',
    	'f0f9'=>'fa-ambulance',
    	'f0fa'=>'fa-medkit',
    	'f0fb'=>'fa-fighter-jet',
    	'f0fc'=>'fa-beer',
    	'f0fd'=>'fa-h-square',
    	'f0fe'=>'fa-plus-square',
    	'f100'=>'fa-angle-double-left',
    	'f101'=>'fa-angle-double-right',
    	'f102'=>'fa-angle-double-up',
    	'f103'=>'fa-angle-double-down',
    	'f104'=>'fa-angle-left',
    	'f105'=>'fa-angle-right',
    	'f106'=>'fa-angle-up',
    	'f107'=>'fa-angle-down',
    	'f108'=>'fa-desktop',
    	'f109'=>'fa-laptop',
    	'f10a'=>'fa-tablet',
    	'f10b'=>'fa-mobile',
    	'f10c'=>'fa-circle-o',
    	'f10d'=>'fa-quote-left',
    	'f10e'=>'fa-quote-right',
    	'f110'=>'fa-spinner',
    	'f111'=>'fa-circle',
    	'f112'=>'fa-reply',
    	'f113'=>'fa-github-alt',
    	'f114'=>'fa-folder-o',
    	'f115'=>'fa-folder-open-o',
    	'f118'=>'fa-smile-o',
    	'f119'=>'fa-frown-o',
    	'f11a'=>'fa-meh-o',
    	'f11b'=>'fa-gamepad',
    	'f11c'=>'fa-keyboard-o',
    	'f11d'=>'fa-flag-o',
    	'f11e'=>'fa-flag-checkered',
    	'f120'=>'fa-terminal',
    	'f121'=>'fa-code',
    	'f122'=>'fa-reply-all',
    	'f122'=>'fa-mail-reply-all',
    	'f123'=>'fa-star-half-o',
    	'f124'=>'fa-location-arrow',
    	'f125'=>'fa-crop',
    	'f126'=>'fa-code-fork',
    	'f127'=>'fa-chain-broken',
    	'f128'=>'fa-question',
    	'f129'=>'fa-info',
    	'f12a'=>'fa-exclamation',
    	'f12b'=>'fa-superscript',
    	'f12c'=>'fa-subscript',
    	'f12d'=>'fa-eraser',
    	'f12e'=>'fa-puzzle-piece',
    	'f130'=>'fa-microphone',
    	'f131'=>'fa-microphone-slash',
    	'f132'=>'fa-shield',
    	'f133'=>'fa-calendar-o',
    	'f134'=>'fa-fire-extinguisher',
    	'f135'=>'fa-rocket',
    	'f136'=>'fa-maxcdn',
    	'f137'=>'fa-chevron-circle-left',
    	'f138'=>'fa-chevron-circle-right',
    	'f139'=>'fa-chevron-circle-up',
    	'f13a'=>'fa-chevron-circle-down',
    	'f13b'=>'fa-html5',
    	'f13c'=>'fa-css3',
    	'f13d'=>'fa-anchor',
    	'f13e'=>'fa-unlock-alt',
    	'f140'=>'fa-bullseye',
    	'f141'=>'fa-ellipsis-h',
    	'f142'=>'fa-ellipsis-v',
    	'f143'=>'fa-rss-square',
    	'f144'=>'fa-play-circle',
    	'f145'=>'fa-ticket',
    	'f146'=>'fa-minus-square',
    	'f147'=>'fa-minus-square-o',
    	'f148'=>'fa-level-up',
    	'f149'=>'fa-level-down',
    	'f14a'=>'fa-check-square',
    	'f14b'=>'fa-pencil-square',
    	'f14c'=>'fa-external-link-square',
    	'f14d'=>'fa-share-square',
    	'f14e'=>'fa-compass',
    	'f150'=>'fa-caret-square-o-down',
    	'f151'=>'fa-caret-square-o-up',
    	'f152'=>'fa-caret-square-o-right',
    	'f153'=>'fa-eur',
    	'f154'=>'fa-gbp',
    	'f155'=>'fa-usd',
    	'f156'=>'fa-inr',
    	'f157'=>'fa-jpy',
    	'f158'=>'fa-rub',
    	'f159'=>'fa-krw',
    	'f15a'=>'fa-btc',
    	'f15b'=>'fa-file',
    	'f15c'=>'fa-file-text',
    	'f15d'=>'fa-sort-alpha-asc',
    	'f15e'=>'fa-sort-alpha-desc',
    	'f160'=>'fa-sort-amount-asc',
    	'f161'=>'fa-sort-amount-desc',
    	'f162'=>'fa-sort-numeric-asc',
    	'f163'=>'fa-sort-numeric-desc',
    	'f164'=>'fa-thumbs-up',
    	'f165'=>'fa-thumbs-down',
    	'f166'=>'fa-youtube-square',
    	'f167'=>'fa-youtube',
    	'f168'=>'fa-xing',
    	'f169'=>'fa-xing-square',
    	'f16a'=>'fa-youtube-play',
    	'f16b'=>'fa-dropbox',
    	'f16c'=>'fa-stack-overflow',
    	'f16d'=>'fa-instagram',
    	'f16e'=>'fa-flickr',
    	'f170'=>'fa-adn',
    	'f171'=>'fa-bitbucket',
    	'f172'=>'fa-bitbucket-square',
    	'f173'=>'fa-tumblr',
    	'f174'=>'fa-tumblr-square',
    	'f175'=>'fa-long-arrow-down',
    	'f176'=>'fa-long-arrow-up',
    	'f177'=>'fa-long-arrow-left',
    	'f178'=>'fa-long-arrow-right',
    	'f179'=>'fa-apple',
    	'f17a'=>'fa-windows',
    	'f17b'=>'fa-android',
    	'f17c'=>'fa-linux',
    	'f17d'=>'fa-dribbble',
    	'f17e'=>'fa-skype',
    	'f180'=>'fa-foursquare',
    	'f181'=>'fa-trello',
    	'f182'=>'fa-female',
    	'f183'=>'fa-male',
    	'f184'=>'fa-gittip',
    	'f185'=>'fa-sun-o',
    	'f186'=>'fa-moon-o',
    	'f187'=>'fa-archive',
    	'f188'=>'fa-bug',
    	'f189'=>'fa-vk',
    	'f18a'=>'fa-weibo',
    	'f18b'=>'fa-renren',
    	'f18c'=>'fa-pagelines',
    	'f18d'=>'fa-stack-exchange',
    	'f18e'=>'fa-arrow-circle-o-right',
    	'f190'=>'fa-arrow-circle-o-left',
    	'f191'=>'fa-caret-square-o-left',
    	'f192'=>'fa-dot-circle-o',
    	'f193'=>'fa-wheelchair',
    	'f194'=>'fa-vimeo-square',
    	'f195'=>'fa-try');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //This is the descriptor for Category Icons
    $name = 'theme_elegance/categoryiconinfo';
    $heading = get_string('categoryiconinfo', 'theme_elegance');
    $information = get_string('categoryiconinfodesc', 'theme_elegance');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Category 1 Icon.
    $name = 'theme_elegance/categoryicon';
    $title = get_string('categoryicon' , 'theme_elegance');
    $description = get_string('categoryicondesc', 'theme_elegance');
    $default = '';
    $choices = array(
		''=>'Use Default',
		'f000'=>'fa-glass',
    	'f001'=>'fa-music',
    	'f002'=>'fa-search',
    	'f003'=>'fa-envelope-o',
    	'f004'=>'fa-heart',
    	'f005'=>'fa-star',
    	'f006'=>'fa-star-o',
    	'f007'=>'fa-user',
    	'f008'=>'fa-film',
    	'f009'=>'fa-th-large',
    	'f00a'=>'fa-th',
    	'f00b'=>'fa-th-list',
    	'f00c'=>'fa-check',
    	'f00d'=>'fa-times',
    	'f00e'=>'fa-search-plus',
    	'f010'=>'fa-search-minus',
    	'f011'=>'fa-power-off',
    	'f012'=>'fa-signal',
    	'f013'=>'fa-cog',
    	'f014'=>'fa-trash-o',
    	'f015'=>'fa-home',
    	'f016'=>'fa-file-o',
    	'f017'=>'fa-clock-o',
    	'f018'=>'fa-road',
    	'f019'=>'fa-download',
    	'f01a'=>'fa-arrow-circle-o-down',
    	'f01b'=>'fa-arrow-circle-o-up',
    	'f01c'=>'fa-inbox',
    	'f01d'=>'fa-play-circle-o',
    	'f01e'=>'fa-repeat',
    	'f021'=>'fa-refresh',
    	'f022'=>'fa-list-alt',
    	'f023'=>'fa-lock',
    	'f024'=>'fa-flag',
    	'f025'=>'fa-headphones',
    	'f026'=>'fa-volume-off',
    	'f027'=>'fa-volume-down',
    	'f028'=>'fa-volume-up',
    	'f029'=>'fa-qrcode',
    	'f02a'=>'fa-barcode',
    	'f02b'=>'fa-tag',
    	'f02c'=>'fa-tags',
    	'f02d'=>'fa-book',
    	'f02e'=>'fa-bookmark',
    	'f02f'=>'fa-print',
    	'f030'=>'fa-camera',
    	'f031'=>'fa-font',
    	'f032'=>'fa-bold',
    	'f033'=>'fa-italic',
    	'f034'=>'fa-text-height',
    	'f035'=>'fa-text-width',
    	'f036'=>'fa-align-left',
    	'f037'=>'fa-align-center',
    	'f038'=>'fa-align-right',
    	'f039'=>'fa-align-justify',
    	'f03a'=>'fa-list',
    	'f03b'=>'fa-outdent',
    	'f03c'=>'fa-indent',
    	'f03d'=>'fa-video-camera',
    	'f03e'=>'fa-picture-o',
    	'f040'=>'fa-pencil',
    	'f041'=>'fa-map-marker',
    	'f042'=>'fa-adjust',
    	'f043'=>'fa-tint',
    	'f044'=>'fa-pencil-square-o',
    	'f045'=>'fa-share-square-o',
    	'f046'=>'fa-check-square-o',
    	'f047'=>'fa-arrows',
    	'f048'=>'fa-step-backward',
    	'f049'=>'fa-fast-backward',
    	'f04a'=>'fa-backward',
    	'f04b'=>'fa-play',
    	'f04c'=>'fa-pause',
    	'f04d'=>'fa-stop',
    	'f04e'=>'fa-forward',
    	'f050'=>'fa-fast-forward',
    	'f051'=>'fa-step-forward',
    	'f052'=>'fa-eject',
    	'f053'=>'fa-chevron-left',
    	'f054'=>'fa-chevron-right',
    	'f055'=>'fa-plus-circle',
    	'f056'=>'fa-minus-circle',
    	'f057'=>'fa-times-circle',
    	'f058'=>'fa-check-circle',
    	'f059'=>'fa-question-circle',
    	'f05a'=>'fa-info-circle',
    	'f05b'=>'fa-crosshairs',
    	'f05c'=>'fa-times-circle-o',
    	'f05d'=>'fa-check-circle-o',
    	'f05e'=>'fa-ban',
    	'f060'=>'fa-arrow-left',
    	'f061'=>'fa-arrow-right',
    	'f062'=>'fa-arrow-up',
    	'f063'=>'fa-arrow-down',
    	'f064'=>'fa-share',
    	'f065'=>'fa-expand',
    	'f066'=>'fa-compress',
    	'f067'=>'fa-plus',
    	'f068'=>'fa-minus',
    	'f069'=>'fa-asterisk',
    	'f06a'=>'fa-exclamation-circle',
    	'f06b'=>'fa-gift',
    	'f06c'=>'fa-leaf',
    	'f06d'=>'fa-fire',
    	'f06e'=>'fa-eye',
    	'f070'=>'fa-eye-slash',
    	'f071'=>'fa-exclamation-triangle',
    	'f072'=>'fa-plane',
    	'f073'=>'fa-calendar',
    	'f074'=>'fa-random',
    	'f075'=>'fa-comment',
    	'f076'=>'fa-magnet',
    	'f077'=>'fa-chevron-up',
    	'f078'=>'fa-chevron-down',
    	'f079'=>'fa-retweet',
    	'f07a'=>'fa-shopping-cart',
    	'f07b'=>'fa-folder',
    	'f07c'=>'fa-folder-open',
    	'f07d'=>'fa-arrows-v',
    	'f07e'=>'fa-arrows-h',
    	'f080'=>'fa-bar-chart-o',
    	'f081'=>'fa-twitter-square',
    	'f082'=>'fa-facebook-square',
    	'f083'=>'fa-camera-retro',
    	'f084'=>'fa-key',		'f085'=>'fa-cogs',
		'f086'=>'fa-comments',
    	'f087'=>'fa-thumbs-o-up',
    	'f088'=>'fa-thumbs-o-down',
    	'f089'=>'fa-star-half',
    	'f08a'=>'fa-heart-o',
    	'f08b'=>'fa-sign-out',
    	'f08c'=>'fa-linkedin-square',
    	'f08d'=>'fa-thumb-tack',
    	'f08e'=>'fa-external-link',
    	'f090'=>'fa-sign-in',
    	'f091'=>'fa-trophy',
    	'f092'=>'fa-github-square',
    	'f093'=>'fa-upload',
    	'f094'=>'fa-lemon-o',
    	'f095'=>'fa-phone',
    	'f096'=>'fa-square-o',
    	'f097'=>'fa-bookmark-o',
    	'f098'=>'fa-phone-square',
    	'f099'=>'fa-twitter',
    	'f09a'=>'fa-facebook',
    	'f09b'=>'fa-github',
    	'f09c'=>'fa-unlock',
    	'f09d'=>'fa-credit-card',
    	'f09e'=>'fa-rss',
    	'f0a0'=>'fa-hdd-o',
    	'f0a1'=>'fa-bullhorn',
    	'f0f3'=>'fa-bell',
    	'f0a3'=>'fa-certificate',
    	'f0a4'=>'fa-hand-o-right',
    	'f0a5'=>'fa-hand-o-left',
    	'f0a6'=>'fa-hand-o-up',
    	'f0a7'=>'fa-hand-o-down',
    	'f0a8'=>'fa-arrow-circle-left',
    	'f0a9'=>'fa-arrow-circle-right',
    	'f0aa'=>'fa-arrow-circle-up',
    	'f0ab'=>'fa-arrow-circle-down',
    	'f0ac'=>'fa-globe',
    	'f0ad'=>'fa-wrench',
    	'f0ae'=>'fa-tasks',
    	'f0b0'=>'fa-filter',
    	'f0b1'=>'fa-briefcase',
    	'f0b2'=>'fa-arrows-alt',
    	'f0c0'=>'fa-users',
    	'f0c1'=>'fa-link',
    	'f0c2'=>'fa-cloud',
    	'f0c3'=>'fa-flask',
    	'f0c4'=>'fa-scissors',
    	'f0c5'=>'fa-files-o',
    	'f0c6'=>'fa-paperclip',
    	'f0c7'=>'fa-floppy-o',
    	'f0c8'=>'fa-square',
    	'f0c9'=>'fa-bars',
    	'f0ca'=>'fa-list-ul',
    	'f0cb'=>'fa-list-ol',
    	'f0cc'=>'fa-strikethrough',
    	'f0cd,a-underline',
    	'f0ce'=>'fa-table',
    	'f0d0'=>'fa-magic',
    	'f0d1'=>'fa-truck',
    	'f0d2'=>'fa-pinterest',
    	'f0d3'=>'fa-pinterest-square',
    	'f0d4'=>'fa-google-plus-square',
    	'f0d5'=>'fa-google-plus',
    	'f0d6'=>'fa-money',
    	'f0d7'=>'fa-caret-down',
    	'f0d8'=>'fa-caret-up',
    	'f0d9'=>'fa-caret-left',
    	'f0da'=>'fa-caret-right',
    	'f0db'=>'fa-columns',
    	'f0dc'=>'fa-sort',
    	'f0dd'=>'fa-sort-asc',
    	'f0de'=>'fa-sort-desc',
    	'f0e0'=>'fa-envelope',
    	'f0e1'=>'fa-linkedin',
    	'f0e2'=>'fa-undo',
    	'f0e3,a-gavel',
    	'f0e4'=>'fa-tachometer',
    	'f0e5'=>'fa-comment-o',
    	'f0e6'=>'fa-comments-o',
    	'f0e7'=>'fa-bolt',
    	'f0e8'=>'fa-sitemap',
    	'f0e9'=>'fa-umbrella',
    	'f0ea'=>'fa-clipboard',
    	'f0eb'=>'fa-lightbulb-o',
    	'f0ec'=>'fa-exchange',
    	'f0ed'=>'fa-cloud-download',
    	'f0ee'=>'fa-cloud-upload',
    	'f0f0'=>'fa-user-md',
    	'f0f1'=>'fa-stethoscope',
    	'f0f2'=>'fa-suitcase',
    	'f0a2'=>'fa-bell-o',
    	'f0f4'=>'fa-coffee',
    	'f0f5'=>'fa-cutlery',
    	'f0f6'=>'fa-file-text-o',
    	'f0f7'=>'fa-building-o',
    	'f0f8'=>'fa-hospital-o',
    	'f0f9'=>'fa-ambulance',
    	'f0fa'=>'fa-medkit',
    	'f0fb'=>'fa-fighter-jet',
    	'f0fc'=>'fa-beer',
    	'f0fd'=>'fa-h-square',
    	'f0fe'=>'fa-plus-square',
    	'f100'=>'fa-angle-double-left',
    	'f101'=>'fa-angle-double-right',
    	'f102'=>'fa-angle-double-up',
    	'f103'=>'fa-angle-double-down',
    	'f104'=>'fa-angle-left',
    	'f105'=>'fa-angle-right',
    	'f106'=>'fa-angle-up',
    	'f107'=>'fa-angle-down',
    	'f108'=>'fa-desktop',
    	'f109'=>'fa-laptop',
    	'f10a'=>'fa-tablet',
    	'f10b'=>'fa-mobile',
    	'f10c'=>'fa-circle-o',
    	'f10d'=>'fa-quote-left',
    	'f10e'=>'fa-quote-right',
    	'f110'=>'fa-spinner',
    	'f111'=>'fa-circle',
    	'f112'=>'fa-reply',
    	'f113'=>'fa-github-alt',
    	'f114'=>'fa-folder-o',
    	'f115'=>'fa-folder-open-o',
    	'f118'=>'fa-smile-o',
    	'f119'=>'fa-frown-o',
    	'f11a'=>'fa-meh-o',
    	'f11b'=>'fa-gamepad',
    	'f11c'=>'fa-keyboard-o',
    	'f11d'=>'fa-flag-o',
    	'f11e'=>'fa-flag-checkered',
    	'f120'=>'fa-terminal',
    	'f121'=>'fa-code',
    	'f122'=>'fa-reply-all',
    	'f122'=>'fa-mail-reply-all',
    	'f123'=>'fa-star-half-o',
    	'f124'=>'fa-location-arrow',
    	'f125'=>'fa-crop',
    	'f126'=>'fa-code-fork',
    	'f127'=>'fa-chain-broken',
    	'f128'=>'fa-question',
    	'f129'=>'fa-info',
    	'f12a'=>'fa-exclamation',
    	'f12b'=>'fa-superscript',
    	'f12c'=>'fa-subscript',
    	'f12d'=>'fa-eraser',
    	'f12e'=>'fa-puzzle-piece',
    	'f130'=>'fa-microphone',
    	'f131'=>'fa-microphone-slash',
    	'f132'=>'fa-shield',
    	'f133'=>'fa-calendar-o',
    	'f134'=>'fa-fire-extinguisher',
    	'f135'=>'fa-rocket',
    	'f136'=>'fa-maxcdn',
    	'f137'=>'fa-chevron-circle-left',
    	'f138'=>'fa-chevron-circle-right',
    	'f139'=>'fa-chevron-circle-up',
    	'f13a'=>'fa-chevron-circle-down',
    	'f13b'=>'fa-html5',
    	'f13c'=>'fa-css3',
    	'f13d'=>'fa-anchor',
    	'f13e'=>'fa-unlock-alt',
    	'f140'=>'fa-bullseye',
    	'f141'=>'fa-ellipsis-h',
    	'f142'=>'fa-ellipsis-v',
    	'f143'=>'fa-rss-square',
    	'f144'=>'fa-play-circle',
    	'f145'=>'fa-ticket',
    	'f146'=>'fa-minus-square',
    	'f147'=>'fa-minus-square-o',
    	'f148'=>'fa-level-up',
    	'f149'=>'fa-level-down',
    	'f14a'=>'fa-check-square',
    	'f14b'=>'fa-pencil-square',
    	'f14c'=>'fa-external-link-square',
    	'f14d'=>'fa-share-square',
    	'f14e'=>'fa-compass',
    	'f150'=>'fa-caret-square-o-down',
    	'f151'=>'fa-caret-square-o-up',
    	'f152'=>'fa-caret-square-o-right',
    	'f153'=>'fa-eur',
    	'f154'=>'fa-gbp',
    	'f155'=>'fa-usd',
    	'f156'=>'fa-inr',
    	'f157'=>'fa-jpy',
    	'f158'=>'fa-rub',
    	'f159'=>'fa-krw',
    	'f15a'=>'fa-btc',
    	'f15b'=>'fa-file',
    	'f15c'=>'fa-file-text',
    	'f15d'=>'fa-sort-alpha-asc',
    	'f15e'=>'fa-sort-alpha-desc',
    	'f160'=>'fa-sort-amount-asc',
    	'f161'=>'fa-sort-amount-desc',
    	'f162'=>'fa-sort-numeric-asc',
    	'f163'=>'fa-sort-numeric-desc',
    	'f164'=>'fa-thumbs-up',
    	'f165'=>'fa-thumbs-down',
    	'f166'=>'fa-youtube-square',
    	'f167'=>'fa-youtube',
    	'f168'=>'fa-xing',
    	'f169'=>'fa-xing-square',
    	'f16a'=>'fa-youtube-play',
    	'f16b'=>'fa-dropbox',
    	'f16c'=>'fa-stack-overflow',
    	'f16d'=>'fa-instagram',
    	'f16e'=>'fa-flickr',
    	'f170'=>'fa-adn',
    	'f171'=>'fa-bitbucket',
    	'f172'=>'fa-bitbucket-square',
    	'f173'=>'fa-tumblr',
    	'f174'=>'fa-tumblr-square',
    	'f175'=>'fa-long-arrow-down',
    	'f176'=>'fa-long-arrow-up',
    	'f177'=>'fa-long-arrow-left',
    	'f178'=>'fa-long-arrow-right',
    	'f179'=>'fa-apple',
    	'f17a'=>'fa-windows',
    	'f17b'=>'fa-android',
    	'f17c'=>'fa-linux',
    	'f17d'=>'fa-dribbble',
    	'f17e'=>'fa-skype',
    	'f180'=>'fa-foursquare',
    	'f181'=>'fa-trello',
    	'f182'=>'fa-female',
    	'f183'=>'fa-male',
    	'f184'=>'fa-gittip',
    	'f185'=>'fa-sun-o',
    	'f186'=>'fa-moon-o',
    	'f187'=>'fa-archive',
    	'f188'=>'fa-bug',
    	'f189'=>'fa-vk',
    	'f18a'=>'fa-weibo',
    	'f18b'=>'fa-renren',
    	'f18c'=>'fa-pagelines',
    	'f18d'=>'fa-stack-exchange',
    	'f18e'=>'fa-arrow-circle-o-right',
    	'f190'=>'fa-arrow-circle-o-left',
    	'f191'=>'fa-caret-square-o-left',
    	'f192'=>'fa-dot-circle-o',
    	'f193'=>'fa-wheelchair',
    	'f194'=>'fa-vimeo-square',
    	'f195'=>'fa-try');
    $categorynumber = '1';
    $setting = new admin_setting_configselect($name.$categorynumber, $title.' '.$categorynumber, $description.$categorynumber, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $categorynumber = '2';
    $setting = new admin_setting_configselect($name.$categorynumber, $title.' '.$categorynumber, $description.$categorynumber, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $categorynumber = '3';
    $setting = new admin_setting_configselect($name.$categorynumber, $title.' '.$categorynumber, $description.$categorynumber, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $categorynumber = '4';
    $setting = new admin_setting_configselect($name.$categorynumber, $title.' '.$categorynumber, $description.$categorynumber, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $categorynumber = '5';
    $setting = new admin_setting_configselect($name.$categorynumber, $title.' '.$categorynumber, $description.$categorynumber, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $categorynumber = '6';
    $setting = new admin_setting_configselect($name.$categorynumber, $title.' '.$categorynumber, $description.$categorynumber, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $categorynumber = '7';
    $setting = new admin_setting_configselect($name.$categorynumber, $title.' '.$categorynumber, $description.$categorynumber, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $categorynumber = '8';
    $setting = new admin_setting_configselect($name.$categorynumber, $title.' '.$categorynumber, $description.$categorynumber, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $categorynumber = '9';
    $setting = new admin_setting_configselect($name.$categorynumber, $title.' '.$categorynumber, $description.$categorynumber, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $categorynumber = '10';
    $setting = new admin_setting_configselect($name.$categorynumber, $title.' '.$categorynumber, $description.$categorynumber, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $categorynumber = '11';
    $setting = new admin_setting_configselect($name.$categorynumber, $title.' '.$categorynumber, $description.$categorynumber, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $categorynumber = '12';
    $setting = new admin_setting_configselect($name.$categorynumber, $title.' '.$categorynumber, $description.$categorynumber, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $categorynumber = '13';
    $setting = new admin_setting_configselect($name.$categorynumber, $title.' '.$categorynumber, $description.$categorynumber, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $categorynumber = '14';
    $setting = new admin_setting_configselect($name.$categorynumber, $title.' '.$categorynumber, $description.$categorynumber, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $categorynumber = '15';
    $setting = new admin_setting_configselect($name.$categorynumber, $title.' '.$categorynumber, $description.$categorynumber, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $categorynumber = '16';
    $setting = new admin_setting_configselect($name.$categorynumber, $title.' '.$categorynumber, $description.$categorynumber, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $categorynumber = '17';
    $setting = new admin_setting_configselect($name.$categorynumber, $title.' '.$categorynumber, $description.$categorynumber, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $categorynumber = '18';
    $setting = new admin_setting_configselect($name.$categorynumber, $title.' '.$categorynumber, $description.$categorynumber, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $categorynumber = '19';
    $setting = new admin_setting_configselect($name.$categorynumber, $title.' '.$categorynumber, $description.$categorynumber, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $categorynumber = '20';
    $setting = new admin_setting_configselect($name.$categorynumber, $title.' '.$categorynumber, $description.$categorynumber, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
            
    $ADMIN->add('theme_elegance', $temp);