<?php
/* @var $this LocacaoControllerController */
/* @var $model Locacao */

$this->breadcrumbs=array(
	'Locacaos'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Locacao', 'url'=>array('index')),
	array('label'=>'Create Locacao', 'url'=>array('create')),
	array('label'=>'Update Locacao', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Locacao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Locacao', 'url'=>array('admin')),
);
?>

<h1>View Locacao #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Nome',
		'Telefone',
		'Email',
		'Idade',
	),
)); ?>
