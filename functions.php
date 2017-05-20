<?php

function bpkbr_styles() {
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css' );
}
add_action( 'wp_enqueue_scripts', 'bpkbr_styles' );

function bpkbr_scripts(){
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', null, null, true );
    wp_enqueue_script('jquery');

    wp_register_script('ScrollToPlugin','https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/plugins/ScrollToPlugin.min.js');
    wp_enqueue_script('ScrollToPlugin');

    wp_register_script( 'modernizr.custom', get_template_directory_uri() . '/js/modernizr.custom.js' );
    wp_enqueue_script( 'modernizr.custom' );

    wp_register_script( 'instafeed.min', get_template_directory_uri() . '/js/instafeed.min.js' );
    wp_enqueue_script( 'instafeed.min' );

    wp_register_script( 'owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js' );
    wp_enqueue_script( 'owl.carousel.min' );

    wp_register_script( 'classie', get_template_directory_uri() . '/js/classie.js' );
    wp_enqueue_script( 'classie' );

    wp_register_script( 'loadr', get_template_directory_uri() . '/js/loadr.js' );
    wp_enqueue_script( 'loadr' );

    wp_register_script( 'scroll', get_template_directory_uri() . '/js/scroll.js' );
    wp_enqueue_script( 'scroll' );
}
add_action( 'wp_enqueue_scripts', 'bpkbr_scripts' );

function bpkrb_posts_count() {
    global $wp_query;
    return $wp_query->post_count;
}


function most_viewed(){
  $query = new WP_Query( array(
    'meta_key' => 'post_views_count',
    'orderby' => 'meta_value_num',
    'posts_per_page' => 4
  ) );

  echo "<p>".sizeof($query)."</p>";

}

function list_np(){

  $cnt = 0;
  $the_query = new WP_Query( 'posts_per_page=5' );
  if(!have_posts()){
    echo "<p> No Post Created</p>";
  }else{
    while ($the_query -> have_posts()) : $the_query -> the_post();
      switch($cnt){
        case 0:
          echo '<div class="row" style="width:100%; margin:0 0 25px 0;">'.
                '<div class="col-sm-6" style="padding:0 0 0 10px; height:400px;  border-radius:5px;">'.
                  '<div style="position: relative; border-radius:5px; height:100%; width:100%;'.thmbURL("240px").'">'.
                    '<div class="bg ovly" style="border-radius:5px;"></div>'.
                    '<div class="stf"><h1>'.get_the_title().'</h1>'.
                      '<a href="'.get_permalink().'"><span class="fa fa-heart-o"></span>Read More<span class="fa fa-heart-o"></span></a></div>'.
                  '</div>'.
                '</div>';
          break;
        case 1:
          echo    '<div class="col-sm-6" style="padding:0 0 0 10px; height:400px;  border-radius:5px;">'.
                    '<div style="position: relative; border-radius:5px; height:100%; width:100%;'.thmbURL("240px").'">'.
                      '<div class="bg ovly" style="border-radius:5px;"></div>'.
                      '<div class="stf"><h1>'.get_the_title().'</h1>'.
                        '<a href="'.get_permalink().'"><span class="fa fa-heart-o"></span>Read More<span class="fa fa-heart-o"></span></a></div>'.
                    '</div>'.
                  '</div>'.
                '</div>';
          break;
        case 2:
          echo  '<div class="row" style="width:100%; margin:0 0 25px 0;">'.
                  '<div class="col-sm-12" style="padding:0 0 0 10px; height:400px;  border-radius:5px;">'.
                        '<div style="position: relative; border-radius:5px; height:100%; width:100%;'.thmbURL("350px").'">'.
                          '<div class="bg ovly" style="border-radius:5px;"></div>'.
                          '<div class="stf"><h1>'.get_the_title().'</h1>'.
                            '<a href="'.get_permalink().'"><span class="fa fa-heart-o"></span>Read More<span class="fa fa-heart-o"></span></a></div>'.
                        '</div>'.
                      '</div>'.
                    '</div>';
          break;
        case 3:
          echo '<div class="row" style="width:100%; margin:0 0 25px 0;">'.
                  '<div class="col-sm-6" style="padding:0 0 0 10px; height:400px;  border-radius:5px;">'.
                    '<div style="position: relative; border-radius:5px; height:100%; width:100%;'.thmbURL("240px").'">'.
                      '<div class="bg ovly" style="border-radius:5px;"></div>'.
                      '<div class="stf"><h1>'.get_the_title().'</h1>'.
                        '<a href="'.get_permalink().'"><span class="fa fa-heart-o"></span>Read More<span class="fa fa-heart-o"></span></a></div>'.
                  '</div>'.
                '</div>';
          break;
        case 4:
          echo  '<div class="col-sm-6" style="padding:0 0 0 10px; height:400px;  border-radius:5px;">'.
                  '<div style="position: relative; border-radius:5px; height:100%; width:100%;'.thmbURL("240px").'">'.
                    '<div class="bg ovly" style="border-radius:5px;"></div>'.
                    '<div class="stf"><h1>'.get_the_title().'</h1>'.
                      '<a href="'.get_permalink().'"><span class="fa fa-heart-o"></span>Read More<span class="fa fa-heart-o"></span></a></div>'.
                  '</div>'.
                '</div>'.
              '</div>';
          break;
      };
    $cnt++;
    endwhile; wp_reset_postdata();
    if($cnt == 1 || $cnt == 4){
      echo "</div>";
    }
  }
}

