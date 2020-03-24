<?php
function theNext($widget, $default = NULL) {
  $db = Typecho_Db::get();
  $sql = $db->select()->from('table.contents')
   ->where('table.contents.created > ?', $widget->created)
   ->where('table.contents.status = ?', 'publish')
   ->where('table.contents.type = ?', $widget->type)
   ->where('table.contents.password IS NULL')
   ->order('table.contents.created', Typecho_Db::SORT_ASC)
   ->limit(1);
  $content = $db->fetchRow($sql);
  if ($content) {
    $content = $widget->filter($content);
    $link = '<a href="'.$content['permalink'].'" class="mdui-btn cui-shadow-light-blue mdui-ripple" style="border-radius:0 1000px 1000px 0 ;margin-top: 6px;color: #5493FF;background: #e8f0fe;float: right;margin-right: 48px;" >下一篇:'.$content['title'].'<i class="mdui-icon material-icons" style="margin-bottom: 2px;">&#xe5cc;</i></a>';
    echo $link;
  } else {
    echo $default;
  }
}
function thePrev($widget, $default = NULL) {
  $db = Typecho_Db::get();
  $sql = $db->select()->from('table.contents')
   ->where('table.contents.created < ?', $widget->created)
   ->where('table.contents.status = ?', 'publish')
   ->where('table.contents.type = ?', $widget->type)
   ->where('table.contents.password IS NULL')
   ->order('table.contents.created', Typecho_Db::SORT_DESC)
   ->limit(1);
  $content = $db->fetchRow($sql);
  if ($content) {
    $content = $widget->filter($content);
    $link = '<a href="'.$content['permalink'].'" class="mdui-btn cui-shadow-light-blue mdui-ripple" style="border-radius: 1000px 0 0 1000px;margin-top: 6px;color: #5493FF;background: #e8f0fe;float: left;margin-left: 48px;" ><i class="mdui-icon material-icons" style="margin-bottom: 2px;">&#xe5cb;</i>上一篇:'.$content['title'].'</a>';
    echo $link;
  } else {
    echo $default;
  }
}
function showThumbnail($widget) {
$attach = $widget->attachments(1)->attachment;
$pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i';
if (preg_match_all($pattern, $widget->content, $thumbUrl)) {
echo $thumbUrl[1][0];
} else {
        echo 'https://i.loli.net/2019/02/12/5c6212e2e04f2.jpg';
    }
}
function themeConfig($form) {
	 $touxiang = new Typecho_Widget_Helper_Form_Element_Text('touxiang', NULL, NULL, _t('博主的头像'), _t('请填入一个 70px × 70px 的图片 URL 地址'));
    $form->addInput($touxiang);
	 $name = new Typecho_Widget_Helper_Form_Element_Text('name', NULL, NULL, _t('博主的昵称'), _t('请填入您的昵称文字'));
    $form->addInput($name);
	 $dizhi = new Typecho_Widget_Helper_Form_Element_Text('dizhi', NULL, NULL, _t('博主栏点击地址'), _t('请填入一个 URL 改变侧边栏点击博主栏的地址，如无请填写#'));
    $form->addInput($dizhi);
	$bianlan = new Typecho_Widget_Helper_Form_Element_Text('bianlan', NULL, NULL, _t('额外侧边栏项目'), _t('请按照增添侧边栏项目写法规则增添'));
    $form->addInput($bianlan);
	$sowenzi = new Typecho_Widget_Helper_Form_Element_Text('sowenzi', NULL, NULL, _t('搜索框文字'), _t('请填入您要设置的搜索框提示文字'));
    $form->addInput($sowenzi);
	$shouye = new Typecho_Widget_Helper_Form_Element_Text('shouye', NULL, NULL, _t('侧边栏首页文字'), _t('请填入您要设置的侧边栏首页文字'));
    $form->addInput($shouye);
	$db = Typecho_Db::get();
$sjdq=$db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:bopcolor'));
$ysj = $sjdq['value'];
if(isset($_POST['type']))
{ 
if($_POST["type"]=="备份数据"){
if($db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:bopcolorbf'))){
$update = $db->update('table.options')->rows(array('value'=>$ysj))->where('name = ?', 'theme:bopcolorbf');
$updateRows= $db->query($update);
echo '<div class="tongzhi">备份已更新，请等刷新！等不及点';
?>    
<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
<script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script>
<?php
}else{
if($ysj){
     $insert = $db->insert('table.options')
    ->rows(array('name' => 'theme:bopcolorbf','user' => '0','value' => $ysj));
     $insertId = $db->query($insert);
echo '<div class="tongzhi">备份完成，请等刷新！等不及点';
?>    
<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
<script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script>
<?php
}
}
        }
if($_POST["type"]=="还原数据"){
if($db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:bopcolorbf'))){
$sjdub=$db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:bopcolorbf'));
$bsj = $sjdub['value'];
$update = $db->update('table.options')->rows(array('value'=>$bsj))->where('name = ?', 'theme:bopcolor');
$updateRows= $db->query($update);
echo '<div class="tongzhi">恢复完成，请等刷新！等不及点';
?>    
<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
<script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2000);</script>
<?php
}else{
echo '<div class="tongzhi">没有模板备份数据，恢复无效！</div>';
}
}
if($_POST["type"]=="删除备份"){
if($db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:bopcolorbf'))){
$delete = $db->delete('table.options')->where ('name = ?', 'theme:bopcolorbf');
$deletedRows = $db->query($delete);
echo '<div class="tongzhi">删除成功，请等刷新！等不及点';
?>    
<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
<script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script>
<?php
}else{
echo '<div class="tongzhi">无备份数据，无需删除！</div>';
}
}
    }
echo '<form class="protected" action="?bopcolorbf" method="post">
<input type="submit" name="type" class="btn btn-s" value="备份数据" />&nbsp;&nbsp;<input type="submit" name="type" class="btn btn-s" value="还原数据" />&nbsp;&nbsp;<input type="submit" name="type" class="btn btn-s" value="删除备份" /></form>';
}
?>