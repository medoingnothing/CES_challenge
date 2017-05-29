<!DOCTYPE HTML>
<html>
	<head>
	
	<link rel="stylesheet" href="<?php echo base_url('inc/css/style.css'); ?>" />
	
	
	</head>
	
	<body>
	
		<div class="form-style-5">
	
		<h1 style="text-align: center;">Registration</h1>
		
		<?php echo validation_errors(); ?>
		
		
		<?php 
		
		$attributes = array(
			'id' => 'registrationForm'
		);
		
		echo form_open('Registration/checkRegistration', $attributes);
		?>
		
		<div id="error_banner" style="width: 100%; background-color:red; display: none;">
			<p id="error_message" style="text-align:center; font-size: 30px;">Error</p>
		</div>
		
		<fieldset>
		Name:<br/>
		<input type="text" id="name" name="name" /><br/>
		Date of Birth:<br/>
		<input type="date" id="dob" name="dob" class="required date" /><br/>
		Email:<br/>
		<input type="email" id="email" name="email" class="required email" /><br/>
		Favorite Color:<br/>
		<input type="text" id="fav_color" name="fav_color" /><br/>
		</fieldset>
		<input type="submit" value="Submit" /><br/>
		
		<input type="button" id="btn_ajax" style="background-color: red;" value="Submit via Ajax">
		
		</form>
		
		</div>
		

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
	
	
	<script>
		$(document).ready(function(){
			
			
			//when submitted via ajax 
			//check to make sure no empty fields
			$('#btn_ajax').click(function(event){
				event.preventDefault();
				var name = $('#name').val();
				var dob = $('#dob').val();
				var email = $('#email').val();
				var fav_color = $('#fav_color').val();
				
				if(name == ''){
					alertBanner('name');
				}
				else if(dob == ''){
					alertBanner('date of birth')
				}
				else if(email == ''){
					alertBanner('email');
				}
				else if(fav_color == ''){
					alertBanner('favorite color');
				}
				else{
					$.ajax({
						type:'POST',
						url:'<?php echo site_url('Ajax/register');?>',
						async: false,
						data:{name: name, dob:dob, email:email, fav_color:fav_color},
						success:function(html){
							window.location.href = '<?php echo site_url('Home/'); ?>';
						}
					});
				}
					
				return false;
			});
			
			$('#registrationForm').validate();
		});
		
		
		//display alert message with respect to empty field
		function alertBanner(str){
			var str = 'Please enter your '  + str;
			$('#error_banner').css('display', 'block');
			$('#error_message').html(str);
		}
		
		</script>
	
	</body>

</html>