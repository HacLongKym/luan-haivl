<div id="version_info">

    <?php 
        $json = @file_get_contents('https://s3.amazonaws.com/ninja-media-script/info.json');
        $obj = json_decode($json);
        $version = 0;
        if(isset($obj->version)){
            $version = $obj->version;
        }
        
        $script_version = "1.5.1";

    ?>

    <div class="current_version"><i class="ion ion-bookmark"></i> Version: <span><?= $script_version; ?></span></div>
    <?php if($version == $script_version): ?>
        <div class="uptodate">You're all up-to-date</div>
    <?php elseif($version == 0): ?>
        <div class="latest_version">We could not retrieve the latest version</div>
    <?php elseif($version > $script_version): ?>
        <div class="latest_version">Latest version: <span><?= $version; ?></span><a href="<?= URL::to('admin/update') ?>" data-section="update" class="ajax" data-header="<i class='fa fa-cloud-upload'></i> Update to the latest version">Click here to update</a></div>
    <?php endif; ?>

    <div class="clear"></div>
</div>
