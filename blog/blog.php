<?php 
/* Short and sweet */
define('WP_USE_THEMES', false);
require('./wp-blog-header.php');
?>


<?php
require('/the/path/to/your/wp-blog-header.php');
?>

<!DOCTYPE HTML>


<html>

<head>
	
<meta charset="UTF-8">
	
<title>Eugenia Lee | ethnographer-adventurer</title>
	
<link rel="stylesheet" href="http://www.eugenialee.net/css/style.css" type="text/css">




</head>

<body>
	
<div id="page">
		
<div id="header">
			
		
<ul id="navigation">
				
<li>
					
<a href="http://www.eugenialee.net/index.html">Home</a>
				
</li>
				
<li class="selected">
					
<a href="http://www.eugenialee.net/about.html">About</a>
				
</li>
				
<li>
					
<a href="http://www.eugenialee.net/blog">Blog</a>
				
</li>

<li>
<a href="http://www.eugenialee.net/research.html">Research</a>
</li>
<li>
<a href="http://www.eugenialee.net/work.html">Work</a>	
</li>			
<li>
					
<a href="http://www.eugenialee.net/projects.html">Projects</a>
				
</li>
			
</ul>
		
</div>
		
<!-- /#header -->
		
<div id="contents">
			

				
<img src="http://www.eugenialee.net/images/header.jpg">
				
	
</div>
			
<!-- /#adbox -->
			
<h1>About Me</h1>
			
<div class="section">
				
<p class="column2">
					

// Get the last 3 posts.

<?php
global $post;
$args = array( 'posts_per_page' => 3 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a><br />
<?php endforeach; ?>



</div>
			
	
</div>
		
<!-- /#contents -->
		
<div id="footer">
			

				

<p class="footnote">
					
© Copyright 2013. Eugenia Lee all rights reserved
				
</p>
			
</div>
		
</div>
		
<!-- /#footer -->
	
</div>
	
<!-- /#page -->

</body>

</html>