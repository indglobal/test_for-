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
                    <h1 class="page-header">Specialities</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Specialities Table
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="box-header">
                        <h3 class="box-title"><div> <a href="<?php echo base_url('create_spe'); ?>"><button class='btn btn-success'>Add Specialities</button></a></h3>
                    </div>
                    <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                    <th>Name</th>
                    <th>Created Date</th>
                    <th>Modified Date</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                     <?php if(count($special)>0):  ?>
                    <?php foreach($special as $spe): ?>
                    <tr>   

                    <td><?php echo $spe->name ?></td>
                    <td><?php echo $spe->created_date ?></td>
                    <td><?php echo $spe->modified_date ?></td>
                    <td>
                    <a href="<?php echo base_url(); ?>admin/edit_spe/<?php echo $spe->specialities_id; ?>" class="btn btn-info">Edit</a>
                    <a href="<?php echo base_url(); ?>admin/delete_spe/<?php echo $spe->specialities_id; ?>" class="btn btn-danger" onclick = "return delConfirm()">Delete</a>
                    </td></tr>
                    <?php endforeach;?>
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
