<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <?php
   session_start();
   if(isset($_SESSION['User']))
   {
      echo "Welcome".$_SESSION['User'];
      echo '<a href="logout.php?logout">Logout</a>';
   }
  
  ?>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Poppins');

/* BASIC */

html {
  background-color: #56baed;
}

body {
  font-family: "Poppins", sans-serif;
  height: 100vh;
}

a {
  color: #92badd;
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}

h2 {
  text-align: center;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  display:inline-block;
  margin: 40px 8px 10px 8px; 
  color: #cccccc;
}



/* STRUCTURE */

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #fff;
  padding: 30px;
  width: 90%;
  max-width: 600px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}

#formFooter {
  background-color: #f6f6f6;
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}



/* TABS */

h2.inactive {
  color: #cccccc;
}

h2.active {
  color: #0d0d0d;
  border-bottom: 2px solid #5fbae9;
}



/* FORM TYPOGRAPHY*/

input[type=button], input[type=submit], input[type=reset]  {
  background-color: #56baed;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
  background-color: #39ace7;
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
}





/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}

.fadeIn.first {
  -webkit-animation-delay: 0.4s;
  -moz-animation-delay: 0.4s;
  animation-delay: 0.4s;
}

.fadeIn.second {
  -webkit-animation-delay: 0.6s;
  -moz-animation-delay: 0.6s;
  animation-delay: 0.6s;
}

.fadeIn.third {
  -webkit-animation-delay: 0.8s;
  -moz-animation-delay: 0.8s;
  animation-delay: 0.8s;
}

.fadeIn.fourth {
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  animation-delay: 1s;
}

/* Simple CSS3 Fade-in Animation */
.underlineHover:after {
  display: block;
  left: 0;
  bottom: -10px;
  width: 0;
  height: 2px;
  background-color: #56baed;
  content: "";
  transition: width 0.2s;
}

.underlineHover:hover {
  color: #0d0d0d;
}

.underlineHover:hover:after{
  width: 100%;
}



/* OTHERS */

*:focus {
    outline: none;
} 

#icon {
  width:60%;
}

* {
  box-sizing: border-box;
}
* {padding: 0; margin: 0;}
    .booth {width: 600px; background-color: #f1f1f1; border: 1px solid #e5e5e5;}
    .booth a {
              text-align: center;display: block; padding: 10px; text-align: center; background-color: #428bca; margin: 10px 0; font-size: 15px; color: #fff; text-decoration: none;
            }
  </style>
</head>

<body>
  <div style="text-align: right">
   
  </div>
 
 <div class="wrapper fadeInDown">
  <div id="formContent">
    <h2>Chuẩn bị đăng kí khuôn mặt</h2><br>
     <h2 id="thongbao"></h2>
    <div class="booth" style="margin: auto;">

    <video autoplay="true" id="VideoElement" width="600" height="500"></video>   
    <a href="#" id="capture" class="booth-capture-button">Chụp hình</a>
    <canvas id="canvas" width="600" height="500"></canvas>
    <script type="text/javascript">
       alert("Khi chụp ảnh bạn vui lòng di chuyển nhẹ khuôn mặt sang trái, sang phải, lên trên, xuống dưới xa ra và gần camera nhưng để camera vẫn nhận được khuôn mặt của bạn\nSau khi bấm chụp hình vui lòng chờ đến khi hiện thông báo của web \nCảm ơn bạn đã đọc hướng dẫn này ! ")
    </script>
  </div>
    </div>

  </div>
  
 
   <script language="javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        
  <script type="text/javascript">
    
    <?php 
        if (!mkdir('./imgs/'.$_SESSION['User'], 0777, true)) {
            die('Tạo thư mục không thành công');
        }
        ?>;
     var canvas = document.getElementById('canvas');
     var context = canvas.getContext('2d');
    var v = document.querySelector("#VideoElement");
    canvas.style.display = 'none';
    navigator.getUserMedia= navigator.getUserMedia || navigator.webkitGetUserMedia ||  navigator.mozGetUserMedia ||  navigator.msGetUserMedia ||  navigator.oGetUserMedia
    if(navigator.getUserMedia){
       navigator.getUserMedia({video:true},handleVideo,videoError);
    }
    function handleVideo(stream) {

      v.srcObject = stream;
    }
    function videoError (e){

    }

    
     document.getElementById('capture').addEventListener('click', function ()
      {
               

        var data = [];
        var maso = <?php echo $_SESSION['User']; ?>;
        document.getElementById("thongbao").innerHTML = "Đang chụp ảnh xin chờ..... ";
        
        for (let i = 0; i < 30; i++) {
          setTimeout(function() {
           context.drawImage(v, 0, 0, 600, 500);
              console.log(i);
             
              if (i ==29)
              {
                alert("Đăng kí thành công !");
              }
           data = canvas.toDataURL(); 
            $.ajax({
                type: "POST",
                url: "saveimg.php",
                async: false,
                data: {
                    maso: maso,
                    stt: i,
                    imgBase64: data 
                },
                sucess:  function () {
                 
                   
                }
            })
          }, 300); 

        }           
    });


  </script>
</body>
</html>

