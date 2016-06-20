<!doctype html>
<html>
<head>
    <title>{$pagetitle}</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>_layout.tpl {$location_object->x}, {$location_object->y}</h1>

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
        <!-- show errors -->

            {if isset($errors) }
            <p style="border: 1px solid red;">
                <ul>
                    {foreach $errors as $error}
                        <li>{$error}</li>
                    {/foreach}
                </ul>
            </p>
            {/if}


        <h1>{$location_object->title}</h1>
        <img class="location_image" src="{$location_object->image_url}">
        <p>{$location_object->description}</p>

        <p>
            <ul>
                {foreach $location_object->choices as $choice}
                    <li><a href="index.php?location_id={$choice->to_location_id}">{$choice->title}</a></li>
                {/foreach}
            </ul>
        </p>

    </div>

</body>
</html>