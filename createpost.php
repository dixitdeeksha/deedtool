<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/4e46bd4023.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="createpost.css">
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
        <li>
          <div class="home-icon">
            <div class="roof">
              <div class="roof-edge"></div>
            </div>
            <div class="front"></div>
          </div>
        </li>
        <li>
          <div class="about-icon">
            <div class="head">
              <div class="eyes"></div>
              <div class="beard"></div>
            </div>
          </div>
        </li>
        <li>
          <div class="work-icon">
            <div class="paper"></div>
            <div class="lines"></div>
            <div class="lines"></div>
            <div class="lines"></div>
          </div>
        </li>
        <li>
          <div class="mail-icon">
            <div class="mail-base">
              <div class="mail-top"></div>
            </div>
          </div>
        </li>


        <li>
          <div class="about-icon">
            <div class="head">
              <div class="eyes"></div>
              <div class="beard"></div>
            </div>
          </div>
        </li>
      </ul>
    </nav>






    <div class="row">
    <div class="col-md-12">
      <form action="index.html" method="post">
      
        <fieldset>
          <label for="competition name">Competition Name:</label>
          <input type="text" id="name" name="user_name">
        
          <label for="link">Link:</label>
          <input type="url" id="mail" name="user_email">
       
          <label for="level">level:</label>
          <input type="text" id="text" name="user_password">

          <label for="prize">Prize:</label>
          <input type="text" id="text" name="user_password">

          <label for="posttype">Type of Post:</label>

          <select id="job" name="user_job">
            <optgroup label="Types">
              <option value="teamrequest">Team Request</option>
              <option value="achievementupdate">Achievement Update</option>
              <option value="competitonupdate">Competition Update</option>
          </select>
        
        
          
        </fieldset>
       
        <button type="submit">SENT</button>
        
       </form>
        </div>
      </div>
    
</body>

</html>









