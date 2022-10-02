<html>

<?php
if(!empty($_GET['LANG'])){
    if($_GET['LANG']=="AR")
    require("languages/Ar.php");
    else if($_GET['LANG']=="EN")
    require("languages/En.php");

}else{
    require("languages/Ar.php");
}




?>

<header>
<title><?php echo $title;?></title>
<ul>
<?php
foreach($main_list as $value){
    ?>
<li><?php echo $value;
if($value=="Languages"||$value=="اللغات"){
    ?>
<ol>
<?php
foreach($second_list as $key=>$value2){
?>
<li><a href="?LANG=<?php echo $key;?>"><?php echo $value2;?></a></li>
<?php
} ?>
</ol>

    <?php
}

?></li>
    <?php
}
?>
</ul>
</header>
<body>
<h1><?php echo $title;?></br><small><?php echo $title_desc;?></small></h1>

</body>
<footer>
</footer>

</html>