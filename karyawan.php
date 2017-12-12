<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
    <title>AMBIL CUTI ONLINE</title>
    
    <!-- Meta -->
    <meta charset="UTF-8 " />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
    
    <!-- 
    **********************************************************
    In development, use the LESS files and the less.js compiler
    instead of the minified CSS loaded by default.
    **********************************************************
    <link rel="stylesheet/less" href="assets/less/admin/module.admin.page.form_elements.less" />
    -->
    
        <!--[if lt IE 9]><link rel="stylesheet" href="assets/components/library/bootstrap/css/bootstrap.min.css" /><![endif]-->
    <link rel="stylesheet" href="assets/css/admin/module.admin.page.form_elements.min.css" />
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="assets/components/library/jquery/jquery.min.js?v=v1.2.3"></script>
<script src="assets/components/library/jquery/jquery-migrate.min.js?v=v1.2.3"></script>
<script src="assets/components/library/modernizr/modernizr.js?v=v1.2.3"></script>
<script src="assets/components/plugins/less-js/less.min.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.2.3"></script>
<script src="assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.2.3"></script>  
</head>
<body class="">

		<div class="navbar navbar-fixed-top navbar-primary main" role="navigation">
    
    <div class="navbar-header pull-left">
        <div class="navbar-brand">
            <div class="pull-left">
                <a href="" class="toggle-button toggle-sidebar btn-navbar"><i class="fa fa-bars"></i></a>
            </div>
            <a href="menu.php" class="appbrand innerL">AMBIL CUTI ONLINE</a>
        </div>
    </div>
</div>
	<div id="menu" class="hidden-print hidden-xs">
	<div class="sidebar sidebar-inverse">
		<div class="user-profile media innerAll">
			<a href="" class="pull-left"><img src="assets/images/people/50/8.jpg" alt="" class="img-circle"><span class="badge badge-primary">2</span></a>
			<div class="media-body">
				<a href="" class="strong">KELOMPOK 9</a>
				<p class="text-success"><i class="fa fa-fw fa-circle"></i> Online</p>
			</div>
		</div>
		<div class="sidebarMenuWrapper">
			<ul class="list-unstyled">
				<li class="active"><a href="menu.php"><i class=" icon-projector-screen-line"></i><span>Dashboard</span></a></li>	
				
				<li><a href="input.php?page=ISI DATA"><i class="icon-user-1"></i><span>ISI DATA</span></a></li>			
			</ul>
		</div>
	</div>
</div>


<div id="content">
<div class="innerAll spacing-x2">
	<div class="row">
<div class="main">
 <div class="isimain">
  <table>
   <a href="input.php"><input type="submit" value="Tambah Data Karyawan"></a>
   <tr>
    <th>No</th><th>Nip</th><th>Nama</th><th>Jenis Kelamin</th><th>Tanggal Lahir</th><th>Jabatan</th><th>Status</th><th>Action</th>
   </tr>
   <?php
    $data=mysql_query("SELECT * FROM karyawan ORDER BY name");
    $id=1;
    while ($r=mysql_fetch_array($data)) {
     ?>
      <tr>
     <td><?php echo $r['id']; ?></td>
     <td><?php echo $r['nip']; ?></td>
     <td><?php echo $r['name']; ?></td>
     <td><?php echo $r['jenisKelamin']; ?></td>
     <td><?php echo $r['tglLahir']; ?></td>
     <td><?php echo $r['jabatan']; ?></td>
     <td><?php echo $r['status']; ?></td>
     <td><a href='edit.php?id=<?php echo $r['id'];?>'>Edit</a><a href='hapus.php?id=<?php echo $r['id'];?>'>Hapus</a></td>
    </tr>
     <?php
    }
    ?>
	</div>							
	<!-- // Widget Heading END -->
</div>
<!-- // Widget END -->

		
			
		</div>
	</div>
