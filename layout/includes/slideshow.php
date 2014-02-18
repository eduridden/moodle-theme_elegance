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
 * The Elegance theme is built upon  Bootstrapbase 3 (non-core).
 *
 * @package    theme
 * @subpackage theme_elegance
 * @author     Julian (@moodleman) Ridden
 * @author     Based on code originally written by G J Bernard, Mary Evans, Bas Brands, Stuart Lamour and David Scotson.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/* Slide 1 settings */
$hasslide1 = (!empty($PAGE->theme->settings->enablebanner1));
$hasslide1image = (!empty($PAGE->theme->settings->bannerimage1));
if ($hasslide1image) {
    $slide1image = $PAGE->theme->setting_file_url('bannerimage1', 'bannerimage1');
}
$slide1title = (empty($PAGE->theme->settings->bannertitle1)) ? false : $PAGE->theme->settings->bannertitle1;
$slide1caption = (empty($PAGE->theme->settings->bannertext1)) ? false : $PAGE->theme->settings->bannertext1;
$slide1url = (empty($PAGE->theme->settings->bannerlinkurl1)) ? false : $PAGE->theme->settings->bannerlinkurl1;
$slide1linktext = (empty($PAGE->theme->settings->bannerlinktext1)) ? false : $PAGE->theme->settings->bannerlinktext1;

/* Slide 2 settings */
$hasslide2 = (!empty($PAGE->theme->settings->enablebanner2));
$hasslide2image = (!empty($PAGE->theme->settings->bannerimage2));
if ($hasslide2image) {
    $slide2image = $PAGE->theme->setting_file_url('bannerimage2', 'bannerimage2');
}
$slide2title = (empty($PAGE->theme->settings->bannertitle2)) ? false : $PAGE->theme->settings->bannertitle2;
$slide2caption = (empty($PAGE->theme->settings->bannertext2)) ? false : $PAGE->theme->settings->bannertext2;
$slide2url = (empty($PAGE->theme->settings->bannerlinkurl2)) ? false : $PAGE->theme->settings->bannerlinkurl2;
$slide2linktext = (empty($PAGE->theme->settings->bannerlinktext2)) ? false : $PAGE->theme->settings->bannerlinktext2;

/* Slide 3 settings */
$hasslide3 = (!empty($PAGE->theme->settings->enablebanner3));
$hasslide3image = (!empty($PAGE->theme->settings->bannerimage3));
if ($hasslide3image) {
    $slide3image = $PAGE->theme->setting_file_url('bannerimage3', 'bannerimage3');
}
$slide3title = (empty($PAGE->theme->settings->bannertitle3)) ? false : $PAGE->theme->settings->bannertitle3;
$slide3caption = (empty($PAGE->theme->settings->bannertext3)) ? false : $PAGE->theme->settings->bannertext3;
$slide3url = (empty($PAGE->theme->settings->bannerlinkurl3)) ? false : $PAGE->theme->settings->bannerlinkurl3;
$slide3linktext = (empty($PAGE->theme->settings->bannerlinktext3)) ? false : $PAGE->theme->settings->bannerlinktext3;

/* Slide 4 settings */
$hasslide4 = (!empty($PAGE->theme->settings->enablebanner4));
$hasslide4image = (!empty($PAGE->theme->settings->bannerimage4));
if ($hasslide4image) {
    $slide1image = $PAGE->theme->setting_file_url('bannerimage4', 'bannerimage4');
}
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
		<li id="slide1" style="background-image: url(<?php echo $slide1image ?>); background-size: 100%; width: 25%;">
			<h1><?php echo $slide1title ?></h1>
			<p><?php echo $slide1caption ?></p>
			<a class="btn" href="<?php echo $slide1url ?>"><?php echo $slide1linktext ?></a>
		</li>
		<?php } ?>
		
		<?php if ($hasslide2) { ?>
		<li id="slide2" style="background-image: url(<?php echo $slide2image ?>); background-size: 100%; width: 25%;">
			<h1><?php echo $slide2title ?></h1>
			<p><?php echo $slide2caption ?></p>
			<a class="btn" href="<?php echo $slide2url ?>"><?php echo $slide2linktext ?></a>
		</li>
		<?php } ?>

		
		<?php if ($hasslide3) { ?>
		<li id="slide3" style="background-image: url(<?php echo $slide3image ?>); background-size: 100%; width: 25%;">
			<h1><?php echo $slide3title ?></h1>
			<p><?php echo $slide3caption ?></p>
			<a class="btn" href="<?php echo $slide3url ?>"><?php echo $slide3linktext ?></a>
		</li>
		<?php } ?>

		
		<?php if ($hasslide4) { ?>
		<li id="slide4" style="background-image: url(<?php echo $slide4image ?>); background-size: 100%; width: 25%;">
			<h1><?php echo $slide4title ?></h1>
			<p><?php echo $slide4caption ?></p>
			<a class="btn" href="<?php echo $slide4url ?>"><?php echo $slide4linktext ?></a>
		</li>
		<?php } ?>

	
	</ul>
</div>
<?php } ?>