<div id="search_results">	
  	<h3>Search resuts</h3>
	<table border="1px solid red;">
		<?php foreach($records as $record){?>
				
				<div>
					 <?php echo $record['content_title'];?>
				</div>
				<div class="well well-lg">	
					 <?php echo $record['content_description'];?>
				</div>	

		<?php }?>
	</table>		
		
	</div>

