<?php get_header(); ?>

<section class="hero">
            <div class="fullwidthbanner">
                <ul> 
                    
					<li data-transition="fade">
                        <img src="img/temp/slide-tsa.jpg" alt="">
                        <div class="caption lft transparent red nt"  data-x="20" data-y="100" data-speed="400" data-start="200" data-easing="easeOutExpo">TSA</div>
                        <div class="caption lft transparent red nt small_text"  data-x="20" data-y="156" data-speed="600" data-start="200" data-easing="easeOutExpo"><strong style="font-size:20px;">We have a highly active TSA Chapter. <br />Although we are very new,
						we have<br /> placed repeatedly at the state level,<br /> and are competing at the national<br /> level this year.</strong></div>

                        <div class="caption sfl" data-x="450" data-y="40" data-speed="500" data-start="800" data-easing="easeOutExpo"><img src="img/temp/tsa-logo.png"></div>

                    </li>
					<li data-transition="fade">
                        <img src="img/temp/slide-discovery.jpg" alt="">
                        <div class="caption lft transparent"  data-x="40" data-y="150" data-speed="400" data-start="400" data-easing="easeOutExpo">Atkins Academic and Technology High School</div>
                        <div class="caption lft transparent"  data-x="40" data-y="205" data-speed="400" data-start="200" data-easing="easeOutExpo">A School of Discovery</div>
                    </li>
                    <!--<li data-transition="fade">
                        <img src="img/orange.jpg" alt="">

                        <div class="caption lft big_white"  data-x="400" data-y="100" data-speed="400" data-start="200" data-easing="easeOutExpo">STEM Classes</div>

                        <div class="caption lfr small_text"  data-x="400" data-y="220" data-speed="300" data-start="800" data-easing="easeOutExpo">Computer Technology</div>
                        <div class="caption lfr small_text"  data-x="400" data-y="250" data-speed="300" data-start="1000" data-easing="easeOutExpo">Biotechnology</div>
                        <div class="caption lfr small_text"  data-x="400" data-y="280" data-speed="300" data-start="1200" data-easing="easeOutExpo">Pre-engineering</div>
                    </li>
                    <li data-transition="fade">
                        <img src="img/purple.jpg" alt="">
                        <div class="caption lfb" data-x="30" data-y="80">
                            <img src="img/temp/colors.png" alt="">
                        </div>
                        <div class="caption lft large_text"  data-x="260" data-y="30" data-speed="400" data-start="400" data-easing="easeOutExpo">Seven different styles.</div>
                    </li>-->
                    
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </section><!-- /slider -->

        <!-- Content area ================= -->
        <div id="main" role="main">

            <!-- Call to action ================= -->
            <section class="call-to-action">
                <div class="container">
                    <div class="row">

                        <div class="widget call-to-action">
                            <div class="span12" style="text-align: center;">
                                <p style="font-family: 'Helvetica Neue', helvetica, arial, sans-serif !important;">SITE TITLE GOES HERE</p>
                            </div>
                        </div><!-- /call-to-action -->

                    </div>
                </div><!-- /container -->
            </section><!-- /call-to-action -->


            <!-- Features area ================= -->
            <!--<section class="features">

                <div class="container">
                    <div class="row">

                        <div class="span4 widget feature">
                            
                            <i class="icon-feature icon-beaker"></i>

                            <h3>WIDGET AREA 1</h3>

                            <p>We have many STEM classes at our school. These cover fields such as Computer Technology, Biotechnology, and Pre-engineering.</p>

                        </div>
                        <div class="span4 widget feature">
                            
                            <i class="icon-feature icon-trophy"></i>

                            <h3>TSA Chapter</h3>

                            <p>We have a very active TSA Chapter which has placed at the State Level, and is competing at the National Level this year.</p>

                        </div>
                        <div class="span4 widget feature">
                            
                            <i class="icon-feature icon-book"></i>

                            <h3>Design Brief</h3>

                            <p>A brief history of News Media in the Digital Age.</p>

                        </div>

                    </div>
                </div>

            </section>-->

			<style>
				section.posts {
					padding-top: 20px;
				}
				
				section.posts div.container div.row div.page h2 {
					font-family: 'Helvetica Neue', helvetica, arial, sans-serif;
				}
				
				section.posts div.container div.row div.page p {
					font-size: 15px;
					font-weight: 300;
					line-height: 1.7;
					margin-bottom: 28px;
				}
			</style>
			
			<section class="posts">
				<div class="container">
					<div class="row">
						<div class="span12 page">
							
							<?php if ( have_posts() ) : ?>
								<?php while ( have_posts() ) : the_post(); ?>
									<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										<div class="post-header">
											<div class="date"><?php the_time( 'M j y' ); ?></div>
											<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
											<div class="author"><?php the_author(); ?></div>
										</div><!--end post header-->
									<div class="entry clear">
										<?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
										<?php the_content(); ?>
										<?php edit_post_link(); ?>
										<?php wp_link_pages(); ?>
									</div><!--end entry-->
								</div><!--end post-->
							<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
								<div class="navigation index">
									<div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
									<div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
								</div><!--end navigation-->
							<?php else : ?>
							<?php endif; ?>
							
						</div>
					</div>
				</div>
			</section>


            
        </div><!-- /main -->
		
<?php get_footer(); ?>