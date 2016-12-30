<?php /* important for not accessing this file directly */ die(); ?>
<?php

function move_files_over(){
	if(file_exists('../application.zip')){
		unlink('../application.zip');
	}
	$content = file_get_contents('https://s3.amazonaws.com/ninja-media-script/application.zip');
	file_put_contents('../application.zip', $content);
}

function rename_old_application_folder(){
	rename('../application', '../application_old');
}

function unzip_new_application_folder(){
	$zip = new ZipArchive;
	if(file_exists('../application.zip')){
		$res = $zip->open('../application.zip');
		if ($res === TRUE) {
			$zip->extractTo('../');
  			$zip->close();
		} else {
		    echo 'error extracting upgrade';
		}
	} else {
		echo 'application upgrade ZIP does not exist';
	}
}

function remove_old_application_folder(){
	$dirPath = '../application_old';
	
	foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dirPath, FilesystemIterator::SKIP_DOTS), RecursiveIteratorIterator::CHILD_FIRST) as $path) {
    	$path->isDir() ? rmdir($path->getPathname()) : unlink($path->getPathname());
	}
	rmdir($dirPath);
}

function remove_application_zip_file(){
	unlink('../application.zip');
}

move_files_over();
rename_old_application_folder();
unzip_new_application_folder();
remove_old_application_folder();
remove_application_zip_file();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Upgrade</title>
</head>
<body style="text-align:center; padding-top:20px;">
<a href="/upgrade/" target="_parent" style="border-radius:3px; padding:10px; color:#fff; background:#EE222E; width:200px; margin:0px auto; text-decoration:none;">Finish the Upgrade</a>
</body>
</html>
