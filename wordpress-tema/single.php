<?php
get_header();
 if(have_posts()){
    the_post();

   if(has_post_thumbnail()){
  		the_post_thumbnail();
  	}

  	echo "<h1>";
    the_title().'<br>';
    echo "</h1>";
    the_content();
    echo "<strong>autor</strong> ";
    the_author();
    echo "<strongPostado </strong> ";
    the_date();
}
get_footer();
