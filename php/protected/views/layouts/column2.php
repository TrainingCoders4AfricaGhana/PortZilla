<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container">    
    <div class="row-fluid">
        <div class="span-5 last span2">
            <div id="sidebar">
                <?php
                $this->beginWidget('zii.widgets.CPortlet', array(
                    'title' => 'Start',
                ));
                $this->widget('zii.widgets.CMenu', array(
                    'htmlOptions' => array('class' => 'operations sidenav nav nav-list'),
                    'items' => array(
                        array('label' => 'Back to Dashboard', 'url' => array('site/index'))
                    )
                ));
                $this->endWidget();

                $this->beginWidget('zii.widgets.CPortlet', array(
                    'title' => 'Operations',
                ));
                $this->widget('zii.widgets.CMenu', array(
                    'items' => $this->menu,
                    'htmlOptions' => array('class' => 'operations sidenav nav nav-list'),
                ));
                $this->endWidget();
                ?>
            </div><!-- sidebar -->
        </div>
        <div class="span-19 span10">
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                    //Changes default 'Home' label in breadcrumbs to 'Dashboard'
                    'homeLink' => CHtml::link('Dashboard', Yii::app()->homeUrl),
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>                

            <div id="content">
                <?php echo $content; ?>
            </div><!-- content -->
        </div>
    </div>
</div>
<?php $this->endContent(); ?>