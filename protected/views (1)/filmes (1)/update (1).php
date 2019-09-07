<?php
/* @var $this FilmesController */
/* @var $model Filmes */

$this->breadcrumbs=array(
	'Filmes'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Filmes', 'url'=>array('index')),
	array('label'=>'Create Filmes', 'url'=>array('create')),
	array('label'=>'View Filmes', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Filmes', 'url'=>array('admin')),
);
?>

<h1>Update Filmes <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>