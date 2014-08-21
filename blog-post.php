<?php require_once "inc/blog-posts.php";

$title = strip_tags($_GET['title']);

if( empty($blog_posts[$title]) ){
	header("Location: /404");
}

$details = $blog_posts[$title];

require_once "inc/header.php"; ?>

<section class="blog-post section header-push">
	<div class="container">

		<header>
			<div class="icon"><span class="ss-icon ss-standard"><?php echo $details['icon-code']; ?></span></div>

			<h3><?php echo $details['title']; ?></h3>
			<h4 class="h5 accent-alt"><?php echo $details['subline']; ?></h4>
		</header>

		<?php echo $details['content']; ?>

		<footer>

		<?php
			$keys = array_keys($blog_posts);
			$position = array_search($title, $keys);
			if( isset($keys[$position + 1]) ) {

			    $next_post_key = $keys[$position + 1];
			    $next_details = $blog_posts[ $next_post_key ];

			} else {

				$next_post_key = $keys[0];
			    $next_details = $blog_posts[ $next_post_key ];

			}

			echo '<a href="/blog/'.$next_post_key.'"><h6>Next Article</h6>
				  <h4>'.$next_details['title'].'</h4>
				  <h5 class="h6 accent-alt">'.$next_details['subline'].'</h5></a>
				  <p>'.$next_details['intro'].'</p>
				  <a href="/blog/'.$next_post_key.'">Continue reading</a>';
		?>

		</footer>

	</div>
</section>

<?php require_once "inc/footer.php"; ?>