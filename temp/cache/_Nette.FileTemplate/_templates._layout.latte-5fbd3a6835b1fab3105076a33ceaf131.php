<?php //netteCache[01]000374a:2:{s:4:"time";s:21:"0.68038500 1397507030";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:60:"C:\xampp\htdocs\libb\app\FrontModule\templates\@layout.latte";i:2;i:1394628246;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-02-08";}}}?><?php

// source file: C:\xampp\htdocs\libb\app\FrontModule\templates\@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '3svgn0d2fs')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb3a0ce82afb_title')) { function _lb3a0ce82afb_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Naše první aplikace<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lbc9f7410612_head')) { function _lbc9f7410612_head($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lb657256c1c8_scripts')) { function _lb657256c1c8_scripts($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>
<!DOCTYPE html>
<html lang="cs">
<head>
	<meta charset="utf-8">
	<title><?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
ob_start(); call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()); echo $template->striptags(ob_get_clean())  ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
		<link href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/bootstrap.css" rel="stylesheet">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars())  ?>

</head>
<body>
	<div class="navbar navbar-inverse" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo htmlSpecialChars($_control->link("Homepage:")) ?>
">Databáze knih</a>
			</div>
		</div>
	</div>
	<div class="container theme-showcase" role="main">
<?php $iterations = 0; foreach ($flashes as $flash) { ?>		<div class="alert alert-<?php echo htmlSpecialChars($flash->type) ?>">
			<a class="close" data-dismiss="alert">×</a>
			<?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?>

		</div>
<?php $iterations++; } Nette\Latte\Macros\UIMacros::callBlock($_l, 'content', $template->getParameters()) ?>
	</div>		
	<footer>
		
	</footer>
	
	<script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/jquery-2.1.0.min.js"></script>
	<script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/bootstrap.min.js"></script>
	
	<script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/netteForms.js"></script>
	<script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/main.js"></script>
	<?php call_user_func(reset($_l->blocks['scripts']), $_l, get_defined_vars())  ?>

</body>
</html>