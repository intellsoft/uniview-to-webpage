<?php
/*
 * M.Ali.Abbaspor
 * Desc: show uniview cctv image camera in web page
 * and refresh every time
 *
 * https:;//intellsoft.ir/
 *
 * Model: IPC2124SR3-DPF36
 * Firmware Version: GIPC-B6102.26.45.220623

 * note: only work in uniview network camera
 */

require_once ("Config.php");

$camera_Image =  '<img id="myImage" width="'.$output_Image_Width.'" height="'.$output_Image_height.'" src="cctv.php">';

?>
<html>
<head>
    <title>بارگزاری تصویر دوربین مداربسته uniview در صفحه سایت</title>
</head>
<body>

<?php echo $camera_Image; ?>
<script>

    var intervalId = window.setInterval(function(){
        refreshImage();
    }, <?php echo $Load_Interval; ?>);


    function refreshImage(){
        document.getElementById("myImage").src = "cctv.php"+ `?v=${new Date().getTime()}`;
    }
</script>

</body>
</html>
