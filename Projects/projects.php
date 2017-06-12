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

        <div class="row topBuffer">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 boxContent">
                <h1 class="textCenter">BR Blogfolio</h1>
                <p>
                This whole website is a project! In the past I have used things like WordPress and they can provide a great result, but I wanted to create my own website for a couple reasons. <br/>
                <ul>
                    <li>Skill development - Creating everything myself (within reason) gives me a chance to develop new skills in HTML, CSS, JS, jQuery, PHP and general front end web development.</li>
                    <li>Project to work on - I'm always looking for somthing to keep me busy. Between projects at work I can get bored and tend to find reasons to code or create somthing, with this I have a constant project to work on over time.</li>
                    <li>Full customisation - I can customise the site how i want it.</li>
                    <li>Sandbox - I now have a web environment to play with, opening doors not just for my new web dev skills but my C#.NET skills too as I can start to explore ASP.NET.</li>
                </ul>
                <br />There are two parts to the site, live and dev. The live side of the website is probably what your seeing now, the development side is where I will be testing any changes to the site before rolling them out to the live environment.
                This is how its done in the professional world, so I decided to replicate it with a sub-domain.
                <br />You can see the dev environemnt (although there may not be any difference most of the time) at <a href="dev.br.x10host.com">dev.br.x10host.com</a>.
                </p>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
     
</body>
</html>
