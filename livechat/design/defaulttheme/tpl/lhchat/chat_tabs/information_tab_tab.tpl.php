<li role="presentation"<?php if ($chatTabsOrderDefault == 'information_tab_tab') print ' class="active"';?>><a href="#main-user-info-tab-<?php echo $chat->id?>" aria-controls="main-user-info-tab-<?php echo $chat->id?>" role="tab" data-toggle="tab" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/adminchat','Visitor')?>"><i class="material-icons mr-0">info_outline</i></a></li>