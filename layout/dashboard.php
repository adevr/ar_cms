<?php
/**
 * Created by PhpStorm.
 * User: loba
 * Date: 21-05-2018
 * Time: 10:48
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/dash.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link href="https://fonts.googleapis.com/css?family=Jura:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="../icons/icomoon/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="content">
    <div class="line-content">
        <div class="col-md-2 numstats">
            <span class="title-info"><i class="icon-man"></i> Users Number</span>
            <div class="count line">3500</div>
        </div>
        <div class="col-md-2 numstats">
            <span class="title-info"><i class="icon-man"></i> Users Number</span>
            <div class="count line">3500</div>
        </div>
        <div class="col-md-2 numstats">
            <span class="title-info"><i class="icon-man"></i> Users Number</span>
            <div class="count line">3500</div>
        </div>
        <div class="col-md-2 numstats">
            <span class="title-info"><i class="icon-man"></i> Users Number</span>201
            <div class="count line">3500</div>
        </div>
        <div class="col-md-2 numstats">
            <span class="title-info"><i class="icon-man"></i> Users Number</span>
            <div class="count line">3500</div>
        </div>
        <div class="col-md-2 numstats">
            <span class="title-info"><i class="icon-man"></i> Users Number</span>
            <div class="count">3500</div>
        </div>
    </div>
    <div class="col-md-6 chartbar">
        <canvas id="myChart"></canvas>
    </div>
    <div class="col-md-6 chartbar">
        <canvas id="myChart2"></canvas>
    </div>
    <div class="col-md-6 chartbar">
        <canvas id="myChart3"></canvas>
    </div>
    <div class="col-md-6 chartbar">
        <canvas id="myChart4"></canvas>
    </div>

    <div class="col-md-4 profile-div">
        <table>
            <tbody>
            <tr>
                <td rowspan="2">
                    <img src="../assets/img/profile.jpg" alt="image">
                </td>
                <td>
                    <span class="profile-info">Alex Reis</span>
                    <span class="profile-info"><i class="dot"></i> Online</span>
                    <span class="profile-info"><i class="icon-email"></i> alexandrereis@loba.pt</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="skills">
                        <span class="badge badge-primary">HTML5/CSS3</span>
                        <span class="badge badge-secondary">jQuery</span>
                        <span class="badge badge-success">PHP</span>
                        <span class="badge badge-warning">MySQL</span>
                        <span class="badge badge-danger">Android</span>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
        <br>
        <div class="social-networks">
            <span><a href="https://www.twitter.com"><i class="icon-twitter-social-badge"></i> Twitter Profile</a></span><br><br>
            <span><a href="https://www.linkedin.com"><i class="icon-linked-in-social-badge"></i> LinkedIn Profile</a></span><br><br>
            <span><a href="https:// www.facebook.com"><i class="icon-facebook-social-badge"></i> Facebook Profile</a></span>
        </div>
        <div class="uncomplete-tasks">
            <div class="panel-heading">
                <p>Uncomplete Tasks <span class="badge badge-light"> 4</span></p>
            </div>
            <div class="tasks">
                <p>Database Creation</p>
            </div>
            <div class="tasks">
                <p>Layout Development</p>
            </div>
            <div class="tasks">
                <p>UML Email</p>
            </div>
            <div class="tasks btt">
                <p>Database Creation</p>
            </div>
        </div>
    </div>
    <div class="col-md-8 mo-products">
        <h3>Most Ordered Products</h3>
        <table class="prods">
            <thead>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        One Plus 6
                    </td>
                    <td>
                        400
                    </td>
                    <td>
                        <span class="badge badge-success">Active</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        iPhone 8S Plus
                    </td>
                    <td>
                        300
                    </td>
                    <td>
                        <span class="badge badge-success">Active</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Xiaomi MI MIX 2S
                    </td>
                    <td>
                        250
                    </td>
                    <td>
                        <span class="badge badge-success">Active</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Xiaomi MI MIX 2
                    </td>
                    <td>
                        250
                    </td>
                    <td>
                        <span class="badge badge-success">Active</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nokia 7
                    </td>
                    <td>
                        250
                    </td>
                    <td>
                        <span class="badge badge-success">Active</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Samsung Galaxy S9+
                    </td>
                    <td>
                        250
                    </td>
                    <td>
                        <span class="badge badge-success">Active</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<script src="//code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="../assets/js/index.js"></script>
<script rel="script" src="../assets/js/dashboard.js"></script>
</html>