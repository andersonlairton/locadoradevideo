<?php
/* @var $this CategoriaFilmeController */
/* @var $model CategoriaFilme */

$this->breadcrumbs=array(
	'Categoria Filmes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Inicio Categorias', 'url'=>array('index')),
	//array('label'=>'Create CategoriaFilme', 'url'=>array('create')),
	//array('label'=>'View CategoriaFilme', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciamento de Categorias', 'url'=>array('admin')),
);
?>

<h1>Trocar nome da categoria <?php echo $model->categoria; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>