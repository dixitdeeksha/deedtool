<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css" />
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/4e46bd4023.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="createpost2.css">
  <title>Document</title>
</head>

<body>

  <header>

    <div>
      <h1>Den</h1>
      <!--<h2>Home</h2>-->
    </div>
    

    <!--<div class="profilepic">
      <img src="Itachi2.webp" alt="jpg">
    </div>-->

    <div class="logo">
      <img src="Den 2.png" alt="png">
    </div>
  </header>








  <section class="mainbody">
  <nav>
      <ul>
       <a href="Home2.php"> <li>
          <div class="home-icon">
            <div class="roof">
              <div class="roof-edge"></div>
            </div>
            <div class="front"></div>
          </div>
        </li></a>
        <a href="yourpost2.php"><li>
          <div class="about-icon">
            <div class="head">
              <div class="eyes"></div>
              <div class="beard"></div>
            </div>
          </div>
        </li></a>
       <a href="createpost2.php"> <li>
          <div class="work-icon">
            <div class="paper"></div>
            <div class="lines"></div>
            <div class="lines"></div>
            <div class="lines"></div>
          </div>
        </li></a>
        <a href="profile2.php"><li>
          <div class="mail-icon">
            <div class="mail-base">
              <div class="mail-top"></div>
            </div>
          </div>
        </li></a>

        <a href="logout.php">
        <li>
          <div class="about-icon">
            <div class="head">
              <div class="eyes"></div>
              <div class="beard"></div>
            </div>
          </div>
        </li>
        </a>
        
      </ul>
    </nav>


<script type="text/javascript">
    $(function () {
        $("#ddlPassport").change(function () {
            if ($(this).val() == "Achivement_Update") {
                $("#dvPos").show();
				$("#dvcLink").show();
$("#dvnMem").hide();
$("#dvskillr").hide();
            } else if($(this).val() == "Team_Requirment"){
				$("#dvnMem").show();
				$("#dvskillr").show();
				$("#dvPos").hide();
				$("#dvcLink").hide();
			}
			else {
               $("#dvnMem").hide();
				$("#dvskillr").hide();
				$("#dvPos").hide();
				$("#dvcLink").hide();
				
            }
        });
    });
</script>



    <div class="row">
    <div class="col-md-12">
      <form action="post_back.php" method="post">
      
        <fieldset>
          <label for="competition name">Competition Name:</label>
          <input type="text" id="name" name="cname">
        
         
       
          <label for="level">link:</label>
          <input type="text" id="text" name="link">

          
  <label for="posttype">Level</label>
<select id="level" value="level" name="level">
            <optgroup label="Type of post">
		<option value=""></option>
              <option value="International">Nations</option>
              <option value="National">National</option>
              <option value="State">State</option>
	<option value="District">District</option>
<option value="Inter-College">Inter College</option>
          </select>
          <label for="prize">Prize:</label>
          <input type="text" id="text" name="prize">

          <label for="posttype">Type of Post:</label>

          <select id="ddlPassport" value="ddlPassport" name="ddlPassport">
            <optgroup label="Type of post">
<option value=""></option>
              <option value="Achivement_Update">Achivement Update</option>
              <option value="Team_Requirment">Team Requirment</option>
              <option value="Comptition_Update">Competition Update</option>
          </select>
       <p id="dvPos" style="display: none">
    Position:
    <input type="text" name="dvPos" id="dvPos" />
</p>


<p id="dvcLink" style="display: none">
    Certificate Link:
    <input type="text"  name ="cLink" id="cLink" />
</p>
<div id="dvnMem" style="display: none">
    No. of Team members:
    <input type="text"  name ="dvnMem" id="dvnMem" />
</div>
<div id="dvskillr" style="display: none">
   Skill required:
    <input type="text"  name ="dvskillr" id="dvskillr" />
</div>
          
        </fieldset>
       
        <button type="submit">SENT</button>
        
       </form>
        </div>
      </div>
    
</body>

</html>









