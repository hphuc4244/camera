<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ứng dụng chụp hình đơn giản</title>
        <style>
        * {padding: 0; margin: 0;}
            .booth {width: 400px; height: auto; margin: 20px auto; padding: 10px; background-color: #f1f1f1; border: 1px solid #e5e5e5;}
            .booth a {display: block; padding: 10px; text-align: center; background-color: #428bca; margin: 10px 0; font-size: 15px; color: #fff; text-decoration: none;}       
        </style>
    </head>
    <body>
        <div class="booth">
            <video id="video" width="400" height="300" autoplay="true"></video>
            <a href="#" id="capture" class="booth-capture-button">Chụp hình</a>
            <canvas id="canvas" width="400" height="300"></canvas>
        </div><!-- div.booth -->
        <script type="text/javascript">
                    var v = document.querySelector("#VideoElement")
                navigator.getUserMedia= navigator.getUserMedia || navigator.webkitGetUserMedia ||  navigator.mozGetUserMedia ||  navigator.msGetUserMedia ||  navigator.oGetUserMedia
                if(navigator.getUserMedia){
                   navigator.getUserMedia({video:true},handleVideo,videoError);
                }
                function handleVideo(stream) {
                  //v.src = window.URL.createObjectURL(stream);
                  v.srcObject = stream;
                }
                function videoError (e){

                }

        </script>
        <script language="javascript" src="https://code.jquery.com/jquery-3.1.0.min.js">
 
        </script>
        <script>

        </script>
    </body>
</html>
