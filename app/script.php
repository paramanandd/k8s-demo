<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Back</a>
    </div>
    
    
  </div>
</nav>
  
<div class="container">
<h1>
    <?php function Title(){echo "Introduction to containerization";} Title(); ?>
</h1>
<h2>
    <?php function Docker(){echo "Welcome to the world of Docker";} Docker(); ?>
    </h2>
<h2>    
    <?php 
        function containerTool(){
            $containerName= "Docker";
            return $containerName;
        }
        
    ?>
</h2>
    
    <img width="900px" height="500px"src="docker_img.png"/>
</div>

    
    
</body>
</html>

