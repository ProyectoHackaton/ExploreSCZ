<?php
/* @var $this EventosController */
/* @var $model Eventos */

$this->breadcrumbs=array(
	'Eventoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Eventos', 'url'=>array('index')),
	array('label'=>'Create Eventos', 'url'=>array('create')),
	array('label'=>'Update Eventos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Eventos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Eventos', 'url'=>array('admin')),
);
?>

<h1>View Eventos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
		'precio',
		'fecha_inicio',
		'fecha_fin',
		'id_descripcion_fk',
	),
)); ?>
