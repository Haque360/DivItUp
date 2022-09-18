<html>
    <!-- <head>
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

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
        
        
    </head> -->
    <body >
      
        <div class="tab">
            <button class="tablinks2" onclick="openSubTab(event, 'Budget')" id="defaultOpen3">Budget</button>
            <button class="tablinks2" onclick="openSubTab(event, 'Expenditure')">Expenditure</button>
        </div>


        <div id="Budget" class="tabcontent2">
          <div></div>
            <div style="display: inline-Block;  width: 80%; ">
               <table class="table ">
                <thead>
                  <tr>
                    <th scope="col">Sl.</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Units</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr >
                    <td>1</td>
                    <td>Ribbons</td>
                    <td>10</td>
                    <td>100</td>
                    <td>1000</td>
                    <td>00/00/00</td>
                    <td><button class="fa-solid fa-pen cngbtn" type="button" data-toggle="modal" data-target="#exampleModal2"></button>
                      <button class="fa-solid fa-trash cngbtn" ></button>
                    </td>
                  </tr>
                  <tr >
                    <td>2</td>
                    <td>Table Cloths</td>
                    <td>10</td>
                    <td>500</td>
                    <td>5000</td>
                    <td>00/00/00</td>
                  </tr>
                  <tr >
                    <td>3</td>
                    <td>Flowers</td>
                    <td>1000</td>
                    <td>10</td>
                    <td>10000</td>
                    <td>00/00/00</td>
                  </tr>
                  
                </tbody>
              </table>
              <hr>
              <button type="button" class="add" data-toggle="modal" data-target="#exampleModal2">Add Item +</button>
            </div>
            <div  style="display: inline-Block;">
              <h1 style="border: solid 1px lightgrey; color: black;"> <p>Total Budget:</p> 
                 <p> 16000 Tk.</p></h1>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Item Budget</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                    <div>
                      <label for="">Item Name</label><br>
                      <input type="text" id="Iname" name="Iname" style="width: 80%;"><br><br>
                  </div>
                  <div>
                    <label for="">Item unit Price</label><br>
                    <input type="text" id="budget" name="budget">
                </div>
                <div>
                  <label for="">Item Units</label><br>
                  <input type="text" id="units" name="units">
              </div>
              <div>
                <label for="">Date</label><br>
                <input type="date" id="bpd" name="bpd">
            </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>


        <div id="Expenditure" class="tabcontent2">
          <div style="display: inline-Block;  width: 80%; ">
            <table class="table ">
             <thead>
               <tr>
                 <th scope="col">Sl.</th>
                 <th scope="col">Item Name</th>
                 <th scope="col">Units</th>
                 <th scope="col">Unit Price</th>
                 <th scope="col">Total Price</th>
                 <th scope="col">Actual Price</th>
                 <th scope="col">Date</th>
                 <th scope="col">Net Balance</th>
               </tr>
             </thead>
             <tbody>
               <tr >
                 <td>1</td>
                 <td>Ribbons</td>
                 <td>10</td>
                 <td>100</td>
                 <td>1000</td>
                 <td>1500</td>
                 <td>00/00/00</td>
                 <td>-500</td>
                 <td><button class="fa-solid fa-pen cngbtn" type="button" data-toggle="modal" data-target="#exampleModal3"></button>
                  <button class="fa-solid fa-trash cngbtn" ></button></td>
               </tr>
               <tr >
                 <td>2</td>
                 <td>Table Cloths</td>
                 <td>10</td>
                 <td>500</td>
                 <td>5000</td>
                 <td>4500</td>
                 <td>00/00/00</td>
                 <td>+500</td>
                 <td><button class="fa-solid fa-pen cngbtn" type="button" data-toggle="modal" data-target="#exampleModal3"></button>
                  <button class="fa-solid fa-trash cngbtn" ></button></td>
               </tr>
               <tr >
                 <td>3</td>
                 <td>Flowers</td>
                 <td>1000</td>
                 <td>10</td>
                 <td>10000</td>
                 <td>15000</td>
                 <td>00/00/00</td>
                 <td>-5000</td>
               </tr>
               
             </tbody>
           </table>
           <hr>
           <button type="button" class="add" data-toggle="modal" data-target="#exampleModal3">Add Item +</button>
         </div>
         <div  style="display: inline-Block;">
           <h1 style="border: solid 1px lightgrey; color: black;"> <p>Total Budget:</p> 
              <p> 16000 Tk.</p><p style="font-size: 15px; color:#676767">Total Net Balance: -5000tk. </p></h1>

         </div>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Item Expense</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div>
                      <label for="">Item Name</label><br>
                      <input type="text" id="Iname" name="Iname" style="width: 80%;"><br><br>
                  </div>
                  <div>
                    <label for="">Item Unit Price</label><br>
                    <input type="text" id="budget" name="budget">
                </div>
                <div>
                  <label for="">Item Actual Unit Price</label><br>
                  <input type="text" id="expense" name="expense">
              </div>
                <div>
                  <label for="">Item Units</label><br>
                  <input type="text" id="units" name="units">
              </div>
              <div>
                <label for="">Date of Purchase</label><br>
                <input type="date" id="ipd" name="ipd">
            </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save</button>
                  </div>
              </div>
            </div>
          </div>

   
        </div>
      
    </body>
</html>
