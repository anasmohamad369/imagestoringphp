<html>
    <head>
        <title></title>
    </head>
    <style>
         body{
        background-image: url("bgimg.jpeg") ;
        background-size: cover;
        backdrop-filter: blur(20px) brightness(72%);
        background-position: center;
        
       
    }
    </style>
    <body>
    <div class="row">
        
        <div class= 'col-sm-12'>
        <?PHP
             INCLUDE('hmenu.php');
		        ?>
        </div>
    </div>
    <div class="row">
        
        <div class= 'col-sm-4'>
        
        </div>
        <div class="col-sm-4">
        <?PHP
           include('upfront.php');
        
        ?>
        </div>
        <div class="col-sm-4"></div>
    </div>
    <div class="row">
        
        <div class= 'col-sm-12'>
        <?PHP
             INCLUDE('footer.php');
		        ?>
        </div>
    </div>
    </body>
</html>