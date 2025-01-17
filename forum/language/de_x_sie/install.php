<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 * Deutsche Übersetzung durch die Übersetzer-Gruppe von phpBB.de:
 * siehe language/de_x_sie/AUTHORS.md und https://www.phpbb.de/go/ubersetzerteam
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'Installations-Routine',
	'SELECT_LANG'	=> 'Sprache wählen',

	'STAGE_INSTALL'	=> 'phpBB installieren',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Einführung',
	'INTRODUCTION_BODY'		=> 'Willkommen bei phpBB3!<br /><br />phpBB ist die am weitesten verbreitete Open-Source-Forensoftware. phpBB3 ist die jüngste Fortsetzung einer im Jahr 2000 begonnenen Entwicklungsgeschichte. Wie seine Vorversionen ist phpBB3 funktionsreich, benutzerfreundlich und vollständig vom phpBB-Team unterstützt. phpBB3 verbessert deutlich, was phpBB2 beliebt gemacht hat und bringt neue Funktionen, die häufig gefragt und nicht in den Vorversionen enthalten waren. Wir hoffen, dass es Ihre Erwartungen übertrifft.<br /><br />Dieses Installations-System wird Sie durch die Installation von phpBB3, das Update von einer älteren auf die aktuelle Version von phpBB3 als auch die Konvertierung von einem anderen Software-Paket (inklusive phpBB2) führen. Für weitere Informationen empfehlen wir Ihnen, <a href="../docs/INSTALL.html">die Installationsanweisungen</a> zu lesen.<br /><br />Um die Lizenz von phpBB3 zu lesen oder Informationen über den Erhalt von Support und unsere Einstellung dazu zu erhalten, wählen Sie bitte die entsprechende Option aus dem seitlichen Menü aus. Um fortzufahren, wählen Sie bitte oben das entsprechende Register aus.',

	// Support page
	'SUPPORT_TITLE'		=> 'Support',
	'SUPPORT_BODY'		=> 'Für die aktuelle, stabile Version von phpBB3 wird kostenloser Support gewährt. Dies umfasst:</p><ul><li>Installation</li><li>Konfiguration</li><li>Technische Fragen</li><li>Probleme durch eventuelle Fehler in der Software</li><li>Aktualisierung von Release Candidates (RC) oder stabilen Versionen zur aktuellen stabilen Version</li><li>Konvertierungen von phpBB 2.0.x zu phpBB3</li><li>Konvertierung von anderen Forensoftwares zu phpBB3 (Bitte beachten Sie das <a href="https://www.phpbb.com/community/viewforum.php?f=486">Konvertierungs-Forum (englisch)</a> (<a href="https://www.phpbb.de/go/3.3/konvertierung">Konvertierungs-Support auf phpBB.de</a>))</li></ul><p>Wir ermutigen Benutzer, die noch eine Beta-Version von phpBB3 verwenden, ihre Installation mit einer aktuellen Ausgabe von phpBB3 zu ersetzen.</p><h2>Erweiterungen / Styles</h2><p>Fragen bezüglich von Erweiterungen stellen Sie bitte im <a href="https://www.phpbb.com/community/viewforum.php?f=451">englischsprachigen Erweiterungen-Forum</a> (<a href="https://www.phpbb.de/go/3.3/extensions">Modifikationen auf phpBB.de</a>).<br />Fragen bezüglich Styles, Templates und Themes stellen Sie bitte im <a href="https://www.phpbb.com/community/viewforum.php?f=471">englischsprachigen Styles-Forum</a> (<a href="https://www.phpbb.de/go/3.3/styles">Styles auf phpBB.de</a>).<br /><br />Wenn sich Ihre Frage direkt auf ein bestimmtes Paket bezieht, stellen Sie Ihre Frage bitte direkt in dem Thema, das für das Paket vorgesehen ist.</p><h2>Support erhalten</h2><p><a href="https://www.phpbb.com/support/">Supportbereich (englisch)</a><br /><a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/">Schnellstartanleitung (englisch)</a><br /><a href="https://www.phpbb.de/go/3.3/ersteschritte">Erste Schritte mit phpBB</a><br /><a href="https://www.phpbb.de/go/3.3/support">deutschsprachiger Support auf phpBB.de</a><br /><a href="https://www.phpbb.de/go/3.3/schnellstart">Schnellstartanleitung</a><br /><br />Um immer die neuesten Informationen zu Updates und Veröffentlichungen zu erhalten, folgen Sie uns auf <a href="https://www.twitter.com/phpbb/">Twitter</a> und <a href="https://www.facebook.com/phpbb/">Facebook</a> (englisch) oder melden Sie sich für den <a href="https://www.phpbb.de/go/newsletter">deutschsprachigen phpBB.de-Newsletter</a> an.<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'General Public License',

	// Install page
	'INSTALL_INTRO'			=> 'Willkommen bei der Installation',
	'INSTALL_INTRO_BODY'	=> 'Dieser Assistent ermöglicht Ihnen die Installation von phpBB3 auf Ihrem Server.</p><p>Bevor Sie fortsetzen können, benötigen Sie die Daten Ihrer Datenbank. Wenn Sie die Daten Ihrer Datenbank nicht kennen, kontaktieren Sie bitte Ihren Server-Betreiber und fragen Sie nach den Daten. Ohne die Datenbankdaten können Sie nicht fortfahren. Sie benötigen:</p>
	<ul>
		<li>Den Datenbank-Typ — die Art der Datenbank, auf die Sie zugreifen werden.</li>
		<li>Den Hostname oder DSN des Datenbankservers — die Adresse, unter der der Datenbankserver erreichbar ist.</li>
		<li>Den Port des Datenbank-Servers — den Port, über den der Datenbankserver erreicht wird (in den meisten Fällen ist diese Information nicht notwendig).</li>
		<li>Den Namen der Datenbank — den Namen der Datenbank auf dem Server.</li>
		<li>Den Benutzernamen und das Passwort für die Datenbank — die Zugangsdaten, um auf die Datenbank zugreifen zu können.</li>
	</ul>

	<p><strong>Hinweis:</strong> wenn Sie SQLite verwenden, sollten Sie den vollständigen Pfad zu Ihrer Datenbank-Datei im DSN-Feld eingeben und die Felder für Benutzername und Passwort frei lassen. Aus Sicherheitsgründen sollte die Datenbank in keinem Verzeichnis gespeichert werden, das aus dem Internet zugänglich ist.</p>

	<p>phpBB3 unterstützt folgende Datenbank-Typen:</p>
	<ul>
		<li>MySQL 4.1.3 und höher (MySQLi ist erforderlich)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 und höher (direkt oder über ODBC)</li>
		<li>MS SQL Server 2005 und höher (nativ)</li>
		<li>Oracle</li>
	</ul>

	<p>Es werden nur die Datenbank-Typen zur Auswahl angeboten, die Ihr Server unterstützt.',

	'ACP_LINK'	=> '<a href="%1$s">Zum Administrations-Bereich</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB ist bereits installiert.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB ist noch nicht installiert.',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'Datei existiert nicht',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'Um phpBB installieren zu können, muss die Datei „%1$s“ existieren.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Um den vollen Funktionsumfang von phpBB nutzen zu können, wird empfohlen, dass die Datei %1$s existiert.',
	'FILE_NOT_WRITABLE'						=> 'Datei nicht beschreibbar',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'Um phpBB installieren zu können, muss die Datei „%1$s“ beschreibbar sein.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Um den vollen Funktionsumfang von phpBB nutzen zu können, wird empfohlen, dass die Datei %1$s beschreibbar ist.',

	'DIRECTORY_NOT_EXISTS'						=> 'Verzeichnis existiert nicht',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'Um phpBB installieren zu können, muss das Verzeichnis „%1$s“ existieren.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Um den vollen Funktionsumfang von phpBB nutzen zu können, wird empfohlen, dass das Verzeichnis %1$s existiert.',
	'DIRECTORY_NOT_WRITABLE'					=> 'Verzeichnis nicht beschreibbar',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'Um phpBB installieren zu können, muss das Verzeichnis „%1$s“ beschreibbar sein.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Um den vollen Funktionsumfang von phpBB nutzen zu können, wird empfohlen, dass das Verzeichnis %1$s beschreibbar ist.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'PHP-Version',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB erfordert PHP 7.1.3 oder höher.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP-Funktion getimagesize() ist erforderlich',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'Damit phpBB richtig funktioniert, muss die Funktion getimagesize() verfügbar sein.',
	'PCRE_UTF_SUPPORT'					=> 'PCRE UTF-8-Unterstützung',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB wird nicht funktionieren, wenn die PHP-Installation ohne UTF-8-Unterstützung in der PCRE-Erweiterung kompiliert wurde.',
	'PHP_JSON_SUPPORT'					=> 'PHP JSON-Unterstützung',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'Damit phpBB richtig funktioniert, muss die PHP JSON-Erweiterung verfügbar sein.',
	'PHP_MBSTRING_SUPPORT'				=> 'PHP mbstring-Unterstützung',
	'PHP_MBSTRING_SUPPORT_EXPLAIN'		=> 'Damit phpBB richtig funktioniert, muss die PHP mbstring-Erweiterung verfügbar sein.',
	'PHP_XML_SUPPORT'					=> 'PHP XML/DOM-Unterstützung',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'Damit phpBB richtig funktioniert, muss die PHP XML/DOM-Erweiterung verfügbar sein.',
	'PHP_SUPPORTED_DB'					=> 'Unterstützte Datenbanken',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'Sie müssen Unterstützung für mindestens eine kompatible Datenbank in PHP bereitstellen. Falls keine Datenbank-Module als verfügbar angezeigt werden, sollten Sie Ihren Webhosting-Provider kontaktieren oder die entsprechende PHP-Dokumentation zu Rate ziehen.',

	'RETEST_REQUIREMENTS'	=> 'Systemanforderungen erneut prüfen',

	'STAGE_REQUIREMENTS'	=> 'Systemanforderungen prüfen',
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'Sie müssen alle Felder dieses Blocks ausfüllen.',

	'TIMEOUT_DETECTED_TITLE'	=> 'Die Installations-Routine hat eine Zeitüberschreitung festgestellt',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'Die Installations-Routine hat festgestellt, dass eine Zeitüberschreitung aufgetreten ist. Sie können versuchen, die Seite neu zu laden — dies kann aber zu einer Daten-Korruption führen. Wir empfehlen Ihnen, entweder das Limit für eine Zeitüberschreitung (Timeout) zu erhöhen oder die Kommandozeile (CLI) zu verwenden.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Daten für die Installation erfassen',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Administrator-Details',

	// Form labels
	'ADMIN_CONFIG'				=> 'Administrator-Konfiguration',
	'ADMIN_PASSWORD'			=> 'Administrator-Passwort',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Bestätigung des Administrator-Passworts',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Bitte geben Sie ein Passwort mit einer Länge von 6 bis 30 Zeichen ein.',
	'ADMIN_USERNAME'			=> 'Benutzername des Administrators',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Bitte geben Sie einen Benutzernamen mit einer Länge von 3 bis 20 Zeichen ein.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'Die angegebene E-Mail-Adresse ist ungültig.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Die eingegebenen Passwörter stimmen nicht überein.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Das eingegebene Passwort ist zu lang. Die maximale Länge beträgt 30 Zeichen.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Das eingegebene Passwort ist zu kurz. Die minimale Länge beträgt 6 Zeichen.',
	'INST_ERR_USER_TOO_LONG'		=> 'Der von Ihnen angegebene Benutzername ist zu lang. Die maximale Länge beträgt 20 Zeichen.',
	'INST_ERR_USER_TOO_SHORT'		=> 'Der von Ihnen angegebene Benutzername ist zu kurz. Die minimale Länge beträgt 3 Zeichen.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Konfiguration des Boards',
	'DEFAULT_LANGUAGE'	=> 'Standard-Sprache',
	'BOARD_NAME'		=> 'Titel des Boards',
	'BOARD_DESCRIPTION'	=> 'Kurze Beschreibung des Boards',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Datenbank-Einstellungen',

	// Form labels
	'DB_CONFIG'				=> 'Datenbank-Konfiguration',
	'DBMS'					=> 'Datenbank-Typ',
	'DB_HOST'				=> 'Datenbankserver-Hostname oder DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN steht für Data Source Name und ist nur für ODBC-Installationen relevant. Bei PostgreSQL wird mit <em>localhost</em> eine Verbindung zum lokalen Server über UNIX-Domain-Socket hergestellt und mit <em>127.0.0.1</em> über TCP. Für SQLite ist der vollständige Pfad der Datenbank-Datei anzugeben.',
	'DB_PORT'				=> 'Datenbankserver-Port',
	'DB_PORT_EXPLAIN'		=> 'Lassn Sie dieses Feld frei, es sei denn, Sie wissen, dass der Server nicht den Standard-Port verwendet.',
	'DB_PASSWORD'			=> 'Datenbank-Passwort',
	'DB_NAME'				=> 'Name der Datenbank',
	'DB_USERNAME'			=> 'Datenbank-Benutzername',
	'DATABASE_VERSION'		=> 'Datenbank-Version',
	'TABLE_PREFIX'			=> 'Präfix der Tabellen in der Datenbank',
	'TABLE_PREFIX_EXPLAIN'	=> 'Das Tabellen-Präfix muss mit einem Buchstaben beginnen und darf nur Buchstaben, Ziffern und Unterstriche enthalten.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Nativ ]',
	'DB_OPTION_MYSQLI'		=> 'MySQL mit MySQLi-Erweiterung',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_DB'					=> 'Fehler bei der Datenbank-Installation',
	'INST_ERR_NO_DB'				=> 'Kann das PHP-Modul für den gewählten Datenbank-Typ nicht laden.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'Das angegebene Tabellen-Präfix ist nicht zulässig. Es muss mit einem Buchstaben beginnen und darf nur Buchstaben, Ziffern und Unterstriche enthalten.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'Das angegebene Tabellen-Präfix ist zu lang. Die maximale Länge beträgt %d Zeichen.',
	'INST_ERR_DB_NO_NAME'			=> 'Kein Datenbank-Name angegeben.',
	'INST_ERR_DB_FORUM_PATH'		=> 'Die angegebene Datenbank-Datei liegt innerhalb Ihres Board-Verzeichnisses. Sie sollten sie an einem nicht über das Web zugänglichen Ort ablegen.',
	'INST_ERR_DB_CONNECT'			=> 'Es kann keine Verbindung zur Datenbank aufgebaut werden. Details stehen in unten angezeigter Fehlermeldung.',
	'INST_ERR_DB_NO_WRITABLE'		=> 'Sowohl die Datenbank als auch das Verzeichnis, dass die Datenbank beinhaltet, müssen beschreibbar sein.',
	'INST_ERR_DB_NO_ERROR'			=> 'Es wurde keine Fehlermeldung übergeben.',
	'INST_ERR_PREFIX'				=> 'Es existieren bereits Tabellen mit dem angegebenen Präfix, bitte wählen Sie ein alternatives.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'Die auf diesem System installierte MySQL-Version ist nicht kompatibel mit der „MySQL mit MySQLi-Erweiterung“-Option, die von Ihnen gewählt wurde. Bitte versuchen Sie stattdessen die „MySQL“-Option.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'Die installierte Version der SQLite-Erweiterung ist zu alt. Sie muss auf 3.6.15 oder höher aktualisiert werden.',
	'INST_ERR_DB_NO_ORACLE'			=> 'Die installierte Oracle-Version erfordert, dass der Parameter <var>NLS_CHARACTERSET</var> auf <var>UTF8</var> gesetzt ist. Bitte aktualisieren Sie Oracle auf Version 9.2 oder höher oder ändern Sie den genannten Parameter entsprechend.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'Die ausgewählte Datenbank wurde nicht mit der Codierung <var>UNICODE</var> oder <var>UTF8</var> erstellt. Bitte versuchen Sie die Installation erneut mit einer Datenbank, die mit dieser Codierung erstellt wurde.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'Die Datei für die Datenbankstruktur kann nicht beschrieben werden',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'E-Mail-Konfiguration',

	// Package info
	'PACKAGE_VERSION'				=> 'Paketversion installiert',
	'UPDATE_INCOMPLETE'				=> 'Ihre phpBB-Installation wurde nicht vollständig aktualisiert.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Bitte lesen Sie die folgenden Information durch, um diesen Fehler zu beheben.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Unvollständige Aktualisierung</h1>

		<p>Die letzte Aktualisierung Ihrer phpBB-Installation wurde nicht vollständig durchgeführt. Rufen Sie die <a href="%1$s" title="%1$s">Datenbank-Aktualisierung</a> auf, stellen Sie sicher, dass <em>Nur die Datenbank aktualisieren</em> ausgewählt ist und klicken Sie danach auf <strong>Absenden</strong>. Nachdem Sie die Datenbank erfolgreich aktualisiert haben, vergessen Sie nicht, das „install“-Verzeichnis zu löschen.</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'		=> 'Ein neues Feature-Release <strong>%1$s</strong> ist verfügbar. Bitte lesen Sie <a href="%2$s" title="%2$s"><strong>die Release-Bekanntmachung</strong></a>, um die Neuerungen zu erfahren und eine Anleitung zum Upgrade zu erhalten.',
	'SERVER_CONFIG'				=> 'Server-Konfiguration',
	'SCRIPT_PATH'				=> 'Scriptpfad',
	'SCRIPT_PATH_EXPLAIN'		=> 'Der Pfad, in dem die phpBB-Dateien abgelegt sind, relativ zum Domainnamen. Z.&nbsp;B. <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Danke, die Board-Administration',
	'CONFIG_SITE_DESC'				=> 'Ein kurzer Text, der Ihr Forum beschreibt',
	'CONFIG_SITENAME'				=> 'ihredomain.tld',

	'DEFAULT_INSTALL_POST'			=> '<t>Dies ist ein Beispielbeitrag Ihrer phpBB3-Installation. Alles scheint zu funktionieren. Wenn Sie möchten, können Sie diesen Beitrag löschen und mit der Einrichtung Ihres Boards fortfahren. Während des Installationsvorgangs wurden Ihrer ersten Kategorie und Ihrem ersten Forum passende Berechtigungen für die Benutzergruppen Administratoren, Bots, globale Moderatoren, Gäste, Registrierte Benutzer und Registrierte COPPA-Benutzer zugewiesen. Wenn Sie sich entscheiden, auch Ihre erste Kategorie und Ihr erstes Forum zu löschen, dürfen Sie nicht vergessen, den genannten Gruppen entsprechende Rechte für alle neuen Kategorien und Foren, die Sie erstellen, zuzuweisen. Es wird jedoch empfohlen, Ihre erste Kategorie und Ihr erstes Forum umzubenennen und deren Rechte zu übernehmen, wenn neue Kategorien und Foren erstellt werden. Viel Spaß mit phpBB!</t>',

	'FORUMS_FIRST_CATEGORY'			=> 'Ihre erste Kategorie',
	'FORUMS_TEST_FORUM_DESC'		=> 'Beschreibung Ihres ersten Forums.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Ihr erstes Forum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrator',
	'REPORT_WAREZ'					=> 'Der gemeldete Beitrag enthält Links zu illegaler Software oder Raubkopien.',
	'REPORT_SPAM'					=> 'Der gemeldete Beitrag hat nur zum Ziel, für eine Website oder ein anderes Produkt zu werben.',
	'REPORT_OFF_TOPIC'				=> 'Der gemeldete Beitrag betrifft ein anderes Thema.',
	'REPORT_OTHER'					=> 'Keine der genannten Kategorien. Bitte benutzen Sie „Weitere Informationen“ für Ihre Meldung.',

	'SMILIES_ARROW'					=> 'Pfeil',
	'SMILIES_CONFUSED'				=> 'Verwirrt',
	'SMILIES_COOL'					=> 'Fetzig',
	'SMILIES_CRYING'				=> 'Weinend oder sehr traurig',
	'SMILIES_EMARRASSED'			=> 'Verlegen',
	'SMILIES_EVIL'					=> 'Böse oder sehr verärgert',
	'SMILIES_EXCLAMATION'			=> 'Ausruf',
	'SMILIES_GEEK'					=> 'Computerfreak',
	'SMILIES_IDEA'					=> 'Idee',
	'SMILIES_LAUGHING'				=> 'Lachend',
	'SMILIES_MAD'					=> 'Verärgert',
	'SMILIES_MR_GREEN'				=> 'Mr. Green',
	'SMILIES_NEUTRAL'				=> 'Neutral',
	'SMILIES_QUESTION'				=> 'Frage',
	'SMILIES_RAZZ'					=> 'Hänseln',
	'SMILIES_ROLLING_EYES'			=> 'Augen verdrehen',
	'SMILIES_SAD'					=> 'Traurig',
	'SMILIES_SHOCKED'				=> 'Erschüttert',
	'SMILIES_SMILE'					=> 'Lächeln',
	'SMILIES_SURPRISED'				=> 'Überrascht',
	'SMILIES_TWISTED_EVIL'			=> 'Verrückter Teufel',
	'SMILIES_UBER_GEEK'				=> 'Extremer Computerfreak',
	'SMILIES_VERY_HAPPY'			=> 'Überglücklich',
	'SMILIES_WINK'					=> 'Zwinkern',

	'TOPICS_TOPIC_TITLE'			=> 'Willkommen bei phpBB3!',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Übersicht',
	'MENU_INTRO'		=> 'Einführung',
	'MENU_LICENSE'		=> 'Lizenz',
	'MENU_SUPPORT'		=> 'Support',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Erstelle Konfigurationsdatei',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Füge Konfigurationseinstellungen hinzu',
	'TASK_ADD_DEFAULT_DATA'				=> 'Lege Standard-Einstellungen in der Datenbank fest',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Erstelle Datei für Datenbankstruktur',
	'TASK_SETUP_DATABASE'				=> 'Richte Datenbank ein',
	'TASK_CREATE_TABLES'				=> 'Erstelle Tabellen',

	// Install data
	'TASK_ADD_BOTS'				=> 'Registriere Bots',
	'TASK_ADD_LANGUAGES'		=> 'Installiere verfügbare Sprachen',
	'TASK_ADD_MODULES'			=> 'Installiere Module',
	'TASK_CREATE_SEARCH_INDEX'	=> 'Erstelle Such-Index',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'Installiere mitgelieferte Erweiterungen',
	'TASK_NOTIFY_USER'			=> 'Sende Benachrichtigungs-Mail',
	'TASK_POPULATE_MIGRATIONS'	=> 'Führe Migrationen durch',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'Die Installations-Routine wurde erfolgreich beendet',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Modul nicht gefunden',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Ein Modul konnte nicht gefunden werden, da der Dienst „%s“ nicht definiert ist.',

	'TASK_NOT_FOUND'				=> 'Aufgabe nicht gefunden',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'Ein Aufgabe konnte nicht gefunden werden, da der Dienst „%s“ nicht definiert ist.',

	'SKIP_MODULE'	=> 'Überspringe Modul „%s“',
	'SKIP_TASK'		=> 'Überspringe Aufgabe „%s“',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Alle Aufgaben für die Installations-Routine sollen mit „installer“ beginnen',
	'TASK_CLASS_NOT_FOUND'				=> 'Die Defininition einer Aufgabe für die Installations-Routine ist ungültig. Der Name des Dienstes ist „%1$s“, der erwartete Namensraum der Klasse „%2$s“. Weitere Informationen können in der Dokumentation von „task_interface“ gefunden werden.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'Die Konfigurationsdatei für die Installations-Routine ist nicht beschreibbar.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Installiere phpBB',
	'CLI_UPDATE_BOARD'				=> 'Aktualisiere phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Zeige die Konfigurationsdatei, die verwendet wird',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Validiere eine Konfigurationsdatei',
	'CLI_CONFIG_FILE'				=> 'Zu verwendende Konfigurationsdatei',
	'MISSING_FILE'					=> 'Auf die Datei %1$s kann nicht zugegriffen werden',
	'MISSING_DATA'					=> 'Die Konfigurationsdatei enthält ungültige Einstellungen oder ihr fehlen Einträge.',
	'INVALID_YAML_FILE'				=> 'Die YAML-Datei %1$s konnte nicht verarbeitet werden',
	'CONFIGURATION_VALID'			=> 'Die Konfigurations-Datei ist valide',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'Update der phpBB-Installation',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Mit dieser Option können Sie Ihre phpBB-Version auf den neuesten Stand bringen.<br />Während dieses Prozesses wird die Integrität aller Ihrer Dateien überprüft. Sie haben die Möglichkeit, alle Dateiunterschiede vor dem Update zu überprüfen.<br /><br />Die Dateiaktualisierung an sich kann auf zwei Wegen erfolgen:</p><h2>Manuelle Aktualisierung</h2><p>Bei dieser Methode laden Sie nur die von Ihnen geänderten Dateien herunter, damit Sie sichergehen können, dass die von Ihnen durchgeführten Dateiänderungen nicht verloren gehen. Nach dem Herunterladen dieses Archivs müssen Sie die Dateien in die entsprechenden Verzeichnisse Ihrer phpBB-Installation hochladen. Nachdem Sie das getan haben, können Sie die Dateiüberprüfung erneut ausführen, um zu sehen, ob Sie alle Dateien korrekt hochgeladen haben.</p><h2>Automatische Aktualisierung über FTP</h2><p>Diese Methode ist der ersten sehr ähnlich, mit dem Unterschied, dass Sie die veränderten Dateien nicht herunter- und anschließend von Hand wieder hochladen müssen. Dies wird automatisch erledigt. Um diese Methode nutzen zu können, müssen Sie Ihre FTP-Anmeldedaten kennen, da sie abgefragt werden. Nach der Fertigstellung wird auch hier eine Integritätsprüfung der Dateien ausgeführt.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Release-Bekanntmachung</h1>

		<p>Bitte lesen Sie die Release-Bekanntmachung (release announcement) der aktuellsten Version, bevor Sie den Update-Prozess beginnen — sie enthält wichtige Informationen. Außerdem enthält sie die Links zum Download der Installationspakete sowie ein Änderungsprotokoll (Changelog) der Versionen.</p>

		<br />

		<h1>Wie Sie ein Update Ihrer Installation mit dem „Komplettpaket“ durchführen</h1>

		<p>Es wird empfohlen, Ihre Installation mit Hilfe des Komplettpakets zu aktualisieren. Wenn allerdings in Ihrer Installation die phpBB-Hauptdateien verändert wurden, sollten Sie stattdessen das „Erweiterte-Update-Paket“ verwenden, um diese Veränderungen nicht zu verlieren. Sie können Ihre Installation auch mit den in der INSTALL.html beschriebenen Methoden aktualisieren. Zum Aktualisieren von phpBB mit Hilfe des Komplettpakets müssen Sie folgende Schritte ausführen (ausführliche Anleitung auf <a href="https://www.phpbb.de/go/3.3/update">www.phpBB.de</a>):</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><strong class="error">Sichern Sie alle Board-Dateien und die Datenbank.</strong></li>
			<li>Gehen Sie zur <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com-Downloadseite</a> und laden Sie das neueste „Komplettpaket“-Archiv runter (<a href="https://www.phpbb.de/go/3.3/downloads">deutschsprachige Downloadseite</a>).</li>
			<li>Entpacken Sie das Archiv.</li>
			<li>Löschen Sie die <code class="inline">config.php</code>-Datei und die Verzeichnisse <code class="inline">/images</code>, <code class="inline">/store</code> und <code class="inline">/files</code> <em>aus dem Paket</em> (nicht von Ihrer Website).</li>
			<li>Gehen Sie in den Administrations-Bereich unter Board-Einstellungen und stellen Sie sicher, dass prosilver als Standard-Style eingerichtet ist. Wenn nicht, stellen Sie den Standard-Style auf prosilver.</li>
			<li>Löschen Sie die Verzeichnisse <code class="inline">/vendor</code> und <code class="inline">/cache</code> aus Ihrem Board-Hauptverzeichnis auf dem Server.</li>
			<li>Laden Sie die übrigen Dateien und Verzeichnisse (damit sind die übrigen Inhalte des phpBB3-Verzeichnisses gemeint) via FTP oder SSH auf den Server in das Hauptverzeichnis Ihrer Board-Installation hoch und überschreiben Sie die vorhandenen Dateien. (Hinweis: Stellen Sie sicher, dass Sie keine Erweiterungen (Extensions) im <code class="inline">/ext</code>-Verzeichnis beim Hochladen der neuen phpBB3 Inhalte löschen.)</li>
			<li><strong><a href="%1$s" title="%1$s">Starten Sie nun den Update-Prozess, indem Sie in Ihrem Webbrowser die Adresse zum Installationsverzeichnis aufrufen</a>.</strong></li>
			<li>Folgen Sie den Anweisungen, um Ihre Datenbank zu aktualisieren und lassen Sie es bis zum Abschluss durchlaufen.</li>
			<li>Löschen Sie via FTP oder SSH das Verzeichnis <code class="inline">/install</code> vom Hauptverzeichnis Ihrer Board-Installation.<br><br></li>
		</ol>
		
		<p>Sie haben nun ein neues, aktuelles Board, das alle Ihre Benutzer und Beiträge enthält. Folgendes ist noch zu tun:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Aktualisieren Sie Ihre Sprachpakete (sofern das deutsche Komplettpaket verwendet wird, aktualisiert sich das deutsche Sprachpaket automatisch)</li>
			<li>Aktualisieren Sie Ihre Styles<br><br></li>
		</ul>

		<h1>Wie Sie ein Update Ihrer Installation mit dem „Erweiterten-Update-Paket“ durchführen</h1>

		<p>Das „Erweiterte-Update-Paket“ wird nur in dem Fall empfohlen, wenn in Ihrer Installation die phpBB-Hauptdateien verändert wurden. Sie können Ihre Installation auch mit den in der INSTALL.html beschriebenen Methoden aktualisieren. Zum erweiterten Update von phpBB müssen Sie folgende Schritte ausführen:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li>Gehen Sie zur <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com-Downloadseite</a> und laden Sie das entsprechende „Erweiterte-Update-Paket“ herunter (<a href="https://www.phpbb.de/go/3.3/downloads">deutschsprachige Downloadseite</a>).</li>
			<li>Entpacken Sie das Archiv.</li>
			<li>Laden Sie die entpackten Verzeichnisse „install“ und „vendor“ vollständig in Ihr phpBB-Hauptverzeichnis (dort, wo die config.php ist).</li>
		</ol>

		<p>Nach dem Upload wird das Forum vorübergehend für normale Benutzer nicht zugänglich sein, da das von Ihnen hochgeladene Installations-Verzeichnis vorhanden ist.<br /><br />
		<strong><a href="%1$s" title="%1$s">Starten Sie nun den Update-Prozess, indem Sie in Ihrem Webbrowser die Adresse zum Installationsverzeichnis angeben</a>.</strong><br />
		<br />
		Anschließend werden Sie durch den Update-Prozess geführt. Sie werden benachrichtigt, sobald das Update abgeschlossen ist.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Umfang des durchzuführenden Updates',

	'UPDATE_TYPE_ALL'		=> 'Die Dateien und die Datenbank aktualisieren',
	'UPDATE_TYPE_DB_ONLY'	=> 'Nur die Datenbank aktualisieren',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'Methoden zur Datei-Aktualisierung',

	'UPDATE_FILE_METHOD'			=> 'Methode zur Datei-Aktualisierung',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Geänderte Dateien in Archiv herunterladen',
	'UPDATE_FILE_METHOD_FTP'		=> 'Dateien per FTP aktualisieren (automatisch)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Dateien per Direktzugriff aktualisieren (automatisch)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Archiv-Format für Download auswählen',

	// FTP settings
	'FTP_SETTINGS'			=> 'FTP-Einstellungen',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'Es wurde kein Update-Verzeichnis gefunden. Bitte stellen Sie sicher, dass Sie die richtigen Dateien hochgeladen haben.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Ihre Version ist auf dem neuesten Stand. Es ist nicht nötig, das Update-Tool auszuführen. Wenn Sie eine Integritätsprüfung der Dateien ausführen möchten, stellen Sie sicher, dass Sie das richtige Update-Paket hochgeladen haben.',
	'OLD_UPDATE_FILES'				=> 'Die Update-Dateien sind nicht auf dem neuesten Stand. Die gefundenen Update-Dateien sind für ein Update von phpBB %1$s auf phpBB %2$s, aber die neueste Version von phpBB ist %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'Die gefundenen Update-Dateien sind inkompatibel zu Ihrer installierten Version. Ihre phpBB-Version ist %1$s. Das Update-Paket aktualisiert Version %2$s auf %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Dateien aktualisieren',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Prüfe Dateien',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'Die Datei %s konnte nicht für den Dateivergleich geöffnet werden.',

	'UPDATE_FILE_DIFF'		=> 'Vergleiche geänderte Dateien',
	'ALL_FILES_DIFFED'		=> 'Alle geänderten Dateien wurden verglichen.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Dateien aktualisieren',

	'DOWNLOAD'							=> 'Herunterladen',
	'DOWNLOAD_CONFLICTS'				=> 'Archivdatei mit Konflikten herunterladen',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Suchen Sie nach &lt;&lt;&lt;, um die Konflikte zu finden',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Archiv mit veränderten Dateien herunterladen',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Nach dem Download sollten Sie das Archiv entpacken. Darin sind die geänderten Dateien enthalten, die Sie in Ihr phpBB-Verzeichnis laden müssen. Bitte laden Sie die Dateien in die entsprechenden Verzeichnisse hoch. Nachdem Sie alle Dateien hochgeladen haben, können Sie mit dem Update-Vorgang fortfahren.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Die Datei ist bereits auf dem neuesten Stand.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Unterschiedsanzeige für diese Datei nicht möglich.',
	'FILE_USED'						=> 'Informationen benutzt von',			// Single file
	'FILES_CONFLICT'				=> 'Dateien mit Konflikten',
	'FILES_CONFLICT_EXPLAIN'		=> 'Die folgenden Dateien wurden geändert und entsprechen nicht den Originaldateien der alten Version. phpBB hat festgestellt, dass diese Dateien nicht konfliktfrei zusammengeführt werden können. Bitte sehen Sie sich die Konflikte an und versuchen Sie, sie von Hand zu lösen oder fahren Sie mit der Aktualisierung fort, indem Sie Ihre bevorzugte Methode des Zusammenführens auswählen. Wenn Sie die Konflikte von Hand lösen, prüfen Sie die Dateien nach der Bearbeitung erneut. Sie können außerdem die Zusammenführungsmethode für jede Datei getrennt angeben. Die erste Methode erzeugt eine Datei, in der die problematischen Zeilen Ihrer alten Datei verworfen werden, die andere Methode verwirft die Änderungen der neuen Datei.',
	'FILES_DELETED'					=> 'Zu löschende Dateien',
	'FILES_DELETED_EXPLAIN'			=> 'Die folgenden Dateien existieren nicht mehr in der neuen Version. Diese Dateien müssen aus Ihrer Installation gelöscht werden.',
	'FILES_MODIFIED'				=> 'Geänderte Dateien',
	'FILES_MODIFIED_EXPLAIN'		=> 'Die folgenden Dateien wurden geändert und entsprechen nicht den Originaldateien der alten Version. In der aktualisierten Version werden Ihre Änderungen und die Neuerungen der phpBB-Datei zusammengeführt.',
	'FILES_NEW'						=> 'Neu hinzuzufügende Dateien',
	'FILES_NEW_EXPLAIN'				=> 'Die folgenden Dateien fehlen in Ihrer Installation. Sie werden dieser hinzugefügt.',
	'FILES_NEW_CONFLICT'			=> 'Neue Dateien, die bereits existieren',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Die folgenden Dateien sind neu in der aktuellen Version, aber es wurde festgestellt, dass bereits eine Datei mit dem gleichen Namen im gleichen Verzeichnis existiert. Diese wird durch die neue Datei überschrieben.',
	'FILES_NOT_MODIFIED'			=> 'Nicht geänderte Dateien',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Die folgenden Dateien sind nicht geändert und entsprechen den originalen phpBB-Dateien der Version, von der aus Sie updaten möchten.',
	'FILES_UP_TO_DATE'				=> 'Bereits aktualisierte Dateien',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Die folgenden Dateien sind bereits auf dem neuesten Stand und müssen nicht aktualisiert werden.',
	'FILES_VERSION'					=> 'Dateien-Version',
	'TOGGLE_DISPLAY'				=> 'Datei-Liste ein-/ausblenden',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Aktualisiere Dateien',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'Die Methode zur Datei-Aktualisierung „%1$s“ ist gescheitert. Die Installationsroutine wird die Alternative „%2$s“ versuchen.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'Die Datei-Aktualisierung ist gescheitert. Es stehen keine weiteren Alternativen zur Verfügung.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Mit dem Update fortfahren',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Dateien erneut prüfen',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Datenbank aktualisieren',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'Die Datenbank wurde erfolgreich aktualisiert',

	'TASK_UPDATE_EXTENSIONS'	=> 'Aktualisiere Erweiterungen',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'Der angegebene Konverter existiert nicht.',
	'DEV_NO_TEST_FILE'			=> 'Für die test_file-Variable im Konverter wurde kein Wert angegeben. Falls Sie ein Nutzer dieses Konverters sind, sollten Sie diesen Fehler nicht sehen. Bitte melden Sie diese Nachricht an die Autoren des Konverters. Falls Sie ein Konverter-Autor sind, müssen Sie den Namen einer im Quell-Board existierenden Datei angeben, damit der Pfad dorthin verifiziert werden kann.',
	'COULD_NOT_FIND_PATH'		=> 'Der Pfad zu Ihrem alten Board konnte nicht gefunden werden. Bitte prüfen Sie Ihre Einstellungen und versuchen Sie es erneut.<br />» Der angegebene Quell-Pfad war: %s',
	'CONFIG_PHPBB_EMPTY'		=> 'Die phpBB3-Konfigurationsvariable für „%s“ ist leer.',

	'MAKE_FOLDER_WRITABLE'		=> 'Bitte stellen Sie sicher, dass dieser Ordner existiert und durch den Webserver beschreibbar ist. Versuchen Sie es dann erneut:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Bitte stellen Sie sicher, dass diese Ordner existieren und durch den Webserver beschreibbar sind. Versuchen Sie es dann erneut:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'				=> 'Erneut prüfen',

	'NO_TABLES_FOUND'			=> 'Keine Tabellen gefunden.',
	'TABLES_MISSING'			=> 'Kann diese Tabellen nicht finden<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'Bitte prüfen Sie Ihren Tabellen-Präfix und versuchen Sie es erneut.',

	// Conversion in progress
	'CONTINUE_CONVERT'			=> 'Konvertierung fortsetzen',
	'CONTINUE_CONVERT_BODY'		=> 'Ein bereits gestarteter Konvertierungs-Versuch wurde gefunden. Sie können auswählen, ob Sie ihn fortsetzen oder einen neuen starten möchten.',
	'CONVERT_NEW_CONVERSION'	=> 'Neue Konvertierung',
	'CONTINUE_OLD_CONVERSION'	=> 'Bereits gestartete Konvertierung fortsetzen',

	// Start conversion
	'SUB_INTRO'					=> 'Einführung',
	'CONVERT_INTRO'				=> 'Willkommen beim phpBB-Konvertierungs-System',
	'CONVERT_INTRO_BODY'		=> 'Von hier aus können Sie Daten aus anderen (installierten) Boards importieren. Die unten stehende Liste zeigt alle verfügbaren Konverter-Module. Falls in dieser Liste kein Konverter für die Board-Software, von der aus Sie konvertieren möchten, enthalten ist, schauen Sie bitte auf unserer Website nach, wo möglicherweise weitere Konvertierungs-Module verfügbar sind.',
	'AVAILABLE_CONVERTORS'		=> 'Verfügbare Konverter',
	'NO_CONVERTORS'				=> 'Es stehen keine Konverter zur Verfügung.',
	'CONVERT_OPTIONS'			=> 'Optionen',
	'SOFTWARE'					=> 'Board-Software',
	'VERSION'					=> 'Version',
	'CONVERT'					=> 'Konvertieren',

	// Settings
	'STAGE_SETTINGS'			=> 'Einstellungen',
	'TABLE_PREFIX_SAME'			=> 'Das Tabellen-Präfix muss mit dem übereinstimmen, das von der Software, von der aus Sie konvertieren möchten, genutzt wird.<br />» Das angegebene Tabellen-Präfix lautete %s.',
	'DEFAULT_PREFIX_IS'			=> 'Der Konverter konnte keine Tabellen mit dem angegebenen Präfix finden. Bitte stellen Sie sicher, dass Sie die richtigen Daten des Boards angegeben haben, von dem aus Sie konvertieren möchten. Der standardmäßige Tabellenpräfix für %1$s ist <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'			=> 'Konvertierungs-Optionen festlegen',
	'FORUM_PATH'				=> 'Board-Pfad',
	'FORUM_PATH_EXPLAIN'		=> 'Dies ist der <strong>relative</strong> Pfad im Dateisystem zu Ihrem alten Board vom <strong>Hauptverzeichnis dieser neuen phpBB-Installation</strong> aus.',
	'REFRESH_PAGE'				=> 'Seite aktualisieren, um Konvertierung fortzusetzen',
	'REFRESH_PAGE_EXPLAIN'		=> 'Wenn auf Ja gesetzt, wird der Konverter die Seite aktualisieren, wenn er einen Schritt abgeschlossen hat. Wenn dies Ihre erste Konvertierung zu Testzwecken und um Fehler im Vorfeld festzustellen ist, empfehlen wir, dies auf Nein zu stellen.',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Konvertierung wird durchgeführt',

	'AUTHOR_NOTES'				=> 'Autoren-Anmerkungen<br />» %s',
	'STARTING_CONVERT'			=> 'Starte Konvertierungsprozess',
	'CONFIG_CONVERT'			=> 'Konvertiere die Konfiguration',
	'DONE'						=> 'Erledigt',
	'PREPROCESS_STEP'			=> 'Vorbereitende Funktionen/Abfragen werden ausgeführt.',
	'FILLING_TABLE'				=> 'Fülle Tabelle <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Fülle Tabellen',
	'DB_ERR_INSERT'				=> 'Fehler bei der Verarbeitung der <code>INSERT</code>-Anfrage.',
	'DB_ERR_LAST'				=> 'Fehler bei der Verarbeitung von <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Fehler bei der Ausführung von <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Fehler bei der Ausführung von <var>query_first</var>, %s („%s“).',
	'DB_ERR_SELECT'				=> 'Fehler beim Durchführen der <code>SELECT</code>-Anfrage.',
	'STEP_PERCENT_COMPLETED'	=> 'Schritt <strong>%d</strong> von <strong>%d</strong>',
	'FINAL_STEP'				=> 'Abschließenden Schritt ausführen',
	'SYNC_FORUMS'				=> 'Beginne, die Foren zu synchronisieren',
	'SYNC_POST_COUNT'			=> 'Synchronisiere post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Synchronisiere post_counts von <var>Eintrag</var> %1$s bis %2$s.',
	'SYNC_TOPICS'				=> 'Beginne, die Themen zu synchronisieren',
	'SYNC_TOPIC_ID'				=> 'Synchronisiere Themen von <var>topic_id</var> %1$s bis %2$s.',
	'PROCESS_LAST'					=> 'Verarbeite abschließende Anweisungen',
	'UPDATE_TOPICS_POSTED'		=> 'Ermittle Informationen über Themen mit eigenen Beiträgen',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Während der Ermittlung der Informationen über Themen mit eigenen Beiträgen ist ein Fehler aufgetreten. Sie können diesen Vorgang nach der Konvertierung im Administrations-Bereich erneut aufrufen.',
	'CONTINUE_LAST'				=> 'Mit den abschließenden Anweisungen fortfahren',
	'CLEAN_VERIFY'				=> 'Aufräumen und Prüfen der endgültigen Struktur',
	'NOT_UNDERSTAND'			=> 'Kann %s #%d nicht verstehen, Tabelle %s („%s“)',
	'NAMING_CONFLICT'			=> 'Namens-Konflikt: %s und %s sind beides Aliasse<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Konvertierung abgeschlossen',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Ihr Board wurde erfolgreich auf phpBB 3.3 konvertiert. Sie können sich jetzt anmelden und <a href="../">Ihr Board betreten</a>. Bitte prüfen Sie, ob alle Einstellungen richtig übernommen wurden, bevor Sie Ihr Board durch Löschen des „install“-Verzeichnisses freigeben. Hilfe zum Gebrauch von phpBB erhalten Sie online über die <a href="https://www.phpbb.com/support/docs/en/3.3/ug/">Dokumentation (englisch)</a> (<a href="https://www.phpbb.de/go/3.3/dokumentation">deutsche Übersetzung</a>) und das <a href="https://www.phpbb.com/community/viewforum.php?f=661">Support-Forum (englisch)</a> (<a href="https://www.phpbb.de/go/3.3/supportforum">deutschsprachiges Forum auf phpBB.de</a>).',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'Der FTP-Upload für Dateianhänge ist im alten Forum eingeschaltet. Bitte deaktivieren Sie den FTP-Upload und stellen Sie sicher, dass ein gültiges Upload-Verzeichnis angegeben ist. Kopieren Sie dann alle Dateianhänge in dieses neue, aus dem Web zugängliche Verzeichnis. Sobald Sie dies getan haben, können Sie das Konvertierungsprogramm erneut aufrufen.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Es sind keine Konfigurationsinformationen für die Konvertierung verfügbar.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Foren-Berechtigungen konnten nicht ausgelesen werden',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Kategorien konnten nicht ausgelesen werden',
	'CONV_ERROR_GET_CONFIG'				=> 'Ihre Boardkonfiguration konnte nicht ausgelesen werden.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Konnte nicht auf „%s“ zugreifen / nicht lesen.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Konnte Gruppen-Berechtigungen nicht auslesen',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'add_bots() hat eine Unstimmigkeit in der Gruppen-Tabelle festgestellt — Sie müssen alle Systemgruppen manuell hinzufügen.',
	'CONV_ERROR_INSERT_BOT'				=> 'Konnte Bot nicht in users-Tabelle eintragen.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Konnte Bot nicht in bots-Tabelle eintragen.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Konnte Benutzer nicht in user_group-Tabelle eintragen.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Fehler im Message Parser',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Hinweis an Entwickler: $convertor[\'avatar_path\'] muss angegeben werden, um %s zu benutzen.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Der relative Pfad zum Quell-Board wurde nicht angegeben.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Hinweis an Entwickler: $convertor[\'avatar_gallery_path\'] muss angegeben werden, um %s zu benutzen.',
	'CONV_ERROR_NO_GROUP'				=> 'Gruppe „%1$s“ konnte nicht in %2$s gefunden werden.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Hinweis an Entwickler: $convertor[\'ranks_path\'] muss angegeben werden, um %s zu benutzen.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Hinweis an Entwickler: $convertor[\'smilies_path\'] muss angegeben werden, um %s zu benutzen.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Hinweis an Entwickler: $convertor[\'upload_path\'] muss angegeben werden, um %s zu benutzen.',
	'CONV_ERROR_PERM_SETTING'			=> 'Konnte Berechtigungen nicht einfügen / ändern.',
	'CONV_ERROR_PM_COUNT'				=> 'Konnte Nachrichtenzahl des PN-Verzeichnisses nicht abrufen.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Konnte neues Forum als Ersatz der alten Kategorie nicht einfügen.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Konnte neues Forum als Ersatz des alten Forums nicht einfügen.',
	'CONV_ERROR_USER_ACCESS'			=> 'Konnte Benutzer-Authentifizierungsinformationen nicht abrufen.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Falsche Gruppe „%1$s“ in %2$s definiert.',
	'CONV_OPTIONS_BODY'					=> 'Diese Seite fragt die Daten ab, die zum Zugriff auf das Quell-Board erforderlich sind. Geben Sie die Datenbank-Daten Ihres alten Boards ein; der Konverter wird an der unten angegebenen Datenbank keine Änderungen vornehmen. Das Quell-Board sollte deaktiviert sein, um eine konsistente Konvertierung zu ermöglichen.',
	'CONV_SAVED_MESSAGES'				=> 'Gesicherte Nachrichten',

	'PRE_CONVERT_COMPLETE'			=> 'Die vorbereitenden Schritte der Konvertierung wurden erfolgreich abgeschlossen. Sie können nun mit der eigentlichen Konvertierung beginnen. Bitte beachten Sie, dass Sie einige Dinge manuell einstellen und anpassen müssen. Nach der Konvertierung sollten Sie insbesondere die zugewiesenen Berechtigungen prüfen, sofern nötig Ihren Suchindex neu aufbauen und sicherstellen, dass alle Dateien wie z.&nbsp;B. Benutzerbilder und Smileys richtig kopiert wurden.',
));
