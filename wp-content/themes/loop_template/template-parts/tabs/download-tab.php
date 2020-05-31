<?php $downloadTabs = $productTabs['download_tab']['tab_files'];
    foreach($downloadTabs as $tab) :
?>
<a class="download-row" target="_blank" href="<?php echo $tab['tab_file']['url']; ?>">
    <div class="img-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/file-pdf.svg" alt="">
    </div>
    <div class="title">
        <?php echo $tab['tab_file_name']; ?>
    </div>
    <div class="download-text">
        <span>pobierz</span>
    </div>
</a>
<?php endforeach; ?>
