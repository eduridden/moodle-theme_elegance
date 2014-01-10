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

$string['choosereadme'] = '
<div class="clearfix">
<div class="well">
<h2>elegance</h2>
<p><img class=img-polaroid src="elegance/pix/screenshot.jpg" /></p>
</div>
<div class="well">
<h3>About</h3>
<p>Elegance is a modified Moodle bootstrap theme which inherits styles and renderers from its parent theme.</p>
<h3>Parents</h3>
<p>This theme is based upon the Bootstrap theme, which was created for Moodle 2.5, with the help of:<br>
Stuart Lamour, Mark Aberdour, Paul Hibbitts, Mary Evans.</p>
<h3>Theme Credits</h3>
<p>Authors: Bas Brands, David Scotson, Mary Evans<br>
Contact: bas@sonsbeekmedia.nl<br>
Website: <a href="http://www.basbrands.nl">www.basbrands.nl</a>
</p>
<h3>Report a bug:</h3>
<p><a href="http://tracker.moodle.org">http://tracker.moodle.org</a></p>
<h3>More information</h3>
<p><a href="elegance/README.txt">How to copy and customise this theme.</a></p>
</div></div>';

$string['configtitle'] = 'Elegance';

$string['customcss'] = 'Custom CSS';
$string['customcssdesc'] = 'Whatever CSS rules you add to this textarea will be reflected in every page, making for easier customization of this theme.';

$string['footnote'] = 'Footnote';
$string['footnotedesc'] = 'Whatever you add to this textarea will be displayed in the footer throughout your Moodle site.';

$string['invert'] = 'Invert navbar';
$string['invertdesc'] = 'Swaps text and background for the navbar at the top of the page between black and white.';

$string['logo'] = 'Logo';
$string['logodesc'] = 'Please upload your custom logo here if you want to add it to the header.<br>
If the height of your logo is more than 75px add the following CSS rule to the Custom CSS box below.<br>
a.logo {height: 100px;} or whatever height in pixels the logo is.';

$string['pluginname'] = 'Elegance';

$string['region-side-post'] = 'Right';
$string['region-side-pre'] = 'Left';

$string['backtotop'] = 'Back to top';
$string['nextsection'] = 'Next Section';
$string['previoussection'] = 'Previous Section';

$string['themecolor'] = 'Theme Colour';
$string['themecolordesc'] = 'What colour should your theme be.  This will change mulitple components to produce the colour you wish across the moodle site';

$string['copyright'] = 'Copyright';
$string['copyrightdesc'] = 'The name of your organisation.';

/* General */
$string['geneicsettings'] = 'General Settings';

$string['tiles'] = 'Tile Course resources';
$string['tilesdesc'] = 'Displayes resources and activities as tiles in a course';

$string['bootstrapcdn'] = 'FontAwesome from CDN';
$string['bootstrapcdndesc'] = 'If enabled this will load FontAwesome from the online Bootstrap CDN source. Enable this if you are having issues getting the Font Awesome icons to display in your site.';

/* Banners */

$string['bannersettings'] = 'Slideshow Settings';
$string['bannersettingssub'] = 'These settings control the slideshow that appears on the Moodle frontpage';
$string['bannersettingsdesc'] = 'Enable and determine settings for each slide below';


$string['bannerindicator'] = 'Slide Number ';
$string['bannerindicatordesc'] = 'Set up this slide';


$string['slidenumber'] = 'Number of slides ';
$string['slidenumberdesc'] = 'Number of slide options will not change until you hit save after changing this number';

$string['enablebanner'] = 'Enable this Slide';
$string['enablebannerdesc'] = 'Will you be using this slide';

$string['bannertitle'] = 'Slide Title';
$string['bannertitledesc'] = 'Name of this slide';

$string['bannertext'] = 'Slide Text';
$string['bannertextdesc'] = 'Text to display on the slide';

$string['bannerlinktext'] = 'URL Name';
$string['bannerlinktextdesc'] = 'Text to display when showing link';

$string['bannerlinkurl'] = 'URL Address';
$string['bannerlinkurldesc'] = 'Address slide links to';

$string['bannerimage'] = 'Slide Image';
$string['bannerimagedesc'] = 'Large image to go behind the slide text';

$string['bannercolor'] = 'Slide Color';
$string['bannercolordesc'] = 'Don\'t want to use an image? Specify a background color instead';

/* Social Networks */
$string['socialheading'] = 'Social Networking';
$string['socialheadingsub'] = 'Engage your users with Social Networking';
$string['socialdesc'] = 'Provide direct links to the core social networks that promote your brand.  These will appear in the header of every page.';
$string['socialnetworks'] = 'Social Networks';
$string['facebook'] = 'Facebook URL';
$string['facebookdesc'] = 'Enter the URL of your Facebook page. (i.e http://www.facebook.com/mycollege)';

$string['twitter'] = 'Twitter URL';
$string['twitterdesc'] = 'Enter the URL of your Twitter feed. (i.e http://www.twitter.com/mycollege)';

$string['googleplus'] = 'Google+ URL';
$string['googleplusdesc'] = 'Enter the URL of your Google+ profile. (i.e http://plus.google.com/107817105228930159735)';

$string['linkedin'] = 'LinkedIn URL';
$string['linkedindesc'] = 'Enter the URL of your LinkedIn profile. (i.e http://www.linkedin.com/company/mycollege)';

$string['youtube'] = 'YouTube URL';
$string['youtubedesc'] = 'Enter the URL of your YouTube channel. (i.e http://www.youtube.com/mycollege)';

$string['flickr'] = 'Flickr URL';
$string['flickrdesc'] = 'Enter the URL of your Flickr page. (i.e http://www.flickr.com/mycollege)';

$string['vk'] = 'VKontakte URL';
$string['vkdesc'] = 'Enter the URL of your Vkontakte page. (i.e http://www.vk.com/mycollege)';

$string['skype'] = 'Skype Account';
$string['skypedesc'] = 'Enter the Skype username of your organisations Skype account';

$string['pinterest'] = 'Pinterest URL';
$string['pinterestdesc'] = 'Enter the URL of your Pinterest page. (i.e http://pinterest.com/mycollege)';

$string['instagram'] = 'Instagram URL';
$string['instagramdesc'] = 'Enter the URL of your Instagram page. (i.e http://instagram.com/mycollege)';

$string['website'] = 'Website URL';
$string['websitedesc'] = 'Enter the URL of your own website. (i.e http://www.pukunui.com)';


/* Category Icons */
$string['categoryiconheading'] = 'Category Icons';
$string['categoryiconheadingsub'] = 'Use icons to represent your categories';
$string['categoryicondesc'] = 'If enabled this will allow you to set icons for each category of course.';


$string['categorynumber'] = 'Number of Categories ';
$string['categorynumberdesc'] = 'Number of category icons will not change until you hit save after changing this number';

$string['defaultcategoryicon'] = 'Default Category Icons';
$string['defaultcategoryicondesc'] = 'Set a default category icon';

$string['categoryiconinfo'] = 'Set Custom Category Icons';
$string['categoryiconinfodesc'] = 'Each icon is set by "category ID". You get these by looking at the URL or each category.';

$string['enablecategoryicon'] = 'Turn on icons';
$string['enablecategoryicondesc'] = 'If ticked this will enable the category icon funcionality.';

$string['categoryicon'] = 'Category';
$string['categoryicondesc'] = 'categoryid=';

$string['subtitle'] = 'Subtitle';
$string['subtitle_desc'] = 'Optionally select a subtitle for the Moodle homepage';

