<?php
$cakeDescription = __d('cake_dev', 'Unibac');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

		echo $this->Html->script('jquery-2.1.1.min');
	?>
</head>
<body>	<div id="container">
		<div id="header"> 
			Unibac
			<div class="funcioneslog">
				<?php
					if($logged_in):
						$nombrecompleto=$this->Session->read('persona.nombres')." ".$this->Session->read('persona.apellidos');
						echo $nombrecompleto.",   ";
						echo $this->Html->link('Salir', '/usuarios/logout');
					endif;					
				?>
			</div>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="pie">
			<hr>
        </div> 
		<div id="derechos">
			Desarrollado por: Christian Segundo Ortega : christian.segundo@hotmail.com
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
