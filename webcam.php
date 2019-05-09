<?php 
        if (!mkdir('/home/hoangphuc/ftp/files/camera/imgs/'.$_SESSION['User'], 0777, true)) {
            die('Tạo thư mục không thành công');

        }
    ?>;