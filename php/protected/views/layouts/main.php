<?php /* @var $this Controller */ ?>
<?php
Yii::app()->clientscript
        ->registerCssFile(Yii::app()->theme->baseUrl . '/css/bootstrap.css')
        ->registerCssFile(Yii::app()->theme->baseUrl . '/css/font-awesome.min.css')
        ->registerCssFile(Yii::app()->theme->baseUrl . '/css/bootstrap-responsive.css')
        ->registerCssFile(Yii::app()->theme->baseUrl . '/css/custom.css')
// use it when you need it!
        ->registerCoreScript('jquery')
        ->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap-transition.js', CClientScript::POS_END)
        ->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap-dropdown.js', CClientScript::POS_END)
        ->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap-tooltip.js', CClientScript::POS_END)->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap-alert.js', CClientScript::POS_END)
/* ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-modal.js', CClientScript::POS_END )
  ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-scrollspy.js', CClientScript::POS_END )
  ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-tab.js', CClientScript::POS_END )
  ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-popover.js', CClientScript::POS_END )
  ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-button.js', CClientScript::POS_END )
  ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-collapse.js', CClientScript::POS_END )
  ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-carousel.js', CClientScript::POS_END )
  ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-typeahead.js', CClientScript::POS_END )
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>       
        <div id="wrap">
            <div id="mainmenu">
                <div class="navbar navbar-inverse navbar-fixed-top">
                    <div class="navbar-inner">
                        <div class="container">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>                        
                            <?php echo CHtml::link('PortZilla', array('site/index'), array('class' => 'brand'))?>

                            <div class="nav-collapse">
                                <?php
                                if (Yii::app()->user->isGuest) {
                                    //with no user login
                                    $this->widget('zii.widgets.CMenu', array(
                                        'htmlOptions' => array('class' => 'nav pull-right'),
                                        //'activeCssClass' => 'active',
                                        'encodeLabel' => false,
                                        'items' => array(
                                            array('label' => "<i class='icon-signin'></i> " . 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                                        //array('label' => "<i class='icon-signout'></i> ".'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                                        ),
                                    ));
                                } else {
                                    //after user login
                                    $this->widget('zii.widgets.CMenu', array(
                                        'htmlOptions' => array('class' => 'nav pull-right'),
                                        //'activeCssClass' => 'active',
                                        'encodeLabel' => false,
                                        'items' => array(
                                            array('label' => "<i class='icon-dashboard'></i> " . 'Dashboard', 'url' => array('/site/index')),
                                            //array('label' => "<i class='icon-signin'></i> ".'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                                            array('label' => "<i class='icon-signout'></i> " . 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                                        ),
                                    ));
                                }
                                ?>                                
                            </div><!--/.nav-collapse -->
                        </div>
                    </div>
                </div>
            </div><!-- mainmenu -->            

            <div class="container">
                <?php echo $content; ?>

                <div class="clear"></div>            
            </div>

        </div><!-- page -->

        <div id="footer">
            <div class=" container span12 pull-right">
                <p class="pull-right">
                    &copy; <?php echo date('Y') ?> <a href='https://github.com/TrainingCoders4AfricaGhana/PortZilla' target='_blank'>PortZilla, Dev Team </a>
                    | Project built as part of Coder4Africa training program.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
                </p>
            </div>
        </div>            
    </body>
</html>
