<?php require_once "inc/blog-posts.php";
require_once "inc/header.php"; ?>

<section class="blog-list">

	<?php

		$first = true;
		$nth_even = false;
		foreach($blog_posts as $url_name => $post){

			echo '<section class="section '.($first ? "header-push" : "").' '.($nth_even ? " accent-bg" : "").'">
						<div class="container">

							<aside class="icon column half"><span class="ss-icon ss-standard">'.$post["icon-code"].'</span></aside>

							<div class="content column half">
								<a href="/blog/'.$url_name.'"><h3>'.$post["title"].'</h3>
								<h4 class="h5 accent-alt">'.$post["subline"].'</h4></a>

								<p>'.$post["intro"].'</p>

								<a class="btn '.($nth_even ? " alt" : "").'" href="/blog/'.$url_name.'">Read article</a>
							</div>

						</div>
				  </section>';

			$first = false;
			$nth_even = $nth_even ? false : true;

		}

	?>

</section>

<?php require_once "inc/footer.php"; ?>