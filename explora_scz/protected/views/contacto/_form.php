<?php
/* @var $this ContactoController */
/* @var $model Contacto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contacto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_contacto'); ?>
		<?php echo $form->textField($model,'id_contacto'); ?>
		<?php echo $form->error($model,'id_contacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tipo_contacto_fk'); ?>
		<?php echo $form->textField($model,'id_tipo_contacto_fk'); ?>
		<?php echo $form->error($model,'id_tipo_contacto_fk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->