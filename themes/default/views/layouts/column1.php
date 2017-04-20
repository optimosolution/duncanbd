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
                            <?php
                            $CorporateResponsibility = Content::model()->findAll(array('condition' => 'catid=7', 'order' => 'ordering'));
                            foreach ($CorporateResponsibility as $key => $value) {
                                echo '<li>' . CHtml::link(Content::get_title($value['id']), array('content/view', 'id' => $value['id']), array('class' => '')) . '</li>';
                            }
                            ?>                            
                        </ul>
                    </li>        
                    <li><a href="#" id="btn-4" data-toggle="collapse" data-target="#submenu4" aria-expanded="false" class="btn btn-xs btn-warning">Associate companies</a>
                        <ul class="nav collapse" id="submenu4" role="menu" aria-labelledby="btn-4">
                            <?php
                            $AssociateCompanies = Content::model()->findAll(array('condition' => 'catid=8', 'order' => 'ordering'));
                            foreach ($AssociateCompanies as $key => $value) {
                                echo '<li>' . CHtml::link(Content::get_title($value['id']), array('content/view', 'id' => $value['id']), array('class' => '')) . '</li>';
                            }
                            ?>
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