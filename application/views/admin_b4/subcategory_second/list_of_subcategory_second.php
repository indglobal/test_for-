<head>
     <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet');?>">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css');?>" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url('bower_components/datatables-responsive/css/dataTables.responsive.css');?>" rel="stylesheet">
 </head>

<body>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">List of Subcategories_1</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Subcategory Table
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="box-header">
                        <h3 class="box-title"><div> <a href="<?php echo base_url('create_subcat_second'); ?>"><button class='btn btn-success'>Add Subcategory</button></a></h3>
                    </div>
                    <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                    <th>#</th>
                    <th>Category Name</th>
                    <th>SubCategory Name</th>
                    <th>Subcategory Name second</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                     <?php if(count($subcategories)>0):  
                     $i=1;?>
                    <?php foreach($subcategories as $subcat): ?>
                    <tr>   
                    <td><?php echo $i;?></td>
                    <td><?php echo cetegory_name_by_id($subcat['cat_id']);?></td>
                    <td><?php echo subcategory_name_by_id($subcat['subcat_id']);?></td>
                    <td><?php echo $subcat['subcat_second_name'];?></td>
                    <td>
                    <a href="<?php echo base_url(); ?>admin/subcategories_second/edit_subcat_second/<?php echo $subcat['sub_cat_second_id']; ?>" class="btn btn-info">Edit</a>&nbsp;&nbsp;
                    <a href="<?php echo base_url(); ?>admin/subcategories_second/delete_subcat_second/<?php echo $subcat['sub_cat_second_id']; ?>" class="btn btn-danger" onclick = "return delConfirm()">Delete</a>
                    </td>
                   </tr>
                    <?php $i++;
                    endforeach;?>
                    <?php else: ?>
                    <tr>
                    <td colspan="3">No Data Found</td>
                     </tr>
                    <?php endif; ?>
                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>
            
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('bower_components/metisMenu/dist/metisMenu.min.js');?>"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url('bower_components/datatables/media/js/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js');?>"></script>

   

   <script>

    function delConfirm()
    {
        var r=confirm('Do you want to delete');
        if( r == true )
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    </script>

</body>

</html>
