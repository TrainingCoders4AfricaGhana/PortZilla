<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<h1>Welcome to <b><?php echo CHtml::encode(Yii::app()->name); ?></b></h1>
<blockquote>
    <?php if (!Yii::app()->user->isGuest): ?>
        <small>You last logged in on </small>
        <?php echo date('l, F d, Y, g:i a', Yii::app()->user->time_stamp); ?>.
    <?php endif; ?>
</blockquote>

<div class="row-fluid">
    <ul class="thumbnails">
        <li class="thumbnail actions">                          
            <?php echo CHtml::link("<i class='icon-group'></i><br/>
                Manage Users", array('user/index')); ?>          
        </li>
        <li class="thumbnail actions">
            <?php echo CHtml::link("<i class='icon-flag'></i><br/>
                Manage Ports", array('port/index')); ?>
        </li>
        <li class="thumbnail actions">
            <?php echo CHtml::link("<i class='icon-globe'></i><br/>
                Manage Shipments", array('shipment/index')); ?>
        </li>
        <li class="thumbnail actions">
            <?php echo CHtml::link("<i class='icon-link'></i><br/>
                Manage Vessels", array('vessel/index')); ?>
        </li>
    </ul>
    <ul class="thumbnails">
        <li class="thumbnail actions">
            <?php echo CHtml::link("<i class='icon-inbox'></i><br/>
                Manage Containers", array('container/index')); ?>
        </li>            
        <li class="thumbnail actions">
            <?php echo CHtml::link("<i class='icon-user'></i><br/>
                Manage Shippers", array('shipper/index')); ?>
        </li>
        <li class="thumbnail actions">
            <?php echo CHtml::link("<i class='icon-user'></i><br/>
                Manage Agents", array('agent/index')); ?>
        </li>
        <li class="thumbnail actions">
            <?php echo CHtml::link("<i class='icon-user'></i><br/>
                Manage Consignees", array('consignee/index')); ?>
        </li>        
    </ul>
</div>