<?php

########################################################################
# Extension Manager/Repository config file for ext "cms".
#
# Auto generated 22-05-2012 11:27
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'TYPO3 CMS Frontend (TypoScript)',
	'description' => 'The core TypoScript Content Management engine in TYPO3.
This should probably not be disabled. But the point is that Typo3 is able to work as a framework for... anything without this (and the whole tslib/ frontend which is tied to this extension). A LOT of the other extensions - in particular all plugins - are dependant on this extension being loaded.',
	'category' => 'be',
	'shy' => 1,
	'dependencies' => '',
	'conflicts' => '',
	'priority' => 'top',
	'loadOrder' => '',
	'module' => 'layout',
	'state' => 'stable',
	'internal' => 1,
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'pages',
	'clearCacheOnLoad' => 1,
	'lockType' => 'S',
	'author' => 'Kasper Skaarhoj',
	'author_email' => 'kasperYYYY@typo3.com',
	'author_company' => 'CURBY SOFT Multimedie',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'version' => '4.7.1',
	'_md5_values_when_last_written' => 'a:488:{s:16:"ext_autoload.php";s:4:"5ded";s:12:"ext_icon.gif";s:4:"87d7";s:17:"ext_localconf.php";s:4:"d08e";s:14:"ext_tables.php";s:4:"6dd0";s:14:"ext_tables.sql";s:4:"7bd1";s:18:"flexform_media.xml";s:4:"5bfc";s:25:"locallang_csh_webinfo.xlf";s:4:"7908";s:27:"locallang_csh_weblayout.xlf";s:4:"0731";s:17:"locallang_tca.xlf";s:4:"a682";s:17:"locallang_ttc.xlf";s:4:"d7d1";s:10:"readme.txt";s:4:"0d56";s:11:"tbl_cms.php";s:4:"5c31";s:18:"tbl_tt_content.php";s:4:"56ec";s:38:"classes/class.tx_cms_backendlayout.php";s:4:"6d9a";s:34:"cshimages/localizationoverview.png";s:4:"7498";s:35:"cshimages/localizationoverview1.png";s:4:"c032";s:26:"cshimages/pagemodule_1.png";s:4:"bac0";s:27:"cshimages/pagemodule_10.png";s:4:"5100";s:27:"cshimages/pagemodule_11.png";s:4:"4646";s:27:"cshimages/pagemodule_12.png";s:4:"7941";s:27:"cshimages/pagemodule_13.png";s:4:"bb55";s:27:"cshimages/pagemodule_14.png";s:4:"24f8";s:27:"cshimages/pagemodule_15.png";s:4:"1d01";s:26:"cshimages/pagemodule_2.png";s:4:"da04";s:26:"cshimages/pagemodule_4.png";s:4:"be7f";s:26:"cshimages/pagemodule_5.png";s:4:"8848";s:26:"cshimages/pagemodule_6.png";s:4:"a8d7";s:26:"cshimages/pagemodule_7.png";s:4:"c930";s:26:"cshimages/pagemodule_9.png";s:4:"a3ef";s:33:"cshimages/pagetree_overview_1.png";s:4:"1c24";s:33:"cshimages/pagetree_overview_2.png";s:4:"b4d8";s:33:"cshimages/pagetree_overview_3.png";s:4:"9318";s:33:"cshimages/pagetree_overview_4.png";s:4:"2f6e";s:33:"cshimages/pagetree_overview_5.png";s:4:"dbbb";s:33:"cshimages/pagetree_overview_6.png";s:4:"a839";s:33:"cshimages/pagetree_overview_7.png";s:4:"5dd6";s:33:"cshimages/pagetree_overview_8.png";s:4:"e5be";s:33:"cshimages/pagetree_overview_9.png";s:4:"9ca0";s:30:"layout/class.tx_cms_layout.php";s:4:"c443";s:16:"layout/clear.gif";s:4:"cc11";s:15:"layout/conf.php";s:4:"f594";s:20:"layout/db_layout.php";s:4:"0c7e";s:28:"layout/db_new_content_el.php";s:4:"8791";s:17:"layout/layout.gif";s:4:"edde";s:20:"layout/locallang.xlf";s:4:"bee1";s:38:"layout/locallang_db_new_content_el.xlf";s:4:"4ce4";s:24:"layout/locallang_mod.xlf";s:4:"388b";s:32:"layout/wizard_backend_layout.php";s:4:"cafa";s:32:"layout/wizard_backend_layout.png";s:4:"5e08";s:69:"layout/interfaces/interface.tx_cms_layout_tt_content_drawitemhook.php";s:4:"dc5b";s:28:"layout/js/typo3pageModule.js";s:4:"b348";s:25:"layout/res/grideditor.css";s:4:"09f4";s:24:"layout/res/grideditor.js";s:4:"27bf";s:37:"layout/res/t3grid-edit-inactive-1.png";s:4:"728d";s:35:"layout/res/t3grid-edit-inactive.png";s:4:"728d";s:26:"layout/res/t3grid-edit.png";s:4:"f677";s:42:"layout/res/t3grid-editor-down-inactive.png";s:4:"33d4";s:33:"layout/res/t3grid-editor-down.png";s:4:"083d";s:42:"layout/res/t3grid-editor-left-inactive.png";s:4:"bc52";s:33:"layout/res/t3grid-editor-left.png";s:4:"12ff";s:43:"layout/res/t3grid-editor-right-inactive.png";s:4:"328a";s:34:"layout/res/t3grid-editor-right.png";s:4:"a01f";s:40:"layout/res/t3grid-editor-up-inactive.png";s:4:"3ae1";s:31:"layout/res/t3grid-editor-up.png";s:4:"736a";s:38:"layout/res/t3grid-layer-icon-close.png";s:4:"c0aa";s:37:"layout/res/t3grid-layer-icon-help.png";s:4:"8fa0";s:37:"layout/res/t3grid-layer-icon-save.png";s:4:"fc92";s:31:"layout/res/t3grid-tabledown.png";s:4:"24a5";s:31:"layout/res/t3grid-tableleft.png";s:4:"e4d9";s:32:"layout/res/t3grid-tableright.png";s:4:"592e";s:29:"layout/res/t3grid-tableup.png";s:4:"6cf2";s:30:"layout/res/typo3.pageModule.js";s:4:"e7a8";s:42:"tests/tslib/class.tslib_adminpanelTest.php";s:4:"4dbd";s:39:"tests/tslib/class.tslib_contentTest.php";s:4:"d768";s:34:"tests/tslib/class.tslib_feTest.php";s:4:"6441";s:13:"tslib/GPL.txt";s:4:"7a8e";s:16:"tslib/README.txt";s:4:"fd52";s:32:"tslib/class.tslib_adminpanel.php";s:4:"eaa5";s:29:"tslib/class.tslib_content.php";s:4:"499e";s:34:"tslib/class.tslib_controltable.php";s:4:"4f26";s:30:"tslib/class.tslib_eidtools.php";s:4:"1616";s:34:"tslib/class.tslib_extdirecteid.php";s:4:"654c";s:24:"tslib/class.tslib_fe.php";s:4:"df8a";s:35:"tslib/class.tslib_fecompression.php";s:4:"6350";s:27:"tslib/class.tslib_fetce.php";s:4:"6e12";s:32:"tslib/class.tslib_feuserauth.php";s:4:"c8c6";s:30:"tslib/class.tslib_frameset.php";s:4:"1d47";s:32:"tslib/class.tslib_gifbuilder.php";s:4:"cfca";s:45:"tslib/class.tslib_mediawizardcoreprovider.php";s:4:"cff8";s:40:"tslib/class.tslib_mediawizardmanager.php";s:4:"7cfb";s:26:"tslib/class.tslib_menu.php";s:4:"e1e7";s:29:"tslib/class.tslib_pagegen.php";s:4:"fd60";s:28:"tslib/class.tslib_pibase.php";s:4:"0e13";s:28:"tslib/class.tslib_search.php";s:4:"f3a3";s:33:"tslib/class.tslib_tableoffset.php";s:4:"ae17";s:22:"tslib/extdirecteid.php";s:4:"79db";s:16:"tslib/index.html";s:4:"51ef";s:18:"tslib/index_ts.php";s:4:"7f07";s:17:"tslib/pagegen.php";s:4:"b898";s:17:"tslib/showpic.php";s:4:"f114";s:46:"tslib/content/class.tslib_content_abstract.php";s:4:"7a6c";s:42:"tslib/content/class.tslib_content_case.php";s:4:"44de";s:46:"tslib/content/class.tslib_content_cleargif.php";s:4:"3e50";s:45:"tslib/content/class.tslib_content_columns.php";s:4:"4497";s:45:"tslib/content/class.tslib_content_content.php";s:4:"befd";s:56:"tslib/content/class.tslib_content_contentobjectarray.php";s:4:"9747";s:64:"tslib/content/class.tslib_content_contentobjectarrayinternal.php";s:4:"75f8";s:50:"tslib/content/class.tslib_content_contenttable.php";s:4:"be40";s:47:"tslib/content/class.tslib_content_editpanel.php";s:4:"93d4";s:42:"tslib/content/class.tslib_content_file.php";s:4:"5f14";s:48:"tslib/content/class.tslib_content_flowplayer.php";s:4:"9ee1";s:51:"tslib/content/class.tslib_content_fluidtemplate.php";s:4:"3f7d";s:42:"tslib/content/class.tslib_content_form.php";s:4:"cde3";s:54:"tslib/content/class.tslib_content_hierarchicalmenu.php";s:4:"57d0";s:53:"tslib/content/class.tslib_content_horizontalruler.php";s:4:"28e9";s:42:"tslib/content/class.tslib_content_html.php";s:4:"92f0";s:43:"tslib/content/class.tslib_content_image.php";s:4:"08f2";s:51:"tslib/content/class.tslib_content_imageresource.php";s:4:"6090";s:47:"tslib/content/class.tslib_content_imagetext.php";s:4:"b2a8";s:50:"tslib/content/class.tslib_content_loadregister.php";s:4:"b7de";s:43:"tslib/content/class.tslib_content_media.php";s:4:"72c1";s:48:"tslib/content/class.tslib_content_multimedia.php";s:4:"ada8";s:49:"tslib/content/class.tslib_content_offsettable.php";s:4:"d3d3";s:47:"tslib/content/class.tslib_content_phpscript.php";s:4:"e35c";s:55:"tslib/content/class.tslib_content_phpscriptexternal.php";s:4:"34fe";s:55:"tslib/content/class.tslib_content_phpscriptinternal.php";s:4:"4b4d";s:53:"tslib/content/class.tslib_content_quicktimeobject.php";s:4:"a8c9";s:45:"tslib/content/class.tslib_content_records.php";s:4:"00fe";s:53:"tslib/content/class.tslib_content_restoreregister.php";s:4:"3a42";s:60:"tslib/content/class.tslib_content_scalablevectorgraphics.php";s:4:"18f4";s:50:"tslib/content/class.tslib_content_searchresult.php";s:4:"f2d2";s:58:"tslib/content/class.tslib_content_shockwaveflashobject.php";s:4:"4c7f";s:46:"tslib/content/class.tslib_content_template.php";s:4:"dff3";s:42:"tslib/content/class.tslib_content_text.php";s:4:"cbe7";s:42:"tslib/content/class.tslib_content_user.php";s:4:"76ea";s:50:"tslib/content/class.tslib_content_userinternal.php";s:4:"e16c";s:36:"tslib/hooks/class.tx_cms_fehooks.php";s:4:"91f1";s:39:"tslib/hooks/class.tx_cms_mediaitems.php";s:4:"d71a";s:48:"tslib/hooks/class.tx_cms_treelistcacheupdate.php";s:4:"d303";s:51:"tslib/interfaces/interface.tslib_adminPanelHook.php";s:4:"3127";s:62:"tslib/interfaces/interface.tslib_content_cobjgetsinglehook.php";s:4:"0209";s:56:"tslib/interfaces/interface.tslib_content_getdatahook.php";s:4:"8aa7";s:63:"tslib/interfaces/interface.tslib_content_getimgresourcehook.php";s:4:"8f91";s:57:"tslib/interfaces/interface.tslib_content_postinithook.php";s:4:"7b52";s:56:"tslib/interfaces/interface.tslib_content_stdwraphook.php";s:4:"5f9d";s:56:"tslib/interfaces/interface.tslib_mediawizardprovider.php";s:4:"374b";s:61:"tslib/interfaces/interface.tslib_menu_filterMenuPagesHook.php";s:4:"39cf";s:33:"tslib/media/bullets/arrow_act.gif";s:4:"dca4";s:32:"tslib/media/bullets/arrow_no.gif";s:4:"5c89";s:34:"tslib/media/bullets/blackclear.gif";s:4:"d57d";s:32:"tslib/media/bullets/blackdot.gif";s:4:"d7b1";s:29:"tslib/media/bullets/blank.gif";s:4:"97b1";s:33:"tslib/media/bullets/bullet1_h.gif";s:4:"d090";s:33:"tslib/media/bullets/bullet1_n.gif";s:4:"0a23";s:33:"tslib/media/bullets/bullet2_h.gif";s:4:"a8f4";s:33:"tslib/media/bullets/bullet2_n.gif";s:4:"c38f";s:33:"tslib/media/bullets/bullet3_h.gif";s:4:"a7d8";s:33:"tslib/media/bullets/bullet3_n.gif";s:4:"3b54";s:31:"tslib/media/bullets/bullet4.gif";s:4:"ce65";s:33:"tslib/media/bullets/bullet4_h.gif";s:4:"ab2b";s:33:"tslib/media/bullets/bullet4_n.gif";s:4:"541d";s:33:"tslib/media/bullets/bullet5_h.gif";s:4:"b47e";s:33:"tslib/media/bullets/bullet5_n.gif";s:4:"5041";s:27:"tslib/media/bullets/dot.gif";s:4:"eec5";s:29:"tslib/media/bullets/dots1.gif";s:4:"fe62";s:29:"tslib/media/bullets/dots2.gif";s:4:"9c1e";s:27:"tslib/media/bullets/fwd.gif";s:4:"e126";s:34:"tslib/media/bullets/greenclear.gif";s:4:"8869";s:28:"tslib/media/bullets/mark.gif";s:4:"8d39";s:28:"tslib/media/bullets/pen1.gif";s:4:"19b4";s:28:"tslib/media/bullets/pen2.gif";s:4:"e78a";s:32:"tslib/media/bullets/punktmrk.gif";s:4:"64a9";s:32:"tslib/media/bullets/redclear.gif";s:4:"1fdd";s:27:"tslib/media/bullets/rew.gif";s:4:"e125";s:32:"tslib/media/bullets/stipler3.gif";s:4:"7893";s:28:"tslib/media/buttons/left.gif";s:4:"c085";s:31:"tslib/media/buttons/left_ro.gif";s:4:"364c";s:33:"tslib/media/buttons/maskpart1.tif";s:4:"de30";s:33:"tslib/media/buttons/maskpart2.tif";s:4:"efd4";s:33:"tslib/media/buttons/maskpart3.tif";s:4:"8b2d";s:34:"tslib/media/buttons/menubottom.gif";s:4:"7ac1";s:34:"tslib/media/buttons/menulevel1.gif";s:4:"ad21";s:34:"tslib/media/buttons/menulevel2.gif";s:4:"7c31";s:31:"tslib/media/buttons/menutop.gif";s:4:"f984";s:30:"tslib/media/buttons/middle.gif";s:4:"66b5";s:33:"tslib/media/buttons/middle_ro.gif";s:4:"5fd4";s:29:"tslib/media/buttons/right.gif";s:4:"edba";s:32:"tslib/media/buttons/right_ro.gif";s:4:"2322";s:31:"tslib/media/emoticons/angry.gif";s:4:"9c1e";s:30:"tslib/media/emoticons/grin.gif";s:4:"0f32";s:29:"tslib/media/emoticons/sad.gif";s:4:"5983";s:31:"tslib/media/emoticons/smile.gif";s:4:"9388";s:32:"tslib/media/emoticons/tongue.gif";s:4:"d2e5";s:36:"tslib/media/emoticons/tonguewink.gif";s:4:"44bf";s:35:"tslib/media/emoticons/veryhappy.gif";s:4:"6145";s:30:"tslib/media/emoticons/wink.gif";s:4:"cdfb";s:29:"tslib/media/fileicons/3ds.gif";s:4:"122b";s:33:"tslib/media/fileicons/CREDITS.txt";s:4:"d42e";s:28:"tslib/media/fileicons/ai.gif";s:4:"2cb7";s:29:"tslib/media/fileicons/ani.gif";s:4:"c4e3";s:28:"tslib/media/fileicons/au.gif";s:4:"0199";s:29:"tslib/media/fileicons/avi.gif";s:4:"27bd";s:29:"tslib/media/fileicons/bmp.gif";s:4:"a7a6";s:29:"tslib/media/fileicons/cdr.gif";s:4:"6fc9";s:29:"tslib/media/fileicons/css.gif";s:4:"4786";s:29:"tslib/media/fileicons/csv.gif";s:4:"6a23";s:33:"tslib/media/fileicons/default.gif";s:4:"313c";s:29:"tslib/media/fileicons/doc.gif";s:4:"8c62";s:29:"tslib/media/fileicons/dtd.gif";s:4:"48e2";s:29:"tslib/media/fileicons/eps.gif";s:4:"4262";s:29:"tslib/media/fileicons/exe.gif";s:4:"175c";s:29:"tslib/media/fileicons/fh3.gif";s:4:"b429";s:31:"tslib/media/fileicons/flash.gif";s:4:"0ab7";s:32:"tslib/media/fileicons/folder.gif";s:4:"f3ad";s:29:"tslib/media/fileicons/gif.gif";s:4:"1559";s:29:"tslib/media/fileicons/htm.gif";s:4:"54de";s:30:"tslib/media/fileicons/html.gif";s:4:"8c94";s:31:"tslib/media/fileicons/html1.gif";s:4:"c633";s:31:"tslib/media/fileicons/html2.gif";s:4:"ae09";s:31:"tslib/media/fileicons/html3.gif";s:4:"23ae";s:29:"tslib/media/fileicons/ico.gif";s:4:"250a";s:29:"tslib/media/fileicons/inc.gif";s:4:"ad9f";s:30:"tslib/media/fileicons/java.gif";s:4:"52de";s:29:"tslib/media/fileicons/jpg.gif";s:4:"e8df";s:28:"tslib/media/fileicons/js.gif";s:4:"7a5a";s:29:"tslib/media/fileicons/max.gif";s:4:"d6f4";s:29:"tslib/media/fileicons/mid.gif";s:4:"0d95";s:29:"tslib/media/fileicons/mov.gif";s:4:"d5e6";s:30:"tslib/media/fileicons/mpeg.gif";s:4:"ba4e";s:29:"tslib/media/fileicons/mpg.gif";s:4:"ba4e";s:29:"tslib/media/fileicons/pcd.gif";s:4:"e9f3";s:29:"tslib/media/fileicons/pcx.gif";s:4:"7d29";s:29:"tslib/media/fileicons/pdf.gif";s:4:"5c5f";s:30:"tslib/media/fileicons/php3.gif";s:4:"e58b";s:29:"tslib/media/fileicons/png.gif";s:4:"fffc";s:29:"tslib/media/fileicons/ppt.gif";s:4:"8740";s:28:"tslib/media/fileicons/ps.gif";s:4:"28c8";s:29:"tslib/media/fileicons/psd.gif";s:4:"4448";s:29:"tslib/media/fileicons/rtf.gif";s:4:"f660";s:30:"tslib/media/fileicons/sgml.gif";s:4:"13e6";s:29:"tslib/media/fileicons/swf.gif";s:4:"244f";s:29:"tslib/media/fileicons/sxc.gif";s:4:"a29e";s:29:"tslib/media/fileicons/sxw.gif";s:4:"2bc9";s:29:"tslib/media/fileicons/t3d.gif";s:4:"9a71";s:29:"tslib/media/fileicons/t3x.gif";s:4:"f357";s:29:"tslib/media/fileicons/tga.gif";s:4:"5e78";s:29:"tslib/media/fileicons/tif.gif";s:4:"533b";s:30:"tslib/media/fileicons/tmpl.gif";s:4:"5114";s:29:"tslib/media/fileicons/ttf.gif";s:4:"9f93";s:29:"tslib/media/fileicons/txt.gif";s:4:"d7f9";s:29:"tslib/media/fileicons/wav.gif";s:4:"6931";s:29:"tslib/media/fileicons/wrl.gif";s:4:"132d";s:29:"tslib/media/fileicons/xls.gif";s:4:"f106";s:29:"tslib/media/fileicons/xml.gif";s:4:"c32d";s:29:"tslib/media/fileicons/xsl.gif";s:4:"2a99";s:29:"tslib/media/fileicons/zip.gif";s:4:"3e53";s:27:"tslib/media/flags/cctld.txt";s:4:"88b3";s:29:"tslib/media/flags/credits.txt";s:4:"122f";s:29:"tslib/media/flags/flag_cz.gif";s:4:"42c2";s:31:"tslib/media/flags/flag_cz_d.gif";s:4:"ade9";s:31:"tslib/media/flags/flag_cz_f.gif";s:4:"d0a1";s:29:"tslib/media/flags/flag_de.gif";s:4:"42fa";s:31:"tslib/media/flags/flag_de_d.gif";s:4:"2d2e";s:31:"tslib/media/flags/flag_de_f.gif";s:4:"cd90";s:29:"tslib/media/flags/flag_dk.gif";s:4:"fada";s:31:"tslib/media/flags/flag_dk_d.gif";s:4:"1d54";s:31:"tslib/media/flags/flag_dk_f.gif";s:4:"d071";s:29:"tslib/media/flags/flag_es.gif";s:4:"9909";s:31:"tslib/media/flags/flag_es_d.gif";s:4:"b106";s:31:"tslib/media/flags/flag_es_f.gif";s:4:"e07d";s:29:"tslib/media/flags/flag_fi.gif";s:4:"8125";s:31:"tslib/media/flags/flag_fi_d.gif";s:4:"91ca";s:31:"tslib/media/flags/flag_fi_f.gif";s:4:"1635";s:29:"tslib/media/flags/flag_fr.gif";s:4:"9019";s:31:"tslib/media/flags/flag_fr_d.gif";s:4:"33f2";s:31:"tslib/media/flags/flag_fr_f.gif";s:4:"751b";s:29:"tslib/media/flags/flag_it.gif";s:4:"ecb5";s:31:"tslib/media/flags/flag_it_d.gif";s:4:"4a3d";s:31:"tslib/media/flags/flag_it_f.gif";s:4:"bc13";s:29:"tslib/media/flags/flag_lt.gif";s:4:"6af9";s:31:"tslib/media/flags/flag_lt_d.gif";s:4:"01cd";s:31:"tslib/media/flags/flag_lt_f.gif";s:4:"cd19";s:29:"tslib/media/flags/flag_lv.gif";s:4:"c730";s:31:"tslib/media/flags/flag_lv_d.gif";s:4:"4313";s:31:"tslib/media/flags/flag_lv_f.gif";s:4:"0d00";s:29:"tslib/media/flags/flag_nl.gif";s:4:"69c6";s:31:"tslib/media/flags/flag_nl_d.gif";s:4:"58ad";s:31:"tslib/media/flags/flag_nl_f.gif";s:4:"d67b";s:29:"tslib/media/flags/flag_pl.gif";s:4:"21b3";s:31:"tslib/media/flags/flag_pl_d.gif";s:4:"cb77";s:31:"tslib/media/flags/flag_pl_f.gif";s:4:"bdb0";s:29:"tslib/media/flags/flag_se.gif";s:4:"c4cf";s:31:"tslib/media/flags/flag_se_d.gif";s:4:"adf5";s:31:"tslib/media/flags/flag_se_f.gif";s:4:"52e1";s:29:"tslib/media/flags/flag_si.gif";s:4:"a522";s:31:"tslib/media/flags/flag_si_f.gif";s:4:"78bc";s:32:"tslib/media/flags/flag_si_si.gif";s:4:"cc00";s:29:"tslib/media/flags/flag_sk.gif";s:4:"7411";s:31:"tslib/media/flags/flag_sk_d.gif";s:4:"9b5e";s:31:"tslib/media/flags/flag_sk_f.gif";s:4:"e0fd";s:29:"tslib/media/flags/flag_uk.gif";s:4:"4b1e";s:31:"tslib/media/flags/flag_uk_d.gif";s:4:"1987";s:31:"tslib/media/flags/flag_uk_f.gif";s:4:"8427";s:27:"tslib/media/flags/hl_at.gif";s:4:"0517";s:27:"tslib/media/flags/hl_be.gif";s:4:"9df0";s:27:"tslib/media/flags/hl_ch.gif";s:4:"ca28";s:27:"tslib/media/flags/hl_cz.gif";s:4:"889b";s:27:"tslib/media/flags/hl_de.gif";s:4:"d4ae";s:27:"tslib/media/flags/hl_dk.gif";s:4:"c846";s:27:"tslib/media/flags/hl_es.gif";s:4:"59ff";s:27:"tslib/media/flags/hl_fi.gif";s:4:"e572";s:27:"tslib/media/flags/hl_fr.gif";s:4:"e27d";s:27:"tslib/media/flags/hl_gr.gif";s:4:"65a2";s:27:"tslib/media/flags/hl_hu.gif";s:4:"d8c8";s:27:"tslib/media/flags/hl_ie.gif";s:4:"7900";s:27:"tslib/media/flags/hl_is.gif";s:4:"9a92";s:27:"tslib/media/flags/hl_it.gif";s:4:"ece5";s:27:"tslib/media/flags/hl_lt.gif";s:4:"cd19";s:27:"tslib/media/flags/hl_no.gif";s:4:"fd3d";s:27:"tslib/media/flags/hl_pl.gif";s:4:"03e5";s:27:"tslib/media/flags/hl_pt.gif";s:4:"a3dc";s:27:"tslib/media/flags/hl_se.gif";s:4:"1317";s:27:"tslib/media/flags/hl_sk.gif";s:4:"d727";s:27:"tslib/media/flags/hl_tr.gif";s:4:"a11a";s:27:"tslib/media/flags/hl_uk.gif";s:4:"5ebb";s:37:"tslib/media/frames/artist1_bottom.jpg";s:4:"cbdd";s:35:"tslib/media/frames/artist1_mask.jpg";s:4:"2085";s:37:"tslib/media/frames/artist2_bottom.jpg";s:4:"c80d";s:35:"tslib/media/frames/artist2_mask.jpg";s:4:"ebcf";s:37:"tslib/media/frames/artist3_bottom.jpg";s:4:"be47";s:35:"tslib/media/frames/artist3_mask.jpg";s:4:"731c";s:37:"tslib/media/frames/artist4_bottom.jpg";s:4:"d8ad";s:35:"tslib/media/frames/artist4_mask.jpg";s:4:"ddb7";s:37:"tslib/media/frames/artist5_bottom.jpg";s:4:"bc08";s:35:"tslib/media/frames/artist5_mask.jpg";s:4:"b422";s:37:"tslib/media/frames/artist6_bottom.jpg";s:4:"d25d";s:35:"tslib/media/frames/artist6_mask.jpg";s:4:"579d";s:37:"tslib/media/frames/artist7_bottom.jpg";s:4:"65e4";s:35:"tslib/media/frames/artist7_mask.jpg";s:4:"6b56";s:37:"tslib/media/frames/artist8_bottom.jpg";s:4:"4805";s:35:"tslib/media/frames/artist8_mask.jpg";s:4:"7f5e";s:39:"tslib/media/frames/darkroom1_bottom.jpg";s:4:"ed62";s:37:"tslib/media/frames/darkroom1_mask.jpg";s:4:"db35";s:39:"tslib/media/frames/darkroom2_bottom.jpg";s:4:"aace";s:37:"tslib/media/frames/darkroom2_mask.jpg";s:4:"faf0";s:39:"tslib/media/frames/darkroom3_bottom.jpg";s:4:"59ef";s:37:"tslib/media/frames/darkroom3_mask.jpg";s:4:"9727";s:39:"tslib/media/frames/darkroom4_bottom.jpg";s:4:"4b90";s:37:"tslib/media/frames/darkroom4_mask.jpg";s:4:"902e";s:39:"tslib/media/frames/darkroom5_bottom.jpg";s:4:"78d8";s:37:"tslib/media/frames/darkroom5_mask.jpg";s:4:"dcf8";s:39:"tslib/media/frames/darkroom6_bottom.jpg";s:4:"9f3d";s:37:"tslib/media/frames/darkroom6_mask.jpg";s:4:"b9a4";s:39:"tslib/media/frames/darkroom7_bottom.jpg";s:4:"df11";s:37:"tslib/media/frames/darkroom7_mask.jpg";s:4:"bc36";s:39:"tslib/media/frames/darkroom8_bottom.jpg";s:4:"26cd";s:37:"tslib/media/frames/darkroom8_mask.jpg";s:4:"015c";s:41:"tslib/media/icons_misc/content_client.gif";s:4:"dfbc";s:42:"tslib/media/icons_misc/content_default.gif";s:4:"6030";s:40:"tslib/media/icons_misc/content_fresh.gif";s:4:"cdee";s:43:"tslib/media/icons_misc/content_selected.gif";s:4:"f0d4";s:41:"tslib/media/icons_misc/notfound_thumb.gif";s:4:"ca98";s:41:"tslib/media/icons_misc/notfound_thumb.png";s:4:"c9d3";s:48:"tslib/media/logos/creditcard_control_numbers.gif";s:4:"5d8c";s:53:"tslib/media/logos/creditcard_control_numbers_mini.gif";s:4:"1b54";s:29:"tslib/media/logos/dankort.gif";s:4:"57a7";s:35:"tslib/media/logos/dankort_small.gif";s:4:"f533";s:28:"tslib/media/logos/diners.gif";s:4:"35e3";s:34:"tslib/media/logos/diners_small.gif";s:4:"465b";s:29:"tslib/media/logos/express.gif";s:4:"4306";s:28:"tslib/media/logos/letter.gif";s:4:"423b";s:32:"tslib/media/logos/mastercard.gif";s:4:"52bc";s:38:"tslib/media/logos/mastercard_small.gif";s:4:"a553";s:27:"tslib/media/logos/money.gif";s:4:"280a";s:28:"tslib/media/logos/nordea.gif";s:4:"c970";s:33:"tslib/media/logos/nordea_orig.gif";s:4:"6c6d";s:34:"tslib/media/logos/nordea_small.gif";s:4:"940a";s:32:"tslib/media/logos/pakketrans.gif";s:4:"ec86";s:33:"tslib/media/logos/postdanmark.gif";s:4:"217c";s:25:"tslib/media/logos/set.gif";s:4:"c2e1";s:27:"tslib/media/logos/soloe.gif";s:4:"55bc";s:33:"tslib/media/logos/soloe_small.gif";s:4:"0ef5";s:26:"tslib/media/logos/visa.gif";s:4:"5327";s:32:"tslib/media/logos/visa_small.gif";s:4:"7c69";s:29:"tslib/media/scripts/blank.gif";s:4:"c1f2";s:41:"tslib/media/scripts/defaultstylesheet.css";s:4:"c67e";s:27:"tslib/media/scripts/end.gif";s:4:"4021";s:44:"tslib/media/scripts/example_callfunction.php";s:4:"4ea7";s:49:"tslib/media/scripts/example_itemArrayProcFunc.php";s:4:"b9bb";s:43:"tslib/media/scripts/example_keepRollover.js";s:4:"846a";s:44:"tslib/media/scripts/example_keepRollover.php";s:4:"6beb";s:44:"tslib/media/scripts/example_languageMenu.php";s:4:"2b04";s:43:"tslib/media/scripts/example_typolinkpop.php";s:4:"d8c8";s:35:"tslib/media/scripts/fe_adminLib.inc";s:4:"58e2";s:48:"tslib/media/scripts/freesite_dummy_page_menu.php";s:4:"dcef";s:37:"tslib/media/scripts/gmenu_foldout.php";s:4:"dd3a";s:36:"tslib/media/scripts/gmenu_layers.php";s:4:"0a65";s:28:"tslib/media/scripts/join.gif";s:4:"59cb";s:34:"tslib/media/scripts/joinbottom.gif";s:4:"c7e9";s:37:"tslib/media/scripts/jsfunc.foldout.js";s:4:"0729";s:39:"tslib/media/scripts/jsfunc.layermenu.js";s:4:"d647";s:28:"tslib/media/scripts/line.gif";s:4:"e4bd";s:46:"tslib/media/scripts/makeMenu_datedirectory.inc";s:4:"4b7c";s:43:"tslib/media/scripts/pdaversion_content.tmpl";s:4:"343b";s:36:"tslib/media/scripts/plaintextLib.inc";s:4:"7774";s:42:"tslib/media/scripts/plaintext_content.tmpl";s:4:"2027";s:30:"tslib/media/scripts/postit.inc";s:4:"9535";s:45:"tslib/media/scripts/printversion_content.tmpl";s:4:"f21c";s:34:"tslib/media/scripts/testscript.inc";s:4:"2265";s:38:"tslib/media/scripts/testscript_EXT.php";s:4:"6056";s:38:"tslib/media/scripts/testscript_INT.php";s:4:"496d";s:30:"tslib/media/scripts/thread.gif";s:4:"34f4";s:36:"tslib/media/scripts/tmenu_layers.php";s:4:"73d7";s:37:"tslib/media/scripts/wapversionLib.inc";s:4:"caec";s:37:"tslib/media/scripts/xmenu_layers.diff";s:4:"b8e8";s:37:"tslib/media/scripts/xmlversionLib.inc";s:4:"45f0";s:29:"tslib/media/uploads/back1.png";s:4:"faff";s:29:"tslib/media/uploads/back2.png";s:4:"1020";s:29:"tslib/media/uploads/back3.png";s:4:"fef7";s:29:"tslib/media/uploads/back4.png";s:4:"bf59";s:29:"tslib/media/uploads/back5.png";s:4:"dd5c";s:31:"tslib/media/uploads/flag_de.gif";s:4:"42fa";s:33:"tslib/media/uploads/flag_de_d.gif";s:4:"2d2e";s:31:"tslib/media/uploads/flag_dk.gif";s:4:"fada";s:33:"tslib/media/uploads/flag_dk_d.gif";s:4:"1d54";s:31:"tslib/media/uploads/flag_uk.gif";s:4:"4b1e";s:33:"tslib/media/uploads/flag_uk_d.gif";s:4:"1987";s:35:"tslib/media/uploads/menuRO_mask.gif";s:4:"c78b";s:38:"tslib/media/uploads/menuback_image.jpg";s:4:"2a71";s:37:"tslib/media/uploads/menuback_mask.gif";s:4:"0f2c";s:37:"tslib/media/uploads/menuback_mask.jpg";s:4:"905f";s:32:"tslib/media/uploads/postit_1.gif";s:4:"a3e7";s:32:"tslib/media/uploads/postit_2.gif";s:4:"6563";s:32:"tslib/media/uploads/postit_3.gif";s:4:"7e28";s:32:"tslib/media/uploads/testlogo.png";s:4:"4cac";s:33:"tslib/media/uploads/testlogo2.png";s:4:"5fee";s:32:"tslib/media/uploads/topimage.jpg";s:4:"38ac";s:32:"tslib/media/uploads/topimage.png";s:4:"87ac";s:31:"tslib/media/uploads/toplogo.jpg";s:4:"55bd";s:31:"tslib/media/uploads/topmask.jpg";s:4:"6cab";s:33:"tslib/media/uploads/typo3logo.gif";s:4:"330e";s:35:"tslib/media/uploads/typo3power1.gif";s:4:"ee0c";s:35:"tslib/media/uploads/typo3power2.gif";s:4:"cd67";s:32:"tslib/media/uploads/typologo.gif";s:4:"f4be";s:42:"tslib/media/uploads/candidate/bar_left.gif";s:4:"b93c";s:43:"tslib/media/uploads/candidate/bar_right.gif";s:4:"e6a3";s:43:"tslib/media/uploads/candidate/dot_round.gif";s:4:"4716";s:38:"tslib/media/uploads/candidate/line.gif";s:4:"7f67";s:34:"tslib/media/uploads/crcph/home.gif";s:4:"ede1";s:34:"tslib/media/uploads/crcph/logo.gif";s:4:"557b";s:42:"tslib/media/uploads/crcph/logo_welcome.png";s:4:"7ea3";s:34:"tslib/media/uploads/crcph/main.htm";s:4:"bb09";s:33:"tslib/media/uploads/crcph/pil.gif";s:4:"9693";s:34:"tslib/media/uploads/crcph/pil2.gif";s:4:"ada2";s:36:"tslib/media/uploads/crcph/search.gif";s:4:"45d9";s:38:"tslib/media/uploads/crcph/toparrow.gif";s:4:"6bad";s:45:"tslib/media/uploads/green/background_page.png";s:4:"4842";s:39:"tslib/media/uploads/green/menu_back.png";s:4:"b009";s:40:"tslib/media/uploads/green/menu_first.png";s:4:"b217";s:39:"tslib/media/uploads/green/menu_last.png";s:4:"9d55";s:41:"tslib/media/uploads/green/menu_middle.png";s:4:"1370";s:43:"tslib/media/uploads/green/menu_sublevel.png";s:4:"7dfe";s:39:"tslib/media/uploads/green/pict_logo.png";s:4:"c6a1";s:38:"tslib/media/uploads/green/pict_top.jpg";s:4:"2a2a";s:39:"tslib/media/uploads/green/template.tmpl";s:4:"0bc4";s:45:"tslib/media/uploads/hyper/background_main.gif";s:4:"a35a";s:44:"tslib/media/uploads/hyper/background_top.gif";s:4:"c392";s:37:"tslib/media/uploads/hyper/sprache.css";s:4:"f601";s:35:"tslib/media/uploads/hyper/titel.gif";s:4:"70a5";s:38:"tslib/media/uploads/newsletter/600.gif";s:4:"a93c";s:39:"tslib/media/uploads/newsletter/blue.gif";s:4:"de20";s:41:"tslib/media/uploads/newsletter/signup.htm";s:4:"a8c9";s:40:"tslib/media/uploads/newsletter/style.css";s:4:"5b31";s:44:"tslib/media/uploads/newsletter/template.html";s:4:"0277";s:42:"tslib/media/uploads/newsletter/toplogo.gif";s:4:"23bd";s:42:"tslib/media/uploads/re/left_background.gif";s:4:"e9a2";s:39:"tslib/media/uploads/re/leftmenu_act.gif";s:4:"da9d";s:38:"tslib/media/uploads/re/leftmenu_no.gif";s:4:"6d15";s:38:"tslib/media/uploads/re/leftmenu_ro.gif";s:4:"3726";s:42:"tslib/media/uploads/re/menu_afterimage.gif";s:4:"5b05";s:35:"tslib/media/uploads/re/menuback.gif";s:4:"60d3";s:34:"tslib/media/uploads/re/my_logo.gif";s:4:"0baf";s:41:"tslib/media/uploads/re/top_background.gif";s:4:"4460";s:41:"tslib/media/uploads/re/top_leftofmenu.gif";s:4:"e2b6";s:40:"tslib/templates/tslib_page_frontend.html";s:4:"80e5";s:33:"web_info/class.tx_cms_webinfo.php";s:4:"b471";s:38:"web_info/class.tx_cms_webinfo_lang.php";s:4:"4823";s:22:"web_info/locallang.xlf";s:4:"0d3a";}',
	'constraints' => array(
		'depends' => array(
			'php' => '5.3.0-0.0.0',
			'typo3' => '4.6.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
);

?>