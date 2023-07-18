<html>
<head>
<title>Index2</title>
<link rel = "icon" href = "images/final.png" 
        type = "image/x-icon">
 <link rel="stylesheet" href="alpha2.css">
 		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
 
 
 	<script type="text/javascript">
    $(function () {
        $("#ddlPassport").change(function () {
            if ($(this).val() == "Faculty") {
                $("#dep").show();
 $("#roll").hide();
				
            } 
			else {
                $("#roll").show();
 $("#dep").hide();
				
            }
        });
    });
</script>


 </head>
<body>

<h1>DEN</h1>

<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Log in </label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        
		<div class="login-form">
		<form  method="post" action="login.php">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Email</label>
					<input id="mail" name="mail" type="text" class="input">
				</div>
                
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" name="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				</form>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
			
			
			<form name="Regform" method="post" action="registerback.php">
			<div class="sign-up-htm">
			<div class="group">
					<label for="name" class="label">Name</label>
					<input id="name" name="name" type="name" placeholder="Name" class="input"  required>
				</div>
				<div class="group">
					<label for="" class="label">Email</label>
					<input onkeyup="check()" id="email" name="email" type="text" placeholder="E-mail" class="input"  required>

				</div>
                <div class="error-text">Please Enter Valid Email</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="password" type="password" class="input" data-type="password" placeholder="Password"  required>
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" name="repassword"  type="password" class="input" data-type="password" placeholder="Repeat password"  required>
				</div>
				<div class="group">
					<label for="pass" class="label">Phone No.</label>
					<input id="pass" type="text" name="phone" class="input" placeholder="Number"  required>
				</div>
				<div class="group">
					<label for="pass" class="label">Role</label>
					<select class="select" class="option" id="ddlPassport" value="ddlPassport" name="ddlPassport"  required>
					<option class="option" value="">Role</option>
					<option class="option" value="Faculty">Faculty</option>
					<option value="Student">Student</option>
					</select>
					
					<div class="group" id="dep" style="display: none">
					<label for="pass"  class="label">Department<label>
					<input id="pass" type="text" name="dep" class="input" data-type="text" placeholder="Department" >
				</div> 
				
				
					<div class="group" id="roll" style="display: none">
					<label for="pass"   class="label">Roll number<label>
					<input id="pass" type="text" name="roll" class="input" data-type="text" placeholder="Roll Number"  > 
				</div>
				
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div></form>

                
                <script>
                    const email = document.querySelector("#email");
                    const error = document.querySelector(".error-text");
                    const btn = document.querySelector("button");
                    let regExp = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
                    function check() {
                    if(email.value.match(regExp)){
                        email.style.borderColor = "#27ae60";
                        error.style.display = "none";
                    }else{
                        email.style.borderColor = "#FF0000";
                        error.style.display = "block";
                    }
                    if(email.value== ""){
                        email.style.borderColor = "lightgrey";
                        error.style.display = "none";
                    }
                }
                </script>

				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>