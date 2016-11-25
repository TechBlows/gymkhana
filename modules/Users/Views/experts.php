<div id="fh5co-trainer">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2  id="about">Fitness Expert</h2>
					<p>The last thing you want to do is take fitness advice from someone who doesn’t know what they’re talking about. It’s one thing to make a poor device purchase – you only lose out on money if you do that. On the other hand, bad fitness advice can have a serious and lasting impact on your body.</p>
				</div>
			</div>
			<div class="row">
				
				<?php $i=0;foreach($explist as $row) { ?>

				<div class="col-md-4 col-sm-4 animate-box">
					<div class="trainer">
						<a href="#"><img class="img-responsive" src="upload/<?php echo $row['expert_photo'];?>"/></a>
						<div class="title">
							<h3><?php echo $row['expert_name']; ?></h3>
							<span><?php echo $row['expertise']; ?></span>
						</div>
						<div class="desc text-center">
							<ul class="fh5co-social-icons">
								<li><a href="https://twitter.com"><i class="icon-twitter"></i></a></li>
								<li><a href="https://facebook.com"><i class="icon-facebook"></i></a></li>
								<li><a href="https://instagram.com"><i class="icon-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<?php $i++;}?>

			</div>
		</div>
	</div>