<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-3of3 d-7of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<div class="all-posts-wrapper">
								<?php $index = 0; ?>
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									<?php if ( $index === 0) : ?>
										<div class="post featured">
											<div class="image-wrapper">
												<?php the_post_thumbnail( 'full' ); ?> 
												<div class="post-meta">
													<h2><?php the_title(); ?></h2>
													<span class="date"><?php the_time('F jS, Y'); ?></span>
													<div class="grad"></div>
												</div>
											</div>
											<div class="blurb-wrapper">
												<?php $blurb = get_field( "blurb_text" ); ?>
												<p><?php echo $blurb; ?></p>
												<a href="<?php the_permalink(); ?>">Read Article</a>
											</div>
										</div>
									<?php else : ?>
										<div class="post not-featured">
											<div class="image-wrapper">
												<?php the_post_thumbnail( 'full' ); ?> 
											</div>
											<div class="post-meta">
												<h2><?php the_title(); ?></h2>
												<span class="date"><?php the_time('F jS, Y'); ?></span>
											</div>
											<div class="blurb-wrapper">
												<?php $blurb = get_field( "blurb_text" ); ?>
												<p><?php echo $blurb; ?></p>
												<a href="<?php the_permalink(); ?>">Read Article</a>
											</div>
										</div>
									<?php endif; ?>

									<?php $index++; ?>

								<?php endwhile; ?>


								<?php else : ?>

										<article id="post-not-found" class="hentry cf">
												<header class="article-header">
													<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
											</header>
												<section class="entry-content">
													<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
											</section>
											<footer class="article-footer">
													<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
											</footer>
										</article>

								<?php endif; ?>
							</div>
						</main>


				</div>

			</div>


<?php get_footer(); ?>
