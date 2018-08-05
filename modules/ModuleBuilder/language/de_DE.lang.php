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
    'LBL_LOADING' => 'Lade...' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Optionen verbergen' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Löschen' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Powered by SugarCRM' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Beachten Sie beim Wählen der <b>Art</b> des zu erstellenden Moduls, dass Sie die Feldtypen, die innerhalb des Moduls vorhanden sein sollen, nicht vergessen.<br/><br/>Jede Modulvorlage enthält eine Reihe von Feldern, die dem Titel der Modulart entspricht. <br/><br/>Grundlage</b> - Bietet Grundlagenfelder, die in den Standardmodulen auftreten, wie z. B. der Name, Zugewiesen an, Team, Erstellungsdatum und Angabenfelder. <br/><br/> <b>Firma</b> - Bietet organisationsspezifische Felder, wie z. B. Firmenname, Branche und Rechnungsadresse. Mit dieser Vorlage erstellen Sie Module, die dem Standardfirmen Modul ähneln. <br/><br/> <b>Person</b> - Bietet spezifische individuelle Felder, wie z. B. Anrede, Titel, Name, Adresse und Telefonnummer. Mit dieser Vorlage erstellen Sie Module, die dem Standardkontakte und  -interessenten Modul ähneln. <br/><br/> <b>Problem</b> - Bietet fall- und fehlerspezifische Felder, wie z. B. Nummer, Status, Dringlichkeit und Beschreibung. Mit dieser Vorlage erstellen Sie Module, die dem Standardfälle und -fehler Modul ähneln. <br/><br/> Hinweis: Nach der Modulerstellung können Sie sowohl das Label der von der Vorlage bereitgestellten Felder bearbeiten, als auch benutzerdefinierte Felder erstellen und zum Modul-Layout hinzufügen.',
            'modify' => 'Auf der linken Seite werden drei Spalten angezeigt. Die SpalteStandard" enthält Standardfelder der Listenansicht, die SpalteVerfügbar" enthält Felder, mit denen Benutzer  eine personalisierte Listenansicht erstellen können, die SpalteVersteckt" enthält Felder, die für Sie als Administrator verfügbar sind, um sie entweder zur SpalteStandard"oderVerfügbar" hinzuzufügen."',
            'name' => 'Der <b>Name</b> des Pakets wird in “Module verwalten“ angezeigt, nachdem das Paket in Studio hochgeladen wurde.',
            'author' => 'Der <b>Autor</b> ist der Ersteller des Pakets. Es kann sich um eine Person oder ein Unternehmen handeln.<br><br>Der Autor wird unter “Module verwalten” angezeigt, nachdem das Paket für die Installation in Studio hochgeladen wurde."',
            'description' => 'Die <b>Beschreibung</b> des Pakets wird unter “Module verwalten” angezeigt, nachdem das Paket für die Installation in Studio hochgeladen wurde."',
            'publishbtn' => 'Klicken Sie auf <b>Veröffentlichen</b> , um alle Daten zu speichern und um eine .zip Datei zu erstellen, die eine installierbare Version des Pakets ist.<br><br>Verwenden Sie den Punkt <b>Module verwalten</b> , um die .zip Datei hochzuladen und das Paket zu installieren.',
            'deploybtn' => 'Klicken Sie auf <b>Einspielen</b> um alle eingegebenen Daten zu speichern und um das Paket inklusive aller Module in der aktuellen Instanz zu installieren.',
            'duplicatebtn' => 'Klicken Sie auf <b>Duplizieren</b> , um den Inhalt des Pakets auf ein neues Paket zu übertragen und dieses anzuzeigen <br/><br/>Für das neue Paket wird automatisch ein Name erzeugt, indem eine Nummer an den Namen des Pakets aus dem es erzeugt wurde, angefügt wird.',
            'exportbtn' => 'Klicken Sie auf <b>Export</b> , um eine .zip Datei für das Paket zu erstellen, das Ihre Anpassungen enthält.<br><br> Die erzeugte Datei ist keine installierbare Version des Pakets.<br><br>Benutzen Sie den Punkt <b>Module verwalten</b> , um die .zip Datei zu importieren und das Paket inklusive der Anpassungen in \'Module verwalten\' sichtbar zu machen.',
            'deletebtn' => 'Klicken Sie auf <b>Löschen</b> , um dieses Modul zu löschen.',
            'savebtn' => 'Durch Klicken auf <b>Speichern</b> speichern und aktivieren Sie alle Änderungen.',
            'existing_module' => 'Klicken Sie auf das <b>Modul</b> Symbol, um die Eigenschaften zu bearbeiten und um die mit dem Modul verbundenen Felder, Beziehungen und Layouts anzupassen.',
            'new_module' => 'Klicken Sie auf <b>Neues Modul</b> , um ein neues Modul für dieses Paket zu erstellen.',
            'key' => 'Dieser 5stellige alphanumerische <b>Schlüssel</b> wird allen Verzeichnissen, Klassennamen und Datenbanknamen in allen Modulen des aktuellen Pakets vorangestellt <br><br>Auf diese Art und Weise soll die Eindeutigkeit von Tabellennamen erreicht werden.',
            'readme' => 'Klicken Sie hier, um einen <b>Liesmich</b> Text für dieses Paket zu erstellen.<br><br>Dieser Text ist zum Zeitpunkt der Installation verfügbar.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Provide a <b>Name</b> for the module. The <b>Label</b> that you provide will appear in the navigation tab. <br/><br/>Choose to display a navigation tab for the module by checking the <b>Navigation Tab</b> checkbox.<br/><br/>Then choose the type of module you would like to create. <br/><br/>Select a template type. Each template contains a specific set of fields, as well as pre-defined layouts, to use as a basis for your module. <br/><br/>Click <b>Save</b> to create the module.',
            'modify' => 'You can change the module properties or customize the <b>Fields</b>, <b>Relationships</b> and <b>Layouts</b> related to the module.',
            'importable' => 'Wenn Sie das  <b>Importierbar</b> Kästchen markieren, wird der Import für das Modul ermöglicht.<br><br>Ein Link zum Import Assistenten erscheint im Schnellmenü des Moduls. Dieser erleichtert den Import von externen Daten in das neue Modul.',
            'team_security' => 'Das Markieren des <b>Teamkontrolle</b> Kontrollkästchens aktiviert die Teamkontrolle für dieses Modul.<br/><br/>Wenn die Teamkontrolle aktiviert ist, wird das Team Auswahlfeld in den Datensätzen sichtbar.',
            'reportable' => 'Durch das Markieren dieser Option können Berichte für dieses Modul erstellt werden.',
            'assignable' => 'Wenn dieses Kästchen markiert wird, können Datensätze bestimmten Benutzern zugewiesen werden.',
            'has_tab' => 'Das Markieren von <b>Navigations Tab</b> erstellt einen Navigationsreiter für das Modul.',
            'acl' => 'Das Markieren dieser Option aktiviert die Zugangskontrolle für dieses Modul, inklusive der Kontrolle auf Feldebene.',
            'studio' => 'Wenn dieses Kästchen markiert ist, können Administratoren dieses Modul im Studio anpassen.',
            'audit' => 'Wenn Sie dieses Kästchen markieren, wird die Audit Funktion für dieses Modul aktiviert.Änderungen von definierten Feldern werden für eine spätere Kontrolle aufgezeichnet.',
            'viewfieldsbtn' => 'Klicken Sie auf <b>Felder anzeigen</b> , um die mit diesem Modul verbundenen Felder zu sehen, und um eigene Felder zu erstellen oder zu ändern.',
            'viewrelsbtn' => 'Klicken Sie auf <b>Beziehungen anzeigen</b> , um die mit diesem Modul verbundenen Beziehungen zu sehen, und um neue Beziehungen zu erstellen.',
            'viewlayoutsbtn' => 'Klicken Sie auf <b>Layouts bearbeiten</b> , um die Layouts für das Modul anzusehen und die Feldanordnung innerhalb des Layouts anzupassen.',
            'duplicatebtn' => 'Click <b>Duplicate</b> to copy the properties of the module into a new module and to display the new module. <br/><br/>For the new module, a new name will be generated automatically by appending a number to the end of the name of the module used to create the new one.',
            'deletebtn' => 'Klick <b>Löschen</b> um dieses Modul zu löschen.',
            'name' => 'This is the <b>Name</b> of the current module.<br/><br/>The name must be alphanumeric and must start with a letter and contain no spaces. (Example: HR_Management)',
            'label' => 'Das ist die <b>Bezeichnung</b> , die im Navigationsreiter des Moduls erscheint.',
            'savebtn' => 'Klicke <b>Speichern</b> um alle eingegebenen Daten im Modul zu speichern.',
            'type_basic' => 'Die <b>Basis</b> Vorlage liefert typische Standardfelder wie Name, Zugewiesen an, Team, Erstellungsdatum und Beschreibung.',
            'type_company' => 'Die <b>Unternehmen</b> Vorlage liefert organisationstypische Felder wie z.B. Firmenname, Branche oder Rechnungsadresse.<br/><br/>Verwenden Sie diese Vorlage, um ein Modul zu erstellen, das dem Standardmodul “Firmen“ ähnlich ist.',
            'type_issue' => 'Die <b>Problem</b> Vorlage liefert Felder für Störfälle oder Supportanfragen mit Feldern wie z.B. Nummer, Status, Priorität und Beschreibung.<br/><br/>Verwenden Sie diese Vorlage, um Module zu erstellen, die dem Standardmodulen “Fälle“ und “Fehler“ ähnlich sind.',
            'type_person' => 'Die <b>Person</b> Vorlage stellt Felder für Individuen zur Verfügung – z.B. Anrede, Titel, Name, Adresse oder Telefonnummer. <br/><br/>Verwenden Sie diese Vorlage für Module ähnlich den Interessenten bzw. Kontaktpersonen.',
            'type_sale' => 'Die <b>Verkauf</b> Vorlage liefert typische Felder wie z.B. Quelle, Verkaufsphase, Betrag und Wahrscheinlichkeit.<br/><br/>Verwenden Sie diese Vorlage, um ein Modul zu erstellen, das dem Standardmodul /“Verkaufschancen/“ ähnlich ist.',
            'type_file' => 'Die <b>Datei</b> Vorlage liefert typische Felder für Dateien wie z.B. Dateiname, Dokumenttyp oder Veröffentlichungsdatum..<br/><br/>Verwenden Sie diese Vorlage, um ein Modul zu erstellen, das dem Standardmodul “Dokumente“ ähnlich ist.',

        ),
        'dropdowns' => array(
            'default' => 'Auf der linken Seite werden zwei Spalten angezeigt. In der rechten Spalte, Layout bzw. Layoutvorschau genannt, ändern Sie das Layout des Moduls. Die linke Spalte, Toolbox genannt, enthält nützliche Elemente und Werkzeuge für das Bearbeiten des Moduls. <br/><br/>Wenn die Arbeitsfläche “Aktuelles Layout“ anzeigt, dann arbeiten Sie mit einer vom Model erstellten Kopie des Layouts.<br/><br/>Wird “Layout Vorschau“ angezeigt, arbeiten Sie mit einer durch Klick auf “”Speichern”” erstellten Kopie, die unter Umständen nicht mehr der aktuell von Benutzern verwendeten Version entspricht.',
            'editdropdown' => 'Auswahlmenüs können für Standard oder angepasste Auswahlfelder in allen Modulen verwendet werden.<br><br>Vergeben Sie einen <b>Namen</b> für das Auswahlmenü.<br><br>Wenn Sprachpakete installiert sind, können Sie die <b>Sprache</b> für die Listeneinträge auswählen.<br><br>Im Feld  <b>Elementname</b> geben Sie einen Namen für den Eintrag an. Diese Label ist für Benutzer nicht sichtbar.<br><br>Im Feld <b>AnzeigeLabel</b> geben Sie einen für Benutzer sichtbaren Namen an.<br><br>Nach beiden Eingaben klicken Sie auf  <b>Hinzufügen</b> um das Element zum Auswahlmenü hinzuzufügen.<br><br>Um die Listeneinträge neu zu ordnen, ziehen sie ein Element in die gewünschte Position.<br><br>Um den Anzeigenamen eines Elements zu ändern, klicken Sie auf das <b>Bearbeiten</b> Symbol und geben ein neues Label ein. Um ein Element von des Auswahlmenüs zu löschen klicken Sie auf das <b>Löschen Icon</b>.<br><br>Um eine Änderung rückgängig zu machen klicken Sie auf <b>Rückgängig</b>. Um eine Änderung zurückzuholen die rückgängig gemacht wurde, klicken Sie auf <b>Wiederholen</b>.<br><br>Klicken Sie auf <b>Speichern</b> um das Auswahlmenü zu speichern.',

        ),
        'subPanelEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
        ,
            'savebtn' => 'Click <b>Save & Deploy</b> to save changes you made and to make them active within the module.',
            'historyBtn' => 'Klicken Sie auf <b>Verlaufansicht</b> um ein zuvor gespeichertes Layout aus dem Verlauf aufzurufen und wiederherzustellen.<br><br><b>Wiederherstellen</b> innerhalb der <b>Verlaufansicht</b> stellt die Feldplatzierung inneralb zuvor gespeicherten Layouts wieder her. Um die Bezeichungen der Felder zu ändern, klicken Sie auf das jeweils neben dem Feld stehende Bearbeiten Symbol.',
            'historyDefault' => 'Klicken Sie auf <b>Standardeinstellungen wiederherstellen</b> , um die Ansicht des ursprünglichen Layouts wiederherzustellen.<br><br><b>Standardeinstellungen wiederherstellen</b> stellt die Feldplatzierung nur inneralb des originalen Layouts wieder her. Um die Labels der Felder zu ändern, klicken Sie auf das jeweils neben dem Feld stehende Bearbeiten Symbol.',
            'Hidden' => 'Ausgeblendete Felder können von Nutzern nicht in Listenansichten verwendet werden.',
            'Default' => 'Benutzern ohne individuelle Listenansicht wird die Standardansicht angezeigt.',

        ),
        'listViewEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
        ,
            'savebtn' => 'Click <b>Save & Deploy</b> to save changes you made and to make them active within the module.',
            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
            'Hidden' => '<b>Versteckte</b> Felder, für Benutzer nicht Sichtbar',
            'Available' => '<b>Verfügbare</b> Felder werden nicht angezeigt, können aber vom Benutzer hinzugefügt werden.',
            'Default' => '<b>Standard</b> Felder werden in Listenansichten angezeigt die nicht vom Benutzer angepasst wurden.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
        ,
            'savebtn' => 'Click <b>Save & Deploy</b> to save changes you made and to make them active within the module.',
            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
            'Hidden' => '<b>Versteckte</b> Felder, für Benutzer nicht Sichtbar',
            'Default' => '<b>Standard</b> Felder werden in Listenansichten angezeigt die nicht vom Benutzer angepasst wurden.'
        ),
        'searchViewEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
        ,
            'savebtn' => 'Clicking <b>Save & Deploy</b> will save all changes and make them active',
            'Hidden' => '<b>Hidden</b> fields do not appear in the Search.',
            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
            'Default' => '<b>Default</b> fields appear in the Search.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'Der <b>Layout</b> Bereich enthält die Felder, die derzeit in der <b>Detailansicht</b> sichtbar sind.<br/><br/>Die <b>Toolbox</b> enthält den <b>Papierkorb</b> und jene Felder und Elemente, die zum Layout hinzugefügt werden können.<br><br>Ändern Sie das Layout, indem Sie Elemente zwischen der <b>Toolbox</b> und dem <b>Layout</b> bzw. innerhalb des Layouts in Position ziehen.<br><br>Um ein Feld aus dem Layout zu entfernen, ziehen Sie es in den <b>Papierkorb</b>. Das Feld erscheint dann zur weiteren Verwendung in der Toolbox auf.'
        ,
            'defaultquickcreate' => 'Der <b>Layoutbereich</b> enthält jene Felder, die momentan im <b>Schnellerfassungsformular</b> angezeigt werden.<br><br>Das Schnellerfassungsformular erscheint in der Subleiste für Module, sobald Sie auf Erstellen klicken.<br/><br/>Die <b>Toolbox</b> enthält den <b>Papierkorb</b> und jene Felder und Elemente, die zum Layout hinzugefügt werden können.<br><br>Sie können das Layout  ändern, indem Sie Elemente zwischen der <b>Toolbox</b> und dem <b>Layout</b> bzw. innerhalb des Layouts, mit Hilfe der Drag-and-Drop Funktion verschieben.<br><br>Ziehen Sie Felder aus dem Layout in den <b>Papierkorb</b>, um diese zu löschen. Das Feld steht danach in der Toolbox zur Verfügung, um dem Layout hinzugefügt zu werden.'
        ,
            //this defualt will be used for edit view
            'default' => 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>EditView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
        ,
            'saveBtn' => 'Wenn Sie auf diese Schaltfläche drücken, wird das Layout gespeichert und Ihre Änderungen gesichert. Wenn Sie später weiterarbeiten, beginnen Sie an dieser Stelle. Allerdings wird Ihr Layout nicht von anderen gesehen, bevor Sie auf “Speichern und Veröffentlichen“ drücken.',
            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
            'publishBtn' => 'Klicken Sie auf diese Schaltfläche, um das Layout einzuspielen. Das Layout wird sofort für andere Benutzer verfügbar.',
            'toolbox' => 'Die Toolbox enthält viele nützliche Funktionen zur Bearbeitung von Layouts – einen Papierkorb, zusätzliche Elemente sowie alle verfügbaren Felder. Alle können mit der Drag-and-Drop-Funktion bearbeitet werden.',
            'panels' => 'Diese Ansicht zeigt, wie Ihr Layout nach der Anwendung für den Benutzer angezeigt wird.<br/><br/>Sie können Elemente wie z.B. Felder oder Zeilen per Drag-and-Drop Funktion positionieren"',
            'delete' => 'Ziehen Sie ein beliebiges Element hierher, um es aus dem Layout zu entfernen.',
            'property' => 'Bearbeiten Sie die Bezeichnung für dieses Feld. <br/>Die <b>Reiter-Reihenfolge</b> definiert, in welcher Reihenfolge der Reiter zwischen Feldern wechselt.',
        ),
        'fieldsEditor' => array(
            'default' => 'The <b>Fields</b> that are available for the module are listed here by Field Name.<br><br>Custom fields created for the module appear above the fields that are available for the module by default.<br><br>To edit a field, click the <b>Field Name</b>.<br/><br/>To create a new field, click <b>Add Field</b>.',
            'mbDefault' => 'Die für dieses Modul verfügbaren <b>Felder</b> sind hier nach Feldnamen sortiert angeführt.<br><br>Klicken Sie auf den Feldnamen, um die Feldeigenschaften zu bearbeiten.<br><br>Um ein neues Feld zu erstellen, klicken Sie auf <b>Feld hinzufügen</b>. Die Bezeichnung sowie andere Feldeigenschaften können später durch klicken auf den Feldnamen bearbeitet werden.<br><br>Nachdem das Modul eingespielt wurde, werden die unterModule Erstellen" neu erstellten Felder im Studio als Standardfelder angesehen."',
            'addField' => 'Wählen Sie einen <b>Datentyp</b> für das neue Feld. Von diesem Datentyp ist abhängig, welche Zeichen in das Feld eingegeben werden können. Zum Beispiel können in ein Feld vom Typ Integer nur ganze Zahlen eingegeben werden.<br><br> Teilen Sie dem Feld einen <b>Namen</b> zu. Der Name muss alphanumerisch sein und darf keine Leerzeichen enthalten. Unterstriche sind erlaubt.<br><br> Der <b>Anzeigename</b> ist jene Bezeichnung, die für die Felder in den Masken erscheint. Die <b>SystemLabel</b> bezeichnet das Feld im Code bzw. in der Datenbank.<br><br> Vom Datentyp abhängig können einige oder alle der folgenden Eigenschaften bestimmt werden:<br><br> <b>Hilfetext</b> erscheint vorübergehend, wenn ein Benutzer die Maus über das Feld bewegt und kann angewendet werden, um auf eine bestimmte Eingabe hinzuweisen.<br><br> <b>Kommentar</b> Wird nur im Studio oder unter Module erstellen angezeigt und dient nur für Administratorennotizen.<br><br> Der <b>Standardwert</b> erscheint als Wert im Feld. Benutzer können diesen verwenden oder einen neuen Wert eintragen.<br><br>Wenn Sie <b>Massenänderung</b> ankreuzen, können Sie dieses Feld über Massenänderung bearbeiten.<br><br>Der <b>Max. Größe</b> Parameter bestimmt, wie viele Zeichen für das Feld vorgesehen sind. <br><br>Benutzen Sie <b>Erforderliches Feld</b> , um die Eingabe in diesem Feld zwingend zu machen. Der Eintrag kann ohne Wert in diesem Feld nicht gesichert werden. <br><br>Wählen Sie <b>Berichtspflichtig</b> , um dieses Feld später in Berichten und Abfragen benutzen zu können. <br><br>Wählen Sie das <b>Audit</b> Kästchen, um Änderungen dieses Feldes später nachvollziehen zu können.<br><br>Wählen Sie eine Option für das Feld <b>Importierbar</b>, um den Import zu genehmigen, zu verbieten oder zwingend zu machen.<br><br>Wählen Sie eine Option in <b>Duplikate zusammenführen</b> , um die Duplikatssuche und das Zusammenführen zu genehmigen oder nicht. <br><br>Für gewisse Datentypen können noch zusätzliche Eigenschaften definiert werden.',
            'editField' => 'Die Eigenschaften dieses Feldes können benutzerdefiniert werden.<br><br>Klicken Sie auf <b>Vervielfältigen</b> , um ein neues Feld mit denselben Eigenschaften zu erstellen.',
            'mbeditField' => 'Die <b>FeldLabel</b> eines Vorlagefeldes kann benutzerdefiniert werden. Andere Eigenschaften können jedoch nicht verändert werden.<br><br>Klicken Sie auf <b>Vervielfältigen</b> , um ein neues Feld zu erstellen, das über dieselben Eigenschaften verfügt.<br><br>Um ein Standardfeld komplett aus einem Modul zu entfernen, löschen Sie es einfach aus dem zugehörigen <b>Layout</b>.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Export customizations made in Studio by creating packages that can be uploaded into another SuiteCRM instance through the <b>Module Loader</b>.<br><br>  First, provide a <b>Package Name</b>.  You can provide <b>Author</b> and <b>Description</b> information for package as well.<br><br>Select the module(s) that contain the customizations you wish to export. Only modules containing customizations will appear for you to select.<br><br>Then click <b>Export</b> to create a .zip file for the package containing the customizations.',
            'exportCustomBtn' => 'Klicken Sie <b>Export</b>, um eine .zip-Datei für das Paket mit den Benutzerdefinitionen zu erstellen, das exportiert werden soll."',
            'name' => 'This is the <b>Name</b> of the package. This name will be displayed during installation.',
            'author' => 'This is the <b>Author</b> that is displayed during installation as the name of the entity that created the package. The Author can be either an individual or a company.',
            'description' => 'Die <b>Beschreibung</b> des Pakets wird unter “Module verwalten” angezeigt, nachdem das Paket für die Installation in Studio hochgeladen wurde."',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Willkommen im Bereich <b>Entwicklerwerkzeuge</b1>.<br/><br/>Benutzen Sie die Werkzeuge in diesem Bereich, um Standardmodule und benutzerdefinierte Module/ Felder zu erstellen bzw. zu verwalten.',
            'studioBtn' => 'Passen Sie mit <b>Studio</b> installierte Module an, indem Sie die Felderanordnung ändern, aus verfügbaren Feldern auswählen oder neue Datenfelder erstellen.',
            'mbBtn' => 'Verwenden Sie <b>Module erstellen</b>, um neue Module zu erstellen.',
            'sugarPortalBtn' => 'Use <b>SuiteCRM Portal Editor</b> to manage and customize the SuiteCRM Portal.',
            'dropDownEditorBtn' => 'Verwenden Sie den <b>Auswahlmenü Editor</b> , um globale Auswahlmenüs für Auswahlmenüfelder zu erstellen und zu bearbeiten.',
            'appBtn' => 'Verwenden Sie den Anwendungsmodus, um verschiedene Parameter des Programms zu verändern, zum Beispiel die Anzahl an TPS Berichten auf der Startseite.',
            'backBtn' => 'Zurück zum vorherigen Schritt.',
            'studioHelp' => 'Benutzen Sie das <b>Studio</b>, um installierte Module anzupassen.',
            'moduleBtn' => 'Hier klicken, um das Modul zu bearbeiten.',
            'moduleHelp' => 'Wählen Sie die Modulkomponente, die Sie bearbeiten möchten.',
            'fieldsBtn' => 'Bearbeiten Sie, welche Informationen im Modul gespeichert werden, indem Sie die<b>Felder</b>im Modul kontrollieren.,<br/><br/>Sie können hier benutzerdefinierte Felder erstellen und ändern.',
            'labelsBtn' => 'Bearbeiten Sie die <b>Feld-Labels</b> die für Werte dieses Moduls angezeigt werden sollen.',
            'relationshipsBtn' => 'Eine neue <b>Beziehung</b> für das Modul erstellen oder eine bereits existierende ansehen.',
            'layoutsBtn' => 'Benutzerdefinieren Sie die<b>Layouts</b> der Bearbeitungs-, Detail-, Listen- und Suchansichten an.',
            'subpanelBtn' => 'Bearbeiten Sie, welche Information in den Subpanels dieses Moduls gezeigt wird',
            'portalBtn' => 'Customize the module <b>Layouts</b> that appear in the <b>SuiteCRM Portal</b>.',
            'layoutsHelp' => 'Wählen Sie ein <b> Layout zum Bearbeiten</b>.<br/<br/>Um das Layout mit Eingabefeldern zu ändern, klicken Sie auf <b>Bearbeitungsansicht</b>.<br/><br/>Um das Layout mit Daten zu ändern, klicken Sie auf  <b>Detailansicht</b>.<br/><br/>Um die Spalten zu ändern, die in der Standardliste erscheinen, klicken Sie auf <b>Listenansicht</b>.<br/><br/>Um standardmäßige und erweiterte Suchformulare zu ändern, klicken Sie auf <b>Suche</b>.',
            'subpanelHelp' => 'Wählen Sie ein <b>Subpanel</b> zum Bearbeiten.',
            'newPackage' => 'Klicken Sie auf <b>Neues Paket</b>, um ein neues Paket zu erstellen.',
            'exportBtn' => 'Klicken Sie auf <b>Benutzerdefinitionen exportieren</b>, um ein Paket mit  in Studio erstellten Benutzerdefinitionen für bestimmte Module zu erstellen.',
            'mbHelp' => '<b>Willkommen beim Module erstellen".</b><br/><br/>Mit der Funktion <b>"Module erstellen"</b> erstellen Sie neue Pakete, die benutzerdefinierte Module enthalten – basierend auf standardmäßigen oder personalisierten Objekten.<br/><br/>Klicken Sie auf <b>Neues Paket</b>, um ein neues Paket zu erstellen, oder wählen Sie ein Paket zum Bearbeiten aus.<br/><br/>Ein <b>Paket</b> ist ein Speicherort für alle benutzerdefinierten Module, die Teil eines Projekts sind . Das Paket kann ein oder mehrere benutzerdefinierte Module enthalten, die untereinander oder mit existierenden Modulen verbunden sind.<br/><br/>Zum Beispiel könnten Sie ein eigenes Modul erstellen, das mit dem standardmäßigen Account-Modul verknüpft ist. Oder Sie erstellen ein Paket mit mehreren Modulen, die als Projekt zusammengehören, und untereinander sowie mit bereits bestehenden Modulen der Anwendung verbunden sind."',
            'viewBtnEditView' => 'Benutzerdefinieren Sie das Layout der <b>Bearbeitungsansicht</b> .<br><br>Die Bearbeitungsansicht ist das Formular, das die Eingabefelder für  die Datenerfassung durch den Benutzer enthält.',
            'viewBtnDetailView' => 'Benutzerdefinieren des <b>Detailansicht</b> Layouts.<br><br>Die Detailansicht stellt von den Benutzern erfasste Felddaten dar.',
            'viewBtnDashlet' => 'Customize the module\'s <b>SuiteCRM Dashlet</b>, including the SuiteCRM Dashlet\'s ListView and Search.<br><br>The SuiteCRM Dashlet will be available to add to the pages in the Home module.',
            'viewBtnListView' => 'Benutzerdefinieren Sie das Layout der <b>Listenansicht</b> .<br><br>In der Listenansicht werden die Suchresultate dargestellt.',
            'searchBtn' => 'Benutzerdefinieren Sie das <b>Suche</b> Layout des Moduls.<br><br>Bestimmen Sie, welche Felder als Filter zur Darstellung der Listenansichten verwendet werden können.',
            'viewBtnQuickCreate' => 'Benutzerdefinieren des <b>Schnellerfassungs</b> Layouts.<br><br>Das Schnellerfassungsformular kommt in Subleisten und im E-Mail Modul zur Anwendung.',
            'addLayoutHelp' => "Um ein eigenes Layout für die Berechtigungsgruppe zu erstellen, wähle eine bestehende Berechtigungsgruppe und ändere dann das entsprechende Layout.",

            'searchHelp' => 'Wählen Sie ein <b>Suche</b>-Layout zum Bearbeiten.',
            'dashletHelp' => 'The <b>SuiteCRM Dashlet</b> layouts that can be customized appear here.<br><br>The SuiteCRM Dashlet will be available to add to the pages in the Home module.',
            'DashletListViewBtn' => 'The <b>SuiteCRM Dashlet ListView</b> displays records based on the SuiteCRM Dashlet search filters.',
            'DashletSearchViewBtn' => 'The <b>SuiteCRM Dashlet Search</b> filters records for the SuiteCRM Dashlet listview.',
            'popupHelp' => 'Die <b>Popup</b> Layouts, die benutzerdefiniert werden können, werden hier angezeigt<br>',
            'PopupListViewBtn' => 'Die <b>Popup Listenansicht</b> stellt Datensätze basierend auf den Popup Suchansichten dar.',
            'PopupSearchViewBtn' => 'Die <b>Popup Suche</b> überprüft Datensätze für die Popup Listenansicht.',
            'BasicSearchBtn' => 'Benutzerdefinieren Sie das Formular für die <b>Einfache Suche</b>, das im Einfache Suche Reiter im Suchbereich des Moduls angezeigt wird.',
            'AdvancedSearchBtn' => 'Benutzerdefinieren Sie hier das <b>Erweiterte Suchformular</b>. Dieses wird unter dem “Erweiterte Suche“ Reiter im Suchbereich des Moduls dargestellt.',
            'portalHelp' => 'Manage and customize the <b>SuiteCRM Portal</b>.',
            'SPUploadCSS' => 'Upload a <b>Style Sheet</b> for the SuiteCRM Portal.',
            'SPSync' => '<b>Sync</b> customizations to the SuiteCRM Portal instance.',
            'Layouts' => 'Customize the <b>Layouts</b> of the SuiteCRM Portal modules.',
            'portalLayoutHelp' => 'The modules within the SuiteCRM Portal appear in this area.<br><br>Select a module to edit the <b>Layouts</b>.',
            'relationshipsHelp' => 'Alle <b>Beziehungen</b> die zwischen diesem und anderen Modulen existieren, werden hier angezeigt.<br><br>Der <b>Name</b> der Verknüpfung ist der vom System erzeugte Name für die Verknüpfung.<br><br>Das <b>Primärmodul</b> ist das Modul, das die Verknüpfung bestimmt. Es werden zum Beispiel alle Verknüpfungsseigenschaften, bei denen das Firmenmodul das Primärmodul ist, in der Tabelle Firmen (Accounts)  in der Datenbank gespeichert.<br><br>Der <b>Typ</b> ist der Typ der Verknüpfung, die zwischen dem Primärmodul und dem <b>verknüpften Modul</b> besteht.<br><br>Klicken Sie auf einen Spaltenkopf, um nach dieser Spalte zu sortieren.<br><br>Klicken Sie auf eine Zeile in der Tabelle der Beziehungen, um die zugehörigen Eigenschaften zu sehen.<br><br>Klicken Sie auf <b>Verknüpfung hinzufügen</b> , um eine neue Verknüpfung zu erstellen.<br><br>Beziehungen können zwischen allen eingespielten Modulen bestehen.',
            'relationshipHelp' => '<b>Beziehungen</b> können zwischen dem Modul und anderen eingespielten Modulen erstellt werden.<br><br> Beziehungen sind sichtbar einerseits durch Subleisten und andererseits durch verknüpfte Felder in den zugehörigen Modulen dargestellt.<br><br>Wählen Sie einen der folgenden <b>Beziehungstypen</b> für das Modul:<br><br> <b>Eins-zu-Eins</b> - Beide Module enthalten verknüpfte Felder<br><br> <b>Eins-zu-Eins</b> - Das Primärmodul enthält eine Subleiste und das zweite Modul zeigt ein verknüpftes Feld an<br><br> <b>Eins-zu-Mehrere</b> - Beide Moduldatensätze erhalten eine Subleiste<br><br> Wählen Sie <b>Verknüpftes Modul</b> für die Beziehungen. <br><br>Wenn der Verknüpfungstyp Subleisten beinhaltet, dann wählen Sie die Subleisten Ansicht der entsprechenden Module.<br><br> Klicken Sie auf <b>Speichern</b> , um die Verknüpfung zu erstellen.',
            'convertLeadHelp' => 'Here you can add modules to the convert layout screen and modify the layouts of existing ones.<br/>
		You can re-order the modules by dragging their rows in the table.<br/><br/>
		<b>Module:</b> The name of the module.<br/><br/>
		<b>Required:</b> Required modules must be created or selected before the lead can be converted.<br/><br/>
		<b>Copy Data:</b> If checked, fields from the lead will be copied to fields with the same name in the newly created records.<br/><br/>
		<b>Allow Selection:</b> Modules with a relate field in Contacts can be selected rather than created during the convert lead process.<br/><br/>
		<b>Edit:</b> Modify the convert layout for this module.<br/><br/>
		<b>Delete:</b> Remove this module from the convert layout.<br/><br/>',
            'editDropDownBtn' => 'Ein globales Auswahlmenü bearbeiten',
            'addDropDownBtn' => 'Ein neues globales Auswahlmenü erstellen',
        ),
        'fieldsHelp' => array(
            'default' => 'The <b>Fields</b> in the module are listed here by Field Name.<br><br>The module template includes a pre-determined set of fields.<br><br>To create a new field, click <b>Add Field</b>.<br><br>To edit a field, click the <b>Field Name</b>.<br/><br/>After the module is deployed, the new fields created in Module Builder, along with the template fields, are regarded as standard fields in Studio.',
        ),
        'relationshipsHelp' => array(
            'default' => 'The <b>Relationships</b> that have been created between the module and other modules appear here.<br><br>The relationship <b>Name</b> is the system-generated name for the relationship.<br><br>The <b>Primary Module</b> is the module that owns the relationships. The relationship properties are stored in the database tables belonging to the primary module.<br><br>The <b>Type</b> is the type of relationship exists between the Primary module and the <b>Related Module</b>.<br><br>Click a column title to sort by the column.<br><br>Click a row in the relationship table to view and edit the properties associated with the relationship.<br><br>Click <b>Add Relationship</b> to create a new relationship.',
            'addrelbtn' => 'Gehen Sie mit der Maus über Hilfe, um eine Verknüpfung zu erstellen.',
            'addRelationship' => '<b>Beziehungen</b> können zwischen dem Modul und anderen benutzerdefinierten oder eingespielten Modulen erstellt werden.<br><br> Beziehungen sind sichtbar einerseits durch Subleisten und andererseits durch verknüpfte Felder in den zugehörigen Modulen dargestellt.<br><br>Wählen Sie einen der folgenden <b>Beziehungstypen</b> für das Modul:<br><br> <b>Eins-zu-Eins</b> - Beide Module enthalten verknüpfte Felder<br><br> <b>Eins-zu-Eins</b> - Das Primärmodul enthält eine Subleiste und das zweite Modul zeigt ein verknüpftes Feld an<br><br> <b>Eins-zu-Mehrere</b> - Beide Moduldatensätze erhalten eine Subleiste<br><br> Wählen Sie <b>Verknüpftes Modul</b> für die Beziehungen. <br><br>Wenn der Verknüpfungstyp Subleisten beinhaltet, dann wählen Sie die Subleisten Ansicht der entsprechenden Module.<br><br> Klicken Sie auf <b>Speichern</b> , um die Verknüpfung zu erstellen.',
        ),
        'labelsHelp' => array(
            'default' => 'The <b>Labels</b> for the fields and other titles in the module can be changed.<br><br>Edit the label by clicking within the field, entering a new label and clicking <b>Save</b>.<br><br>If any language packs are installed in the application, you can select the <b>Language</b> to use for the labels.',
            'saveBtn' => 'Click <b>Save</b> to save all changes.',
            'publishBtn' => 'Click <b>Save & Deploy</b> to save all changes and make them active.',
        ),
        'portalSync' => array(
            'default' => 'Enter the <b>SuiteCRM Portal URL</b> of the portal instance to update, and click <b>Go</b>.<br><br>Then enter a valid SuiteCRM user name and password, and then click <b>Begin Sync</b>.<br><br>The customizations made to the SuiteCRM Portal <b>Layouts</b>, along with the <b>Style Sheet</b> if one was uploaded, will be transferred to specified the portal instance.',
        ),
        'portalStyle' => array(
            'default' => 'You can customize the look of the SuiteCRM Portal by using a style sheet.<br><br>Select a <b>Style Sheet</b> to upload.<br><br>The style sheet will be implemented in the SuiteCRM Portal the next time a sync is performed.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Um mit einem Projekt anzufangen, klicken Sie auf <b>Neues Paket</b> um ein neues Paket zu erstellen, das Ihre selbst erstellten Module enthalten wird. <br/><br/>Jedes Paket kann ein oder mehrere Module beinhalten.<br/><br/>Zum Beisipiel, falls Sie ein Paket, das ein benutzerdefiniertes Modul, das Sie mit einem Standard-Firmenmodul verbinden wollen, erstellen. Oder falls Sie ein Paket mit mehreren Modulen, die gemeinsam als Projekt miteinander arbeiten, und untereinander sowie mit bereits bestehenden Modulen verknüpft sind.',
            'somepackages' => 'Ein <b>Paket</b> dient als Container für benutzerdefinierte Module, die alle Teil eines Projekts sind. Das Paket kann ein oder mehrere benutzerdefinierte  <b>Module</b>, die miteinander oder mit bereits bestehenden Modulen der Anwendung verknüpft werden können, enthalten.<br/><br/>Nachdem Sie ein Paket für Ihr Projekt erstellt haben, können Sie direkt Module für dieses Paket erstellen oder die begonnene Arbeit zu einem späteren Zeitpunkt fortführen.<br><br>Sobald das Projekt fertig ist, können Sie das Paket <b>einspielen</b> ,um die benutzerdefinierten Module in der Anwendung zu installieren.',
            'afterSave' => 'Your new package should contain at least one module. You can create one or more custom modules for the package.<br/><br/>Click <b>New Module</b> to create a custom module for this package.<br/><br/> After creating at least one module, you can publish or deploy the package to make it available for your instance and/or other users\' instances.<br/><br/> To deploy the package in one step within your SuiteCRM instance, click <b>Deploy</b>.<br><br>Click <b>Publish</b> to save the package as a .zip file. After the .zip file is saved to your system, use the <b>Module Loader</b> to upload and install the package within your SuiteCRM instance.  <br/><br/>You can distribute the file to other users to upload and install within their own SuiteCRM instances.',
            'create' => 'A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom <b>modules</b> that can be related to each other or to other modules in the application.<br/><br/>After creating a package for your project, you can create modules for the package right away, or you can return to the Module Builder at a later time to complete the project.',
        ),
        'main' => array(
            'welcome' => 'Verwenden Sie die <b>Entwicklertools</b> um Standard- und benutzerdefinierte Module und Felder zu erstellen und zu verwalten.<br/><br/>Klicken Sie auf <b>Studio</b>, um Module innerhalb der Anwendung zu verwalten. <br/><br/>Für die Erstellung neuer Module klicken Sie auf <b>Module erstellen</b>.',
            'studioWelcome' => 'Alle momentan installierten Module, sowohl standard- als auch module-loaded Objekte, können im Studio benutzerdefiniert werden.'
        ),
        'module' => array(
            'somemodules' => "Since the current package contains at least one module, you can <b>Deploy</b> the modules in the package within your SuiteCRM instance or <b>Publish</b> the package to be installed in the current SuiteCRM instance or another instance using the <b>Module Loader</b>.<br/><br/>To install the package directly within your SuiteCRM instance, click <b>Deploy</b>.<br><br>To create a .zip file for the package that can be loaded and installed within the current SuiteCRM instance and other instances using the <b>Module Loader</b>, click <b>Publish</b>.<br/><br/> You can build the modules for this package in stages, and publish or deploy when you are ready to do so. <br/><br/>After publishing or deploying a package, you can make changes to the package properties and customize the modules further.  Then re-publish or re-deploy the package to apply the changes.",
            'editView' => 'Hier können Sie bereits bestehende Felder bearbeiten. Sie können bereits bestehende Felder löschen oder verfügbare aus der linken Leiste hinzufügen.',
            'create' => 'When choosing the type of <b>Type</b> of module that you wish to create, keep in mind the types of fields you would like to have within the module. <br/><br/>Each module template contains a set of fields pertaining to the type of module described by the title.<br/><br/><b>Basic</b> - Provides basic fields that appear in standard modules, such as the Name, Assigned to, Team, Date Created and Description fields.<br/><br/> <b>Company</b> - Provides organization-specific fields, such as Company Name, Industry and Billing Address.  Use this template to create modules that are similar to the standard Accounts module.<br/><br/> <b>Person</b> - Provides individual-specific fields, such as Salutation, Title, Name, Address and Phone Number.  Use this template to create modules that are similar to the standard Contacts and Leads modules.<br/><br/><b>Issue</b> - Provides case- and bug-specific fields, such as Number, Status, Priority and Description.  Use this template to create modules that are similar to the standard Cases and Bugs modules.<br/><br/>Note: After you create the module, you can edit the labels of the fields provided by the template, as well as create custom fields to add to the module layouts.',
            'afterSave' => 'Customize the module to suit your needs by editing and creating fields, establishing relationships with other modules and arranging the fields within the layouts.<br/><br/>To view the template fields and manage custom fields within the module, click <b>View Fields</b>.<br/><br/>To create and manage relationships between the module and other modules, whether modules already in the application or other custom modules within the same package, click <b>View Relationships</b>.<br/><br/>To edit the module layouts, click <b>View Layouts</b>. You can change the Detail View, Edit View and List View layouts for the module just as you would for modules already in the application within Studio.<br/><br/> To create a module with the same properties as the current module, click <b>Duplicate</b>.  You can further customize the new module.',
            'viewfields' => 'Die Felder im Modul können personalisiert werden.<br/><br/>Sie können keine Standardfelder löschen, aber Sie können sie aus den entsprechenden Layouts entfernen.<br/><br/>Sie können auch sehr schnell neue Felder mit dengleichen Eigenschaften erstellen, indem Sie im Formular <b>Eigenschaften</b> auf <b>Klonen</b>  klicken. Geben Sie beliebig viele neue Eigenschaften ein und klicken Sie <b>Speichern</b>.<br/><br/>Es wird empfohlen, alle Einstellungen für Standardfelder und benutzerdefinierte Felder zu wählen, bevor Sie das Paket mit dem neuen Modul veröffentlichen bzw. installieren.',
            'viewrelationships' => 'Sie können m:n-Beziehungen zwischen diesem Modul und denen im Paket, und/oder zwischen diesem Modul und bereits installierten Modulen herstellen<br><br>(Um one-to-many und one-to-one Beziehungen herzustellen, erstellen Sie <b>Verknüpfungsfelder</b> und <b>flexible Verknüpfungsfelder</b> für die jeweiligen Module.',
            'viewlayouts' => 'Über die <b>Bearbeitungsansicht</b> bestimmen Sie, welche Felder für die Dateneingabe verfügbar sind. Über die <b>Detailansicht</b> wird bestimmt, wie die Daten angezeigt werden. Die Ansichten können unterschiedlich sein. <br/><br/>Das Schnellerstellungsformular wird angezeigt, wenn die Schaltfläche <b>Erstellen</b> in einem Untermenü geklickt wird. Standardmäßig ist das <b>Schnellerstellungsformular</b> identisch zu <b>Bearbeitungsansicht</b>. Sie können das Schnellerstellungsformular ebenfalls personalisieren, so dass es andere Felder als die Bearbeitungsansicht enthält.<br><br>Die Modulsicherheit bestimmen Sie über die Benutzerdefinition des Layouts, sowie über die <b>Rollenverwaltung</b>.<br><br>',
            'existingModule' => 'Nachdem Sie das Modul erstellt bzw. bearbeitet haben, können Sie weitere Module erstellen oder zum Paket zurückkehren, um es zu  <b>veröffentlichen</b> oder <b>einzuspielen</b>.<br><br>Um ein neues Modul zu erstellen, klicken Sie auf <b>Duplizieren</b>. Dies erstellt ein Modul mit identischen Eigenschaften. Alternativ gehen Sie zurück zum Paket und wählen <b>Neues Modul</b> aus.<br><br> Wenn Sie bereit sind, das Paket mit dem Modul zu <b>veröffentlichen</b> oder <b>einzuspielen</b> gehen Sie zurück zum Paket, um diese Funktion durchzuführen. Sie können Pakete veröffentlichen und einspielen, wenn diese mindestens ein Modul enthalten.',
            'labels' => 'Bezeichnungen können sowohl für Standardfelder als auch für benutzerdefinierte Felder geändert werden. Der Feldinhalt (die Daten) werden davon nicht beeinflusst.',
        ),
        'listViewEditor' => array(
            'modify' => 'There are three columns displayed to the left. The "Default" column contains the fields that are displayed in a list view by default, the "Available" column contains fields that a user can choose to use for creating a custom list view, and the "Hidden" column contains fields available for you as an admin to either add to the default or Available columns for use by users but are currently disabled.',
            'savebtn' => 'Clicking <b>Save</b> will save all changes and make them active.',
            'Hidden' => 'Hidden fields are fields that are not currently available to users for use in list views.',
            'Available' => 'Available fields are fields that are not shown by default, but can be enabled by users.',
            'Default' => 'Default fields are displayed to users who have not created custom list view settings.'
        ),

        'searchViewEditor' => array(
            'modify' => 'There are two columns displayed to the left. The "Default" column contains the fields that will be displayed in the search view, and the "Hidden" column contains fields available for you as an admin to add to the view.',
            'savebtn' => 'Clicking <b>Save & Deploy</b> will save all changes and make them active.',
            'Hidden' => 'Hidden fields are fields that will not be shown in the search view.',
            'Default' => 'Default fields will be shown in the search view.'
        ),
        'layoutEditor' => array(
            'default' => 'There are two columns displayed to the left. The right-hand column, labeled Current Layout or Layout Preview, is where you change the module layout. The left-hand column, entitled Toolbox, contains useful elements and tools for use when editing the layout. <br/><br/>If the layout area is titled Current Layout then you are working on a copy of the layout currently used by the module for display.<br/><br/>If it is titled Layout Preview then you are working on a copy created earlier by a click on the Save button, that might have already been changed from the version seen by users of this module.',
            'saveBtn' => 'Clicking this button saves the layout so that you can preserve your changes. When you return to this module you will start from this changed layout. Your layout however will not be seen by users of the module until you click the Save and Publish button.',
            'publishBtn' => 'Click this button to deploy the layout. This means that this layout will immediately be seen by users of this module.',
            'toolbox' => 'The toolbox contains a variety of useful features for editing layouts, including a trash area, a set of additional elements and a set of available fields. Any of these can be dragged and dropped onto the layout.',
            'panels' => 'This area shows how your layout will look to users of this module when it is depolyed.<br/><br/>You can reposition elements such as fields, rows and panels by dragging and dropping them; delete elements by dragging and dropping them on the trash area in the toolbox, or add new elements by dragging them from the toolbox and dropping them on to the layout in the desired position.'
        ),
        'dropdownEditor' => array(
            'default' => 'There are two columns displayed to the left. The right-hand column, labeled Current Layout or Layout Preview, is where you change the module layout. The left-hand column, entitled Toolbox, contains useful elements and tools for use when editing the layout. <br/><br/>If the layout area is titled Current Layout then you are working on a copy of the layout currently used by the module for display.<br/><br/>If it is titled Layout Preview then you are working on a copy created earlier by a click on the Save button, that might have already been changed from the version seen by users of this module.',
            'dropdownaddbtn' => 'Das Klicken auf diese Schaltfläche fügt einen neuen Eintrag zum Auswahlmenü hinzu.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Customizations made in Studio within this instance can be packaged and deployed in another instance.  <br><br>Provide a <b>Package Name</b>.  You can provide <b>Author</b> and <b>Description</b> information for package.<br><br>Select the module(s) that contain the customizations to export. (Only modules containing customizations will appear for you to select.)<br><br>Click <b>Export</b> to create a .zip file for the package containing the customizations.  The .zip file can be uploaded in another instance through <b>Module Loader</b>.',
            'exportCustomBtn' => 'Klicken Sie auf <b>Export</b> um eine .zip Datei für das Paket zu erstellen, das Ihre Anpassungen enthält und das Sie exportieren wollen.',
            'name' => 'The <b>Name</b> of the package will be displayed in Module Loader after the package is uploaded for installation in Studio.',
            'author' => 'The <b>Author</b> is the name of the entity that created the package. The Author can be either an individual or a company.<br><br>The Author will be displayed in Module Loader after the package is uploaded for installation in Studio.',
            'description' => 'The <b>Description</b> of the package will be displayed in Module Loader after the package is uploaded for installation in Studio.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Welcome to the <b>Developer Tools</b1> area. <br/><br/>Use the tools within this area to create and manage standard and custom modules and fields.',
            'studioBtn' => 'Use <b>Studio</b> to customize installed modules by changing the field arrangement, selecting what fields are available and creating custom data fields.',
            'mbBtn' => 'Verwenden Sie <b>Module erstellen</b>, um neue Module zu erstellen.',
            'appBtn' => 'Use Application mode to customize various properties of the program, such as how many TPS reports are displayed on the homepage',
            'backBtn' => 'Zurück zum vorherigen Schritt.',
            'studioHelp' => 'Use <b>Studio</b> to customize installed modules.',
            'moduleBtn' => 'Hier klicken, um das Modul zu bearbeiten.',
            'moduleHelp' => 'Select the module component that you would like to edit',
            'fieldsBtn' => 'Edit what information is stored in the module by controlling the <b>Fields</b> in the module.<br/><br/>You can edit and create custom fields here.',
            'labelsBtn' => 'Click <b>Save</b> to save your custom labels.',
            'layoutsBtn' => 'Customize the <b>Layouts</b> of the Edit, Detail, List and search views.',
            'subpanelBtn' => 'Edit what information is shown in this modules subpanels.',
            'layoutsHelp' => 'Select a <b>Layout to edit</b>.<br/<br/>To change the layout that contains data fields for entering data, click <b>Edit View</b>.<br/><br/>To change the layout that displays the data entered into the fields in the Edit View, click <b>Detail View</b>.<br/><br/>To change the columns which appear in the default list, click <b>List View</b>.<br/><br/>To change the Basic and Advanced search form layouts, click <b>Search</b>.',
            'subpanelHelp' => 'Select a <b>Subpanel</b> to edit.',
            'searchHelp' => 'Select a <b>Search</b> layout to edit.',
            'labelsBtn' => 'Click <b>Save</b> to save your custom labels.',
            'newPackage' => 'Klicken Sie auf <b>Neues Paket</b>, um ein neues Paket zu erstellen.',
            'mbHelp' => '<b>Welcome to Module Builder.</b><br/><br/>Use <b>Module Builder</b> to create packages containing custom modules based on standard or custom objects. <br/><br/>To begin, click <b>New Package</b> to create a new package, or select a package to edit.<br/><br/> A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom modules that can be related to each other or to modules in the application. <br/><br/>Examples: You might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to modules in the application.',
            'exportBtn' => 'Click <b>Export Customizations</b> to create a package containing customizations made in Studio for specific modules.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Auswahlmenü-Editor',

//ASSISTANT
    'LBL_AS_SHOW' => 'Assistenten in Zukunft anzeigen.',
    'LBL_AS_IGNORE' => 'Assistenten in Zukunft ignorieren.',
    'LBL_AS_SAYS' => 'Assistent sagt:',


//STUDIO2
    'LBL_MODULEBUILDER' => 'Module erstellen',
    'LBL_STUDIO' => 'Studio',
    'LBL_DROPDOWNEDITOR' => 'Editor ',
    'LBL_EDIT_DROPDOWN' => 'Auswahlmenü bearbeiten',
    'LBL_DEVELOPER_TOOLS' => 'Entwicklerwerkzeuge',
    'LBL_SUGARPORTAL' => 'Portal Editor',
    'LBL_SYNCPORTAL' => 'Portal synchronisieren',
    'LBL_PACKAGE_LIST' => 'Paketliste',
    'LBL_HOME' => 'Startseite',
    'LBL_NONE' => '-Kein(e)-',
    'LBL_DEPLOYE_COMPLETE' => 'Einspielen abgeschlossen',
    'LBL_DEPLOY_FAILED' => 'Während des Einspielens ist ein Fehler aufgetreten, Ihr Paket wurde möglicherweise nicht richtig installiert.',
    'LBL_ADD_FIELDS' => 'Benutzerdefinierte Felder hinzufügen',
    'LBL_AVAILABLE_SUBPANELS' => 'Verfügbare Subpanels',
    'LBL_ADVANCED' => 'Erweitert',
    'LBL_ADVANCED_SEARCH' => 'Erweiterte Suche',
    'LBL_BASIC' => 'Einfach',
    'LBL_BASIC_SEARCH' => 'Einfache Suche',
    'LBL_CURRENT_LAYOUT' => 'Layout',
    'LBL_CURRENCY' => 'Währung',
    'LBL_CUSTOM' => 'Benutzerdefiniert',
    'LBL_DASHLET' => 'SuiteCRM Dashlet',
    'LBL_DASHLETLISTVIEW' => 'SuiteCRM Dashlet ListView',
    'LBL_DASHLETSEARCH' => 'SuiteCRM Dashlet Search',
    'LBL_POPUP' => 'Popup Ansicht',
    'LBL_POPUPLIST' => 'Popup Listenansicht',
    'LBL_POPUPLISTVIEW' => 'Popup Listenansicht',
    'LBL_POPUPSEARCH' => 'Popup suchen',
    'LBL_DASHLETSEARCHVIEW' => 'SuiteCRM Dashlet Search',
    'LBL_DISPLAY_HTML' => 'HTML Code zeigen',
    'LBL_DETAILVIEW' => 'Detailansicht',
    'LBL_DROP_HERE' => '[Hier ablegen]',
    'LBL_EDIT' => 'Bearbeiten',
    'LBL_EDIT_LAYOUT' => 'Layout bearbeiten',
    'LBL_EDIT_ROWS' => 'Zeilen bearbeiten',
    'LBL_EDIT_COLUMNS' => 'Spalten bearbeiten',
    'LBL_EDIT_LABELS' => 'Bezeichnungen bearbeiten',
    'LBL_EDIT_PORTAL' => 'Portal bearbeiten für',
    'LBL_EDIT_FIELDS' => 'Edit Fields',
    'LBL_EDITVIEW' => 'Bearbeitungsansicht',
    'LBL_FILLER' => '(Füller)',
    'LBL_FIELDS' => 'Felder',
    'LBL_FAILED_TO_SAVE' => 'Fehler beim Speichern',
    'LBL_FAILED_PUBLISHED' => 'Fehler beim Veröffentlichen',
    'LBL_HOMEPAGE_PREFIX' => 'Mein',
    'LBL_LAYOUT_PREVIEW' => 'Layout Vorschau',
    'LBL_LAYOUTS' => 'Layouts',
    'LBL_LISTVIEW' => 'Listenansicht',
    'LBL_MODULES' => 'Module:',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_NEW_PACKAGE' => 'Neues Paket',
    'LBL_NEW_PANEL' => 'Neuer Bereich',
    'LBL_NEW_ROW' => 'Neue Zeile',
    'LBL_PACKAGE_DELETED' => 'Paket gelöscht',
    'LBL_PUBLISHING' => 'Veröffentlichen ...',
    'LBL_PUBLISHED' => 'Veröffentlicht',
    'LBL_SELECT_FILE' => 'Datei auswählen',
    'LBL_SAVE_LAYOUT' => 'Layout speichern',
    'LBL_SELECT_A_SUBPANEL' => 'Einen Subpanel auswählen',
    'LBL_SELECT_SUBPANEL' => 'Subpanel auswählen',
    'LBL_SUBPANELS' => 'Subpanels',
    'LBL_SUBPANEL' => 'Subpanel',
    'LBL_SUBPANEL_TITLE' => 'Titel:',
    'LBL_SEARCH_FORMS' => 'Suchen',
    'LBL_SEARCH' => 'Suchen',
    'LBL_STAGING_AREA' => 'Arbeitsbereich (Drag-and-Drop Elemente hierher)',
    'LBL_SUGAR_FIELDS_STAGE' => 'SuiteCRM Fields (click items to add to staging area)',
    'LBL_SUGAR_BIN_STAGE' => 'SuiteCRM Papierkorb (klicken Sie auf das Element um es zum Arbeitsbereich hinzuzufügen)',
    'LBL_TOOLBOX' => 'Toolbox',
    'LBL_VIEW_SUGAR_FIELDS' => 'SuiteCRM Felder anzeigen',
    'LBL_VIEW_SUGAR_BIN' => 'View SuiteCRM Bin',
    'LBL_QUICKCREATE' => 'Schnellerstellung',
    'LBL_EDIT_DROPDOWNS' => 'Globales Auswahlmenü bearbeiten',
    'LBL_ADD_DROPDOWN' => 'Neues globales Auswahlmenü hinzufügen',
    'LBL_BLANK' => '-leer-',
    'LBL_TAB_ORDER' => 'Reihenfolge der Reiter',
    'LBL_TAB_PANELS' => 'Reiter aktivieren',
    'LBL_TAB_PANELS_HELP' => 'Wenn Reiter aktiviert sind, benutzen Sie dietype" Dropdown box<br />um zu bestimmen, wie die jeweilige Sektion angezeigt werden soll (Reiter oder Panel)"',
    'LBL_TABDEF_TYPE' => 'Anzeigeart',
    'LBL_TABDEF_TYPE_HELP' => 'Wählen Sie aus, wie dieser Bereich angezeigt werden soll. Diese Option funktioniert nur, wenn in dieser Ansicht Reiter aktiviert sind.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Reiter',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Bedienfeld',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Wählen Sie ein Panel aus, um es in der Layoutansicht anzuzeigen. Wählen Sie einen Reiter, um das Panel als separaten Reiter anzuzeigen. Wenn der Reiter ausgewählt wurde, werden weitere Panels mit aktivierter Panel-Einstellung in diesem Reiter angezeigt. <br/>Ein neuer Reiter wird beim nächsten Panel mit Reiter-Einstellung angelegt. Wenn ein Reiter für ein Panel unterhalb des ersten Panels ausgewählt wurde, wird auch für das erste Panel die Einstellung auf Reiter gesetzt.',
    'LBL_TABDEF_COLLAPSE' => 'Einklappen',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Auswählen, um den Standard für dieses Panel auszublenden.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Name',
    'LBL_DROPDOWN_LANGUAGE' => 'Sprache',
    'LBL_DROPDOWN_ITEMS' => 'Listenelemente',
    'LBL_DROPDOWN_ITEM_NAME' => 'Elementname',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Anzeigelabel',
    'LBL_SYNC_TO_DETAILVIEW' => 'Mit Detailansicht synchronisieren',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Wählen Sie diese Option, um die Bearbeitungsansicht mit der zugehörigen Detailansicht zu verbinden. Felder und Felderpositionen in der Bearbeitungsansicht<br>werden automatisch für die Detailansicht synchronisiert und gespeichert, wenn in der Bearbeitungsansicht gespeichert wird.<br>Layoutänderungen können dann in der Detailansicht nicht durchgeführt werden.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Diese Detailansicht ist mit der zugehörigen Bearbeitungsansicht verbunden.<br> Felder und Positionen entsprechen also der Bearbeitungsansicht.<br> Änderungen in der Detailansicht werden nicht gespeichert, führen Sie Änderungen in der Berabeitungsansicht durch oder lösen Sie die Verbindung der Detailansicht.',
    'LBL_COPY_FROM_EDITVIEW' => 'Kopie von Bearbeitungsansicht',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Für den Objektnamen und die Anzeigebezeichnung werden Werte benötigt. Um ein leeres Element hinzuzufügen, klicken sie auf Hinzufügen und lassen Sie die Felder für den Element- und den Anzeigenamen leer.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Der Schlüssel existiert bereits in der Liste',
    'LBL_NO_SAVE_ACTION' => 'Kann die Speichern Aktion für diese Ansicht nicht finden.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: Dokument schlecht gestaltet (badly formed)',


//RELATIONSHIPS
    'LBL_MODULE' => 'Modul',
    'LBL_LHS_MODULE' => 'Hauptmodul',
    'LBL_CUSTOM_RELATIONSHIPS' => '* in Studio erstellte Beziehung',
    'LBL_RELATIONSHIPS' => 'Beziehungen',
    'LBL_RELATIONSHIP_EDIT' => 'Beziehung bearbeiten',
    'LBL_REL_NAME' => 'Name',
    'LBL_REL_LABEL' => 'Bezeichnung',
    'LBL_REL_TYPE' => 'Typ',
    'LBL_RHS_MODULE' => 'Verknüpfte Module',
    'LBL_NO_RELS' => 'Keine Beziehungen',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Optionale Bedingung',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Spalte',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Wert',
    'LBL_SUBPANEL_FROM' => 'Subpanel von',
    'LBL_RELATIONSHIP_ONLY' => 'Für diese Beziehung werden keine sichtbaren Elemente erstellt, da es bereits eine sichtbare Beziehung zwischen diesen zwei Modulen gibt.',
    'LBL_ONETOONE' => 'o:o',
    'LBL_ONETOMANY' => 'o:m',
    'LBL_MANYTOONE' => 'm:n',
    'LBL_MANYTOMANY' => 'm:m',


//STUDIO QUESTIONS
    'LBL_QUESTION_FUNCTION' => 'Wählen Sie eine Funktion oder Komponente aus.',
    'LBL_QUESTION_MODULE1' => 'Wählen Sie ein Modul aus.',
    'LBL_QUESTION_EDIT' => 'Wählen Sie ein Modul zum Bearbeiten aus.',
    'LBL_QUESTION_LAYOUT' => 'Wählen Sie ein Layout zum Bearbeiten aus.',
    'LBL_QUESTION_SUBPANEL' => 'Wählen Sie ein Subpanel zum Bearbeiten aus.',
    'LBL_QUESTION_SEARCH' => 'Wählen Sie ein Such Layout zum Bearbeiten aus.',
    'LBL_QUESTION_MODULE' => 'Wählen Sie eine Modulkomponente zum Bearbeiten aus.',
    'LBL_QUESTION_PACKAGE' => 'Wählen Sie ein Paket zum Bearbeiten aus, oder erstellen ein neues.',
    'LBL_QUESTION_EDITOR' => 'Werkzeug auswählen.',
    'LBL_QUESTION_DROPDOWN' => 'Wählen Sie ein Auswahlmenü zum Bearbeiten aus, oder erstellen Sie ein neues.',
    'LBL_QUESTION_DASHLET' => 'Wählen Sie ein Dashlet Layout zum Bearbeiten.',
    'LBL_QUESTION_POPUP' => 'Wählen Sie ein Popup Layout zum Bearbeiten aus.',
//CUSTOM FIELDS
    'LBL_RELATE_TO' => 'Verbinden mit',
    'LBL_NAME' => 'Name',
    'LBL_LABELS' => 'Bezeichnungen',
    'LBL_MASS_UPDATE' => 'Massenänderung',
    'LBL_AUDITED' => 'Audit',
    'LBL_CUSTOM_MODULE' => 'Modul',
    'LBL_DEFAULT_VALUE' => 'Standardwert',
    'LBL_REQUIRED' => 'Erforderlich',
    'LBL_DATA_TYPE' => 'Typ',
    'LBL_HCUSTOM' => 'BENUTZERDEFINIERT',
    'LBL_HDEFAULT' => 'STANDARD',
    'LBL_LANGUAGE' => 'Sprache:',
    'LBL_CUSTOM_FIELDS' => '* Studio erstelltes Feld',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Bezeichnungen bearbeiten',
    'LBL_SECTION_PACKAGES' => 'Pakete',
    'LBL_SECTION_PACKAGE' => 'Paket',
    'LBL_SECTION_MODULES' => 'Module',
    'LBL_SECTION_PORTAL' => 'Portal',
    'LBL_SECTION_DROPDOWNS' => 'Auswahlmenüs',
    'LBL_SECTION_PROPERTIES' => 'Eigenschaften',
    'LBL_SECTION_DROPDOWNED' => 'Auswahlmenü bearbeiten',
    'LBL_SECTION_HELP' => 'Hilfe',
    'LBL_SECTION_ACTION' => 'Aktion',
    'LBL_SECTION_MAIN' => 'Home',
    'LBL_SECTION_EDPANELLABEL' => 'Panel Bezeichnung bearbeiten',
    'LBL_SECTION_FIELDEDITOR' => 'Feld bearbeiten',
    'LBL_SECTION_DEPLOY' => 'Einspielen',
    'LBL_SECTION_MODULE' => 'Modul',
    'LBL_SECTION_VISIBILITY_EDITOR' => 'Sichtbarkeit bearbeiten',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Standard',
    'LBL_HIDDEN' => 'Verborgen',
    'LBL_AVAILABLE' => 'Verfügbar',
    'LBL_LISTVIEW_DESCRIPTION' => 'Unten werden drei Spalten angezeigt. Die <b>Standard</b> Spalte enthält die Felder, die in der Listenansicht standardmäßig angezeigt werden, die <b>zusätzliche</b> Spalte enthält Felder, die der für die Erstellug einer Ansicht  Benutzer wählen kann, und die <b>verfügbare</b> Spalte enthält Felder, die für Sie als Admin verfügbar sind, um sie entweder zur Standard oder zur Verfügbar Spalte hinzuzufügen.',
    'LBL_LISTVIEW_EDIT' => 'Listenansicht Editor',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Vorschau',
    'LBL_MB_RESTORE' => 'Stellen Sie wieder her',
    'LBL_MB_DELETE' => 'Löschen',
    'LBL_MB_COMPARE' => 'Vergleichen',
    'LBL_MB_DEFAULT_LAYOUT' => 'Standard Layout',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Hinzufügen',
    'LBL_BTN_SAVE' => 'Speichern',
    'LBL_BTN_SAVE_CHANGES' => 'Änderungen speichern',
    'LBL_BTN_DONT_SAVE' => 'Änderungen verwerfen',
    'LBL_BTN_CANCEL' => 'Abbrechen',
    'LBL_BTN_CLOSE' => 'Schließen',
    'LBL_BTN_SAVEPUBLISH' => 'Speichern & Einspielen',
    'LBL_BTN_NEXT' => 'Weiter',
    'LBL_BTN_BACK' => 'Zurück',
    'LBL_BTN_CLONE' => 'Klonen',
    'LBL_BTN_ADDCOLS' => 'Spalten hinzufügen',
    'LBL_BTN_ADDROWS' => 'Zeilen hinzufügen',
    'LBL_BTN_ADDFIELD' => 'Feld hinzufügen',
    'LBL_BTN_ADDDROPDOWN' => 'Auswahlmenü hinzufügen',
    'LBL_BTN_SORT_ASCENDING' => 'Aufsteigend sortieren',
    'LBL_BTN_SORT_DESCENDING' => 'Absteigend sortieren',
    'LBL_BTN_EDLABELS' => 'Bezeichnungen bearbeiten',
    'LBL_BTN_UNDO' => 'Rückgängig',
    'LBL_BTN_REDO' => 'Wiederholen',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Benutzerdefiniertes Feld hinzufügen',
    'LBL_BTN_EXPORT' => 'Anpassungen exportieren',
    'LBL_BTN_DUPLICATE' => 'Duplizieren',
    'LBL_BTN_PUBLISH' => 'Veröffentlichen',
    'LBL_BTN_DEPLOY' => 'Einspielen',
    'LBL_BTN_EXP' => 'Exportieren',
    'LBL_BTN_DELETE' => 'Löschen',
    'LBL_BTN_VIEW_LAYOUTS' => 'Layouts anzeigen',
    'LBL_BTN_VIEW_FIELDS' => 'Felder anzeigen',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Beziehungen anzeigen',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Beziehung hinzufügen',
    'LBL_BTN_RENAME_MODULE' => 'Modulname ändern',
    'LBL_BTN_INSERT' => 'Einfügen',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Fehler: Feld bereits vorhanden',
    'ERROR_INVALID_KEY_VALUE' => "Fehler: Ungültiger Schlüsselwert: [ ']",
    'ERROR_NO_HISTORY' => 'Kein Verlauf gefunden',
    'ERROR_MINIMUM_FIELDS' => 'Das Layout muss zumindest ein Feld enthalten',
    'ERROR_GENERIC_TITLE' => 'Ein Fehler ist aufgetreten.',
    'ERROR_REQUIRED_FIELDS' => 'Wollen Sie wirklich fortfahren? Die folgenden erforderlichen Felder fehlen im Layout:',
    'ERROR_ARE_YOU_SURE' => 'Wollen Sie wirklich fortfahren?',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Name des Softwarepakets:',
    'LBL_MODULE_NAME' => 'Modulname:',
    'LBL_AUTHOR' => 'Autor:',
    'LBL_DESCRIPTION' => 'Beschreibung:',
    'LBL_KEY' => 'Schlüssel:',
    'LBL_ADD_README' => 'Lies mich',
    'LBL_LAST_MODIFIED' => 'Zuletzt geändert am:',
    'LBL_NEW_MODULE' => 'Neues Modul',
    'LBL_LABEL' => 'Bezeichnung:',
    'LBL_LABEL_TITLE' => 'Bezeichnung',
    'LBL_WIDTH' => 'Breite',
    'LBL_PACKAGE' => 'Paket:',
    'LBL_TYPE' => 'Typ:',
    'LBL_TEAM_SECURITY' => 'Teamkontrolle',
    'LBL_ASSIGNABLE' => 'Zugeordnet werden',
    'LBL_PERSON' => 'Person',
    'LBL_COMPANY' => 'Unternehmen',
    'LBL_ISSUE' => 'Problem',
    'LBL_SALE' => 'Verkauf',
    'LBL_FILE' => 'Datei',
    'LBL_NAV_TAB' => 'Navigations Tab',
    'LBL_CREATE' => 'Erstellen',
    'LBL_LIST' => 'Liste',
    'LBL_VIEW' => 'Ansicht',
    'LBL_LIST_VIEW' => 'Listenansicht',
    'LBL_HISTORY' => 'Verlauf anzeigen',
    'LBL_RESTORE_DEFAULT' => 'Standard wiederherstellen',
    'LBL_ACTIVITIES' => 'Aktivitäten',
    'LBL_NEW' => 'Neue',
    'LBL_TYPE_BASIC' => 'Basis',
    'LBL_TYPE_COMPANY' => 'Unternehmen',
    'LBL_TYPE_PERSON' => 'Person',
    'LBL_TYPE_ISSUE' => 'Problem',
    'LBL_TYPE_SALE' => 'Vertrieb',
    'LBL_TYPE_FILE' => 'Datei',
    'LBL_RSUB' => 'Dies ist das in Ihrem Modul angezeigte Subpanel',
    'LBL_MSUB' => 'Dies ist das Subpanel, das von Ihrem Modul im verknüpften Modul gezeigt wird.',
    'LBL_MB_IMPORTABLE' => 'Importieren von',

// VISIBILITY EDITOR
    'LBL_VE_VISIBLE' => 'sichtbar',
    'LBL_VE_HIDDEN' => 'verborgen',
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] wurde gelöscht',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Anpassungen exportieren',
    'LBL_EC_NAME' => 'Name des Softwarepakets:',
    'LBL_EC_AUTHOR' => 'Autor:',
    'LBL_EC_DESCRIPTION' => 'Beschreibung:',
    'LBL_EC_KEY' => 'Schlüssel:',
    'LBL_EC_CHECKERROR' => 'Wählen Sie ein Modul aus.',
    'LBL_EC_CUSTOMFIELD' => 'Angepasste(s) Feld(er)',
    'LBL_EC_CUSTOMLAYOUT' => 'Angepasste(s) Layout(s)',
    'LBL_EC_NOCUSTOM' => 'Kein Modul wurde angepasst.',
    'LBL_EC_EMPTYCUSTOM' => 'hat keine Anpassungen.',
    'LBL_EC_EXPORTBTN' => 'Exportieren',
    'LBL_MODULE_DEPLOYED' => 'Das Modul wurde eingespielt.',
    'LBL_UNDEFINED' => 'nicht definiert',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Daten nicht erfolgreich geholt',
    'LBL_AJAX_TIME_DEPENDENT' => 'Eine zeitabhängige Aktion wird gerade durchgeführt. Bitte warten und in ein paar Sekunden erneut versuchen',
    'LBL_AJAX_LOADING' => 'Lade...',
    'LBL_AJAX_DELETING' => 'Lösche...',
    'LBL_AJAX_BUILDPROGRESS' => 'Aufbau läuft...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Das Einspielen läuft...',
    'LBL_AJAX_FIELD_EXISTS' => 'Der eingegebene Feldname existiert bereits. Bitte wählen Sie einen anderen Feldnamen.',

    'LBL_AJAX_RESPONSE_TITLE' => 'Ergebnis',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'This operation is completed successfully',
    'LBL_AJAX_LOADING_TITLE' => 'In Progress..',
    'LBL_AJAX_LOADING_MESSAGE' => 'Please wait, loading..',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Sind Sie sicher, dass Sie diese Paket löschen wollen? Dies löscht dauerhaft alle Dateien, die mit diesem Paket verbunden sind.',
    'LBL_JS_REMOVE_MODULE' => 'Sind Sie sicher, dass Sie dieses Modul löschen wollen? Dies löscht dauerhaft alle Dateien, die mit diesem Modul verbunden sind.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Alle von Ihnen gemachten Anpassungen in SuiteCRM werden überschrieben, wenn Sie das Modul noch einmal einspielen. Sind Sie sicher, dass Sie fortfahren wollen?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Paket wird eingespielt',
    'LBL_JS_VALIDATE_NAME' => 'Name - Muss alphanumerisch sein, mit einem Buchstaben beginnen und darf keine Leerzeichen enthalten.',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Der Paketname existiert bereits',
    'LBL_JS_VALIDATE_KEY' => 'Schlüssel - Muss alphanumerisch sein, mit einem Buchstaben beginnen und darf keine Leerzeichen enthalten.',
    'LBL_JS_VALIDATE_LABEL' => 'Bitte geben Sie eine Bezeichnung ein, die als Anzeigename für dieses Modul verwendet wird',
    'LBL_JS_VALIDATE_TYPE' => 'Bitte wählen Sie aus der obigen Listen den Modultyp, den Sie erstellen möchten',
    'LBL_JS_VALIDATE_REL_NAME' => 'Name – Muss alphanumerisch ohne Leerzeichen sein',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Bezeichnung – Bitte wählen Sie eine Bezeichnung, die oberhalb des Subpanels angezeigt wird.',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts. \n\nDo you wish to continue?',
    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Sind Sie sicher dass Sie diese Beziehung löschen wollen?',
    'LBL_CONFIRM_RELATIONSHIP_DEPLOY' => 'Dies macht diese Verknüpfung permanent. Sind Sie sicher dass Sie die Beziehung einspielen wollen?',
    'LBL_CONFIRM_DONT_SAVE' => 'Seit dem letzten Speichern wurden Änderungen vorgenommen. Möchten Sie jetzt speichern?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Änderungen speichern?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Bei diesem Vorgang können Daten oder Teile von Daten unwiderruflich verloren gehen. Sind Sie sicher, dass Sie fortfahren möchten?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Wählen Sie den geeigneten Datentyp basierend auf der Datenart, die in dieses Feld eingegeben werden sollen.',
    'LBL_POPHELP_SEARCHABLE' => 'Setzen Sie die Verstärkungsstufe für dieses Feld. <br />Felder mit einer höheren Verstärkungsstufe haben höheres Gewicht, wenn die Suche durchgeführt wird. <br />Datensätze mit solchen Feldern werden in den Suchergebnissen höherrangig angezeigt.<br /> Wenn Sie die Verstärkungsstufe für ein Feld ändern, führen Sie bitte eine komplette Systemindexierung durch.  <br/> Bitte stellen Sie sicher, dass die Option zum Löschen der existierenden Daten ausgewählt ist, wenn eine Systemindexierung durchgeführt wird.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Ja</b>: Das Feld wird bei Import Aktionen inkludiert.<br><b>Nein</b>: Das Feld wird bei Importen nicht berücksichtigt.<br><b>Erforderlich</b>: Bei jedem Import MUSS ein Wert für dieses Feld vorhanden sein.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Geben Sie einen Wert in Pixel für die Breite an.<br> Das hochgeladene Bild wird entsprechend skaliert.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Geben Sie einen Wert in Pixel für die Höhe an.<br> Das hochgeladene Bild wird entsprechend skaliert.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Aktiv</b>: Das Feld ist in der Funktion Duplikate zusammenführen vorhanden, kann aber nicht in einer Filterbedingung beim Duplikate finden verwendet werden.<br><b>Inaktiv</b>:Das Feld ist in der Funktion Duplikate zusammenführen nicht vorhanden und kann auch nicht in einer Filterbedingung verwendet werden.'
