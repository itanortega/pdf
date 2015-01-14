<div class="pdfs view">
<?php 
	if($id==4){
		echo "<div class='divpdf'>";
		echo $this->Html->link(
                        '1.pdf',
                        "/files/1.pdf",
                        array(
                            'escape'=>false,
                            'target'=>"_blank"
                        )
                   );
		echo "<br />";
		echo $this->Html->link(
                        '2.pdf',
                        "/files/2.pdf",
                        array(
                            'escape'=>false,
                            'target'=>"_blank"
                        )
                   );
		echo "<br />";
		echo $this->Html->link(
                        '3.pdf',
                        "/files/3.pdf",
                        array(
                            'escape'=>false,
                            'target'=>"_blank"
                        )
                   );
		echo "</div>";
	}else if($id==3){
		echo "<div class='divpdf'>";
		echo $this->Html->link(
                        '3.pdf',
                        "/files/4.pdf",
                        array(
                            'escape'=>false,
                            'target'=>"_blank"
                        )
                   );
		echo "<br />";
		echo $this->Html->link(
                        '4.pdf',
                        "/files/4.pdf",
                        array(
                            'escape'=>false,
                            'target'=>"_blank"
                        )
                   );
		echo "<br />";
		echo $this->Html->link(
                        '5.pdf',
                        "/files/5.pdf",
                        array(
                            'escape'=>false,
                            'target'=>"_blank"
                        )
                   );
		echo "</div>";
		
	}else{
		echo "No hay archivos cargados para usted.";
	}
?>
</div>
<?php echo $this->element('menu');?>