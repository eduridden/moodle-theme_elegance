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

$hascopyright = (empty($PAGE->theme->settings->copyright)) ? false : $PAGE->theme->settings->copyright;
$hasfootnote = (empty($PAGE->theme->settings->footnote)) ? false : $PAGE->theme->settings->footnote;


$hasfacebook    = (empty($PAGE->theme->settings->facebook)) ? false : $PAGE->theme->settings->facebook;
$hastwitter     = (empty($PAGE->theme->settings->twitter)) ? false : $PAGE->theme->settings->twitter;
$hasgoogleplus  = (empty($PAGE->theme->settings->googleplus)) ? false : $PAGE->theme->settings->googleplus;
$haslinkedin    = (empty($PAGE->theme->settings->linkedin)) ? false : $PAGE->theme->settings->linkedin;
$hasyoutube     = (empty($PAGE->theme->settings->youtube)) ? false : $PAGE->theme->settings->youtube;
$hasflickr      = (empty($PAGE->theme->settings->flickr)) ? false : $PAGE->theme->settings->flickr;
$hasvk          = (empty($PAGE->theme->settings->vk)) ? false : $PAGE->theme->settings->vk;
$haspinterest   = (empty($PAGE->theme->settings->pinterest)) ? false : $PAGE->theme->settings->pinterest;
$hasinstagram   = (empty($PAGE->theme->settings->instagram)) ? false : $PAGE->theme->settings->instagram;
$hasskype       = (empty($PAGE->theme->settings->skype)) ? false : $PAGE->theme->settings->skype;
$haswebsite     = (empty($PAGE->theme->settings->website)) ? false : $PAGE->theme->settings->website;

// If any of the above social networks are true, sets this to true.
$hassocialnetworks = ($hasfacebook || $hastwitter || $hasgoogleplus || $hasflickr || $hasinstagram || $hasvk || $haslinkedin || $haspinterest || $hasskype || $haslinkedin || $haswebsite || $hasyoutube ) ? true : false;

?>
<div class="container">
	<div class="row">
		<div id="course-footer">
			<?php echo $OUTPUT->course_footer(); ?>	
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-6">
			<?php echo $OUTPUT->home_link(); ?>
   			
			<?php
			if ($hascopyright) {
				echo '<p class="copy">&copy; Copyright '.date("Y").' by '.$hascopyright.'</p>';
   			} ?>
   			
   			<?php if ($hasfootnote) {
				echo  '<div class="footnote">'. $hasfootnote. '</div>';
   			} ?>
   			
		</div>
		
		<div class="col-lg-6 pull-right">
			<?php echo $OUTPUT->login_info();
			if ($hassocialnetworks) {
				echo '<ul class="socials unstyled">';
					if ($hasgoogleplus) {
						echo '<li><a href="'.$hasgoogleplus.'" class="socialicon googleplus"><i class="fa fa-google-plus fa-inverse fa-fw"></i></a></li>';
					}
					
					if ($hastwitter) {
						echo '<li><a href="'.$hastwitter.'" class="socialicon twitter"><i class="fa fa-twitter fa-inverse fa-fw"></i></a></li>';
					}
					
					if ($hasfacebook) {
						echo '<li><a href="'.$hasfacebook.'" class="socialicon facebook"><i class="fa fa-facebook fa-inverse fa-fw"></i></a></li>';
					}
					
					if ($haslinkedin) {
						echo '<li><a href="'.$haslinkedin.'" class="socialicon linkedin"><i class="fa fa-linkedin fa-inverse fa-fw"></i></a></li>';
					}
					
					if ($hasyoutube) {
						echo '<li><a href="'.$hasyoutube.'" class="socialicon youtube"><i class="fa fa-youtube fa-inverse fa-fw"></i></a></li>';
					}
					
					if ($hasflickr) {
						echo '<li><a href="'.$hasflickr.'" class="socialicon flickr"><i class="fa fa-flickr fa-inverse fa-fw"></i></a></li>';
					}
					
					if ($haspinterest) {
						echo '<li><a href="'.$haspinterest.'" class="socialicon pinterest"><i class="fa fa-pinterest fa-inverse fa-fw"></i></a></li>';
					}
					
					if ($hasinstagram) {
						echo '<li><a href="'.$hasinstagram.'" class="socialicon instagram"><i class="fa fa-instagram fa-inverse fa-fw"></i></a></li>';
					}
					
					if ($hasvk) {
						echo '<li><a href="'.$hasvk.'" class="socialicon vk"><i class="fa fa-vk fa-inverse fa-fw"></i></a></li>';
					}
					
					if ($hasskype) {
						echo '<li><a href="'.$hasskype.'" class="socialicon skype"><i class="fa fa-skype fa-inverse fa-fw"></i></a></li>';
					}
					
					if ($haswebsite) {
						echo '<li><a href="'.$haswebsite.'" class="socialicon website"><i class="fa fa-globe fa-inverse fa-fw"></i></a></li>';
					}
				echo '</ul>';
			} ?>
		</div>
	</div>
	
	<div class="row">
		<p class="helplink"><?php echo $OUTPUT->page_doc_link(); ?></p>
		<?php echo $OUTPUT->standard_footer_html(); ?>
	</div>
	
</div>