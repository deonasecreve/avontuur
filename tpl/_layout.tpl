<!doctype html>
<html>
<head>
    <title>{$pagetitle}</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>_layout.tpl {$location_object->x}, {$location_object->y}</h1>
    <p>{$message}</p>


    <div class="sidebar">
        <h2>Menu</h2>
        <ul>
            <li>Item</li>
            <li>Item</li>
            <li>Item</li>
            <li>Item</li>
            <li>Item</li>
        </ul>

        <h2>Minimap</h2>

        <div class="minimap">
            {for $y = 0 to 17 }
                <div class="row" id="{$y}">
                    {for $x = 0 to 17 }
                         <div class="cell" id="{$x},0"></div>
                    {/for}
                </div>
            {/for}


        </div>

    </div>

    <div class="content">
        <h1>{$location_object->title}</h1>
        <img class="location_image" src="{$location_object->image_url}">
        <p>{$location_object->description}</p>

    </div>

</body>
</html>