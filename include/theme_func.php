<?php
// ------------------------------------------------------------------------ //
// xcGal 2.0 - XOOPS Gallery Modul //
// ------------------------------------------------------------------------ //
// Based on xcGallery 1.1 RC1 - XOOPS Gallery Modul //
// Copyright (c) 2003 Derya Kiran //
// ------------------------------------------------------------------------ //
// Based on Coppermine Photo Gallery 1.10 http://coppermine.sourceforge.net///
// developed by Gr�gory DEMAR //
// ------------------------------------------------------------------------ //
// This program is free software; you can redistribute it and/or modify //
// it under the terms of the GNU General Public License as published by //
// the Free Software Foundation; either version 2 of the License, or //
// (at your option) any later version. //
// //
// You may not change or alter any portion of this comment or credits //
// of supporting developers from this source code or any supporting //
// source code which is considered copyrighted (c) material of the //
// original comment or credit authors. //
// //
// This program is distributed in the hope that it will be useful, //
// but WITHOUT ANY WARRANTY; without even the implied warranty of //
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the //
// GNU General Public License for more details. //
// //
// You should have received a copy of the GNU General Public License //
// along with this program; if not, write to the Free Software //
// Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA //
// ------------------------------------------------------------------------ //
$template_tab_display = array('left_text' => '<td align="left" valign="middle" class="foot" style="white-space: nowrap"><b>{LEFT_TEXT}</b></td>' . "\n",
	'tab_header' => '',
	'tab_trailer' => '',
	'active_tab' => '<td><img src="images/spacer.gif" width="1" height="1" alt=""/></td>' . "\n" . '<td align="center" valign="middle" class="odd"><b>%d</b></td>',
	'inactive_tab' => '<td><img src="images/spacer.gif" width="1" height="1" alt="" /></td>' . "\n" . '<td align="center" valign="middle" class="foot"><a href="{LINK}"><b>%d</b></a></td>' . "\n");

function main_menu() {
	global $album, $actual_cat, $cat, $REFERER, $_SERVER;
	global $icmsTpl;

	static $main_menu = '';

	if ($main_menu != '') return $main_menu;

	$album_l = isset($album) ? "?album=$album" : '';
	$cat_l = (isset($actual_cat)) ? "?cat=$actual_cat" : (isset($cat) ? "?cat=$cat" : '');
	$cat_l2 = isset($cat) ? "&amp;cat=$cat" : '';
	$my_gallery_id = FIRST_USER_CAT + USER_ID;
	if (GALLERY_ADMIN_MODE || USER_ADMIN_MODE) {
		$icmsTpl->assign('admin_mode', 1);
		$icmsTpl->assign('albmgr_lnk', _MD_THM_ALBMGR_LNK);
		$icmsTpl->assign('modifyalb_lnk', _MD_THM_MODIFY_LNK);
	} else
		$icmsTpl->assign('admin_mode', 0);
	if (USER_CAN_CREATE_ALBUMS) { // USER_IS_ADMIN
		$icmsTpl->assign('user_gallery', 1);
	} else
		$icmsTpl->assign('user_gallery', 0);

	if (USER_CAN_UPLOAD_PICTURES) {

		$icmsTpl->assign('can_upload', 1);
	}
	$icmsTpl->assign('alb_list_tgt', $cat_l);
	$icmsTpl->assign('alb_list_title', _MD_THM_ALB_LT);
	$icmsTpl->assign('alb_list_lnk', _MD_THM_ALB_LL);
	$icmsTpl->assign('my_gallery_id', $my_gallery_id);
	$icmsTpl->assign('my_gal_title', _MD_THM_GAL_MYT);
	$icmsTpl->assign('my_gal_lnk', _MD_THM_GAL_MYL);
	$icmsTpl->assign('referer', $REFERER);
	$icmsTpl->assign('adm_mode_title', _MD_THM_ADM_MT);
	$icmsTpl->assign('adm_mode_lnk', _MD_THM_ADM_ML);
	$icmsTpl->assign('usr_mode_title', _MD_THM_USER_MT);
	$icmsTpl->assign('usr_mode_lnk', _MD_THM_USER_ML);
	$icmsTpl->assign('upload_pic_title', _MD_THM_UPLT);
	$icmsTpl->assign('upload_pic_lnk', _MD_THM_UPLL);
	$icmsTpl->assign('uploadmore_pic_lnk', _MD_THM_UPLLMORE);
	# $icmsTpl->assign('uploadbatch',_MI_XCGAL_ADMENU6);
	$icmsTpl->assign('cat_l2', $cat_l2);
	$icmsTpl->assign('lastup_lnk', _MD_THM_LAST_UPL);
	$icmsTpl->assign('lastcom_lnk', _MD_THM_LAST_COM);
	$icmsTpl->assign('topn_lnk', _MD_THM_MOST_VIEW);
	$icmsTpl->assign('toprated_lnk', _MD_THM_TOP_RATE);
	$icmsTpl->assign('search_lnk', _MD_THM_SEARCH);
}

