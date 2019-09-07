<?php
/* @var $this FilmesController */
/* @var $model Filmes */

$this->breadcrumbs=array(
	'Filmes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Inicio Filmes', 'url'=>array('index')),
	array('label'=>'Cadastrar Filmes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#filmes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Meus filmes</h1>
<?php // echo CHtml::link('Pesquisa avançada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'filmes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'Id',
		'titulo',
		'duracao',
		'Sinopse',
		'Disponivel',
		'Categoria',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
