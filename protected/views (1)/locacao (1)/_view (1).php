<?php
/* @var $this LocacaoControllerController */
/* @var $data Locacao */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('identificacao')); ?>:</b>
	<?php echo CHtml::encode($data->Id);?>

	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nome')); ?>:</b>
	<?php echo CHtml::encode($data->Nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefone')); ?>:</b>
	<?php echo CHtml::encode($data->Telefone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::encode($data->Email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Idade')); ?>:</b>
	<?php echo CHtml::encode($data->Idade); ?>
	<br />
	<?php echo CHtml::link(CHtml::encode('Editar'), array('update', 'id'=>$data->Id)); ?>


</div>