<?php
?>
<!DOCTyPE html>
<head>
    <meta charset="UTF-8">
    <title>啊吧啊吧</title>
    <style>
        #footer{
            overflow: hidden;
            zoom: 1;
            background-color: #232323;
            border-radius: 20px;
            padding: 0 15px;
            margin: 0 auto;
            line-height: 10px;
        }
        #footer p {
            float: left;
            color: #818181;
            margin-top: 10px;
        }
        #footer a {
            float: right;
            text-decoration: none;
            color: #818181;
            margin-top: 10px;
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
        var element = document.getElementById("footer");
        element.style.width=wid * 0.5 + "px";
    }
</script>
</body>
</html>
