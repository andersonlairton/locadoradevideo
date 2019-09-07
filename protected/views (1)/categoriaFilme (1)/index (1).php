<?php
/* @var $this CategoriaFilmeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Categoria Filmes',
);

$this->menu=array(
	array('label'=>'Cadastrar Categorias', 'url'=>array('create')),
	array('label'=>'Gerenciamento de categorias', 'url'=>array('admin')),
);
?>

<h1>Categoria Filmes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
