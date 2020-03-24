<?php $this->need('head.php'); ?>
<?php $this->need('header.php'); ?>
<body>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/kico.css'); ?>"><script src="<?php $this->options->themeUrl('js/kico.js'); ?>"></script>
<br>
<br>
<div class="mdui-container">
<div class="cui-field cui-field-normal cui-shadow-light-blue" style="border: 2px #5493FF solid;">
	<div class="cui-field-title cui-field-normal" style="font-size: 24px;height: 48px;line-height: 46px;background:#5493FF;color:#e8f0fe;"><?php $this->title() ?></div>
	<div class="cui-field-content" style="background:#e8f0fe;color:#5493FF;border-radius: 0 0 10px 10px;font-size: 16px;">
	<br>
		<div class="cui-bubble cui-bubble-word cui-normal"><?php $this->date('j日 n月 · Y年'); ?> - <?php $this->author(); ?></div><br>
		<br>
		<div style="color:#5493FF;">
		<?php $this->content(); ?>
		</div>
		<br>
<hr>
<br>
		<div class="cui-bubble cui-bubble-word cui-normal">&nbsp;文章标签:&nbsp;</div>&nbsp;&nbsp;<?php $this->tags(' &nbsp; ', true, '&nbsp;本文无标签&nbsp;'); ?>&nbsp;&nbsp;<br><br>
	</div>
</div>
<br>
<?php thePrev($this); ?>&nbsp;
<?php theNext($this); ?>
</div>
<script>ks.image("img")</script>
</body>
<?php $this->need('footer.php'); ?>