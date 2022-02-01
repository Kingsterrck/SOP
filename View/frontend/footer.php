<?php
?>
<!DOCTyPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <style>
        * {
            color: white;
        }
        #footer{
            overflow: hidden;
            zoom: 1;
            background-color: #232323;
            border-radius: 20px;
            padding: 0 15px;
            line-height: 20px;
            position: fixed;
            bottom: 20px;
        }
        #footer p {
            float: left;
            color: #818181;
            font-size: 15px;
        }
        #footer a {
            float: right;
            text-decoration: none;
            color: #818181;
            font-size: 15px;
        }
    </style>
</head>
<body>
<div id="footer">
    <p>© 2021 Kingster</p>
    <a href="#">Switch to English</a>
</div>
<script>
    res();
    window.addEventListener("resize",function () {
        res();
    })
    function res() {
        var wid = window.innerWidth;
        console.log(wid);
        var element = document.getElementById("footer");
        if (wid <= 530) {
            element.style.width = wid + "px";
        }else if (530 < wid < 1060) {
            var temp = (wid - 530)/2;
            element.style.margin = "0 "+ temp + "px";
            element.style.width = "500px";
        }
        else {
            var temp = 0.25 * wid;
            element.style.width=wid * 0.5 + "px";
            element.style.margin = "0 "+ temp + "px";
        }
    }7
//
</script>
</body>
</html>
