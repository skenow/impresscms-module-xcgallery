<?php
//  ------------------------------------------------------------------------ //
//                    xcGallery - XOOPS Gallery Modul                        //
//                    Copyright (c) 2003 Derya Kiran                         //
//                           meeresstille@gmx.de                             //
//         http://www.myxoopsforge.org/modules/xfmod/project/?xcgal          //
//  ------------------------------------------------------------------------ //
//  Based on Coppermine Photo Gallery 1.10                                   //
//  (http://coppermine.sourceforge.net/)                                     //
//  developed by Gr�gory DEMAR                                               //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
// shortcuts for Byte, Kilo, Mega
define("_MD_BYTES","Bites");
define("_MD_KB","KB");
define("_MD_MB","MB");

define("_MD_NPICS","%s image(s)");
define("_MD_PICS","Images");
define("_MD_ALBUM","Album");
define("_MD_ERROR","RETOUR");
define("_MD_KEYS","Mots-cl�s");
define("_MD_CONTINUE","CONTINUE");

define("_MD_RANDOM","Images al�atoires");
define("_MD_LASTUP","Derniers uploads");
define("_MD_LASTCOM","Derniers commentaires");
define("_MD_TOPN","Les plus vus");
define("_MD_TOPRATED","Top �valuation");
define("_MD_LASTHITS","Les derni�res vus");
define("_MD_SEARCH","Recherche r�sultat");
define("_MD_USEARCH","Images soumises par ");
define("_MD_MOST_SENT","Les ecards les plus exp�di�e");

define("_MD_ACCESS_DENIED","Vous n'avez pas la permission d'acc�der sur cette page.");
define("_MD_PERM_DENIED","Vous n'avez pas la permission d'effectuer cette op�ration.");
define("_MD_PARAM_MISSING","Script a �t� appell� sans les parametres requis (%s).");
define("_MD_NON_EXIST_AP","L'album/l'image selectionn� n'existe pas  !");
define("_MD_QUOTA_EXCEEDED","Espace disc max atteint<br /><br />Vous avez un espace disc d'allouer de  [quota]K, vos images emploient actuellement [space]K, ajouter cette image vous inciterait � exc�der votre espace disc.");
define("_MD_GD_FILE_TYPE_ERR","En utilisant les types d'image permis par biblioth�que d'image de GD soit seulement JPEG et PNG.");
define("_MD_INVALID_IMG","L'image que vous avez t�l�charg�e est corrompue ou ne peut pas �tre manipul�e par la biblioth�que de GD");
define("_MD_RESIZE_FAILED","Impossible de cr�er une vignettes ou de reduire cette image.");
define("_MD_NO_IMG_TO_DISPLAY","Pas d'images � afficher");
define("_MD_NO_EXIST_CAT","La cat�gorie s�lectionn�e n'existe pas");
define("_MD_ORPHAN_CAT","Cat�gorie principale inexistante , allez � la gestions des cat�gorie et corrig� le probl�me.");
define("_MD_DIRECTORY_RO","Directory '%s' n'est pas ouvert en ecriture,  les images ne peut pas �tre supprim�e");
define("_MD_PIC_IN_INVALID_ALBUM","L'image est dans un album non existant (%s)!?");
define("_MD_GD_VERSION_ERR","PHP fonctionnant sur votre serveur ne soutient pas la version 2.x de GD, passez svp � la version 1.x de GD sur la page de config");
define("_MD_NO_GD_FOUND","PHP fonctionnant sur votre serveur ne soutient pas la biblioth�que d'image de GD, v�rifie avec votre hebergeur si ImageMagick ou Netpbm est install�");
define("_MD_IM_ERROR","Erreur d'excution d'ImageMagick - retour:");
define("_MD_IM_ERROR_CMD","Cmd ligne :");
define("_MD_IM_ERROR_CONV","Le convertisseur dit :");

