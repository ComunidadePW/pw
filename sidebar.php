<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage pw
 * @since pw 0.0.1
 */
?>
    <aside id="sidebar" class="fright no-right" role="complementary">
        <h2>Categorias</h2>
        <ul class="categories">
            <?php wp_list_categories('sort_column=name&title_li='); ?>
        </ul>
    </aside><!-- #sidebar -->