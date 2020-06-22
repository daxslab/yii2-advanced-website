<?php

/* @var $this yii\web\View */

$this->title = Yii::t('app', "{name}'s backend", [
    'name' => Yii::$app->name,
]);
?>
<div class="site-index">

    <header class="border-bottom mb-4">
        <h1 class="display-3"><?= $this->title ?></h1>
        <p class="lead">
            <a href="https://github.com/daxslab/yii2-website-module">Yii2 Website</a> is a quick form to develop a website using <a href="https://www.yiiframework.com">Yii2 PHP
                Framework</a>.
        </p>
    </header>

    <div class="body-content">

        <p>This module tries to help with the management of the content on the website while giving freedom on how to
            display it. The files used to display the actual content can be replaced in order to achieve the desired
            look and
            feel.</p>

        <ul>
            <li>
                <strong>Pages:</strong> Manage the content to display on the website
                <ul>
                    <li>A page is a piece of content on the website with a title, abstract, content and a image.</li>
                    <li>Every page can have sub pages allowing to group contents as with categories. There is no limit
                        for this hierarchy
                    </li>
                    <li>A page with sub pages can be considered a category put is a frontend's reponsability to render
                        links to the subpages
                    </li>
                    <li>A page have a type assigned. A type defines with file will be used to display it in frontend.
                    </li>
                </ul>
            </li>
            <li><strong>Media:</strong> Manage files you want to attach or store in the website</li>
            <li>
                <strong>Menus:</strong> Manage collections of links to other internal or external pages
                <ul>
                    <li>A <strong>menu</strong> is a group of links with a name to identify it on the frontend</li>
                    <li><strong>Links</strong> have a <em>label</em> and a <em>URL</em>. Normally you will display the
                        label linking to the URL
                    </li>
                </ul>
            </li>
            <li>
                <strong>Settings: </strong> Manage website settings
                <ul>
                    <li><strong>URL: </strong> the URL where the website is shown</li>
                    <li><strong>Page Types: </strong> page have a type assigned to define which file should be used to
                        display the page on the actual website
                    </li>
                </ul>
            </li>
        </ul>

    </div>
</div>
