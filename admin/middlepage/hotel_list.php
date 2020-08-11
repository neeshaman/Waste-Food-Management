                    <div class="span12">
                        <div class="content">

                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                       Hotel DataTable</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                        width="100%">
                                     <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>h_Id</th>
                                        <th>Name</th>
                                        <th>Address</th>
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
                                        $sel="SELECT * FROM `hotel`";
                                        $qry=mysqli_query($con,$sel);
                                        while($row=mysqli_fetch_array($qry)){
                                     ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['h_id'];?></td>
                                        <td><?php echo $row['h_name']; ?></td>
                                        <td><?php echo $row['h_address']; ?></td>
                                        <td><?php echo $row['h_city']; ?></td>
                                        <td><?php echo $row['h_phoneNo']; ?></td>
                                        <td><?php echo $row['h_email']; ?></td>
                                        
                                        <td><img src="<?php echo 'upload/hotel/'.$row['h_profile']; ?>" height="50" width="50"></td>
                                        <td>
                                            <a href="index.php?page=hotel_action&action=delete&hotel_id=<?php echo $row['h_id'];?>" class="btn btn-danger">Delete</a>
                                        </td>
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
