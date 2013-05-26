<?php
/* @var $this ShipmentController */
/* @var $model Shipment */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'shipment-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <div class="row-fluid">
        <p class="note">Fields with <span class="required">*</span> are required.</p>
        <div class="span5">

            <?php echo $form->errorSummary($model); ?>

            <div class="row">
                <?php echo $form->labelEx($model, 'arrival_date'); ?>               
                <?php
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'name' => 'arrival_date',
                    'attribute' => 'arrival_date',
                    'model' => $model,
                    'options' => array(
                        'dateFormat' => 'yy-mm-dd',
                        'altFormat' => 'yy-mm-dd',
                        'changeMonth' => true,
                        'changeYear' => true,
                        //'appendText' => 'yyyy-mm-dd',
                    ),
                ));
                ?>
                <?php echo $form->error($model, 'arrival_date'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'departure_date'); ?>
                <?php
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'name' => 'departure_date',
                    'attribute' => 'departure_date',
                    'model' => $model,
                    'options' => array(
                        'dateFormat' => 'yy-mm-dd',
                        'altFormat' => 'yy-mm-dd',
                        'changeMonth' => true,
                        'changeYear' => true,
                        //'appendText' => 'yyyy-mm-dd',
                    ),
                ));
                ?>                
                <?php echo $form->error($model, 'departure_date'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'country_of_loading'); ?>
                <?php echo $form->textField($model, 'country_of_loading', array('size' => 45, 'maxlength' => 45)); ?>
                <?php echo $form->error($model, 'country_of_loading'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'country_of_discharge'); ?>
                <?php echo $form->textField($model, 'country_of_discharge', array('size' => 45, 'maxlength' => 45)); ?>
                <?php echo $form->error($model, 'country_of_discharge'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'commodity'); ?>
                <?php echo $form->textField($model, 'commodity', array('size' => 45, 'maxlength' => 45)); ?>
                <?php echo $form->error($model, 'commodity'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'type'); ?>
                <?php echo $form->dropDownList($model,'type', Shipment::model()->getTypeOptions()); ?>
                <?php echo $form->error($model, 'type'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'bulk_cargo'); ?>
                <?php echo $form->dropDownList($model,'bulk_cargo', Shipment::model()->getBCargoOptions()); ?>
                <?php echo $form->error($model, 'bulk_cargo'); ?>
            </div>
        </div>

        <div class="span5">
            <div class="row">
                <?php echo $form->labelEx($model, 'port_id'); ?>
                <?php echo $form->dropDownList($model,'port_id', Port::model()->getAllports()); ?>
                <?php echo $form->error($model, 'port_id'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'container_id'); ?>
                <?php echo $form->dropDownList($model, 'container_id', Container::model()->getAllContainers()); ?>
                <?php echo $form->error($model, 'container_id'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'shipper_id'); ?>
                <?php echo $form->dropDownList($model,'shipper_id', Shipper::model()->getAllShippers()); ?>
                <?php echo $form->error($model, 'shipper_id'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'consignee_id'); ?>
                <?php echo $form->dropDownList($model,'consignee_id', Consignee::model()->getAllConsignees()); ?>
                <?php echo $form->error($model, 'consignee_id'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'agent_id'); ?>
                <?php echo $form->dropDownList($model,'agent_id', Agent::model()->getAllAgents()); ?>
                <?php echo $form->error($model, 'agent_id'); ?>
            </div>

            <div class="row buttons">
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
            </div>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->