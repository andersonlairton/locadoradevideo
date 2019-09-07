<?php
/* @var $this EmprestimoController */
/* @var $data Emprestimo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Codigo de locacao')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Duracao')); ?>:</b>
	<?php echo CHtml::encode($data->Duracao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->Id_cliente); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('Nome Cliente')); ?>:</b>
	<?php //echo CHtml::encode($data()->with('Id_filme','Categoria')->findAll());?>
	<?php //var_dump($data->fkfilme->Categoria[0])var_dump mostra o que esta sendo pego do banco?>
	<?php echo CHtml:: encode($data->fkcliente->Nome)?>
	<br/>
	<b><?php echo CHtml::encode($data->getAttributeLabel('Id_filme')); ?>:</b>
	<?php echo CHtml::encode($data->Id_filme); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('Descricao filme')); ?>:</b>
		<?php echo CHtml::encode(
			Yii::app()->db->createCommand()
    ->select('titulo')
    ->from('filmes')
    ->where('id=:id', array(':id'=>$data->Id_filme))
    ->queryScalar()
); ?>
<br />
	


	
	


</div>