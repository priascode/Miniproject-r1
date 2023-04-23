
<?php

include ('./connect.php');
if(isset($_POST['submit'])){
    $booktitle=$_POST['booktitle'];
    $authorname=$_POST['author'];
    $publication=$_POST['publication'];
    $bookdesc=$_POST['description'];
    $category=$_POST['category'];
    
    $image=$_FILES['file'];
    // print_r($image);

    //echo $username;
    //echo "<br>";
    //echo $mobile;
    //echo "<br>";
    //print_r($image);
    //echo "<br>";

    $imagefilename=$image['name'];
    // print_r($imagefilename);
    //echo "<br>";

    $imagefileerror = $image['error'];
    //print_r($imagefileerror);
    //echo "<br>";

    $imagefiletemp=$image['tmp_name'];
    // print_r($imagefiletemp);
    //echo "<br>";

    $filename_seperate=explode('.',$imagefilename);
//  print_r($filename_seperate);
  // echo "<br>";
   // $file_extension=strtolower($filename_seperate[1]);
    //print_r($file_extension);

    $file_extension=strtolower(end($filename_seperate));
    //print_r($file_extension);

    $extension=array('jpeg','jpg','png');
    if(in_array($file_extension,$extension)){
        $upload_image='images/'.$imagefilename;
        move_uploaded_file($imagefiletemp,$upload_image);
        $sql="insert into `upload_book`(booktitle,author,category,publications,bookimage,decription) values('$booktitle','$authorname','$category','$publication','$upload_image','$bookdesc')";
        $result=mysqli_query($con,$sql);
        if($result){
            echo '<div class="alert alert-success" role="alert">
            <strong>Success</strong>  Data Inserted Successfully
          </div>';

        } else{
            die(mysqli_error($con));
        }
    }
    

}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTP-8">
    <META http-equiv="X-UA-Compatible" content =" IE=edge">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>   miniproject</title>

    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  
</head>
<body>
    
     <!--  header section   -->  
     
     <header class="header">

        <div class="header-1">

            <a href="#"   class="logo">  <i class ="fas fa-book"> </i>  bookly</a>

            <form action="" class="search-form">
                <input type ="search" name="" placeholder="search here...." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-shopping-cart"></a>
                <div id="login-btn" class="fas fa-user"></div>
            </div>
        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="index.html">Home</a>
                <a href="featured.php">featured</a>
                <a href="arrival.php">arrivals</a>
                <a href="#reviews">reviews</a>
                <a href="#blogs">contact</a>
            </nav>
        </div>
    </header>
<!--- header ends  -->
<!--bottom  navbar  -->

<nav class="bottom-navbar">
    <a href="index.html" class ="fas fa-home"></a>
    <a href="featured.php" class="fas fa-list"></a>
    <a href="arrival.php" class="fas fa-tags"></a>
    <a href="#reviews" class="fas fa-comments"></a>
    <a href="#blogs" class="fas fa-blog"></a>
</nav>

<!--login form  -->

<div  class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="">
        <h3> sign in </h3>
        <span>username </span>
        <input type="email"  name="" class="box" placeholder="enter ur email"  id="">
        <span>password</span>
        <input type="password"  name=""  class="box" placeholder="enter ur password"  id="">
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> remember  me</label>
        </div>
        <input type="submit" value="sign in" class="btn">
        <p> Forget password ? <a href="#" >  click here....</a></p>
        <p> Don't have an account ? <a href="#" >  create one </a></p>

    </form>
