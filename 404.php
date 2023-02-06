<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package dmz_tula_nuts
 */

   get_header();
?>
<style>
.notFound {
   height: calc(100vh - 25rem);
   font-size: 4.5rem;
   color: darkred;
   display: flex;
   align-items: center;
   justify-content: center;
}
</style>
<main id="main" class="main">
<?php get_template_part( 'snippets/menu' ); ?>
<div class="notFound">
   404
</div>
</main>
<?php
   get_footer();