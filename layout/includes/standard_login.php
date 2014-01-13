<div id="region-main" class="<?php echo $regions['content']; ?>">
	<?php
		echo $OUTPUT->course_content_header();
		echo $OUTPUT->main_content();
		echo $OUTPUT->course_content_footer();
	?>
</div>

<?php
	if ($hassidepost) {
		echo $OUTPUT->blocks('side-post', $regions['post']);
	}
?>