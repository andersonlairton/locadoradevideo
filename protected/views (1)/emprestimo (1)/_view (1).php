<?php
/* @var $this EmprestimoController */
/* @var $data Emprestimo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Codigo de locacao')); ?>:</b>
	<?php echo CHtml::encode($data->Id); ?>
	<br />
	<b><?php //echo CHtml::encode($data->getAttributeLabel('Duracao')); ?></b>
	<?php //echo CHtml::encode($data->Duracao); ?>
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('data de Emprestimo:'))?></b>
	<?php echo Chtml::encode($data->Data_Locacao);?>
	<br/>

	<b><?php echo CHtml::encode($data->getAttributeLabel('Data de devolucao:'))?></b>
	<?php echo CHtml::encode($data->Data_Devolucao);?>
	<br/>
	<b>
		<?php
		if(is_null($data->Dia_devolvido))
		{
		 echo CHtml::link(CHtml::encode($data->getAttributeLabel('Devolver filme'),$data->Id), array('update', 'id'=>$data->Id)); 
		}else
		{
			echo Chtml::encode($data->getAttributeLabel('Devolvido em:'));
			echo CHtml::encode($data->Dia_devolvido);
		}
		;?>
		</b>
	<br/>

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
	<b>
		<?php echo CHtml::encode($data->getAttributeLabel('Descricao do filme')); ?>:</b>
		<?php echo CHtml::encode($data->fkfilme->titulo)?>
<br />
<b>
	<?php
	
	//echo chtml::link(CHtml::encode(array('label'=>'Update Emprestimo', 'url'=>array('update', 'id'=>$model->Id))) ?>
</b>

</div>