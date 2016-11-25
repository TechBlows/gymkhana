<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Makes "field" required having at least 3 characters.</title>
<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
 
</head>
<body>
<form id="myform">
<label for="field">Required, minimum length 3: </label>
<input type="text" class="left" id="field" name="field">
<br/>
<input type="submit" value="Validate!">
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
    field: {
      required: true,
      minlength: 3
    }
  }
});
</script>
</body>
</html>