<?php
/**
 * Products, Quotations & Invoices modules.
 * Extensions to SugarCRM
 * @package Advanced OpenSales for SugarCRM
 * @subpackage Products
 * @copyright SalesAgility Ltd http://www.salesagility.com
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author Salesagility Ltd <support@salesagility.com>
 */

$mod_strings = array (
    'LBL_ASSIGNED_TO_NAME' => 'Manager du contrat',
    'LBL_CONTRACT_ACCOUNT' => 'Comptes',
    'LBL_OPPORTUNITY' => 'Affaires',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date de création:',
    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_MODIFIED' => 'Modifié par',
    'LBL_MODIFIED_ID' => 'Modifié par (ID)',
    'LBL_MODIFIED_NAME' => 'Modifié par',
    'LBL_CREATED' => 'Créé par',
    'LBL_CREATED_ID' => 'Créé par (ID)',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Supprimé',
    'LBL_NAME' => 'Titre du contrat',
    'LBL_CREATED_USER' => 'Créé par',
    'LBL_MODIFIED_USER' => 'Modifié par',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_FORM_TITLE' => 'Liste des contrats',
    'LBL_MODULE_NAME' => 'Contrats',
    'LBL_MODULE_TITLE' => 'Contrats : Accueil',
    'LBL_HOMEPAGE_TITLE' => 'Mes contrats',
    'LNK_NEW_RECORD' => 'Créer un contrat',
    'LNK_LIST' => 'Voir les contrats',
    'LNK_IMPORT_AOS_CONTRACTS' => 'Importer des contrats',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher des contrats',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Voir l&#39;Historique',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_AOS_CONTRACTS_SUBPANEL_TITLE' => 'Contrats',
    'LBL_NEW_FORM_TITLE' => 'Nouveau contrat',
    'LBL_CONTRACT_NAME' => 'Nom du contrat',
    'LBL_REFERENCE_CODE ' => 'Référence',
    'LBL_START_DATE' => 'Date de début',
    'LBL_END_DATE' => 'Date de fin',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Valeur du contrat',
    'LBL_STATUS' => 'Statut',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Date de signature client',
    'LBL_COMPANY_SIGNED_DATE' => 'Date de signature interne',
    'LBL_RENEWAL_REMINDER_DATE' => 'Date de rappel de renouvellement',
    'LBL_CONTRACT_TYPE' => 'Type de contrat',
    'LBL_CONTACT' => 'Contacts',
    'LBL_ADD_GROUP' => 'Ajouter un groupe',
    'LBL_DELETE_GROUP' => 'Effacer un groupe',
    'LBL_GROUP_NAME' => 'Nom du groupe',
    'LBL_GROUP_TOTAL' => 'Total du groupe',
    'LBL_PRODUCT_QUANITY' => 'Quantité',
    'LBL_PRODUCT_NAME' => 'Produit',
    'LBL_PART_NUMBER' => 'Numéro de pièce',
    'LBL_PRODUCT_NOTE' => 'Notes',
    'LBL_PRODUCT_DESCRIPTION' => 'Description',
    'LBL_LIST_PRICE' => 'Liste',
    'LBL_DISCOUNT_TYPE' => 'Type',
    'LBL_DISCOUNT_AMT' => 'Remise',
    'LBL_UNIT_PRICE' => 'Prix de vente',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Taxe',
    'LBL_VAT_AMT' => 'Montant de la taxe',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'Liste',
    'LBL_SERVICE_PRICE' => 'Prix de vente',
    'LBL_SERVICE_DISCOUNT' => 'Remise',
    'LBL_LINE_ITEMS' => 'Ligne produit',
    'LBL_SUBTOTAL_AMOUNT' => 'Sous-total',
    'LBL_DISCOUNT_AMOUNT' => 'Remise',
    'LBL_TAX_AMOUNT' => 'Taxe',
    'LBL_SHIPPING_AMOUNT' => 'Transport',
    'LBL_TOTAL_AMT' => 'Total',
    'LBL_GRAND_TOTAL' => 'Total global',
    'LBL_SHIPPING_TAX' => 'Taxes de transport',
    'LBL_SHIPPING_TAX_AMT' => 'Taxes de transport',
    'LBL_ADD_PRODUCT_LINE' => 'Ajouter une ligne produit',
    'LBL_ADD_SERVICE_LINE' => 'Ajouter une ligne de service',
    'LBL_PRINT_AS_PDF' => 'Imprimer en PDF [Alt+P]',
    'LBL_EMAIL_PDF' => 'Envoyer le PDF par email',
    'LBL_PDF_NAME' => 'Contrat',
    'LBL_EMAIL_NAME' => 'Contrat pour',
    'LBL_NO_TEMPLATE' => 'ERREUR\nPas de modèle trouvé. Si vous n\'avez pas encore créé de modèle de contrat, allez dans le module "modèles PDF" et créez en un.',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Sous-total (devise par défaut)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Remise (devise par défaut)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Taxes (devise par défaut)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Transport (devise par défaut)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (devise par défaut)',
    'LBL_SHIPPING_TAX_USDOLLAR' => 'Taxe de transport (devise par défaut)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Taxe de transport (devise par défaut)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Total global (devise par défaut)',
);
?>
