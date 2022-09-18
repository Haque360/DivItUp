<html>
    <head>
        <title>
            DivItup
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="../myFunction.js"></script>
        <script src="http://www.w3schools.com/lib/w3data.js"></script>
        
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@700&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script defer src="projectInfo\addMemberValidation.js"></script>
          
        
    </head>
    <body >
    <?php
        
    ?>
      

        <div class="tab">
            <button class="tablinks2" onclick="openSubTab(event, 'Team Overview')" id="defaultOpen2">Team Overview</button>
            <button class="tablinks2" onclick="openSubTab(event, 'Shifts')">Shifts</button>
            <button class="tablinks2" onclick="openSubTab(event, 'Active Status')">Active Status</button>
           
        </div> 
        <form action="projectInfo\addMember.php" id="addMemberForm" method="post">
            <label for="email" style = "color:red;font-size:12px" id = "emailErrorMessage"></label>
            <input type="email" id="memberEmail" class="memberEmail" placeholder="Enter Email" name="memberEmail"/>
            <input type="hidden" value = "<?php echo $eventId; ?>"id="eventId" name="eventId"/>
            <label for="signUpButton" style = "color:red;font-size:12px" id = "emptyFieldsMessage" style="text-align: center"></label>
            <button type="submit" class="btn btn-primary" id = "addMemberButton">
              Add 
             </button>
          </form>
                

        <div id="Team Overview" class="tabcontent2" >
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Team Member</th>
                    <th scope="col">Department</th>
                    <th scope="col">Attendance</th>
                    <th scope="col">Total Tasks Assigned</th>
                  </tr>
                </thead>
                <tbody>
                  <tr onclick="window.location='../index.php'">
                    <td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage">Shahil Yasar Haque</td>
                    <td>Dev</td>
                    <td>10/12</td>
                    <td>3</td>
                  </tr>
                  <tr onclick="window.location='../index.php'">
                    <td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage">Kazi Mohammad Fahmi</td>
                    <td>HR</td>
                    <td>12/12</td>
                    <td>2</td>
                  </tr>
                  <tr onclick="window.location='../index.php'">
                    <td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage">Eashrat Jahan Anne</td>
                    <td>PR</td>
                    <td>11/12</td>
                    <td>3</td>
                  </tr>
                  
                </tbody>
              </table>
        </div>

        <div id="Shifts" class="tabcontent2">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Team Member</th>
                    <th scope="col">Start Shift</th>
                    <th scope="col">End Shift</th>
                  </tr>
                </thead>
                <tbody>
                  <tr onclick="window.location='../index.php'">
                    <td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage">Shahil Yasar Haque</td>
                    <td>00:00</td>
                    <td>00:00</td>
                  </tr>
                  <tr onclick="window.location='../index.php'">
                    <td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage">Kazi Mohammad Fahmi</td>
                    <td>00:00</td>
                    <td>00:00</td>
                  </tr>
                  <tr onclick="window.location='../index.php'">
                    <td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage">Eashrat Jahan Anne</td>
                    <td>00:00</td>
                    <td>00:00</td>
                  </tr>
                  
                </tbody>
              </table>
        </div>

        <div id="Active Status" class="tabcontent2">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Team Member</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr onclick="window.location='../index.php'">
                    <td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage">Shahil Yasar Haque</td>
                    <td>Active</td>
                  </tr>
                  <tr onclick="window.location='../index.php'">
                    <td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage">Kazi Mohammad Fahmi</td>
                    <td>On Leave</td>
                  </tr>
                  <tr onclick="window.location='../index.php'">
                    <td><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage">Eashrat Jahan Anne</td>
                    <td>Inactive</td>
                  </tr>
                  
                </tbody>
              </table>
        </div>
      
    </body>
</html>
