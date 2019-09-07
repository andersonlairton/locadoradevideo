<?php
/* @var $this FilmesController */
/* @var $data Filmes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php

		if($data->Disponivel=='Sim')
		{
			echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); 
		}else{
			echo CHtml::encode($data->Id);
		?>
		<b>
	<?php
			//echo CHtml::encode($data->getAttributeLabel('Dia de devolucao:'));
			
			}

	?></b>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duracao')); ?>:</b>
	<?php 
	echo CHtml::encode($data->duracao);
	echo (' min');
	 ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sinopse')); ?>:</b>
	<?php echo CHtml::encode($data->Sinopse); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Disponivel')); ?>:</b>
	<?php echo CHtml::encode($data->Disponivel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Categoria')); ?>:</b>
	<?php echo CHtml::encode($data->fkcategoria->categoria); ?>
	<br />
	
	
	<b>
	
	
	
	</b>
	


</div>