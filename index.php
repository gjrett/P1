<?php require('quotes.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
        <style>
            body
            {text-align: center;
             padding-bottom: 50px;
            }
            .center {
                margin: auto;
                width: 50%;
                border: 3px solid blue;
                padding: 10px;
                font-size: 20px;
            }
        </style>
        <h1>Greg Retter</h1>
        <title>Greg's Website!</title>
    </head>
    <body>
        
        <img alt = "me" src = "img\me.jpg" />

        <h2>About Me</h2>

        <div class = center><p>I'm a professional Electrical Engineer specializing in controls and automation projects for over 27 years.  I've done many types of projects and found that the programming and integration is my favorite part.  So now I'm working toward a Master's in Software Engineering to become more versed in programming and I plan to get into more data aquisition and Big Data type project work.  Toward that end, my company has just completed a Hadoop server cluster and I've joined the Big Data consortium that is developing the data projects.
        </p></div>

        <h2>Random Quote</h2>

        <div class = center><p><?php echo $quote; ?></p></div>

   </body>
</html>


  
