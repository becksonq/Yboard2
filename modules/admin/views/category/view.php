<!--
/**
 * Details view  for JsTreeBehavior model.
 *
 * Date: 1/29/13
 * Time: 12:00 PM
 *
 * @author: Spiros Kabasakalis <kabasakalis@gmail.com>
 * @link http://iws.kabasakalis.gr/
 * @link http://www.reverbnation.com/spiroskabasakalis
 * @copyright Copyright &copy; Spiros Kabasakalis 2013
 * @license http://opensource.org/licenses/MIT  The MIT License (MIT)
 */
-->
<?php

use yii\widgets\Breadcrumbs;
use yii\grid\GridView;
use yii\widgets\Menu;

echo Breadcrumbs::widget([
    'links' => array(
        Yii::t('lang', 'Categories') => array('index'),
        $model->name => array('view', 'id' => $model->id),
        Yii::t('lang', 'View Category'),
    )
]);

echo Menu::widget([
    'items' => array(
        array('label' => Yii::t('lang', 'List Category'), 'icon' => 'icon-list', 'url' => array('index')),
        array('label' => Yii::t('lang', 'Manage Category'), 'icon' => 'icon-folder-open', 'url' => array('view')),
        array('label' => Yii::t('lang', 'Redact Category'), 'icon' => 'icon-folder-open', 'url' => array('update', 'id' => $model->id)),
    )
]);
?>


<div class="page-header">
    <h2> <?php echo Yii::t('lang', 'Category') . '  "' . $model->name . '"'; ?>    </h2>





    <?php
    echo \yii\widgets\DetailView::widget( array(
        'model' => $model,
        'options' => array('class' => 'table table-striped table-bordered table-condensed'),
        //modify attributes according to your model
        'attributes' => array(
            'id',
            /*
              'root',
              'lft',
              'rgt',
             * 
             */
            'level',
            'name',
            'icon',
            'meta_title',
            'meta_descr',
            'meta_key',
            'description',
        ),
    ));
    ?>
</div>

