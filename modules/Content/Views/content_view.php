<!DOCTYPE html>
<html>
    <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GYMKHANA &mdash; Content Information </title>
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/fav.png')?>" />
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    </head>
    <body> 
    <?php $this->load->view('admin/admin.php');?>

<!-- container for content section  -->
 <div class="container" >

        <h3 style="font-size:20pt">Gymkhana &mdash; Content Information</h3>

        <br />
        <button class="btn btn-success" onclick="ajax_add_content()"><i class="glyphicon glyphicon-plus"></i> Add Content</button>
        <button class="btn btn-default" onclick="reload_table_content()"><i class="glyphicon glyphicon-refresh"></i> Reload Content</button>
        <br />
        <br />
        <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%" >
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th style="width:100px;">Content Title</th>
                    <th>Content Description</th>
                    <th style="width:125px;">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>

            <tfoot>
            <tr>
                <th>S.No.</th>
                <th>Content Title</th>
                <th>Content Description</th>
                <th>Action</th>
            </tr>
            </tfoot>
        </table>
    </div>
    <script src="<?php echo base_url('assets/js/jquery-2.1.4.js')?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery.validate.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery.validate.min.js')?>"></script>
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
      content_title:{
        required:true,
        minlength:4,
        maxlength:20,
        lettersonly: true
        },
      content_description: {
        required:true,
        minlength:10,
        maxlength:100,
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


    <script type="text/javascript">

        var save_method; //for save method string
        var table;

        $(document).ready(function() {

            //datatables
            table = $('#table').DataTable({ 

                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.

                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?php echo base_url('content/ajax_list_content')?>",
                    "type": "POST"
                },

                //Set column definition initialisation properties.
                "columnDefs": [
                { 
                    "targets": [ -1 ], //last column
                    "orderable": false, //set not orderable
                },
                ],

            });


            //set input/textarea/select event when change value, remove class error and remove text help block 
            $("input").change(function(){
                $(this).parent().parent().removeClass('has-error');
                $(this).next().empty();
            });
            $("textarea").change(function(){
                $(this).parent().parent().removeClass('has-error');
                $(this).next().empty();
            });
            $("select").change(function(){
                $(this).parent().parent().removeClass('has-error');
                $(this).next().empty();
            });

         });
    </script>    

    <script>

    function ajax_add_content()
    {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#modal_form').modal('show'); // show bootstrap modal
        $('.modal-title').text('Add Content'); // Set Title to Bootstrap modal title
    }

    function ajax_edit_content(content_id)
    {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('content/ajax_edit_content/')?>/" + content_id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
                $('[name="content_id"]').val(data.content_id);
                $('[name="content_title"]').val(data.content_title);
                $('[name="content_description"]').val(data.content_description);
                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Person'); // Set title to Bootstrap modal title

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function reload_table_content()
    {
        table.ajax.reload(null,false); //reload datatable ajax 
    }

    function save_content()
    {
        $('#btnSave').text('saving...'); //change button text
        $('#btnSave').attr('disabled',true); //set button disable 
        var url;

        if(save_method == 'add') {
            url = "<?php echo site_url('content/ajax_add_content')?>";
        } else {
            url = "<?php echo site_url('content/ajax_update_content')?>";
        }

        // ajax adding data to database
        $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {

                if(data.status) //if success close modal and reload ajax table
                {
                    $('#modal_form').modal('hide');
                    reload_table_content();
                }
                else
                {
                    for (var i = 0; i < data.inputerror.length; i++) 
                    {
                        $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                        $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                    }
                }
                $('#btnSave').text('save'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable 


            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
                $('#btnSave').text('save'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable 

            }
        });
    }

    function ajax_delete_content(content_id)
    {
        if(confirm('Are you sure delete this data?'))
        {
            // ajax delete data to database
            $.ajax({
                url : "<?php echo site_url('content/ajax_delete_content')?>/" + content_id,
                type: "POST",
                dataType: "JSON",
                success: function(data)
                {
                    //if success reload ajax table
                    $('#modal_form').modal('hide');
                    reload_table_content();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error deleting data');
                }
            });

        }
    }

</script>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Content Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal" name="registration">
                    <input type="hidden" value="" name="content_id"/> 

                    <div class="form-body">
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Content Title:</label>
                            <div class="col-md-9">
                                <input name="content_title" placeholder="Content Title" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label class="control-label col-md-3">Content Description:</label>
                            <div class="col-md-9">
                                <textarea name="content_description" placeholder="Content Description" class="form-control" rows="8" cols="50"></textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save_content()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
</body>
</html>