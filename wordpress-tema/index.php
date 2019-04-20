<?php
get_header();



/* if(have_posts()){
  echo "<div class=\"grid-4\">";
  while(have_posts()) {
  	echo "<div>";
  	the_post();
  	if(has_post_thumbnail()){
  		the_post_thumbnail();
  	}
  	echo "<h1>";
    the_title().'<br>';
    echo "</h1>";
    $conteudo = get_the_content();
    $conteudo = strip_tags($conteudo);
    $conteudo = trim($conteudo);
    $conteudo = substr($conteudo, 0,75);
    echo $conteudo;
    echo "<br><a href=\"".get_permalink()."\">Leia mais</a>";
    echo "</div>";
  }
  echo "</div>";
}
*/
get_footer();
