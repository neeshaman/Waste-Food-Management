                    <div >
                        <div class="content">

                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                       Request DataTable</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table-bordered table-striped  display"
                                        width="100%">
                                     <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>request_Id</th>
                                        <th>hotel_Id</th>
                                        <th>visitor_Id</th>
                                        <th>ngo_Id</th>
                                        <th>r_date</th>
                                        <th>Food Name</th>
                                        <th>Food Type</th>
                                        <th>Food Qty</th>
                                        <th>Cooked Time</th>
                                        <th>Pickup Time</th>
                                        <th>Expiry Time</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i=1;
                                        $sel="SELECT * FROM `request`";
                                        $qry=mysqli_query($con,$sel);
                                        while($row=mysqli_fetch_array($qry)){
                                     ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['r_id'];?></td>
                                        <td><?php echo $row['h_id']; ?></td>
                                        <td><?php echo $row['v_id']; ?></td>
                                        <td><?php echo $row['ngo_id']; ?></td>
                                        <td><?php echo $row['r_date']; ?></td>
                                        <td><?php echo $row['food_name']; ?></td>
                                        <td><?php echo $row['food_type']; ?></td>
                                        <td><?php echo $row['food_qty']; ?></td>
                                        <td><?php echo $row['cooked_time']; ?></td>
                                        <td><?php echo $row['pickup_time']; ?></td>
                                        <td><?php echo $row['expiry_time']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td>
                                           <!--  <a href="index.php?page=request_form&request_id=<?php echo $row['r_id'] ?>" class="btn btn-info">Update</a>
                                            | -->
                                            <a href="index.php?page=request_action&action=delete&request_id=<?php echo $row['r_id']; ?>" class="btn btn-danger">Delete</a></td>
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
