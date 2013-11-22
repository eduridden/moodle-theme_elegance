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
 * @author     Based on code originally written by Shaun Daubney for the Aardvark theme.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

	function get_content () {
	global $USER, $CFG, $SESSION, $COURSE;
	$wwwroot = '';
	$signup = '';}

	if (empty($CFG->loginhttps)) {
		$wwwroot = $CFG->wwwroot;
	} else {
		$wwwroot = str_replace("http://", "https://", $CFG->wwwroot);
	}

if (!isloggedin() or isguestuser()) {
	echo '<li class="dropdown">
	<a class="dropdown-toggle" href="'.$CFG->wwwroot.'/login"><i class="fa fa-key"></i>&nbsp;Log in now.</a>
</li>';
} else { 
	echo '<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#cm_submenu_5"><i class="fa fa-user"></i>&nbsp;
'.$USER->firstname.' '.$USER->lastname.'
<b class="caret"></b>
</a>
<ul class="dropdown-menu profiledrop">';
echo '<li>';
echo '<a href="'.$CFG->wwwroot.'/my">';
echo get_string('mycourses');
echo '</a>';
echo '</li>';

echo '<li>';
echo '<a href="'.$CFG->wwwroot.'/user/profile.php">';
echo get_string('viewprofile');
echo '</a>';
echo '</li>';

echo '<li>';
echo '<a href="'.$CFG->wwwroot.'/user/edit.php">';
echo get_string('editmyprofile');
echo '</a>';
echo '</li>';

echo '<li>';
echo '<a href="'.$CFG->wwwroot.'/user/files.php">';
echo get_string('myfiles');
echo '</a>';
echo '</li>';

echo '<li>';
echo '<a href="'.$CFG->wwwroot.'/calendar/view.php?view=month">';
echo get_string('calendar','calendar');
echo '</a>';
echo '</li>';

echo '<li>';
echo '<a href="'.$CFG->wwwroot.'/login/logout.php">';
echo get_string('logout');
echo '</a>';
echo '</li>';


echo '</ul></li>';

}?>