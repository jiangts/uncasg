<?php get_header(); ?>
<!-- Content area ================= -->
        <div id="main" role="main" class="page">


            <!-- Header area ================== -->
            <section class="header">

                <div class="container">
                    <div class="row">

                        <div class="span12">
                            <h1 class="page-title"><?php echo get_the_title(); ?> </h1>

                            <!--<p class="excerpt">
                                PLTW Pre-engineering
                            </p>-->
                        </div>

                    </div>
                </div><!-- /container -->

            </section><!-- /header -->

            <!-- Content area ================== -->
            <section class="content">

                <div class="container">
                    <div class="row">

                        <!-- Content ================== -->
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
								
								
                        </div><!-- /page -->

                    </div>
                </div><!-- /container -->

            </section><!-- /header -->
            
        </div><!-- /main -->
		<?php get_footer(); ?>