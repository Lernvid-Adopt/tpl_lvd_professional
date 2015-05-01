<?php
defined( '_JEXEC' ) or die( 'Access to this location is RESTRICTED.' );
echo '<?xml version="1.0" encoding="utf-8"?'.'>'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<?php
	// inserting mootools
		JHTML::_('behavior.mootools');
?>
<meta name="designer" content="Juergen Koller - http://www.lernvid.com" />
<meta name="licence" content="Copyright LernVid.com - Creative Commons Sharalike 3.0" />
<link href="templates/<?php echo $this->template ?>/css/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="templates/<?php echo $this->template ?>/css/template.css" rel="stylesheet" type="text/css" media="all" />
	  <!--[if IE 7]>
	  <link href="templates/<?php echo $this->template ?>/css/ie7.css" rel="stylesheet" type="text/css" media="all" />
   <![endif]-->
   <!--[if lt IE 7]>
	  <link href="templates/<?php echo $this->template ?>/css/ie5x6x.css" rel="stylesheet" type="text/css" media="all" />
   <![endif]-->
	<?php
		if($this->countModules("left")&&!$this->countModules("right")){ $contentwidth="left";}
		if($this->countModules("right")&&!$this->countModules("left")){ $contentwidth="right";}
		if($this->countModules("left")&&$this->countModules("right")) {$contentwidth="middle"; }
	?>
</head>
<body>
<div id="bg_up">
	<div id="masthead_container">
		<div id="topbox">
			<div id="date"><p><?php echo JHTML::Date($this->date_field, "%A, %d. %B %Y"); ?></p></div>
			<?php if($this->countModules('user4')) : ?>
				<div id="search">
							<div id="search_inner">
					             <jdoc:include type="modules" name="user4" style="xhtml" />
						</div>
				</div>
			<?php endif; ?>		
		</div>
		<div id="masthead">
			<?php if (($this->params->get('showSitetitle')) !=0) : ?>
		    	<div id="sitetitle"><?php echo $mainframe->getCfg('sitename');?></div>
			<?php endif; ?>		
			<?php if($this->countModules('top')) : ?>
				<div id="top_outer">
					<div id="top">
			             <jdoc:include type="modules" name="top" style="xhtml_div" />
					</div>
				</div>
			<?php endif; ?>		
		</div>
	</div>
	<div id="wrapper">
		<div class="clr"></div>
		<div id="container">
			<?php if($this->countModules('user3')) : ?>
				<div id="navigation">
		             <jdoc:include type="modules" name="user3" style="xhtml" />
				</div>
			<?php endif; ?>
			<?php if($this->countModules('user5 or user6 or user7')) : ?>
				<div id="user_modules1">
					<?php if($this->countModules('user5')) : ?>
						<div id="user5_outer">
							<div id="user5">
					           <jdoc:include type="modules" name="user5" style="xhtml_div" />
							</div>
						</div>
					<?php endif; ?>			
					<?php if($this->countModules('user6')) : ?>
						<div id="user6_outer">
							<div id="user6">
					           <jdoc:include type="modules" name="user6" style="xhtml_div" />
							</div>
						</div>
					<?php endif; ?>			
					<?php if($this->countModules('user7')) : ?>
						<div id="user7_outer">
							<div id="user7">
					           <jdoc:include type="modules" name="user7" style="xhtml_div" />
							</div>
						</div>
					<?php endif; ?>			
				</div>					
			<?php endif; ?>		
			<div class="clr"></div>
			<div id="page_content">
					<?php if($this->countModules('left')) : ?>
						<div id="left_outer">
			                <div id="left_top"></div>
			                <div id="left_inner_float">
				                <div id="left_inner">
				                	<jdoc:include type="modules" name="left" style="xhtml_div" />
				                </div>
			                </div>
			                <div id="left_bottom"></div>
		                </div>					
	       		   <?php endif; ?>		
					<?php if($this->countModules('right')) : ?>
						<div id="right_outer">
			                <div id="right_top"></div>
			                <div id="right_inner_float">
				                <div id="right_inner">
				                	<jdoc:include type="modules" name="right" style="xhtml_div" />
				                </div>
			                </div>
			                <div id="right_bottom"></div>
		                </div>					
					<?php endif; ?>		
				    <div id="content_out<?php echo $contentwidth; ?>">
						<div id="content_outer">
							<div id="content_up">
								<div id="content_up_left">
									<?php if($this->countModules('breadcrumb')) : ?>
										<div id="breadcrumbs">
							            	<jdoc:include type="module" name="breadcrumbs" />
									    </div>
									<?php endif; ?>
									<div id="content_up_right">
									</div>
								</div>
							</div>
							<div id="content_inner">
								<?php if($this->countModules('user1 or user2')) : ?>
									<div id="user_modules2">
										<?php if($this->countModules('user1')) : ?>
											<div id="user1">
									           <jdoc:include type="modules" name="user1" style="xhtml" />
											</div>
										<?php endif; ?>			
										<?php if($this->countModules('user2')) : ?>
											<div id="user2">
									           <jdoc:include type="modules" name="user2" style="xhtml" />
											</div>
										<?php endif; ?>			
									</div>					
								<?php endif; ?>		
								<div id="content">
									 <jdoc:include type="message" />
									 <jdoc:include type="component" />
								</div>
							</div>
							<div class="clr"></div>
							<div id="content_down">
								<div id="content_down_left">
									<div id="content_down_right"></div>
								</div>
							</div>	
						</div>
					</div>
				</div>	
			<div id="container2">
			<?php if($this->countModules('user8 or user9 or user10')) : ?>
				<div id="user_modules3">
					<?php if($this->countModules('user8')) : ?>
						<div id="user8_outer">
							<div id="user8">
					           <jdoc:include type="modules" name="user8" style="xhtml_div" />
							</div>
						</div>
					<?php endif; ?>			
					<?php if($this->countModules('user9')) : ?>
						<div id="user9_outer">
							<div id="user9">
					           <jdoc:include type="modules" name="user9" style="xhtml_div" />
							</div>
						</div>
					<?php endif; ?>			
					<?php if($this->countModules('user10')) : ?>
						<div id="user10_outer">
							<div id="user10">
					           <jdoc:include type="modules" name="user10" style="xhtml_div" />
							</div>
						</div>
					<?php endif; ?>			
				</div>					
			<?php endif; ?>		
			<div class="clr"></div>
				<div id="footer">
					<div id="copyright_info">
						<p><?php echo  $this->params->get('CopyrightInfo');  ?></p>
					</div>
					<?php if($this->countModules('footer')) : ?>
						<jdoc:include type="modules" name="footer" />
					<?php endif; ?>
					<div id="designed_by">
						<p>Design by: <a href="http://www.lernvid.com" target="_blank">LernVid.com</a></p>
					</div>
				</div>
			</div>
			<div class="clr"></div>
		</div>
</div>
</div>
<jdoc:include type="modules" name="debug" style="xhtml" />
</body>
</html>