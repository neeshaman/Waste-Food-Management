                    <div class="span12">
                        <div class="content">

                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                       Feedback DataTables</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                        width="100%">
                                     <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>f_Id</th>
                                        <th>h_Id</th>
                                        <th>n_Id</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i=1;
                                        $sel="SELECT * FROM `feedback`";
                                        $qry=mysqli_query($con,$sel);
                                        while($row=mysqli_fetch_array($qry)){
                                     ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['f_id'];?></td>
                                        <td><?php echo $row['h_id'];?></td>
                                        <td><?php echo $row['n_id'];?></td>
                                        <td><?php echo $row['f_name']; ?></td>
                                        <td><?php echo $row['f_subject']; ?></td>
                                        <td><?php echo $row['f_message']; ?></td>
                                        <td><?php echo $row['f_date']; ?></td> 
                                        <td>
                                             
                                            <a href="index.php?page=feedback_action&action=delete&feedback_id=<?php echo $row['f_id']; ?>" class="btn btn-danger">Delete</a>
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
