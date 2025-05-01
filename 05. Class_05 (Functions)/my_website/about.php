<?php
    require("inc/header.php");
?>


<h1 style="text-align: center; color: darkslategrey; text-transform: capitalize; margin-bottom: 30px;">Uploaded Images</h1>
<p style="color: forestgreen; text-align: center; font-size: 1.5rem;">[Note: Go to <a href="file_upload.php">upload page</a> and upload valid photos. You will see your uploaded photos here.]</p>
<div style="display: flex; flex-direction: row; gap: 30px; flex-wrap: wrap; justify-content: space-around; margin-bottom: 50px;">
<?php 
$dir = "inc/images";
$img_files = glob($dir. '/*.{jpg,png}', GLOB_BRACE);
if(is_array($img_files)){
    foreach($img_files as $img){
        ?>
        <img style="width: 300px; height: auto;" src="<?php echo $img; ?>" alt="">
        <?php
    }
}

?>

</div>



<h2 style="text-align: center; color: darkslategrey; text-transform: capitalize; margin-bottom: 30px;">Sample Images</h2>

<div style="display: flex; flex-direction: row; gap: 30px; flex-wrap: wrap; justify-content: space-around;">
    <img style="width: 300px; height: auto;" src="inc/bankoff-fb-qrcode.png" alt="">
    <img style="width: 300px; height: auto;" src="inc/bankoff-fb-qrcode.png" alt="">
    <img style="width: 300px; height: auto;" src="inc/bankoff-fb-qrcode.png" alt="">
    <img style="width: 300px; height: auto;" src="inc/bankoff-fb-qrcode.png" alt="">
    <img style="width: 300px; height: auto;" src="inc/bankoff-fb-qrcode.png" alt="">
    <img style="width: 300px; height: auto;" src="inc/bankoff-fb-qrcode.png" alt="">
</div>
<?php
    require("inc/footer.php");
?>