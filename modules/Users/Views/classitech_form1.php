<!--@author: Mahesh Sharma-->
<!DOCTYPE html>
        <html>
        <head>
            
            <title>Classictech &mdash; New Installation Form</title>
            <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
            <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
            <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="assets/js/jquery.min.js"></script>
            <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
            <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
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
                   background-color: rgba(0, 0, 0, .01);
                   border-bottom:1px; 
                }  
                #rad{
                    font-family: myFirstFont;
                   src: url(sansation_light.woff);
                }  p{
                    font-size:20px;
                }   

            </style>   
            

        </head>
        <body>
        <div class="container">
          
        <div class="panel panel-success" style="border:0px;">
            <div class="w3-container w3-green" id="rad"><center><p><b>Classictech &mdash; New Installation Form</b></p></center>
        </div>
        <div class="panel-body" id="formid">
            <form style="padding: 5px;" id="myform" action="#" method="post" enctype="multipart/form-data" class="w3-container" onsubmit="return validate();" >
            <div class="col-md-6">
                <input type="hidden" name="visitor_id" value=""/>
                <div class="form-group">
                    <label>Reseller Username<text> * </text>:</label>
                    <input type="text" name="rname" class="w3-input w3-border w3-round-xlarge w3-border w3-round-xlarge " required="" value="" placeholder="Reseller Username" /><span class="bar"></span>
                </div>
                <div class="form-group">    
                    <label>Reseller Password<text> * </text>:</label>
                    <input type="password" name="password" class="w3-input w3-border w3-round-xlarge w3-border w3-round-xlarge " required="" value="" placeholder="****************" /><span class="bar"></span>
                </div>
                <div class="form-group">    
                    <label>Name<text> * </text>:</label>
                    <input type="text" name="name" class="w3-input w3-border w3-round-xlarge w3-border w3-round-xlarge " required="" value="" placeholder="Full Name" /><span class="bar"></span>
                    <input type="hidden" name="visitor_id" value=""/>
                </div>
                <div class="form-group">
                    <label>Address<text> * </text>:</label>
                    <input type="text" name="address" class="w3-input w3-border w3-round-xlarge" value="" required="" placeholder="Address" />
                </div>
                <div class="form-group">
                    <label>Moible Phone <text> * </text>:<small style="color: red;">(Number only excluding 977, mandatory for SMS notification)</small></label>
                    <input type="text" name="mobilephone" maxlength="10" id="mob_num" class="w3-input w3-border w3-round-xlarge" value="" required="" placeholder="Mobile Phone" />
                </div>

                <div class="form-group">
                    <label>Home Phone:</label>
                    <input type="text" name="homephone" class="w3-input w3-border w3-round-xlarge" value="" placeholder="Home Phone" />
                </div>
                
                <div class="form-group">
                    <label>Work Phone:</label>
                    <input type="text" name="workphone" class="w3-input w3-border w3-round-xlarge" value="" placeholder="Work Phone" />
                </div>
            </div>    
               
            <div class="col-md-6">
            
                <div class="form-group">
                    <label>Email:<text> * </text></label>
                    <input type="email" name="email" class="w3-input w3-border w3-round-xlarge" value="" required="" placeholder="Email" />
                </div>
             <div class="form-group">
                        <label>Service<text> * </text>:</label>
                        <select name="service" class="w3-input w3-border w3-round-xlarge" id="service" required="">
                            <option value="">---- Select ----</option>
                            <option value="internet" >Internet</option>
                            <option value="INTRANET">INTRANET</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Link Type<text> * </text>:</label>
                        <select name="link_type" class="w3-input w3-border w3-round-xlarge" id="link_type">
                            <option value="">---- Select ----</option>
                            <option value="fibre" >Fiber</option>
                            <option value="cable">Cable</option>
                            <option value="ftth">FTTH</option>
                        </select>
                    </div>

                
                    <div class="form-group">
                        <label>Package<text> * </text>:</label>
                        <select onchange=";" name="package" class="w3-input w3-border w3-round-xlarge" id="package">
                            <option value="">-- Select -- </option>
                            <option  >Other</option>
                           
                        </select>
                        
                            <span id="other_package" style="display: none; margin-top: 10px;">
                                <strong>Dedicated -</strong> <input  type="number" name="package_other" placeholder="Number only" /> <strong>M</strong>
                            </span>
                    </div>
                                     
                    <div class="form-group">
                        <label>Account Type<text> * </text>:</label>
                        <select class="w3-input w3-border w3-round-xlarge" name="account_type" id="account_type">
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
                        <textarea name="request_note" class="w3-input w3-border w3-round-xlarge" placeholder="Type your message here.." rows="5" cols="60" name="note"></textarea>
                    </div>
            <br/><br/>


                </div>
                         <center><input type="submit"  class="w3-btn w3-green" name="submit_new" value="Submit Request"  style="border-radius:0.5em;" id="submit"/></center>
                         </form>
                        
                       
                    </div>    
               
                    </div>
                    
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
                            rname: { 
                              required: true,
                              minlength: 4,
                              maxlength:25
                            },
                            password: { 
                              required: true,
                              minlength: 4,
                              maxlength:25
                            },
                            name: {
                              
                               required: true,
                               minlength: 4,
                               maxlength:25,
                               lettersonly: true 
                            },
                            address: { 
                              required: true,
                              minlength: 4,
                              maxlength:25
                            },
                            mobilephone: { 
                              required: true,
                              minlength: 9,
                              maxlength:11,
                              number:true
                            },
                            homephone: {  
                              minlength:7,
                              maxlength:9,
                              number:true
                            },
                            workphone: { 
                              minlength: 7,
                              maxlength:9,
                              number: true 
                            },
                            email: {
                              email:true,  
                              required: true,
                              minlength: 4,
                              maxlength:35
                            },
                            service: {  
                              required: true
                            },
                            link_type: { 
                              required: true
                            },
                            package: {
                              required: true
                            },
                            account_type: { 
                              required: true
                            },
                            note: {
                              minlength: 4,
                              maxlength:100
                            }
                          }
                        });
                        </script>
                    </div>
                  </div>
            </div>
           
        </body>
    </html>
