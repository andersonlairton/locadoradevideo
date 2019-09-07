<?php
/* @var $this FilmesController */
/* @var $data Filmes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duracao')); ?>:</b>
	<?php echo CHtml::encode($data->duracao); ?>
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