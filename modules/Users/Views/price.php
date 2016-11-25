<style type="text/css">
	#prichead{
		background-color: green;
		color:white;
		height:2px;
		width:10px;
		border:1px solid green;
	}
</style>
<div id="fh5co-pricing">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2 id="price">Pricing Plan</h2>
					<p>Reach your fitness goals with a 24 Hour on Gymkhana with gym membership. Gym Price types with appropitate goals creates faster and customized workout program and movement strategy just for you.</p>
				</div>
			</div>
			<div class="row">
			
				<?php $i=0;foreach($pricelist as $row) { ?>
					<div class="col-md-3 animate-box">
						<div class="pricing">
							<div class="price-box">
								<h2 class="pricing-plan" ><?php echo $row['price_types']; ?></h2>
								<div class="price"><?php echo $row['price']; ?><small>/month</small></div><div id="pricehead"/>_________</div>
								<ul class="classes">
									<?php $j=0; foreach($classlist as $row){?>
									<li><?php echo $row['class_no']; ?> <?php echo $row['class_types']; ?></li>
									<?php $j++;}?>
								</ul>
								<a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
							</div>
						</div>
					</div>
				<?php $i++;}?>
			</div>
		</div>
	</div>