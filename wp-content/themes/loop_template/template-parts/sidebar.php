<aside itemscope itemtype="https://schema.org/WPSideBar">
   <nav class="points" >
      <ul class="metismenu" id="menu1">
      <?php
          $categories = get_categories( array(
              'orderby' => 'name',
              'parent'  => 0,
              'hide_empty' => true,
              'exclude' => 1
      ) );
          foreach ( $categories as $category ) { ?>

            <?php 
                 $subCategories = get_categories( array(
                    'orderby' => 'name',
                    'parent'  => $category->term_id,
                    'hide_empty' => true,
                    'exclude' => 1,

                ));
            ?>

            <li class="list">

                
                    <?php 
                      $subCatName = esc_html( $category->name ); 
                    ?>

                    
         
                            <a href="<?php if ($subCategories) { echo '#'; } else { echo  $catLink; } ?>" 
                
                              <?php if($subCategories) { echo 'aria-expanded="false"'; } ?>>
                               <h1 <?php if($subCategories) { echo 'class="has-arrow"'; } ?>>
                               <?php echo $subCatName; ?>
                               </h1>
                            </a>
                        
                 

                 <?php 
                 
                 if($subCategories) : ?>             

                 <ul class="items">
                     <?php
                         foreach ( $subCategories as $subCategory ) { ?>
                             <li>
                                <a href="<?php echo get_category_link($subCategory->term_id); ?>">
                                    <h1><?php echo esc_html( $subCategory->name ); ?></h1>
                                </a>
                             </li>
                     <?php } ?>
                 </ul>
                 <?php endif; ?>
            </li>
          <?php } ?>
      </ul>
  <nav>
</aside>
