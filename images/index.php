<?php
header("Content-Type= image/png");


$image = imagecreatefromjpeg("dog.jpg");
imagepng($image);


