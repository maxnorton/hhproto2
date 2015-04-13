<?php
   $recentposts = get_posts('numberposts=12&');
   foreach ($recentposts as $post) :
       setup_postdata($post); ?>
       <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
