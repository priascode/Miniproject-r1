<?php
require_once('./operation.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <a href="arrivals.php">Arrival</a>

    <br>
    <h1 class="text-center my-3">UPLOAD SAMPLE BOOK</h1>

    <div class ="container d-flex justify-content-center">
        <form action ="featured.php" method="post" class="w-50" enctype="multipart/form-data">
    
            <?php  inputFields("Enter your bookname","booktitle","","text")  ?>
            <?php  inputFields("Enter Author name ","author","","text")  ?>
            <select id="categry" name="category" class="form-control">
            <option>-Select-</option>
            <option>Art/Architecture</option>
            <option>Autobiographies</option>
            <option>Biography</option>
            <option>Business/economics</option>
            <option>Cookbook</option>
            <option>Children's book</option>
            <option>Dictionary</option>
            <option>Encyclopedia</option>
            <option>Guides/Materials</option>
            <option>Geography</option>
            <option>Health/Fitness</option>
            <option>History</option>
            <option>Home and Garden</option>
            <option>Journal</option>
            <option>Math</option>
            <option>Memoir</option>
            <option>Non-Fiction</option>
            <option>Political</option>
            <option>Philosophy</option>
            <option>Prayer</option>
            <option>Religion</option>
            <option>Textbook</option>
            <option>Truecrime</option>
            <option>Science</option>
            <option>Selfhelp</option>
            <option>Sports & leisure</option>
            <option>Travel</option>
        </select><br>
         
            <?php  inputFields("","file","","file")  ?>
            <?php  inputFields("Publication name","publication","","text") ?>
            <?php  inputFields("book description","description","","text") ?>

            <button class="btn btn-dark" type="submit" name="submit">Submit</button>

        </form>
    </div>



    
</body>
</html>