</div>





	
	
		
		</div>
		<!-- // Content END -->
		
		<div class="clearfix"></div>
		<!-- // Sidebar menu & content wrapper END -->
		
		<div id="footer" class="hidden-print">
			
			<!--  Copyright Line -->
			<div class="copy">&copy; 2017</div>
			<!--  End Copyright Line -->
	
		</div>
		<!-- // Footer END -->
		
	</div>
	<!-- // Main Container Fluid END -->
	

	

	<!-- Global -->
    <script>
    var basePath = '',
        commonPath = 'assets/',
        rootPath = '../',
        DEV = false,
        componentsPath = 'assets/components/';
    
    var primaryColor = '#cb4040',
        dangerColor = '#b55151',
        infoColor = '#466baf',
        successColor = '#8baf46',
        warningColor = '#ab7a4b',
        inverseColor = '#45484d';
    
    var themerPrimaryColor = primaryColor;
    </script>
    
    <script src="assets/components/library/bootstrap/js/bootstrap.min.js?v=v1.2.3"></script>
<script src="assets/components/plugins/nicescroll/jquery.nicescroll.min.js?v=v1.2.3"></script>
<script src="assets/components/plugins/breakpoints/breakpoints.js?v=v1.2.3"></script>
<script src="assets/components/core/js/animations.init.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/forms/elements/bootstrap-switch/assets/lib/js/bootstrap-switch.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/forms/elements/bootstrap-switch/assets/custom/js/bootstrap-switch.init.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/forms/elements/uniform/assets/lib/js/jquery.uniform.min.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/forms/elements/uniform/assets/custom/js/uniform.init.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/forms/elements/fuelux-checkbox/fuelux-checkbox.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/modals/assets/js/bootbox.min.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/modals/assets/js/modals.init.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/notifications/gritter/assets/lib/js/jquery.gritter.min.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/notifications/gritter/assets/custom/js/gritter.init.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/forms/editors/wysihtml5/assets/lib/js/wysihtml5-0.3.0_rc2.min.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/forms/editors/wysihtml5/assets/lib/js/bootstrap-wysihtml5-0.0.2.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/forms/editors/wysihtml5/assets/custom/wysihtml5.init.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/forms/wizards/assets/lib/jquery.bootstrap.wizard.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/forms/wizards/assets/custom/js/form-wizards.init.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/forms/elements/jasny-fileupload/assets/js/bootstrap-fileupload.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/forms/elements/button-states/button-loading/assets/js/button-loading.init.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/forms/elements/bootstrap-select/assets/lib/js/bootstrap-select.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/forms/elements/bootstrap-select/assets/custom/js/bootstrap-select.init.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/forms/elements/select2/assets/lib/js/select2.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/forms/elements/select2/assets/custom/js/select2.init.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/forms/elements/inputmask/assets/lib/jquery.inputmask.bundle.min.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/forms/elements/inputmask/assets/custom/inputmask.init.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/forms/elements/bootstrap-datepicker/assets/lib/js/bootstrap-datepicker.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/forms/elements/bootstrap-datepicker/assets/custom/js/bootstrap-datepicker.init.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/forms/elements/bootstrap-timepicker/assets/lib/js/bootstrap-timepicker.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/forms/elements/bootstrap-timepicker/assets/custom/js/bootstrap-timepicker.init.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/forms/elements/colorpicker-farbtastic/assets/js/farbtastic.min.js?v=v1.2.3"></script>
<script src="assets/components/modules/admin/forms/elements/colorpicker-farbtastic/assets/js/colorpicker-farbtastic.init.js?v=v1.2.3"></script>
<script src="assets/components/plugins/holder/holder.js?v=v1.2.3"></script>
<script src="assets/components/core/js/sidebar.main.init.js?v=v1.2.3"></script>
<script src="assets/components/core/js/sidebar.collapse.init.js?v=v1.2.3"></script>
<script src="assets/components/helpers/themer/assets/plugins/cookie/jquery.cookie.js?v=v1.2.3"></script>
<script src="assets/components/core/js/core.init.js?v=v1.2.3"></script>	
</body>
</html>