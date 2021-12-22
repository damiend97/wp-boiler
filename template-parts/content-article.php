<!-- Article Page -->
<?php the_date()?>
<?php the_tags("<span class='tag'><i class='fa fa-tag'></i>","</span><span class='tag'><i class='fa fa-tag'></i>","</span>")?>
<?php comments_number(); ?>

<?php the_content(); ?>
<?php // comments_template(); ?>
</div>