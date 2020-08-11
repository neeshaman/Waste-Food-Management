                    <div class="span12">
                        <div class="content">
                            <div class="module">
                                <div class="module-head">
                                    <h3>Visitor DataTable</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                        width="100%">
                                <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>visitor_Id</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Phone No</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                        <th>Food Qty</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i=1;
                                        $sel="SELECT * FROM `visitor`";
                                        $qry=mysqli_query($con,$sel);
                                        while($row=mysqli_fetch_array($qry)){
                                        $sel_visitor="SELECT * FROM `request` WHERE `v_id`='".$row['v_id']."'  ";
                                        $qry_visitor=mysqli_query($con,$sel_visitor);
                                        $row_visitor=mysqli_fetch_array($qry_visitor);
                                            
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['v_id'];?></td>
                                        <td><?php echo $row['v_name']; ?></td>
                                        <td><?php echo $row['v_address']; ?></td>
                                        <td><?php echo $row['v_city']; ?></td>
                                        <td><?php echo $row['v_phoneNo']; ?></td>
                                        <td><?php echo $row['v_email']; ?></td>
                                        <td><?php echo $row['v_date']; ?></td>
                                        <td><?php echo $row['v_foodqty']; ?></td>
                                        <td>

                                        <?php if($row_visitor['status']!='accept'){ ?>
                                           
                                            <a href="index.php?page=ngolist&v_id=<?php echo $row['v_id'];?>" class="btn btn-info">Forward</a>
                                            |
                                            <a href="index.php?page=visitor_action&action=delete&v_id=<?php echo $row['v_id']; ?>" class="btn btn-danger">Delete</a>
                                        </td>

                                        <?php }else{?>
                                            
                                            <h4 class="text-success">Request Submitted</h4>
                                            
                                        <?php } ?>
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
                    <!--/..span12-->