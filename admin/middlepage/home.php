<?php
    $select="SELECT * FROM `hotel` ";
    $qry=mysqli_query($con,$select);
    $count=mysqli_num_rows($qry);
    $row=mysqli_fetch_assoc($qry);

    $select_ngo="SELECT * FROM `ngo` ";
    $qry_ngo=mysqli_query($con,$select_ngo);
    $count_ngo=mysqli_num_rows($qry_ngo);
    $row_ngo=mysqli_fetch_assoc($qry_ngo);

    $select_request="SELECT * FROM `request` ";
    $qry_request=mysqli_query($con,$select_request);
    $count_request=mysqli_num_rows($qry_request);
    $row_request=mysqli_fetch_assoc($qry_request);

    $select_visitor="SELECT * FROM `visitor` ";
    $qry_visitor=mysqli_query($con,$select_visitor);
    $count_visitor=mysqli_num_rows($qry_visitor);
    $row_visitor=mysqli_fetch_assoc($qry_visitor);

    $select_contact="SELECT * FROM `contact` ";
    $qry_contact=mysqli_query($con,$select_contact);
    $count_contact=mysqli_num_rows($qry_contact);
    $row_contact=mysqli_fetch_assoc($qry_contact);
?>

                    <div class="span12" >
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span4"><i class="fas fa-hotel"></i><b><?php echo $count;?></b>
                                        <p class="text-muted">
                                           Hotels</p>
                                    </a><a href="#" class="btn-box big span4"><i class="fas fa-hand-holding-heart"></i><b><?php echo $count_ngo;?></b>
                                        <p class="text-muted">
                                            Ngo</p>
                                    </a><a href="#" class="btn-box big span4"><i class="fas fa-bell"></i><b><?php echo $count_request; ?></b>
                                        <p class="text-muted">
                                            Total Request</p>
                                    </a>
                                </div>
                                <div class="btn-box-row row-fluid" style="margin-left: 220px;">
                                    
                                    <a href="#" class="btn-box big span4"><i class="icon-envelope"></i><b><?php echo $count_contact;?></b>
                                        <p class="text-muted">
                                            Contact Us</p>
                                    </a>
                                    <a href="#" class="btn-box big span4"><i class=" icon-group"></i><b><?php echo $count_visitor;?></b>
                                        <p class="text-muted">
                                          Visitors</p>
                                    </a>  
                            </div>
                        </div>
                    </div>