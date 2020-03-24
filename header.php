<div class="mdui-drawer mdui-drawer-close cui-blue" id="drawer"><div class="mdui-list" mdui-collapse="{accordion: true}" style="margin-bottom: 76px;"><div class="mdui-collapse-item "><br><a href="<?php $this->options->dizhi(); ?>"><div class="cui-message cui-shadow-light margin cui-shadow-light"><div class="cui-message-avatar" style="border-radius: 1000px;background:url(<?php $this->options->touxiang(); ?>)"></div><div class="cui-message-text"><div class="cui-message-title" style="font-weight:bold;margin-top: 10px;"><?php $this->options->name(); ?></div></div></div></a><br><div class="cui-list cui-normal">
				<a href="<?php $this->options->siteUrl(); ?>" class="cui-list-drawer-item mdui-ripple cui-shadow-light" style="margin-right:10px;"><?php $this->options->shouye(); ?></a>
    <?php $this->widget('Widget_Metas_Category_List')
               ->parse('<a href="{permalink}" class="cui-list-drawer-item mdui-ripple cui-shadow-light" style="margin-right:10px;">{name}</a>'); ?>
			   <?php $this->options->bianlan(); ?>
</div></div></div></div><div class="mdui-toolbar cui-blue cui-shadow-light-blue" style="width:95%; border-radius:0 1000px 1000px 0;"><a id="toggle" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons"  style="color: #e8f0fe;">menu</i></a><a href="<?php $this->options->siteUrl(); ?>"><span class="mdui-typo-title" style="color:#e8f0fe;background-color:transparent;"><?php $this->options->title() ?></span></a><div class="mdui-toolbar-spacer"></div><a id="toggle" class="mdui-btn mdui-btn-icon" mdui-dialog="{target: '#search'}"><i class="mdui-icon material-icons" style="color: #e8f0fe;">search</i></a></div><script>
			var inst = new mdui.Drawer('#drawer');
			document.getElementById('toggle').addEventListener('click', function() {
				inst.toggle();
			});</script><form method="post" action=""><div class="mdui-dialog cui-shadow-light-blue" style="border-radius: 1000px;background: #5493FF;" id="search"><div class="mdui-textfield" id="search-search"><i class="mdui-icon material-icons" style="color:#e8f0fe;">search</i><input type="text" name="s" class="mdui-textfield-input text" size="32" placeholder="<?php $this->options->sowenzi(); ?>" style="color:#e8f0fe;"/></div></div></form><script>
  var tab = new mdui.Tab('#search-search');
  document.getElementById('search').addEventListener('open.mdui.dialog', function () {
    tab.handleUpdate();
  });</script>