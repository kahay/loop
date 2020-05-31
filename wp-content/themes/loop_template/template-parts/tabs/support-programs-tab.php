<?php $supportSoftware = $productTabs['support_programs_tab']['soft_list']; ?>
<div class="table">
    <div class="table-header-row">
        <div class="table-header program-name-header">
            Nazwa programu	
        </div>
        <div class="table-header company-name-header">
            Nazwa firmy	
        </div>
        <div class="table-header company-adress-header">
            Adres firmy
        </div>
    </div>
    <?php foreach($supportSoftware as $software) :
        $softId = $software['soft']->ID;
    ?>
    <a href="www.comarch.pl/erp" target="_blank" class="table-row">
        <div class="program-name">
           <?php echo the_field('soft_name', $softId); ?>
        </div>
        <div class="company-name">
            <p><?php echo get_field('company_name', $softId); ?> </p>
        </div>
        <div class="company-adress">
        <p>
            <?php echo get_field('company_address_part_1', $softId); ?> <br>
            <?php echo get_field('company_address_part_2', $softId); ?> <br></p>
        </div>
    </a>
    <?php endforeach; ?>
</div>
