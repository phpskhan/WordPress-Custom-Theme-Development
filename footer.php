		<footer class="custom-bg img-fluid">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="widget" style="text-decoration: none;">
							<h5 class="widgetheading"><?php dynamic_sidebar('footer-1');?></h5>
						</div>
					</div>

					<div class="col-lg-3">
						<div class="widget">
							<h5 class="widgetheading"><?php dynamic_sidebar('footer-2');?></h5>
						</div>
					</div>

					<div class="col-lg-3">
						<div class="widget">
							<h5 class="widgetheading"><?php dynamic_sidebar('footer-3');?></h5>
						</div>
					</div>

					<div class="col-lg-3">
						<div class="widget">
							<h5 class="widgetheading"><?php dynamic_sidebar('footer-4');?></h5>
						</div>
					</div>
				</div>
			</div>
			<div id="sub-footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="copyright">
								<p>
									<span><?php echo get_theme_mod('ksabih_cpw1_copyright_text');?></span>
									<br>
								</p>
							</div>
						</div>

						<div class="col-lg-6">
							<ul class="social-network">
								<li>
									<a href="<?php echo get_theme_mod('ksabih_cpw1_facebook');?>" data-placement="top" title="Facebook">
										<i class="fa fa-facebook"></i>
									</a>
								</li>

								<li>
									<a href="<?php echo get_theme_mod('ksabih_cpw1_instagram');?>" data-placement="top" title="Instagram">
										<i class="fa fa-instagram"></i>
									</a>
								</li>

								<li>
									<a href="<?php echo get_theme_mod('ksabih_cpw1_twitter');?>" data-placement="top" title="Twitter">
										<i class="fa fa-twitter"></i>
									</a>
								</li>

								<li>
									<a href="<?php echo get_theme_mod('ksabih_cpw1_linkedin');?>" data-placement="top" title="Linkedin">
										<i class="fa fa-linkedin"></i>
									</a>
								</li>

								<li>
									<a href="<?php echo get_theme_mod('ksabih_cpw1_pinterest');?>" data-placement="top" title="Pinterest">
										<i class="fa fa-pinterest"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<a href="#" class="scrollup">
			<i class="fa fa-angle-up active"></i>
		</a>
	<?php wp_footer();?>
	</body>
</html>