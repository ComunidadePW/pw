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
    <aside id="sidebar" class="fright column-third no-right" role="complementary">
        <ul>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
            <li>
                <h2>Categorias</h2>
                <ul>
                <?php wp_list_categories('sort_column=name&title_li='); ?>
                </ul>
            </li>
            <?php endif; ?>
        </ul>
    </aside><!-- #sidebar -->