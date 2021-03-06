<?php get_header(); ?>

<!-- /slider -->

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

			
				<div id="slides"><!--comment-->
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

							$args = array(
								'post_type' => 'attachment',
								'numberposts' => 1,
								'orderby'=> 'menu_order',
								'order' => 'ASC',
								'post_mime_type' => 'image',
								'post_status' => null,
								'post_parent' => $post->ID
							);

							$attachments = get_posts( $args );
							if ( $attachments ) {
								foreach ( $attachments as $attachment ) {
									echo wp_get_attachment_image($attachment->ID , 'full' );
								}
							}
						endwhile; endif; ?>
				</div>
			
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