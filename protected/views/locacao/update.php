<?php
/* @var $this LocacaoControllerController */
/* @var $model Locacao */

$this->breadcrumbs=array(
	'Locacaos'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Locacao', 'url'=>array('index')),
	array('label'=>'Create Locacao', 'url'=>array('create')),
	array('label'=>'View Locacao', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Locacao', 'url'=>array('admin')),
);
?>

<h1>Update Locacao <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>