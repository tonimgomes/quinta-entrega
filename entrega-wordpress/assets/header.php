<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title><?php wp_title(); ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" type="text/css">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link href="https://fonts.googleapis.com/css2?family=Chewy&family=Josefin+Sans&family=Lobster+Two:ital@1&display=swap" rel="stylesheet">
  <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>

	<?php wp_head(); ?>

</head>

<body>

<header>

    <div class="navbar-fixed ">
            <nav class="white z-depth-5">            
                <div class="nav-wrapper">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/csgo-png-logo.png" id="logo" class="brand-logo center">

                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="#box-lists-filmes" class="black-text">Filmes</a></li>
                        <li><a href="#box-lists-series" class="black-text">Séries</a></li>
                    </ul>  

                    <a href="" class="sidenav-trigger" data-target="mobile-links"><i class="material-icons black-text">menu</i></a>

                </div>                

            </nav>    
        </div>

        <ul class="sidenav" id="mobile-links">
            <li><a href="#box-lists-filmes" class="black-text">Filmes</a></li>
            <li><a href="#box-lists-series" class="black-text">Séries</a></li>
            
        </ul>

    </header>


<div class="header">
	<div class="wrap">
		<h1><a id="titulo1" href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?>">Clube da Pipoca</a></h1>
		<div class="info">
      <?php
      $args = array('post_type'=>'page', 'pagename' => 'inicio');
      $my_page = get_posts( $args );
      ?>

      <?php
      if($my_page) : foreach( $my_page as $post ) : setup_postdata( $post );
      ?>
      
        <?php the_excerpt(); ?>

       <a href="<?php the_permalink(); ?>" class="custom-button">Leia mais</a>

      <?php 
      endforeach; endif;
      ?>
		
			
			
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
        })
    </script>



