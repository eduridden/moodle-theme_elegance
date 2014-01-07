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

/* Slide 1 settings */
$hasslide1 = (!empty($PAGE->theme->settings->enablebanner1));
$slide1title = (empty($PAGE->theme->settings->bannertitle1)) ? false : $PAGE->theme->settings->bannertitle1;
$slide1caption = (empty($PAGE->theme->settings->bannertext1)) ? false : $PAGE->theme->settings->bannertext1;
$slide1url = (empty($PAGE->theme->settings->bannerlinkurl1)) ? false : $PAGE->theme->settings->bannerlinkurl1;
$slide1linktext = (empty($PAGE->theme->settings->bannerlinktext1)) ? false : $PAGE->theme->settings->bannerlinktext1;

/* Slide 2 settings */
$hasslide2 = (!empty($PAGE->theme->settings->enablebanner2));
$slide2title = (empty($PAGE->theme->settings->bannertitle2)) ? false : $PAGE->theme->settings->bannertitle2;
$slide2caption = (empty($PAGE->theme->settings->bannertext2)) ? false : $PAGE->theme->settings->bannertext2;
$slide2url = (empty($PAGE->theme->settings->bannerlinkurl2)) ? false : $PAGE->theme->settings->bannerlinkurl2;
$slide2linktext = (empty($PAGE->theme->settings->bannerlinktext2)) ? false : $PAGE->theme->settings->bannerlinktext2;

/* Slide 3 settings */
$hasslide3 = (!empty($PAGE->theme->settings->enablebanner3));
$slide3title = (empty($PAGE->theme->settings->bannertitle3)) ? false : $PAGE->theme->settings->bannertitle3;
$slide3caption = (empty($PAGE->theme->settings->bannertext3)) ? false : $PAGE->theme->settings->bannertext3;
$slide3url = (empty($PAGE->theme->settings->bannerlinkurl3)) ? false : $PAGE->theme->settings->bannerlinkurl3;
$slide3linktext = (empty($PAGE->theme->settings->bannerlinktext3)) ? false : $PAGE->theme->settings->bannerlinktext3;

/* Slide 4 settings */
$hasslide4 = (!empty($PAGE->theme->settings->enablebanner4));
$slide4title = (empty($PAGE->theme->settings->bannertitle4)) ? false : $PAGE->theme->settings->bannertitle4;
$slide4caption = (empty($PAGE->theme->settings->bannertext4)) ? false : $PAGE->theme->settings->bannertext4;
$slide4url = (empty($PAGE->theme->settings->bannerlinkurl4)) ? false : $PAGE->theme->settings->bannerlinkurl4;
$slide4linktext = (empty($PAGE->theme->settings->bannerlinktext4)) ? false : $PAGE->theme->settings->bannerlinktext4;


$hasslideshow = ($hasslide1 || $hasslide2 || $hasslide3 || $hasslide4 ) ? true : false;
?>

<?php if ($hasslideshow) { ?>
<div class="banner has-dots" style="overflow: hidden; width: 100%; height: 415px;">
	<ul style="width: 400%; position: relative; left: -200%; height: 415px;">
		
		<?php if ($hasslide1) { ?>
		<li style="background-image: url(http://unslider.com/img/sunset.jpg); background-size: 100%; width: 25%;">
			<h1><?php echo $slide1title ?></h1>
			<p><?php echo $slide1caption ?></p>
			<a class="btn" href="<?php echo $slide1url ?>"><?php echo $slide1linktext ?></a>
		</li>
		<?php } ?>
		
		<?php if ($hasslide2) { ?>
		<li style="background-image: url(http://unslider.com/img/wood.jpg); background-size: 100%; width: 25%;">
			<h1><?php echo $slide2title ?></h1>
			<p><?php echo $slide2caption ?></p>
			<a class="btn" href="<?php echo $slide2url ?>"><?php echo $slide2linktext ?></a>
		</li>
		<?php } ?>

		
		<?php if ($hasslide3) { ?>
		<li style="background-image: url(http://unslider.com/img/subway.jpg); background-size: 100%; width: 25%;">
			<h1><?php echo $slide3title ?></h1>
			<p><?php echo $slide3caption ?></p>
			<a class="btn" href="<?php echo $slide3url ?>"><?php echo $slide3linktext ?></a>
		</li>
		<?php } ?>

		
		<?php if ($hasslide4) { ?>
		<li style="background-image: url(http://unslider.com/img/shop.jpg); background-size: 100%; width: 25%;">
			<h1><?php echo $slide4title ?></h1>
			<p><?php echo $slide4caption ?></p>
			<a class="btn" href="<?php echo $slide4url ?>"><?php echo $slide4linktext ?></a>
		</li>
		<?php } ?>

	
	</ul>
</div>
<?php } ?>