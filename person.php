<html>
  <head>
    <title>DivItup</title>
    <title>DivItup</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="myFunction.js"></script>
    <script src="http://www.w3schools.com/lib/w3data.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

  </head>
  <body onload="onclick= openTab(event, 'Notice Board')">
    <div w3-include-html="navbar.php"></div>

    <script>
      w3IncludeHTML();
    </script>

    <!--Main Body-->
    <div id="main">
      <h2 style="color:#076A96">Account<button class="fa-solid fa-user-plus addpeepsbtn"></button></h2>
      <div class="column" style="width: 20%;">
        <img src="images/Ellipse 1.png" style="width: 140px; border-radius:50% ;border: 1px solid #676767;">
      </div>
        <div class="column" >
          <label style="color: #676767; font-size: 20px ;">Full Name</label><label style="color: red;">*</label><br>
          <input class="profIn" type="Fullname" name="Fullname" id="Fullname" ><br>
          <label style="color: #676767; font-size: 20px ;">Public Name</label><label style="color: red;">*</label><br>
          <input class="profIn" type="Pubname" name="Pubname" id="Pubname"><br>
          <label style="color: #676767; font-size: 20px ;">Job Title</label><label style="color: red;">*</label><br>
          <input class="profIn" type="jobTitle" name="jobTitle" id="jobTitle"><br>
          <label style="color: #676767; font-size: 20px ;">Department</label><br>
          <input class="profIn" type="department" name="department" id="department"><br>
          <label style="color: #676767; font-size: 20px ;">Company</label><br>
          <input class="profIn" type="company" name="company" id="company"><br>
          <label style="color: #676767; font-size: 20px ;">Based In</label><br>
          <input class="profIn" type="based" name="based" id="based"><br>
          <label style="color: #676767; font-size: 20px ;">Email</label><label style="color: red;">*</label><br>
          <input class="profIn" type="email" name="email" id="email"><br>
          <br>
        </div>

    </div>
  </body>
</html>
