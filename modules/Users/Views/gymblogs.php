<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row">

				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2 id="blog">Recent Blog</h2>
					<p>Here, you'll discover what's new in the fitness world, including the latest views on nutrition and sports supplements as well as little known tips and secrets that will help fast track your success. Gymkhana’ve created blogs based on the most common questions we get asked in club.</p>
				</div>
			</div>

			
			<div class="row row-bottom-padded-md">
				<?php $i=0;foreach($bloglist as $row) { ?>
					<div class="col-lg-4 col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" alt="img" src="upload/<?php echo $row['blog_photo'];?>" /></a>
							<div class="blog-text">
								<h3><a href=""#><?php echo $row['blog_title']; ?></a></h3>
								<span class="posted_on"><?php echo $row['blog_date']; ?></span>
								<span class="comment"><a href=""><?php echo $row['blog_comment']; ?><i class="icon-speech-bubble"></i></a></span>
								<p><?php echo $row['blog_desc']; ?></p>
								<a href="#" class="btn btn-primary">Read More</a>
							</div> 
						</div>
					</div>
				<?php $i++;}?>
			</div>

		</div>
	</div>