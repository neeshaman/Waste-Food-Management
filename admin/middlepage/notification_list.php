                    <div class="span12">
                        <div class="content">

                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        DataTables</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                        width="100%">
                                     <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>notify_Id</th>
                                        <th>n_Id</th>
                                        <th>r_Id</th>
                                        <th>Msg type</th>
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i=1;
                                        $sel="SELECT * FROM `notification`";
                                        $qry=mysqli_query($con,$sel);
                                        while($row=mysqli_fetch_array($qry)){
                                     ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['notify_id'];?></td>
                                        <td><?php echo $row['n_id']; ?></td>
                                        <td><?php echo $row['r_id']; ?></td>
                                        <td><?php echo $row['msg_type']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                         
                                        <td>
                                            <a href="index.php?page=notification_form&notify_id=<?php echo $row['notify_id'] ?>" class="btn btn-info">Update</a>
                                            |
                                            <a href="index.php?page=notification_action&action=delete&notify_id=<?php echo $row['notify_id']; ?>" class="btn btn-danger">Delete</a></td>
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
