<?php
require "inc/header.php";
?>


<p style="color: darkslategrey; font-size: 1.5rem; text-transform: capitalize; margin-bottom: 5px;">Upload Your Document(s)</p>

<form action="" method="POST" enctype="multipart/form-data">
    <i style="color: #ff2800;">[<b>Note:</b> file format must be: JEPG, PNG, GIF, SVG, PDF  & Size: upto 2 MB ]</i><br><br><br>

    <input type="file" name="document_upload">
    <br><br>
    <button type="submit" name="upload_form">Upload</button>
    <br><br>
</form>

<h2>Output: </h2>
<p style="font-size: 2rem;">

<?php

if ( isset( $_POST['upload_form'] ) ) {
    $path = $_FILES['document_upload']['name'];
    $path_tmp = $_FILES['document_upload']['tmp_name'];
    $file_size = $_FILES['document_upload']['size'] / 1049000; // For size calculation
    $max_size = 2098000;                                       //
    $uploaded_size = round( $file_size, 2 );   // 
    // echo $path; 1,049,000 2,098,000
    // Logic start
    if ( $max_size < $file_size ) {
        echo $path . " you try to upload " . $uploaded_size . " MB is exceeded the file size, so you can not upload. Please try again with reduce the size.";
    } else {

            $extension = pathinfo($path, PATHINFO_EXTENSION);
            $filename = "site_name_". time(). "." .$extension;

            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mime = finfo_file($finfo, $path_tmp);

            if($mime != "image/jpeg" && $mime != "image/png"){
                echo $mime." invalid photo type.";
            } else { 
                move_uploaded_file($path_tmp, 'inc/images/' .$filename);
                echo $path . " uploded succesfully.";
            }

    }
    // End logic
}

?>




</p>







<?php
require "inc/footer.php";
?>