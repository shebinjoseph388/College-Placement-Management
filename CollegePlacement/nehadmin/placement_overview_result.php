<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>

 

    <body id="studentTableDiv" style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('placement_link.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					   
					   <!-- breadcrumb -->
				
									
						 <!-- end breadcrumb -->
						
						
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-right"><a href="Placement-Panel<?php echo '?id='.$get_id; ?>"><i class="icon-arrow-left"></i> Back</a></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<?php
										$query1 = mysql_query("select * FROM placementReg")or die(mysql_error());
										$row1 = mysql_fetch_array($query1);
									
									?>
									<div class="alert alert-info">Register in : <?php echo $row1['company']; ?></div>
									
									<div id="">
  											
												
				<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
						
										<thead>
										        <tr>
												<th>Date Upload</th>
											
												<th>Company</th>
												<th>Submitted by:</th>
                                                <th>Department</th>
												<th></th>
												</tr>
												
										</thead>
										<tbody>
											
                              		<?php
										$query = mysql_query("select * FROM student_placementReg 
										LEFT JOIN student on student.student_id  = student_placementReg.student_id
										where placementReg_id = '$post_id'  order by placementReg_fdatein DESC")or die(mysql_error());
										while($row = mysql_fetch_array($query)){
										$id  = $row['student_placementReg_id'];
										//$studid  = $row['student_id'];
									?>                              
										<tr>
										 <td width="120"><?php echo $row['placementReg_fdatein']; ?></td>
                                         <td width="120"><?php  echo $row['RegNo']; ?></td>
                                         <td width="100"><?php echo $row['fdesc']; ?></td>                                                                        
                                         <td width="150"><?php echo $row['firstname']; ?></td>                                                                        
                                    <!--     <td><a href="<?php //echo $row['floc']; ?>"><i class="icon-download icon-large"></i></a></td>                                                                        -->
                                         
										 <form method="post" action="save_grade.php">
										 <input type="hidden" class="span4" name="id" value="<?php echo $id; ?>">
                                         <!-- <input type="hidden" class="span4" name="studid" value="<?php //echo $studid; ?>">-->
										 <input type="hidden" class="span4" name="post_id" value="<?php echo $post_id; ?>">
										 <input type="hidden" class="span4" name="get_id" value="<?php echo $get_id; ?>">
										<td width="190"> <input type="text" class="span4" name="grade1" value="<?php echo $row['grade']; ?>"></td>
                                       <td width="190">   <input type="text" class="span4" name="grade2" value="<?php echo $row['grade2']; ?>"></td>
                                         <td width="190">  <input type="text" class="span4" name="grade3" value="<?php echo $row['grade3']; ?>">
										 <button name="save" class="btn btn-success" id="btn_s"><i class="icon-save"></i> Save</button>
										 </form>
										 </td>                                                                        
                                </tr>
                         
						 <?php } ?>
					
                              
										</tbody>
									</table>
									</div>
								
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>

				
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>