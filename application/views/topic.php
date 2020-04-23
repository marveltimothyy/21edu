<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>

<head>
    <style>
    .responsive {
        width: 800px;
        height: 500px;
    }
    </style>

</head>

</html>
<div class="container" style="text-align: center;">
    <!-- Content here -->

    ----This Is Your Topic----
    <!-- <img src="/img/img.jpg" class="img-fluid" alt="Responsive image"> -->

    <figcaption class="figure-caption">THIS IS TOPIC</figcaption>
    <br>
    <?php foreach ($post as $in) : ?>
    <embed src="<?php echo $in->path ?> " class="responsive">
    <?php endforeach ?>
</div>

</html>