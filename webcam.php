<?php 
        $location = "/home/hoangphuc/ftp/files/camera/1500086";
        $uold     = umask(0);

        mkdir($location,0777,true);
        umask($uold);
    ?>;