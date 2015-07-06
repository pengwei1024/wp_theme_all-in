<?php date_default_timezone_set('Asia/Shanghai');  ?>
<div class="topTBInner">
    <div class="float-left">
        <?php $weekArray = array("日","一","二","三","四","五","六"); ?>
        <span><?php echo date("Y年m月d日 H:i", time())."&nbsp;&nbsp;星期".$weekArray[date("w")] ?></span>
    </div>
    <div class="float-right">
        <ul style="list-style-type: none">
            <li><a href="javascript:void(0)">悦读</a></li>
            <li><a href="<?php bloginfo('url'); ?>/spewing">吐槽</a></li>
            <li><a href="<?php bloginfo('url'); ?>?feed=rss2" target="_blank">RSS</a></li>
            <li><a href="<?php bloginfo('url'); ?>/about">关于</a></li>
            <li><a href="<?php bloginfo('url'); ?>/wp-admin"><?php echo is_user_logged_in()?"管理":"登录" ?></a></li>
        </ul>
    </div>
</div>
