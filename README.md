article
=======

文章管理扩展

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist caoyuanlianni/yii2-article "*"
```

or add

```
"caoyuanlianni/yii2-article": "~v1.0.*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \caoyuanlianni\article\AutoloadArticle::widget(); ?>

```

to test the code use it in your code by :

```
phpunit tests/Article/DemoTest.php
```