<?php
/**
 * Created by PhpStorm.
 * User: loba
 * Date: 11-05-2018
 * Time: 14:16
 */
?>


<div class="navbar-left">
    <div class="navbar-header">
        <img src="../assets/img/logocms.png" id="logonav">
    </div>
    <div class="navbar-profile">
        <img src="../assets/img/profile.jpg" alt="image">
        <span class="user-info">
            <a href="#profile">Alex Reis</a>
            <a href="#theme"><i class="fas icon-drop"></i></a>
            <a href="../layout/index.php"><i class="far icon-lock"></i></a>
        </span>
    </div>

    <ul id="main-menu">
        <li class="item"><a class="active toggle" id="dash" href="#dash"><i class="fab icon-speedometer"></i>Dashboard</a></li>
        <li class="dropdown item">
            <a href="#tables" id="table" class="toggle tabred">
                <i class="fas icon-table-selection-cell"></i>Tables<i id="#rg" class="fas icon-down-chevron"></i>
            </a>
            <ul class="sub-chart-menu">
                <li><a href="#tables1">Table 1</a></li>
                <li><a href="#tables2">Table 2</a></li>
            </ul>
        </li>
        <li class="dropdown item">
            <a href="#forms" class="forms toggle"  id="forms">
                <i class="far icon-forms"></i>Forms<i id="#rg" class="fas icon-down-chevron"></i>
            </a>
            <ul class="sub-chart-menu">
                <li><a href="#forms1">Form 1</a></li>
                <li><a href="#forms2">Form 2</a></li>
            </ul>
        </li>
        <li><a href="#charts" class="chartorange item toggle"  id="charts"><i class="far icon-computer"></i>Charts</a></li>
        <li><a href="#calendar" class="calgreen item toggle" id="calendar"><i class="far icon-calendar"></i>Calendar</a></li>
        <li><a href="#chat" class="chatyellow item toggle" id="chat"><i class="fab icon-communication"></i>Chat</a></li>
    </ul>
</div>
