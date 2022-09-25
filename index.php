
<!--
 ***   ***        ****             *   *          ***   ***
***** *****       *   *            *   *         ***** *****
***********       *   *            ** **         ***********
 *********        ****     *****   * * *          *********                                            
  *******         * *              *   *           *******
   *****          *  *             *   *            *****
    ***           *   *            *   *             ***
     *                                                *
-->
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
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script> 
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
                                        <?php include "dis.php";?>
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
