<?php
/* @var $this FilmesController */
/* @var $model Filmes */

$this->breadcrumbs=array(
	'Filmes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Index', 'url'=>array('index')),
	array('label'=>'Gerenciamento Filmes', 'url'=>array('admin')),
	array('label'=>'Criar Categoria de filme','url'=>array('categoriaFilme/create'))
);
?>

<h1>Cadastrar Filmes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>