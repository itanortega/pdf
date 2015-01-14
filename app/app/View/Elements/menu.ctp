<script type="text/javascript">
	
</script>
<?php 
    $persona=$this->Session->read('persona');
    $id_usuario=$persona['id'];
    $menuslista=$this->requestAction('/UsuariosMenus/menuslista/'.$id_usuario);
?>
<div class="actions">
<div class='menu'>
<ul>
<?php 
		$menu=0;
		foreach ($menuslista as $um):
			$idm=$um['Menu']['id'];
			$nombrem=$this->requestAction('/Menus/obtenernombremenu/'.$idm);
			$iconom=$this->Html->image($this->requestAction('/Menus/obtenericonomenu/'.$idm));
			echo "<li><a href='#'>".$iconom."     ".$nombrem."</a>";
			echo "<ul>";
				$menuslistaopciones=$this->requestAction('/UsuariosMenus/menuslistaidopcion/'.$id_usuario.'/'.$idm);
				foreach ($menuslistaopciones as $mlo) {
					$controlador=$mlo['Opcion']['controlador'];
					$vista=$mlo['Opcion']['vista'];
					$opcion=$mlo['Opcion']['nombre'];
					$icono=$mlo['Opcion']['icono'];
					echo "<li>";
					echo $this->Html->link(
					    $this->html->image($icono)."     ".$opcion,
					    array('controller'=>$controlador,'action'=>$vista),
					    array('escape' => false)
					  );
					echo "<li>";
				}
			echo "</ul>";
			echo "</li><br><hr><br>";
		endforeach 
	?>
</ul>
</div>
</div>