<html>
    <head>
        <title><?php echo $title ?></title>
        <?php foreach ($styles as $style => $media) echo html::style($style, array('media' => $media), TRUE), "\n" ?>
        <?php foreach ($scripts as $script) echo html::script($script), "\n" ?>
    </head>
    <body>
       <?php echo $body ?>
        <?php foreach ($after_scripts as $script) echo html::script($script), "\n" ?>
    </body>
</html>