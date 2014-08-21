<?php

	require_once "inc/header.php";

	$doc_page = isset($_GET['docs-page']) ? strip_tags($_GET['docs-page']) : '';
	$content_page = isset($_GET['content-page']) ? strip_tags($_GET['content-page']) : '';
	require_once "inc/doc-pages.php";

?>

	<section class="section header-push docs">
		<div class="container">

			<div class="ws-loader"></div>

			<a id="docs-nav-trigger" class="nav-trigger ss-icon ss-standard" href="#">rows</a>

			<nav class="column one-fourth hidden" id="docs-nav">

				<input id="docs-nav-search" type="search" placeholder="Search for a category, method etc..." /><span class="ss-icon ss-standard">search</span>

				<ul class="no-bullets" id="docs-nav-items">
					<?php
						foreach($doc_pages as $url_name => $details){
							echo '<a href="'.($url_name !== '' ? '/docs/'.$url_name : '/docs').'"><li'.($doc_page === $url_name ? ' class="active"' : '').'>'.$details['title'].'</li></a>';

							if(is_array($details['content'])){

								echo '<ul class="no-bullets">';
									foreach ($details['content'] as $content_url_name => $content_details) {
										echo '<a data-description="'.$content_details['subline'].' '.$content_details['description'].'" href="/docs/'.$url_name.'/'.$content_url_name.'"><li'.($content_page === $content_url_name ? ' class="active"' : '').'>'.$content_details['title'].'</li></a>';
									}
								echo '</ul>';

							}
						}
					?>
				</ul>
			</nav>

			<article class="column three-fourth">

				<?php
				if(isset($doc_pages[$doc_page]['content'])){
					if(is_array($doc_pages[$doc_page]['content'])){

						if($content_page !== ''){

							if( isset($doc_pages[$doc_page]['content'][$content_page]) ){

								$details = $doc_pages[$doc_page]['content'][$content_page];

								echo '<h2>'.$details['title'].'</h2>';
								echo '<h3 class="h4 accent-alt">'.$details['subline'].'</h3>';

								echo '<p>'.$details['description'].'</p>';
								echo '<pre><code class="language-javascript">'.$details['syntax'].'</code></pre>';

								echo '<article>';
									foreach ($details['parameter-explaination'] as $param => $param_details) {
										echo '<b>'.$param.'</b> - <small>'.$param_details['type'].($param_details['optional'] ? ' (Optional)' : '').'</small><br>';
										echo $param_details['description'];
									}
								echo '</article>';

								echo $details['additional'];

							}

						} else {

							echo $doc_pages[$doc_page]['index-content'];

						}

					} else {

						echo $doc_pages[$doc_page]['content'];

					}
				}?>

			</article>

		</div>
	</section>

<?php require_once "inc/footer.php"; ?>