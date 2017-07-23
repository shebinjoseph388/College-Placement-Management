<?php include('header.php');
error_reporting('E_ALL^E_NOTICE');

 ?>
 <link rel="stylesheet" href="CSS/validationEngine.jquery.css" type="text/css"/>
 <script src="JS/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
		<script src="JS/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
		<script>
			jQuery(document).ready(function() {
				// binds form submission and fields to the validation engine
				jQuery("#formID").validationEngine({
					autoHidePrompt:true,
					prettySelect : true,
					useSuffix: "_chzn"

					//promptPosition : "bottomLeft"
				});
				$("#country").chosen({
					allow_single_deselect : true
				});
			});
		</script>
        
        <script>
		jQuery(document).ready(function(){
			jQuery("#formID").validationEngine();

			$("#formID").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) })
		});
		</script>
        
        
<script type="text/javascript">
function validateForm()
{
if (document.signin_student.condition.checked == false)
{
alert ('pls. agree the term and condition of the Centre for Placements and Corporate Relations(CPCR)');
return false;
}
else
{
return true;
}
}
</script>
  <body id="login">
    <div class="container">
	<div class="row-fluid">
	<div class="span6">
		<div class="title_index">
				<?php include('title_index.php'); ?>
		</div>
	</div>
	<div class="span6">
		<div class="pull-right">
				<?php include('student_signin_form.php'); ?>
		</div>
	</div>
    </div>
	<div class="row-fluid">
		<div class="span12">
			<div class="index-footer">
				<?php include('link.php'); ?>
			</div>
		</div>
	</div>
		   <!-- /container -->
		<?php include('footer.php'); ?>
    </div> <!-- /container -->
<?php include('script.php'); ?>
  </body>
</html>