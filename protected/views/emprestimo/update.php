<?php
/* @var $this EmprestimoController */
/* @var $model Emprestimo */

$this->breadcrumbs=array(
	'Emprestimos'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Emprestimo', 'url'=>array('index')),
	//array('label'=>'Create Emprestimo', 'url'=>array('create')),
	//array('label'=>'View Emprestimo', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Emprestimo', 'url'=>array('admin')),
);
?>

<h1>Update Emprestimo <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>