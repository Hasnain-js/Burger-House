<?php
require 'php/addproduct.php' 
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Burger House</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

  </head>
  <body style=" color: #3d2514">
      <!---Header Section-->
    <section>
        <div class="main" style="overflow: hidden; font-family: Bebas Neue !important;">
            <div class="container">
                <div class="row" id="navbar" >
                    <div class="col-sm-6">
                        <img src="Images\Logo.png" alt="logo" srcset="">
                    </div>
                    <div class="col-sm-6">
                        <p  class="text-right" ><span><img src="Images\car-icon.png" alt="car-icon"></span> Express Delivery +12 345 687 98</p>
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                              <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Menu</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Our Story</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="#">Contact Us</a>
                            </li>
                          </ul>
                    </div>
                </div> 
            </div>
            <div class="container tittle">
              <div class="jumbotron jumbotron-fluid" style="background-color: transparent;">
                <div class="container" style="padding-top: 50px;">
                      <p class="lead" style="border-style:dashed ; display: inline;">IT IS A GOOD TIME FOR A GREAT TASTE OF BURGER</p>
                      <h1 class="display-1" style="font-family: Alfa Slab One !important; font-weight:bolder ">BURGER</h1>
                      <h1 class="display-4" style="font-family: Alfa Slab One  !important; font-weight:bolder">WEEK</h1>

                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>
    <!--About & Product  Section--->
    <section>
       <div class="container">
         <div class="container-fluid" style="text-align: center;padding-top: 20px;">
           <h4 style="background-color: #ffc045; display:inline-block ; padding:10px">ALWAYS TASTE BURGER</h4>
           <h1 style="font-family: Alfa Slab One  !important; font-weight:bolder; font-size:50px ;" >CHOOSE & ENJOY</h1>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>

         </div>
         <!--Product Section-->
         <div class="row" style= "margin-top: 50px ;">
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <div class="card" style="border: none">
              <img class="card-img-top" src="Images/Product-Image-1.png" alt="">
              <div class="card-body" style="text-align: center;">
                <h5 class="card-title">Title</h5>
                <p class="card-text">Content</p>
                <button type="button" class="btn-danger" > Rs: 100/-</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <div class="card" style="border: none">
              <img class="card-img-top" src="Images/Product-Image-2.png" alt="">
              <div class="card-body" style="text-align: center;">
                <h5 class="card-title">Title</h5>
                <p class="card-text">Content</p>
                <button type="button" class="btn-danger" > Rs: 100/-</button>
              </div>
            </div>
          </div>

          <?php
             require "php/conn.php";
             $mysql = "select * from product"; 
             $result = $conection->query($mysql);

             if ($result->num_rows>0) {
                 while ($row = $result->fetch_assoc()){
                   echo '
                   <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                   <div class="card" style="border: none">  ' ; echo "
                     <img class='card-img-top' src=images/".$row['id'].".jpg > " ; echo '

                     <div class="card-body" style="text-align: center;">
                       <h5 class="card-title">'.$row['name'].'</h5>
                       <p class="card-text">'.$row['description'].'</p>
                       <button type="button" class="btn-danger" > Rs: '.$row['price'].'/-</button>
                     </div>
                   </div>
                 </div>
                   ';

                 }
                }

           ?>

          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <div class="card" style="border: none">
              <img class="card-img-top" src="Images/Product-Image-3.png" alt="">
              <div class="card-body" style="text-align: center;">
                <h5 class="card-title">Title</h5>
                <p class="card-text">Content</p>
                <button type="button" class="btn-danger" > Rs: 100/-</button>
              </div>
            </div>
          </div>
         </div>
         <!--Product Section End-->
       </div>
        
    </section>

    <!--ADD Product Section-->
    <section>
     <div class="container" id="product">
       <h6 style="font-family:Bebas Neue ;">RESERVATION</h6>
       <h1 style="font-family: Alfa Slab One  !important; font-weight:bolder; font-size:50px ;">BOOK YOUR TABLE</h1>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
        <div class="form-row">
          <div class="form-group col-md-6"> 
            <input type="text" class="form-control" name="name" id="inputtext" placeholder="PRODUCT NAME">
          </div>

          <div class="form-group col-md-6">
            <input type="price" class="form-control" name="price" id="inputprice" placeholder="PRODUCT PRICE">
          </div>
        </div>

          <div class="form-group"> 
              <textarea id="my-textarea" class="form-control" name="des" rows="3" placeholder="DESCRIPTION"></textarea>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                
                <div class="form-group" style="border: 1px solid #ced4da ; padding:2px">
                <label for="">PRODUCT IMAGE</label>
                <button class="form-control btn-danger" style=" display: inline-block ; width: auto;" onclick="document.getElementById('getFile').click()">Browser..</button>
                <input type='file' id="getFile" style="display:none" name="image">
                </div>
                <!-- <input type="file" class="form-control" id="inputUpload" name="image" value="Image"> -->
              </div>
              <div class="form-group col-md-6">
                <input  type="submit" class="form-control btn-danger" id="submit" name="submit" value="ADD PRODUCT" style="font-family: Alfa Slab One  !important; font-weight:bolder;">
              </div>
            </div>
          </div>
        </div>
      </form>
     </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>