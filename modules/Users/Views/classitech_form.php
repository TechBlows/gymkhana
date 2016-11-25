<!--@author: Mahesh Sharma-->
<!DOCTYPE html>
        <html>
        <head>
            
            <title>Classitech Installation Form</title>
            <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
            <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
            <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="assets/js/jquery.min.js"></script>
            <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
            <style type="text/css">
                body{
                   font-family: myFirstFont;
                   src: url(sansation_light.woff);
                
                }
                #submit {
                 align:right;
                }
                text{
                    size:28px;
                    color:red;
                 }
                 @font-face {
                   font-family: myFirstFont;
                   src: url(sansation_light.woff);
                }

                #formid {
                   font-family: myFirstFont;
                   background-color: rgba(0, 0, 0, .03);
                   border-bottom:1px; 
                }            

            </style>   

        </head>
        <body>
        <div class="container">
          
        <div class="panel panel-success">
            <div class="panel-heading"><h4><b>Classitech - Installation Form</b></h4>
        </div>
        <div class="panel-body" id="formid">
            <form style="padding: 5px;" id="myform" action="#" method="post" enctype="multipart/form-data" onsubmit="return validate();" >
            <div class="col-md-6">
                <input type="hidden" name="visitor_id" value=""/>
                <div class="form-group">
                    <label>Name<text> * </text>:</label>
                    <input type="text" name="name" class="form-control my_in" required="" value="" placeholder="Full Name" /><span class="bar"></span>
                    <input type="hidden" name="visitor_id" value=""/>
                </div>
                <div class="form-group">
                    <label>Address<text> * </text>:</label>
                    <input type="text" name="address" class="form-control my_in" value="" required="" placeholder="Address" />
                </div>
                <div class="form-group">
                    <label>Work Phone<text> * </text>:</label>
                    <input type="text" name="workphone" class="form-control my_in" value="" required="" placeholder="Work Phone" />
                </div>
                <div class="form-group">
                    <label>Moible Phone <text> * </text>:<small style="color: red;">(Number only excluding 977, mandatory for SMS notification)</small></label>
                    <input type="text" name="mobilephone" maxlength="10" id="mob_num" class="form-control my_in" value="" required="" placeholder="Mobile Phone" />
                </div>
                <div class="form-group">
                    <label>Home Phone <text> * </text>:</label>
                    <input type="text" name="homephone" class="form-control my_in" value="" required="" placeholder="Home Phone" />
                </div>
                <div class="form-group">
                    <label>Email:<text> * </text></label>
                    <input type="email" name="email" class="form-control my_in" value="" required="" placeholder="Email" />
                </div>
            </div>    
               
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Service:</label>
                                <select name="service" class="form-control my_in" id="service">
                                    <option value="internet" >Internet</option>
                                    <option value="INTRANET">INTRANET</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Link Type<text> * </text>:</label>
                                <select name="link_type" class="form-control my_in" id="link_type">
                                    <option value="">---- Select ----</option>
                                    <option value="fibre" >Fiber</option>
                                    <option value="wireless">Wireless</option>
                                    <option value="cable">Cable</option>
                                    <option value="ftth">FTTH</option>
                                    <option value="other">Other</option>

                                </select>
                            </div>

                        
                            <div class="form-group">
                                <label>Package<text> * </text>:</label>
                                <select onchange=";" name="package" class="form-control my_in" id="package">
                                    <option value="">-- Select -- </option>
                                    <option  >Other</option>
                                   
                                </select>
                                
                                    <span id="other_package" style="display: none; margin-top: 10px;">
                                        <strong>Dedicated -</strong> <input  type="number" name="package_other" placeholder="Number only" /> <strong>M</strong>
                                    </span>
                            </div>
                                             
                            <div class="form-group">
                                <label>Account Type<text> * </text>:</label>
                                <select class="form-control my_in" name="account_type" id="account_type">
                                    <option value="">---- Select ----</option>
                                    <option value="normal" >Home</option>
                                    <option value="corporate">Corporate</option>
                                    <option value="staff A">Staff A</option>
                                    <option value="staff B">Staff B</option>
                                    <!-- <option value="complimentary">complimentary</option>  -->
                                    <option value="business promotion"> Business Promotion (Friends&Family)</option>
                                    <option value="tower maintenance">Tower Maintenance (Houseowner)</option>
                                    <option value="service shuffle">Service Shuffle (Barter)</option>
                                    <option value="other">other</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Note: </label>
                                <textarea name="request_note" class="form-control my_in" placeholder="Type your message here.." rows="4" cols="60"></textarea>
                            </div>
                        </div>
                        
                       
                    </div>    
               
                    </div>
                        <div class="panel-footer">
                            <input type="submit"  class="btn btn-success btn-sm padding-right" name="submit_new" value="Submit Request"  id="submit"/>
                             </form>

                             <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
                            <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
                            <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
                            <script>
                            // just for the demos, avoids form submit
                            jQuery.validator.setDefaults({
                              debug: true,
                              success: "valid"
                            });
                            $( "#myform" ).validate({
                              rules: {
                                name: {
                                  required: true,
                                  minlength: 6,
                                  maxlength:24,
                                  lettersonly: true
                                },

                                message:{
                                    name:{
                                        required:"Please enter yout full name",
                                        minlength:"Please enter a valid name",
                                        maxlength:"Please enter a valid name"
                                    }
                                }
                              }
                            });
                            </script>
                        </div>
                  </div>
            </div>
           
        </body>
    </html>