// ------------------------------------------------------------------------- //
// File include/theme_func.php
// ------------------------------------------------------------------------- //
define("_MD_THM_ALB_LT","Aller sur la liste des albums");
define("_MD_THM_ALB_LL","Listes des albums");
define("_MD_THM_GAL_MYT","Aller sur ma galerie personnelle");
define("_MD_THM_GAL_MYL","Ma galerie");
define("_MD_THM_ADM_MT","Passer au mode d'admin");
define("_MD_THM_ADM_ML","Mode administrateur");
define("_MD_THM_USER_MT","Passer au mode d'utilisateur");
define("_MD_THM_USER_ML","Mode utilisateur");
define("_MD_THM_UPLT","Uploader une image dans un albums");
define("_MD_THM_UPLL","Charger une image");
define("_MD_THM_UPLLMORE","Charger plusieurs images");
define("_MD_THM_LAST_UPL","Derniers uploads");
define("_MD_THM_LAST_COM","Derniers commentaires");
define("_MD_THM_MOST_VIEW","Les plus vus");
define("_MD_THM_TOP_RATE","Top �valuation");
define("_MD_THM_SEARCH","Recherche");
define("_MD_THM_UPL_APPR","Upload approuv�");

define("_MD_THM_ALBMGR_LNK","Cr�er / organiser mon album");
define("_MD_THM_MODIFY_LNK","Modifier mon album");
define("_MD_THM_CAT","Cat�gorie");
define("_MD_THM_ALB","Albums");
define("_MD_THM_PIC","Images");
define("_MD_THM_ALBONPAGE","%d albums sur %d page(s)");
define("_MD_THM_DATE","DATE");
define("_MD_THM_NAME","NOM FICHIER");
define("_MD_THM_SORT_DA","trier par date montante");
define("_MD_THM_SORT_DD","trier par date descendante");
define("_MD_THM_SORT_NA","trier par nom montant");
define("_MD_THM_SORT_ND","trier par nom descendant");
define("_MD_THM_PICPAGE","%d images sur %d page(s)");
define("_MD_THM_USERPAGE","%d utilisateurs sur %d page(s)");

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

define("_MD_FUNC_FNAME","nom fichier : ");
define("_MD_FUNC_FSIZE","Taille fichier : ");
define("_MD_FUNC_DIM","Dimensions : ");
define("_MD_FUNC_DATE","Date ajout� : ");
define("_MD_FUNC_COM","%s commentaires");
define("_MD_FUNC_VIEW","%s vus");
define("_MD_FUNC_VOTE","%s votes");
define("_MD_FUNC_SEND","%s fois");
define("_MD_FUNC_DELUSER","Effacer utilisateur");
// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
define("_MD_ADMIN_LEAVE","Passage au mode utilisateur de la galerie...");
define("_MD_ADMIN_ENTER","Passage au mode administrateur de la galerie...");

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

define("_MD_ALBMGR_NEED_NAME","Les albums ont besoin de poss�der un nom!");
define("_MD_ALBMGR_CONF_MOD","�tes-vous s�r de vouloir faire ces modifications?");
define("_MD_ALBMGR_NO_CHANGE","Vous n avez fait aucun changement!");
define("_MD_ALBMGR_NEW_ALB","Nouvel album");
define("_MD_ALBMGR_CONF_DEL1","�tes vous s�r de vouloir effacer cet album?");
define("_MD_ALBMGR_CONF_DEL2","Tous les images et commentaires qu il contient seront perdus!");
define("_MD_ALBMGR_SELECT_FIRST","Selectionnez un album en premier");
define("_MD_ALBMGR_ALB_MGR","Gestion d'album");
define("_MD_ALBMGR_MY_GAL","* Ma galerie *");
define("_MD_ALBMGR_NO_CAT","* pas de cat�gorie *");
define("_MD_ALBMGR_DEL","Effacer");
define("_MD_ALBMGR_NEW","Nouveau");
define("_MD_ALBMGR_APPLY","Appliquer les modifications");
define("_MD_ALBMGR_SELECT","S�lectionner cat�gorie");

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

