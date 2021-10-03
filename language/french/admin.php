<?php
// ------------------------------------------------------------------------ //
// xcGallery - XOOPS Gallery Modul //
// Copyright (c) 2003 Derya Kiran //
// meeresstille@gmx.de //
// http://www.myxoopsforge.org/modules/xfmod/project/?xcgal //
// ------------------------------------------------------------------------ //
// Based on Coppermine Photo Gallery 1.10 //
// (http://coppermine.sourceforge.net/) //
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
define("_AM_CONFIG", "xcGallery Configuration");
define("_AM_GENERALCONF", "Configuration g�n�rale");
define("_AM_CATMNGR", "Gestion des cat�gories");
define("_AM_USERMNGR", "Gestions des utilisateurs");
define("_AM_GROUPMNGR", "Gestion des groupes");
define("_AM_BATCHADD", "Installation manuelle d'image");
define("_AM_ECARDMNGR", "Gestion des ecards");
define("_AM_PICAPP", "Images en attente de validation");

define("_AM_PARAM_MISSING", "Script appel� sans parametre(s) requis.");

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
define("_AM_USERMGR_TITLE", " Gestion des utilisateurs de xcGallery");
define("_AM_USERMGR_USHOW", "Montrer tous les utilisateurs des albums/images");
define("_AM_USERMGR_USHOWDEL", "Montrer les albums de tous les utilisateurs supprim�s");
define("_AM_USERMGR_ULIST", "Liste d'utilisateurs");
define("_AM_USERMGR_USER", "Utilisateurs");
define("_AM_USERMGR_ALBUMS", "Albums");
define("_AM_USERMGR_PICS", "Images");
define("_AM_USERMGR_QUOTA", "quota utilis�");
define("_AM_USERMGR_ALB", "Album");
define("_AM_USERMGR_DELUID", "Del. id utilisateur");
define("_AM_USERMGR_OPT", "Operations");
define("_AM_USERMGR_NOTMOVE", "** Ne pas bouger **");
define("_AM_USERMGR_DEL", "Effacer");
define("_AM_USERMGR_PROPS", "Propri�t�s");
define("_AM_USERMGR_EDITP", "Editer images");

define("_AM_USERMGR_UONPAGE", "%d utilisateur sur %d page(s)");
define("_AM_USERMGR_NOUSER", "Aucun utilisateur trouv�!");

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
define("_AM_SRCHNEW_TITLE", "Rechercher nouvelles images");
define("_AM_SRCHNEW_SEL_DIR", "S�lectionner directement");
define("_AM_SRCHNEW_SEL_DIR_MSG", "Cette fonction vous permet d'ajouter une s�rie d'image que vous avez t�l�charg�e sur votre serveur par FTP.<br /><br />Choisissez le dossier o� vous avez t�l�charg� vos images");
define("_AM_SRCHNEW_NO_PIC_ADD", "Il n'y a aucune image � ajouter");
define("_AM_SRCHNEW_NEED_ONE_ALB", "Vous avez besoin d'au moins un album pour utiliser cette fonction");
define("_AM_SRCHNEW_WARNING", "Attention");
define("_AM_SRCHNEW_CHG_PERM", "le script ne peut pas �crire dans cet annuaire, vous devez changer son mode en 755 ou 777 avant d'essay� d'ajouter les images!");
define("_AM_SRCHNEW_TARGET_ALB", "Mettez les images  &quot;</b>%s<b>&quot; dans </b>%s");
define("_AM_SRCHNEW_FOLDER", "Dossier");
define("_AM_SRCHNEW_IMAGE", "Image");
define("_AM_SRCHNEW_ALB", "Album");
define("_AM_SRCHNEW_RESULT", "Resultat");
define("_AM_SRCHNEW_DIR_RO", "impossible � afficher. ");
define("_AM_SRCHNEW_CANT_READ", "Impossible de lire. ");
define("_AM_SRCHNEW_INSERT", "Ajouter de nouvelles images dans la galerie");
define("_AM_SRCHNEW_LIST_NEW", "Liste des nouvelles images");
define("_AM_SRCHNEW_INS_SEL", "Inserer les images s�lectionn�s");
define("_AM_SRCHNEW_NO_PIC", "Aucune nouvelle image n'a �t� trouv�e");
define("_AM_SRCHNEW_PATIENT", "Veuillez �tre patient, le script a besoin de temps pour ajouter les images");
define("_AM_SRCHNEW_NOTES", "<ul><li><b>OK</b> : signifie que l'image a �t�  ajout�e avec succ�s<li><b>DP</b> : signifie que l'image a �t� copi�e et se trouve dans la base de donn�es<li><b>PB</b> : signifie que l'image ne peut pas �tre ajout�e, v�rifiez votre configuration et la permission des dossiers o� les images sont localis�es<li>Si  OK, DP, PB 'signes' apparaissent clicquez sur les images bris�es pour voir les messages d'erreur produits par PHP<li>Si arr�t de votre navigateur ,cliquez sur le bouton Actualiser</ul>");

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

