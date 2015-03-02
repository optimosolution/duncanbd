<?php
$this->pageTitle = Yii::app()->name . ' - Contact Us';
?>
<h4>Duncan Brothers (Bangladesh) Limited </h4>
<?php if (Yii::app()->user->hasFlash('contact')): ?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('contact'); ?>
    </div>
<?php else: ?>
    <p class="well">
        <strong>Camellia House</strong><br />
        22, Kazi Nazrul Islam Avenue<br />
        Dhaka - 1000<br />
        Bangladesh<br /><br />
        Telephone: 880-2-8619336-8, 880-2-9661397-8<br />
        Fax: 880-2-8613576 
    </p>
    <?php $form = $this->beginWidget('CActiveForm'); ?>
    <p class="note">Fields with <span class="required">*</span> are required.</p>
    <?php echo $form->errorSummary($model); ?>    
    <div class="row" style="margin-bottom: 5px;">
        <div class="col-sm-3">
            <?php echo $form->labelEx($model, 'name'); ?>
        </div>
        <div class="col-sm-9">
            <?php echo $form->textField($model, 'name', array('class' => 'form-control')); ?>
        </div>                
    </div>
    <div class="row" style="margin-bottom: 5px;">
        <div class="col-sm-3">
            <?php echo $form->labelEx($model, 'email'); ?>
        </div>
        <div class="col-sm-9">
            <?php echo $form->textField($model, 'email', array('class' => 'form-control')); ?>
        </div>                
    </div>
    <div class="row" style="margin-bottom: 5px;">
        <div class="col-sm-3">
            <?php echo $form->labelEx($model, 'subject'); ?>
        </div>
        <div class="col-sm-9">
            <?php echo $form->textField($model, 'subject', array('size' => 52, 'maxlength' => 128, 'class' => 'form-control')); ?>
        </div>                
    </div>
    <div class="row" style="margin-bottom: 5px;">
        <div class="col-sm-3">
            <?php echo $form->labelEx($model, 'body'); ?>
        </div>
        <div class="col-sm-9">
            <?php echo $form->textArea($model, 'body', array('rows' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
        </div>                
    </div>
    <?php if (CCaptcha::checkRequirements()): ?>
        <div class="row" style="margin-bottom: 5px;">
            <div class="col-sm-12">
                <?php echo $form->labelEx($model, 'verifyCode'); ?>
            </div>
        </div>
        <div class="row">            
            <div class="col-sm-6">
                <?php $this->widget('CCaptcha'); ?>
            </div>
            <div class="col-sm-6">
                <?php echo $form->textField($model, 'verifyCode', array('class' => 'form-control')); ?>
            </div>            
        </div>
        <div class="row">
            <div class="col-sm-12 hint">Please enter the letters as they are shown in the image above. Letters are not case-sensitive.</div>
        </div>
    <?php endif; ?>
    <div class="row submit" style="margin-top: 10px;">
        <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-primary')); ?>
    </div>
    <?php $this->endWidget(); ?>
<?php endif; ?>