function do_footer() {
	global $USER, $ALBUM_SET, $time_start, $query_stats;
	global $icmsTpl;

	if (icms::$module->config['debug_mode']) {
		$icmsTpl->assign('debug_mode', 1);
		$time_end = getmicrotime();
		$time = round($time_end - $time_start, 3);

		$query_count = count($query_stats);
		$query_times = '';
		$total_query_time = 0;
		foreach ($query_stats as $qtime) {
			$query_times .= round($qtime, 3) . "s ";
			$total_query_time += $qtime;
		}
		$total_query_time = round($total_query_time, 3);
		$icmsTpl->assign('lang_debug', 'Debug Info');
		ob_start();
		print_r($USER);
		$icmsTpl->assign('user', ob_get_contents());
		ob_end_clean();
		ob_start();
		print_r($_GET);
		$icmsTpl->assign('get', ob_get_contents());
		ob_end_clean();
		ob_start();
		print_r($_POST);
		$icmsTpl->assign('post', ob_get_contents());
		ob_end_clean();
		$generated = <<<EOT
		                Page generated in <b>$time</b> seconds - <b>$query_count</b> queries in <b>$total_query_time</b> seconds - Album set : $ALBUM_SET
EOT;
		$icmsTpl->assign('generated', $generated);
	}
}

function theme_display_cat_list($breadcrumb, &$cat_data, $statistics) {
	global $icmsTpl;

	if (!isset($breadcrumb) || $breadcrumb == '') $breadcrumb = '<a href="index.php">' . icms::$module->getVar('name') . '</a>';
	$icmsTpl->assign('breadcrumb', $breadcrumb);

	if (count($cat_data) == 0 && $statistics) {
		$icmsTpl->assign('set_stat', 1);
	} else
		$icmsTpl->assign('set_stat', 0);

	if (count($cat_data) > 0) {
		$icmsTpl->assign('lang_category', _MD_THM_CAT);
		$icmsTpl->assign('lang_albums', _MD_THM_ALB);
		$icmsTpl->assign('lang_pictures', _MD_THM_PIC);
	} else
		$icmsTpl->assign('lang_category', '');

	foreach ($cat_data as $category) {
		if (count($category) == 2) {
			$category[] = '';
			$category[] = '';
		}
		$icmsTpl->append('cat_datas', array('title' => $category[0], 'desc' => $category[1], 'alb_count' => $category[2], 'pic_count' => $category[3]));
	}

	$icmsTpl->assign('statistics', $statistics);
}

function theme_display_album_list(&$alb_list, $nbAlb, $cat, $page, $total_pages) {
	global $icmsTpl, $STATS_IN_ALB_LIST, $statistics, $template_tab_display;
	$icmsTpl->assign('display_alb_list', 1);
	$theme_alb_list_tab_tmpl = $template_tab_display;

	$theme_alb_list_tab_tmpl['left_text'] = strtr($theme_alb_list_tab_tmpl['left_text'], array('{LEFT_TEXT}' => _MD_THM_ALBONPAGE));
	$theme_alb_list_tab_tmpl['inactive_tab'] = strtr($theme_alb_list_tab_tmpl['inactive_tab'], array('{LINK}' => 'index.php?cat=' . $cat . '&amp;page=%d'));

	$tabs = create_tabs($nbAlb, $page, $total_pages, $theme_alb_list_tab_tmpl);
	$count = 0;

	$columns = icms::$module->config['album_list_cols'];
	$column_width = ceil(100 / $columns);
	$thumb_cell_width = icms::$module->config['alb_list_thumb_size'] + 2;
	$icmsTpl->assign('columns_width', $column_width);
	$icmsTpl->assign('thumb_cell_width', $thumb_cell_width);

	if ($STATS_IN_ALB_LIST) {
		$icmsTpl->assign('alb_stats', $statistics);
	} else
		$icmsTpl->assign('alb_stats', '');
	foreach ($alb_list as $album) {
		$count++ ;
		if ($count % $columns == 0 && $count < count($alb_list)) {
			$row_sep = 1;
		} else
			$row_sep = 0;
		if (is_array($album['album_adm_menu']))
			$alb_admin = 1;
		else
			$alb_admin = 0;

		$icmsTpl->append('albs', array('title' => $album['album_title'], 'aid' => $album['aid'], 'link_pic' => $album['thumb_pic'], 'alb_admin' => $alb_admin, 'amenu' => $album['album_adm_menu'], 'desc' => $album['album_desc'], 'info' => $album['album_info'], 'row_sep' => $row_sep));
	}
	while ($count++ % $columns != 0) {
		$icmsTpl->append('empties', array('empty_cell', 1));
	}
	$icmsTpl->assign('alb_columns', $columns);
	$icmsTpl->assign('tabs', $tabs);
}

