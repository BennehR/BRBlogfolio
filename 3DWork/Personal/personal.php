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
                    <li><a href="#">Home</a></li>
                    <li>3D Work</li>
                    <li>Personal</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 boxContent topBuffer textCenter">
                <h1>Personal 3D Work</h1>
                <p>This is where I will be uploading my personal 3D work and creations. This will be the most actively updated section of the website as I work on my <a href="/Projects/rtld/June17/rtldjun1701.php">Road To Ludum Dare</a> project.</p>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-5 boxContent topBuffer rightBuffer">
                <h1 class="textCenter">Road To Ludum Dare</h1>
                <p>RTLD creations and works</p>
                <p>IMG</p>
            </div>
            <div class="col-sm-5 boxContent topBuffer rightBuffer">
                <h1 class="textCenter">Current Blender Work</h1>
                <p>Heres will I'll publish anything I do in Blender unrelated to Road To Ludum Dare</p>
                <p>IMG</p>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-5 boxContent topBuffer rightBuffer">
            <h1 class="textCenter">Bryce 3D</h1>
            <p>Bryce 3D is the original 3D software that I used as a kid (seriously, I was in primary school) which is what sparked my whole love for the art.
            <br />I make no claims that its good, I did random experiments and had no knowledge of how to work the software, but at the time was very proud of the things I made.
            </p>
            <p>IMG</p>
        </div>
        <div class="col-sm-5 boxContent topBuffer leftBuffer">
            <h1>Early Blender Work</h1>
            <p>This is the work I did in blender in college in my spare time.</p>
        </div>
        <div class="col-sm-1"></div>
    </div>

    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-5 boxContent topBuffer leftBuffer">
            <h1 class="textCenter">Low Poly Dailies</h1>
            <p>3D works created for the twitter <a href="https://twitter.com/search?q=%23lowpoly_dailies%26src=tyah%26lang=en">#LowPoly_Dailies</a>.</p>
            <p>IMG</p>
        </div>
        <div class="col-sm-5 boxContent topBuffer leftBuffer">
            <h1> </h1>
            <p> </p>
            <p>IMG</p>
        </div>
        <div class="col-sm-1"></div>
    </div>

</body>
</html>
