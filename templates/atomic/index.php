<?php
/**
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/* The following line loads the MooTools JavaScript Library */
JHtml::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
		<!-- The following JDOC Head tag loads all the header and meta information from your site config and content. -->
		<jdoc:include type="head" />

		<!-- The following five lines load the Blueprint CSS Framework (http://blueprintcss.org). If you don't want to use this framework, delete these lines. -->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/screen.css" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/print.css" type="text/css" media="print" />
		<!--[if lt IE 8]><link rel="stylesheet" href="blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/fancy-type/screen.css" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/joomla-nav/screen.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/gf/gf_articles_category.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/gf/gf_latest_news.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/gf/gf_screen.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/gf/gf_gfwy.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/gf/gf_lszs.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/gf/gf_bcxg.css" type="text/css" media="screen" />
		
		<!-- The following line loads the template CSS file located in the template folder. -->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />

		<!-- The following four lines load the Blueprint CSS Framework and the template CSS file for right-to-left languages. If you don't want to use these, delete these lines. -->
		<?php if($this->direction == 'rtl') : ?>
			<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/rtl/screen.css" type="text/css" />
			<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template_rtl.css" type="text/css" />
		<?php endif; ?>

		<!-- The following line loads the template JavaScript file located in the template folder. It's blank by default. -->
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/template.js"></script>
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery-1.6.2.min.js"></script>
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/MSClass.js"></script>
	</head>
	<body>
		<div class="container">
			<?php if($this->countModules('gf_header')) : ?>
				<jdoc:include type="modules" name="gf-header" style="none" />
			<?php endif; ?>
			<div class="joomla-header span-16 append-1">
				<h1><?php echo htmlspecialchars($app->getCfg('sitename')); ?></h1>
			</div>
		</div>
		
		<?php if($this->countModules('gf-topmenu')) : ?>
			<jdoc:include type="modules" name="gf-topmenu" style="container" />
		<?php endif; ?>

		<div class="container">
			<?php if($this->countModules('gf-left-1') || $this->countModules('gf-left-2')
			|| $this->countModules('gf-left-3') || $this->countModules('gf-left-4')) : ?>
				<div class="span-7 last">
					<jdoc:include type="modules" name="gf-left-1" style="sidebar" />
					<jdoc:include type="modules" name="gf-left-2" style="sidebar" />
					<jdoc:include type="modules" name="gf-left-3" style="sidebar" />
					<jdoc:include type="modules" name="gf-left-4" style="sidebar" />
				</div>
			<?php endif; ?>

			<?php if($this->countModules('gf-picture-news')) : ?>
				<jdoc:include type="modules" name="gf-picture-news" style="gf-picture-news" />
			<?php endif; ?>
			
			<?php if($this->countModules('gf-lastest-news')) : ?>
				<jdoc:include type="modules" name="gf-lastest-news" style="gf-lastest-news" />
			<?php endif; ?>
			
			<?php if($this->countModules('gf-union-news')) : ?>
				<jdoc:include type="modules" name="gf-union-news" style="gf-lastest-news" />
			<?php endif; ?>

			<?php if($this->countModules('gf-gfwy')) : ?>
				<jdoc:include type="modules" name="gf-gfwy" style="gf-gfwy" />
			<?php endif; ?>

			<?php if($this->countModules('gf-lszs')) : ?>
				<jdoc:include type="modules" name="gf-lszs" style="gf-lszs" />
			<?php endif; ?>

			<?php if($this->countModules('gf-bcxg')) : ?>
				<jdoc:include type="modules" name="gf-bcxg" style="gf-bcxg" />
			<?php endif; ?>

			<?php if($this->countModules('gf-dbzl')) : ?>
				<jdoc:include type="modules" name="gf-dbzl" style="gf-dbzl" />
			<?php endif; ?>
			
			<?php if($this->countModules('gf-cgzs')) : ?>
				<jdoc:include type="modules" name="gf-cgzs" style="gf-cgzs" />
			<?php endif; ?>
			
			<?php if($this->countModules('gf-xhzc')) : ?>
				<jdoc:include type="modules" name="gf-xhzc" style="gf-xhzc" />
			<?php endif; ?>
			
			<div class="span-16 prepend-1">
				<jdoc:include type="message" />
				<jdoc:include type="component" />
			</div>

			<?php if($this->countModules('gf-right-1') || $this->countModules('gf-right-2')
			|| $this->countModules('gf-right-3') || $this->countModules('gf-right-4')) : ?>
				<div class="span-7 last">
					<jdoc:include type="modules" name="gf-right-1" style="sidebar" />
					<jdoc:include type="modules" name="gf-right-2" style="sidebar" />
					<jdoc:include type="modules" name="gf-right-3" style="sidebar" />
					<jdoc:include type="modules" name="gf-right-4" style="sidebar" />
				</div>
			<?php endif; ?>
		</div>

		<hr />
		<h2><center>我是华丽的分隔符，下面部分是测试保留的！</center></h2>
		<hr />
		<?php if($this->countModules('gf-articles')) : ?>
			<div class="container">
				<jdoc:include type="modules" name="gf-articles" style="gf_articles" />
			</div>
		<?php endif; ?>
		
		<div class="container">
			<div class="joomla-footer span-16 prepend-1 gf-footer">
				<hr />
				&copy;<?php echo date('Y'); ?> <?php echo htmlspecialchars($app->getCfg('sitename')); ?>
				<span class="rights"></>滇ICP备 <a href="http://www.miibeian.gov.cn" target="_blank" class="red">13004245</b></font></a> 号</span>
			</div>
			</div>
		
		<jdoc:include type="modules" name="debug" />
	</body>
</html>
