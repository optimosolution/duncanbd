<?php
/* @var $this GalleryController */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle = 'Picture Gallery - ' . Yii::app()->name;
?>
<h4>Picture Gallery</h4>
<?php
$array = BannerCategory::model()->findAll(
        array(
            'condition' => 'published=1'
        ));
foreach ($array as $key => $value) {
    ?>
    <div class="row" style="margin-bottom: 5px;">
        <div class="col-sm-2">
            <?php echo Banner::get_gallery_thumb($value['id']); ?>
        </div>
        <div class="col-sm-10">
            <h5 class="text-success"><?php echo CHtml::link($value['title'], array('gallery/category', 'id' => $value['id']), array('class' => '')); ?> [<?php echo Banner::get_total($value['id']); ?>]</h5>
            <p><?php echo $value['description']; ?></p>
        </div>
    </div>
    <?php
}
?>