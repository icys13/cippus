<?php if (!defined('THINK_PATH')) exit();?><!-- layout::Public:header::60 --><form action=<?php echo ($action); ?> method="post"><?php echo ($title); ?><textarea id="editor" name="editor"><?php echo ($contents); ?></textarea><input class="button sub" value="完成" type="submit"/></form></div><script type="text/javascript" src="__ROOT__/Ueditor/test/editor_config.js"></script><script type="text/javascript" src="__ROOT__/Ueditor/test/editor_ui_all_min.js"></script><link rel="stylesheet" type="text/css" href="__ROOT__/Ueditor/test/themes/default/ueditor.css"/><script type="text/javascript" charset="utf-8">
	    var editor = new baidu.editor.ui.Editor();
	    editor.render('editor');  //editor为编辑器容器的id
	</script><!-- layout::Public:footer::60 -->