<?php

if(isset($_FILES['profile_photo'])){
$dir_name="C:/MAMP/htdocs/chinmay/data";//change
$data_url="http://localhost:8888/chinmay/data/"; //change to server url
$uploadfile = basename($_FILES['profile_photo']['name']);
$itempath=$dir_name."/".$uploadfile;

echo $itempath;
$item_extension=pathinfo($itempath,PATHINFO_EXTENSION);
$uploadsize=$_FILES['profile_photo']['size'];
$temp=$_FILES['profile_photo']['tmp_name'];
echo $temp;

if ($uploadsize>1.8e+8) {?>
    <h3>Item size should not be more than 200MB</h3>
    <?php
    die();
}

if (move_uploaded_file($_FILES['profile_photo']['tmp_name'], $itempath)) {
#rename($itempath,$dir_name."/items/"."item1.".$item_extension);
?>
<script type="text/javascript">
    alert("item Uploaded");
</script>
<h3>Item Uploaded Successfully</h3>
<h4><?php #echo $uploadsize;
echo("All uploaded files can be found at ".$data_url);?></h4>
<br>
<h3><?php echo("Your uploaded file can be found at ".$data_url.$uploadfile); ?></h3>
<?php


}
else{
    ?>
<h3>item Cannot be uploaded</h3>
<h3>Here is some more debugging info:</h3>
<?php
print_r($_FILES);
} }
else{ ?>

    <h3>item Cannot be uploaded because of connection error.<br>
    item size should not be more than 200MB.
    But you can increase the  maximum allowable upload size in php.ini file by changing the upload_max_size and post_max_file</h3>
    <?php
}

?>
