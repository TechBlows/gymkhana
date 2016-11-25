<html>
  <?php
  if (isset($this->session->userdata['logged_in'])) {

  header("location:login/user_login_process");
  }
  ?>
  <head>
    
    <base href="<?php echo base_url(); ?>">
    
    <title>
      GYMKHANA &mdash; Login Form
    </title>
    
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/fav.png')?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/style.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
    
    <style type="text/css">
    	text{
            font-size:20px;
            color:red;
         }                          
    </style>
    
    <script type="text/javascript">
      function check()
      {
      if(document.getElementById("icd").checked==true){
      	mouseoverPass();
      }else{
      	mouseoutPass();
      }

      }

      function mouseoverPass(obj) {
        var obj = document.getElementById('myPassword');
        obj.type = "text";
      }
      function mouseoutPass(obj) {
        var obj = document.getElementById('myPassword');
        obj.type = "password";
      }
    </script>
    
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js')?>"></script>
    
    <script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery.validate.js')?>"></script>
    
    <script type="text/javascript">
            // Wait for the DOM to be ready
        $(function() {
          // Initialize form validation on the registration form.
          // It has the name attribute "registration"
          jQuery.validator.addMethod("lettersonly", function(value, element) {
          return this.optional(element) || /^[a-z]+$/i.test(value);
        }, "Letters only please");
          $("form[name='registration']").validate({
            // Specify validation rules
            rules: {
              username:{
                required:true,
                minlength:4,
                maxlength:30,
                lettersonly: true
                },
              password: {
                required:true,
                minlength:4,
                maxlength:30,
                }
            },

            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
              form.submit();
            }
          });
        });
      </script>

    </head>
    
    <body>
      <?php
        if (isset($logout_message)) {
          echo "<div class='message'>";
          echo $logout_message;
          echo "</div>";
        }
      ?>
    <?php
      if (isset($message_display)) {
        echo "<div class='message'>";
        echo $message_display;
        echo "</div>";
      }
    ?>
    <div id="main">
      <div id="login">
        <h2>
          Login Form
        </h2>
        <hr/>
        <?php echo form_open('login/user_login_process'); ?>
        <?php
          echo "<div class='error_msg'>";
          if (isset($error_message)) {
            echo $error_message;
          }
          echo validation_errors();
          echo "</div>";
        ?>
        <label>UserName <text> * </text>:</label>
        <input type="text" name="username" id="name"  placeholder="username" required="" /><br /><br />
        <label>Password <text> * </text>:</label> 
        <input type="password" name="password" id="myPassword" placeholder="**********" required="" />
        <input type="checkbox" id = 'icd' style="font-size:12px; " onclick="check();"/>show password</p><br/>
        <input type="submit" value=" Login " name="submit"/><br />
        <a href="login/user_registration_show">
          <center>
            To SignUp Click Here
          </center></a>
        <?php echo form_close(); ?>
        </div>
    </div>
  </body>
</html>