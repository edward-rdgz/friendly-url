<?php

include("connect.php");

//switch de subdirectorios

$dir="";

if(@$_GET['ciudad']) {
	$dir.='../';
}

if(@$_GET['seccion']) {
	$dir.='../';
}

if(@$_GET['id']) {
	$dir.='../';
}

$ciudad=(empty($_GET['ciudad']))?'playa-del-carmen':$_GET['ciudad'];

echo $sql_city = "SELECT * FROM ciudad WHERE nom_seo LIKE '".$ciudad."'";

$resCity = mysqli_query($con, $sql_city) or die(mysqli_error($resCity));

$city = mysqli_fetch_assoc($resCity); 

extract($city);

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $nom; ?></title>
	<meta content="<?php echo $descrip; ?>" name="description">
</head>

<body>
    <div class="menu">
    <?php
    
        $sql_city = "SELECT nom, nom_seo FROM ciudad";
        
        $resCity = mysqli_query($con, $sql_city) or die(mysqli_error($resCity));
        
        while($city = mysqli_fetch_assoc($resCity)) {
            
            echo "<a href='".$dir.$city['nom_seo']."/'>".$city['nom']."</a>  ";
            
        }
		
    ?>
    </div>
    <h3><?php echo $nom;?></h3>
    <img src="<?php echo $dir."img/".$nom_seo.".jpg"; ?>" alt="<?php echo $descrip; ?>" title="<?php echo $descrip; ?>" >
</body>
</html>