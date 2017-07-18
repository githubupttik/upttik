<?php
/**
* @version   $Id: index.php 15529 2013-11-13 22:04:39Z kevin $
 * @author RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2015 RocketTheme, LLC
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */
// no direct access
defined( '_JEXEC' ) or die( 'Restricted index access' );
// load and inititialize gantry class
require_once(dirname(__FILE__) . '/lib/gantry/gantry.php');
$gantry->init();

// get the current preset
$gpreset = str_replace(' ','',strtolower($gantry->get('name')));

$app = JFactory::getApplication();
$sitename = $app->get('sitename');


?>


<!doctype html>
<html xml:lang="<?php echo $gantry->language; ?>" lang="<?php echo $gantry->language;?>" >
<head>
	<?php if ($gantry->get('layout-mode') == '960fixed') : ?>
	<meta name="viewport" content="width=960px, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<?php elseif ($gantry->get('layout-mode') == '1200fixed') : ?>
	<meta name="viewport" content="width=1200px, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<?php else : ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php endif; ?>
<?php if ($gantry->browser->name == 'ie') : ?>
	<meta content="IE=edge" http-equiv="X-UA-Compatible" />
<?php endif; ?>	
    <?php
        $gantry->displayHead();
		$gantry->addStyle('grid-responsive.css', 5);
		$gantry->addLess('bootstrap.less', 'bootstrap.css', 6);
        if ($gantry->browser->name == 'ie'){
        	if ($gantry->browser->shortversion == 9){
        		$gantry->addInlineScript("if (typeof RokMediaQueries !== 'undefined') window.addEvent('domready', function(){ RokMediaQueries._fireEvent(RokMediaQueries.getQuery()); });");
        	}
			if ($gantry->browser->shortversion == 8){
				$gantry->addScript('html5shim.js');
			}
		}
		if ($gantry->get('layout-mode', 'responsive') == 'responsive') $gantry->addScript('rokmediaqueries.js');
		if ($gantry->get('loadtransition')) {
		$gantry->addScript('load-transition.js');
		$hidden = ' class="rt-hidden"';}

    ?>
	
<?php require_once(dirname(__FILE__) . '/theme.php');	
$app = JFactory::getApplication();
$templateName = $app->getTemplate();
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="templates/<?php echo $templateName ?>/less/grid-responsive.css">
<link rel="stylesheet" type="text/css" href="templates/<?php echo $templateName ?>/less/kunena.less">
<link rel="stylesheet" type="text/css" href="templates/<?php echo $templateName ?>/less/hikashop.css">
<link rel="stylesheet" type="text/css" href="templates/<?php echo $templateName ?>/less/animate.css">
<link rel="stylesheet" type="text/css" href="templates/<?php echo $templateName ?>/less/virtuemart.css">
<link rel="stylesheet" type="text/css" href="templates/<?php echo $templateName ?>/less/jevents.css">
<link rel="stylesheet" type="text/css" href="templates/<?php echo $templateName ?>/less/joomdev.less">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="templates/<?php echo $templateName ?>/less/bootstrap.min.css" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<script src="templates/<?php echo $templateName ?>/js/wow.min.js"></script>
<script>
  new WOW().init();
</script>

