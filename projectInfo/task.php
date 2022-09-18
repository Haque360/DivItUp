<html>
    <!-- <head>
        <title>
            DivItup
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="myFunction.js"></script>
        <script src="http://www.w3schools.com/lib/w3data.js"></script>
        
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
      
        
        
    </head> -->
    <body onload="formInput()">
      
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: #076A96;">Task Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

              <?php
              echo'<form id="formId" method="get" name="form" action="taskStructure.php">
              <input type="text" id="taskId" name="data" hidden>
              <input id="subBut" type="submit">
              </form>';
               $currTask=Task::readTask($_GET['taskId'],$connect);

              ?>
                  
                <label>Summary</label><label style="color: red;">*</label><br>
                <textarea id="summary" name="summary" rows="2" cols="50" placeholder="Enter Summary" readonly>
                  <?php
                  echo $result->getSummary();
                  ?>
                    </textarea>

                <label >Description</label><br>
                 <textarea id="Description" name="Description" rows="2" cols="50" placeholder="Enter Description" readonly>
                 <?php
                  echo  $result->getDescription();
                  ?>
                </textarea>
                    
                

                <div>
                    <label >Deadline</label><br>
                    <label ><?php
                      echo "Date:".date('d-m-Y ',strtotime($result->getDeadline()))."<br>"; 
                      echo "Time:".date(' H:i:s',strtotime($result->getDeadline()))."<br>";
                  ?></label><br>
                    
                </div>
                <!-- <div> //Attachment kora lagbe
                    <label for="">Attachments</label><br>
                    <input type="file" id="myfile" name="myfile" readonly >
                </div> -->
                <div>
                    <label for="">Assignee</label><br>
                      <label><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage">Kazi Mohammad Fahmi</label>
                </div>




              </div>
              <div class="modal-footer">
               
              </div>
            </div>
          </div>
      
    </body>
</html>