function theme_display_thumbnails(&$thumb_list, $nbThumb, $album_name, $aid, $cat, $page, $total_pages, $sort_options, $display_tabs, $mode = 'thumb') {
	global $icmsTpl;
	global $template_tab_display;
	$cat_link = is_numeric($aid) ? '' : '&amp;cat=' . $cat;

	$theme_thumb_tab_tmpl = $template_tab_display;

	if ($mode == 'thumb') {
		$theme_thumb_tab_tmpl['left_text'] = strtr($theme_thumb_tab_tmpl['left_text'], array('{LEFT_TEXT}' => _MD_THM_PICPAGE));
		$theme_thumb_tab_tmpl['inactive_tab'] = strtr($theme_thumb_tab_tmpl['inactive_tab'], array('{LINK}' => 'thumbnails.php?album=' . $aid . $cat_link . '&amp;page=%d'));
	} else {
		$theme_thumb_tab_tmpl['left_text'] = strtr($theme_thumb_tab_tmpl['left_text'], array('{LEFT_TEXT}' => _MD_THM_USERPAGE));
		$theme_thumb_tab_tmpl['inactive_tab'] = strtr($theme_thumb_tab_tmpl['inactive_tab'], array('{LINK}' => 'index.php?cat=' . $cat . '&amp;page=%d'));
	}

	$thumbcols = icms::$module->config['thumbcols'];
	$cell_width = ceil(100 / icms::$module->config['thumbcols']) . '%';

	$tabs_html = $display_tabs ? create_tabs($nbThumb, $page, $total_pages, $theme_thumb_tab_tmpl) : '';
	$i = 0;
	foreach ($thumb_list as $thumb) {
		$i++ ;
		$pic = array();
		$pic['thumb'] = $thumb['image'];
		if (is_array($thumb['caption'])) {
			$pic['user'] = 1;
			$pic['u_name'] = $thumb['caption']['u_name'];
			$pic['u_id'] = $thumb['caption']['u_id'];
			$pic['albums'] = $thumb['caption']['albums'];
			$pic['pictures'] = "";
		} else {
			$pic['caption'] = $thumb['caption'];
			$pic['user'] = 0;
		}
		if ($mode == 'thumb') {
			$pic['link_tgt'] = "displayimage.php?pid={$thumb['pid']}&amp;album=$aid$cat_link&amp;pos={$thumb['pos']}";
			$pic['admin_menu'] = $thumb['admin_menu'];
			$pic['pic_url'] = $thumb['pic_url'];
			$pic['pic_title'] = $thumb['pic_title'];
			$pic['album_title'] = $thumb['album_title'];
		} else {
			$pic['link_tgt'] = "index.php?cat={$thumb['cat']}";
			$pic['admin_menu'] = "";
		}
		if ((($i % $thumbcols) == 0) && ($i < count($thumb_list))) {
			$pic['row_sep'] = 1;
		} else
			$pic['row_sep'] = 0;
		$pics[] = $pic;
	}
	$empties = array();
	for (; ($i % $thumbcols); $i++ ) {
		$empties[] = 1;
	}

	$icmsTpl->append('thumbs', array('mode' => $mode,
		'sort_options' => $sort_options,
		'album_name' => $album_name,
		'aid' => $aid,
		'page' => $page,
		'name' => _MD_THM_NAME,
		'date' => _MD_THM_DATE,
		'sort_na' => _MD_THM_SORT_NA,
		'sort_nd' => _MD_THM_SORT_ND,
		'sort_da' => _MD_THM_SORT_DA,
		'sort_dd' => _MD_THM_SORT_DD,
		'colspan' => $thumbcols,
		'tabs' => $tabs_html,
		'cell_width' => $cell_width,
		'pics' => $pics,
		'empties' => $empties));
}