</head>
<body <?php echo $gantry->displayBodyTag(); ?>>
    <?php /** Begin Top Surround **/ if ($gantry->countModules('top') or $gantry->countModules('header')) : ?>
    <header id="rt-top-surround">
		<?php if ($gantry->countModules('top')) : ?>
		<?php if($positionTopbg != 'transparent') { ?>
		<div class="wow fadeIn" id="rt-top" <?php echo $gantry->displayClassesByTag('rt-top');?> style="background:<?php echo $positionTopbg;?> no-repeat center top; background-size:cover;">
		<?php } else { ?>
		<div class="wow fadeIn" id="rt-top" <?php echo $gantry->displayClassesByTag('rt-top');?>>
		<?php } ?>
			<img src="templates/jd_newjersey/logo.png"/><div class="rt-container">
				<?php echo $gantry->displayModules('top','standard','standard'); ?>
				<div class="clear"></div>
			</div>
		</div>
		<?php /** End Top **/ endif; ?>
		
		<?php /** Begin Header **/ if ($gantry->countModules('header')) : ?>
		<?php if($positionHeaderbg!= 'transparent') { ?>
			<div class="wow fadeIn" id="rt-header" style="background:<?php echo $positionHeaderbg?> no-repeat center top; background-size:cover;">
		<?php } else{ ?>
				<div class="wow fadeIn" id="rt-header">
		<?php } ?>
		<div class="rt-container">
				<?php echo $gantry->displayModules('header','standard','standard'); ?>
				<div class="clear"></div>
			</div>
		</div>
		<?php /** End Header **/ endif; ?>
	</header>
	<?php /** End Top Surround **/ endif; ?>

	<?php /** Begin JD SLIDER **/ if ($gantry->countModules('jd-slider')) : ?>
	<div class="wow fadeIn" id="jd-slider">
		<div class="rt-container">
			<?php echo $gantry->displayModules('jd-slider','standard','standard'); ?>
			<div class="clear"></div>
		</div>
	</div>
	<?php /** Begin JD SLIDER **/ endif; ?>		
	<?php /** Begin Breadcrumbs **/ if ($gantry->countModules('breadcrumb')) : ?>
	<?php if($positionBreadcrumbbg!= 'transparent') { ?>
		<div class="wow fadeIn" id="rt-breadcrumbs" style="background:<?php echo $positionBreadcrumbbg;?> no-repeat center top; background-size:cover;">
	<?php } else{ ?>
		<div class="wow fadeIn" id="rt-breadcrumbs">	
	<?php } ?>
		<div class="rt-container">
			<?php echo $gantry->displayModules('breadcrumb','standard','standard'); ?>
			<div class="clear"></div>
		</div>
	</div>
	<?php /** End Breadcrumbs **/ endif; ?>
	<?php /** Begin Drawer **/ if ($gantry->countModules('drawer')) : ?>
	<?php if($positionDrawerbg!= 'transparent') { ?>
    <div class="wow fadeIn" id="rt-drawer" style="background:<?php echo $positionDrawerbg;?> no-repeat center top; background-size:cover;">
	<?php } else{?>
	 <div class="wow fadeIn" id="rt-drawer">
	<?php } ?>
        <div class="rt-container">
            <?php echo $gantry->displayModules('drawer','standard','standard'); ?>
            <div class="clear"></div>
        </div>
    </div>
    <?php /** End Drawer **/ endif; ?>
	<?php /** Begin Showcase **/ if ($gantry->countModules('showcase')) : ?>
	<?php if($positionShowcasebg!= 'transparent') { ?>
	<div class="wow fadeIn" id="rt-showcase" style="background:<?php echo $positionShowcasebg?> no-repeat center top; background-size:cover;">
	<?php } else{ ?>
		<div class="wow fadeIn" id="rt-showcase">
	<?php } ?>	
		<div class="rt-showcase-pattern">
			<div class="rt-container">
				<?php echo $gantry->displayModules('showcase','standard','standard'); ?>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<?php /** End Showcase **/ endif; ?>
	<div id="rt-transition"<?php if ($gantry->get('loadtransition')) echo $hidden; ?>>
		<div id="rt-mainbody-surround">
			<?php /** Begin Feature **/ if ($gantry->countModules('feature')) : ?>
			<?php if($positionFeaturebg!= 'transparent') { ?>
				<div class="wow fadeIn" id="rt-feature" style="background:<?php echo $positionFeaturebg?> no-repeat center top; background-size:cover;">
			<?php } else{ ?>
				<div class="wow fadeIn" id="rt-feature">	
			<?php } ?>
				<div class="rt-container">
					<?php echo $gantry->displayModules('feature','standard','standard'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php /** End Feature **/ endif; ?>
			<?php /** Begin Utility **/ if ($gantry->countModules('utility')) : ?>
			<?php if($positionUtilitybg!= 'transparent') { ?>
			<div class="wow fadeIn" id="rt-utility" style="background:<?php echo $positionUtilitybg?> no-repeat center top; background-size:cover;">
			<?php } else{?>
			<div class="wow fadeIn" id="rt-utility">
			<?php } ?>
			<div class="rt-container">
					<?php echo $gantry->displayModules('utility','standard','standard'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php /** End Utility **/ endif; ?>

			<?php /** Begin Main Top **/ if ($gantry->countModules('maintop')) : ?>
			<?php if($positionMaintopbg!= 'transparent') { ?>
			<div class="wow fadeIn" id="rt-maintop" style="background:<?php echo $positionMaintopbg?> no-repeat center top; background-size:cover;">
			<?php } else{?>
			<div class="wow fadeIn" id="rt-maintop">
			<?php } ?>
				<div class="rt-container">
					<?php echo $gantry->displayModules('maintop','standard','standard'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php /** End Main Top **/ endif; ?>

			<?php /** Begin jd Funfacts **/ if ($gantry->countModules('jd-funfacts')) : ?>
			<?php if($positionFunfactsbg!= 'transparent') { ?>
			<div class="wow fadeIn" id="jd-funfacts" style="background:<?php echo $positionFunfactsbg?> no-repeat center top; background-size:cover;">
			<?php } else{?>
			<div class="wow fadeIn" id="jd-funfacts">
			<?php } ?>
				<div class="rt-container">
					<?php echo $gantry->displayModules('jd-funfacts','standard','standard'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php /** Begin jd Funfacts **/ endif; ?>
			
			<?php /** Begin jd position 1 **/ if ($gantry->countModules('jd-position-1')) : ?>
			<?php if($positionPosition1bg!= 'transparent') { ?>
			<div class="wow fadeIn" id="jd-position-1" style="background:<?php echo $positionPosition1bg?> no-repeat center top; background-size:cover;">
			<?php }else{ ?>
			<div class="wow fadeIn" id="jd-position-1">
			<?php } ?>
				<div class="rt-container">
					<?php echo $gantry->displayModules('jd-position-1','standard','standard'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php /** Begin jd position 1 **/ endif; ?>		
			
			<?php /** Begin jd position 2 **/ if ($gantry->countModules('jd-position-2')) : ?>
			<?php if($positionPosition2bg!= 'transparent') { ?>
			<div class="wow fadeIn" id="jd-position-2" style="background:<?php echo $positionPosition2bg?> no-repeat center top; background-size:cover;">
			<?php } else {?>
			<div class="wow fadeIn" id="jd-position-2">
			<?php } ?>
				<div class="rt-container">
					<?php echo $gantry->displayModules('jd-position-2','standard','standard'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php /** Begin jd position 2 **/ endif; ?>	
			
			<?php /** Begin jd position 3 **/ if ($gantry->countModules('jd-position-3')) : ?>
			<?php if($positionPosition3bg!= 'transparent') { ?>
			<div class="wow fadeIn" id="jd-position-3" style="background:<?php echo $positionPosition3bg?> no-repeat center top; background-size:cover;">
			<?php }else {?>
			<div class="wow fadeIn" id="jd-position-3">
			<?php } ?>
				<div class="rt-container">
					<?php echo $gantry->displayModules('jd-position-3','standard','standard'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php /** Begin jd position 3 **/ endif; ?>	

			<?php /** Begin jd position 4 **/ if ($gantry->countModules('jd-position-4')) : ?>
			<?php if($positionPosition4bg != 'transparent') { ?>
			<div class="wow fadeIn" id="jd-position-4" style="background:<?php echo $positionPosition4bg?> no-repeat center top; background-size:cover;">
			<?php } else { ?>
				<div class="wow fadeIn" id="jd-position-4">
			<?php } ?>
				<div class="rt-container">
					<?php echo $gantry->displayModules('jd-position-4','standard','standard'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php /** Begin jd position 4 **/ endif; ?>
			
			<?php /** Begin jd position 5 **/ if ($gantry->countModules('jd-position-5')) : ?>
			<?php if($positionPosition5bg!= 'transparent') { ?>
			<div class="wow fadeIn" id="jd-position-5" style="background:<?php echo $positionPosition5bg?> no-repeat center top; background-size:cover;">
			<?php } else{?>
			<div class="wow fadeIn" id="jd-position-5">
			<?php } ?>
				<div class="rt-container">
					<?php echo $gantry->displayModules('jd-position-5','standard','standard'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php /** Begin jd position 5 **/ endif; ?>

			<?php /** Begin Full Width**/ if ($gantry->countModules('fullwidth')) : ?>
			<?php if($positionFullwidthbg!= 'transparent') { ?>
			<div class="wow fadeIn" id="rt-fullwidth" style="background:<?php echo $positionFullwidthbg?> no-repeat center top; background-size:cover;">
			<?php } else{?>
			<div class="wow fadeIn" id="rt-fullwidth">
			<?php } ?>
				<?php echo $gantry->displayModules('fullwidth','basic','basic'); ?>
					<div class="clear"></div>
				</div>
			<?php /** End Full Width **/ endif; ?>
			<?php /** Begin Main Body **/ ?>
			<div class="rt-container">
		    		<?php echo $gantry->displayMainbody('mainbody','sidebar','standard','standard','standard','standard','standard'); ?>
		    	</div>
			<?php /** End Main Body **/ ?>

			<?php /** Begin Main Bottom **/ if ($gantry->countModules('mainbottom')) : ?>
			<?php if($positionMainbottombg!= 'transparent') { ?>
			<div class="wow fadeIn" id="rt-mainbottom" style="background:<?php echo $positionMainbottombg?> no-repeat center top; background-size:cover;">
			<?php } else{ ?>
			<div class="wow fadeIn" id="rt-mainbottom">
			<?php } ?>
				<div class="rt-container">
					<?php echo $gantry->displayModules('mainbottom','standard','standard'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php /** End Main Bottom **/ endif; ?>
			<?php /** Begin Extension **/ if ($gantry->countModules('extension')) : ?>
			<?php if($positionExtensionbg!= 'transparent') { ?>
			<div class="wow fadeIn" id="rt-extension" style="background:<?php echo $positionExtensionbg?> no-repeat center top; background-size:cover;">
			<?php } else{ ?>
			<div class="wow fadeIn" id="rt-extension">
			<?php } ?>
				<div class="rt-container">
					<?php echo $gantry->displayModules('extension','standard','standard'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php /** End Extension **/ endif; ?>
			<?php /** Begin jd position 6 **/ if ($gantry->countModules('jd-position-6')) : ?>
			<?php if($positionPosition6bg!= 'transparent') { ?>
		 	<div class="wow fadeIn" id="jd-position-6" style="background:<?php echo $positionPosition6bg?> no-repeat center top; background-size:cover;">
			<?php } else {?>
			<div class="wow fadeIn" id="jd-position-6">
			<?php } ?>
				<div class="rt-container">
					<?php echo $gantry->displayModules('jd-position-6','standard','standard'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php /** Begin jd position 6 **/ endif; ?>	
			<?php /** Begin jd position 7 **/ if ($gantry->countModules('jd-position-7')) : ?>
			<div class="wow fadeIn" id="jd-position-7">
				<div class="rt-container">
					<?php echo $gantry->displayModules('jd-position-7','standard','standard'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php /** Begin jd position 7 **/ endif; ?>	
			<!-- Begin jd twitter -->
			<?php if ($this->countModules( 'jd-twitter' )) : ?>
			<?php if($positionTwitterbg!= 'transparent') { ?>
			<div class="wow fadeIn jd-twitter" style="background:<?php echo $positionTwitterbg?> no-repeat center top; background-size:cover;">
			<?php } else {?>
			<div class="wow fadeIn jd-twitter">
			<?php } ?>
				<div class="rt-container">
					<jdoc:include type="modules" name="jd-twitter" style="rounded" />
				</div>
			</div>
			<?php endif; ?>
			<!-- End JD twitter -->
		</div>
	</div>
	<?php /** Begin Bottom **/ if ($gantry->countModules('bottom')) : ?>
	<?php if($positionBottombg!= 'transparent') { ?>
	<div class="wow fadeIn" id="rt-bottom" style="background:<?php echo $positionBottombg?> no-repeat center top; background-size:cover;">
	<?php } else { ?>
	<div class="wow fadeIn" id="rt-bottom">
	<?php } ?>
		<div class="rt-container">
			<?php echo $gantry->displayModules('bottom','standard','standard'); ?>
			<div class="clear"></div>
		</div>
	</div>
	<?php /** End Bottom **/ endif; ?>
	
	<?php /** Begin jd position 8 **/ if ($gantry->countModules('jd-position-8')) : ?>
	<div class="wow fadeIn" id="jd-position-8">
		<div class="rt-container">
			<?php echo $gantry->displayModules('jd-position-8','standard','standard'); ?>
			<div class="clear"></div>
		</div>
	</div>
	<?php /** Begin jd position 8 **/ endif; ?>
	
	<!-- Begin jd Form -->
	<?php if ($this->countModules( 'jd-form' )) : ?>
	<?php if($positionFormbg!= 'transparent') { ?>
	<div class="wow fadeIn jd-form" style="background:<?php echo $positionFormbg?> no-repeat center top; background-size:cover;">
	<?php } else {?>
	<div class="wow fadeIn jd-form">
	<?php } ?>
		<div class="rt-container">
			<jdoc:include type="modules" name="jd-form" style="rounded" />
		</div>
	</div>
	<?php endif; ?>
	<!-- End JD Form -->
	
	<!-- Begin JD MAP -->
	<?php if ($this->countModules( 'jd-map' )) : ?>
	<?php if($positionMapbg!= 'transparent') { ?>
		<div class="jd-map wow fadeIn" style="background:<?php echo $positionMapbg?> no-repeat center top; background-size:cover;">
	<?php } else {?>
		<div class="jd-map wow fadeIn">
	<?php } ?>	
			<jdoc:include type="modules" name="jd-map" style="rounded" />
		</div>
	<?php endif; ?>
	<!-- End JD MAP -->
	
	<?php /** Begin Footer Section **/ if ($gantry->countModules('footer') or $gantry->countModules('copyright')) : ?>
	<footer id="rt-footer-surround">
		<?php /** Begin Footer **/ if ($gantry->countModules('footer')) : ?>
		<?php if($positionFooterbg!= 'transparent') { ?>
		<div class="wow fadeIn" id="rt-footer" style="background:<?php echo $positionFooterbg?> no-repeat center top; background-size:cover;">
		<?php } else { ?>
		<div class="wow fadeIn" id="rt-footer">
		<?php } ?>
			<div class="rt-container">
				<?php echo $gantry->displayModules('footer','standard','standard'); ?>
				<div class="clear"></div>
			</div>
		</div>
		<?php /** End Footer **/ endif; ?>
	</footer>
	<?php /** End Footer Surround **/ endif; ?>

<?php if($positionCopyrightbg!= 'transparent') { ?>	
<div class="wow fadeIn" id="rt-copyright" style="background:<?php echo $positionCopyrightbg?> no-repeat center top; background-size:cover;overflow:hidden;padding-top:10px;">
<?php }else{ ?>
<div class="wow fadeIn" id="rt-copyright" style="overflow:hidden;padding-top:10px;">
<?php } ?>
	<div class="rt-container">
		<div class="rt-grid-12 rt-alpha rt-omega">
			<div class="rt-block center" style="padding-bottom:0; margin-bottom:0;">
				<div class="module-surround">
					<div class="module-content">
						<div class="custom center wow zoomIn">
							<p>&copy; <?php echo date('Y'); ?> <strong style="text-transform:capitalize;"><?php echo $sitename; ?></strong></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


	<?php /** Begin Copyright **/ if ($gantry->countModules('copyright')) : ?>
	<?php if($positionCopyrightbg!= 'transparent') { ?>	
	<div class="wow fadeIn" id="rt-copyright" style="background:<?php echo $positionCopyrightbg?> no-repeat center top; background-size:cover;overflow:hidden;padding-top:10px;">
	<?php }else{ ?>
	<div class="wow fadeIn" id="rt-copyright" style="overflow:hidden;padding-top:10px;">
	<?php } ?>
		<div class="rt-container wow zoomIn">
				<?php echo $gantry->displayModules('copyright','standard','standard'); ?>
				<div class="clear"></div>
		</div>
	</div>
	</div>
	<?php /** End Copyright **/ endif; ?>

	<?php /** Begin Debug **/ if ($gantry->countModules('debug')) : ?>
	<div id="rt-debug">
		<div class="rt-container">
			<?php echo $gantry->displayModules('debug','standard','standard'); ?>
			<div class="clear"></div>
		</div>
	</div>
	<?php /** End Debug **/ endif; ?>
	<?php /** Begin Analytics **/ if ($gantry->countModules('analytics')) : ?>
	<?php echo $gantry->displayModules('analytics','basic','basic'); ?>
	<?php /** End Analytics **/ endif; ?>
	
	</body>
</html>
<?php
$gantry->finalize();
?>
