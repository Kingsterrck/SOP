<?php
session_start();
if (isset($_COOKIE["email"])) {
    include_once "header_fsm_dropdown.php";
} else {
    include_once "headerNLI_fsm.php";
}
include_once "footer.php";
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search for squads | SOP</title>
<!--    stylesheets-->
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/squadSearch.css">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/space.css">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/mainpage.css">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/loggedInMainpage.css">
    <!--    jQuery-->
    <script src="../../Content/js/jQuery%201.8.js"></script>
<!--    internal CSS-->
    <style>
    </style>
</head>
<body>
<div id="maxContainer">
    <div id="nameBanner">

    </div>
    <div id="mainContent">
        <div id="squadFormContainer">
            <form id="squadSearchBox">
                <div id="headerSearchBox" style="border: #FFFFFF solid 3px">
                    <img src="../../Content/imgsrc/icons/searchIcon.png">
                    <input type="text" name="searchForSquad" placeholder="搜索">
                </div>
            </form>
            <form id="squadSportSelect">
                <select>
                    <option>SPORT1</option>
                    <option>SPORT2</option>
                </select>
            </form>
        </div>
        <div id="squadInfo">
            <div id="squadInfoHeader">
                <div class="column-1">
                    <h5>战队名称</h5>
                </div>
                <div class="column-2">
                    <h5>运动</h5>
                </div>
                <div class="column-3">
                    <h5>人数</h5>
                </div>
                <div class="column-4">
                    <h5>胜</h5>
                </div>
                <div class="column-5">
                    <h5>负</h5>
                </div>
                <div class="column-6">
                    <h5>总</h5>
                </div>
                <div class="column-7">
                    <h5>胜率</h5>
                </div>
            </div>
            <a href="#">    <!-- insert GET link to the squad, something like squad.php?name=abaaba -->
                <div class="squadInfoCarrier">
                    <div class="column-1">
                        <p>DEMO</p>
                    </div>
                    <div class="column-2">
                        <p>VOLLEY</p>
                    </div>
                    <div class="column-3">
                        <p>6</p>
                    </div>
                    <div class="column-4">
                        <p>10</p>
                    </div>
                    <div class="column-5">
                        <p>0</p>
                    </div>
                    <div class="column-6">
                        <p>10</p>
                    </div>
                    <div class="column-7">
                        <p>100%</p>
                    </div>
                </div>
            </a>
            <div>
                <a href="#">    <!-- insert GET link to the squad, something like squad.php?name=abaaba -->
                    <div class="squadInfoCarrier">
                        <div class="column-1">
                            <p>DEMO</p>
                        </div>
                        <div class="column-2">
                            <p>VOLLEY</p>
                        </div>
                        <div class="column-3">
                            <p>6</p>
                        </div>
                        <div class="column-4">
                            <p>10</p>
                        </div>
                        <div class="column-5">
                            <p>0</p>
                        </div>
                        <div class="column-6">
                            <p>10</p>
                        </div>
                        <div class="column-7">
                            <p>100%</p>
                        </div>
                    </div>
                </a><a href="#">    <!-- insert GET link to the squad, something like squad.php?name=abaaba -->
                    <div class="squadInfoCarrier">
                        <div class="column-1">
                            <p>DEMO</p>
                        </div>
                        <div class="column-2">
                            <p>VOLLEY</p>
                        </div>
                        <div class="column-3">
                            <p>6</p>
                        </div>
                        <div class="column-4">
                            <p>10</p>
                        </div>
                        <div class="column-5">
                            <p>0</p>
                        </div>
                        <div class="column-6">
                            <p>10</p>
                        </div>
                        <div class="column-7">
                            <p>100%</p>
                        </div>
                    </div>
                </a><a href="#">    <!-- insert GET link to the squad, something like squad.php?name=abaaba -->
                    <div class="squadInfoCarrier">
                        <div class="column-1">
                            <p>DEMO</p>
                        </div>
                        <div class="column-2">
                            <p>VOLLEY</p>
                        </div>
                        <div class="column-3">
                            <p>6</p>
                        </div>
                        <div class="column-4">
                            <p>10</p>
                        </div>
                        <div class="column-5">
                            <p>0</p>
                        </div>
                        <div class="column-6">
                            <p>10</p>
                        </div>
                        <div class="column-7">
                            <p>100%</p>
                        </div>
                    </div>
                </a><a href="#">    <!-- insert GET link to the squad, something like squad.php?name=abaaba -->
                    <div class="squadInfoCarrier">
                        <div class="column-1">
                            <p>DEMO</p>
                        </div>
                        <div class="column-2">
                            <p>VOLLEY</p>
                        </div>
                        <div class="column-3">
                            <p>6</p>
                        </div>
                        <div class="column-4">
                            <p>10</p>
                        </div>
                        <div class="column-5">
                            <p>0</p>
                        </div>
                        <div class="column-6">
                            <p>10</p>
                        </div>
                        <div class="column-7">
                            <p>100%</p>
                        </div>
                    </div>
                </a><a href="#">    <!-- insert GET link to the squad, something like squad.php?name=abaaba -->
                    <div class="squadInfoCarrier">
                        <div class="column-1">
                            <p>DEMO</p>
                        </div>
                        <div class="column-2">
                            <p>VOLLEY</p>
                        </div>
                        <div class="column-3">
                            <p>6</p>
                        </div>
                        <div class="column-4">
                            <p>10</p>
                        </div>
                        <div class="column-5">
                            <p>0</p>
                        </div>
                        <div class="column-6">
                            <p>10</p>
                        </div>
                        <div class="column-7">
                            <p>100%</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<script src="../../Content/js/squadSearch.js"></script>
<script src="../../Content/js/mainpage.js"></script>
</body>
</html>