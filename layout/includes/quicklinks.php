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

 $quicklinksnum = $PAGE->theme->settings->quicklinksnumber;

// make use of $quicklinksnum for better behaviour
// set lg size to be 12/$quicklinksnum if $quicklinksnum is less than 4
// so with 1 link you get lg-12, 2 links you get lg-6, 3 links you get lg-4 and 4+ links you get lg-3
// set md size to be 12/$quicklinksnum if $quicklinsnum is less than 3
$lg = ( $quicklinksnum <4 ? 12/$quicklinksnum : 3 );
$md = ( $quicklinksnum <3 ? 12/$quicklinksnum : 4 );

 ?>

<div id="heading">
	<h2 class="quicklinksheader">
		<i class="fa fa-<?php echo $PAGE->theme->settings->quicklinksicon ?>"></i>
		<?php echo $PAGE->theme->settings->quicklinkstitle ?>
	</h2>
</div>

<div class="row" id="quicklinks">

	<?php foreach (range(1, $quicklinksnum) as $quicklinksnumber) {
		$qli = "quicklinkicon$quicklinksnumber";
		$qlt = "quicklinkbuttontext$quicklinksnumber";
		$qlu = "quicklinkbuttonurl$quicklinksnumber";
		?>
		<?php
		echo "<div class='col-lg-$lg col-md-$md col-sm-4 col-xs-6' id='quicklink'>";
			if (!empty($PAGE->theme->settings->$qlu)) {
				echo '<a href="'.$PAGE->theme->settings->$qlu.'">';
			}
			echo '<div id="circle-highlight" class="quicklinkiconcolor'.$quicklinksnumber.'">';
			if (!empty($PAGE->theme->settings->$qli)) {
				echo '<i class="fa fa-'.$PAGE->theme->settings->$qli.'"></i>';
			} else {
				echo '<i class="fa fa-check"></i>';
			}
			echo '</div>';
			echo '<p class="btn quicklinkbuttoncolor'.$quicklinksnumber.'">';
				if (!empty($PAGE->theme->settings->$qlt)) {
					echo $PAGE->theme->settings->$qlt;
				} else {
					echo 'Click here';
				}
			echo '</p>';
			if (!empty($PAGE->theme->settings->$qlu)) {
				echo '</a>';
			} ?>
		</div>
	<?php } ?>

</div>
