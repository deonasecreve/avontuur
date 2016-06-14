<!doctype html>
<html>
<head>
    <title>{$pagetitle}</title>
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
                <?php for ($x=0; $x<18; $x++) { ?>
                     <div class="cell" id="0,0"></div>
                <?php } ?>
            </div>


        </div>

    </div>



</body>
</html>