<?php

$data = [
    [
        "title" => "php",
        "subtitle" => "server-side",
        "content" => "is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML"
    ],

    [
        "title" => "javascript",
        "subtitle" => "client-side",
        "content" => "JavaScript is a scripting or programming language that allows you to implement complex features on web pages"
    ],

    [
        "title" => "python",
        "subtitle" => "not the killer",
        "content" => " is an interpreted, high-level and general-purpose programming language. Created by Guido van Rossum"
    ]
];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Cards</title>
</head>

<body>

    <div class="container py-5">
        <div class="row">


            <!-- Start of component -->
            <?php foreach ($data as $post) { ?>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $post["title"];  ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $post["subtitle"]; ?></h6>
                        <p class="card-text"><?= $post["content"];?> </p>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- End of component -->


        </div>
    </div>


    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</body>

</html>