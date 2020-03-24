<!-- BopColor | https://github.com/kicomodo/Typecho-Theme-BopColor -->
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"><title><?php $this->archiveTitle('','',' | '); ?><?php $this->options->title(); ?></title><link rel="stylesheet" href="<?php $this->options->themeUrl('cui.css'); ?>"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdui@0.4.3/dist/css/mdui.min.css"><link rel="stylesheet" href="<?php $this->options->themeUrl('css/bopcolor.css'); ?>"><script>
function loadCSS() {
 if((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|wOSBrowser|BrowserNG|WebOS)/i))) {
        document.write('<style>.cui-card-normal{max-width:42%}.cui-card-normal .cui-card-normal-text .cui-card-normal-title{font-size:9pt}.cui-card-normal .cui-card-normal-text .cui-card-normal-subtitle{font-size:10px}.copyright{font-size:14px}.cui-list-drawer-item:hover{transition:10ms all}</style>');
    }
    else {
        document.write('<style>.cui-card-normal{max-width:22%}.copyright{font-size:18px}.cui-list-drawer-item:hover{transition:.2s all}</style>');
    }
}
loadCSS();</script></head>