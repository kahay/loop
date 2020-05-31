<?php
    $techDataTabs = $productTabs['tech_data_tab']['tab_sections'][0]['tab_section'];

    foreach($techDataTabs as $tab) :
?>
<div class="table">
    <div class="table-header">
        <?php echo $tab['section_title']; ?>
    </div>
    <?php foreach($tab['params_group']['params_group_repeater'] as $tabDetails) : ?>
    <div class="table-row">
        <div class="table-subheader">
            <?php echo $tabDetails['param_name']; ?>
        </div>
        <div class="table-paragraph">
            <?php echo $tabDetails['param_value']?>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php
    endforeach;
    $techDataTabAdditionalImages = $productTabs['tech_data_tab']['tab_additional_images'];
    foreach($techDataTabAdditionalImages as $additionalImage) :
?>
        <img src="<?php echo $additionalImage['url']; ?>" alt="<?php $additionalImage['alt']; ?>">
<?php
    endforeach;
 ?>