define("_MD_DB_ALB_NEED_TITLE","Vous devez fournir un titre pour l'album!");
define("_MD_DB_NO_NEED","Aucune mise � jour requise.");
define("_MD_DB_ALB_UPDATED","L'album a �t� mis � jour");
define("_MD_DB_UNKOWN","L'album choisi n'existe pas ou vous n'avez pas la permission de t�l�charger dans cet album");
define("_MD_DB_NO_PICUP","Aucune image n'a �t� t�l�charg�e!<br /><br />Si vous avez vraiment choisi une image pour t�l�charger, v�rifiez que le serveur permet des t�l�chargements de fichier...");
define("_MD_DB_ERR_MKDIR","Probl�mes pour cr�er %s !");
define("_MD_DB_DEST_DIR_RO","Le dossier de destination %s n'est pas affichable par le script!");
define("_MD_DB_ERR_FEXT","Seulement des dossiers avec les extensions suivantes sont accept�s : <br /><br />%s.");
define("_MD_DB_ERR_MOVE","Impossible de d�placer %s a %s!");
define("_MD_DB_ERR_PIC_SIZE","La taille de l'image que vous avez t�l�charg�e est trop grande (maximum autoris�  %s x %s");
define("_MD_DB_ERR_FSIZE","La taille du fichier que vous avez t�l�charg� est trop grande (maximum autoris� %s KB) !");
define("_MD_DB_ERR_IMG_INVALID","Le fichier que vous avez t�l�charg� n'est pas une image valide !");
define("_MD_DB_IMG_ALLOWED","Vous pouvez seulement t�l�charger %s images.");
define("_MD_DB_ERR_INSERT","L'image '%s' ne peut pas �tre ins�r� dans l'album ");
define("_MD_DB_UPLOAD_SUCC","Votre image a �t� upload� avec succ�s<br /><br />Elle sera visible apr�s l'approbation de l'administrateur.");
define("_MD_DB_UPL_SUCC","Votre image a �t� ajout�e avec succ�s ");
// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
define("_MD_DEL_CAPTION","L�gende");
define("_MD_DEL_FS_PIC","Image normale");
define("_MD_DEL_DEL_SUCCESS","supprim� avec succ�s");
define("_MD_DEL_NS_PIC","taille normale de l'image ");
define("_MD_DEL_ERR_DEL","ne peut pas �tre supprim�");
define("_MD_DEL_THUMB","vignettes");
define("_MD_DEL_COMMENT","commentaire");
define("_MD_DEL_IMGALB","image dans l'album");
define("_MD_DEL_ALB_DEL_SUC","Album '%s' effac�");
define("_MD_DEL_ALBMGR","Gestion album");
define("_MD_DEL_INVALID","Donn�e re�us invalide dans '%s'");
define("_MD_DEL_CREATE","Cr�e l'album '%s'");
define("_MD_DEL_UPDATE","Mise � jour de l'album '%s' avec titre '%s' et index '%s'");
define("_MD_DEL_DELPIC","Effac� image");
define("_MD_DEL_DELALB","Effac� album");

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
define("_MD_DIS_CONF_DEL","�tes-vous s�r vous voulez-vous SUPPRIMER cette image ? Les commentaires associ� seront �galement supprim�s.");
define("_MD_DIS_DEL_PIC","EFFACER CETTE IMAGE");
define("_MD_DIS_SIZE","%s x %s pixels");
define("_MD_DIS_VIEWS","%s fois");
define("_MD_DIS_SLIDE","Slide show");
define("_MD_DIS_STOP_SLIDE","Arr�ter slide show");
define("_MD_DIS_FULL","Clic pour VOIR l'image normale");
define("_MD_DIS_TITLE","Info sur l'image");
define("_MD_DIS_FNAME","Nom de fichier");
define("_MD_DIS_ANAME","Nom d'album");
define("_MD_DIS_RATING","Estimation (%s votes)");
define("_MD_DIS_FSIZE","Taille fichier");
define("_MD_DIS_DIMEMS","Dimensions");
define("_MD_DIS_DISPLAYED","Montr�");
define("_MD_DIS_CAMERA","Camera");
define("_MD_DIS_DATA_TAKEN","Date prise");
define("_MD_DIS_APERTURE","Ouverture");
define("_MD_DIS_EXPTIME","Temps d'exposition");
define("_MD_DIS_FLENGTH","Longueur focale");
define("_MD_DIS_COMMENT","Commentaire");
define("_MD_DIS_BACK_TNPAGE","Revenir � la page des vignettes");
define("_MD_DIS_SHOW_PIC_INFO","Afficher/Cacher d�tail des images ");
define("_MD_DIS_SEND_CARD","Envoyez cette image comme e-card");
define("_MD_DIS_CARD_DISABLE","les e-cards sont d�sactiv�es");
define("_MD_DIS_CARD_DISABLEMSG","Vous n'avez pas la permission d'envoyer des ecards");
define("_MD_DIS_NEXT","Voir l'image suivante");
define("_MD_DIS_PREV","Voir l'image pr�c�dente");
define("_MD_DIS_PICPOS","IMAGE %s/%s");
define("_MD_DIS_RATE_THIS","�valuez cette image ");
define("_MD_DIS_NO_VOTE","(Aucun vote encore)");
define("_MD_DIS_RATINGCUR","(estimation courante : %s / 5 sur %s votes)");
define("_MD_DIS_RUBBISH","D�chets");
define("_MD_DIS_POOR","Pauvre");
define("_MD_DIS_FAIR","Juste");
define("_MD_DIS_GOOD","Bon");
define("_MD_DIS_EXCELLENT","Excellent");
define("_MD_DIS_GREAT","Grand");
define("_MD_DIS_UPLOADER","Soumis par");
define("_MD_DIS_EXIF_ERR","PHP fonctionnant sur votre serveur ne soutient pas des donn�es de la lecture EXIF donn�e dans les fichier, S'il vous palit ,retourn� dans la page de configuration generale .");
define("_MD_DIS_VIEW_MORE_BY","regarder plus d'images soumises par");
define("_MD_DIS_SUBIP","Ip du posteur");
define("_MD_DIS_SENT","Envoyer comme ecard");
// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

