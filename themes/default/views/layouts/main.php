<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Epsilon Consulting &amp; Development Services (ECDS)">
        <meta name="generator" content="Duncan Brothers (Bangladesh) Limited" />
        <!-- FAVICONS -->
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/favicon.ico" type="image/x-icon">
        <!-- Bootstrap core CSS -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/sticky-footer.css" rel="stylesheet">
        <!-- Main styles for this template -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/lytebox.css" type="text/css" media="screen" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>
    <body>
        <!-- Begin page content -->
        <div class="container">
            <?php echo $content; ?>                     
        </div>
        <footer class="footer">
            <div class="footer-top-border"></div>
            <div class="container">
                <div class="row footer-top">
                    <div class="col-md-3">
                        Copyright &copy; <?php echo date('Y'); ?> <?php echo Yii::app()->name; ?>.<br /> All Rights Reserved.                        
                    </div>
                    <div class="col-md-9">
                        <marquee scrollamount="10" scrolldelay="200" onMouseOver="this.setAttribute('scrollamount', 0, 0);" OnMouseOut="this.setAttribute('scrollamount', 6, 0);">
                            <?php Banner::get_scroll(); ?>
                        </marquee>
                    </div>
                </div>                
            </div>            
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 camellia">
                            <?php echo CHtml::link('www.camellia.plc.uk', 'http://www.camellia.plc.uk', array('target' => '_blank', 'class' => 'link-text-color')); ?>                            
                        </div>
                        <div class="col-md-9">
                            <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/images/logo_camellia2.png', 'Camellia plc', array('title' => 'Camellia plc', 'style' => 'float:right;')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- JQUERY JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- BOOTSTRAP JS -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" language="javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/lytebox.js"></script>
    </body>
</html>
