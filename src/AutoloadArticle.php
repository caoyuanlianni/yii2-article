<?php

namespace caoyuanlianni\article;

/**
 * This is just an example.
 */
class AutoloadArticle extends \yii\base\Widget
{
    public function toArray()
    {
        return ['id', 'title', 'content'];
    }
}
