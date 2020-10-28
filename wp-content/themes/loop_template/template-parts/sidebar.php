<aside itemscope itemtype="https://schema.org/WPSideBar">
   <nav class="points">
      <ul class="sidebar-category">
      <?php
          $categories = get_categories( array(
              'orderby' => 'name',
              'parent'  => 0,
              'hide_empty' => true,
              'exclude' => 1
      ) );
          foreach ( $categories as $category ) { ?>
            <li class="list">
            <?php 
                 $subCategories = get_categories( array(
                    'orderby' => 'name',
                    'parent'  => $category->term_id,
                    'hide_empty' => true,
                    'exclude' => 1,

                ));
            ?>
                <h1 <?php if($subCategories) { echo 'class="arrow"'; } ?>>
                    <?php $subCatName = esc_html( $category->name ); ?>

                    <?php
                        if($subCategories){
                            echo $subCatName;
                        }else{ ?>
                            <?php $catLink = get_category_link($category->term_id); ?>
                            <a href="<?php echo $catLink; ?>">
                                <?php echo $subCatName; ?>
                            </a>
                        <?php } ?>
                 </h1>

                 <?php 
                 
                 if($subCategories) : ?>             

                 <ul class="items">
                     <?php
                         foreach ( $subCategories as $subCategory ) { ?>
                             <li>
                                <a href="<?php echo get_category_link($subCategory->term_id); ?>">
                                    <?php echo esc_html( $subCategory->name ); ?>
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

