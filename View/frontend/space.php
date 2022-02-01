<?php
session_start();
if ($_SESSION["email"]) {
    error_log($_SESSION["email"]);
} else {
    error_log("it doesnt exist");
}

include_once "header_fsm_dropdown.php"
    ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your homepage | SOP</title>
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/space.css">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/mainpage.css">
    <link rel="stylesheet" type="text/css" href="../../Content/stylesheets/loggedInMainpage.css">
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>
</head>
<body>
    <div id="maxContainer">
        <div id="nameBanner">
            <svg xmlns="http://www.w3.org/2000/svg" width="1590" height="200" viewBox="0 0 1590 200">
                <g id="Group_188" data-name="Group 188" transform="translate(112 -75)">
                    <g id="Group_189" data-name="Group 189" transform="translate(37)">
                        <g id="Polygon_1" data-name="Polygon 1" transform="translate(1292 111)" fill="none">
                            <path d="M109.441,0A4,4,0,0,1,112.9,2l34.94,60.5a4,4,0,0,1,0,4L112.9,127a4,4,0,0,1-3.464,2H39.559a4,4,0,0,1-3.464-2L1.155,66.5a4,4,0,0,1,0-4L36.1,2a4,4,0,0,1,3.464-2Z" stroke="none"/>
                            <path d="M 40.13632202148438 5 L 5.77392578125 64.5 L 40.13632202148438 124 L 108.863655090332 124 L 143.22607421875 64.5 L 108.8636932373047 5 L 40.13632202148438 5 M 39.55907440185547 0 L 109.4409408569336 0 C 110.8698272705078 0 112.190185546875 0.76220703125 112.90478515625 1.999542236328125 L 147.8447113037109 62.49956512451172 C 148.5595703125 63.73738861083984 148.5595703125 65.26261901855469 147.8447113037109 66.50042724609375 L 112.90478515625 127.0004348754883 C 112.190185546875 128.23779296875 110.8698272705078 129 109.4409408569336 129 L 39.55907440185547 129 C 38.13018798828125 129 36.80980682373047 128.23779296875 36.09521484375 127.0004348754883 L 1.1552734375 66.50042724609375 C 0.4404144287109375 65.26261901855469 0.4404144287109375 63.73738861083984 1.1552734375 62.49956512451172 L 36.09521484375 1.999542236328125 C 36.80982208251953 0.76220703125 38.13018798828125 0 39.55907440185547 0 Z" stroke="none" fill="#fff"/>
                        </g>
                        <g id="Polygon_2" data-name="Polygon 2" transform="translate(1217 111)" fill="none">
                            <path d="M109.441,0A4,4,0,0,1,112.9,2l34.94,60.5a4,4,0,0,1,0,4L112.9,127a4,4,0,0,1-3.464,2H39.559a4,4,0,0,1-3.464-2L1.155,66.5a4,4,0,0,1,0-4L36.1,2a4,4,0,0,1,3.464-2Z" stroke="none"/>
                            <path d="M 40.13632202148438 5 L 5.77392578125 64.5 L 40.13632202148438 124 L 108.863655090332 124 L 143.22607421875 64.5 L 108.8636932373047 5 L 40.13632202148438 5 M 39.55907440185547 0 L 109.4409408569336 0 C 110.8698272705078 0 112.190185546875 0.76220703125 112.90478515625 1.999542236328125 L 147.8447113037109 62.49956512451172 C 148.5595703125 63.73738861083984 148.5595703125 65.26261901855469 147.8447113037109 66.50042724609375 L 112.90478515625 127.0004348754883 C 112.190185546875 128.23779296875 110.8698272705078 129 109.4409408569336 129 L 39.55907440185547 129 C 38.13018798828125 129 36.80980682373047 128.23779296875 36.09521484375 127.0004348754883 L 1.1552734375 66.50042724609375 C 0.4404144287109375 65.26261901855469 0.4404144287109375 63.73738861083984 1.1552734375 62.49956512451172 L 36.09521484375 1.999542236328125 C 36.80982208251953 0.76220703125 38.13018798828125 0 39.55907440185547 0 Z" stroke="none" fill="#fff"/>
                        </g>
                    </g>
                    <g id="Group_190" data-name="Group 190" transform="translate(-1329)">
                        <g id="Polygon_1-2" data-name="Polygon 1" transform="translate(1292 111)" fill="none">
                            <path d="M108.864,0a5,5,0,0,1,4.33,2.5L147.556,62a5,5,0,0,1,0,5l-34.362,59.5a5,5,0,0,1-4.33,2.5H40.136a5,5,0,0,1-4.33-2.5L1.444,67a5,5,0,0,1,0-5L35.807,2.5A5,5,0,0,1,40.136,0Z" stroke="none"/>
                            <path d="M 40.13632965087891 5 L 5.773941040039062 64.5 L 40.13630676269531 124 L 108.8636474609375 124 L 143.2260894775391 64.5 L 108.8636779785156 5 L 40.13632965087891 5 M 40.13632965087891 0 L 108.8636779785156 0 C 110.649787902832 0 112.3002166748047 0.9527435302734375 113.1934661865234 2.499458312988281 L 147.555908203125 61.99945831298828 C 148.449462890625 63.54673004150391 148.449462890625 65.45327758789062 147.555908203125 67.00054931640625 L 113.1934661865234 126.5005493164062 C 112.3002166748047 128.0472259521484 110.6497650146484 129 108.8636779785156 129 L 40.13630676269531 129 C 38.3502197265625 129 36.69976806640625 128.0472259521484 35.8065185546875 126.5005493164062 L 1.444122314453125 67.00054931640625 C 0.5505218505859375 65.45327758789062 0.5505218505859375 63.54673004150391 1.444122314453125 61.99943542480469 L 35.8065185546875 2.499458312988281 C 36.69976806640625 0.9527435302734375 38.35024261474609 0 40.13632965087891 0 Z" stroke="none" fill="#fff"/>
                        </g>
                        <g id="Polygon_2-2" data-name="Polygon 2" transform="translate(1217 111)" fill="none">
                            <path d="M108.864,0a5,5,0,0,1,4.33,2.5L147.556,62a5,5,0,0,1,0,5l-34.362,59.5a5,5,0,0,1-4.33,2.5H40.136a5,5,0,0,1-4.33-2.5L1.444,67a5,5,0,0,1,0-5L35.807,2.5A5,5,0,0,1,40.136,0Z" stroke="none"/>
                            <path d="M 40.13632965087891 5 L 5.773941040039062 64.5 L 40.13630676269531 124 L 108.8636474609375 124 L 143.2260894775391 64.5 L 108.8636779785156 5 L 40.13632965087891 5 M 40.13632965087891 0 L 108.8636779785156 0 C 110.649787902832 0 112.3002166748047 0.9527435302734375 113.1934661865234 2.499458312988281 L 147.555908203125 61.99945831298828 C 148.449462890625 63.54673004150391 148.449462890625 65.45327758789062 147.555908203125 67.00054931640625 L 113.1934661865234 126.5005493164062 C 112.3002166748047 128.0472259521484 110.6497650146484 129 108.8636779785156 129 L 40.13630676269531 129 C 38.3502197265625 129 36.69976806640625 128.0472259521484 35.8065185546875 126.5005493164062 L 1.444122314453125 67.00054931640625 C 0.5505218505859375 65.45327758789062 0.5505218505859375 63.54673004150391 1.444122314453125 61.99943542480469 L 35.8065185546875 2.499458312988281 C 36.69976806640625 0.9527435302734375 38.35024261474609 0 40.13632965087891 0 Z" stroke="none" fill="#fff"/>
                        </g>
                    </g>
                    <rect id="Rectangle_14" data-name="Rectangle 14" width="1366" height="200" transform="translate(0 75)" fill="rgba(0,0,0,0.4)"/>
                </g>
            </svg>
            <div id="nameDisplayBox">
                <h1 id="topName">name</h1>
            </div>
        </div>
        <div id="mainContent">
            <div id="personalData">
                <div class="personalDataDisplay">
                    <h1 id="genderDisplay"></h1>
                    <p>Gender</p>
                </div>
                <div class="personalDataDisplay">
                    <h1 id="ageDisplay"></h1>
                    <p>Age</p>
                </div>
                <div class="personalDataDisplay">
                    <h1 id="heightDisplay"></h1>
                    <p>Height</p>
                </div>
                <div class="personalDataDisplay">
                    <h1 id="weightDisplay"></h1>
                    <p>Weight</p>
                </div>
            </div>
            <div id="interestedSport">
                <h1>Interested sport</h1>
                <div id="sportSelectContainer">
                    <a href="#"><div class="sportIcon"></div></a>
                    <a href="#"><div class="sportIcon"></div></a>
                    <a href="#"><div class="sportIcon"></div></a>
                </div>
            </div>

        </div>

    </div>


</body>
<script src="../../Content/js/space.js"></script>
<script src="../../Content/js/mainpage.js"></script>
<script src="../../Content/js/loggedInMainpage.js"></script>
</html>
