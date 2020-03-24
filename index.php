 <?php
/*
 * BopColor是一款Wiki主题，正如他的波波色一样出色！专注于教程文档编写，去除所有非必要功能。如果可以，请让我作为贺岁作品送给您~本主题完全免费且将永远更新下去，绝不弃坑.
 * 
 * @package BopColor 
 * @author KicoModo
 * @version 1.0
 * @link https://www.kicomodo.com
 */
 ?>
 <?php $this->need('head.php'); ?>
  <?php $this->need('header.php'); ?>
<body>
<div class="mdui-container">
<br>
<br>
<div style="margin: -10px;">
<?php while($this->next()): ?>
<a href="<?php $this->permalink() ?>">
<div class="cui-card-normal cui-shadow-light-blue cui-animate-hover-up">
<div class="mdui-ripple" style="overflow:hidden;border-radius: 10px;">
	<img src="<?php showThumbnail($this); ?>" class="cui-card-normal-image" style="height: 22%;"/>
	</div>
	<div class="cui-card-normal-text">
	<div class="cui-card-normal-subtitle" style="color:#e8f0fe;"><?php $this->date('j日 n月 · Y年'); ?></div>
		<div class="cui-card-normal-title" style="color:#e8f0fe;"><?php $this->title() ?></div>	
	</div>
</div>
</a>
<?php endwhile; ?>
</div>
</div>
<div class="mdui-container">
<br>
 <?php $this->pageLink('<xt class="mdui-btn cui-shadow-light-blue mdui-ripple" style="border-radius: 1000px 0 0 1000px;margin-top: 6px;color: #5493FF;background: #e8f0fe;" ><i class="mdui-icon material-icons" style="margin-bottom: 2px;">&#xe5cb;</i>上一页</xt>'); ?><?php if(ceil($this->getTotal() / $this->parameter->pageSize)>1): ?><div class="page-right mdui-btn cui-shadow-light-blue mdui-ripple mdui-btn-active" style="margin-top:6px;background:#5493FF;color:#e8f0fe;border-radius: 0;">页码
<?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?> <span style="color:#e8f0fe;">/</span> <?php echo   ceil($this->getTotal() / $this->parameter->pageSize); ?></div><?php endif; ?>
<?php $this->pageLink('<xt class="mdui-btn cui-shadow-light-blue mdui-ripple" style="border-radius:0 1000px 1000px 0 ;margin-top: 6px;color: #5493FF;background: #e8f0fe;" >下一页<i class="mdui-icon material-icons" style="margin-bottom: 2px;">&#xe5cc;</i></xt>','next'); ?>
</div>
</body>
<?php $this->need('footer.php'); ?>