<?php
/* Smarty version 3.1.29, created on 2016-06-14 09:37:16
  from "/www/sites/avontuur/tpl/_layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575fb42c80aac2_08319310',
  'file_dependency' => 
  array (
    '1705047b16ef82f80fc9dc076e4186077d1e8ef8' => 
    array (
      0 => '/www/sites/avontuur/tpl/_layout.tpl',
      1 => 1465889832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575fb42c80aac2_08319310 ($_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>_layout.tpl</h1>



    <div class="sidebar">
        <h2>Menu</h2>
        <h3>item</h3>
        <h3>item</h3>
        <h3>item</h3>
        <h3>item</h3>

        <h2>Minimap</h2>

        <div class="minimap">
            <div class="row">
                <?php echo '<?php ';?>for ($x=0; $x<18; $x++) { <?php echo '?>';?>
                     <div class="cell" id="0,0"></div>
                <?php echo '<?php ';?>} <?php echo '?>';?>
            </div>


        </div>

    </div>



</body>
</html><?php }
}
