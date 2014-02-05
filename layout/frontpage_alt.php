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

// Get the HTML for the settings bits.
$html = theme_elegance_get_html_for_settings($OUTPUT, $PAGE);

$hassidepost = $PAGE->blocks->region_has_content('side-post', $OUTPUT);
$hassidemiddle = $PAGE->blocks->region_has_content('side-middle', $OUTPUT);
$hashiddendock = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('hidden-dock', $OUTPUT));
$hascopyright = (empty($PAGE->theme->settings->copyright)) ? false : $PAGE->theme->settings->copyright;
$hasfootnote = (empty($PAGE->theme->settings->footnote)) ? false : $PAGE->theme->settings->footnote;

$haslogo = (empty($PAGE->theme->settings->logo)) ? false : $PAGE->theme->settings->logo;

 if ($haslogo) {
 	$logo = '<div id="logo"></div>';
 } else {
 	$logo = $SITE->shortname;
 }
 
$regions = bootstrap3_grid($hassidepost);
$PAGE->set_popup_notification_allowed(false);
$PAGE->requires->jquery();
echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<nav role="navigation" class="navbar <?php echo $html->navbarclass ?>">
    <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#moodle-navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo $CFG->wwwroot;?>"><?php echo $logo; ?></a>
    </div>

    <div id="moodle-navbar" class="navbar-collapse collapse">
        <?php echo $OUTPUT->custom_menu(); ?>
        <?php echo $OUTPUT->user_menu(); ?>
        <ul class="nav pull-right">
            <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
        </ul>
    </div>
    </div>
</nav>

<div id="page">

	 <!-- Google web fonts -->
    <?php require_once(dirname(__FILE__).'/includes/slideshow.php'); ?>
	
    <header id="page-header" class="clearfix">
        <div id="fontpagecontent" class="container">
            <h3>iMoot 2014 - Global Online Moodle Conference, 15 - 19 May 2014</h3><p>iMoot is the largest online Moodle Conference with international Speakers.</p><a href="http://2014.imoot.org/course/view.php?id=5" class="btn btn-default btn-large">Register Now at EarlyBird Rates</a>
        </div>

        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div>
    </header>
    
    
    
    
    
    <div id="page-content" class="container">
	    <div id="page-marketing">
    <div class="row">
    	<div id="sp-position1" class="col-md-7">	
    		<?php echo $OUTPUT->blocks('side-middle'); ?>
    	</div>
    	
    	<div id="sp-position2" class="col-md-10">
    		<div class="module title1">
    			<div class="mod-wrapper-flat clearfix">
    				<h2 class="marketingheader">iMoot at a glance</h2>
    				<span class="sp-badge title1"></span>
    				<div class="customtitle1">
    					<div class="row ">
    						<div class="col-md-8">
    							<div>
    								<div class="marketing-block">
    									<h3><i class="fa fa-group"></i> 70+ Speakers</h3>
    									<p>Moodle experts from around the world presenting in their chosen fields</p>
    								</div>
    							</div>
    						</div>
    						<div class="col-md-8">
    							<div>
    								<div class="marketing-block">
    									<h3><i class="fa fa-calendar"></i> 90+ Sessions</h3>
    									<p>Sessions covering topics from pedagagoy to technology and beyond!</p>
    								</div>
    							</div>
    						</div>
    					</div>
    					<div class="row ">
    						<div class="col-md-8">
    							<div>
    								<div class="marketing-block">
    									<h3><i class="fa fa-clock-o"></i> 102 Hours</h3>
    									<p>Multiple streams run 24 hours a day over 5 days of the program</p>
    								</div>
    							</div>
    						</div>
    						<div class="col-md-8">
    							<div>
    								<div class="marketing-block">
    									<h3><i class="fa fa-film"></i> Recorded Sessions</h3>
    									<p>Missed a great session? All are recorded and available for playback.</p>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    </div>
    </div>
    
    
    

    <div id="page-content" class="container">
        <div id="region-main" class="<?php echo $regions['content']; ?>">
	        <div id="heading"><h1>iMoot Quick Links</h1></div>
	        
	        
	        <div class="row" id="quicklinks">
	        	<div class="col-md-4" id="quicklink">
	        		<a href="http://2014.imoot.org/mod/page/view.php?id=1"><div id="circle-highlight"><i class="fa fa-ticket"></i></div>
	        		<p class="btn btn-success">Register Now</p></a>
	        	</div>
	        	<div class="col-md-4" id="quicklink">
	        		<a href="http://2014.imoot.org/course/view.php?id=6"><div id="circle-highlight"><i class="fa fa-bullhorn"></i></div>
	        		<p class="btn btn-default">Submit Presentation</p></a>
	        	</div>
	        	<div class="col-md-4" id="quicklink">
	        		<a href="http://2014.imoot.org/course/view.php?id=3"><div id="circle-highlight"><i class="fa fa-comments"></i></div>
	        		<p class="btn btn-default">iMoot Forums</p></a>
	        	</div>
	        	<div class="col-md-4" id="quicklink">
	        		<a href="http://2014.imoot.org/mod/page/view.php?id=5"><div id="circle-highlight"><i class="fa fa-money"></i></div>
	        		<p class="btn btn-default">Sponsorship</p></a>
	        	</div>
	        </div>
	        
	        
            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
        </div>
        
        <?php if (is_siteadmin()) { ?>
        <div id="hidden-blocks" class="<?php echo $regions['content']; ?>">
        		<h4><?php echo get_string('visibleadminonly', 'theme_elegance') ?></h4>
        		<?php echo $OUTPUT->blocks('hidden-dock'); ?>
        </div>
        <?php } ?>

        <?php
        if ($hassidepost) {
            echo $OUTPUT->blocks('side-post', $regions['post']);
        }?>
    </div>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>

</div>

<footer id="page-footer">
	<?php require_once(dirname(__FILE__).'/includes/footer.php'); ?>
</footer>

<script>
    $('body').show();
    $('.version').text(NProgress.version);
    NProgress.start();
    setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 1000);

    $("#b-0").click(function() { NProgress.start(); });
    $("#b-40").click(function() { NProgress.set(0.4); });
    $("#b-inc").click(function() { NProgress.inc(); });
    $("#b-100").click(function() { NProgress.done(); });
    
    if(window.chrome) {
				$('.banner li').css('background-size', '100% 100%');
	}
	
    $('.banner').unslider({
				fluid: true,
				dots: true,
				speed: 600,
				keys: true,
				arrows: true,
    			prev: '<',
    			next: '>'
	});	
	</script>
</body>
</html>
