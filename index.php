<?php

include "FaceDetector.php";

$detector = new svay\FaceDetector('detection.dat');
$detector->faceDetect('img3.jpg');
$detector->toJpeg();

?>