define("_AM_GRPMGR_KB", "KB");
define("_AM_GRPMGR_NAME", "Nom du groupe");
define("_AM_GRPMGR_QUOTA", "Espace disc allouer");
define("_AM_GRPMGR_RATE", "Peut �valuer des images");
define("_AM_GRPMGR_SENDCARD", "Peut envoy� des ecards");
define("_AM_GRPMGR_COM", "Peut poster des commentaires");
define("_AM_GRPMGR_UPLOAD", "peut uploader des images");
define("_AM_GRPMGR_PRIVATE", "Peut avoir une galerie personnelle");
define("_AM_GRPMGR_APPLY", "Appliquer modifications");
define("_AM_GRPMGR_MANAGE", "g�rer les groupes d'utilisateurs");
define("_AM_GRPMGR_PUB_APPR", "Pub. Upl. approuv� (1)");
define("_AM_GRPMGR_PRIV_APPR", "Priv. Upl. approuv� (2)");
define("_AM_GRPMGR_PUB_NOTE", "<b>(1)</b> Les t�l�chargements dans un album public ont besoin de l'approbation de l'admin");
define("_AM_GRPMGR_PRIV_NOTE", "<b>(2)</b> Uploads dans un album appartenant � un utilisateur est soumis a l'approbation de l'admin");
define("_AM_GRPMGR_NOTES", "Notes");
define("_AM_GRPMGR_SYN", "Synchroniser");
define("_AM_GRPMGR_SYN_NOTE", "Cliqu� sur 'Synchroniser' pour synchroniser xcGallery groupes avec Xoops groupes");
define("_AM_GRPMGR_EMPTY", "La table xcGallery Group est vide !<br /><br />Groupes par d�fault cr�es.");

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

define("_AM_CAT_MISS_PARAM", "Parameters requis pour l''op�ration '%s' non fournie!");
define("_AM_CAT_UNKOWN", "La cat�gorie choisie n'existe pas dans la base de donn�es ");
define("_AM_CAT_UGAL_CAT_RO", "La cat�gorie de galeries d'utilisateur ne peut pas �tre supprim�e !");
define("_AM_CAT_MNGCAT", "Gerer categories");
define("_AM_CAT_CONF_DEL", "Etes vous sur de vouloir effac� cette categorie");
define("_AM_CAT_CAT", "Cat�gorie");
define("_AM_CAT_OP", "Op�rations");
define("_AM_CAT_MOVE", "D�plac� dans");
define("_AM_CAT_UPCR", "Mettre a jour/Cr�e cat�gorie");
define("_AM_CAT_PARENT", "Cat�gorie principale");
define("_AM_CAT_TITLE", "Titre de la cat�gorie");
define("_AM_CAT_DESC", "Description de la cat�gorie");
define("_AM_CAT_NOCAT", "* Pas de Categorie *");

// ------------------------------------------------------------------------- //
// File ecardmgr.php
// ------------------------------------------------------------------------- //

define("_AM_CARDMGR_TITLE", "Gestion des ecards de xcGallery");
define("_AM_CARDMGR_TIME", "Date");
define("_AM_CARDMGR_SUNAME", "Nom de l'exp�diteur");
define("_AM_CARDMGR_SEMAIL", "Email exp�diteur");
define("_AM_CARDMGR_SIP", "Ip exp�diteur");
define("_AM_CARDMGR_PID", "ID de l'image");
define("_AM_CARDMGR_STATUS", "S�lectionn�");
define("_AM_CARDMGR_DEL_SELECTED", "Effacer l'ecard selectionn�e");
define("_AM_CARDMGR_DEL_ALL", "Effacer tous les Ecards");
define("_AM_CARDMGR_DEL_PICKED", "Effacer tous les ecards s�l�ectionn�es");
define("_AM_CARDMGR_DEL_UNPICKED", "Effacer tous les ecards des�lectionn�es");
define("_AM_CARDMGR_CONPAGE", "%d ecards sur %d page(s)");
