<?php 
        if (!mkdir('./imgs/'.$_SESSION['User'], 0777, true)) {
            die('Tạo thư mục không thành công');
        }
    ?>;