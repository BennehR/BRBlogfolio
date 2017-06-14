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
                    <li>Games Design</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 boxContent topBuffer">
                <h1>Games Design</h1>
                <p>Here's where I'll detail my Games Design projects (that aren't related to Road To Ludum Dare).
                <br />It's mostly Unreal Engine at this stage, but may grow in the future as I learn more skills.
                </p>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-1">
                
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>    
     
</body>
</html>