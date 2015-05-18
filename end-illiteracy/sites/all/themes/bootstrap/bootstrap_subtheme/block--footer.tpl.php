<?php
/**
 * @file
 * theme implementation to display a region footer
 * variables:
 * - $content: The content for this region, typically blocks.
 * - $classes: String of classes that can be used to style contextually through CSS
 * - $region: The name of the region variable as defined in the theme's .info file.
 * - $classes_array: Array of html class attribute values. It is flattened into a string within the variable $classes.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 */
?>

<?php if ($content): ?>
  <div class="your_region_class">
	   <?php print t($content).'2015'; ?>

  </div><!-- /.region -->
<?php endif; 