
<html>
  <head>
    <title>Home</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 

           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 

           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
  </head>
  <body >

    <div class="container" style="width:700px;">  
                <h3 align="center">Menu</h3><br />
                <div align="center">
             
              <button class="button" onclick="location.href='insert-menu.php';"><a >Insert new menu</a></button>
              <br>
              <br>

              </div>

                <div class="col-md-4">  
                   <!--   <form method="post" action="update-menu.php?id=<?php //echo $row['ProductID']?>';">   -->
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">

                          


                               <h4 class="text-info"></h4>

                               <!--display price-->
                               <h4 class="text-danger">RM </h4>
                               <h4 class="text-danger"></h4>
                               <h4 class="text-danger">Qty left: 5</h4>


                               <!-- <input type="number" name="quantity" class="form-control" value="1" min="1" max="10" /> -->

                               <!-- <input type="hidden" name="hidden_name" value="<?php //echo $row["name"]; ?>" /> -->

                               <!-- <input type="hidden" name="hidden_price" value="<?php //echo $row["price"]; ?>" /> -->

                               <button onclick="location.href='update-menu.php?id=">Update</button> 
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />   
               
                <br>
               
           </div>

          
           <br />  
      </body>  
 </html>


        <tr>
        
          <td></td>-
          <td></td>
          <td></td>
          <td></td>
          <td></td>

          <td><button onclick="location.href='update-menu.php?id=">Update</button></td>
           
        </tr>

              </table>
              <br>
              <div align="center">
             
             
              </div>
              <br>
            </div>
              
                <div id="footer" style="background-color: black;color: #f9cd01">
                  Copyright © Ain Zahirah Abdul Karim, 2021
                </div>
          </div>
    </div>
  </body>
</html>
