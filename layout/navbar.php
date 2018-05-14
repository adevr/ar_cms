<?php
/**
 * Created by PhpStorm.
 * User: loba
 * Date: 11-05-2018
 * Time: 14:16
 */
?>

<link rel="stylesheet" href="../assets/css/navbar.css"\>
<link href="https://fonts.googleapis.com/css?family=Jura:400,500,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<script rel="script" src="../assets/js/index.js"></script>

<div class="navbar-left">
    <div class="navbar-header">
        <img src="../assets/img/user.png" id="logonav"><br><br>
        <b>UserName</b>
    </div>
    <ul>
        <li><a class="active" id="dash" onclick="changeActive('dash')"  href="#dash"><i class="fab fa-cloudscale"></i>Dashboard<i id="#rg" class="fas fa-angle-double-right"></i></a></li>
        <li><a href="#tables" id="table" onclick="changeActive('table')"><i class="fas fa-table"></i>Tables<i id="#rg" class="fas fa-angle-double-right"></i></a></li>
        <li><a href="#charts"  id="charts" onclick="changeActive('charts')"><i class="far fa-chart-bar"></i>Charts<i id="#rg" class="fas fa-angle-double-right"></i></a></li>
        <li><a href="#calendar" id="calendar" onclick="changeActive('calendar')"><i class="far fa-calendar-alt"></i>Calendar<i  id="#rg" class="fas fa-angle-double-right"></i></a></li>
        <li><a href="#chat" id="chat" onclick="changeActive('chat')"><i class="fab fa-rocketchat"></i>Chat<i id="#rg" class="fas fa-angle-double-right"></i></a></li>
    </ul>
</div>
