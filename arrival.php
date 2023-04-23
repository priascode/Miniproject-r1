

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
<!--login form ends-->
<button><a href="upload.php" cls="btn">click here to upload</a></button>

<script src="script.js"></script> 
</body>