<?php
/* @var $this GalleryController */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle = BannerCategory::get_title($_GET['id']) . ' - ' . Yii::app()->name;
?>
<h4><?php echo BannerCategory::get_title($_GET['id']); ?></h4>
<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
