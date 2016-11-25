<div id="fh5co-services" class="fh5co-bg-section">
          <div class="container">
               <div class="row">
              
               <?php $i=0;foreach($deptlist as $row) { ?>

               	 <div class="col-md-4 text-center animate-box">
                         <div class="services">
                           <span><img class="img-responsive" src="assets/images/<?php echo $img[$i];?>" alt="icons"></span>

                              <table class="table">

                              <tr>
                                   <h3><?php echo $row['content_title']; ?></h3><br/>

                                   <?php echo $row['content_description']; ?><br/>
                                   <p><a href="#" class="btn btn-primary btn-outline btn-sm">More <i class="icon-arrow-center"></i></a></p>
                              </tr>
                    			<tbody>
                         
                    			</tbody>
                         </table>
                              
                             
                         </div>
                    </div>

               <?php  $i++;} ?>
                
               </div>
          </div>
     </div>