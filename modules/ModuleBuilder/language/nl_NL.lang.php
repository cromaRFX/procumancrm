<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2016 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/


$mod_strings = array(
    'LBL_LOADING' => 'Laden' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Verbergen opties' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Verwijderen' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Powered by SugarCRM' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Een <b> pakket </ b> fungeert als een container voor aangepaste modules, die allemaal deel uitmaken van een project. Het pakket kan een of meer aangepaste <b> modules </ b> bevatten die gerelateerd kunnen worden aan elkaar of aan andere modules in de applicatie. <br/> Na het aanmaken van een pakket voor uw project, kunt u modules voor het pakket meteen aanmaken, of u kunt terugkeren naar de Module Builder om het project te voltooien.',
            'modify' => 'De eigenschappen en mogelijke acties voor dit<b>Pakket</b> verschijnen hier.<br><br>U kunt de <b>Naam</b> wijzigen, en de <b>Auteur</b> en de <b>Beschrijving</b>, alsmede het bekijken en aanpassen van alle modules binnen het pakket.<br><br>Klik op <b>Nieuwe Module</b> om een nieuwe module aan te maken binnen dit pakket.<br><br>Als het pakket minstens 1 module heeft kunt u deze <b>Publiceren</b> en/of <b>Implementeren</b>, of <b> Exporteren </ b> van de aanpassingen in het pakket.',
            'name' => 'Dit is de <b> Naam </ b> van het huidige pakket. <br/> De naam die u invoert, moet alfanumeriek zijn, te beginnen met een letter en geen spaties bevatten. (Voorbeeld: HR_Management)',
            'author' => 'Dit is de <b> Auteur </ b> die tijdens de installatie wordt weergegeven als de ontwikkelaar van het pakket. <br> De auteur kan een persoon zijn of een organisatie.',
            'description' => 'Dit is de <b> Beschrijving </ b> van het pakket dat wordt weergegeven tijdens de installatie.',
            'publishbtn' => 'Klik op <b> Publiceren </ b> om alle ingevoerde gegevens op te slaan en een installeerbaar zip-bestand aan te maken van het pakket. <br> Gebruik <b> module loader </ b> om het hier aangemaakte zip bestand te uploaden en installeren.',
            'deploybtn' => 'Klik op <b> Implementeren </ b> om alle ingevoerde gegevens op te slaan en te installeren, inclusief alle modules die erin zitten, in de huidige omgeving.',
            'duplicatebtn' => 'Klik op <b> Dupliceren </ b> om de inhoud van het pakket te kopiëren naar een nieuw pakket, en het nieuwe pakket weer te geven. <br/> Het nieuwe pakket krijgt een automatisch gegenereerde naam bestaand uit de naam van het gekopieerde pakket en een volgnummer aan het eind. U kunt de naam van het nieuwe pakket wijzigen door het invoeren van een nieuwe <b> Naam </ b> en te klikken op <b> Opslaan </ b>.',
            'exportbtn' => 'Klik op <b> Exporteren </ b> om een. zip-bestand met de aanpassingen in het pakket te maken. <br> Het gegenereerde bestand is geen installeerbare versie van het pakket. <br> Gebruik <b > Module Loader </ b> om het importeren en dit pakket, inclusief aanpassingen te laten verschijnen in de Module Builder.',
            'deletebtn' => 'Klik op <b> Verwijderen </ b> om dit pakket en alle bestanden die verwijzen naar dit pakket te verwijderen.',
            'savebtn' => 'Klik op <b> Opslaan </ b> om alle ingevoerde gegevens met betrekking tot het pakket op te slaan.',
            'existing_module' => 'Klik op de <b> Module </ b> icoon om eigenschappen te bewerken en aan te passen van de velden, relaties en lay-outs in verband met de module.',
            'new_module' => 'Klik op <b> Nieuwe Module </ b> om een nieuwe module voor dit pakket te maken.',
            'key' => 'Deze 5-letterige, alfanumerieke <b> Sleutel </ b> zal worden gebruikt als prefix voor alle mappen, klassenamen en database-tabellen, voor alle modules in het huidige pakket. <br> De sleutel wordt gebruikt in een poging unieke tabelnamen te creëren.',
            'readme' => 'Klik hier om meer <b> Leesmij </ b> tekst voor dit pakket toe te voegen. <br> Het Leesmij zal beschikbaar zijn op het moment van de installatie.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Geef een <b> Naam </ b> voor de module. Het <b> Label </ b> dat u ingeeft zal verschijnen in het navigatie tabblad. <br/> Kies voor weergave van een navigatie-tabblad  door de checkbox <b> tabblad Navigatie </ b> aan te vinken. <br/> Vink de <b> Team Beveiliging </ b> checkbox aan om een Team selectie veld hebben binnen de module records. <br/> Vervolgens kiest u het type van de module die u wilt maken. <br/> Selecteer een sjabloon type. Elke sjabloon bevat een specifieke set van velden, evenals vooraf gedefinieerde lay-outs, te gebruiken als basis voor uw module. <br/> Klik <b> Opslaan </ b> om de module te maken.',
            'modify' => 'U kunt de eigenschappen van de module wijzigen of de <b> Velden </ b>, <b> Relaties </ b> en <b> Lay-outs </ b> van deze module.',
            'importable' => 'Het aanvinken van <b> importeerbaar </ b> zal de import-mogelijkheid voor deze module inschakelen. <br> Een link naar de Wizard Importeren wordt weergegeven in het deelvenster Snelkoppelingen in de module. De Wizard Importeren vergemakkelijkt het importeren van gegevens uit externe bronnen in de aangepaste module.',
            'team_security' => 'Checking the <b>Team Security</b> checkbox will enable team security for this module.  <br/><br/>If team security is enabled, the Team selection field will appear within the records in the module',
            'reportable' => 'Aanvinken van deze checkbox resulteert in de mogelijkheid rapporten te maken van deze module.',
            'assignable' => 'Het aanvinken van deze checkbox zal toestaan dat een record in deze module worden toegewezen tot een geselecteerde gebruikersgroep.',
            'has_tab' => 'Aanvinken van <b>Navigatie Tabblad</b> zal ervoor zorgen dat er een navigatie tabblad aangemaakt is voor deze module.',
            'acl' => 'Het aanvinken van deze checkbox zal de ToegangControle (Access Controls) activeren inclusief beveiliging op veldniveau.',
            'studio' => 'Het aanvinken van deze checkbox geeft beheerders de mogelijkheid deze module aan te passen via de Studio',
            'audit' => 'Het aanvinken van deze checkbox zal Auditing activeren voor deze module. Wijzigingen aan bepaalde velden zullen worden opgeslagen zodat beheerders deze mutatiehistorie kunnen opvragen.',
            'viewfieldsbtn' => 'Klik op <b>Bekijk Velden</b> om de velden die behoren bij de module te bekijken en om eigen velden aan te maken/wijzigen.',
            'viewrelsbtn' => 'Klik op <b>Bekijk Relaties</b>  om de relaties van deze module te bekijken en eventueel nieuwe aan te maken.',
            'viewlayoutsbtn' => 'Klik op <b>Bekijk Lay-outs</b> om de lay-outs van de module te bekijken en eventueel aan te passen',
            'duplicatebtn' => 'Klik op <b>Dupliceren</b> om de eigenschappen van de module te kopiëren in een nieuwe module en deze nieuwe module weer te geven. <br/><br/>De naam van de nieuwe module bestaat uit de naam van de gekopieerde module met daaraan toegevoegd een nummer.',
            'deletebtn' => 'Klik op <b>Verwijderen</b> om deze module te verwijderen.',
            'name' => 'Dit is de <b> Naam </ b> van de huidige module. <br/> De naam moet alfanumeriek zijn en moet beginnen met een letter en mag geen spaties bevatten. (Voorbeeld: HR_Management)',
            'label' => 'This is the <b>Label</b> that will appear in the navigation tab for the module.',
            'savebtn' => 'Klik op <b> Opslaan </ b> om alle ingevoerde gegevens met betrekking tot de module op te slaan.',
            'type_basic' => 'Het <b> Basis </ b> sjabloontype biedt alleen elementaire velden, zoals naam, Toegewezen aan, Team, aanmaakdatum en beschrijvingsvelden.',
            'type_company' => 'Het <b> Bedrijf </ b> sjabloontype voorziet organisatie-specifieke velden, zoals bedrijfsnaam, Industrie en factuuradres. <br/> Gebruik deze template om modules die vergelijkbaar zijn met de standaard Organisatie module te maken.',
            'type_issue' => 'Het <b> issue </ b> sjabloontype levert case- en defect-specifieke velden, zoals aantal, status, prioriteit en beschrijving. <br/> Gebruik deze template om modules te maken die vergelijkbaar zijn met de standaard Cases-module en Defecten-module.',
            'type_person' => 'Het <b> Persoon </ b> sjabloontype biedt persoonsgebonden velden, zoals aanhef, titel, naam, adres en telefoonnummer. <br/> Gebruik deze template om modules te maken die vergelijkbaar zijn met de standaard Persoon en Lead modules.',
            'type_sale' => 'Het <b> Verkoop </ b> sjabloontype biedt opportunity-achtige velden, zoals Leadbron, Verkoopstadium, het bedrag en de waarschijnlijkheid (%). <br/> Gebruik deze template om modules die vergelijkbaar zijn met de standaard Opportunity module te maken.',
            'type_file' => 'Het <b> Bestand </ b> sjabloontype levert Document specifieke velden, zoals bestandsnaam, Document type en Publicatiedatum. <br> Gebruik deze template om modules die vergelijkbaar zijn met de standaard Documenten module te maken.',

        ),
        'dropdowns' => array(
            'default' => 'Alle <b> Dropdowns </ b> voor SugarCRM staan hier vermeld. <br> De dropdowns kunnen worden gebruikt voor dropdown-velden in iedere module. <br> Om een bestaande dropdown te wijzigen, Klik op de dropdown naam. <br> Klik <b> Dropdown Toevoegen </ b> om een nieuwe dropdown te maken.',
            'editdropdown' => 'Dropdowns kunnen worden gebruikt voor standaard of eigen velden in iedere module. <br> Geef een <b> Naam </ b> op voor de dropdown. <br> Gebruik <b> Taal </b> om de juiste taal te kiezen. <br> In de <b> Item Naam </ b> moet een unieke naam komen. Deze naam is intern voor SugarCRM en wordt niet getoond aan de gebruikers. <br> In de <b> Weergave Label </ b> komt de label die wel zichtbaar zal zijn voor gebruikers. <br> Na het verstrekken van de naam van het item en de weergave label, klikt u op <b> Toevoegen </ b> om het item toe te voegen aan de keuzelijst. <br> Om de items opnieuw te ordenen kunt u de items klikken en slepen naar de gewenste positie. <br> Om het weergavelabel van een item te bewerken, klikt u op het <b> pictogram bewerken (potlood) </ b>. Als u een item uit de keuzelijst wil verwijderen, klik op het <b>pictogram Verwijderen (min-teken)</ b>. <br> Om een wijziging in een weergavelabel ongedaan te maken, klikt u op <b> Ongedaan maken </ b>. Om een verandering opnieuw aan te brengen die ongedaan werd gemaakt, klikt u op <b> Opnieuw doen </ b>. <br> Klik <b> Opslaan </ b> om de dropdown lijst op te slaan.',

        ),
        'subPanelEditor' => array(
            'modify' => 'Alle velden beschikbaar voor het <b> Subpaneel </ b> worden hier getoond. <br> De <b> Standaard </ b> kolom bevat de velden die zullen worden weergegeven. <br / > <br/> De <b> Verborgen </ b> kolom bevat velden die kunnen worden toegevoegd aan de standaard kolom, maar nu niet worden getoond in het subpaneel.'
        ,
            'savebtn' => 'Klik op <b>Opslaan & Implementeren </b> om wijzigingen op te slaan en om ze te activeren binnen de module.',
            'historyBtn' => 'Klik op <b>Bekijk Geschiedenis</b> om eerder opgeslagen lay-outs te bekijken en eventueel te herstellen.',
            'historyDefault' => 'Klik op <b>Herstel Standaard</b> om een lay-out naar het origineel te terug te zetten.',
            'Hidden' => '<b>Verborgen</b> velden worden niet getoond in het subpaneel.',
            'Default' => '<b>Standaard</b> velden worden wel getoond in het subpaneel.',

        ),
        'listViewEditor' => array(
            'modify' => 'Alle velden die beschikbaar zijn voor de <b> ListView </ b> worden hier getoond. <br> <br/>  De <b> Standaard </ b> kolom bevat de velden die in de ListView standaard worden getoond. <br /> <br/> De <b> Beschikbaar </ b> kolom bevat velden die een gebruiker kan selecteren om zo een eigen listview te maken. <br/> De <b> Verborgen </ b> kolom bevat velden die kunnen worden toegevoegd aan de Standaard- of Beschikbaar kolom, maar niet zichtbaar zijn voor de gebruiker.'
        ,
            'savebtn' => 'Klik op <b>Opslaan & Implementeren </b> om wijzigingen op te slaan en om ze te activeren binnen de module.',
            'historyBtn' => 'Klik op <b>Bekijk Geschiedenis</b> om eerder opgeslagen lay-outs te bekijken en eventueel te herstellen.',
            'historyDefault' => 'Klik op <b>Herstel Standaard</b> om een lay-out naar het origineel te terug te zetten.',
            'Hidden' => '<b>Verborgen</b> velden zijn niet beschikbaar voor gebruikers in de Listview',
            'Available' => '<b>Beschikbaar</b> velden worden standaard niet getoond, maar kunnen wel worden toegevoegd door de gebruiker aan de listview.',
            'Default' => '<b>Standaard</b> velden verschijnen in ListViews die niet zijn aangepast door de gebruikers.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'Alle velden die beschikbaar zijn voor de <b> ListView </ b> worden hier getoond. <br> <br/>  De <b> Standaard </ b> kolom bevat de velden die in de ListView standaard worden getoond. <br> <br/>  De <b> Verborgen </ b> kolom bevat velden die kunnen worden toegevoegd aan de Standaard- of Beschikbaar kolom, maar niet zichtbaar zijn voor de gebruiker.'
        ,
            'savebtn' => 'Klik op <b>Opslaan & Implementeren </b> om wijzigingen op te slaan en om ze te activeren binnen de module.',
            'historyBtn' => 'Klik op <b>Bekijk Historie</b> om eerder opgeslagen lay-outs te bekijken en eventueel te herstellen.',
            'historyDefault' => 'Klik op <b>Herstel Standaard</b> om een lay-out naar het origineel te terug te zetten.',
            'Hidden' => '<b>Verborgen</b> velden zijn niet beschikbaar voor gebruikers in de Listview',
            'Default' => '<b>Standaard</b> velden verschijnen in ListViews die niet zijn aangepast door de gebruikers.'
        ),
        'searchViewEditor' => array(
            'modify' => 'Alle velden die beschikbaar zijn voor het <b> Zoeken </ b> worden hier getoond. <br> <br/>  De <b> Standaard </ b> kolom bevat de velden die in het Zoeken standaard worden getoond. <br> <br/>  De <b> Verborgen </ b> kolom bevat velden die kunnen worden toegevoegd aan de standaardkolom, maar niet zichtbaar zijn voor de gebruiker.'
        ,
            'savebtn' => 'Klik op <b>Opslaan & Implementeren </b> om wijzigingen op te slaan en om ze te activeren binnen de module.',
            'Hidden' => '<b>Verborgen</b> velden zijn niet beschikbaar in het zoekscherm',
            'historyBtn' => 'Klik op <b>Bekijk Historie</b> om eerder opgeslagen layouts te bekijken en eventueel te herstellen.',
            'historyDefault' => 'Klik op <b>Herstel Standaard</b> om een layout naar het origineel te terug te zetten.',
            'Default' => '<b>Standaard</b> velden verschijnen wel in het zoekscherm.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'Het <b> lay-out </ b> gebied bevat de velden die momenteel worden weergegeven in de <b> DetailView </ b>. <br/> De <b> Toolbox </ b> bevat de <b> Prullenbak </ b> en de velden en lay-out elementen die kunnen worden toegevoegd. <br> Wijzig de lay-out door klikken en slepen van elementen en velden tussen de <b> Toolbox </ b> en de <b> lay-out </ b> Dit kan ook binnen de lay-out zelf. <br> Voor het verwijderen van een veld uit de lay-out, moet men het veld naar de <b> Prullenbak </ b> slepen. Het veld zal dan beschikbaar zijn in de Toolbox om opnieuw toe te voegen aan de lay-out.'
        ,
            'defaultquickcreate' => 'Het <b> lay-out </ b> gebied bevat de velden die momenteel worden weergegeven in de <b> Snelle Aanmaak </ b>. <br/> De <b> Toolbox </ b> bevat de <b> Prullenbak </ b> en de velden en lay-out elementen die kunnen worden toegevoegd. <br> Wijzig de lay-out door klikken en slepen van elementen en velden tussen de <b> Toolbox </ b> en de <b> lay-out </ b> Dit kan ook binnen de lay-out zelf. <br> Voor het verwijderen van een veld uit de lay-out, moet men het veld naar de <b> Prullenbak </ b> slepen. Het veld zal dan beschikbaar zijn in de Toolbox om opnieuw toe te voegen aan de lay-out.'
        ,
            //this defualt will be used for edit view
            'default' => 'Het <b> lay-out </ b> gebied bevat de velden die momenteel worden weergegeven in de <b> EditView </ b>. <br/> De <b> Toolbox </ b> bevat de <b> Prullenbak </ b> en de velden en lay-out elementen die kunnen worden toegevoegd. <br> Wijzig de lay-out door klikken en slepen van elementen en velden tussen de <b> Toolbox </ b> en de <b> lay-out </ b> Dit kan ook binnen de lay-out zelf. <br> Voor het verwijderen van een veld uit de lay-out, moet men het veld naar de <b> Prullenbak </ b> slepen. Het veld zal dan beschikbaar zijn in de Toolbox om opnieuw toe te voegen aan de lay-out.'
        ,
            'saveBtn' => 'Klik op <b>Opslaan</b> om de wijzigingen te behouden. <br> De veranderingen zullen niet in de module worden weergegeven totdat u <b> Opslaan & Implementeren</b> kiest.',
            'historyBtn' => 'Klik op <b>Bekijk Historie</b> om eerder opgeslagen layouts te bekijken en eventueel te herstellen.',
            'historyDefault' => 'Klik op <b>Herstel Standaard</b> om een layout naar het origineel te terug te zetten.',
            'publishBtn' => 'Klik op <b> Opslaan & Implementeren </ b> om alle wijzigingen die u aan de lay-out gemaakt sinds de laatste keer op te slaan, en om de veranderingen te activeren in de module. <br> De lay-out zal onmiddellijk worden weergegeven in de module.',
            'toolbox' => 'De <b> Toolbox </ b> bevat de <b> Prullenbak </ b> ,extra layout-elementen en alle beschikbare velden. <br/> Alle velden en elementen in de toolbox kunnen naar de layout worden gesleept en andersom. <br> De lay-out elementen bestaan uit <b> Panelen </ b> en <b > Rijen </ b>. Het toevoegen van een nieuwe rij of een nieuw paneel aan de lay-out zorgt voor extra ruimte in de lay-out zodat velden kunnen worden toegevoegd. <br/> Sleep een veld van de toolbox naar een bezet veld op de lay-out (en vice versa) om van plaats te wisselen. <br/> Het <b>Filler</b> veld creëert lege ruimte in de lay-out waar hij wordt geplaatst.',
            'panels' => 'Het <b> lay-out </ b> gebied laat zien hoe de lay-out wordt binnen de module wanneer de wijzigingen worden opgeslagen en geïmplementeerd. <br/> U kunt velden, rijen en panelen herpositioneren door te slepen en neer te zetten op de gewenste plaats. <br/> Elementen zijn te verwijderen door ze te slepen naar de <b> Prullenbak </ b> in de Toolbox, of toe te voegen door ze te slepen uit de <b> Toolbox </ b> en ze te los te laten op de gewenste locatie in de lay-out.',
            'delete' => 'Sleep een element hierheen om het te verwijderen van de lay-out.',
            'property' => 'Bewerk het label dat wordt weergegeven voor dit veld. <br/> <b> Tabvolgorde </ b> bepaalt in welke volgorde de tab-toets aanhoudt tussen de velden.',
        ),
        'fieldsEditor' => array(
            'default' => 'De <b> Velden </b> die beschikbaar zijn voor de module worden hier genoemd. <br> Aangepaste velden worden weergegeven boven de velden die standaard beschikbaar zijn voor de module. <br> <br> Om een veld te bewerken, klikt u op de <b> Veldnaam </b>. <br/> Om een nieuw veld te maken, klikt u op <b> Veld toevoegen </b>.',
            'mbDefault' => 'De <b> Velden </ b> die beschikbaar zijn voor de module worden hier genoemd. <br>Voor het aanpassen van de eigenschappen van een veld, klikt u op de veldnaam. <br> <br> Om een nieuw veld te maken, klikt u op <b> Veld toevoegen </ b>. Het label, samen met de andere eigenschappen van het nieuwe veld kunnen worden bewerkt nadat het nieuwe veld is aangemaakt, door weer te klikken op de veldnaam. <br> Nadat de module is geïmplementeerd, worden de velden die in de ModuleBuilder zijn aangemaakt behandeld als standaard velden in de Studio.',
            'addField' => 'Selecteer een <b> Data Type </ b> voor het nieuwe veld. Het type dat u selecteert, bepaalt welk soort tekens mogen worden ingevoerd voor het veld. Bijvoorbeeld alleen gehele getallen kunnen worden ingevoerd in de velden die van het type Integer zijn. <br> Geef een <b> Naam </ b> voor het veld. De naam moet alfanumeriek zijn en mag geen spaties bevatten. Underscore mag gebruikt worden (Liggend streepje). <br> Het <b> WeergaveLabel </ b> is het label dat getoond wordt in de module. Het <b> SysteemLabel </ b> wordt gebruikt om te verwijzen naar het veld in de code. <br> Afhankelijk van het type dat is geselecteerd kunnen enkele of alle van de volgende eigenschappen worden ingesteld voor het veld : <br> <b> Help Tekst </ b> verschijnt tijdelijk terwijl een gebruiker  boven het veld blijft hangen met de muis. <br> <b> Commentaar tekst </ b> is alleen te zien in Studio en/of Module Builder, en kan worden gebruikt om het veld te beschrijven voor beheerders. <br> <b> Standaard Waarde </ b> zal verschijnen in het veld. Gebruikers kunnen een nieuwe waarde in het veld invoeren of de standaard overnemen.<br> Selecteer de <b> Mass Update </ b> checkbox om aan te geven of dit veld ook beschikbaar is voor massupdate.<Br > <br> De <b> Maximale grootte </ b> waarde bepaalt het maximum aantal tekens dat kan worden ingevoerd in het veld. <br> Selecteer <b> Verplicht veld </ b> als het veld altijd een waarde moet bevatten.<br> Selecteer <b> Rapporteerbaar </ b> aan, als het veld beschikbaar moet zijn in de module rapporten. <br> Selecteer de <b> Audit </ b> om wijzigingen aan het veld op te slaan. <br> Selecteer een optie in <b> importeerbaar </ b> om toe te staan, te verbieden of te eisen dat het veld worden ingevoerd in de wizard Importeren. <br> Selecteer een optie in <b> Dubbele Waarden Samenvoegen </ b> om het veld in- of uit te schakelen van de Dubbelen samenvoegen en Dubbelen-zoeken functies. <br> Bijkomende eigenschappen kunnen worden ingesteld voor bepaalde soorten gegevens.',
            'editField' => 'De eigenschappen van dit veld kunnen worden aangepast. <br> Klik op <b> Klonen </ b> om een nieuw veld te maken met dezelfde eigenschappen.',
            'mbeditField' => 'Het <b>Weergavelabel</b>  kan worden aangepast. De overige eigenschappen niet.<br><br>Klik op <b>Klonen</b> om een veld aan te maken met dezelfde eigenschappen.<br><br>Om een veld te verwijderen zodat het niet getoond wordt in de module moet het veld van de bijbehorende <b>lay-out</b> verwijderd worden.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Exporteren Aanpassingen via de Studio creëert een maatwerkpakket die in een andere SuiteCRM toepassing geladen kan worden via <b>Module Beheer</b>.<br><br> Geef eerst een <b>PakketNaam</b> op. U kunt daarna de <b>Auteur</b> en een <b>Beschrijving</b> opgeven.<br><br>Selecteer de modules die de aanpassingen bevatten die u wil exporteren. Alleen aangepaste modules zullen getoond worden om te exporteren.<br><br>Klik dan vervolgens op <b>Exporteren</b> om een .zip bestand aan te maken die alle wijzigingen bevat.',
            'exportCustomBtn' => 'Klik op <b>Exporteren</b> om een .zip bestand aan te maken met daarin alle aanpassingen die u wil exporteren.',
            'name' => 'Dit is de <b>Naam</b> van het pakket. Deze naam wordt getoond tijdens de installatie.',
            'author' => 'Dit is de <b>Auteur</b> die wordt getoond tijdens de installatie als de naam van de persoon/organisatie die het pakket heeft aangemaakt.',
            'description' => 'Dit is de <b> Beschrijving </ b> van het pakket dat wordt weergegeven tijdens de installatie.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Welkom bij <b>Developer Tools</b>. <br/><br/>Gebruik deze tools voor het maken en beheren van standaard en nieuwe modules en velden.',
            'studioBtn' => 'Gebruik de <b>Studio</b> om geïmplementeerde modules te wijzigen.',
            'mbBtn' => 'Gebruik <b>Module Builder</b> om nieuwe modules te maken.',
            'sugarPortalBtn' => 'Gebruik de <b>SuiteCRM Portaal Editor</b> om het SuiteCRM Portaal te beheren en aan te passen.',
            'dropDownEditorBtn' => 'Gebruik de <b>Dropdown Editor</b> om nieuwe dropdowns toe te voegen en bestaande te wijzigen.',
            'appBtn' => 'Application Mode is de plek waar je de verschillende eigenschappen van het programma kunt aanpassen, zoals hoeveel TPS-rapporten worden weergegeven op de homepagina.',
            'backBtn' => 'Terug naar de vorige stap.',
            'studioHelp' => 'Gebruik <b> Studio </ b> om te bepalen wat en hoe informatie wordt weergegeven in de modules.',
            'moduleBtn' => 'Klik hier om deze module te bewerken.',
            'moduleHelp' => 'De onderdelen die u kunt aanpassen voor de module verschijnen hier. <br> Klik op een pictogram om het component dat u wilt bewerken te selecteren.',
            'fieldsBtn' => 'Maak en Wijzig <b>Velden</b> om informatie op te slaan in de module',
            'labelsBtn' => 'Bewerk de <b> Labels </ b> voor de velden en andere titels die getoond worden in de module',
            'relationshipsBtn' => 'Voeg een nieuwe of bestaande <b> Relatie </ b> toe voor de module.',
            'layoutsBtn' => 'Aanpassen van de module <b> Lay-outs </ b>. De lay-outs zijn de verschillende weergaven van de module. <br> U kunt zelf bepalen welke velden worden weergegeven en hoe ze zijn georganiseerd in elke lay-out.',
            'subpanelBtn' => 'Bepalen welke velden worden weergegeven in het <b> Subpanels </ b> in de module.',
            'portalBtn' => 'Aanpassen van de module <b>Lay-outs</ b> die in de <b>SuiteCRM Portaal</ b> verschijnen.',
            'layoutsHelp' => 'Hier staan de <b> Lay-outs </ b> van de module. <br> De lay-out laat velden en veld-gegevens zien. <br> Klik op een pictogram om de lay-out die u wil bewerken te selecteren..',
            'subpanelHelp' => 'De <b>Subpanelen</b> van de module worden hier getoond.<br><br>Klik op een pictogram om diegene die u wil bewerken te selecteren.',
            'newPackage' => 'Klik op <b>Nieuw Pakket</b> om een nieuw pakket aan te maken',
            'exportBtn' => 'Klik op <b>Exporteer Aanpassingen</b> om een pakket aan te maken en te downloaden dat alle aanpassingen bevat die in de Studio zijn gemaakt voor de modules.',
            'mbHelp' => 'Gebruik de <b>Module Builder</b> om paketten aan te maken met daarin nieuwe modules gebaseerd op bestaande objecten of volledig nieuwe.',
            'viewBtnEditView' => 'Pas de <b>EditView</b> van de module aan.<br><br>De EditView is de lay-out waar de gebruiker zijn data invoert.',
            'viewBtnDetailView' => 'Pas de <b>DetailView</b> van de module aan.<br><br>De DetailView is de lay-out waar informatie wordt getoond.',
            'viewBtnDashlet' => 'Pas de <b>SuiteCRM Dashlet</b> layout aan van de module, inclusief de SuiteCRM Dashlet\'s ListView en Zoekfunctie.<br><br>De SuiteCRM Dashlet wordt beschikbaar om toe te voegen aan de pagina\'s in de Home-module.',
            'viewBtnListView' => 'Pas de <b> Overzichtslijst </ b> van de module aan. <br> Zoekresultaten verschijnen in de Overzcihtslijst.',
            'searchBtn' => 'Pas de <b> Zoek </ b> lay-outs van de module aan. <br> Bepaal welke velden kunnen worden gebruikt om records te zoeken die vervolgens worden weergegeven in de ListView.',
            'viewBtnQuickCreate' => 'Pas de <b>Snelle Aanmaak</b> lay-out aan.<br><br>De &#39;Snelle Aanmaak&#39;  is van toepassing bij het snel aanmaken via subpanelen en via de e-mails module.',
            'addLayoutHelp' => "Om een aangepaste lay-out voor een veiligheidsgroep te maken, selecteer de desbetreffende veiligheidsgroep en de lay-out welke gekopieerd moet worden als startpunt",

            'searchHelp' => 'De <b> Zoek </ b> lay-outs die kunnen worden aangepast verschijnen hier. <br> Zoek lay-outs bevatten velden voor het filteren van records. <br>  Klik op een pictogram om de lay-out die u wil wijzigen te selecteren.',
            'dashletHelp' => 'De <b>SuiteCRM Dashlet</b> layout die kunnen worden aangepast worden hier getoond.<br>De SuiteCRM Dashlet wordt beschikbaar om toe te voegen aan de pagina\'s in de Home-module.',
            'DashletListViewBtn' => 'De <b>SuiteCRM Dashlets ListView</ b> toont records gebaseerd op de SuiteCRM Dashlets zoekfilters.',
            'DashletSearchViewBtn' => 'The <b>SuiteCRM Dashlet Search</b> filters records for the SuiteCRM Dashlet listview.',
            'popupHelp' => 'De <b> Popup </ b> lay-outs die kunnen worden aangepast verschijnen hier. <br>',
            'PopupListViewBtn' => 'De <b> Popup ListView </ b> toont records gebaseerd op de Popup zoekweergaven.',
            'PopupSearchViewBtn' => 'Het <b> Popup Zoeken </ b> toont records voor de Popup ListView.',
            'BasicSearchBtn' => 'Pas het <b> Normaal Zoeken </ b> formulier aan dat in het Normaal Zoeken tabblad wordt weergegeven in het zoekgebied voor de module.',
            'AdvancedSearchBtn' => 'Pas het <b> Geavanceerd Zoeken </ b> formulier aan dat in het Geavanceerd Zoeken tabblad wordt weergegeven in het zoekgebied voor de module.',
            'portalHelp' => 'Het beheren en aanpassen van het <b>SuiteCRM Portaal</ b>.',
            'SPUploadCSS' => 'Upload een <b>Style Sheet</ b> voor het SuiteCRM Portaal.',
            'SPSync' => '<b>Synchroniseer / b> aanpassingen naar het SuiteCRM Portaal.',
            'Layouts' => 'Pas de <b>Lay-outs</b> aan van de SuiteCRM Portaal modules ..',
            'portalLayoutHelp' => 'De modules binnen de SuiteCRM Portaal verschijnen in dit gebied. <br> Selecteer een module om de <b>Lay-out</b> te bewerken.',
            'relationshipsHelp' => 'Alle <b> Relaties </ b> die er bestaan tussen de module en de andere gebruikte modules verschijnen hier. <br> De relatie <b> Naam </ b> is een door het systeem gegenereerde naam voor de relatie. <br> <br> De <b> Primaire Module </ b> is de module die de relaties bezit. Bijvoorbeeld, alle eigenschappen van relaties waarbij de module Organisaties de primaire module is worden opgeslagen in de Organisatie database tabellen. <br> Het <b> Type </ b> is de aard van de relatie bestaat tussen de Primaire module en de <b> gerelateerde </ b> module. <br> Klik op een kolomtitel om te sorteren op die kolom. <br> Klik op een rij in de relatie tabel om de eigenschappen van die relatie te bekijken. <br> Klik op <b> Relatie toevoegen </ b> om een nieuwe relatie aan te maken. <br> Relaties kunnen worden gemaakt tussen twee willekeurige geïmplementeerde modules.',
            'relationshipHelp' => '<b> Relaties </ b> kunnen worden gecreëerd tussen de module en een andere geïmplementeerde module. <br> Relaties zijn zichtbaar middels subpanelen in de module en de bijbehorende velden in de module records. <br> Selecteer een van de volgende relatie <b> Typen </ b> voor de module: <br> <b> Een-op-Een </ b> - Beide modules krijgen een relatie-veld erbij. <br> <b>. Een-op-Veel </ b> - De Primaire Module zal een subpaneel krijgen van de gerelateerde module en de gerelateerde Module krijgt een gerelateerd veld erbij. <br> <b> Veel-op-veel </ b> -. Beide modules krijgen een subpaneel van de gerelateerde module. <br> Selecteer de <b> Gerelateerde Module </ b> voor de relatie. <br> Als een subpaneel onderdeel uitmaakt van de relatie, selecteer dan welke subpaneel-layout gebruikt moet worden voor de module.<br> Klik op<b> Opslaan </ b> om de relatie te maken.',
            'convertLeadHelp' => 'Here you can add modules to the convert layout screen and modify the layouts of existing ones.<br/>
		You can re-order the modules by dragging their rows in the table.<br/><br/>
		<b>Module:</b> The name of the module.<br/><br/>
		<b>Required:</b> Required modules must be created or selected before the lead can be converted.<br/><br/>
		<b>Copy Data:</b> If checked, fields from the lead will be copied to fields with the same name in the newly created records.<br/><br/>
		<b>Allow Selection:</b> Modules with a relate field in Contacts can be selected rather than created during the convert lead process.<br/><br/>
		<b>Edit:</b> Modify the convert layout for this module.<br/><br/>
		<b>Delete:</b> Remove this module from the convert layout.<br/><br/>',
            'editDropDownBtn' => 'Wijzig een globale Dropdown',
            'addDropDownBtn' => 'Maak een nieuwe globale Dropdown',
        ),
        'fieldsHelp' => array(
            'default' => 'De <b> Velden </ b> in de module worden hier genoemd per Veldnaam. <br> De module sjabloon omvat een vooraf bepaalde set van velden. <br> Voor het maken van een nieuw veld, klikt u op <b> Veld toevoegen </ b>. <br> Om een veld te bewerken, klikt u op de <b> Veldnaam </ b>. <br/> Nadat de module wordt geïmplementeerd, worden de nieuwe velden gemaakt in Module Builder, samen met de sjabloonvelden, beschouwd als standaard velden in Studio.',
        ),
        'relationshipsHelp' => array(
            'default' => 'De <b> Relaties </ b> die zijn gemaakt tussen de module en andere modules worden hier weergegeven. <br> De relatie <b> Naam </ b> is een door het systeem gegenereerde naam voor de relatie. <br > <br> De <b> primaire module </ b> is de module die de relaties bezit. De relatie eigenschappen worden opgeslagen in database tabellen die behoren tot de primaire module. <br> Het <b> Type </ b> is het soort relatie bestaat tussen de primaire module en de  <b> gerelateerde </ b > module. <br> Klik op een kolomtitel om te sorteren op de kolom. <br> Klik op een rij in de relatie tabel te bekijken en te bewerken. <br> Klik op <b> Relatie toevoegen </ b> om een nieuwe relatie te maken.',
            'addrelbtn' => 'hulp voor het aanmaken van een relatie',
            'addRelationship' => '<b> Relaties </ b>  kunnen worden gecreëerd tussen de module en een andere geïmplementeerde module. <br> Relaties zijn zichtbaar middels subpanelen in de module en de bijbehorende velden in de module records. <br> Selecteer een van de volgende relatie <b> Typen </ b> voor de module: <br> <b> Een-op-Een </ b>- Beide modules krijgen een relatie-veld erbij. <br> <b>. Een-op-Veel </ b> - De Primaire Module zal een subpaneel krijgen van de gerelateerde module en de gerelateerde Module krijgt een gerelateerd veld erbij. <br> <b> Veel-op-veel </ b>-. Beide modules krijgen een subpaneel van de gerelateerde module. <br> Selecteer de <b> Gerelateerde Module </ b> voor de relatie. <br> Als een subpaneel onderdeel uitmaakt van de relatie, selecteer dan welke subpaneel-layout gebruikt moet worden voor de module.<br> Klik op<b> Opslaan </ b> om de relatie te maken.',
        ),
        'labelsHelp' => array(
            'default' => 'De <b> Labels </ b> voor de velden en andere titels in de module kunnen worden veranderd. <br> Bewerk het label door op het veld te klikken, voer een nieuw label in en klik op <b> Opslaan </ b >. <br> Als er taalpaketten zijn geïnstalleerd in de applicatie, kunt u de <b> Taal </ b> gebruiken voor de labels.',
            'saveBtn' => 'Klik op <b>Opslaan</b> om alle wijzigingen op te slaan.',
            'publishBtn' => 'Klik op <b> Opslaan & Implementeren </ b> om alle wijzigingen op te slaan en hen actief te maken.',
        ),
        'portalSync' => array(
            'default' => 'Geef de <b>SuiteCRM Portal URL</ b> van het portaal op die u wil bijwerken, en klik op <b> Uitvoeren </ b>. <br>Voer een geldige SuiteCRM gebruikersnaam en wachtwoord in en klik op <b>Begin Synchronisatie</ b>. <br> De aanpassingen aan de SuiteCRM Portal <b>Lay-outs</ b>, samen met de <b>Style Sheet</ b> (indien er 1 is geüpload), zal worden overgezet naar de opgegeven portaal.',
        ),
        'portalStyle' => array(
            'default' => 'U kunt het uiterlijk van de SuiteCRM Portal wijzigen met behulp van een style sheet. <br> Selecteer een <b>Style Sheet</ b> om te uploaden. <br> De style sheet zal worden geïmplementeerd in de SuiteCRM Portaal de eerstvolgende keer dat een synchronisatie wordt uitgevoerd.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Klik op <b> Nieuw Pakket </ b> om een nieuw pakket aan te maken dat uw eigen modules gaat bevatten. <br/> Elk pakket kan een of meer modules bevatten. <br/> Bijvoorbeeld, U wil misschien een pakket met daarin een aangepaste module die lijkt op de standaard Organisatie module. Of u wil een pakket aanmaken met daarin verschillende nieuwe modules die samenwerken als een project en die gerelateerd zijn aan elkaar en aan andere modules die reeds bestaan.',
            'somepackages' => 'Een <b> pakket </ b> fungeert als een container voor aangepaste modules, die allemaal deel uitmaken van een project. Het pakket kan een of meer aangepaste <b> modules </ b> bevatten die gerelateerd kunnen worden aan elkaar of aan andere modules in de applicatie. <br/> Na het aanmaken van een pakket voor uw project, kunt u de nieue modules voor het pakket meteen gaan aanmaken, of u kunt op een later tijdstip terugkeren om het project te voltooien. <br> Wanneer het project voltooid is, kunt u klikken op <b> Implementeren </ b> om het pakket met de nieuwe modules te installeren in de bestaande applicatie.',
            'afterSave' => 'Uw nieuwe pakket moet ten minste een module bevatten. <br/> Klik op <b> Nieuwe Module </ b> om een aangepaste module voor dit pakket te maken. <br/> Na het aanmaken van tenminste een module, kunt u via publiceren of implementeren het pakket beschikbaar te stellen voor de andere gebruikers van uw applicatie en/of andere applicaties. <br/> Voor implementatie van het pakket in uw eigen applicatie, klikt u op <b> Implementeren </ b>. <br> Klik op <b> Publiceren </ b> om het pakket op te slaan als een. zip-bestand. Nadat het. zip-bestand is opgeslagen op uw systeem, gebruikt u de <b> module loader </ b> om het pakket te uploaden in uw SuiteCRM instantie <br/> Op deze manier kunt u het ook naar andere gebruikers verspreiden die het via de module loader kunnen implementeren in hun eigen SuiteCRM instantie',
            'create' => 'Een <b>bestandspakket</b> fungeert als een container voor aangepaste modules, die allemaal deel zijn van een project. Het bestandspakket kan een of meerdere aangepaste <b>modules</b> bevatten die aan elkaar kunnen worden gerelateerd of aan andere modules in de toepassing. <br/> <br/> Na het maken van een bestandspakket voor uw project, kunt u modules voor het bestandspakket meteen maken, of u kunt terugkeren naar de Module Builder om op een later tijdstip het project te voltooien.',
        ),
        'main' => array(
            'welcome' => 'Gebruik de <b> Developer Tools </ b> om standaard en aangepaste modules en velden te creëren en te beheren. <br/> Om modules te beheren in de applicatie, klik op <b> Studio </ b>. <br/> Om aangepaste modules te maken, klikt u op <b> Module Builder </ b>.',
            'studioWelcome' => 'Alle momenteel geïnstalleerde modules, waaronder standaard-en module-geladen objecten, zijn aanpasbaar in Studio.'
        ),
        'module' => array(
            'somemodules' => "Aangezien het huidige pakket ten minste een module bevat, kunt u de modules activeren binnen uw eigen SuiteCRM applicatie door te klikken op <b> Implementeren </ b> of beschikbaar te maken middels een zip bestand voor anderen door te klikken op <b> Publiceren </ b>. <br/> Om het pakket direct te installeren binnen uw SuiteCRM bijvoorbeeld, klikt u op <b> Implementeren </ b>. <br> Om een . zip-bestand te maken dat kan worden geladen en geïnstalleerd binnen de huidige SuiteCRM instantie of andere instanties met behulp van de <b> module loader </ b>, klikt u op <b> Publiceren </ b>. <br/> U kunt de modules opbouwen in fasen, en publiceren of implementeren als u klaar bent. <br/> Na het publiceren of het inzetten van een pakket, kunt u nog wijzigingen aanbrengen in de pakketeigenschappen en de modules. Vervolgens dient u opnieuw te publiceren of te implementeren.",
            'editView' => 'Hier kunt u de bestaande velden wijzigen. U kunt elk van de bestaande velden verwijderen of toevoegen van beschikbare velden in het linker paneel.',
            'create' => 'Bij het kiezen van het type van het <b>Type</b> module die u wilt maken, houd ingedachten de veld typen die u zou willen hebben vanuit de module. <br/> <br/>Elke module-sjabloon bevat een set velden met betrekking tot het type modulebeschreven door de titel. <br/> <br/> <b>Basic</b> - biedt basisvelden die worden weergegeven in de standaardmodules, zoals de naam, toegewezen aan, Team, aanmaakdatum en beschrijving velden. <br/> <br/> <b>Bedrijf</b> - biedt organisatie specifieke velden, zoals bedrijfsnaam, industrie en factuuradres. Gebruik een sjabloon voor modules die vergelijkbaar zijn met de standaard module Accounts. <br/> <br/> <b>Contactpersoon</b> - biedt individu-specifieke velden, zoals aanhef, titel, naam, adres en telefoonnummer. Gebruik deze sjabloon voor het maken van modules die vergelijkbaar zijn met de contactpersonen en Leads standaard modules.<br/> <br/> <b>Zaken</b> - biedt geval - en bug-specifieke velden, zoals aantal, Status, prioriteit en beschrijving. Gebruik deze sjabloon voor het maken van modules die vergelijkbaar zijn met de gevallen en Bugs standaardmodules. <br/> <br/>Opmerking: Nadat u de module hebt gemaakt, kunt u de labels van de velden aanpassen  door het sjabloon te bewerken, evenals aangepaste velden toevoegen aan de modulelay-outs maken.',
            'afterSave' => 'U kunt de module aan uw behoeften aanpassen door velden te bewerken en nieuwe aan te maken, voor het leggen van relaties met andere modules en het organiseren van lay-out aanpassingen. <br/> <br/> Als u de sjabloon velden wilt weergeven en aangepaste velden binnen de module wilt beheren, klikt u op <b>Velden in weergave</b>. <br/> <br/> Maken en beheren van relaties tussen de module en andere modules, of modules reeds in de toepassing of andere aangepaste modules binnen hetzelfde pakket, klikt u op <b>Weergave relaties</b>. <br/> <br/> U kunt op de module lay-out, klikken <b>Weergave-indelingen</b>. U kunt de detailweergave, bewerken en lijstweergave lay-out voor de module wijzigen net zoals u dat zou doen voor modules die reeds in de toepassing binnen Studio zijn. <br/> <br/> Als u een module beheren wilt maken met dezelfde eigenschappen als de huidige module, klikt u op <b>dupliceren</b>. U kunt de nieuwe module verder aanpassen.',
            'viewfields' => 'De velden in de module kunnen aangepast worden aan uw behoeften.<br/><br/>U kunt geen standaard velden verwijderen, maar u kunt ze verwijderen van de desbetreffende lay-out binnen de lay-out pagina<br/><br/>U kunt snel nieuwe velden maken met dezelfde eigenschappen door te klikken op <b>Kloon<b> in de <b>Eigenschappen</b>formulier. Voer nieuwe eigenschappen in en klik dan <b>Opslaan</b><br/><br/>Het is aan te raden dat u alle eigenschappen voor de standaard velden en de aangepaste velden invoert voordat u een aangepast pakket module publiceert en installeerd',
            'viewrelationships' => 'U kunt veel-op-veel relaties tussen de huidige module en andere modules in het pakket, en/of tussen de huidige module en modules die reeds geïnstalleerd zijn in de toepassing maken. <br><br>Door één-op-veel en één-op-één relaties te maken, <b>koppelen</b> en <b>Flex koppelen</b> velden voor de modules.',
            'viewlayouts' => 'U kunt instellen welke velden beschikbaar zijn voor gegevens invoer binnen de <b>Bewerk Overzicht</b> U kunt ook instellen welke gegevens zichtbaar zijn binnen <b>Gedetailleerd overzicht</b>De overzichten hoeven niet overeen te komen. <br/><br/>Het Snelle aanmaak formulier wordt weergegeven als <b>Aanmaken</b> wordt aangeklikt in een module sub-paneel. Standaard, de <b>Snel Aanmaken</b> formulier lay-out is hetzelfde als de standaard lay-out.<b>Bewerk Overzicht</b> U een aangepast Snel Aanmaak formulier maken zodat het minder en/of verschillende velden bevat dan de Bewerk Overzicht lay-out. <br/> <br/>U kunt de beveiliging van de module met behulp van lay-out aanpassingen samen met <b>Role Management</b> bepalen. <br><br>',
            'existingModule' => 'Na het aanmaken en aanpassen deze module, kunt u meer modules aanmaken of terugkeren naar het pakket om het te <b>Publiceren</b> of <b>Implementeren</b>. Om een andere module te maken, klik <b>Dupliceren</b> voor een module met dezelfde eigenschappen als de huidige module, of ga terug naar het pakket en klik <b>Nieuwe Module</b><br><br>Als u klaar bent om het pakket van deze module te <b>Publiceren</b> of te <b>Implementeren</b> ga dan terug naar het pakket om deze acties uit te voeren. U kunt pakketten publiceren en implementeren die op zijn minst een module bevatten.  ',
            'labels' => 'De etiketten van de standaardvelden evenals aangepaste velden kunnen worden gewijzigd. Veldetiketten wijzigen, heeft geen invloed op de gegevens die zijn opgeslagen in de velden.',
        ),
        'listViewEditor' => array(
            'modify' => 'Alle velden die beschikbaar zijn voor de <b> ListView </ b> worden hier getoond. <br> <br/>  De <b> Standaard </ b> kolom bevat de velden die in de ListView standaard worden getoond. <br /> <br/> De <b> Beschikbaar </ b> kolom bevat velden die een gebruiker kan selecteren om zo een eigen listview te maken. <br/> De <b> Verborgen </ b> kolom bevat velden die kunnen worden toegevoegd aan de Standaard- of Beschikbaar kolom, maar niet zichtbaar zijn voor de gebruiker.',
            'savebtn' => 'Klik op  <b>Opslaan & Implementeren</b> om wijzigingen op te slaan en te activeren binnen de module.',
            'Hidden' => '<b>Verborgen</b> velden zijn niet beschikbaar voor gebruikers in de Listview',
            'Available' => '<b>Beschikbaar</b> velden worden standaard niet getoond, maar kunnen wel worden toegevoegd door de gebruiker aan de listview.',
            'Default' => '<b>Standaard</b> velden verschijnen in ListViews die niet zijn aangepast door de gebruikers.'
        ),

        'searchViewEditor' => array(
            'modify' => 'Alle velden die beschikbaar zijn voor het <b> Zoeken </ b> worden hier getoond. <br> <br/>  De <b> Standaard </ b> kolom bevat de velden die in het Zoeken standaard worden getoond. <br> <br/>  De <b> Verborgen </ b> kolom bevat velden die kunnen worden toegevoegd aan de standaardkolom, maar niet zichtbaar zijn voor de gebruiker.',
            'savebtn' => 'Klik op <b>Opslaan & Implementeren </b> om wijzigingen op te slaan en om ze te activeren binnen de module.',
            'Hidden' => '<b>Verborgen</b> velden zijn niet beschikbaar in het zoekscherm',
            'Default' => '<b>Standaard</b> velden verschijnen wel in het zoekscherm.'
        ),
        'layoutEditor' => array(
            'default' => 'Het <b> lay-out </ b> gebied bevat de velden die momenteel worden weergegeven in de <b> EditView </ b>. <br/> De <b> Toolbox </ b> bevat de <b> Prullenbak </ b> en de velden en lay-out elementen die kunnen worden toegevoegd. <br> Wijzig de lay-out door klikken en slepen van elementen en velden tussen de <b> Toolbox </ b> en de <b> lay-out </ b> Dit kan ook binnen de lay-out zelf. <br> Voor het verwijderen van een veld uit de lay-out, moet men het veld naar de <b> Prullenbak </ b> slepen. Het veld zal dan beschikbaar zijn in de Toolbox om opnieuw toe te voegen aan de lay-out.',
            'saveBtn' => 'Klik op <b>Opslaan</b> om de wijzigingen te behouden. <br> De veranderingen zullen niet in de module worden weergegeven totdat u <b> Opslaan & Implementeren</b> kiest.',
            'publishBtn' => 'Klik op <b> Opslaan & Implementeren </ b> om alle wijzigingen die u aan de lay-out gemaakt sinds de laatste keer op te slaan, en om de veranderingen te activeren in de module. <br> De lay-out zal onmiddellijk worden weergegeven in de module.',
            'toolbox' => 'De <b> Toolbox </ b> bevat de <b> Prullenbak </ b> ,extra layout-elementen en alle beschikbare velden. <br/> Alle velden en elementen in de toolbox kunnen naar de layout worden gesleept en andersom. <br> De lay-out elementen bestaan uit <b> Panelen </ b> en <b > Rijen </ b>. Het toevoegen van een nieuwe rij of een nieuw paneel aan de lay-out zorgt voor extra ruimte in de lay-out zodat velden kunnen worden toegevoegd. <br/> Sleep een veld van de toolbox naar een bezet veld op de lay-out (en vice versa) om van plaats te wisselen. <br/> Het <b>Filler</b> veld creëert lege ruimte in de lay-out waar hij wordt geplaatst.',
            'panels' => 'Het <b> lay-out </ b> gebied laat zien hoe de lay-out wordt binnen de module wanneer de wijzigingen worden opgeslagen en geïmplementeerd. <br/> U kunt velden, rijen en panelen herpositioneren door te slepen en neer te zetten op de gewenste plaats. <br/> Elementen zijn te verwijderen door ze te slepen naar de <b> Prullenbak </ b> in de Toolbox, of toe te voegen door ze te slepen uit de <b> Toolbox </ b> en ze te los te laten op de gewenste locatie in de lay-out.'
        ),
        'dropdownEditor' => array(
            'default' => 'Het <b> lay-out </ b> gebied bevat de velden die momenteel worden weergegeven in de <b> EditView </ b>. <br/> De <b> Toolbox </ b> bevat de <b> Prullenbak </ b> en de velden en lay-out elementen die kunnen worden toegevoegd. <br> Wijzig de lay-out door klikken en slepen van elementen en velden tussen de <b> Toolbox </ b> en de <b> lay-out </ b> Dit kan ook binnen de lay-out zelf. <br> Voor het verwijderen van een veld uit de lay-out, moet men het veld naar de <b> Prullenbak </ b> slepen. Het veld zal dan beschikbaar zijn in de Toolbox om opnieuw toe te voegen aan de lay-out.',
            'dropdownaddbtn' => 'Klik op deze knop dan wordt er een nieuw item toegevoegd aan de dropdown.',

        ),
        'exportcustom' => array(
            'exportHelp' => '<b>Exporteren Aanpassingen</b> via de Studio creëert een maatwerkpakket die in een andere sugarcrm toepassing geladen kan worden via <b>Module Beheer</b><br><br>  Geef eerst een <b>PakketNaam</b> op.  U kunt daarna de  <b>Auteur</b> en een <b>Beschrijving</b> opgeven.<br><br>Selecteer de modules die de aanpassingen bevatten die u wil exporteren. Alleen aangepaste modules zullen getoond worden om te exporteren.<br><br>Klik dan vervolgens op  <b>Exporteren</b> om een .zip bestand aan te maken die alle wijzigingen bevat.',
            'exportCustomBtn' => 'Klik op <b>Exporteren</b> om een .zip bestand aan te maken met daarin alle aanpassingen die u wil exporteren.',
            'name' => 'Dit is de <b>Naam</b> van het pakket. Deze naam wordt getoond tijdens de installatie.',
            'author' => 'Dit is de <b>Auteur</b> die wordt getoond tijdens de installatie als de naam van de persoon/organisatie die het pakket heeft aangemaakt.',
            'description' => 'Dit is de <b>Beschrijving</b> van het pakket dat wordt getoond tijdens de installatie.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Welkom bij de <b>Developer Tools</b1> omgeving.<br/><br/>Gebruik de gereedschappen in deze omgeving voor het creëren en beheren van standaard en aangepaste modules velden.',
            'studioBtn' => '<b>Studio</b> geïnstalleerde modules aanpassen door wijzigen in de velden te maken zoals, welke velden zijn beschikbaar en het maken van aangepaste velden.',
            'mbBtn' => 'Gebruik <b>Module Builder</b> om nieuwe modules te maken.',
            'appBtn' => 'Toepassingsmodus gebruiken voor het aanpassen van verschillende eigenschappen van het programma, zoals hoeveel TPS-rapporten worden weergegeven op de homepage',
            'backBtn' => 'Terug naar de vorige stap.',
            'studioHelp' => 'Gebruik <b>Studio</b>om geïnstalleerde modules aantepassen.',
            'moduleBtn' => 'Klik hier om deze module te bewerken.',
            'moduleHelp' => 'Selecteer de module component die u wilt bewerken',
            'fieldsBtn' => 'Bewerken welke informatie wordt opgeslagen in de module door het beheersen van de <b>velden</b> in de module.<br/><br/>U kunt aangepaste velden hier maken en bewerken.',
            'labelsBtn' => 'Klik <b>Opslaan</b>om de aangepaste etiketten te bewaren.',
            'layoutsBtn' => 'Aanpassen <b>Lay-out</b> van Bewerken, Detail, Lijst en zoek overzichten',
            'subpanelBtn' => 'Bewerk welke informatie wordt getoont in de modulen subpanelen. ',
            'layoutsHelp' => 'Selecteer <b>lay-out bewerken</b>. < br / <br/> om de lay-out te veranderen waarin gegevensvelden staan, klikt u op <b>Weergave bewerken</b>. <br/> <br/> om de  lay-out te veranderen waarin de gegevens ingevoerd worden, klikt u op <b>Gedetailleerd overzicht</b>. <br/> <br/> Als de kolommen wilt wijzigen die worden weergegeven in de lijst, klik op <b>Lijstweergave</b>. <br/> <br/> De standaard en Geavanceerd zoek formulier lay-outs, klikt u op <b>zoeken</b>.',
            'subpanelHelp' => 'Selecteer <b>Subpaneel<.b> om te bewerken.',
            'searchHelp' => 'Secteer <b>Zoek</b> lay-out bewerken',
            'labelsBtn' => 'Klik <b>Opslaan</b>om de aangepaste etiketten te bewaren.',
            'newPackage' => 'Klik op <b>Nieuw Pakket</b> om een nieuw pakket aan te maken',
            'mbHelp' => '<b>Welkom bij Module Builder.</b> <br/> <br/> <b>Module Builder</b> wordt gebruikt om pakketten met aangepaste modules gebaseerd op standaard of aangepaste objecten te maken. <br/> <br/> Om te beginnen, klik op <b>Nieuw pakket</b> om een nieuw pakket te maken, of u selecteert een pakket om het te bewerken <br/> <br/> Een <b>pakket</b> fungeert als een container voor aangepaste modules, die allemaal deel van een project zijn. Het pakket kan een of meer aangepaste modules bevatten die dan kunnen worden gerelateerd aan elkaar of aan modules in de toepassing. <br/> <br/> Voorbeelden: U kunt een OLE-pakket met een aangepaste module die betrekking heeft op de standaardmodule Accounts maken. Of, u wilt misschien een pakket maken met verschillende nieuwe modules die samenwerken als een project en die zijn gerelateerd aan elkaar en aan modules in de toepassing.',
            'exportBtn' => 'Klik <b>Exporteer aanpassingen</b>  voor het aanmaken van een pakket met aanpassingen in Studion voor specifieke modulen. ',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Bewerken dropdowns',

//ASSISTANT
    'LBL_AS_SHOW' => 'Toon assistent in de toekomst?',
    'LBL_AS_IGNORE' => 'Negeer assistent in de toekomst?',
    'LBL_AS_SAYS' => 'De assistent zegt:',


//STUDIO2
    'LBL_MODULEBUILDER' => 'Module Bouwer',
    'LBL_STUDIO' => 'Studio',
    'LBL_DROPDOWNEDITOR' => 'Bewerken dropdowns',
    'LBL_EDIT_DROPDOWN' => 'Wijzig Dropdown',
    'LBL_DEVELOPER_TOOLS' => 'Ontwikkel Tools',
    'LBL_SUGARPORTAL' => 'SuiteCRM Portaal Editor',
    'LBL_SYNCPORTAL' => 'Synchroniseer Portaal',
    'LBL_PACKAGE_LIST' => 'Pakket Lijst',
    'LBL_HOME' => 'Start',
    'LBL_NONE' => '-Geen-',
    'LBL_DEPLOYE_COMPLETE' => 'Implementatie voltooid',
    'LBL_DEPLOY_FAILED' => 'Er is een fout opgetreden tijdens het implementatie proces. Het pakket is mogelijk niet correct geïnstalleerd.',
    'LBL_ADD_FIELDS' => 'Voeg Custom velden toe',
    'LBL_AVAILABLE_SUBPANELS' => 'Beschikbare Subpanels',
    'LBL_ADVANCED' => 'Geavanceerd',
    'LBL_ADVANCED_SEARCH' => 'Geavanceerd zoeken',
    'LBL_BASIC' => 'Normaal',
    'LBL_BASIC_SEARCH' => 'Normaal Zoeken',
    'LBL_CURRENT_LAYOUT' => 'lay‐out',
    'LBL_CURRENCY' => 'Valuta',
    'LBL_CUSTOM' => 'Aangepast',
    'LBL_DASHLET' => 'SuiteCRM Dashlet',
    'LBL_DASHLETLISTVIEW' => 'SuiteCRM Dashlet overzicht',
    'LBL_DASHLETSEARCH' => 'Zoekscherm SuiteCRM Dashlet',
    'LBL_POPUP' => 'Pop-up overzicht',
    'LBL_POPUPLIST' => 'Pop-up lijstweergave',
    'LBL_POPUPLISTVIEW' => 'Pop-up lijstweergave',
    'LBL_POPUPSEARCH' => 'Popup Zoeken',
    'LBL_DASHLETSEARCHVIEW' => 'Zoekscherm SuiteCRM Dashlet',
    'LBL_DISPLAY_HTML' => 'Toon HTML Code',
    'LBL_DETAILVIEW' => 'Gedetailleerd overzicht',
    'LBL_DROP_HERE' => '[Hier loslaten]',
    'LBL_EDIT' => 'Wijzig',
    'LBL_EDIT_LAYOUT' => 'Wijzig Layout',
    'LBL_EDIT_ROWS' => 'Wijzig Rijen',
    'LBL_EDIT_COLUMNS' => 'Wijzig Kolommen',
    'LBL_EDIT_LABELS' => 'Wijzig Labels',
    'LBL_EDIT_PORTAL' => 'Wijzig Portaal voor',
    'LBL_EDIT_FIELDS' => 'Wijzig velden',
    'LBL_EDITVIEW' => 'Bewerken overzicht',
    'LBL_FILLER' => '(opvulling)',
    'LBL_FIELDS' => 'Velden',
    'LBL_FAILED_TO_SAVE' => 'Opslaan is mislukt',
    'LBL_FAILED_PUBLISHED' => 'Publiceren is mislukt',
    'LBL_HOMEPAGE_PREFIX' => 'Mijn',
    'LBL_LAYOUT_PREVIEW' => 'Voorvertoning Layout',
    'LBL_LAYOUTS' => 'Lay-outs',
    'LBL_LISTVIEW' => 'Overzicht lijst',
    'LBL_MODULES' => 'Modulen',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_NEW_PACKAGE' => 'Nieuw Pakket',
    'LBL_NEW_PANEL' => 'Nieuw Panel',
    'LBL_NEW_ROW' => 'Nieuwe Rij',
    'LBL_PACKAGE_DELETED' => 'Pakket verwijderd',
    'LBL_PUBLISHING' => 'Bezig met publiceren ...',
    'LBL_PUBLISHED' => 'Gepubliceerd',
    'LBL_SELECT_FILE' => 'Selecteer bestand',
    'LBL_SAVE_LAYOUT' => 'Lay-out Opslaan',
    'LBL_SELECT_A_SUBPANEL' => 'Selecteer een Subpaneel',
    'LBL_SELECT_SUBPANEL' => 'Selecteer Subpaneel',
    'LBL_SUBPANELS' => 'Subpanelen',
    'LBL_SUBPANEL' => 'Subpaneel',
    'LBL_SUBPANEL_TITLE' => 'Titel:',
    'LBL_SEARCH_FORMS' => 'Zoeken',
    'LBL_SEARCH' => 'Zoeken',
    'LBL_STAGING_AREA' => 'Werkruimte (Sleep items hier naar toe)',
    'LBL_SUGAR_FIELDS_STAGE' => 'SuiteCRM Fields (klik items om aan te maken op staging area)',
    'LBL_SUGAR_BIN_STAGE' => 'SuiteCRM Bin (klik items om aan te maken op staging area)',
    'LBL_TOOLBOX' => 'Gereedschapskist',
    'LBL_VIEW_SUGAR_FIELDS' => 'Overzicht SuiteCRM veldem',
    'LBL_VIEW_SUGAR_BIN' => 'Overzicht SuiteCRM Bin',
    'LBL_QUICKCREATE' => 'Snelle aanmaak',
    'LBL_EDIT_DROPDOWNS' => 'WIjzig een globale dropdown',
    'LBL_ADD_DROPDOWN' => 'Nieuwe globale dropdown toevoegen',
    'LBL_BLANK' => '-leeg-',
    'LBL_TAB_ORDER' => 'Tab Volgorde',
    'LBL_TAB_PANELS' => 'Panels als tabs weergeven',
    'LBL_TAB_PANELS_HELP' => 'Elk panel als aparte tab weergeven in plaats van alle panels onder elkaar',
    'LBL_TABDEF_TYPE' => 'Overzicht type',
    'LBL_TABDEF_TYPE_HELP' => 'Selecteer hoe deze sectie moet worden weergegeven. Deze optie heeft alleen effect als tabbladen in dit overzicht staat ingeschakelt. ',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Tab',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Paneel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Selecteer paneel zodat dat dit paneel wordt weergeven in de weergave van de lay-out. Selecteer tabblad zodat dit paneel wordt weergegeven binnen een afzonderlijk tabblad binnen de lay-out. Als het tabblad wordt ingestelt voor een panel en latere panelen worden  ingesteld op weergeven als deelvenster voor in het tabblad. <br/> Een nieuw tabblad zal worden gestart voor het volgende paneel waarvoor tabblad is geselecteerd. Als het tabblad is geselecteerd voor een panel onder het eerste deelvenster, wordt het eerste paneel noodzakelijkerwijs een tabblad.',
    'LBL_TABDEF_COLLAPSE' => 'Inklappen',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Selcteer om dit paneel standaard in te klappen.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Naam',
    'LBL_DROPDOWN_LANGUAGE' => 'Taal',
    'LBL_DROPDOWN_ITEMS' => 'Lijst items',
    'LBL_DROPDOWN_ITEM_NAME' => 'Item Naam',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Weergave Label',
    'LBL_SYNC_TO_DETAILVIEW' => 'Synchroniseren met gedetailleerd overzicht',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Selecteer deze optie om de Editview te synchroniseren met de bijbehorende DetailView. Velden en veld-plaatsing van de Editview zullen automatisch worden gesynchroniseerd en opgeslagen naar de Detailview zodra er op Opslaan of Opslaan&Implementeren wordt gedrukt. Indien u ervoor kiest deze optie aan te zetten is het niet meer mogelijk de detailview zelf aan te passen.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Deze detailview is gesynchroniseerd met de Editview. Velden en veld-plaatsing in deze detailview komen overeen met die van de editview. Wijzigingen aan de detailview kunnen niet worden opgeslagen en geimplementeerd in deze pagina. Wijzigingen moeten worden gemaakt in de editview of de optie tot synchronisatie moet worden uitgezet.',
    'LBL_COPY_FROM_EDITVIEW' => 'Kopieer van overzicht bewerken.',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Waarden zijn verplicht voor zowel de Item naam als de Weergave Label. Om een blanco veld toe te voegen moet u op Toevoegen klikken en beide velden leeg laten.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Sleutel bestaat al in de lijst',
    'LBL_NO_SAVE_ACTION' => 'Kan de opslaan actie niet vinden voor dit overzicht',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:vaststellen locatie: slecht gevormd document',


//RELATIONSHIPS
    'LBL_MODULE' => 'Module',
    'LBL_LHS_MODULE' => 'Primaire Module',
    'LBL_CUSTOM_RELATIONSHIPS' => '* relatie aangemaakt via Studio',
    'LBL_RELATIONSHIPS' => 'Relaties',
    'LBL_RELATIONSHIP_EDIT' => 'Wijzig Relatie',
    'LBL_REL_NAME' => 'Naam',
    'LBL_REL_LABEL' => 'Label',
    'LBL_REL_TYPE' => 'Type',
    'LBL_RHS_MODULE' => 'Gerelateerde Module',
    'LBL_NO_RELS' => 'Aantal Relaties',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Optionele Voorwaarde',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Kolom',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Waarde',
    'LBL_SUBPANEL_FROM' => 'Subpanel van',
    'LBL_RELATIONSHIP_ONLY' => 'Er zullen geen zichtbare elementen voor deze relatie worden gecreëerd aangezien er reeds een bestaande zichtbare relatie tussen deze twee modules is.',
    'LBL_ONETOONE' => 'Eén op Eén',
    'LBL_ONETOMANY' => 'Eén op Veel',
    'LBL_MANYTOONE' => 'Veel op Eén',
    'LBL_MANYTOMANY' => 'Veel op Veel',


//STUDIO QUESTIONS
    'LBL_QUESTION_FUNCTION' => 'Selecteer een functie of component',
    'LBL_QUESTION_MODULE1' => 'Selecteer een module',
    'LBL_QUESTION_EDIT' => 'Selecteer een module om te wijzigen',
    'LBL_QUESTION_LAYOUT' => 'Selecteer een lay-out om te wijzigen',
    'LBL_QUESTION_SUBPANEL' => 'Selecteer een subpaneel om te wijzigen',
    'LBL_QUESTION_SEARCH' => 'Selecteer een zoeklay-out om te wijzigen',
    'LBL_QUESTION_MODULE' => 'Selecteer een component om te wijzigen',
    'LBL_QUESTION_PACKAGE' => 'Selecteer het te wijzigen pakket of maak een nieuwe',
    'LBL_QUESTION_EDITOR' => 'Selecteer een tool',
    'LBL_QUESTION_DROPDOWN' => 'Selecteer de te wijzigen dropdown of maak een nieuwe.',
    'LBL_QUESTION_DASHLET' => 'Selecteer de te wijzigen dashlet lay-out.',
    'LBL_QUESTION_POPUP' => 'Selecteer een popup lay-out om te bewerken.',
//CUSTOM FIELDS
    'LBL_RELATE_TO' => 'Relateer Aan',
    'LBL_NAME' => 'Naam',
    'LBL_LABELS' => 'Etiketten',
    'LBL_MASS_UPDATE' => 'Massaal Wijzigen',
    'LBL_AUDITED' => 'Audit',
    'LBL_CUSTOM_MODULE' => 'Module',
    'LBL_DEFAULT_VALUE' => 'Standaard Waarde',
    'LBL_REQUIRED' => 'Verplicht',
    'LBL_DATA_TYPE' => 'Type',
    'LBL_HCUSTOM' => 'AANGEPAST',
    'LBL_HDEFAULT' => 'STANDAARD',
    'LBL_LANGUAGE' => 'Taal:',
    'LBL_CUSTOM_FIELDS' => '*veld aangemaakt in studio',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Wijzig Labels',
    'LBL_SECTION_PACKAGES' => 'Pakketten',
    'LBL_SECTION_PACKAGE' => 'Pakket',
    'LBL_SECTION_MODULES' => 'Module',
    'LBL_SECTION_PORTAL' => 'Portaal',
    'LBL_SECTION_DROPDOWNS' => 'Dropdowns',
    'LBL_SECTION_PROPERTIES' => 'Eigenschappen',
    'LBL_SECTION_DROPDOWNED' => 'Wijzig Dropdown',
    'LBL_SECTION_HELP' => 'Help',
    'LBL_SECTION_ACTION' => 'Actie',
    'LBL_SECTION_MAIN' => 'Hoofd',
    'LBL_SECTION_EDPANELLABEL' => 'Wijzig Paneel Label',
    'LBL_SECTION_FIELDEDITOR' => 'Wijzig veld',
    'LBL_SECTION_DEPLOY' => 'Implementeren (Deploy)',
    'LBL_SECTION_MODULE' => 'Module',
    'LBL_SECTION_VISIBILITY_EDITOR' => 'Wijzig zichtbaarheid',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Standaard',
    'LBL_HIDDEN' => 'Verborgen',
    'LBL_AVAILABLE' => 'Beschikbaar',
    'LBL_LISTVIEW_DESCRIPTION' => 'Er worden 3 kolommen getoond hieronder. De <b>Standaard</b> kolom bevat de velden die in de listview standaard worden getoond. De <b>Extra</b> kolom bevat de velden waaruit de gebruiker kan nog meer  kan kiezen indien hij de lay-out wil aanpassen.  De <b>Beschikbaar</b> kolom laat de velden zien die door een beheerder kunnen worden toegevoegd aan de standaard of extra kolom.',
    'LBL_LISTVIEW_EDIT' => 'Overzichtslijst bewerken',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Voorvertoning',
    'LBL_MB_RESTORE' => 'Herstellen',
    'LBL_MB_DELETE' => 'Verwijderen',
    'LBL_MB_COMPARE' => 'Vergelijken',
    'LBL_MB_DEFAULT_LAYOUT' => 'Standaard Lay-out',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Toevoegen',
    'LBL_BTN_SAVE' => 'Opslaan',
    'LBL_BTN_SAVE_CHANGES' => 'Wijzigingen Opslaan',
    'LBL_BTN_DONT_SAVE' => 'Wijzigingen Negeren',
    'LBL_BTN_CANCEL' => 'Annuleren',
    'LBL_BTN_CLOSE' => 'Sluiten',
    'LBL_BTN_SAVEPUBLISH' => 'Opslaan & Implementeren (Deploy)',
    'LBL_BTN_NEXT' => 'Volgende',
    'LBL_BTN_BACK' => 'Terug',
    'LBL_BTN_CLONE' => 'Klonen',
    'LBL_BTN_ADDCOLS' => 'Kolommen Toevoegen',
    'LBL_BTN_ADDROWS' => 'Rijen Toevoegen',
    'LBL_BTN_ADDFIELD' => 'Veld Toevoegen',
    'LBL_BTN_ADDDROPDOWN' => 'Dropdown Toevoegen',
    'LBL_BTN_SORT_ASCENDING' => 'Oplopend Sorteren',
    'LBL_BTN_SORT_DESCENDING' => 'Aflopend Sorteren',
    'LBL_BTN_EDLABELS' => 'Wijzig Labels',
    'LBL_BTN_UNDO' => 'Ongedaan maken',
    'LBL_BTN_REDO' => 'Opnieuw doen',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Eigen veld Toevoegen',
    'LBL_BTN_EXPORT' => 'Exporteer Aanpassingen',
    'LBL_BTN_DUPLICATE' => 'Dupliceren',
    'LBL_BTN_PUBLISH' => 'Publiceren',
    'LBL_BTN_DEPLOY' => 'Implementeren',
    'LBL_BTN_EXP' => 'Exporteren',
    'LBL_BTN_DELETE' => 'Verwijderen',
    'LBL_BTN_VIEW_LAYOUTS' => 'Bekijk Lay-outs',
    'LBL_BTN_VIEW_FIELDS' => 'Bekijk Velden',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Bekijk Relaties',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Relatie Toevoegen',
    'LBL_BTN_RENAME_MODULE' => 'Wijzig module naam',
    'LBL_BTN_INSERT' => 'Invoegen',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Fout: Veld bestaat al',
    'ERROR_INVALID_KEY_VALUE' => "Fout: Ongeldige sleutel Waarde: [&#39;]",
    'ERROR_NO_HISTORY' => 'Geen historie bestanden gevonden',
    'ERROR_MINIMUM_FIELDS' => 'Deze lay-out moet tenminste 1 veld bevatten',
    'ERROR_GENERIC_TITLE' => 'Er is een fout opgetreden',
    'ERROR_REQUIRED_FIELDS' => 'Weet u zeker dat u wilt doorgaan? De volgende verplichte velden ontbreken op de lay-out:',
    'ERROR_ARE_YOU_SURE' => 'Weet u zeker dat u wilt doorgaan?',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Pakket Naam:',
    'LBL_MODULE_NAME' => 'Module Naam:',
    'LBL_AUTHOR' => 'Auteur:',
    'LBL_DESCRIPTION' => 'Beschrijving:',
    'LBL_KEY' => 'Sleutel:',
    'LBL_ADD_README' => 'Readme',
    'LBL_LAST_MODIFIED' => 'Laatst gewijzigd:',
    'LBL_NEW_MODULE' => 'Nieuwe Module',
    'LBL_LABEL' => 'Etiket',
    'LBL_LABEL_TITLE' => 'Label',
    'LBL_WIDTH' => 'Breedte',
    'LBL_PACKAGE' => 'Pakket:',
    'LBL_TYPE' => 'Type:',
    'LBL_TEAM_SECURITY' => 'Team Beveiliging',
    'LBL_ASSIGNABLE' => 'Toewijsbaar',
    'LBL_PERSON' => 'Persoon',
    'LBL_COMPANY' => 'Bedrijf',
    'LBL_ISSUE' => 'Probleem',
    'LBL_SALE' => 'Verkoop',
    'LBL_FILE' => 'Bestand',
    'LBL_NAV_TAB' => 'Navigatie Tab',
    'LBL_CREATE' => 'Nieuwe',
    'LBL_LIST' => 'Lijst',
    'LBL_VIEW' => 'Bekijk',
    'LBL_LIST_VIEW' => 'Overzichtslijst',
    'LBL_HISTORY' => 'Bekijk Historie',
    'LBL_RESTORE_DEFAULT' => 'Herstel Standaard',
    'LBL_ACTIVITIES' => 'Activiteiten',
    'LBL_NEW' => 'Nieuw',
    'LBL_TYPE_BASIC' => 'Basis',
    'LBL_TYPE_COMPANY' => 'bedrijf',
    'LBL_TYPE_PERSON' => 'persoon',
    'LBL_TYPE_ISSUE' => 'Probleem',
    'LBL_TYPE_SALE' => 'verkoop',
    'LBL_TYPE_FILE' => 'bestand',
    'LBL_RSUB' => 'Dit is het subpaneel dat zal worden getoond in uw module',
    'LBL_MSUB' => 'Dit is het subpaneel dat uw module aanbiedt voor gerelateerde modules.',
    'LBL_MB_IMPORTABLE' => 'Importeren',

// VISIBILITY EDITOR
    'LBL_VE_VISIBLE' => 'zichtbaar',
    'LBL_VE_HIDDEN' => 'verborgen',
    'LBL_PACKAGE_WAS_DELETED' => '[[pakket]] is verwijderd',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Exporteer Aanpassingen',
    'LBL_EC_NAME' => 'Pakket Naam:',
    'LBL_EC_AUTHOR' => 'Auteur:',
    'LBL_EC_DESCRIPTION' => 'Beschrijving:',
    'LBL_EC_KEY' => 'Sleutel:',
    'LBL_EC_CHECKERROR' => 'Selecteer een module.',
    'LBL_EC_CUSTOMFIELD' => 'aangepaste veld(en)',
    'LBL_EC_CUSTOMLAYOUT' => 'aangepaste lay-out(s)',
    'LBL_EC_NOCUSTOM' => 'Er zijn geen modules aangepast.',
    'LBL_EC_EMPTYCUSTOM' => 'heeft geen aanpassingen.',
    'LBL_EC_EXPORTBTN' => 'Exporteren',
    'LBL_MODULE_DEPLOYED' => 'Module is geïmplementeerd.',
    'LBL_UNDEFINED' => 'niet gedefinieerd',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Kon geen data ophalen.',
    'LBL_AJAX_TIME_DEPENDENT' => 'Een tijdsafhankelijke actie is bezig. Even wachten en opnieuw proberen in een paar seconden.',
    'LBL_AJAX_LOADING' => 'Laden ...',
    'LBL_AJAX_DELETING' => 'Verwijderen ...',
    'LBL_AJAX_BUILDPROGRESS' => 'Bezig met opbouwen ...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Bezig met implementeren...',
    'LBL_AJAX_FIELD_EXISTS' => 'De veldnaam bestaat al. Geef een andere veldnaam op.',

    'LBL_AJAX_RESPONSE_TITLE' => 'Resultaat',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Deze actie is met succes uitgevoerd',
    'LBL_AJAX_LOADING_TITLE' => 'Bezig met uitvoeren...',
    'LBL_AJAX_LOADING_MESSAGE' => 'Bezig met laden... Een ogenblik geduld a.u.b.',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Weet u zeker dat u dit pakket wil verwijderen? Alle bestanden behorende bij dit pakket zullen permanent worden verwijderd.',
    'LBL_JS_REMOVE_MODULE' => 'Weet u zeker dat u deze module wil verwijderen? Alle bestanden behorende bij deze module zullen permanent worden verwijderd.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Wijzigingen doorgevoerd met de Studio worden overschreven bij een nieuwe implementatie van deze module. Weet u zeker dat u door wilt gaan?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Pakket implementeren.',
    'LBL_JS_VALIDATE_NAME' => 'Naam - Moet alfanumeriek zijn, zonder spaties en beginnen met een letter.',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Deze Pakket naam bestaat reeds',
    'LBL_JS_VALIDATE_KEY' => 'Sleutel - Moet alfanumeriek zijn zonder spaties en beginnen met een letter',
    'LBL_JS_VALIDATE_LABEL' => 'Voer een label in dat als weergavenaam zal worden gebruikt voor deze module',
    'LBL_JS_VALIDATE_TYPE' => 'Selecteer het type module u wenst op te bouwen uit de bovenstaande lijst',
    'LBL_JS_VALIDATE_REL_NAME' => 'Naam - Moet alfanumeriek zijn, zonder spaties',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Label - voer een label op dat zal worden weergegeven boven het subpaneel',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts. \n\nDo you wish to continue?',
    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Weet u zeker dat u deze relatie wenst te verwijderen?',
    'LBL_CONFIRM_RELATIONSHIP_DEPLOY' => 'Dit maakt deze relatie permanent. Weet u zeker dat u deze relatie wil implementeren?',
    'LBL_CONFIRM_DONT_SAVE' => 'Wijzigingen zijn aangebracht sinds u voor het laatst hebt opgeslagen, wilt u nu opslaan?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Wijzigingen opslaan?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Data gaat mogelijk verloren en kan niet hersteld worden, weet u zeker dat u door wilt gaan?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Selecteer het juiste datatype op basis van het soort gegevens die zullen worden ingevoerd in dit veld.',
    'LBL_POPHELP_SEARCHABLE' => 'Selecteer het gewicht niveau voor dit veld. < br / > velden met een hoger gewicht niveau zullen meer gewicht gegeven worden wanneer een zoekactie wordt uitgevoerd. < br / > Wanneer een zoekopdracht wordt uitgevoerd, overeenkomende records met velden met een groter gewicht wordt weergegeven hoger in de zoek resultaten. < br / > Als u het niveau van het gewicht voor een veld van het ene niveau naar het andere wilt wijzigen, voert u een index van het systeem in om de wijziging door te voeren. <br/> Verzeker u zelf: Selecteer verwijderen van de bestaande gegevens op het moment dat een nieuwe index van het systeem wordt uitgevoerd.',
    'LBL_POPHELP_IMPORTABLE' => '<b>  Ja </ b>: Het veld zal worden opgenomen in een import <b> Nee </ b>:. Het veld zal niet worden opgenomen in een import <b> verplicht </. b>: Dit veld moet verplicht een waarde hebben bij een import.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Voer een nummer voor de breedte in, gemeten in pixels.<br />De te uploaden afbeelding wordt naar deze breedte herschaald.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Voer een nummer voor de hoogte in, gemeten in pixels.<br />De te uploaden afbeelding wordt naar deze hoogte herschaald.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Ingeschakeld</b>:Het veld wordt getoond in de Duplicaten Samenvoegen Functie, maar kan niet als filter worden gebruikt bij de Zoek Duplicaten Functie.<br><b>Uitgeschakeld</b>: Veld wordt niet getoond en kan ook niet als filter gebruikt worden.<br><b>In Filter</b>: Veld wordt getoond bij Duplicaten Samenvoegen Functie en kan ook als filter worden gebruikt bij het vinden van duplicaten.<br><b>Alleen Filter</b>: Het veld is niet zichtbaar in Duplicaten Samenvoegen, maar kan wel als filter worden gebruikt bij het Vinden van Duplicaten<br><b>Standaard geselecteerd filter</b>: Het veld zal standaard worden gebruikt als filter conditie in de Vind Duplicaten Pagina.En is zichtbaar in Samenvoegen Duplicaten'
,
    'LBL_POPHELP_GLOBAL_SEARCH' => 'Kies om dit veld te gebruiken bij het zoeken naar records in het globale zoeken in deze module.',
//Revert Module labels
    'LBL_RESET' => 'Opnieuw instellen',
    'LBL_RESET_MODULE' => 'Reset de Module',
    'LBL_REMOVE_CUSTOM' => 'Verwijder Customisaties',
    'LBL_CLEAR_RELATIONSHIPS' => 'Verwijder Relaties',
    'LBL_RESET_LABELS' => 'Reset de Labels',
    'LBL_RESET_LAYOUTS' => 'Reset de Lay-outs',
    'LBL_REMOVE_FIELDS' => 'Verwijder Custom Velden',
    'LBL_CLEAR_EXTENSIONS' => 'Verwijder Extensies',
    'LBL_HISTORY_TIMESTAMP' => 'Tijdstempel',
    'LBL_HISTORY_TITLE' => 'Historie',


    'LBL_ADD_LAYOUT' => 'Aanmaken layout',
    'LBL_ADD_LAYOUTS' => 'Aanmaken layout',
    'LBL_QUESTION_ADD_LAYOUT' => 'Selecteer een groepslayout om aantemaken',
    'LBL_REMOVE_LAYOUT' => 'Verwijder een groepslayout',

    'LBL_SECURITYGROUP' => 'Veiligheidsgroep:',
    'LBL_COPY_FROM' => 'Kopieer van:',
    'LBL_ADDLAYOUTDONE' => 'Layout opgeslagen',
    'LBL_REMOVELAYOUTDONE' => 'Layout verwijdert',
    'LBL_REMOVE_CONFIRM' => 'Bent u er zeker van?',

    'fieldTypes' => array(
        'varchar' => 'Tekstveld',
        'int' => 'Integer (geheel getal)',
        'float' => 'Float',
        'bool' => 'Selecteer box',
        'enum' => 'Dropdown',
        'dynamicenum' => 'Dynamisch Drop-Down',
        'multienum' => 'MultiSelect',
        'date' => 'Datum',
        'phone' => 'Telefoonnummer',
        'currency' => 'Valuta',
        'html' => 'HTML',
        'radioenum' => 'Radio',
        'relate' => 'Relateren',
        'address' => 'Adres',
        'text' => 'Tekstblok',
        'url' => 'Link',
        'iframe' => 'IFrame',
        'datetimecombo' => 'DatumTijd',
        'decimal' => 'Decimaal',
        'image' => 'Afbeelding',
    ),
    'labelTypes' => array(
        "" => "[-blanco-]",
        "all" => "Alles",
    ),

    'parent' => 'Flex Relate',

    'LBL_ILLEGAL_FIELD_VALUE' => "Dropdown sleutel mag geen aanhalingstekens bevatten.",
    'LBL_CONFIRM_SAVE_DROPDOWN' => "U staat op het punt een waarde uit de dropdownlijst te verwijderen.  Dat heeft als gevolg dat deze waarde in geen enkel veld dat verwijst naar deze dropdown nog zichtbaar zal zijn. <br />Weet u zeker dat u wilt doorgaan?",
    'LBL_POPHELP_VALIDATE_US_PHONE' => 'Select to validate this field for the entry of a 10-digit<br> .phone number, with allowance for the country code 1, and<br> to apply a U.S. format to the phone number when the record<br> is saved. The following format will be applied: (xxx) xxx-xxxx.',
    'LBL_ALL_MODULES' => 'Alle modules',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (related {1} ID)',
);

