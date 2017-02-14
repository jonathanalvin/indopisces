<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
        <title>{$compName} - {$pgName}</title>
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.css"> 
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="./scripts/bootstrap.min.js"></script>
        <script type="text/javascript" src="./scripts/npm.js"></script>
    </head>
    
    <body>
        <div class = "container mCont">
            <div class="row mHdr">
                <div class="col-md-10">
                    <ul class="topMenu">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./about.php">About Us</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-1">
                {if !isset($smarty.session.fullName)}
                    <a href="./login.php">Login</a>
                {else}
                    <a href="./member.php">Hi, {$smarty.session.fullName}</a>
                {/if}
                </div>
            </div>
            
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="container fluid">
                        <div class="navbar header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Indopisces</a>
                        </div>
                        
                    </div>
                </nav>
            </div>
            
            <div class="row mLand">
                {$ctt}
            </div>
            
            <div class="row footer">
                <div class="col-md-5">
                    About INDOPISCES EXOTICA (COPY FROM WEB)
                </div>
                <div class="col-md-5">
                    
                </div>
                <div class="col-md-2">
                    TEST SIZE
                </div>
                <div class="col-md-12 copyRight">
                    Copyright <sup>&copy;</sup> Indopisces Exotica. All rights reerved.
                </div>
            </div>
        </div>
    </body>
</html>