function list_tags() {
  $tags = get_tags();
  if(!sizeof($tags)){
    echo "<div class='row ntBG' style='width:100%; height:190px; margin:0 0 25px 0;'> </div>";
  }else{
    echo "<ul>";
    foreach ( (array) $tags as $tag ) {
      echo '<li><a href="' . get_tag_link ($tag->term_id) . '" rel="tag">' . $tag->name . '</a></li>';
    }
    echo "</ul>";
  }
}

function list_grs() {
  $category_id = get_cat_ID('Uncategorized');
  $the_query = new WP_Query( 'cat=' .$category_id. '&posts_per_page=4' );
  if(!have_posts()){
    echo "<p> No Post Created</p>";
  }else{
    echo "<ul>";
    while ($the_query -> have_posts()) : $the_query -> the_post();
      if ( in_category($category_id) ) {

        if(has_post_thumbnail()) {
            $sImgString = '<a href="' . get_permalink() . '">' .
                                '<img src="' . get_the_post_thumbnail_url() . '" alt="Thumbnail Image" style="border-radius:5px; width:100%; height:90px;" />' .
                            '</a>';
        }
        else{
          $sImgString = '<a href="' . get_permalink() . '">' .
                  '<img src="' .get_template_directory_uri().'/img/ni.svg" alt="Thumbnail Image" style="border-radius:5px; width:100%; height:90px;" />'.
                '</a>';
        }
        echo "<li style='margin-bottom:10px; overflow:auto; border-bottom: 1px solid #E1E1E1; padding-bottom:10px;'><div class='col-sm-4' style='overflow:hidden; padding:0 10px 0 0;'>".$sImgString;
        echo "</div><div class='col-sm-8' style='overflow:hidden; padding:0;'> <a href='" . get_permalink() . "' class='title' style='font-size:12pt; height:60px;'>".get_the_title()."</a></br>";
        echo "<p class='name' style='font-size:11pt'>".get_the_time('M')." ".get_the_time('j')." , ".get_the_time('Y')."</p></div></li>";

      }else{
        echo "<div class='row npBG' style='width:100%; height:520px; margin:0 0 25px 0;'> </div>";
        break;
      }
    endwhile; wp_reset_postdata();
    echo "</ul>";
  }
}

function bpkrb_cats() {
  $categories = get_categories();
  echo "<ul>";
  foreach( (array) $categories as $category) {
     echo '<a href="' . get_category_link($category->term_id) . '"><li>' . $category->name . '</li></a>';
   }
   echo "</ul>";
}

function show_lgr() {
  $categories = get_categories('exclude=1&title_li=');

  foreach ($categories as $cat) {
      //if($cat->cat_name == "Good Reads"){
        echo "<p> This ".get_the_title($cat->term_id)."</p>";
        echo "<h2>".$cat->cat_name."</h2>
              <p>".$cat->term_id." (".$cat->category_count.")</p>";
          //  }
  }
}

function shw_lgr($req){
  $category_id = get_cat_ID('Good Reads');
  $the_query = new WP_Query( 'cat=' .$category_id. '&posts_per_page=1' );
  while ($the_query -> have_posts()) : $the_query -> the_post();
    switch($req){
      case 'title':
        return the_title();
        break;
      case 'img':
        $arrImages =& get_children('post_type=attachment&post_mime_type=image&post_parent=' . $post->ID );
        if($arrImages) {
            $arrKeys = array_keys($arrImages);
            $iNum = $arrKeys[0];
            echo "background:url(".wp_get_attachment_thumb_url($iNum).") no-repeat; background-size: cover; background-position: center;";
        }
        break;
      case 'AnD':
        echo "<p class='name'>".the_author_name()."<span class='fa fa-star'></span><span>".the_time('M')."</span><span>";
        echo the_time('j')."</span><span>,".the_time('Y')."</span></p>";
       break;
      }


  endwhile; wp_reset_postdata();
}

function thmbURL($s) {
    if(has_post_thumbnail()) {
        return "background:url(".get_the_post_thumbnail_url().") no-repeat; background-size: cover; background-position: center;";
    }else{
        return "background:url('".get_template_directory_uri()."/img/ni.svg') no-repeat; background-size: ".$s."; background-position:center center ;";
    }
}


