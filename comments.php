<!-- Responsible for comments section -->

<div class="comments-wrapper">
    <div class="comments" id="comments">


        <div class="comments-header">

            <h2 class="comment-reply-title">
                <?php 
                    if(! have_comments()) {
                        echo "Leave a comment";;
                    } else {
                        echo get_comments_number()." Comments";
                    }
                ?>
            </h2><!-- .comments-title -->

        </div><!-- .comments-header -->

        <div class="comments-inner">

            <?php
                // lists the comments
                // here you can include a custom walker to add more styles
                wp_list_comments(
                    array(
                        'avatar_size' => 120,
                        'style' => 'div'
                    )
                );
            ?>

        </div><!-- .comments-inner -->

    </div><!-- comments -->

    <hr class="" aria-hidden="true">
    
    <?php
        // displays the comment form
        if(comments_open()) {
            comment_form(
                array(
                    'class_form' => '',
                    'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
                    'title_reply_after' => '</h2>'
                )
            );
        }
    ?>

</div>