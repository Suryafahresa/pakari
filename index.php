<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require_once("./assets/requires/config.php");
     
     require_once("./assets/requires/header1.php");
?>
<div class="container">
    <div id="jdlaccr" style="font-size:36px;color:brown;">Harber web</div>
         <div class="card shadow-sm mb-5 bg-black rounded">
            <div class="card-body">
                 <h5 class="card-title">Input Name:</h5>
                <p class="card-text"><input type="text" class="input input-lg"
              style="width:100%;" id="srchInv"></p>
            </div>
            <div class="card-footer">
     <button class="btn btn-primary" id="btnsearch">
        submit
</button>
            </div>
        </div  id="infoinvaccr"></div>
    </div>
</body>
</html>