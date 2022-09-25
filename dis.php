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
                 <table class="datatable">

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
                       <div class="datatable-container" align=""center>
                         <div class="header-tools">  
                          <div class="tools">
                         <ul>
                             <div class="popup" id="popup-2">
                       <div class="content">
                        <div class="close-btn" onclick="togglePopup2()">
                         ×</div>
                         
                    <h1>ID : <?php echo $pa["id"]; ?></h1> 
                        <p>Name :  <?php echo $pa["fullname"]; ?></p><hr>
                      <p>Age :  <?php echo $pa["age"]; ?></p><hr>
                      <p>The appointment :<?php echo $pa["da"]; ?></p><hr>
                      <p>address :<?php echo $pa["addr"]; ?></p><hr>
                      <p>Phone Number :<?php echo $pa["phone"]; ?></p><hr>

                      </div><li>
                      <button onclick="togglePopup2()"  class="material-icons">  <i class="material-icons">veiw</i></button>
                      <li></div>
                   </div>
                   </td>
                   <td>   
                       <div class="datatable-container" align=""center>
                         <div class="header-tools">  
                          <div class="tools">
                         <ul>
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
                      <li>
                               <button type="submit" name="upd" value="<?php echo $pa["id"]; ?>">
                                <i class="material-icons">delete</i>
                              </button>
                   </li>                   </div>
                       </form>
                       </div>
                       <li>
                      <button onclick="togglePopup3()"  class="material-icons">update</button>
                   </li>
                   </div>
                   </div>
                   
                   </td>
            
                   <td>   
                       <div class="datatable-container" align=""center>
                         <div class="header-tools">  
                          <div class="tools">
                         <ul>
                          
                            <form action="del.php" method="post">
                             <li>
                               <button type="submit" name="del" value="<?php echo $pa["id"]; ?>">
                                <i class="material-icons">delete</i>
                              </button>
                   </li>
                   </form>  </div></div>
                   </td>
                        </div>
                          </div></div></td>
                          
                      
                     </tr>
               
                  
               
                     <?php } ?>
                   </tbody>
                 </table>
               
              