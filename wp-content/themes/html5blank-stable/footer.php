			<!-- footer -->
                <footer class="footer-agile-info">
                    <div class="container">
                        <div class="col-md-4 w3layouts-footer">
                            <h3>Contact Information</h3>
                            <p><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>22 Russell Street, Victoria ,Melbourne AUSTRALIA </p>
                            <p><span><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">E: info [at] domain.com</a> </p>
                            <p><span><i class="fa fa-mobile" aria-hidden="true"></i></span>P: +254 2564584 / +542 8245658 </p>
                            <p><span><i class="fa fa-globe" aria-hidden="true"></i></span><a href="#">W: www.w3layouts.com</a></p>
                        </div>
                        <div class="col-md-4 wthree-footer">
                            <h2>Fashion Blog</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis aute .</p>
                        </div>
                        <div class="col-md-4 w3-agile">
                            <h3>Newsletter</h3>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <form action="#" method="post">
                                <input type="email" name="Email" placeholder="Email" required="">
                                <input type="submit" value="Send">
                            </form>
                        </div>
                    </div>

            </footer>

            <!-- copyright -->
                <div class="copyright">
                    <div class="container">
                        <div class="w3agile-list">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="lifestyle.html">Life Style</a></li>
                                <li><a href="photography.html">Photography</a></li>
                                <li><a href="fashion.html">Fashion</a></li>
                                <li><a href="icons.html">Codes</a></li>
                                <li><a href="features.html">Features</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <div class="agileinfo">
                            <p class="copyright">
                                &copy; <?php echo date('Y'); ?> Fashion Blog. All Rights Reserved. Design by <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
                                <a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
                            </p>
                            <
                        </div>
                    </div>
                </div>

				<!-- /copyright -->

			<!-- /footer -->
            <script>
            jQuery(document).ready(function() {
            /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
            */

            $().UItoTop({ easingType: 'easeOutQuart' });

            });
            </script>

		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>


