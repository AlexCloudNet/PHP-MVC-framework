<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->


<!-- public css load -->
<?php 

if( isset($this->css[0]) ){
    foreach($this->css as $key => $val){
        foreach($val as $style_name)
            echo '<link rel="stylesheet" href="public/css/' . $style_name . '.css">';
    }
}

?>
 
<?php
    echo '<title>' . $this->title . '</title>';
?>

</head>
<body>

<header class="header">
   <nav class="m-nav">
   <a class="nav-link" href="frontend"><div class="nav-item">Frontend</div></a>
   <a class="nav-link" href="backend"><div class="nav-item">Backend</div></a>
   <a class="nav-link" href="development"><div class="nav-item">Разработка</div></a>
   <a class="nav-link" href="science"><div class="nav-item">Наука</div></a>
   </nav>
</header>

<div class="helpers-block">



 <!-- breadcrumbs block -->
 <?php 
 if($this->routes['controller'] !== 'main'){
    echo '<div class="crumbs-block">
            <ul><li>
                <div class="crumb crumb-first">
                    <div class="crumb-link"><a href="/">Home</a></div>
                        <div class="clip"></div>
                    </div>
            </li>';

    if($this->bread_crumbs[0]['crumbs'] !== ''){
        foreach($this->bread_crumbs as $crumbs){
            echo '<li>
                    <div class="crumb crumb-all">
                    <div class="clip-start"></div>
                    <div class="crumb-link">
                        <a href="/' . $crumbs['url'] . '">' . $crumbs['crumbs'] . '</a>
                    </div>
                    <div class="clip-end"></div>';
            echo '</div></li>';
        }
    }
    echo '</ul></div></div>';
};
?>