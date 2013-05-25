<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <?php echo $this->Html->charset(); ?>
	<title>
		Proyecto Redes:
		<?php echo $title_for_layout; ?>
	</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        

        
<?php
		
		echo $this->Html->meta('icon');
echo $this->Html->css('bootstrap.min');
		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap-responsive.min');
		echo $this->Html->css('main');
		
echo $this->Html->script('vendor/jquery-1.9.1.min');
echo $this->Html->script('vendor/modernizr-2.6.2-respond-1.1.0.min');
		


	?>

<?php


echo $this->Html->script('vendor/bootstrap.min');


?>


    </head>
    <body>

	<div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Proyecto Redes</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><?php echo $this->Html->link('Empresas',array('controller' => 'empresas', 'action' => 'index')
); ?></li>
                            <li><?php echo $this->Html->link(
    'Hallazgos',
    array('controller' => 'hallazgos', 'action' => 'index')
); ?></li>
                            
                        </ul>
                        
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">

		
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
		</div>
	</div>





	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