define("_MD_CARD_TITLE","Envoyez une e-carte");
define("_MD_CARD_INVALIDE_EMAIL","<b>Attention</b> : Adresse mail invalide!");
define("_MD_CARD_ECARD_TITLE","une e-card de %s pour vous");
define("_MD_CARD_VIEW_ECARD","Si l'e-carte ne s'affiche pas correctement, cliquez sur ce lien");
define("_MD_CARD_VIEW_MORE_PICS","Cliquez sur ce lien pour regarder plus d'images!");
define("_MD_CARD_SEND_SUCCESS","Votre ecard a �t� envoy�");
define("_MD_CARD_SEND_FAILED","D�sol� mais le serveur ne peut pas envoyer votre e-carte...");
define("_MD_CARD_FROM","De");
define("_MD_CARD_YOUR_NAME","Votre nom");
define("_MD_CARD_YOUR_EMAIL","Votre adresse mail valide");
define("_MD_CARD_TO","A");
define("_MD_CARD_RCPT_NAME","Nom du destinataire ");
define("_MD_CARD_RCPT_EMAIL","Adresse mail du destinataire");
define("_MD_CARD_GREETINGS","Sujet");
define("_MD_CARD_MESSAGE","Message");
define("_MD_CARD_PERHOUR","On vous permet seulement d'envoyer � %s ecard(s) par heure. Svp, reessayez plus tard.");
define("_MD_CARD_NOTINDB","Impossible d'inser� les donn�e de l'ecard dans la base<br />contact� l'administrateur.");


// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

define("_MD_EDITPICS_PIC_INFO","Images&nbsp;info");
define("_MD_EDITPICS_TITLE","Titre");
define("_MD_EDITPICS_DESC","Description");
define("_MD_EDITPICS_INFOSTR","%sx%s - %sKB - %s vus - %s votes");
define("_MD_EDITPICS_APPROVE","Image approuv�e");
define("_MD_EDITPICS_PP_APPROVE","Remettre l'approbation � plus tard");
define("_MD_EDITPICS_DEL_PIC","Effacer image");
define("_MD_EDITPICS_RVIEW","Remettre � z�ro le compteur de vue");
define("_MD_EDITPICS_RVOTES","Remettre � z�ro les votes");
define("_MD_EDITPICS_DCOM","Effacer commentaires");
define("_MD_EDITPICS_UPL_APPROVAL","Upload approuv�");
define("_MD_EDITPICS_EDIT","Editer images");
define("_MD_EDITPICS_NEXT","Voir les images suivantes");
define("_MD_EDITPICS_PREV","Voir les images pr�c�dentes");
define("_MD_EDITPICS_NUMDIS","Nombre d'images � afficher");
define("_MD_EDITPICS_APPLY","Appliquer les modifications");

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

