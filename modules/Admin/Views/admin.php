<div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand"  target ="_blank" href="<?php echo base_url();?>">Gymkhana Admin</a>
    </div>
   <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url('admin/admin_page');?>">Dashboard</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Content
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url('admin/content_page');?>">Content</a></li>
          <li><a href="<?php echo base_url('admin/client_page');?>">Client</a></li>
          <li><a href="<?php echo base_url('admin/classes_page');?>">Classes</a></li>
          <li><a href="<?php echo base_url('admin/schedule_page');?>">Schedule</a></li>
          <li><a href="<?php echo base_url('admin/price_page');?>">Price</a></li> 
          <li><a href="<?php echo base_url('admin/person_page');?>">Person</a></li>
          <li><a href="<?php echo base_url('admin/expert_page');?>">Expert</a></li>   
        </ul>
      </li>
      <li><a href="<?php echo base_url('admin/blog_page');?>">Blog</a></li> 
      <li><a href="<?php echo base_url('admin/gallery_page');?>">Gallery</a></li> 
    </ul>
     <ul class="nav navbar-nav navbar-right">
      <li><a href="logout"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
    </ul>
  </div>
</nav>
</div>