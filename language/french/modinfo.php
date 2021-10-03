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
define("_MI_XCGAL_NAME", "Les photos du MACR");
define("_MI_XCGAL_ADMENU1", "Configuration vus � plat");
define("_MI_XCGAL_ADMENU2", "Config Cate�gories");
define("_MI_XCGAL_ADMENU3", "Config Utilisateurs");
define("_MI_XCGAL_ADMENU4", "Config Groupes");
define("_MI_XCGAL_ADMENU5", "Config Ecards");
define("_MI_XCGAL_ADMENU6", "Ajout d'images manuellement");

define("_MI_XCGAL_SCROLL", "Scrolling vignettes");
define("_MI_XCGAL_CATMENU", "Categories");
define("_MI_XCGAL_STATIC", "Vignettes statique");
define("_MI_XCGAL_METAALB", "M�ta Albums");

define("_MI_ANONSEE", "Les utilisateurs anonymes peuvent voir les images?");
define("_MI_SUBCAT_LEVEL", "Vus liste album: Nombre de niveau de categories � affich�");
define("_MI_ALB_PER_PAGE", "Vus liste album: Nombre d'album � affich�");
define("_MI_ALB_LIST_COLS", "Vus liste album: Nombre de colonnes pour la liste des albums");
define("_MI_ALB_THUMB_SIZE", "Vus liste album: Taille des vignettes en pixels");
define("_MI_MAIN_LAYOUT", "Vus liste album: Contenue de la page principale");
define("_MI_THUMBCOLS", "Vus vignettes: Nombre de colonnes sur page des vignettes");
define("_MI_THUMBROWS", "Vus vignettes: Nombre de rang�es sur page des vignettes");
define("_MI_MAX_TABS", "Vus vignettes: Nombre maximum des �tiquettes � montrer");
define("_MI_TEXT_THUMBVIEW", "Vus vignettes: Montrez la description d'image (en plus du titre) au-dessous de la vignette");
define("_MI_COM_COUNT", "Vus vignettes: Montrez les commentaires au-dessous de la vignette");
define("_MI_DEF_SORT", "Vus vignettes: Commande  par d�faut pour les images");
define("_MI_SORT_NA", "Classer par Nom montant");
define("_MI_SORT_ND", "Classer par Nom descendant");
define("_MI_SORT_DA", "Classer par Date montant");
define("_MI_SORT_DD", "Classer par Date descendant");
define("_MI_MIN_VOTES", "Vus vignettes: Minimum de votes n�c�ssaire pour que l'image apparaisse dans la liste du 'top-rated'");
define("_MI_DIS_PICINFO", "Affichage d'image: L'information sur l'image sont visible par default");
define("_MI_JPG_QUAL", "Images et vignettes installation: Qualit� pour les fichier JPEG");
define("_MI_THUMB_WIDTH", "Images et vignettes installation: Largeur ou hauteur maximum d'une vignette *");
define("_MI_MAKE_INTERM", "Images et vignettes installation: Cr�ez des images interm�diaires");
define("_MI_PICTURE_WIDTH", "Images et vignettes installation : Largeur ou hauteur maximum d'une image interm�diaire *");
define("_MI_MAX_UPL_SIZE", "Images et vignettes installation: Taille maximum pour les images t�l�charg�es (KB)");
define("_MI_MAX_UPL_WIDTH", "Images et vignettes installation: Largeur ou hauteur maximum pour les images t�l�charg�es (Pixel)");
define("_MI_ALLOW_PRIVATE", "Installation des utilisateurs: les utilisateurs peuvent cr�e des albums priv�e");
define("_MI_UF_NAME1", "Champ personnel 1 nom pour la description d'image (Laissez en blanc si inutilis�)");
define("_MI_UF_NAME2", "Champ personnel 2 nom pour la description d'image (Laissez en blanc si inutilis�)");
define("_MI_UF_NAME3", "Champ personnel 3 nom pour la description d'image (Laissez en blanc si inutilis�)");
define("_MI_UF_NAME4", "Champ personnel 4 nom pour la description d'image (Laissez en blanc si inutilis�)");
define("_MI_FORB_FNAME", "Caract�res interdit dans le nom du fichier");
define("_MI_FILE_EXT", "Extension autoris�e pour l'upload des images");
define("_MI_THUMB_METHOD", "M�thode pour redimensionner les images");
define("_MI_IMPATH", "Chemin d'acc�s pour utiliser ImageMagick/Netpbm 'convertisseur' (example /usr/bin/X11/)");
define("_MI_ALLOW_IMG_TYPES", "Types d'image permise (seulement valides pour ImageMagick)");
define("_MI_IM_OPTIONS", "Ligne de commande options pour ImageMagick");
define("_MI_READ_EXIF", "Relisez les donn�es d'EXIF dans le fichier JPG (Extension php exif necc�ssaire)");
define("_MI_FULLPATH", "Chemin d'acc�s aux albums *");
define("_MI_USERPICS", "Chemin d'acc�s utilisateurs des images *");
define("_MI_NORMAL_PFX", "Le pr�fixe pour les images interm�diaires *");
define("_MI_THUMB_PFX", "Le prefixe pour les vignettes *");
define("_MI_DIR_MODE", "Mode par d�faut pour les dossiers");
define("_MI_PIC_MODE", "Mode par d�faut pour les images");
define("_MI_COOKIE_NAME", "Nom de cookie utilis� par le script");
define("_MI_COOKIE_PATH", "Chemin du cookies utilis� par le scrit");
define("_MI_DEBUG_MODE", "Activer le mode debug pour les galeries");
define("_MI_ECRAD_SEE_MORE", "Adresse cible pour  for the 'Voir plus d'images' lien dans e-cards");
define("_MI_ECRAD_TYPE", "Selectionn� le type d'ecard");
define("_MI_TEXT_CARD", "Texte");
define("_MI_HTML_CARD", "Html");
define("_MI_ECRAD_PER_HOUR", "Nombres d'ecard que l'utilisateur peut exp�dier par heure");
define("_MI_ECRAD_SAVE", "Nombres de jour ou les ecard sont conserv�s sur la base de donn�e (jour)");
define("_MI_ECRAD_TEXT", "Texte de l'ecard");
define("_MI_ECRAD_TEXTDESC", "(pour le texte des ecard et as alternative text for html ecards)<br /><b>�tiquettes Utiles</b><br />{X_SITEURL} affichera " . ICMS_URL . "<br />{X_SITENAME} affichera " . $xoopsConfig['sitename'] . "<br />{R_NAME} affichera le nom du destinataire <br />{R_MAIL} Affichera l'email du destinataire<br />{S_NAME} Affichera le nom de l'exp�diteur<br />{S_MAIL} Affichera l'email de l'�xpediteur<br />{SAVE_DAYS} Affichera le nombre de jour depuis que l'ecard a �t� sauvegarder sur la base<br />{CARD_LINK} Affichera l'url de l'ecard");
define("_MI_ECRAD_TEXT_VALUE", "Cher {R_NAME},\n\n{S_NAME}({S_MAIL}) a envoy� un ecard pour vous.\nSvp, rendez vous � {CARD_LINK}).\nVotre ecard a �t� sauvegard� {SAVE_DAYS} jour(s) dans la base de donn�es.\n\nBien � vous\n{X_SITENAME} l'�quipe ({X_SITEURL})");
define("_MI_KEEP_VOTES", "Combien de temp les votes sont t'ils conserv�s ? (jour) (0 s'ils ne sont pas conserv�s");
define("_MI_SEARCH_THUMB", "Montrer une vignette au lieu de l'ic�ne de xcGallery sur les pages de recherche et d'info utilisateur");
define("_MI_WATERMARKING", "Utiliser watermarking pour JPG");
define("_MI_WATERMARK_TEXTDESC", "Watermark doit �tre sauv� sous xcgal/images/watermark.png");
