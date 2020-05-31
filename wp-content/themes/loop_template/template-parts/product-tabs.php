<div id="tab-example" class="tab-container">
  <ul class="tablist" aria-controls="tab-example" role="tablist">
    <li class="tab-header" role="tab" aria-controls="tab-example_1" tabindex="0" aria-selected="false">opis i funkcje</li>
    <li class="tab-header" role="tab" aria-controls="tab-example_2" tabindex="0" aria-selected="false">dane techniczne</li>
    <li class="tab-header" role="tab" aria-controls="tab-example_3" tabindex="0" aria-selected="false">wyposażenie dodatkowe</li>
    <li class="tab-header" role="tab" aria-controls="tab-example_4" tabindex="0" aria-selected="false">do pobrania</li>
    <li class="tab-header" role="tab" aria-controls="tab-example_5" tabindex="0" aria-selected="true">programy wspierające</li>


  </ul>
  <main>
    <div id="tab-example_1" class="tab-content desc-func-tab" role="tabpanel" aria-expanded="false">
          <?php get_template_part( 'loop', 'index' ); ?>
    
    </div>
    <div id="tab-example_2" class="tab-content tech-data-tab" role="tabpanel" aria-expanded="false">
    
          <?php include 'tabs\tech-data-tab.php'; ?>
    
    </div>
    <div id="tab-example_3" class="tab-content additional-equipment-tab" role="tabpanel" aria-expanded="false">
    
          <?php include 'tabs\additional-equipment-tab.php'; ?>
    
    </div>
    <div id="tab-example_4" class="tab-content download-tab" role="tabpanel" aria-expanded="false">
    
      <?php include 'tabs\download-tab.php'; ?>
    
    </div>
    <div id="tab-example_5" class="tab-content support-programs-tab" role="tabpanel" aria-expanded="true">
    
      <?php include 'tabs\support-programs-tab.php'; ?>
    
    </div>
  </main>
</div>