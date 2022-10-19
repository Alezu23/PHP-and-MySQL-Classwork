<!DOCTYPE html>
<html>
  <head>
  <form action ="confirmation.php" method = "POST">
    <title>Registration Form</title>
    
    <style>
      html, body {
      background-image: linear-gradient(lightblue, green);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
      background-size: 500px;
      }

     

      body, div, h1, form, input, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #666;
      }

      h1 {
      padding: 10px 0;
      font-size: 32px;
      font-weight: 300;
      text-align: center;
      }

      p {
      font-size: 12px;
      }

      hr {
      color: #a9a9a9;
      opacity: 0.3;
      }

      .main-block {
      max-width: 340px; 
      min-height: 460px; 
      padding: 10px 10px;
      margin: auto;
      border-radius: 5px; 
      border: solid 1px #ccc;
      box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
      background: #ebebeb; 
      }

      form {
      margin: 0 30px;
      }
      .account-type, .gender {
      margin: 15px 0;
      }

      input[type=radio] {
      display: none;
      }

      label#icon {
      margin: 0;
      border-radius: 5px 0 0 5px;
      }

      label.radio {
      position: relative;
      display: inline-block;
      padding-top: 4px;
      margin-right: 20px;
      text-indent: 30px;
      overflow: visible;
      cursor: pointer;
      }

      label.radio:before {
      content: "";
      position: absolute;
      top: 2px;
      left: 0;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: #1c87c9;
      }

      label.radio:after {
      content: "";
      position: absolute;
      width: 9px;
      height: 4px;
      top: 8px;
      left: 4px;
      border: 3px solid #fff;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
    
      input[type=radio]:checked + label:after {
      opacity: 1;
      }


      input[type=text], input[type=tel], input[type=email]{
      width: calc(100% - 30px);
      height: 36px;
      margin: 13px 0 0 5px;
      padding-left: 10px; 
      border-radius: 0 5px 5px 0;
      border: solid 1px #cbc9c9; 
      box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
      background: #fff; 
      }
      input[type=password] {
      margin-bottom: 10px;
      }

      #icon {
      display: inline-block;
      padding: 9.3px 15px;
      box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
      background: #1c87c9;
      color: #fff;
      text-align: center;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }

      button {
      width: 100%;
      padding: 10px 0;
      margin: 10px auto;
      border-radius: 5px; 
      border: none;
      background: #1c87c9; 
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      }
      button:hover {
      background: #26a9e0;
      }
    </style>
  </head>
  <body>
    <div class="main-block">
      <h1>Registration</h1>
      
      <form action="confirmation.php" method = "POST">
        <hr>
        <script>
        document.addEventListener("wheel", function(event){
        if(document.activeElement.type === "number" &&
           document.activeElement.classList.contains("noscroll"))
        {
            document.activeElement.blur();
        }
    });
       </script> 
        <input type="text" name="name" id="name" placeholder="Name" required/>
        
        <input type="text" name="address" id="name" placeholder="Address" required/>
        
        <input type="Email" name="email" id="name" placeholder="Email" required/>
        
        <input pattern="\d*" type="tel" class="noscroll" name="phone" id="phone" placeholder="Phone Number" minlength="11" maxlength="11"required/>

      
          
        <hr>
        <div class="gender">
          <input type="radio" value="Male" id="male" name="gender" checked/>
          <label for="male" class="radio">Male</label>
          <input type="radio" value="Female" id="female" name="gender" />
          <label for="female" class="radio">Female</label>
        </div>
        <hr>
        <!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Comments Form - Response</title>
    </head>

    <body>
    <form action = "confirmation.php" method= "POST">
          <div class="course">
            <legend>What kind of course would you like to choose?</legend>
            <input type="radio" value="Beginner" id="Beginner" name="course" checked/>
            <label for="Beginner" class="radio">Beginner</label>
            <br>
            <input type="radio" value="Intermediate" id="Intermediate" name="course" />
            <label for="Intermediate" class="radio">Intermediate</label>
            <br>
            <input type="radio" value="Advanced" id="Advanced" name="course"/>
            <label for="Advanced" class="radio">Advanced</label>
      <hr>
          
          
    </div>
</fieldset>
    <echo>In your opinion, was this form easy to complete?</echo>
    <dd><textarea rows = "10" cols = "25" name = "comment" id="comment" required></textarea></dd>
            
        <!--All PHP scripts need to go inside these tags-->
        <?php
            


        ?>
    </body>

</html>

        <div class="btn-block">
        <a href="confirmation.php"><button>Submit</button>
    </form>
          
</a>
        </div>
      </form>
    </div>
  </body>
</html>