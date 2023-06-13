<?php
    header('X-XSS-protection:0');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>php file upload</title>
</head>
<style>
    body{
        margin-top: 30px;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Select/Dropdown</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et tempore voluptatibus veniam porro assumenda quos eaque reiciendis, fugiat, nulla, debitis id minus voluptatum commodi odit architecto, eveniet amet!</p>
                <pre>
                    <p>
                        <?php print_r($_POST);?>
                    </p>
                </pre>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="POST" enctype="multipart/form-data">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">
                    
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">

                    
                    <label for="photo">Photo</label>
                    <input type="file" name="photo" id="photo">

                    <br>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>

    </div>
</body>
</html>