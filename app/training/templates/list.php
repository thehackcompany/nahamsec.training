<!DOCTYPE html>
<html lang="en">
<head>
    <title>TheHack | Hacking-101</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container" style="margin-top:20px;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <h1 class="text-center">TheHack Lab: Hacking 101</h1>
            <!-- Credits: These labs originally were developed for Udemy course organized by  Nahamsec (twitter: @nahamsec) 
                I localized and updated the labs to my needs
            -->
            <h5 class="text-center">Бұл лабораториялық тапсырмалар <a href="https://thehack.kz/course/hacking-101">"Hacking-101"</a> курсына арналып жасалған. Толығырақ <a href="https://thehack.kz">TheHACK</a></h5>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">лабораториялық жұмыстар</h3>
                </div>
                <div class="panel-body">
                    <ul>
                    <?php
                    $host = str_replace("www.","", $_SERVER["HTTP_HOST"] );
                    foreach( $data as $module=>$foobar ){ ?>
                        <li><a href="http://<?php echo $module.'.'.$host;?>" target="_blank"><?php echo $module; ?></a></li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