function jarf($p){
  switch ($p) {
    case 'BB':
      # code...
      break;
    case 'FF':
      return "background:url('".get_template_directory_uri()."/img/ffBG.jpg') no-repeat; background-size: cover; background-position:center center;";
      break;
    case 'KC':
      # code...
      break;
    default:
      return "background:url('".get_template_directory_uri()."/img/stBG_st.jpg') no-repeat; background-size: cover; background-position:center center;";
      break;
  }

}

function imgURL($id, $s) {
    $arrImages =& get_children('post_type=attachment&post_mime_type=image&post_parent=' . $id );
    if($arrImages) {
        $arrKeys = array_keys($arrImages);
        $iNum = $arrKeys[0];
        echo "<script> console.log('test ".$id." ".has_post_thumbnail()."');</script>";
        $sThumbUrl = wp_get_attachment_thumb_url($iNum);
        return "background:url(".$sThumbUrl.") no-repeat; background-size: cover; background-position: center;".$id;
    }else{
        return "background:url('".get_template_directory_uri()."/img/ni.svg') no-repeat; background-size: ".$s."; background-position:center center ;";
    }
}

function post_setup(){
	switch (get_the_category($post->ID)[0]->name) {
		case 'Budget Babe':
			echo '<div class="wrap" style="position:relative;">';
			break;
		case 'Fashion Finds':
			echo '<div class="col-sm-5" style="margin:0; padding:0; height:100vh;'.jarf('FF').'">'.
            '<header class="page-header" style="margin:0; height: 100%; width:100%;">'.
              '<div style="position:absolute; top:0; left:0; width:100%; height:100%; background-color:rgba(0,0,0,0.2);"></div>'.
            '</header>'.
           '</div><div class="col-sm-7" style="background-color:#444;height:100vh;">';
      return false;
      break;
		case 'Killer Curlz':
			echo '<div style="position:relative;">';
			break;
		default:
			echo  '<header class="page-header" style="margin:0; height: 100vh; width:100%;'.jarf('').'">'.
              '<div style="position:relative; width:100%; height:156px; background-color:rgba(0,0,0,0.6);">'.
                '<img class="logo" src="'.get_template_directory_uri().'/img/BPKRB_logo_white.png" />'.
                '<nav><ul>'.
                    '<li><a href="/BPKRB/wordpress/"><i class="fa fa-home" style="margin-right:2.5px;"></i>Home</a></li>'.
                    '<li><a href="/Blog">Storytime</a></li>'.
                    '<li><a href="#">Budget Babe</a>'.
                      '<ul class="dd">'.
                        '<a href="#"><li>Makeup</li></a>'.
                        '<a href="#"><li>Clothes</li></a>'.
                        '<a href="#"><li>Shoes</li></a>'.
                        '<a href="#"><li>Accessories</li></a>'.
                      '</ul></li>'.
                    '<li><a href="#">Fashion Finds</a>'.
                      '<ul class="dd">'.
                        '<a href="#"><li>Clothes</li></a>'.
                        '<a href="#"><li>Shoes</li></a>'.
                        '<a href="#"><li>Accessories</li></a>'.
                      '</ul></li>'.
                    '<li><a href="#">Killer Curls</a>'.
                      '<ul class="dd">'.
                        '<a href="#"><li>Sexy Curls</li></a>'.
                        '<a href="#"><li>Sexier Curls</li></a>'.
                        '<a href="#"> <li>Sexiest Curls</li></a>'.
                      '</ul></li>'.
                    '<li><a href="/Blog">Archives</a></li>'.
                    '<li><a href="#">Contact</a></li>'.
                  '</ul></nav>'.
              '</div><button class="icon-scroll" style="bottom: 15%;"/>'.
            '</header>';

      return true;
			break;
  	}
}


function thumb_images($id , $h, $w ,$s) {

    $iPostID = $id;
    $arrImages =& get_children('post_type=attachment&post_mime_type=image&post_parent=' . $iPostID );
    if($arrImages) {
        $arrKeys = array_keys($arrImages);
        $iNum = $arrKeys[0];
        $sThumbUrl = wp_get_attachment_thumb_url($iNum);
        $sImgString = '<a href="' . get_permalink() . '">' .
                            '<img src="' . $sThumbUrl . '" width="'.$w.'" height="'.$h.'" alt="Thumbnail Image" style="'.$s.'" />' .
                        '</a>';
        echo $sImgString;
    }
}


function bdw_get_images() {

    $iPostID = $post->ID;

    $arrImages =& get_children('post_type=attachment&post_mime_type=image&post_parent=' . $iPostID );

    if($arrImages) {
        $arrKeys = array_keys($arrImages);

        $iNum = $arrKeys[0];

        $sThumbUrl = wp_get_attachment_thumb_url($iNum);

        $sImgString = '<a href="' . get_permalink() . '">' .
                            '<img src="' . $sThumbUrl . '" width="150" height="150" alt="Thumbnail Image" title="Thumbnail Image" />' .
                        '</a>';
        echo $sImgString;
    }
}

add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array(
  'aside',
  'image',
  'video',
  'quote',
  'link',
  'gallery',
  'audio',
) );
