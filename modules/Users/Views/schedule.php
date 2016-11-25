<div id="fh5co-schedule" class="fh5co-bg" style="background-image: url(assets/images/img_bg_1.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2 id="schedule">Class Schedule</h2>
				</div>
			</div>

			<div class="row animate-box">
				
				<div class="fh5co-tabs">
					<ul class="fh5co-tab-nav">
						<li class="active"><a href="" data-tab="1"><span class="visible-xs">S</span><span class="hidden-xs">Sunday</span></a></li>
						<li><a href="#" data-tab="2"><span class="visible-xs">M</span><span class="hidden-xs">Monday</span></a></li>
						<li><a href="#" data-tab="3"><span class="visible-xs">T</span><span class="hidden-xs">Tuesday</span></a></li>
						<li><a href="#" data-tab="4"><span class="visible-xs">W</span><span class="hidden-xs">Wednesday</span></a></li>

						<li><a href="#" data-tab="5"><span class="visible-xs">Th</span><span class="hidden-xs">Thursday</span></a></li>
						<li><a href="#" data-tab="6"><span class="visible-xs">F</span><span class="hidden-xs">Friday</span></a></li>
						<li><a href="#" data-tab="7"><span class="visible-xs">S</span><span class="hidden-xs">Saturday</span></a></li>
					</ul>

					<!-- Tabs -->
					<!-- <span><img src="assets/images/exercise.svg" class="img-responsive" alt="img"></span> -->
						<div class="fh5co-tab-content tab-content active" data-tab-content="3">
							<ul class="class-schedule">
								<?php $i= 0; foreach($sclist as $row){?>
									<li class="text-center">
									<?php $day = $row['sc_day'];?>
									<?php switch($day){
										case "Sunday":
											echo $row['sc_timing'];
											echo '<br/>';
											echo $row['sc_class'];
											echo '<br/>';
											echo $row['sc_trainer'];
										break;
										case "Monday":
											echo $row['sc_timing'];
											echo '<br/>';
											echo $row['sc_class'];
											echo '<br/>';
											echo $row['sc_trainer'];
										break;
										case "Tuesday":
											echo $row['sc_timing'];
											echo '<br/>';
											echo $row['sc_class'];
											echo '<br/>';
											echo $row['sc_trainer'];
										break;

									}?>
									</li>
								<?php $i++; }?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>