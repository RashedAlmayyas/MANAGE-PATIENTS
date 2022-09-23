<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>MANAGE PATIENTS</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/table_style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>

         <div class="container">

                     <div class="row">
                        <div class="col-md-6">
                           <div class="container" >
                              <br><br><br><br><br><br><br>
                              <h1 class="banner_taital" >MANAGE PATIENTS</h1>
                              <p class="banner_text">Introducing patient management software for your clinic
    We wish you a good experience</p>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <br><br><br><br>
                           <div class="banner_img"><img src="images/banner-img.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>            
      </div>
      </div>
      <div class="protect_section layout_padding">
         <div class="container">
            <div class="row">
                  <div class="datatable-container">
                     <div class="header-tools">
                       <div class="tools">
                        <div class="popup" id="popup-1">
                           <div class="content">
                            <div class="close-btn" onclick="togglePopup()">
                             ×</div>
                             
                        <h1>ADD PATIENTS</h1> 
                        <form action="con.php" method="post">
                          <div class="input-field"><input placeholder="Full name" class="validate" name="fullname" type="text"  required></div>
                          <div class="input-field"><input placeholder="Age" class="validate" name="age" type="number"  required></div>
                          <div class="input-field"><input placeholder="Address" class="validate" name="addr" type="text"  required></div>
                          <div class="input-field"><input placeholder="date" class="validate" name="da" type="text"  required></div>
                          <div class="input-field"><input placeholder="Phone Number" class="validate" name="phone" type="number"  required></div>
                            <input class="second-button" type="submit" name="submit" value="Add">
                        
                           </form>
                             
                           </div>
                          </div>
                          <button onclick="togglePopup()" class="first-button" class="material-icons">ADD PATIENTS</button>
                        
                         
                       </div>
                   
                       <div class="search">
                         <input type="search" class="search-input" placeholder="Search..." />
                       </div>
                     </div>
                   
                     <table class="datatable">

                     <?php
    $servername = "";
    $username = "root";
    $password = "";
    $dbname = "manage patients";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT id, fullname, age, addr, da, phone FROM patient";
    $result = $conn->query($sql);
    $patient = $result->fetch_all(MYSQLI_ASSOC); ?>
                       <thead>
                         <tr>
                           <th>ID</th>
                           <th>full name</th>
                           <th>Date</th>
                           <th>Phone</th>
                           <th>Tools</th>
                    
                         </tr>
                       </thead>
                   
                       <tbody>
                       <?php foreach ($patient as $pa) { ?>
                       
                         <tr>
                          
                           <td><?php echo $pa["id"]; ?></td>
                           <td><?php echo $pa["fullname"]; ?></td>
                           <td><?php echo $pa["da"]; ?></td>
                           <td><?php echo $pa["phone"]; ?></td>

                    
                           <td>   
                          
                                 <div class="popup" id="popup-2">
                           <div class="content">
                            <div class="close-btn" onclick="togglePopup2()">
                             ×</div>
                             
                        <h1>ID : <?php echo $pa["id"]; ?></h1> 
                            <label ><h6>Name :</h6>  <?php echo $pa["fullname"]; ?></label><br><hr>
                          <label><h6>Age : </h6>  <?php echo $pa["age"]; ?></label><br><hr>
                          <label><h6>The appointment :</h6> <?php echo $pa["da"]; ?></label><br><hr>
                          <label><h6>address :</h6><?php echo $pa["addr"]; ?></label><br><hr>
                          <label><h6>Phone Number :</h6><?php echo $pa["phone"]; ?></label><hr>

                      
                           </div>
                          </div>
                          <button onclick="togglePopup2()"  class="material-icons">  <i class="material-icons">veiw</i></button>
                      
                       </div>
                       
                              <div class="popup" id="popup-3">
                           <div class="content">
                            <div class="close-btn" onclick="togglePopup3()">
                             ×</div>
                             
                        <h1>update PATIENTS <?php echo $pa["id"]; ?></h1> 
                        <form action="upd.php" method="post">
                          <div class="input-field"><input  class="validate" name="fullname" type="text"  ><?php echo $pa["fullname"]; ?></div>
                          <div class="input-field"><input class="validate" name="age" type="number"  ><?php echo $pa["age"]; ?></div>
                          <div class="input-field"><input class="validate" name="addr" type="text"  ><?php echo $pa["addr"]; ?></div>
                          <div class="input-field"><input  class="validate" name="da" type="text"  ><?php echo $pa["da"]; ?></div>
                          <div class="input-field"><input class="validate" name="phone" type="number"  ><?php echo $pa["phone"]; ?></div>
                            <input class="material-icons" type="submit" name="upd" value="update <?php echo $pa["id"]; ?>">
                        
                           </form>
                             
                           </div>
                          </div>
                          <button onclick="togglePopup3()" >update</button>
                        
                         
                       </div>
                       </div>
                         
                           
                              
                                <form action="del.php" method="post">
                                   <button type="submit" name="del" value="<?php echo $pa["id"]; ?>">
                                    <i class="material-icons">delete</i>
                                  </button>
                                  </div></div>
                        
                            </div>
                              </div></div></td>
                              
                          
                         </tr>
                   
                      
                   
                         <?php } ?>
                       </tbody>
                     </table>
                   
                   </div>  
               
               </div>
            </div>
          
         </div>
      </div>
<script>
 function togglePopup() {
 document.getElementById("popup-1")
  .classList.toggle("active");
}
function togglePopup2() {
 document.getElementById("popup-2")
  .classList.toggle("active");
}
function togglePopup3() {
 document.getElementById("popup-3")
  .classList.toggle("active");
}

</script>
   </body>
</html>