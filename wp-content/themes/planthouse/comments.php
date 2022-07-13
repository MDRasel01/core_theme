<div class="comments-area">
                    <?php  
                         if(have_comments()){
                             echo '<h4>'.get_comments_number().'comments</h4>';
                         }else{
                             echo'there have no comments';
                         }
                    ?> 
                        
                        <div class="comment-list">
                            <!-- <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c1.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Emilly Blunt</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                        <a href="" class="btn-reply text-uppercase">reply</a> 
                                </div>
                            </div> -->

                            <?php
                               
                               wp_list_comments();
                            
                            ?>
                        </div>
                        
                    </div>
                    <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <?php
                            if(comments_open()){
                                comment_form(
                                    array(
                                        'class_form'  => '',
                                        'title_reply_before'  => '<h3 id="reply-title" class="comment-reply-title">',
                                        'title_reply_after'  => '<h3 id="reply-title" class="comment-reply-title">',
                                    )
                                    );
                            }
                        ?>
                    </div>