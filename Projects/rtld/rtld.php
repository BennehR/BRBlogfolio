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
                    <li><a href="/Projects/projects.php">Projects</a></li>
                    <li>Road To Ludum Dare</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 boxContent topBuffer">
                <h1>Contents</h1>
                <p>Select a page to view
                <br/>This contents page will be periodically updated with new content, each page will have navigation buttons at the bottom to go forward or backward in time through the updates.</p>
            </div>
            <div class="col-sm-1"></div>
        </div>

        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 boxContent topBuffer">
                <ul>
                    <li><a href="/June17/rtldjun1701.php">June 2017</a></li>
                    <li>More to come...</li>
                </ul>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
     
</body>
</html>
