<?php $this->beginContent('//layouts/main'); ?>
<div class="body-background">
    <div class="row">
        <div class="col-md-3">                                   
        </div>
        <div class="col-md-9">
            <?php
            $logo = CHtml::image(Yii::app()->theme->baseUrl . '/images/logo.jpg', Yii::app()->name, array('title' => Yii::app()->name));
            echo CHtml::link($logo, array('site/index'), array('title' => Yii::app()->name));
            ?>
        </div>
    </div> 
    <div class="row">
        <div class="col-md-3">
            <nav>
                <ul class="nav">
                    <li><?php echo CHtml::link('Home', array('site/index'), array('class' => 'btn btn-xs btn-warning')); ?></li>
                    <li><a href="#" id="btn-1" data-toggle="collapse" data-target="#submenu1" aria-expanded="false" class="btn btn-xs btn-warning">About Duncan</a>
                        <ul class="nav collapse" id="submenu1" role="menu" aria-labelledby="btn-1">
                            <li><?php echo CHtml::link('About Duncan ', array('content/view', 'id' => 2), array('class' => '')); ?></li>
                            <li><?php echo CHtml::link('History of Duncan', array('content/view', 'id' => 3), array('class' => '')); ?></li>
                            <li><?php echo CHtml::link('Camellia PLC', array('content/view', 'id' => 4), array('class' => '')); ?></li>
                            <li><?php echo CHtml::link('Lawrie Group', array('content/view', 'id' => 5), array('class' => '')); ?></li>
                        </ul>
                    </li>
                    <li><a href="#" id="btn-2" data-hover="dropdown" data-toggle="collapse" data-target="#submenu2" aria-expanded="false" class="btn btn-xs btn-warning">Products</a>
                        <ul class="nav collapse" id="submenu2" role="menu" aria-labelledby="btn-2">
                            <li><?php echo CHtml::link('Products', array('content/view', 'id' => 6), array('class' => '')); ?></li>
                            <li><?php echo CHtml::link('Tea', array('content/view', 'id' => 7), array('class' => '')); ?></li>
                            <li><?php echo CHtml::link('Production', array('content/view', 'id' => 8), array('class' => 'submenue-left')); ?></li>
                            <li><?php echo CHtml::link('Garden', array('content/view', 'id' => 9), array('class' => 'submenue-left')); ?></li>
                            <li><?php echo CHtml::link('Gallery', array('gallery/category', 'id' => 1), array('class' => 'submenue-left')); ?></li>
                            <li><?php echo CHtml::link('Rubber', array('content/view', 'id' => 10), array('class' => '')); ?></li>
                            <li><?php echo CHtml::link('Production', array('content/view', 'id' => 11), array('class' => 'submenue-left')); ?></li>
                            <li><?php echo CHtml::link('Garden', array('content/view', 'id' => 12), array('class' => 'submenue-left')); ?></li>
                            <li><?php echo CHtml::link('Gallery', array('gallery/category', 'id' => 2), array('class' => 'submenue-left')); ?></li>
                            <li><?php echo CHtml::link('Natural Mineral Water', array('content/view', 'id' => 13), array('class' => '')); ?></li>
                        </ul> 
                    </li>
                    <li><a href="#" id="btn-3" data-toggle="collapse" data-target="#submenu3" aria-expanded="false" class="btn btn-xs btn-warning">Corporate Responsibility</a>
                        <ul class="nav collapse" id="submenu3" role="menu" aria-labelledby="btn-3">
                            <li><?php echo CHtml::link('Responsibility', array('content/view', 'id' => 14), array('class' => '')); ?></li>
                            <li><?php echo CHtml::link('Primary Health Care', array('content/view', 'id' => 15), array('class' => '')); ?></li>
                            <li><?php echo CHtml::link('CDF Hospital', array('content/view', 'id' => 16), array('class' => '')); ?></li>
                            <li><?php echo CHtml::link('CDF School', array('content/view', 'id' => 17), array('class' => '')); ?></li>
                            <li><?php echo CHtml::link('CDF Orchid Project', array('content/view', 'id' => 18), array('class' => '')); ?></li>
                            <li><?php echo CHtml::link('Yasser Life Guard', array('content/view', 'id' => 19), array('class' => '')); ?></li>
                            <li><?php echo CHtml::link('Environment', array('content/view', 'id' => 20), array('class' => '')); ?></li>
                            <li><?php echo CHtml::link('Other Social Commitments', array('content/view', 'id' => 21), array('class' => '')); ?></li>                            
                        </ul>
                    </li>        
                    <li><a href="#" id="btn-4" data-toggle="collapse" data-target="#submenu4" aria-expanded="false" class="btn btn-xs btn-warning">Associate companies</a>
                        <ul class="nav collapse" id="submenu4" role="menu" aria-labelledby="btn-4">
                            <li><?php echo CHtml::link('Associate Companies', array('content/view', 'id' => 22), array('class' => '')); ?></li>
                            <li><?php echo CHtml::link('Duncan Products Ltd.', array('content/view', 'id' => 23), array('class' => '')); ?></li>
                            <li><?php echo CHtml::link('CWL', array('content/view', 'id' => 24), array('class' => '')); ?></li>
                            <li><?php echo CHtml::link('Octavius', array('content/view', 'id' => 25), array('class' => '')); ?></li>
                            <li><?php echo CHtml::link('Duncan Properties Ltd', array('content/view', 'id' => 26), array('class' => '')); ?></li>
                            <li><?php echo CHtml::link('UIC', array('content/view', 'id' => 27), array('class' => '')); ?></li>
                            <li><?php echo CHtml::link('ULC', array('content/view', 'id' => 28), array('class' => '')); ?></li>
                        </ul>
                    </li>
                    <li><?php echo CHtml::link('Gallery', array('gallery/index'), array('class' => 'btn btn-xs btn-warning')); ?></li>
                    <li><?php echo CHtml::link('Contact Us', array('site/contact'), array('class' => 'btn btn-xs btn-warning')); ?></li>
                </ul>
            </nav>            
        </div>
        <div class="col-md-7">
            <?php echo $content; ?>
        </div>
        <div class="col-md-2">

        </div>
    </div>
</div>
<?php $this->endContent(); ?>