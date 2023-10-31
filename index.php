<!doctype html>
<html lang="en"> 
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Biodata</title>
    <link rel="stylesheet" href="styles-desktop.css" media="screen and (min-width: 769px)">
    <link rel="stylesheet" href="styles-mobile.css" media="screen and (max-width: 768px)">
    <style>
        /* CSS to center the "About Me" section */
        .center {
            text-align: center;
            margin: 0 auto;
            width: 60%; /* Adjust this value to control the width of the centered content */
        }
    </style>
</head>
<body>
<?php require('action.php'); ?>
    <div class="container">
        <header>
            <h1><img src="<?php echo $images ?>" width="300" height="400"></h1>
            <h1><?php echo $name ?></h1>
            <p>Student</p>
        </header>
            <div class="center">
                <h2>About Me</h2>
                <p>Father Name: <?php echo $father ?></p>
                <p>Mother Name: <?php echo $mother ?></p>
                <p>Gender: <?php echo $gender ?></p>
                <p>Hobby: <?php echo $hobby ?></p>
                <p>Address: <?php echo $address ?></p>
                <p>Age: <?php echo $age ?></p>
            </div>
        </section>
        </section>
    </div>
</body>

</html>