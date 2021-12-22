<!-- Archive Page -->

<br>
<img class="post-thumbnail" src="<?php the_post_thumbnail_url('thumbnail'); // first param = size ?>" alt="image">
<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
<?php the_date(); ?>
<?php comments_number(); ?>
<?php the_excerpt() ?>
<a class="more-link" href="<?php the_permalink() ?>">Read more &rarr;</a><br><br><hr>