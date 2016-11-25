<div id="fh5co-gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2 id ="gallery">Gym gallery</h2>
					<p>Motivational Image gallery containing photos that have to do with bodybuilding, CrossFit, training, Yoga, weightlifting and extremely fit and sexy guys and girls. These are meant to be fun and motivational images that keep you working out. I take no credit for the content of these pictures. Feel free to pin, share, and save away.</p>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<ul id="fh5co-portfolio-list">
						<?php $i=0;foreach($gallist as $row) { ?>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(upload/<?php echo $row['gallery_photo']; ?>); ">
							<a href="upload/<?php echo $row['gallery_photo']; ?>">
								<div class="case-studies-summary">
									<span><?php echo $row['photo_title']; ?></span>
									<h2><?php echo $row['photo_desc']; ?></h2>
								</div>
							</a>
						</li>
						<?php }?>
					</ul>		
				</div>
			</div>
		</div>
	</div>