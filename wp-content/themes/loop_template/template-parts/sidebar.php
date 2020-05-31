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
                <h1>
                    <?php echo esc_html( $category->name ); ?>
                 </h1>
                 <ul class="items">
                     <?php
                         $subCategories = get_categories( array(
                               'orderby' => 'name',
                               'parent'  => $category->term_id,
                               'hide_empty' => true,
                               'exclude' => 1
                           ) );
                         foreach ( $subCategories as $subCategory ) { ?>
                             <li>
                                <a href="<?php echo get_category_link($subCategory->term_id); ?>">
                                    <?php echo esc_html( $subCategory->name ); ?>
                                </a>
                             </li>
                     <?php } ?>
                 </ul>
            </li>
          <?php } ?>
      </ul>
  <nav>
</aside>

