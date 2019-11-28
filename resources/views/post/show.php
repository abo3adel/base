<?php $this->layout('layouts/blog', [
    'title' => $posts->title ?? '',
    'component' => 'show-post'
]) ?>

<div class='mt-3 row'>
    <header id='top' class="bg-secondary text-dark">
    </header>

    <div class='col-12 col-md-8'>
        <div class='pb-5'>
            <div class='breadcrump-head position-absolute'>
                <ol class="breadcrumb rounded-0 bg-dark text-light">
                    <li class="breadcrumb-item">
                        <a href="/blog"><?=$this->__('shpost.home')?></a>
                    </li>
                    <li class="breadcrumb-item active text-light text-break"><?= $posts->title ?></li>
                </ol>
            </div>
            <img src='/posts/img/<?= $posts->img ?>' class='img img-responsive w-100'>
        </div>

        <h2 class='mt-3'><?= $posts->title ?></h2>

        <p class='lead'>
            <?= $posts->body ?>
        </p>

        <?php $this->insert('post/comments', [
            'pid' => $posts->id
        ])?>
    </div>
    <div class="col-12 col-md-4">
        <?php $this->insert('sidebar/index', [
            'layoutClass' => true,
            'model' => $model,
            'pinned' => $pinned,
            'cats' => $cats,
            'catModel' => $catModel,
            'post' => $posts
        ]) ?>
    </div>
</div>