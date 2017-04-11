<?php  
include './config.php';
    include '../Login/Control.php';
    $pageTitle = 'display';
    include '../Header and Footer/Header.php';
    include '../Header and Footer/Nav.php';
?>

<?php
    $max_file_size = 1000000;
    //grab name of ingredient from GET    
    //connect to database
    require_once '../lib/Database.php';
    $db = new Database();
    
?>
<?php
if ($_FILES && isset ( $_FILES ["image"] )) { 
	if ($_FILES ["image"] ["error"] == UPLOAD_ERR_OK) {
		if ($_FILES ["image"] ["size"] > $max_file_size) {
			$error_msg = "File is too large.";
		} else {
			$ext = parseFileSuffix ( $_FILES ['image'] ['type'] );
			if ($ext == '') {
				$error_msg = "Unknown file type";
			} else {
				// Let database save assign unique integer id.
				
				$fid = $db->saveImage ( $_FILES ["image"], $ext );
				if ($fid == - 1) {
					$error_msg = "Unable to store image in DB";
				} else {
					if (! file_exists ( $config->upload_dir )) {
						if (! mkdir ( $config->upload_dir )) {
							$error_msg = "Attempt to make folder: \"" . $config->upload_dir . "\" failed";
						}
					}
					$filename = str_pad ( $fid, $config->pad_length, "0", STR_PAD_LEFT ) . "." . $ext;
					move_uploaded_file ( $_FILES ["image"] ["tmp_name"], $config->upload_dir . $filename );
				}
			}
		}
	} else if ($_FILES ["image"] ["error"] == UPLOAD_ERR_INI_SIZE || $_FILES ["image"] ["error"] == UPLOAD_ERR_FORM_SIZE) {
		$error_msg = "File is too large.";
	} else {
		$error_msg = "An error occured. Please try again. <!-- " . $_FILES ["image"] ["error"] . " -->";
	}
}

?>
    <!-- display ingredient information --> 
    <div class="container-fluid capers-container">
        <div class="col-md-2 hidden-sm hidden-xs sidebar"></div>
        <div class="col-md-8 content">
            <div class = "ingredient_title"><h1><?php echo "Add Your Own Ingredient!";?></h1></div>
                        <form method="post" enctype="multipart/form-data" class="form-inline">
				<div class="form-group">
					<label class="sr-only" for="image">Upload Image</label> 
					<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" /> 
					<input type="file" class="form-control" name="image" id="image" />
				</div>
                                <br>
                                <br>
				<input type="text" name="name" id="image" />
                                <br>
                                <br>
				<input type="text" name="descript" id="image" />
				<br>
                                <button type="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-upload" aria-label="Upload"></span>
				</button>
				
			</form>
        </div>
        <div class="col md-2 hidden-sm hidden-xs sidebar"></div>
    </div>

    <?php
/* Support functions for handling image upload above. */
function parseFileSuffix($iType) {
	if ($iType == 'image/jpeg') {
		return 'jpg';
	}
	if ($iType == 'image/gif') {
		return 'gif';
	}
	if ($iType == 'image/png') {
		return 'png';
	}
	if ($iType == 'image/tif') {
		return 'tif';
	}
	return '';
}

?>

<?php include '../Header and Footer/Footer.php';
