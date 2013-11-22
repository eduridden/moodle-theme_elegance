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

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<header role="banner" class="navbar navbar-fixed-top">
    <nav role="navigation" class="navbar-inner navbar-inverse">
        <div class="container-fluid">
            <a class="brand" href="<?php echo $CFG->wwwroot;?>"><?php echo $SITE->shortname; ?></a>
            <ul class="nav">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div id="page" class="container-fluid">
	<div id="page-content" class="row-fluid">
		<section id="region-main" class="span12">
			<?php echo $OUTPUT->main_content(); ?>
		</section>
</div>

<footer id="page-footer">
 
</footer>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>


</body>
</html>
<script type="text/javascript">
$.backstretch([
      "<?php echo $OUTPUT->pix_url('bg/body/1', 'theme')?>"
    , "<?php echo $OUTPUT->pix_url('bg/body/2', 'theme')?>"
    , "<?php echo $OUTPUT->pix_url('bg/body/3', 'theme')?>"
    , "<?php echo $OUTPUT->pix_url('bg/body/4', 'theme')?>"
  ], {duration: 3000, fade: 750});
  </script>