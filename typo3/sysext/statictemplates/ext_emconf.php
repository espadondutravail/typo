<?php

########################################################################
# Extension Manager/Repository config file for ext "statictemplates".
#
# Auto generated 10-10-2011 13:55
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Static Templates',
	'description' => 'Re-Enables and Re-adds table static_template',
	'category' => 'be',
	'author' => 'Steffen Ritter',
	'author_email' => 'info@steffen-ritter.net',
	'shy' => '',
	'dependencies' => 'cms',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:346:{s:28:"class.tx_statictemplates.php";s:4:"b6e3";s:12:"ext_icon.gif";s:4:"d68b";s:17:"ext_localconf.php";s:4:"18f6";s:14:"ext_tables.php";s:4:"3f17";s:14:"ext_tables.sql";s:4:"69e1";s:25:"ext_tables_static+adt.sql";s:4:"e8a9";s:17:"locallang_tca.xlf";s:4:"7c0c";s:7:"tca.php";s:4:"714b";s:21:"template_standard.gif";s:4:"d68b";s:27:"media/bullets/arrow_act.gif";s:4:"cecd";s:26:"media/bullets/arrow_no.gif";s:4:"5c89";s:28:"media/bullets/blackclear.gif";s:4:"fde7";s:26:"media/bullets/blackdot.gif";s:4:"d7b1";s:23:"media/bullets/blank.gif";s:4:"c1f2";s:27:"media/bullets/bullet1_h.gif";s:4:"d090";s:27:"media/bullets/bullet1_n.gif";s:4:"0a23";s:27:"media/bullets/bullet2_h.gif";s:4:"a8f4";s:27:"media/bullets/bullet2_n.gif";s:4:"c38f";s:27:"media/bullets/bullet3_h.gif";s:4:"a7d8";s:27:"media/bullets/bullet3_n.gif";s:4:"3b54";s:25:"media/bullets/bullet4.gif";s:4:"ce65";s:27:"media/bullets/bullet4_h.gif";s:4:"ab2b";s:27:"media/bullets/bullet4_n.gif";s:4:"541d";s:27:"media/bullets/bullet5_h.gif";s:4:"f462";s:27:"media/bullets/bullet5_n.gif";s:4:"5041";s:21:"media/bullets/dot.gif";s:4:"eec5";s:23:"media/bullets/dots1.gif";s:4:"fe62";s:23:"media/bullets/dots2.gif";s:4:"9c1e";s:21:"media/bullets/fwd.gif";s:4:"e126";s:28:"media/bullets/greenclear.gif";s:4:"8869";s:22:"media/bullets/mark.gif";s:4:"8d39";s:22:"media/bullets/pen1.gif";s:4:"19b4";s:22:"media/bullets/pen2.gif";s:4:"e78a";s:26:"media/bullets/punktmrk.gif";s:4:"64a9";s:26:"media/bullets/redclear.gif";s:4:"1fdd";s:21:"media/bullets/rew.gif";s:4:"e125";s:26:"media/bullets/stipler3.gif";s:4:"7893";s:22:"media/buttons/left.gif";s:4:"c085";s:25:"media/buttons/left_ro.gif";s:4:"364c";s:27:"media/buttons/maskpart1.tif";s:4:"de30";s:27:"media/buttons/maskpart2.tif";s:4:"efd4";s:27:"media/buttons/maskpart3.tif";s:4:"8b2d";s:28:"media/buttons/menubottom.gif";s:4:"7ac1";s:28:"media/buttons/menulevel1.gif";s:4:"ad21";s:28:"media/buttons/menulevel2.gif";s:4:"7c31";s:25:"media/buttons/menutop.gif";s:4:"f984";s:24:"media/buttons/middle.gif";s:4:"66b5";s:27:"media/buttons/middle_ro.gif";s:4:"5fd4";s:23:"media/buttons/right.gif";s:4:"edba";s:26:"media/buttons/right_ro.gif";s:4:"2322";s:25:"media/emoticons/angry.gif";s:4:"9c1e";s:24:"media/emoticons/grin.gif";s:4:"0f32";s:23:"media/emoticons/sad.gif";s:4:"5983";s:25:"media/emoticons/smile.gif";s:4:"9388";s:26:"media/emoticons/tongue.gif";s:4:"d2e5";s:30:"media/emoticons/tonguewink.gif";s:4:"44bf";s:29:"media/emoticons/veryhappy.gif";s:4:"6145";s:24:"media/emoticons/wink.gif";s:4:"cdfb";s:23:"media/fileicons/3ds.gif";s:4:"122b";s:27:"media/fileicons/CREDITS.txt";s:4:"d42e";s:22:"media/fileicons/ai.gif";s:4:"2cb7";s:23:"media/fileicons/ani.gif";s:4:"c4e3";s:22:"media/fileicons/au.gif";s:4:"0199";s:23:"media/fileicons/avi.gif";s:4:"27bd";s:23:"media/fileicons/bmp.gif";s:4:"a7a6";s:23:"media/fileicons/cdr.gif";s:4:"6fc9";s:23:"media/fileicons/css.gif";s:4:"4786";s:23:"media/fileicons/csv.gif";s:4:"6a23";s:27:"media/fileicons/default.gif";s:4:"313c";s:23:"media/fileicons/doc.gif";s:4:"8c62";s:23:"media/fileicons/dtd.gif";s:4:"48e2";s:23:"media/fileicons/eps.gif";s:4:"4262";s:23:"media/fileicons/exe.gif";s:4:"175c";s:23:"media/fileicons/fh3.gif";s:4:"b429";s:25:"media/fileicons/flash.gif";s:4:"0ab7";s:26:"media/fileicons/folder.gif";s:4:"f3ad";s:23:"media/fileicons/gif.gif";s:4:"1559";s:23:"media/fileicons/htm.gif";s:4:"54de";s:24:"media/fileicons/html.gif";s:4:"8c94";s:25:"media/fileicons/html1.gif";s:4:"c633";s:25:"media/fileicons/html2.gif";s:4:"ae09";s:25:"media/fileicons/html3.gif";s:4:"23ae";s:23:"media/fileicons/ico.gif";s:4:"250a";s:23:"media/fileicons/inc.gif";s:4:"ad9f";s:24:"media/fileicons/java.gif";s:4:"52de";s:23:"media/fileicons/jpg.gif";s:4:"e8df";s:22:"media/fileicons/js.gif";s:4:"7a5a";s:23:"media/fileicons/max.gif";s:4:"d6f4";s:23:"media/fileicons/mid.gif";s:4:"0d95";s:23:"media/fileicons/mov.gif";s:4:"d5e6";s:24:"media/fileicons/mpeg.gif";s:4:"ba4e";s:23:"media/fileicons/mpg.gif";s:4:"ba4e";s:23:"media/fileicons/pcd.gif";s:4:"e9f3";s:23:"media/fileicons/pcx.gif";s:4:"7d29";s:23:"media/fileicons/pdf.gif";s:4:"5c5f";s:24:"media/fileicons/php3.gif";s:4:"e58b";s:23:"media/fileicons/png.gif";s:4:"fffc";s:23:"media/fileicons/ppt.gif";s:4:"8740";s:22:"media/fileicons/ps.gif";s:4:"28c8";s:23:"media/fileicons/psd.gif";s:4:"4448";s:23:"media/fileicons/rtf.gif";s:4:"f660";s:24:"media/fileicons/sgml.gif";s:4:"13e6";s:23:"media/fileicons/swf.gif";s:4:"244f";s:23:"media/fileicons/sxc.gif";s:4:"a29e";s:23:"media/fileicons/sxw.gif";s:4:"2bc9";s:23:"media/fileicons/t3d.gif";s:4:"9a71";s:23:"media/fileicons/t3x.gif";s:4:"f357";s:23:"media/fileicons/tga.gif";s:4:"5e78";s:23:"media/fileicons/tif.gif";s:4:"533b";s:24:"media/fileicons/tmpl.gif";s:4:"5114";s:23:"media/fileicons/ttf.gif";s:4:"9f93";s:23:"media/fileicons/txt.gif";s:4:"d7f9";s:23:"media/fileicons/wav.gif";s:4:"6931";s:23:"media/fileicons/wrl.gif";s:4:"132d";s:23:"media/fileicons/xls.gif";s:4:"f106";s:23:"media/fileicons/xml.gif";s:4:"c32d";s:23:"media/fileicons/xsl.gif";s:4:"2a99";s:23:"media/fileicons/zip.gif";s:4:"3e53";s:21:"media/flags/cctld.txt";s:4:"88b3";s:23:"media/flags/credits.txt";s:4:"122f";s:23:"media/flags/flag_cz.gif";s:4:"42c2";s:25:"media/flags/flag_cz_d.gif";s:4:"ade9";s:25:"media/flags/flag_cz_f.gif";s:4:"d0a1";s:23:"media/flags/flag_de.gif";s:4:"42fa";s:25:"media/flags/flag_de_d.gif";s:4:"2d2e";s:25:"media/flags/flag_de_f.gif";s:4:"cd90";s:23:"media/flags/flag_dk.gif";s:4:"fada";s:25:"media/flags/flag_dk_d.gif";s:4:"1d54";s:25:"media/flags/flag_dk_f.gif";s:4:"d071";s:23:"media/flags/flag_es.gif";s:4:"9909";s:25:"media/flags/flag_es_d.gif";s:4:"b106";s:25:"media/flags/flag_es_f.gif";s:4:"e07d";s:23:"media/flags/flag_fi.gif";s:4:"d0be";s:25:"media/flags/flag_fi_d.gif";s:4:"91ca";s:25:"media/flags/flag_fi_f.gif";s:4:"1635";s:23:"media/flags/flag_fr.gif";s:4:"9019";s:25:"media/flags/flag_fr_d.gif";s:4:"33f2";s:25:"media/flags/flag_fr_f.gif";s:4:"751b";s:23:"media/flags/flag_it.gif";s:4:"ecb5";s:25:"media/flags/flag_it_d.gif";s:4:"4a3d";s:25:"media/flags/flag_it_f.gif";s:4:"bc13";s:23:"media/flags/flag_lt.gif";s:4:"6af9";s:25:"media/flags/flag_lt_d.gif";s:4:"01cd";s:25:"media/flags/flag_lt_f.gif";s:4:"cd19";s:23:"media/flags/flag_lv.gif";s:4:"c730";s:25:"media/flags/flag_lv_d.gif";s:4:"4313";s:25:"media/flags/flag_lv_f.gif";s:4:"0d00";s:23:"media/flags/flag_nl.gif";s:4:"b348";s:25:"media/flags/flag_nl_d.gif";s:4:"58ad";s:25:"media/flags/flag_nl_f.gif";s:4:"d67b";s:23:"media/flags/flag_pl.gif";s:4:"21b3";s:25:"media/flags/flag_pl_d.gif";s:4:"cb77";s:25:"media/flags/flag_pl_f.gif";s:4:"bdb0";s:23:"media/flags/flag_se.gif";s:4:"c4cf";s:25:"media/flags/flag_se_d.gif";s:4:"adf5";s:25:"media/flags/flag_se_f.gif";s:4:"52e1";s:23:"media/flags/flag_si.gif";s:4:"a522";s:25:"media/flags/flag_si_f.gif";s:4:"78bc";s:26:"media/flags/flag_si_si.gif";s:4:"cc00";s:23:"media/flags/flag_sk.gif";s:4:"7411";s:25:"media/flags/flag_sk_d.gif";s:4:"9b5e";s:25:"media/flags/flag_sk_f.gif";s:4:"e0fd";s:23:"media/flags/flag_uk.gif";s:4:"4b1e";s:25:"media/flags/flag_uk_d.gif";s:4:"1987";s:25:"media/flags/flag_uk_f.gif";s:4:"8427";s:21:"media/flags/hl_at.gif";s:4:"0517";s:21:"media/flags/hl_be.gif";s:4:"9df0";s:21:"media/flags/hl_ch.gif";s:4:"ca28";s:21:"media/flags/hl_cz.gif";s:4:"889b";s:21:"media/flags/hl_de.gif";s:4:"d4ae";s:21:"media/flags/hl_dk.gif";s:4:"c846";s:21:"media/flags/hl_es.gif";s:4:"59ff";s:21:"media/flags/hl_fi.gif";s:4:"e572";s:21:"media/flags/hl_fr.gif";s:4:"e27d";s:21:"media/flags/hl_gr.gif";s:4:"65a2";s:21:"media/flags/hl_hu.gif";s:4:"d8c8";s:21:"media/flags/hl_ie.gif";s:4:"7900";s:21:"media/flags/hl_is.gif";s:4:"9a92";s:21:"media/flags/hl_it.gif";s:4:"ece5";s:21:"media/flags/hl_lt.gif";s:4:"cd19";s:21:"media/flags/hl_no.gif";s:4:"fd3d";s:21:"media/flags/hl_pl.gif";s:4:"03e5";s:21:"media/flags/hl_pt.gif";s:4:"a3dc";s:21:"media/flags/hl_se.gif";s:4:"1317";s:21:"media/flags/hl_sk.gif";s:4:"d727";s:21:"media/flags/hl_tr.gif";s:4:"a11a";s:21:"media/flags/hl_uk.gif";s:4:"5ebb";s:31:"media/frames/artist1_bottom.jpg";s:4:"cbdd";s:29:"media/frames/artist1_mask.jpg";s:4:"2085";s:31:"media/frames/artist2_bottom.jpg";s:4:"c80d";s:29:"media/frames/artist2_mask.jpg";s:4:"ebcf";s:31:"media/frames/artist3_bottom.jpg";s:4:"be47";s:29:"media/frames/artist3_mask.jpg";s:4:"731c";s:31:"media/frames/artist4_bottom.jpg";s:4:"d8ad";s:29:"media/frames/artist4_mask.jpg";s:4:"ddb7";s:31:"media/frames/artist5_bottom.jpg";s:4:"bc08";s:29:"media/frames/artist5_mask.jpg";s:4:"b422";s:31:"media/frames/artist6_bottom.jpg";s:4:"d25d";s:29:"media/frames/artist6_mask.jpg";s:4:"579d";s:31:"media/frames/artist7_bottom.jpg";s:4:"65e4";s:29:"media/frames/artist7_mask.jpg";s:4:"6b56";s:31:"media/frames/artist8_bottom.jpg";s:4:"4805";s:29:"media/frames/artist8_mask.jpg";s:4:"7f5e";s:33:"media/frames/darkroom1_bottom.jpg";s:4:"ed62";s:31:"media/frames/darkroom1_mask.jpg";s:4:"db35";s:33:"media/frames/darkroom2_bottom.jpg";s:4:"aace";s:31:"media/frames/darkroom2_mask.jpg";s:4:"faf0";s:33:"media/frames/darkroom3_bottom.jpg";s:4:"59ef";s:31:"media/frames/darkroom3_mask.jpg";s:4:"9727";s:33:"media/frames/darkroom4_bottom.jpg";s:4:"4b90";s:31:"media/frames/darkroom4_mask.jpg";s:4:"902e";s:33:"media/frames/darkroom5_bottom.jpg";s:4:"78d8";s:31:"media/frames/darkroom5_mask.jpg";s:4:"dcf8";s:33:"media/frames/darkroom6_bottom.jpg";s:4:"9f3d";s:31:"media/frames/darkroom6_mask.jpg";s:4:"b9a4";s:33:"media/frames/darkroom7_bottom.jpg";s:4:"df11";s:31:"media/frames/darkroom7_mask.jpg";s:4:"bc36";s:33:"media/frames/darkroom8_bottom.jpg";s:4:"26cd";s:31:"media/frames/darkroom8_mask.jpg";s:4:"015c";s:35:"media/icons_misc/content_client.gif";s:4:"dfbc";s:36:"media/icons_misc/content_default.gif";s:4:"51ad";s:34:"media/icons_misc/content_fresh.gif";s:4:"cdee";s:37:"media/icons_misc/content_selected.gif";s:4:"f0d4";s:35:"media/icons_misc/notfound_thumb.gif";s:4:"ca98";s:35:"media/icons_misc/notfound_thumb.png";s:4:"c9d3";s:42:"media/logos/creditcard_control_numbers.gif";s:4:"5d8c";s:47:"media/logos/creditcard_control_numbers_mini.gif";s:4:"1b54";s:23:"media/logos/dankort.gif";s:4:"57a7";s:29:"media/logos/dankort_small.gif";s:4:"f533";s:22:"media/logos/diners.gif";s:4:"35e3";s:28:"media/logos/diners_small.gif";s:4:"465b";s:23:"media/logos/express.gif";s:4:"4306";s:22:"media/logos/letter.gif";s:4:"423b";s:26:"media/logos/mastercard.gif";s:4:"52bc";s:32:"media/logos/mastercard_small.gif";s:4:"a553";s:21:"media/logos/money.gif";s:4:"280a";s:22:"media/logos/nordea.gif";s:4:"c970";s:27:"media/logos/nordea_orig.gif";s:4:"6c6d";s:28:"media/logos/nordea_small.gif";s:4:"940a";s:26:"media/logos/pakketrans.gif";s:4:"ec86";s:27:"media/logos/postdanmark.gif";s:4:"217c";s:19:"media/logos/set.gif";s:4:"c2e1";s:21:"media/logos/soloe.gif";s:4:"55bc";s:27:"media/logos/soloe_small.gif";s:4:"0ef5";s:20:"media/logos/visa.gif";s:4:"5327";s:26:"media/logos/visa_small.gif";s:4:"7c69";s:23:"media/scripts/blank.gif";s:4:"c1f2";s:35:"media/scripts/defaultstylesheet.css";s:4:"c67e";s:21:"media/scripts/end.gif";s:4:"4021";s:38:"media/scripts/example_callfunction.php";s:4:"4ea7";s:43:"media/scripts/example_itemArrayProcFunc.php";s:4:"b9bb";s:37:"media/scripts/example_keepRollover.js";s:4:"846a";s:38:"media/scripts/example_keepRollover.php";s:4:"6beb";s:38:"media/scripts/example_languageMenu.php";s:4:"2b04";s:37:"media/scripts/example_typolinkpop.php";s:4:"d8c8";s:29:"media/scripts/fe_adminLib.inc";s:4:"e02a";s:42:"media/scripts/freesite_dummy_page_menu.php";s:4:"dcef";s:31:"media/scripts/gmenu_foldout.php";s:4:"f153";s:30:"media/scripts/gmenu_layers.php";s:4:"105b";s:22:"media/scripts/join.gif";s:4:"59cb";s:28:"media/scripts/joinbottom.gif";s:4:"c7e9";s:31:"media/scripts/jsfunc.foldout.js";s:4:"0729";s:33:"media/scripts/jsfunc.layermenu.js";s:4:"d647";s:22:"media/scripts/line.gif";s:4:"e4bd";s:40:"media/scripts/makeMenu_datedirectory.inc";s:4:"d6c8";s:37:"media/scripts/pdaversion_content.tmpl";s:4:"343b";s:30:"media/scripts/plaintextLib.inc";s:4:"848a";s:36:"media/scripts/plaintext_content.tmpl";s:4:"2027";s:24:"media/scripts/postit.inc";s:4:"9535";s:39:"media/scripts/printversion_content.tmpl";s:4:"f21c";s:28:"media/scripts/testscript.inc";s:4:"2265";s:32:"media/scripts/testscript_EXT.php";s:4:"6056";s:32:"media/scripts/testscript_INT.php";s:4:"496d";s:24:"media/scripts/thread.gif";s:4:"34f4";s:30:"media/scripts/tmenu_layers.php";s:4:"2e85";s:31:"media/scripts/wapversionLib.inc";s:4:"be42";s:31:"media/scripts/xmenu_layers.diff";s:4:"2388";s:31:"media/scripts/xmlversionLib.inc";s:4:"9ccf";s:23:"media/uploads/back1.png";s:4:"faff";s:23:"media/uploads/back2.png";s:4:"1020";s:23:"media/uploads/back3.png";s:4:"fef7";s:23:"media/uploads/back4.png";s:4:"bf59";s:23:"media/uploads/back5.png";s:4:"dd5c";s:25:"media/uploads/flag_de.gif";s:4:"42fa";s:27:"media/uploads/flag_de_d.gif";s:4:"2d2e";s:25:"media/uploads/flag_dk.gif";s:4:"fada";s:27:"media/uploads/flag_dk_d.gif";s:4:"1d54";s:25:"media/uploads/flag_uk.gif";s:4:"4b1e";s:27:"media/uploads/flag_uk_d.gif";s:4:"1987";s:29:"media/uploads/menuRO_mask.gif";s:4:"2772";s:32:"media/uploads/menuback_image.jpg";s:4:"2a71";s:31:"media/uploads/menuback_mask.gif";s:4:"0f2c";s:31:"media/uploads/menuback_mask.jpg";s:4:"905f";s:26:"media/uploads/postit_1.gif";s:4:"a3e7";s:26:"media/uploads/postit_2.gif";s:4:"6563";s:26:"media/uploads/postit_3.gif";s:4:"7e28";s:26:"media/uploads/testlogo.png";s:4:"4cac";s:27:"media/uploads/testlogo2.png";s:4:"5fee";s:26:"media/uploads/topimage.jpg";s:4:"38ac";s:26:"media/uploads/topimage.png";s:4:"87ac";s:25:"media/uploads/toplogo.jpg";s:4:"55bd";s:25:"media/uploads/topmask.jpg";s:4:"6cab";s:27:"media/uploads/typo3logo.gif";s:4:"330e";s:29:"media/uploads/typo3power1.gif";s:4:"ee0c";s:29:"media/uploads/typo3power2.gif";s:4:"cd67";s:26:"media/uploads/typologo.gif";s:4:"f4be";s:36:"media/uploads/candidate/bar_left.gif";s:4:"b93c";s:37:"media/uploads/candidate/bar_right.gif";s:4:"e6a3";s:37:"media/uploads/candidate/dot_round.gif";s:4:"4716";s:32:"media/uploads/candidate/line.gif";s:4:"7f67";s:28:"media/uploads/crcph/home.gif";s:4:"ede1";s:28:"media/uploads/crcph/logo.gif";s:4:"557b";s:36:"media/uploads/crcph/logo_welcome.png";s:4:"7ea3";s:28:"media/uploads/crcph/main.htm";s:4:"bb09";s:27:"media/uploads/crcph/pil.gif";s:4:"9693";s:28:"media/uploads/crcph/pil2.gif";s:4:"ada2";s:30:"media/uploads/crcph/search.gif";s:4:"45d9";s:32:"media/uploads/crcph/toparrow.gif";s:4:"6bad";s:39:"media/uploads/green/background_page.png";s:4:"4842";s:33:"media/uploads/green/menu_back.png";s:4:"b009";s:34:"media/uploads/green/menu_first.png";s:4:"b217";s:33:"media/uploads/green/menu_last.png";s:4:"9d55";s:35:"media/uploads/green/menu_middle.png";s:4:"1370";s:37:"media/uploads/green/menu_sublevel.png";s:4:"7dfe";s:33:"media/uploads/green/pict_logo.png";s:4:"c6a1";s:32:"media/uploads/green/pict_top.jpg";s:4:"2a2a";s:33:"media/uploads/green/template.tmpl";s:4:"0bc4";s:39:"media/uploads/hyper/background_main.gif";s:4:"a35a";s:38:"media/uploads/hyper/background_top.gif";s:4:"c392";s:31:"media/uploads/hyper/sprache.css";s:4:"f601";s:29:"media/uploads/hyper/titel.gif";s:4:"70a5";s:32:"media/uploads/newsletter/600.gif";s:4:"a93c";s:33:"media/uploads/newsletter/blue.gif";s:4:"de20";s:35:"media/uploads/newsletter/signup.htm";s:4:"a8c9";s:34:"media/uploads/newsletter/style.css";s:4:"5b31";s:38:"media/uploads/newsletter/template.html";s:4:"0277";s:36:"media/uploads/newsletter/toplogo.gif";s:4:"23bd";s:36:"media/uploads/re/left_background.gif";s:4:"e9a2";s:33:"media/uploads/re/leftmenu_act.gif";s:4:"da9d";s:32:"media/uploads/re/leftmenu_no.gif";s:4:"6d15";s:32:"media/uploads/re/leftmenu_ro.gif";s:4:"3726";s:36:"media/uploads/re/menu_afterimage.gif";s:4:"5b05";s:29:"media/uploads/re/menuback.gif";s:4:"60d3";s:28:"media/uploads/re/my_logo.gif";s:4:"0baf";s:35:"media/uploads/re/top_background.gif";s:4:"4460";s:35:"media/uploads/re/top_leftofmenu.gif";s:4:"e2b6";}',
	'suggests' => array(
	),
);

?>