,
    'LBL_POPHELP_GLOBAL_SEARCH' => 'Auswählen, um dieses Feld in der globalen Suche für dieses Modul zu benutzen.',
//Revert Module labels
    'LBL_RESET' => 'Zurücksetzen',
    'LBL_RESET_MODULE' => 'Modul zurücksetzen',
    'LBL_REMOVE_CUSTOM' => 'Anpassungen entfernen',
    'LBL_CLEAR_RELATIONSHIPS' => 'Beziehungen auflösen',
    'LBL_RESET_LABELS' => 'Bezeichungen zurücksetzen',
    'LBL_RESET_LAYOUTS' => 'Layouts zurücksetzen""',
    'LBL_REMOVE_FIELDS' => 'Selbst erstellte Felder entfernen',
    'LBL_CLEAR_EXTENSIONS' => 'Erweiterungen leeren',
    'LBL_HISTORY_TIMESTAMP' => 'Zeitstempel',
    'LBL_HISTORY_TITLE' => 'Verlauf',


    'LBL_ADD_LAYOUT' => 'Layout hinzufügen',
    'LBL_ADD_LAYOUTS' => 'Layout hinzufügen',
    'LBL_QUESTION_ADD_LAYOUT' => 'Wählen ein Gruppen Layout',
    'LBL_REMOVE_LAYOUT' => 'Entferne Gruppen Layout',

    'LBL_SECURITYGROUP' => 'Berechtigungsgruppen',
    'LBL_COPY_FROM' => 'kopieren von:',
    'LBL_ADDLAYOUTDONE' => 'Layout gesichert',
    'LBL_REMOVELAYOUTDONE' => 'Layout entfernt',
    'LBL_REMOVE_CONFIRM' => 'Sind Sie sicher?',

    'fieldTypes' => array(
        'varchar' => 'Textfeld',
        'int' => 'Ganzzahl',
        'float' => 'Fließkomma',
        'bool' => 'Kontrollkästchen',
        'enum' => 'Auswahlliste',
        'dynamicenum' => 'Dynamisches Auswahlmenü',
        'multienum' => 'Mehrfachauswahl',
        'date' => 'Datum',
        'phone' => 'Telefon',
        'currency' => 'Währung',
        'html' => 'HTML',
        'radioenum' => 'Radio Button',
        'relate' => 'Verknüpfung',
        'address' => 'Adresse',
        'text' => 'Textfläche',
        'url' => 'URL',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Datum/Zeit',
        'decimal' => 'Dezimalzahl',
        'image' => 'Bild',
    ),
    'labelTypes' => array(
        "" => "Häufig verwendete Bezeichner",
        "all" => "Alle Bezeichnungen",
    ),

    'parent' => 'Flexible Verknüpfung',

    'LBL_ILLEGAL_FIELD_VALUE' => "Auswahlmenüschlüssel kann keine Anführungszeichen enthalten.",
    'LBL_CONFIRM_SAVE_DROPDOWN' => "Sie entfernen diese Zeile vom Auswahlmenü. Sie können damit in Zukunft diesen Wert aus keinem Auswahlmenü mehr auswählen. Sind Sie sicher, dass Sie forfahren wollen?",
    'LBL_POPHELP_VALIDATE_US_PHONE' => 'Select to validate this field for the entry of a 10-digit<br> .phone number, with allowance for the country code 1, and<br> to apply a U.S. format to the phone number when the record<br> is saved. The following format will be applied: (xxx) xxx-xxxx.',
    'LBL_ALL_MODULES' => 'Alle Module',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (verknüpfte {1} ID)',
);

