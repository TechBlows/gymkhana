<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Happy Clients</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<?php $i=0;foreach($clientlist as $row) { ?>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="upload/<?php echo $row['client_photo']; ?>" alt="user">
									</figure>
									<span><?php echo $row['client_name']; ?>, via <a href="#" class="twitter"><?php echo $row['client_net']; ?></a></span>
									<blockquote>
										<p>&ldquo;<?php echo $row['client_message']; ?>&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
