<?php
// $Id$ edit: cm 07082005
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
include "../../mainfile.php";
define('IN_XCGALLERY', true);
$xcgalDir = basename(dirname(__FILE__));
require ('include/init.inc.php');
$myts = icms_core_Textsanitizer::getInstance();

if (!isset($_GET['data'])) redirect_header('index.php', 2, _MD_PARAM_MISSING);
$data = $_GET['data'];
$delete_time = time() - (icms::$module->config['ecards_saved_db'] * 86400);
icms::$xoopsDB->queryf("DELETE from " . icms::$xoopsDB->prefix("xcgal_ecard") . " WHERE s_time < " . $delete_time);

$result = icms::$xoopsDB->query("SELECT * FROM " . icms::$xoopsDB->prefix("xcgal_ecard") . " as e, " . icms::$xoopsDB->prefix("xcgal_pictures") . " as p WHERE e.e_id ='" . $data . "' AND e.pid=p.pid");

if (!icms::$xoopsDB->getRowsNum($result))
	redirect_header('index.php', 2, "Sorry, can't find e-card!");
else
	$row = icms::$xoopsDB->fetchArray($result);
if (icms::$module->config['make_intermediate'] && max($row['pwidth'], $row['pheight']) > icms::$module->config['picture_width']) {
	$n_picname = get_pic_url($row, 'normal');
} else {
	$n_picname = get_pic_url($row, 'fullsize');
}

$msg_content = $myts->displayTarea($row['message'], 0);
if (!stristr($n_picname, 'http:')) $n_picname = ICMS_URL . "/modules/" . $xcgalDir . "/" . $n_picname;
require_once ICMS_ROOT_PATH . '/class/template.php';
$xoopsTpl = new XoopsTpl();
$xoopsTpl->assign('sitename', $xoopsConfig['sitename']);
$xoopsTpl->assign('ecard_title', sprintf(_MD_CARD_ECARD_TITLE, icms_core_DataFilter::htmlSpecialchars($row['sender_name'])));
$xoopsTpl->assign('charset', _CHARSET);
$xoopsTpl->assign('view_ecard_tgt', 0);
$xoopsTpl->assign('view_ecard_lnk', _MD_CARD_VIEW_ECARD);
$xoopsTpl->assign('pic_url', $n_picname);
// $xoopsTpl->assign('url_prefix',$gallery_url_prefix);
$xoopsTpl->assign('greetings', $row['greetings']);
$xoopsTpl->assign('message', $msg_content);
$xoopsTpl->assign('sender_email', icms_core_DataFilter::htmlSpecialchars($row['sender_email']));
$xoopsTpl->assign('sender_name', icms_core_DataFilter::htmlSpecialchars($row['sender_name']));
$xoopsTpl->assign('view_more_tgt', icms::$module->config['ecards_more_pic_target']);
$xoopsTpl->assign('view_more_lnk', _MD_CARD_VIEW_MORE_PICS);
$xoopsTpl->assign('icms_module_header', $xcgal_module_header);
$xoopsTpl->display('db:xcgal_discard.html');
icms::$xoopsDB->queryf("UPDATE " . icms::$xoopsDB->prefix("xcgal_ecard") . " SET picked=1 WHERE e_id='" . $data . "'");

exit();
