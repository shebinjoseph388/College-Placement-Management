<?php include('header_dashboard.php');
error_reporting('E_ALL^E_NOTICE');
//include('dbcon.php'); ?>
<?php //require_once("includes/functions.php");?>
<?php //include('session.php'); ?>
<?php 
 include('session.php');
 executiveconfirm_logged_in(); 
//$get_id = $_GET['id'];
$get_id	= $_POST['tc_id'];
$post_id	= $_POST['post_id'];
$conn = new PDO('mysql:host=localhost;dbname=placement', 'root', '');



 ?>
    <body  style = "background-image:url(nehadmin/images/index.jpg);">
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('filter_link1.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                        
                        <?php
				error_reporting('E_ALL^E_NOTICE');	
		  $sslc = $plustwo =$degree =$pg=0;
		 $id	= $_POST['id'];
		  $class	= $_POST['class'];
		 $get_id	= $_POST['tc_id'];
		 $nobacklog=implode(',',$_POST['nobacklog']);
		 //if($nobacklog[0]==''){$nobacklog[0]='n';}else{$nobacklog[0]='r';}
	
		  if($nobacklog=='ug'){$backlogug ='yes' ;$backlogpg ='no' ;}
		 else if($nobacklog=='pg'){$backlogug ='no' ;$backlogpg ='yes' ;}
		 else if($nobacklog=='ug,pg'){$backlogug ='yes' ;$backlogpg ='yes' ;}
		 else{$backlogug ='no' ;$backlogpg ='no' ;}
		 //$nobacklog[1]==',';
		 //if($nobacklog[2]==''){$backlogpg ='no' ;}
		// else{$backlogpg ='yes' ;}
		
		  	
	 if($_POST['sslc'] ==''){ $sslc =0;}
		 else{
	$sslc	= $_POST['sslc'];}
	//if($sslc == ' '){$sslc =0;}
	
		
	 if($_POST['plustwo'] =='') {$plustwo =0;}
	 else{
	$plustwo	= $_POST['plustwo'];}
	
	if($_POST['degree'] =='') {$degree =0;}
	else{
	$degree	= $_POST['degree'];}
	
	if($_POST['pg'] ==''){ $pg =0;}
	else{
	$pg	= $_POST['pg'];
	}?>

                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i>  Eligible Student List</div>
                                <div class="muted pull-right">
                                <?php
								if($backlogug =='yes' && $backlogpg =='yes'){
	
	$query = $conn->query("SELECT * FROM placementform JOIN student_placementReg on placementform.student_id = student_placementReg.RegNo
					where (placementReg_id ='$post_id')&& (department_id ='$class')&&(sslc >= '$sslc') && (plustwo >= '$plustwo') && (degree >= '$degree' )&& (pg >= '$pg')&& (backlogug ='no')&& (backlogpg ='no')") or die(mysql_error());
							//$count = $query->rowcount();
	}
else if($backlogug =='no' && $backlogpg =='yes'){
	
	$query = $conn->query("SELECT * FROM placementform JOIN student_placementReg on placementform.student_id = student_placementReg.RegNo
					where (placementReg_id ='$post_id')&& (department_id ='$class')&&(sslc >= '$sslc') && (plustwo >= '$plustwo') && (degree >= '$degree' )&& (pg >= '$pg')&& (backlogpg ='no')") or die(mysql_error());
							//$count = $query->rowcount();
	}
else if($backlogug =='yes' && $backlogpg =='no'){
	

	$query = $conn->query("SELECT * FROM placementform  JOIN student_placementReg on placementform.student_id = student_placementReg.RegNo
					where (placementReg_id ='$post_id')&& (department_id ='$class')&&(sslc >= '$sslc') && (plustwo >= '$plustwo') && (degree >= '$degree' )&& (pg >= '$pg')&& (backlogug ='no')") or die(mysql_error());
							//$count = $query->rowcount();
	}


else {
				
						 	$query = $conn->query("SELECT * FROM placementform JOIN student_placementReg on placementform.student_id = student_placementReg.RegNo
					where (placementReg_id ='$post_id')&&(department_id ='$class')&&(sslc >= '$sslc') && (plustwo >= '$plustwo') && (backlogug='no') &&(degree >= '$degree' )&& (pg >= '$pg')") or die(mysql_error());
					
							
}
$count = $query->rowcount();


						?>
									Number of Students: <span class="badge badge-info"><?php  echo $count;  ?></span>
                                   <!-- <a href="#" onClick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a> <?php echo '?id='.$get_id ?>&<?php echo 'post_id='.$id ?>
                                    --><a onClick="window.open('Print-Student-Filter<?php echo '?id='.$get_id?>&<?php echo 'post_id='.$post_id?>&<?php echo 'id='.$id?>&<?php echo 'class='.$class?>&<?php echo 'sslc='.$sslc?>&<?php echo 'plustwo='.$plustwo?>&<?php echo 'degree='.$degree?>&<?php echo 'pg='.$pg?>&<?php echo 'backlogug='.$backlogug?>&<?php echo 'backlogpg='.$backlogpg; ?>')"  class="btn btn-success"><i class="icon-list"></i> Student List</a>
    
										<!--<a href="Placement-Panel<?php //echo '?id='.$get_id; ?>"class="btn btn-info"><i class="icon-arrow-left"></i> Back</a><!--<button style="margin-left:0px; margin-bottom:0px;" class="btn btn-info" onClick="goBack()"><i class="icon-arrow-left"></i> Back</button>-->
                                       
								</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv" >
								
									<?php
									 include('memberlist.php'); ?>
                                    
      
    
    
    
    
                                    
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        
                           
								</div>
                            </div>
                            <div class="block-content collapse in">
                           

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