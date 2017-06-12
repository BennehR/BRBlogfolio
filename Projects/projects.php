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
                    <li>Projects</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 boxContent textCenter">
                <h1>Ongoing projects</h1>
                <p>These are the projects that im working on, some long term, some on-and-off and some on hold</p>
            </div>
            <div class="col-sm-1"></div>
        </div>

        <div class="row topBuffer">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 boxContent">
                <h1 class="textCenter">Road To Ludum Dare</h1>
                <p>I decided to set myself a challenge to develop my skills to take part in Ludum Dare, an event that runs a few times a year. <br/>
                Ludum Dare is an event where participants get fixed time to develop a game based on a topic which is released at the time of starting. <br/>
                The task is daunting, but with my new passion in coding and existing skills in 3D and experience with the Unreal 4 engine I have confidence it's somthing I can complete. <br/>
                <br/>
                Click the image below to see my progress.</p>
                <p>IMAGE GOES HERE</p>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
     
</body>
</html>