</div>
<!---Featured section-->
     <section class="featured" id="featured">

        <h1 class="heading"> <span>  Featured books </span></h1>
        
        <div class="swiper featured-slider">
        
            <div class="swiper-wrapper">
        
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src ="img1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3> Featured books </h3>
                        <div class="price"> Engg.<span> CSE</span>
        
                        </div>
                        <a href="#" class="btn"> add to cart</a>
                    </div>
                </div>
        
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src ="img2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3> Featured books </h3>
                        <div class="price"> Engg.<span> CSE</span>
        
                        </div>
                        <a href="#" class="btn"> add to cart</a>
                    </div>
                </div> 
                
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src ="img3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3> Featured books </h3>
                        <div class="price"> Engg.<span> CSE</span>
        
                        </div>
                        <a href="#" class="btn"> add to cart</a>
                    </div>
                </div>
        
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src ="img4.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3> Featured books </h3>
                        <div class="price"> Engg.<span> CSE</span>
        
                        </div>
                        <a href="#" class="btn"> add to cart</a>
                    </div>
                </div>
        
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src ="img5.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3> Featured books </h3>
                        <div class="price"> Engg.<span> CSE</span>
        
                        </div>
                        <a href="#" class="btn"> add to cart</a>
                    </div>
                </div>
        
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src ="img6.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3> Featured books </h3>
                        <div class="price"> Engg.<span> CSE</span>
        
                        </div>
                        <a href="#" class="btn"> add to cart</a>
                    </div>
                </div>
        
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src ="img7.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3> Featured books </h3>
                        <div class="price"> Engg.<span> CSE</span>
        
                        </div>
                        <a href="#" class="btn"> add to cart</a>
                    </div>
                </div>
        
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src ="img8.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3> Featured books </h3>
                        <div class="price"> Engg.<span> CSE</span>
        
                        </div>
                        <a href="#" class="btn"> add to cart</a>
                    </div>
                </div>
        
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src ="img9.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3> Featured books </h3>
                        <div class="price"> Engg.<span> CSE</span>
        
                        </div>
                        <a href="#" class="btn"> add to cart</a>
                    </div>
                </div>
        
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src ="img10.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3> Featured books </h3>
                        <div class="price"> Engg.<span> CSE</span>
        
                        </div>
                        <a href="#" class="btn"> add to cart</a>
                    </div>
                </div>
        
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src ="img11.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3> Featured books </h3>
                        <div class="price"> Engg.<span> CSE</span>
        
                        </div>
                        <a href="#" class="btn"> add to cart</a>
                    </div>
                </div>
        
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src ="img12.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3> Featured books </h3>
                        <div class="price"> Engg.<span> CSE</span>
        
                        </div>
                        <a href="#" class="btn"> add to cart</a>
                    </div>
                </div>
        
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src ="img13.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3> Featured books </h3>
                        <div class="price"> Engg.<span> CSE</span>
        
                        </div>
                        <a href="#" class="btn"> add to cart</a>
                    </div>
                </div>
        
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src ="img15.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3> Featured books </h3>
                        <div class="price"> Engg.<span> CSE</span>
        
                        </div>
                        <a href="#" class="btn"> add to cart</a>
                    </div>
                </div>
        
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src ="img14.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3> Featured books </h3>
                        <div class="price"> Engg.<span> CSE</span>
        
                        </div>
                        <a href="#" class="btn"> add to cart</a>
                    </div>
                </div>
        
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src ="img16.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3> Featured books </h3>
                        <div class="price"> Engg.<span> CSE</span>
        
                        </div>
                        <a href="#" class="btn"> add to cart</a>
                    </div>
                </div>
        
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src ="img17.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3> Featured books </h3>
                        <div class="price"> Engg.<span> CSE</span>
        
                        </div>
                        <a href="#" class="btn"> add to cart</a>
                    </div>
                </div>
        
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src ="img18.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3> Featured books </h3>
                        <div class="price"> Engg.<span> CSE</span>
        
                        </div>
                        <a href="#" class="btn"> add to cart</a>
                    </div>
                </div>
        
            </div>
        
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        
        
    </section> -->

    <?php
  $sql="Select * from `upload_book`";
  $result=mysqli_query($con,$sql);
  while( $row=mysqli_fetch_assoc($result)){

    $title=$row['booktitle'];
    $author=$row['author'];
    $categry=$row['category'];
    $pubcation=$row['publications'];
    $image=$row['bookimage'];
    $desc=$row['decription'];
    echo "<div >
        <img src='.$upload_image'/>
        <h3>'.$title'</h3>
        <h4>'.$author'</h4>
    </div>";
  }





?>
    


    <script src="script.js"></script> 
</body>