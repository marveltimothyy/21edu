<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body,
    html {
        height: 100%;
        margin: 0;
    }

    .bg {
        /* The image used */
        background-image: url("/21edu/img/img3.jpg");

        /* Full height */
        height: 92%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .container {
        position: relative;
        max-width: 800px;
        /* Maximum width */
        margin: 0 auto;
        /* Center it */
    }

    .container .content {
        position: absolute;
        /* Position the background text */
        bottom: 0;
        /* At the bottom. Use top:0 to append it to the top */
        background: rgb(0, 0, 0);
        /* Fallback color */
        background: rgba(0, 0, 0, 0.5);
        /* Black background with 0.5 opacity */
        color: #f1f1f1;
        /* Grey text */
        width: 100%;
        /* Full width */
        padding: 100px;
        /* Some padding */
    }
    </style>
</head>

<body>

    <div class="bg"></div>
    <div class="container">
        <div class="content">
            <h1>21EDU</h1>
            <p>The best education web by Marvel</p>
        </div>
    </div>


</body>

</html>