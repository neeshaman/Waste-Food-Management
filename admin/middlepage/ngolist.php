                    <div class="span12">
                        <div class="content">

                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        NGO DataTable</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                        width="100%">
                                     <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>n_Id</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Work Area</th>
                                        <th>City</th> 
                                        <th>Phone No</th>
                                        <th>Email</th>
                                        <th>Profile</th>
                                    
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        
                                        $i=1;
                                        
                                        $v_id=$_REQUEST['v_id'];               
                                $sel_visitor="SELECT  * FROM `visitor` WHERE `v_id`='$v_id' ";
                                        $qry_visitor=mysqli_query($con,$sel_visitor);
                                        $row_visitor=mysqli_fetch_assoc($qry_visitor);
                                        
                                        $visitorcity=$row_visitor['v_city'];
                        
                                        $sel="SELECT * FROM `ngo` WHERE `n_city`='$visitorcity'";
                                        $qry=mysqli_query($con,$sel);
                                        while($row=mysqli_fetch_array($qry)){

                                     ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['n_id'];?></td>
                                        <td><?php echo $row['n_name']; ?></td>
                                        <td><?php echo $row['n_address']; ?></td>
                                        <td><?php echo $row['n_workarea']; ?></td>
                                        <td><?php echo $row['n_city']; ?></td>
                                        <td><?php echo $row['n_phoneNo']; ?></td>
                                        <td><?php echo $row['n_email']; ?></td>
                                        
                                        <td><img src="<?php echo 'upload/ngo/'.$row['n_profile']; ?>" height="50" width="50"></td>
                                        <td>
                                            <a href="index.php?page=v_request&v_id=<?php echo $_REQUEST['v_id'];;?>&ngo_id=<?php echo $row['n_id']; ?>" class="btn btn-danger">Send Request</a></td>
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
