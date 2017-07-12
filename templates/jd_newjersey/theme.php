<?php 
if(!empty($gantry->document->params['positionTop']->positiontopImage)){
				 $path = json_decode($gantry->document->params['positionTop']->positiontopImage);
				 $positionTopbg= (isset( $path )) ? 'url('.$path->path.')': "";		
				 }else{
				$positionTopbg=(isset($gantry->document->params['positionTop']->topColor)) ? $gantry->document->params['positionTop']->topColor : 'transparent';
			}
			if(!empty($gantry->document->params['positionHeader']->positionHeaderimg)){
				 $path = json_decode($gantry->document->params['positionHeader']->positionHeaderimg);
				 $positionHeaderbg = (isset( $path )) ? 'url('.$path->path.')': "";		
				 }else{
				$positionHeaderbg=(isset($gantry->document->params['positionHeader']->headerColor)) ? $gantry->document->params['positionHeader']->headerColor : 'transparent';
			}
			
			if(!empty($gantry->document->params['positionBreadcrumb']->positionBreadcrumbimg)){
				 $path = json_decode($gantry->document->params['positionBreadcrumb']->positionBreadcrumbimg);
				 $positionBreadcrumbbg = (isset( $path )) ? 'url('.$path->path.')': "";		
				 }else{
				$positionBreadcrumbbg=(isset($gantry->document->params['positionBreadcrumb']->breadcrumbsColor)) ? $gantry->document->params['positionBreadcrumb']->breadcrumbsColor : 'transparent';
			}

			if(!empty($gantry->document->params['positionDrawer']->positionDrawerimg)){
				 $path = json_decode($gantry->document->params['positionDrawer']->positionDrawerimg);
				 $positionDrawerbg = (isset( $path )) ? 'url('.$path->path.')': "";		
				 }else{
				$positionDrawerbg=(isset($gantry->document->params['positionDrawer']->drawerColor)) ? $gantry->document->params['positionDrawer']->drawerColor : 'transparent';
			}

			if(!empty($gantry->document->params['positionShowcase']->positionShowcaseimg)){
				 $path = json_decode($gantry->document->params['positionShowcase']->positionShowcaseimg);
				 $positionShowcasebg = (isset( $path )) ? 'url('.$path->path.')': "";		
				 }else{
				$positionShowcasebg=(isset($gantry->document->params['positionShowcase']->showcaseColor)) ? $gantry->document->params['positionShowcase']->showcaseColor : 'transparent';
			}

			if(!empty($gantry->document->params['positionFeature']->positionFeatureimg)){
				 $path = json_decode($gantry->document->params['positionFeature']->positionFeatureimg);
				 $positionFeaturebg =(isset( $path )) ? 'url('.$path->path.')': "";	
				 }else{
				$positionFeaturebg=(isset($gantry->document->params['positionFeature']->featureColor)) ? $gantry->document->params['positionFeature']->featureColor : 'transparent';
			}

			if(!empty($gantry->document->params['positionUtility']->positionUtilityimg)){
				 $path = json_decode($gantry->document->params['positionUtility']->positionUtilityimg);
				 $positionUtilitybg = (isset( $path )) ? 'url('.$path->path.')': "";	
				 }else{
				$positionUtilitybg=(isset($gantry->document->params['positionUtility']->utilityColor)) ? $gantry->document->params['positionUtility']->utilityColor : 'transparent';
			}
			
			if(!empty($gantry->document->params['positionMaintop']->positionMaintopimg)){
				 $path = json_decode($gantry->document->params['positionMaintop']->positionMaintopimg);
				 $positionMaintopbg = (isset( $path )) ? 'url('.$path->path.')': "";		
				 }else{
				$positionMaintopbg=(isset($gantry->document->params['positionMaintop']->maintopColor)) ? $gantry->document->params['positionMaintop']->maintopColor : 'transparent';
			}

			if(!empty($gantry->document->params['positionFunfacts']->positionFunfactsimg)){
				 $path = json_decode($gantry->document->params['positionFunfacts']->positionFunfactsimg);
				 $positionFunfactsbg = (isset( $path )) ? 'url('.$path->path.')': "";	
				 }else{
				$positionFunfactsbg=(isset($gantry->document->params['positionFunfacts']->funfactsColor)) ? $gantry->document->params['positionFunfacts']->funfactsColor : 'transparent';
			}

			if(!empty($gantry->document->params['positionPosition1']->positionPosition1img)){
				 $path = json_decode($gantry->document->params['positionPosition1']->positionPosition1img);
				 $positionPosition1bg = (isset( $path )) ? 'url('.$path->path.')': "";		
				 }else{
				$positionPosition1bg=(isset($gantry->document->params['positionPosition1']->jdposition1Color)) ? $gantry->document->params['positionPosition1']->jdposition1Color : 'transparent';
			}

			if(!empty($gantry->document->params['positionPosition2']->positionPosition2img)){
				 $path = json_decode($gantry->document->params['positionPosition2']->positionPosition2img);
				 $positionPosition2bg = (isset( $path )) ? 'url('.$path->path.')': "";		
				 }else{
				$positionPosition2bg=(isset($gantry->document->params['positionPosition2']->jdposition2Color)) ? $gantry->document->params['positionPosition2']->jdposition2Color : 'transparent';
			}

			if(!empty($gantry->document->params['positionPosition3']->positionPosition3img)){
				 $path = json_decode($gantry->document->params['positionPosition3']->positionPosition3img);
				 $positionPosition3bg = (isset( $path )) ? 'url('.$path->path.')': "";	
				 }else{
				$positionPosition3bg=(isset($gantry->document->params['positionPosition3']->jdposition3Color)) ? $gantry->document->params['positionPosition3']->jdposition3Color : 'transparent';
			}

			if(!empty($gantry->document->params['positionPosition4']->positionPosition4img)){
				 $path = json_decode($gantry->document->params['positionPosition4']->positionPosition4img);
				 $positionPosition4bg = (isset( $path )) ? 'url('.$path->path.')': "";	
				 }else{
				$positionPosition4bg=(isset($gantry->document->params['positionPosition4']->jdposition4Color)) ? $gantry->document->params['positionPosition4']->jdposition4Color : 'transparent';
			}

			if(!empty($gantry->document->params['positionFullwidth']->positionFullwidthimg)){
				 $path = json_decode($gantry->document->params['positionFullwidth']->positionFullwidthimg);
				 $positionFullwidthbg = (isset( $path )) ? 'url('.$path->path.')': "";	
				 }else{
				$positionFullwidthbg=(isset($gantry->document->params['positionFullwidth']->fullwidthColor)) ? $gantry->document->params['positionFullwidth']->fullwidthColor : 'transparent';
			}

			if(!empty($gantry->document->params['positionMainbottom']->positionMainbottomimg)){
				 $path = json_decode($gantry->document->params['positionMainbottom']->positionMainbottomimg);
				 $positionMainbottombg = (isset( $path )) ? 'url('.$path->path.')': "";		
				 }else{
				$positionMainbottombg=(isset($gantry->document->params['positionMainbottom']->mainbottomColor)) ? $gantry->document->params['positionMainbottom']->mainbottomColor : 'transparent';
			}

			if(!empty($gantry->document->params['positionExtension']->positionExtensionimg)){
				 $path = json_decode($gantry->document->params['positionExtension']->positionExtensionimg);
				 $positionExtensionbg = (isset( $path )) ? 'url('.$path->path.')': "";	
				 }else{
				$positionExtensionbg=(isset($gantry->document->params['positionExtension']->extensionColor)) ? $gantry->document->params['positionExtension']->extensionColor : 'transparent';
			}

			if(!empty($gantry->document->params['positionPosition5']->positionPosition5img)){
				 $path = json_decode($gantry->document->params['positionPosition5']->positionPosition5img);
				 $positionPosition5bg = (isset( $path )) ? 'url('.$path->path.')': "";		
				 }else{
				$positionPosition5bg=(isset($gantry->document->params['positionPosition5']->jdposition5Color)) ? $gantry->document->params['positionPosition5']->jdposition5Color : 'transparent';
			}
			
			if(!empty($gantry->document->params['positionTwitter']->positionTwitterimg)){
				 $path = json_decode($gantry->document->params['positionTwitter']->positionTwitterimg);
				 $positionTwitterbg = (isset( $path )) ? 'url('.$path->path.')': "";		
				 }else{
				$positionTwitterbg=(isset($gantry->document->params['positionTwitter']->twitterColor)) ? $gantry->document->params['positionTwitter']->twitterColor : 'transparent';
			}

			if(!empty($gantry->document->params['positionBottom']->positionBottomimg)){
				 $path = json_decode($gantry->document->params['positionBottom']->positionBottomimg);
				 $positionBottombg = (isset( $path )) ? 'url('.$path->path.')': "";		
				 }else{
				$positionBottombg=(isset($gantry->document->params['positionBottom']->bottomColor)) ? $gantry->document->params['positionBottom']->bottomColor : 'transparent';
			}

			if(!empty($gantry->document->params['positionPosition6']->positionPosition6img)){
				 $path = json_decode($gantry->document->params['positionPosition6']->positionPosition6img);
				 $positionPosition6bg = (isset( $path )) ? 'url('.$path->path.')': "";		
				 }else{
				$positionPosition6bg=(isset($gantry->document->params['positionPosition6']->jdposition6Color)) ? $gantry->document->params['positionPosition6']->jdposition6Color : 'transparent';
			}

			if(!empty($gantry->document->params['positionForm']->positionFormimg)){
				 $path = json_decode($gantry->document->params['positionForm']->positionFormimg);
				 $positionFormbg = (isset( $path )) ? 'url('.$path->path.')': "";		
				 }else{
				$positionFormbg=(isset($gantry->document->params['positionForm']->jdformColor)) ? $gantry->document->params['positionForm']->jdformColor : 'transparent';
			}

			if(!empty($gantry->document->params['positionMap']->positionMapimg)){
				 $path = json_decode($gantry->document->params['positionMap']->positionMapimg);
				 $positionMapbg = (isset( $path )) ? 'url('.$path->path.')': "";		
				 }else{
				$positionMapbg=(isset($gantry->document->params['positionMap']->jdmapColor)) ? $gantry->document->params['positionMap']->jdmapColor : 'transparent';
			}

			if(!empty($gantry->document->params['positionFooter']->positionFooterimg)){
				 $path = json_decode($gantry->document->params['positionFooter']->positionFooterimg);
				 $positionFooterbg = (isset( $path )) ? 'url('.$path->path.')': "";		
				 }else{
				$positionFooterbg=(isset($gantry->document->params['positionFooter']->footerColor)) ? $gantry->document->params['positionFooter']->footerColor : 'transparent';
			}

			if(!empty($gantry->document->params['positionCopyright']->positionCopyrightimg)){
				 $path = json_decode($gantry->document->params['positionCopyright']->positionCopyrightimg);
				 $positionCopyrightbg = (isset( $path )) ? 'url('.$path->path.')': "";	
				 }else{
				$positionCopyrightbg=(isset($gantry->document->params['positionCopyright']->copyrightColor)) ? $gantry->document->params['positionCopyright']->copyrightColor : 'transparent';
			}
			?>