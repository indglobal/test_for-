<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="<?php echo base_url();?>user_panel_design/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>user_panel_design/font-awesome-4.5.0/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>user_panel_design/css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="<?php echo base_url('js/jquery.form.js'); ?>"></script>

    <style>
		.error {
		color: #D8000C;
		font-size:120%;
		/*background-color: #FFBABA;*/
		/*background-image: url('error.png');*/
		}
		.success {
		color: #4F8A10;
		background-color: #DFF2BF;
		/*background-image:url('success.png');*/
		}
		#dataTables-example{
			background-color: #FFF;
			border-radius: 10px;
		}
		#dataTables-example th{
			border: 1px solid #FFF;
			background-color: #167F92;
			color: #FFF;
			margin: .5em 1em;
			text-align: left;
			font-size: 18px;
		}
		#dataTables-example td {
		    text-align: left;
		    margin: .5em 1em;
		}
		#dataTables-example td {
		    display: table-cell;
		    padding: 1em;
		}
    </style>
</head>

<body>
	<!-- Start header content.............................................. -->
<!--	<div class="container-fluid header_cont">
		<div class="row">
			<div class="col-sm-10">
				<h2><img src="<?php echo base_url();?>user_panel_design/images/logo.png" alt="logo" width="40" height="40">   Educationtotal</h2>
			</div>
			<div class="col-sm-2 chip dropdown">
				<img src="<?php echo base_url();?>user_panel_design/images/ra.png" alt="ra" class="img-circle img-responsive" width="50" height="50"> Ramesh
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">My Profile</a></li>
		            <li><a href="#">Edit Profile</a></li>
		            <li><a href="#">Logout</a></li>
		          </ul>
			</div>
		</div>
	</div> -->
    <!-- End header content.............................................. -->
<br><br><br>
	<!-- Start body content.............................................. -->
	<div class="container-fluid main_body">
	<div class="row main_face">

	<?php include("left_panel_provider.php");?>

		<div class="col-sm-11 mid_cont">
		<div class="tab-content">
		<div id="profile" class="tab-pane fade in active">
		 
			<div class="col-sm-12 body_header">
			    <ol class="breadcrumb">
				    <li><a href="#">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li class="active">Provider Profile Pages</li>
				</ol>
			</div>
			<div class="col-sm-12 body_header_caption">
				<h2>List Service</h2>
			</div>
       	
       		<div class="col-sm-10 body_right">
		    	<div class="col-sm-12 ">

		    		<div>
		    			<br>
		    	    </div>		
                    
		    		<!-- table -->
		    		<div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                    <th>Title</th>
                    <th>Menu</th>
                    <th>Submenu</th>
                    <th>Cat</th>
                    <th>Subcat</th>
                    </tr>
                    </thead>
					  <tbody>
                    <?php 
                     foreach ($result as $res) {
                     	//echo "<pre>";
                     	//print_r($res);  ?>
                  
                    <tr>
	                    <td><a href="<?php echo base_url();?>service/search_result_service/<?php echo $res->service_id;?>"><?php echo $res->title ?></a> </td>
	                    <td><?php echo $res->cat_name ?>        </td>
	                    <td> <?php echo $res->subcat_name ?>         </td>
	                    <td>  <?php echo $res->subcat_second_name  ?>  </td>
	                    <td> <?php echo $res->subcat_thired_name ?>  </td>
                    </tr>           
                   
                 <?php   }
		    		?>
				 </tbody>
                    </table>
                    </div>
                            <!-- /.table-responsive -->	
 				</div>
 		 	</div>		








			</div>	
		</div>
	    </div>	
	</div>	
	</div>