<?php
/**
* Controller for GalleryPost model
*/
//namespace \backend\modules\news\controllers\DefaultController;
//Yii::import('application.modules.news.controllers.DefaultController');
//class DefaultController extends \backend\modules\news\controllers\DefaultController

class DefaultController extends PostController
{
    protected $_modelclass = 'GalleryPosts';
    public $_maxTopCount = 1;
    
    //function for post_type definition
    protected function setPostType($model = null) {
        if (isset($model))
            $model->post_type = Posting::POST_TYPE_GALLERY;
    }
    
}
?>