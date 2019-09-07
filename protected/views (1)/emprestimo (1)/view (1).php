<?php
/* @var $this EmprestimoController */
/* @var $model Emprestimo */

$this->breadcrumbs=array(
	'Emprestimos'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'Inicio Emprestimo', 'url'=>array('index')),
	//array('label'=>'Create Emprestimo', 'url'=>array('create')),
	array('label'=>'Update Emprestimo', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Excluir emprestimo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Deseja excluir o registro do Emprestimo?')),
	array('label'=>'Gerenciamento de Emprestimo', 'url'=>array('admin')),
);
?>

<h1>View Emprestimo #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Duracao',
		'Id_cliente',
		'Id_filme',
		'descricao',
	),
)); ?>
