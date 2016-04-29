<html>
<head>
    <title>My Form</title>
</head>
<body>

<h3>Your form was successfully submitted!</h3>
<!--//TODO: Mostrar mensajes de error al procesar un formulario con alerts de bootstrap!
<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>
-->
<p><?php echo anchor('upload', 'Sube otro archivo'); ?></p>

</body>
</html>

