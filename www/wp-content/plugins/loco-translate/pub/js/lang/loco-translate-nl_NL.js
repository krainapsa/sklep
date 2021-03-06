/**
 * Loco js export: JavaScript function
 * Project: loco.js conversion
 * Release: Working copy
 * Locale: nl_NL, Dutch
 * Exported at: Mon, 09 Jun 2014 18:07:31 +0100 
 */
loco = window.loco||{}, loco.t = function( pairs ){
    
    // named plural forms
    var pluralForms = ["one","other"];
    
    // calc numeric index of a plural form (0-1)
    function pluralIndex( n ){
        return Number( n != 1 );
    }

    // expose public t() function
    return function( msgid1, msgid2, n ){
        var value = pairs[msgid1];
        // singular if no multiplier
        if( null == n ){
            n = 1;
        }
        // plurals stored as objects, e.g. { one: "" }
        if( value instanceof Object ){
            value = value[ pluralForms[ pluralIndex(n) ] || 'one' ];
        }
        return value || ( 1 === n ? msgid1 : msgid2 ) || msgid1 || '';
    };
}(
    {"Permission denied":"","Settings saved":"","PO file used as template. This will be renamed to %s on first save":"","Empty or invalid %s file":"","%s file has no header":"","Failed to compile MO file with built-in compiler":"","Translation options":"","Loco Translate":"","Settings":"","File download failed":"","Some files missing":"","POT file not writable":"","PO file not writable":"","MO file not writable":"","MO file not found":"","Folder not writable":"","Folder not found":"","Failed to compile MO file with %s, check your settings":"","Package not found called %s":"","Web server cannot create backups in \"%s\". Fix file permissions or disable backups in settings":"","Cannot create MO file":"","Cannot overwrite MO file":"","Failed to write MO file":"","No source files in this package, nothing to sync":"","Unknown error":"","PO file saved":"","and MO file compiled":"","Merged from %s":"","Merged from source code":"","Already up to date with %s":"","Already up to date with source code":"","1 new string added":{"one":"","other":""},"1 obsolete string removed":{"one":"","other":""},"Your changes will be lost if you continue without saving":"","Source text":"","%s translation":"","Comments":"","Context":"","Translation":"","File check":"","File system permissions for %s":"","Back":"","Get help":"","OK":"OK","Loco may not work as expected":"","Configure Loco Translate":"","Compiling MO files":"","Use built-in MO compiler.":"","Use external command:":"","Enter path to msgfmt on server":"","Generate hash tables":"","Backing up PO files":"","Number of backups to keep of each file:":"","Experimental features":"","Enable Wordpress core translations":"","Save settings":"","Switch to...":"","create in <code>%s<\/code>":"","create in global languages directory":"","Core":"","Error":"Fout","Warning":"Waarschuwing","New PO file":"Nieuw PO-bestand","You must specify a valid locale for a new PO file":"Specifieer een geldige locale voor een nieuw PO-bestand","No translatable strings found":"Geen vertaalbare teksten gevonden","Cannot create a PO file.":"Kan geen PO-bestand aanmaken","PO file already exists with locale %s":"PO-bestand bestaat al in locale %s","File cannot be created automatically. Fix the file permissions or use Download instead of Save":"Bestand kan niet automatisch aangemaakt worden. Verander de rechten of gebruik download en bewaar.","%s file is empty":"Het bestand %s is leeg","Run Sync to update from source code":"Voer Sync uit om de broncode up te daten","No strings could be extracted from source code":"Er kon geen tekst uit de broncode gehaald worden","Run Sync to update from %s":"Gebruik Sync om vanuit %s up te daten","Source code has been modified, run Sync to update POT":"Broncode is veranderd. Gebruik Sync om POT up te daten","POT has been modified since PO file was saved, run Sync to update":"POT is veranderd sedert bewaren van het PO-bestand. Gebruik Sync om up te daten","Bad file path":"Foute bestandslocatie","New template":"Nieuw sjabloon","New language":"Nieuwe taal","%s%% translated":"%s%% vertaald","1 string":{"one":"1 te vertalen tekst","other":"%s te vertalen teksten"},"%s fuzzy":"%s onzeker","%s untranslated":"%s onvertaald","Loco, Translation Management":"Loco, vertalingsbeheer","Manage translations":"Beheer vertalingen","Unknown language":"Onbekende taal","Some files not writable":"Sommige bestanden hebben geen schrijfrechten","\"%s\" folder not writable":"Map \"%s\" heeft geen schrijfrechten","User does not have permission to manage translations":"Gebruik heeft geen rechten om vertalingen te beheren","Invalid data posted to server":"Ongeldige gegevens op server","Web server cannot create \"%s\" directory in \"%s\". Fix file permissions or create it manually.":"Webserver kan map \"%s\" in \"%s\" niet aanmaken. Bewerk bestandsrechten of maak het zelf aan.","Web server cannot create files in the \"%s\" directory. Fix file permissions or use the download function.":"Webserver kan map \"%s\" in \"%s\" niet aanmaken. Bewerk bestandsrechten of gebruik de downloadfunctie.","%s file is not writable by the web server. Fix file permissions or download and copy to \"%s\/%s\".":"Bestand %s kan niet beschreven worden door de webserver. Bewerk de schrijfrechten of download en kopieer naar \"%s\/%s\".","No strings could be extracted from source files":"Er konden geen te vertalen teksten uit de bronbestanden gehaald worden","Packages":"Pakketten","Package details":"Pakketdetails","Translations (PO)":"Vertalingen (PO)","Template (POT)":"Sjabloon (POT)","File permissions":"Bestandsrechten","1 language":{"one":"1 taal","other":"%u talen"},"Updated":"Ge\u00fcpdated","Powered by":"Ondersteund door","Template file":"Sjabloonbestand","never":"nooit","Save":"Opslaan","Download":"Downloaden","Sync":"Sync","Revert":"Ongedaan maken","Add":"Toevoegen","Del":"Verwijder","Fuzzy":"Onzeker","Filter translations":"Filter vertalingen","Help":"Help","Initialize new translations in %s":"Start nieuwe vertalingen in %s","Select from common languages":"Selecteer van gebruikelijke talen","or enter any language code":"of geef een taalcode op","Start translating":"Start vertalen","New version available":"Nieuwe versie beschikbaar","Upgrade to version %s of Loco Translate":"Loco Translate upgraden naar versie %s","Select a plugin or theme to translate":"Selecteer een plug-in of thema om te vertalen","Themes":"Thema's","Plugins":"Plug-ins"} 
);
