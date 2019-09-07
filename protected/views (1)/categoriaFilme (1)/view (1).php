<?php
/* @var $this CategoriaFilmeController */
/* @var $model CategoriaFilme */

$this->breadcrumbs=array(
	'Categoria Filmes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Categorias Cadastradas', 'url'=>array('index')),
	array('label'=>'Cadastrar Nova categoria', 'url'=>array('create')),
	array('label'=>'Editar Categoria', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Apagar Categoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Deseja apagar esta categoria?')),
	array('label'=>'Cadastrar Filme','url'=>array('filmes/create')),

	//array('label'=>'Manage CategoriaFilme', 'url'=>array('admin')),
);
?>

<h1>Categoria #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'categoria',
		'id',
	),
)); ?>