define("_MD_INDEX_CONF_DEL","�tes-vous s�r vous voulez-vous SUPPRIMER cet album ? Tous les images et commentaires seront �galement supprim�s.");
define("_MD_INDEX_DEL","EFFACE");
define("_MD_INDEX_MOD","PROPRI�T�S");
define("_MD_INDEX_EDIT","�DITER LES IMAGES");
define("_MD_INDEX_STAT1","<b>[pictures]</b> images dans <b>[albums]</b> albums et <b>[cat]</b> categories avec <b>[comments]</b> commentaires vus <b>[views]</b> fois");
define("_MD_INDEX_STAT2","<b>[pictures]</b> images dans <b>[albums]</b> albums vus <b>[views]</b> fois");
define("_MD_INDEX_USERS_GAL","%s's Galerie");
define("_MD_INDEX_STAT3","<b>[pictures]</b> images dans <b>[albums]</b> albums avec <b>[comments]</b> commentaires vus <b>[views]</b> fois");
define("_MD_INDEX_ULIST","Liste des utilisateurs");
define("_MD_INDEX_NO_UGAL","Il n'y a aucune galerie d'utilisateur");
define("_MD_INDEX_NALBS","%s album(s)");
define("_MD_INDEX_NPICS","%s image(s)");
define("_MD_INDEX_LASTADD",", dernier ajout le %s");

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
define("_MD_MODIFYALB_UPD_ALB_N","Mettre � jour l'album %s");
define("_MD_MODIFYALB_GEN_SET","Configuration g�n�rale");
define("_MD_MODIFYALB_ALB_TITLE","Titre album");
define("_MD_MODIFYALB_ALB_CAT","Cat�gorie album");
define("_MD_MODIFYALB_ALB_DESC","description album");
define("_MD_MODIFYALB_ALB_THUMB","Album de vignettes");
define("_MD_MODIFYALB_ALB_PERM","Permissions pour cet album");
define("_MD_MODIFYALB_CAN_VIEW","L'album peut �tre regard� par");
define("_MD_MODIFYALB_CAN_UPLOAD","Les visiteurs peuvent uploader des images");
define("_MD_MODIFYALB_CAN_COM","Les visiteurs peuvent poster des commentaires");
define("_MD_MODIFYALB_CAN_RATE","Les visiteurs peuvent �valuer des images");
define("_MD_MODIFYALB_USER_GAL","Galerie d'utilisateur");
define("_MD_MODIFYALB_NO_CAT","* Aucune cat�gorie *");
define("_MD_MODIFYALB_ALB_EMPTY","L'album est vide");
define("_MD_MODIFYALB_LAST_UPL","Dernier upload");
define("_MD_MODIFYALB_PUB_ALB","Tout le monde (album public)");
define("_MD_MODIFYALB_ME_ONLY","Moi seulement");
define("_MD_MODIFYALB_OWNER_ONLY"," le propri�taire (%s) seulement");
define("_MD_MODIFYALB_GROUP_ONLY","Les membres  '%s' groupe");
define("_MD_MODIFYALB_ERR_NO_ALB","Aucun album que vous ne pouvez modifier dans la base de donn�es .");
define("_MD_MODIFYALB_UPDATE","Album  mise � jour");

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
define("_MD_RATE_ALREADY","D�sol� mais vous avez d�j� �valu� cette image");
define("_MD_RATE_OK","Votre vote a �t� accept�");

// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //
define("_MD_SEARCH_TITLE","Rechercher la collection d'images");

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //
define("_MD_UPL_TITLE","Chargement image");
define("_MD_UPL_MAX_FSIZE","Le volume de fichier permis maximum est de  %s KB");
define("_MD_UPL_ALBUM","Album");
define("_MD_UPL_PICTURE","Image");
define("_MD_UPL_PIC_TITLE","Titre de l'image");
define("_MD_UPL_DESCRIPTION","Description de l'image");
define("_MD_UPL_KEYWORDS","Mots cl�s (s�par�s par des espaces)");
define("_MD_UPL_ERR_NO_ALB_UPLOAD","D�sol� il n'y a aucun album o� on vous permet de t�l�charger des images ");
define("_MD_UPL_YOURALB","Vos albums priv�s");
define("_MD_UPL_ALBPUB","Albums Publics");
define("_MD_UPL_OUSERALB","D'Autres Albums D'Utilisateur");



?>