<!DOCTYPE html>
<html lang="en">
<head>
    <title>BR Blogfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

    <!--Determine if this is the dev environment or not-->
    <?php 
        $host = explode('.', $_SERVER['HTTP_HOST']);
        $subdomain = $host[0];
        $baseURL = '';
        if ($subdomain == 'dev') {
            $baseURL = '/home/brx10hos/public_html/dev/';
        }
        else {
            $baseURL = '/home/brx10hos/public_html/';
        }
     ?>
     <!--Get the navbar script using previous determination-->
     <?php include ($baseURL."navbar.php"); ?>

    <div class="container-fluid" id="breadcrumbs">
        <div class="row">
            <div class="col-sm-12">
                <ul class="breadcrumb">
                    <li>You are here</li>
                    <li><a href="/index.php">Home</a></li>
                    <li><a href="/Projects/projects.php">Projects</a></li>
                    <li><a href="/Projects/rtld.php">Road To Ludum Dare</a><li>
                    <li>June 2017 - Page 1</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 boxContent topBuffer">
                <h1>The Concept</h1>
                <p>
                Ludum dare has always been somthing that has interested me. I took a diploma in college for Games Design as I've always had a passion and interest in that field.
                Coupled with a university degree in 3D Animation &amp; Modelling I have the right base skills for this kind of thing, but theres a catch.
                <br />
                I've never been great at coding, its been an interest but somthing that's always been brushed off as somthing I cant do, or too complicated to learn. 
                The second issue is after finishing University my student license for 3DS Max ran out, and all access to the software is lost.
                Having spent 5+ years using 3DS Max I've been reluctant to learn anything else due to the learning curve and habits that are already ingrained from my course and time in the software.
                <br />
                Recently I got myself Blender, somthing I have used in the past in college but never really got to grips with completely due to lack of training and/or interest at the time.
                I started to watch some tutorials, read some articles and decided to give it ago and started taking part in modelling for a twitter daily event <a href="https://twitter.com/search?q=%23lowpoly_dailies%26src=tyah%26lang=en">#LowPoly_Dailies</a> where you model somthing, in low poly about a given topic each day.
                <br />
                It only took two of these models to relight a passion in me for 3D and I decided with my new skills in coding I can take on Ludum Dare, but not just yet.
                </p>
                <p class="textCenter">This is my road to take part in Ludum Dare</p>
            </div>
            <div class="col-sm-1"></div>
        </div>

        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 boxContent topBuffer">
                <ul class="pager">
                    <li class="previous disabled">&larr; Older</li>
                    <li><a href="/Projects/rtld.php">Contents</a></li>
                    <li class="next"><a href="#">Newer &rarr;</a></li>
                </ul>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>

</body>
</html>
