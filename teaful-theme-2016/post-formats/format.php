
            
              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

          

                <section class="entry-content cf" itemprop="articleBody">
                  <?php
                    // the content (pretty self explanatory huh)
                    the_content();

                  ?>
                    <footer class="article-footer">

                      <span class="cta">SHARE THIS ON</span>
                      <span class='st_facebook_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
                      <span class='st_fblike_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
                      <span class='st_twitter_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
                      <span class='st_plusone_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
                      <span class='st_pinterest_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>


                  </footer> <?php // end article footer ?>
                </section> <?php // end article section ?>

                

                <?php //comments_template(); ?>

              </article> <?php // end article ?>
