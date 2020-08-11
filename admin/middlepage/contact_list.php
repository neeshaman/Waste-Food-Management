                    <div class="span12">
                        <div class="content">

                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                       Contact DataTable</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                        width="100%">
                                     <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>contact_Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i=1;
                                        $sel="SELECT * FROM `contact`";
                                        $qry=mysqli_query($con,$sel);
                                        while($row=mysqli_fetch_array($qry)){
                                     ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['contact_id'];?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['subject']; ?></td> 
                                        <td><?php echo $row['message']; ?></td> 
                                        <td><?php echo $row['created_date']; ?></td> 
                                        <td>
                                            
                                            <a href="index.php?page=contact_action&action=delete&contact_id=<?php echo $row['contact_id']; ?>" class="btn btn-danger">Delete</a></td>
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
