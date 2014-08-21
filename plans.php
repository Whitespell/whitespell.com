<?php

	require_once "inc/header.php";

	$plans = array(
		'Free' => array(
			'featured' => false,
			'price' => 'Free',
			'features' => array(
								'<b>150 Intelligence Connections</b>/hour',
								'<b>1 Total Dynagram Emails</b>/day for all users',
								'<b>2 Visualizations</b>',
								'<b>2 Included Team Size</b>',
								'<b>500 Blox Calls</b> per hour (Library/HTTP)',
								'<b>No Marketplace Credit</b>'
							),
			'btn-text' => 'Sign up'
		),
		'Starter' => array(
			'featured' => true,
			'price' => '$5 per month',
			'features' => array(
								'<b>2500 Intelligence Connections</b>/hour (0.02/con if over)',
								'<b>12 Total Dynagram Emails</b>/day for all users ($1 per extra dynagram)',
								'<b>4 Visualizations</b>',
								'<b>8 Included Team Size</b>',
								'<b>10.000 Blox Calls</b> per hour (Library/HTTP) (0.01/call if over)',
								'<b>$5 Marketplace Credit</b> (USD)'
							),
			'btn-text' => 'Sign up'
		),
		'Advanced' => array(
			'featured' => false,
			'price' => '$40 per month',
			'features' => array(
								'<b>30.000 Intelligence Connections</b>/hour (0.002/con if over)',
								'<b>36 Total Dynagram Emails</b>/day for all users ($1 per extra dynagram)',
								'<b>16 Visualizations</b>',
								'<b>20 Included Team Size</b>',
								'<b>1.000.000 Blox Calls</b> per hour (Library/HTTP) (0.001/call if over)',
								'<b>$40 Marketplace Credit</b> (USD)'
							),
			'btn-text' => 'Sign up'
		),
		'Custom' => array(
			'featured' => false,
			'price' => 'Get even more',
			'features' => array(
								'<b>More Intelligence Connections</b>',
								'<b>More Dynagram Emails</b>',
								'<b>Unlimited Visualizations</b>',
								'<b>Unlimited Included Team Size</b>',
								'<b>More Blox Calls</b>',
								'<b>More Marketplace Credit</b>'
							),
			'btn-text' => 'Contact us'
		)
	);

?>

	<section class="section header-push">
		<div class="container">

			<h2>Our Plans</h2>
			<h3 class="h4 accent-alt">We got what you need</h3>

			<section class="pricing-tables">

				<?php foreach($plans as $name => $details): ?>

					<article<?php if($details['featured']){ echo ' class="featured"'; }?>>
						<div class="wrapper">
							<h3><?php echo $name; ?></h3>
						</div>

							<div class='price'><?php echo $details['price']; ?></div>

						<div class="wrapper">
							<ul class="no-bullets">
								<?php
									foreach($details['features'] as $feature){
										echo "<li>$feature</li>";
									}
								?>
							</ul>
						</div>

						<a href="#" class="btn<?php if($details['featured']){ echo ' alt'; }?>"><?php echo $details['btn-text']; ?></a>
					</article>

				<?php endforeach; ?>

			</section>

		</div>
	</section>

<?php require_once "inc/footer.php"; ?>