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
 * This is built using the Clean template to allow for new theme's using
 * Moodle's new Bootstrap theme engine
 *
 *
 * @package   theme_elegance
 * @copyright 2014 Julian Ridden
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$hascopyright = (empty($PAGE->theme->settings->copyright)) ? false : $PAGE->theme->settings->copyright;
$hasfootnote = (empty($PAGE->theme->settings->footnote)) ? false : $PAGE->theme->settings->footnote;

?>
	<div class="container">
	<div class="row">
		<div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
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
			<?php echo $OUTPUT->login_info(); ?>
			<p class="helplink"><?php echo $OUTPUT->page_doc_link(); ?></p>
		</div>
	</div>
	</div>
	<?php echo $OUTPUT->standard_footer_html(); ?>