<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once(Export.php);
            $produk = new Export();
            $produk ->insert();  
        ?>
    </body>
</html>