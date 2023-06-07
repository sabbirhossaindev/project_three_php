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
    <title>php from</title>
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
                <h2>Our Fist From</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et tempore voluptatibus veniam porro assumenda quos eaque reiciendis, fugiat, nulla!</p>
                <p>
                    <?php if(isset($_POST['fname'])&& !empty($_POST['fname'])) {?>
                       First Name:  <?php echo $_POST['fname']?> <br />
                    <?php } ?>

                    <?php if(isset($_POST['lname'])&& !empty($_POST['lname'])){ ?>
                       Last Name:  <?php echo $_POST['lname']?> <br />
                    <?php } ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="POST">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">
                    
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">

                    <div>
                        <input type="checkbox" name="cb1" id="cb1">
                        <label for="cb1" class="label-inline">Some checkbox</label>
                    </div>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>