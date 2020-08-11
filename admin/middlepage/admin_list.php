                    <div class="span12">
                        <div class="content">

                            <div class="module">
                                <div class="module-head">
                                    <h3 class="col-md-8">
                                       Admin DataTable 
                                    <a href="index.php?page=admin_form&action=insert" class="btn btn-info" style="margin-left: 980px">Add New</a></h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                     <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>A_Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Profile</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i=1;
                                        $sel="SELECT * FROM `admin`";
                                        $qry=mysqli_query($con,$sel);
                                        while($row=mysqli_fetch_array($qry)){
                                     ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['a_id'];?></td>
                                        <td><?php echo $row['a_name']; ?></td>
                                        <td><?php echo $row['a_email']; ?></td>
                                        <td><?php echo $row['a_password']; ?></td>
                                        <td><img src="<?php echo 'upload/admin/'.$row['a_profile']; ?>" height="50" width="50"></td>
                                       
                                         
                                        <td>
                                            <!-- <a href="index.php?page=admin_form&admin_id=<?php echo $row['a_id'] ?>" class="btn btn-info">Update</a>
                                            | -->
                                            <a href="index.php?page=admin_action&action=delete&admin_id=<?php echo $row['a_id']; ?>" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    <?php $i++; }?>
                                    
                                </tbody>
                                       

                                     </table>
                                </div>
                            </div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
