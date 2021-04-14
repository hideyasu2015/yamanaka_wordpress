<?php

//   管理画面でプラグインを非表示
function remove_menus()
{
  // プラグインを非表示
  //   remove_menu_page ('plugins.php');
  //テーマも非表示
  remove_menu_page('themes.php');
  //設定のパーマリンク非表示              
  remove_submenu_page('options-general.php', 'options-permalink.php');
  //ツール非表示
  remove_menu_page('tools.php');
  //CPT UI非表示         
  remove_menu_page('cptui_main_menu');
}
add_action('admin_menu', 'remove_menus');
