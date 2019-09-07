<?php
/* @var $this FilmesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Filmes',
);

$this->menu=array(
	array('label'=>'Cadastrar Filmes', 'url'=>array('create')),
	array('label'=>'Gerenciar Filmes', 'url'=>array('admin')),
	array('label'=>'Cadastrar cliente','url'=>array('locacao/create')),
	array('label'=>'Gerenciamento de cliente','url'=>array('locacao/index')),
	array('label'=>'locacoes de titulos','url'=>array('emprestimo/index')),
	array('label'=>'Gerenciar Categorias','url'=>array('categoriaFilme/index')),
);
?>

<h1>Filmes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
