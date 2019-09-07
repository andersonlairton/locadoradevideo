<?php
/* @var $this CategoriaFilmeController */
/* @var $data CategoriaFilme */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
	
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoria')); ?>:</b>
	<?php echo CHtml::encode($data->categoria); ?>
	<?php echo CHtml::link(CHtml::encode('editar'), array('update', 'id'=>$data->id)); ?>
	<br />


</div>