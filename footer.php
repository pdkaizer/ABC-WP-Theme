<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage ABC
 * @since ABC 1.0
 */
?>

	</div>
	
</div>

  <footer class="clearfix">
		Contents copyrighted 2012 National Museum of Women in the Arts
  </footer>
</div> <!--! end of #container -->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery-1.6.2.min.js"><\/script>')</script>


<!-- scripts concatenated and minified via ant build script-->
<script defer src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
<script defer src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
<!-- end scripts-->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20660360-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>