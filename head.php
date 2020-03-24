<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"><title><?php $this->archiveTitle('','',' | '); ?><?php $this->options->title(); ?></title><link rel="stylesheet" href="<?php $this->options->themeUrl('css/cui.css'); ?>"><link rel="stylesheet" href="<?php $this->options->themeUrl('css/mdui.min.css'); ?>"><link rel="stylesheet" href="<?php $this->options->themeUrl('css/bopcolor.css'); ?>"><script>
function loadCSS() {
 if((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|wOSBrowser|BrowserNG|WebOS)/i))) {
        document.write('<link href="<?php $this->options->themeUrl('css/wap.css'); ?>" rel="stylesheet" type="text/css" media="screen" />');
    }
    else {
        document.write('<link href="<?php $this->options->themeUrl('css/pc.css'); ?>" rel="stylesheet" type="text/css" media="screen" />');
    }
}
loadCSS();</script><script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script><script src="<?php $this->options->themeUrl('js/mdui.min.js'); ?>"></script></head>