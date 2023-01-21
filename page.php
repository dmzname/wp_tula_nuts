<?php
/**
 * Шаблон для отображения всех страниц
 *
 * Это шаблон, который по умолчанию отображает все страницы.
 * Обратите внимание, что это конструкция страниц WordPress.
 * и что другие «страницы» на вашем сайте WordPress могут использовать
 * другой шаблон.
 *
 * @package dmz_tula_nuts
 */

   // get_header();
?>

<style>   
.mesg {
  position: fixed;
  inset: 0 0 0 0;
  display: flex;
  justify-content: center;
  align-items: center;
  text-transform: uppercase;
  color: darkred;
  font-size: 24px;
}
</style>

   <div class="mesg">
		Сайт на реконструкции.
	</div>
   
<?php
   // get_footer();