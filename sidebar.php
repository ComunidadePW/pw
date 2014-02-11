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
        <div class="banner-sky"><iframe width="120" scrolling="no" height="600" frameborder="0" marginheight="0" marginwidth="0" src="http://afiliados-01.submarino.com.br/frame.php?franq=AFL-03-42120&amp;tipo=7&amp;banner=1"></iframe></div>
    </aside><!-- #sidebar -->