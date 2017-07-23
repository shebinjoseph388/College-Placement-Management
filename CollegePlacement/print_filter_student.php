<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php 
$conn = new PDO('mysql:host=localhost;dbname=placement', 'root', '');
//$get_id	= $_GET['tc_id'];
$id	= $_GET['id'];
		  $class	= $_GET['class'];
		 $sslc	= $_GET['sslc'];
		 $plustwo	= $_GET['plustwo'];
	$post_id	= $_GET['post_id'];
 	 $degree	= $_GET['degree'];
		 $ug	= $_GET['degree'];
		 $pg	= $_GET['pg'];
		 $backlogug =$_GET['backlogug'];
		  $backlogpg =$_GET['backlogpg']; ?>
    <body style = "background-image:url(nehadmin/images/index.jpg);">
		<?php // include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php //include('class_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
						<div class="pull-right">
						
							<a id="print" onClick="window.print()"  class="btn btn-success"><i class="icon-print"></i> Print Student List</a>
                                                             <a onClick="window.open('Filter-Student-Excel<?php echo '?id='.$id?>&<?php echo 'post_id='.$post_id?>&<?php echo 'class='.$class?>&<?php echo 'sslc='.$sslc?>&<?php echo 'plustwo='.$plustwo?>&<?php echo 'degree='.$degree?>&<?php echo 'pg='.$pg?>&<?php echo 'backlogug='.$backlogug?>&<?php echo 'backlogpg='.$backlogpg; ?>')"  class="btn btn-success"><i class="icon-download icon-large"></i></i> Download In Excel</a>

                            <a onClick="window.open('Print-Filter-Record<?php echo '?id='.$id?>&<?php echo 'post_id='.$post_id?>&<?php echo 'class='.$class?>&<?php echo 'sslc='.$sslc?>&<?php echo 'plustwo='.$plustwo?>&<?php echo 'degree='.$degree?>&<?php echo 'pg='.$pg?>&<?php echo 'backlogug='.$backlogug?>&<?php echo 'backlogpg='.$backlogpg; ?>')"  class="btn btn-success"><i class="icon-list"></i> Print To PDF</a>
                            
						</div>
						<?php include('my_students_breadcrums.php'); ?>
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-right">
                                <?php
					if($backlogug =='yes' && $backlogpg =='no'){
	

	$query = $conn->query("SELECT * FROM placementform JOIN student_placementReg on placementform.student_id = student_placementReg.RegNo
					where (placementReg_id ='$post_id')&& (department_id ='$class')&&(sslc >= '$sslc') && (plustwo >= '$plustwo') && (degree >= '$degree' )&& (pg >= '$pg')&& (backlogug ='no')") or die(mysql_error());
							//$count = $query->rowcount();
	}
else if($backlogug =='no' && $backlogpg =='yes'){
	
	$query = $conn->query("SELECT * FROM placementform JOIN student_placementReg on placementform.student_id = student_placementReg.RegNo
					where (placementReg_id ='$post_id')&& (department_id ='$class')&&(sslc >= '$sslc') && (plustwo >= '$plustwo') && (degree >= '$degree' )&& (pg >= '$pg')&& (backlogpg ='no')") or die(mysql_error());
							//$count = $query->rowcount();
	}
else if($backlogug =='yes' && $backlogpg =='yes'){

	$query = $conn->query("SELECT * FROM placementform JOIN student_placementReg on placementform.student_id = student_placementReg.RegNo
					where (placementReg_id ='$post_id')&& (department_id ='$class')&&(sslc >= '$sslc') && (plustwo >= '$plustwo') && (degree >= '$degree' )&& (pg >= '$pg')&& (backlogug ='no')&& (backlogpg ='no')") or die(mysql_error());
							//$count = $query->rowcount();
	}
else{
						
						 	$query = $conn->query("SELECT * FROM placementform JOIN student_placementReg on placementform.student_id = student_placementReg.RegNo
					where (placementReg_id ='$post_id')&& (department_id ='$class')&&(sslc >= '$sslc') && (plustwo >= '$plustwo') && (degree >= '$degree' )&& (pg >= '$pg')") or die(mysql_error());
							
}

		
		//$query = $conn->query("SELECT * FROM placementform 
				//	where (department_id ='$class')&&(sslc >= '$sslc') && (plustwo >= '$plustwo') && (degree >= '$degree' )&& (pg >= '$pg')") or die(mysql_error());
		 
						$count = $query->rowcount();
						
		// $query =mysql_query("SELECT * FROM placementform 
				//	where ((department_id ='$id')&&(sslc >= '$sslc') && (plustwo >= '$plustwo') && (degree >= '$degree' )&& (pg >= '$pg'))") or die(mysql_error());
		 
	//}
	
	
				//$row = mysql_fetch_array($query);
							//$result = mysql_query($query);
							//confirm_query($result);
							//$count = mysql_num_rows($result);
		?>				
        
    
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
						
												<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
							
										<thead>
										        <tr>
                                                <th>RegisterNo</th>
												<th>Firstname</th>
												
												</tr>
												
										</thead>
										<tbody>
											
												<?php
														
														while($row = $query->fetch()){
														
														?>                          
										<tr id="del<?php echo $id; ?>">
									
										 <td><?php echo $row['RegNo']; ?></td> 
		<td><?php echo $row['s_name']; ?></td> 
                                         
             
                                </tr>
                         
						 <?php } ?>
						   
                              
										</tbody>
									</table>
										
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php //include('footer.php'); ?>
        </div>
		<?php //include('script.php'); ?>
    </body>
</html>