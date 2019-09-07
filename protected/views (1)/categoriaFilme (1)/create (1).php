<?php
/* @var $this CategoriaFilmeController */
/* @var $model CategoriaFilme */

$this->breadcrumbs=array(
	'Categoria Filmes'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'Inicio Filmes', 'url'=>array('index')),
//	array('label'=>'Manage CategoriaFilme', 'url'=>array('admin')),
//);
?>

<h1>Create CategoriaFilme</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>