<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\StringHelper;

?>

<div class="panel panel-primary">
    <?php if ($model->featured_image): ?>
        <div class="panel-heading panel-img">
            <?= Html::img($model->featured_image, ['class' => 'img-responsive img-full']) ?>
        </div>
    <?php endif ?>
    <div class="panel-body">
        <h3><?= Html::a($model->title, ['index', 'id' => $model->id]) ?></h3>
        <?php if (! Yii::$app->user->isGuest): ?>
            <p>
                <?= Html::a('<i class="fa fa-edit"></i> edit', ['update', 'id' => $model->id]) ?>
                &nbsp; 
                <?= Html::a('<i class="fa fa-trash"></i> delete', ['delete', 'id' => $model->id], [
                    'data' => ['method' => 'post']
                ]) ?>
            </p>
        <?php endif ?>
        <?php if (Yii::$app->request->get('id')): ?>
            <?= $model->content ?>

            <br /><br />
            <div id="disqus_thread"></div>
            <script>

            /**
            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://soundphone.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        <?php else: ?>
            <?= StringHelper::truncateWords($model->content, 20) ?>
        <?php endif ?>
    </div>
    <div class="panel-footer grey">
        <p class="pull-right">
            <span class="cyan"><i class="fa fa-comment"></i> &nbsp;
            <?= Html::a('', ['index?id=' . $model->id . '#disqus_thread']) ?>
        </p>
        <p class="">
            <i class="fa fa-clock-o"></i> <?= date('M d, y', $model->created_at) ?>
        </p>
    </div>
</div>
<br />

<script id="dsq-count-scr" src="//soundphone.disqus.com/count.js" async></script>