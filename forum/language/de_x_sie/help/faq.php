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

$lang = array_merge($lang, array(
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'	=> 'Die Board-Administration kann bestimmte Dateitypen zulassen oder verbieten. Falls Sie sich nicht sicher sind, welche Dateitypen Sie anhängen können und Sie Unterstützung benötigen, wenden Sie sich bitte an die Board-Administration.',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> 'Welche Dateianhänge sind in diesem Forum zulässig?',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'	=> 'Um eine Liste all Ihrer Dateianhänge zu erhalten, gehen Sie in den persönlichen Bereich. Dort finden Sie unter „Einstieg“ einen Punkt „Dateianhänge verwalten“, über den Sie eine Liste Ihrer Dateianhänge erhalten und diese verwalten können.',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'	=> 'Kann ich eine Übersicht all meiner Dateianhänge erhalten?',

	'HELP_FAQ_BLOCK_ATTACHMENTS'	=> 'Dateianhänge',
	'HELP_FAQ_BLOCK_BOOKMARKS'	=> 'Abonnements und Lesezeichen',
	'HELP_FAQ_BLOCK_FORMATTING'	=> 'Textformatierung und Thementypen',
	'HELP_FAQ_BLOCK_FRIENDS'	=> 'Freunde und ignorierte Mitglieder',
	'HELP_FAQ_BLOCK_GROUPS'	=> 'Benutzer-Stufen und Gruppen',
	'HELP_FAQ_BLOCK_ISSUES'	=> 'phpBB betreffende Fragen',
	'HELP_FAQ_BLOCK_LOGIN'	=> 'Registrierung und Anmeldung',
	'HELP_FAQ_BLOCK_PMS'	=> 'Private Nachrichten',
	'HELP_FAQ_BLOCK_POSTING'	=> 'Beiträge schreiben',
	'HELP_FAQ_BLOCK_SEARCH'	=> 'Die Foren durchsuchen',
	'HELP_FAQ_BLOCK_USERSETTINGS'	=> 'Benutzerpräferenzen und -einstellungen',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'	=> 'In phpBB 3.0 funktionierten Lesezeichen ähnlich den Lesezeichen in Web-Browsern: Sie bekamen keine Informationen bei einem Update. Seit phpBB 3.1 ähneln Lesezeichen mehr einem Abonnement: Sie können eine Benachrichtigung erhalten, wenn ein Thema aktualisiert wird. Abonnements hingegen informieren Sie bei einer Aktualisierung eines Themas oder eines Forums des Boards. Die Benachrichtigungsoptionen für Lesezeichen und Abonnements können im persönlichen Bereich unter „Benachrichtigungen einstellen“ geändert werden.',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> 'Was ist der Unterschied zwischen einem Lesezeichen und einem Abonnements für ein Thema oder Forum?',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'	=> 'Um ein Forum zu abonnieren, verwenden Sie im Forum den Link „Forum abonnieren“, der sich meist am Ende der Seite befindet.',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'	=> 'Wie kann ich ein Forum abonnieren?',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'	=> 'Wenn Sie mehrere Abonnements deaktivieren möchten, so können Sie dies im persönlichen Bereich unter „Einstieg“ – „Abonnements verwalten“ machen.',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'	=> 'Wie deaktiviere ich meine Abonnements?',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'	=> 'Sie können ein Lesezeichen auf ein Thema setzen oder es abonnieren, in dem Sie die entsprechende Option in den „Themen-Optionen“ auswählen, die sich normalerweise ober- und unterhalb des Diskussionsverlaufs des Themas befinden.<br />Wenn Sie bei der Antwort auf ein Thema die Option „Mich benachrichtigen, sobald eine Antwort geschrieben wurde“ aktivieren, wird das Thema ebenfalls für Sie abonniert.',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'	=> 'Wie kann ich ein Lesezeichen auf ein Thema setzen oder ein Thema abonnieren?',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'	=> 'Bekanntmachungen beinhalten meist wichtige Informationen zu dem Bereich des Boards, in dem Sie sich befinden. Sie sollten sie stets lesen. Bekanntmachungen erscheinen oben auf jeder Seite des Forums, in dem sie erstellt wurden. Wie bei globalen Bekanntmachungen hängt es von Ihren Berechtigungen ab, ob Sie Bekanntmachungen erstellen können oder nicht. Die Berechtigungen werden von der Board-Administration vergeben.',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> 'Was sind Bekanntmachungen?',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'BBCode ist eine spezielle Umsetzung von HTML, die Ihnen weitreichende Formatierungsmöglichkeiten für Ihren Text gibt. Die Rechte zur Verwendung von BBCode werden durch die Board-Administration vergeben, können jedoch auch durch Sie für jeden einzelnen Beitrag deaktiviert werden. BBCode ist ähnlich wie HTML aufgebaut, jedoch werden Tags von eckigen („[“ und „]“) statt spitzen („&lt;“ und „&gt;“) Klammern eingeschlossen. Weitere Informationen zu BBCode finden Sie auf einer speziellen Hilfe-Seite, die von der Seite zur Beitragserstellung aus zugänglich ist.',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> 'Was ist BBCode?',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> 'Globale Bekanntmachungen beinhalten wichtige Informationen, deshalb sollten Sie sie so bald wie möglich lesen. Globale Bekanntmachungen erscheinen ganz oben in jedem Forum und ebenfalls in Ihrem persönlichen Bereich. Ob Sie eine globale Bekanntmachung schreiben können oder nicht, hängt von den durch die Board-Administration vergebenen Berechtigungen ab.',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> 'Was sind globale Bekanntmachungen?',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> 'Nein, es ist nicht möglich, HTML-Code in Beiträgen zu verwenden. Die meisten Formatierungsmöglichkeiten, die HTML bietet, können über BBCode erreicht werden.',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> 'Kann ich HTML benutzen?',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> 'Themen-Symbole sind vom Autor ausgewählte Bilder, welche mit einem Thema in Verbindung stehen können, um dessen Inhalt kennzeichnen zu können. Die Möglichkeit, Themen-Symbole zu verwenden, hängt von Ihren Berechtigungen ab, die die Board-Administration gesetzt hat.',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> 'Was sind Themen-Symbole?',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'	=> 'Ja, Bilder können in Ihrem Beitrag angezeigt werden. Wenn die Administration Dateianhänge erlaubt hat, können Sie das Bild auch direkt hochladen. Ansonsten müssen Sie zu einem Bild verlinken, das auf einem öffentlich zugänglichen Server liegt, z.&nbsp;B. http://www.domain.tld/mein-bild.gif. Sie können weder Bilder verlinken, die sich auf Ihrem eigenen PC befinden (außer es ist ein öffentlich zugänglicher Server), noch zu Bildern, die nur nach einer Anmeldung verfügbar sind, z.&nbsp;B. Hotmail- oder Yahoo-Mailboxen, mit einem Passwort geschützte Seiten usw. Um das Bild anzuzeigen, benutze den BBCode-Tag „[img]“.',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> 'Kann ich Bilder in meine Beiträge einfügen?',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> 'Geschlossene Themen sind Themen, in denen nicht mehr geantwortet werden kann und bei denen eine laufende Umfrage, falls vorhanden, beendet wurde. Themen können aus vielen Gründen durch einen Moderator oder Administrator gesperrt werden. Eventuell haben Sie auch die Möglichkeit, Ihre eigenen Themen zu schließen, sofern dies durch die Board-Administration erlaubt wurde.',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> 'Was sind geschlossene Themen?',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=> 'Smileys sind kleine Bilder, die benutzt werden können, um ein Gefühl auszudrücken. Für jeden Smiley gibt es einen kurzen Code, z.&nbsp;B. bedeutet :) fröhlich und :( traurig. Die Liste aller Smileys können Sie beim Verfassen eines Beitrags sehen. Versuchen Sie bitte trotzdem, Smileys nicht zu häufig zu benutzen, sie können einen Beitrag schnell unlesbar machen und ein Moderator könnte deshalb Ihren Beitrag entsprechend überarbeiten oder gar komplett löschen. Die Board-Administration kann auch die Anzahl der Smileys begrenzen, die Sie in einem Beitrag benutzen können.',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> 'Was sind Smileys?',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=> 'Wichtige Themen eines Forums erscheinen unter den Ankündigungen und sind nur auf der ersten Seite zu sehen. Sie haben meist einen wichtigen Inhalt, weswegen Sie sie lesen sollten. Wie bei den Bekanntmachungen hängt es von Ihren Berechtigungen ab, ob Sie wichtige Themen erstellen können oder nicht; die Berechtigungen stellt die Board-Administration ein.',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> 'Was sind wichtige Themen?',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> 'Sie können diese Listen benutzen, um andere Mitglieder des Boards zu verwalten. Mitglieder, die Sie Ihrer Freundesliste hinzufügen, werden in Ihrem persönlichen Bereich für den schnellen Zugriff aufgelistet. Sie sehen dort deren Onlinestatus und können ihnen schnell eine Private Nachricht senden. Abhängig von dem Style, den Sie verwenden, können Beiträge Ihrer Freunde auch hervorgehoben sein. Wenn Sie einen Benutzer ignorieren, dann sehen Sie seine Beiträge standardmäßig nicht.',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> 'Wozu benötige ich die Listen der Freunde und ignorierten Mitglieder?',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=> 'Sie können Benutzer auf zwei Arten auf diese Listen setzen: In jedem Benutzerprofil sehen Sie zwei Links: einen zum Hinzufügen zur Liste der Freunde und einen zum Ignorieren des Benutzers. Außerdem können Sie im persönlichen Bereich direkt Benutzer zu den Listen hinzufügen, indem Sie deren Benutzernamen eingeben. An gleicher Stelle können Sie sie auch wieder von den Listen entfernen.',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> 'Wie kann ich Mitglieder zur Liste der Freunde oder zur Liste der ignorierten Mitglieder hinzufügen oder diese wieder aus den Listen entfernen?',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> 'Administratoren haben die umfassendsten Rechte im Forum. Sie können jede Art von Aktion im Forum ausführen; z.&nbsp;B. Berechtigungen setzen, Mitglieder sperren, Benutzergruppen erstellen, Moderationsrechte vergeben usw. Die Rechte, die ein Administrator hat, sind allerdings davon abhängig, welche Rechte ihnen ein Gründer des Forums oder ein anderer Administrator erteilt hat. Administratoren können auch volle Moderationsberechtigungen haben, wenn ihnen das entsprechende Recht erteilt wurde.',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'	=> 'Was sind Administratoren?',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'	=> 'Es ist der Board-Administration möglich, den Benutzergruppen verschiedene Farben zuzuteilen, so dass deren Mitglieder leichter zu identifizieren sind.',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'	=> 'Weshalb werden verschiedene Benutzergruppen farbig dargestellt?',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'	=> 'Wenn Sie Mitglied in mehr als einer Benutzergruppe sind, dient die Hauptgruppe dazu, Ihre Gruppenfarbe sowie den Gruppenrang, der bei Ihnen standardmäßig angezeigt wird, festzulegen. Ein Administrator kann Ihnen die Berechtigung geben, Ihre Hauptgruppe im persönlichen Bereich selbst festzulegen.',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'	=> 'Was ist eine Hauptgruppe?',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'	=> 'Die Aufgabe der Moderatoren ist es, das Geschehen im Forum zu beobachten. Sie haben das Recht, in ihrem Bereich Beiträge zu ändern und zu löschen und Themen zu schließen, zu öffnen, zu verschieben und zu teilen. Üblicherweise verhindern Moderatoren, dass Mitglieder „offtopic“, d.&nbsp;h. etwas nicht zum Thema Passendes, oder Beleidigendes bzw. Angreifendes schreiben.',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'	=> 'Was sind Moderatoren?',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'	=> 'Auf dieser Seite finden Sie eine Auflistung des Forenteams, einschließlich der Administratoren und der Moderatoren. Sie finden hier auch weitere Informationen wie die Foren, die diese im Einzelnen moderieren.',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'	=> 'Was bedeutet der „Das Team“-Link auf der Startseite?',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'	=> 'Benutzergruppen sind Gruppen von Mitgliedern, die die Mitglieder des Boards in für die Board-Administration verwaltbare Einheiten aufteilt. Jedes Mitglied kann mehreren Gruppen angehören und jeder Gruppe können Berechtigungen zugeteilt werden. Dies erleichtert es den Administratoren, Berechtigungen für mehrere Benutzer auf einmal zu ändern und sie zum Beispiel zu Moderatoren eines Bereichs zu machen oder ihnen Zugriff zu einem nichtöffentlichen Forum zu geben.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'	=> 'Sie finden die Benutzergruppen unter „Benutzergruppen“ im persönlichen Bereich. Wenn Sie einer beitreten möchten, können Sie dies mit der entsprechenden Schaltfläche machen. Nicht alle Gruppen sind allgemein offen. Einige erfordern erst eine Freischaltung, andere können geschlossen sein und weitere sogar versteckt. Wenn die Gruppe offen ist, können Sie ihr einfach durch die entsprechende Funktion beitreten; verlangt die Gruppe eine Freischaltung, so können Sie sich für sie bewerben. Ein Gruppenleiter muss daraufhin Ihren Antrag annehmen. Er könnte fragen, warum Sie in die Gruppe aufgenommen werden möchten. Bitte belästige keinen Gruppenleiter, wenn er Sie ablehnt, er wird einen Grund dafür haben.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> 'Wo finde ich die Benutzergruppen und wie trete ich ihnen bei?',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'	=> 'Der Leiter einer Gruppe wird normalerweise durch die Board-Administration festgelegt, wenn die Gruppe erstellt wird. Wenn Sie eine eigene Benutzergruppe erstellen möchten, dann sollten Sie einen Administrator kontaktieren.',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> 'Wie werde ich Gruppenleiter?',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'	=> 'Was sind Benutzergruppen?',

	'HELP_FAQ_ISSUES_ADMIN_ANSWER'	=> 'Alle Benutzer des Boards können das Kontaktformular nutzen, wenn die Funktion durch die Board-Administration aktiviert wurde.<br />Mitglieder des Boards können zusätzlich den Link „Das Team“ verwenden.',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'	=> 'Wie kann ich einen Administrator des Boards kontaktieren?',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'	=> 'Diese Software wurde von phpBB Limited geschrieben. Wenn Sie denken, dass eine Funktion implementiert werden sollte, dann besuchen Sie <a href="https://www.phpbb.com/ideas/">phpBB Ideas</a>, wo Sie Ihre Stimme für bestehende Vorschläge abgeben oder neue Funktionen vorschlagen können.',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'	=> 'Warum ist Funktion x oder y nicht enthalten?',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'	=> 'Jeder Administrator, der auf der „Das Team“-Seite aufgeführt ist, ist ein geeigneter Kontakt für Ihre Beschwerde. Wenn Sie so keine Antwort erhalten, sollten Sie den Besitzer der Domain kontaktieren (führen Sie dazu eine <a href="https://www.google.com/search?q=whois">„WHOIS“-Abfrage</a> durch) oder — falls diese Seite bei einem kostenlosen Webhoster wie z.&nbsp;B. Yahoo!, free.fr, funpic.de usw. liegt — den Support oder den Abuse-Kontakt des betreffenden Dienstes. Bitte beachten Sie, dass phpBB Limited (phpBB.com) und phpBB Deutschland e.&nbsp;V. (phpBB.de) <strong>absolut keinen Einfluss</strong> auf die Benutzung oder den oder die Benutzer der Forensoftware haben und dafür in keiner Weise zur Verantwortung herangezogen werden können. Kontaktieren Sie daher nie phpBB Limited oder phpBB Deutschland e.&nbsp;V. in Zusammenhang mit jeglichen juristischen Fragen (Unterlassungserklärungen, Haftungsfragen usw.), die <strong>sich nicht direkt</strong> auf die Website phpbb.com, phpbb.de oder die phpBB-Software selbst beziehen. Falls Sie phpBB Limited oder phpBB Deutschland e.&nbsp;V. E-Mails schreiben, die die <strong>Softwarenutzung durch Dritte</strong> betreffen, so werden Sie, wenn überhaupt, höchstens eine knappe Antwort erhalten.',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'	=> 'An wen soll ich mich wenden, falls es Beschwerden oder juristische Anfragen zu diesem Forum gibt?',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=> 'Diese Software (in ihrer unmodifizierten Fassung) wurde von <a href="https://www.phpbb.com/">phpBB Limited</a> entwickelt und veröffentlicht. Sie ist urheberrechtlich geschützt. Sie wurde unter der GNU General Public License, Version 2 (GPL-2.0) veröffentlicht und kann frei vertrieben werden. Weitere Details finden Sie <a href="https://www.phpbb.com/about/">auf der Seite von phpBB Limited</a>. Eine deutschsprachige Anlaufstelle ist unter <a href="https://www.phpbb.de/">phpBB.de</a> zu finden.',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> 'Wer hat diese Forensoftware entwickelt?',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'	=> 'Wenn Sie beim Anmelden das Kontrollkästchen „Angemeldet bleiben“ nicht auswählen, werden Sie nur für eine Sitzung angemeldet. Dies verhindert den Missbrauch Ihres Benutzerkontos durch einen Dritten. Um angemeldet zu bleiben, können Sie das Kästchen „Angemeldet bleiben“ beim Anmelden auswählen. Dies ist nicht empfehlenswert, wenn Sie sich an einem öffentlichen Computer, zum Beispiel in einem Internetcafé, befinden. Wenn diese Option nicht zur Verfügung steht, dann wurde sie vermutlich von der Board-Administration ausgeschaltet.',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'	=> 'Warum werde ich automatisch abgemeldet?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'	=> 'Dafür gibt es viele mögliche Gründe. Prüfen Sie zunächst, ob Ihr Benutzername und Ihr Passwort richtig sind. Wenn dies der Fall ist, wenden Sie sich an einen Board-Administrator, um sicherzugehen, dass Sie nicht gesperrt wurden. Es ist ebenfalls möglich, dass ein Konfigurationsproblem mit der Website vorliegt, welches ein Administrator lösen muss.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'	=> 'Es kann sein, dass ein Administrator Ihr Benutzerkonto aus verschieden Gründen deaktiviert oder gelöscht hat. Außerdem löschen viele Boards regelmäßig Benutzer, die für längere Zeit keine Beiträge geschrieben haben, um die Datenbankgröße zu verringern. Registrieren Sie sich einfach erneut und nehmen Sie aktiv an den Diskussionen teil!',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> 'Ich habe mich vor einiger Zeit registriert, kann mich aber nicht mehr anmelden?!',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'	=> 'Warum kann ich mich nicht anmelden?',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'	=> 'Es kann sein, dass die Board-Administration die Registrierung komplett ausgeschaltet hat, damit sich keine neuen Benutzer mehr anmelden können. Es könnte auch sein, dass Ihre IP-Adresse oder der Benutzername, mit dem Sie sich registrieren möchten, gesperrt wurden. Um Hilfe zu erhalten, wenden Sie sich an die Board-Administration.',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'	=> 'Warum kann ich mich nicht registrieren?',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'	=> 'COPPA, ausgeschrieben Children’s Online Privacy Protection Act of 1998 (deutsch: Gesetz zum Schutz der Privatsphäre von Kindern im Internet von 1998) ist ein Gesetz in den USA, welches festlegt, dass Websites, die möglicherweise persönliche Daten von Kindern unter 13 Jahren erheben, hierzu die Zustimmung der Eltern beziehungsweise des oder der Erziehungsberechtigten benötigen. Wenn Sie sich unsicher sind, ob dies auf Sie oder die Website, auf der Sie sich zu registrieren versuchen, zutrifft, ziehen Sie einen rechtlichen Beistand zu Rate. Bitte beachten Sie, dass phpBB Limited und der Besitzer dieses Boards keine Rechtsberatung anbieten kann und nicht die Anlaufstelle für Rechtsangelegenheiten jeglicher Art ist; außer solchen, die unter der Frage „An wen soll ich mich wenden, falls es Beschwerden oder juristische Anfragen zu diesem Forum gibt?“ behandelt werden.',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'	=> 'Was ist COPPA?',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'	=> '„Alle Cookies löschen“ löscht die Cookies, die phpBB erstellt hat und die dafür sorgen, dass Sie im Forum angemeldet bleiben. Außerdem ermöglichen Cookies einige Funktionen, wie beispielsweise den „Gelesen“-Status – sofern sie von der Board-Administration aktiviert wurden. Wenn Sie Probleme bei der An- oder Abmeldung haben, kann es helfen, wenn Sie die Cookies löschen.',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'	=> 'Wozu ist die Funktion „Alle Cookies löschen“?',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'	=> 'Das ist nicht schlimm! Wir können Ihnen zwar Ihr altes Passwort nicht wieder mitteilen, Sie können es jedoch zurücksetzen. Dies machen Sie, indem Sie auf der Anmelde-Seite auf „Ich habe mein Passwort vergessen“ klicken und den Anweisungen folgen. So sollten Sie sich schnell wieder anmelden können.<br />Sollten Sie trotzdem nicht in der Lage sein, Ihr Passwort zurückzusetzen, so wenden Sie sich an die Board-Administration.',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'	=> 'Ich habe mein Passwort vergessen!',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'	=> 'Eine Registrierung ist nicht unbedingt zwingend. Die Board-Administration dieses Forums entscheidet, ob Sie registriert sein müssen, um Beiträge zu schreiben. Auf jeden Fall erhalten Sie als registriertes Mitglied Zugriff auf zusätzliche Funktionen, die Gästen nicht zur Verfügung stehen: zum Beispiel Avatarbilder, Private Nachrichten, E-Mail-Versand an andere Mitglieder, Beitritt zu Benutzergruppen und so weiter. Wir empfehlen Ihnen eine Anmeldung, da sie schnell erledigt ist und Ihnen zahlreiche Vorteile bietet.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'	=> 'Überprüfen Sie zuerst, ob Sie den richtigen Benutzernamen und das richtige Passwort eingegeben haben. Wenn diese stimmen, dann gibt es zwei Möglichkeiten. Wenn <a href="#f07">COPPA</a> aktiviert ist und Sie angegeben haben, dass Sie unter 13 Jahre alt sind, müssen Sie bzw. einer Ihrer Eltern oder Ihrer Erziehungsberechtigten den Anweisungen folgen, die Sie erhalten haben. Wenn dies nicht der Fall ist, muss Ihr Benutzerkonto vielleicht aktiviert werden. Bei einigen Foren müssen alle neu angemeldeten Mitglieder erst freigeschaltet werden – entweder müssen Sie dies selbst erledigen oder ein Administrator. Bei der Registrierung wurde Ihnen mitgeteilt, ob eine Aktivierung nötig ist oder nicht. Wenn Sie eine E-Mail erhalten haben, folgen Sie den dort enthaltenen Anweisungen. Ansonsten prüfen Sie, ob Sie Ihre E-Mail-Adresse korrekt eingegeben haben oder die E-Mail von einem Spam-Filter blockiert wurde. Wenn Sie sich sicher sind, dass Ihre E-Mail-Adresse korrekt eingegeben wurde, dann kontaktieren Sie einen Administrator.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'	=> 'Ich habe mich registriert, kann mich aber nicht anmelden!',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'	=> 'Wozu muss ich mich registrieren?',

	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=> 'Hierfür kann es drei Gründe geben: Entweder Sie sind nicht registriert und / oder nicht angemeldet, oder die Board-Administration hat Private Nachrichten für das komplette Forum ausgeschaltet. Außerdem könnte es sein, dass der Administrator Ihnen das Recht, Private Nachrichten zu verschicken, entzogen hat. Kontaktieren Sie einen Administrator, um weitere Informationen zu erhalten.',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> 'Ich kann keine Privaten Nachrichten verschicken!',
	'HELP_FAQ_PMS_SPAM_ANSWER'	=> 'Es tut uns leid, das zu hören. Das E-Mail-Formular dieses Forums hat einige Sicherheitsvorkehrungen, die Benutzer, die solche Nachrichten senden, identifizieren sollen. Sie sollten einem Administrator die komplette E-Mail, die Sie bekommen haben, weiterleiten. Dabei ist es ganz wichtig, die Kopfzeilen (Headers) mitzuschicken. Diese enthalten Details über den Benutzer, der die E-Mail verschickt hat. Der Administrator kann dann entsprechend reagieren.',
	'HELP_FAQ_PMS_SPAM_QUESTION'	=> 'Ich habe eine Spam-E-Mail von einem Mitglied dieses Forums erhalten!',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'	=> 'Sie können Private Nachrichten, die Ihnen ein Mitglied sendet, automatisch löschen, indem Sie in Ihrem persönlichen Bereich eine entsprechende Regel erstellen. Falls Sie belästigende Nachrichten von jemandem erhalten, so können Sie dies auch einem Administrator melden. Dieser kann dem betreffenden Mitglied dann verbieten, Private Nachrichten zu versenden.',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'	=> 'Ich bekomme ständig unerwünschte Private Nachrichten!',

	'HELP_FAQ_POSTING_BUMP_ANSWER'	=> 'Durch Klicken des „Thema als neu markieren“-Links in der Beitragsansicht können Sie das Thema wieder ganz nach oben auf die erste Seite des Forums holen. Wenn Sie den entsprechenden Link nicht sehen, dann ist die Funktion möglicherweise deaktiviert oder seit der letzten Markierung ist nicht genügend Zeit vergangen. Es ist auch möglich, das Thema nach oben zu holen, indem Sie einfach eine Antwort darauf schreiben. Stellen Sie jedoch sicher, dass Sie die Regeln dieses Boards beachten! Es wird meist nicht gerne gesehen, wenn ohne triftigen Grund auf alte oder abgeschlossene Themen geantwortet wird.',
	'HELP_FAQ_POSTING_BUMP_QUESTION'	=> 'Wie markiere ich ein Thema als neu?',
	'HELP_FAQ_POSTING_CREATE_ANSWER'	=> 'Um ein neues Thema in einem Forum zu eröffnen, müssen Sie auf „Neues Thema“ klicken. Um auf einen Beitrag zu antworten, müssen Sie auf „Antworten“ klicken. Es könnte sein, dass eine Registrierung erforderlich ist, bevor Sie einen Beitrag schreiben können. Ihre Berechtigungen sind jeweils am Ende der Foren- und der Beitragsansicht aufgelistet. Z.&nbsp;B. „Sie dürfen neue Themen erstellen“, „Sie dürfen Dateianhänge erstellen“ usw.',
	'HELP_FAQ_POSTING_CREATE_QUESTION'	=> 'Wie erstelle ich ein neues Thema oder eine Antwort?',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'	=> 'Hiermit können Sie die geschriebene Entwürfe speichern und zu einem späteren Zeitpunkt vervollständigen und absenden. Den gesicherten Beitrag können Sie mit der Funktion „Gespeicherte Entwürfe verwalten“ in Ihrem persönlichen Bereich erneut laden.',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> 'Was bewirkt die „Speichern“-Schaltfläche beim Schreiben eines Beitrags?',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'	=> 'Wenn Sie nicht Administrator oder Moderator sind, können Sie nur Ihre eigenen Beiträge bearbeiten oder löschen. Sie können einen Beitrag bearbeiten, indem Sie das „Ändere Beitrag“-Symbol für den entsprechenden Beitrag anklicken; eventuell ist dies nur für einen begrenzten Zeitraum nach seiner Erstellung möglich. Wenn bereits jemand auf Ihren Beitrag geantwortet hat, wird Ihr Beitrag in der Themenansicht als überarbeitet gekennzeichnet. Es wird sowohl die Anzahl als auch der letzte Zeitpunkt der Bearbeitungen angezeigt. Dieser Hinweis erscheint nicht, wenn noch niemand auf Ihren Beitrag geantwortet hat oder wenn ein Administrator oder Moderator Ihren Beitrag überarbeitet hat. Diese können jedoch, falls sie es für nötig halten, eine Notiz hinterlassen, warum Ihr Beitrag überarbeitet wurde. Bitte beachten Sie, dass normale Benutzer einen Beitrag nicht löschen können, wenn bereits jemand darauf geantwortet hat.',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'	=> 'Wie kann ich einen Beitrag bearbeiten oder löschen?',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=> 'Manche Foren können bestimmten Benutzern oder Gruppen vorbehalten sein. Um diese einzusehen, Beiträge zu lesen, zu schreiben oder andere Vorgänge durchzuführen, brauchen Sie möglicherweise besondere Berechtigungen. Fragen Sie einen Moderator oder Administrator nach entsprechenden Berechtigungen.',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> 'Warum kann ich auf bestimmte Foren nicht zugreifen?',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'	=> 'Rechte für Dateianhänge können für Foren, Gruppen und einzelne Benutzer vergeben werden. Die Board-Administration hat es möglicherweise nicht erlaubt, Dateianhänge in dem Forum anzufügen, in dem Sie Ihren Beitrag verfassen möchten, oder nur bestimmte Gruppen dürfen Dateien hochladen. Sie können einen Administrator kontaktieren, falls Sie sich nicht sicher sind, wieso Sie keine Dateianhänge anfügen können.',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> 'Weshalb kann ich keine Dateianhänge anfügen?',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'	=> 'Die maximal zulässige Anzahl von Antwortmöglichkeiten wird durch die Board-Administration festgelegt. Wenn Sie glauben, mehr Antwortmöglichkeiten als zugelassen zu benötigen, kontaktieren Sie einen Administrator.',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'	=> 'Wieso kann ich nicht mehr Antwortmöglichkeiten erstellen?',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'	=> 'Wenn Sie ein neues Thema eröffnen oder den ersten Beitrag eines Themas bearbeiten, finden Sie ein Register „Umfrage erstellen“ unterhalb des Formulars zur Beitragserstellung. Sollten Sie diesen Bereich nicht sehen können, so haben Sie wahrscheinlich nicht die Berechtigung, Umfragen zu erstellen. Sie sollten einen Titel und mindestens zwei Antwortmöglichkeiten in die entsprechenden Felder eingeben und dabei sicherstellen, dass jede Antwortmöglichkeit in einer eigenen Zeile steht. Sie können auch unter „Auswahlmöglichkeiten pro Benutzer“ festlegen, wie viele Optionen ein Benutzer auswählen kann, welches Zeitlimit für die Umfrage gilt (0 bedeutet dabei eine zeitlich unbegrenzte Umfrage) und schließlich, ob die Benutzer ihre Stimme ändern können.',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> 'Wie kann ich eine Umfrage erstellen?',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'	=> 'Wie bei den Beiträgen können Umfragen nur vom ursprünglichen Verfasser, einem Moderator oder einem Administrator bearbeitet werden. Um eine Umfrage zu bearbeiten, ändern Sie den ersten Beitrag des Themas; dieser ist immer mit der Umfrage verknüpft. Wenn niemand eine Stimme abgegeben hat, dann können Benutzer die Umfrage löschen oder die Umfrageoption bearbeiten. Sollte allerdings schon ein Benutzer abgestimmt haben, so kann die Umfrage nur noch von Moderatoren oder Administratoren geändert oder gelöscht werden. Dadurch soll die Manipulation von laufenden Umfragen verhindert werden.',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'	=> 'Wie bearbeite oder lösche ich eine Umfrage?',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'	=> 'Die Board-Administration kann entschieden haben, dass in dem Forum, in dem Sie einen Beitrag erstellt haben, die Beiträge zuerst geprüft werden müssen. Es ist auch möglich, dass die Administration Sie zu einer Gruppe von Benutzern hinzugefügt hat, bei denen sie die Beiträge erst begutachten möchte, bevor sie auf der Seite sichtbar werden. Bitte kontaktieren Sie die Board-Administration, wenn Sie weitere Informationen dazu benötigen.',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'	=> 'Warum muss mein Beitrag erst freigegeben werden?',
	'HELP_FAQ_POSTING_REPORT_ANSWER'	=> 'Wenn ein Administrator die entsprechenden Berechtigungen vergeben hat, sehen Sie eine Schaltfläche in der Nähe des Beitrags, um diesen zu melden. Sie werden dann durch die weiteren Schritte geführt.',
	'HELP_FAQ_POSTING_REPORT_QUESTION'	=> 'Wie kann ich Beiträge den Moderatoren melden?',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'	=> 'Um eine Signatur an Ihren Beitrag anzufügen, müssen Sie zunächst eine solche in den Einstellungen in Ihrem persönlichen Bereich entwerfen. Nachdem Sie die Signatur erstellt und gespeichert haben, können Sie in jedem Beitrag das Kästchen „Signatur anhängen“ aktivieren. Sie können eine Signatur auch hinzufügen, indem Sie in Ihrem persönlichen Bereich das standardmäßige Anhängen Ihrer Signatur aktivieren. Wenn Sie einen einzelnen Beitrag dennoch ohne Signatur verfassen möchten, so können Sie dort einfach das Kontrollkästchen „Signatur anhängen“ wieder deaktivieren.',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'	=> 'Wie kann ich meinem Beitrag eine Signatur anfügen?',
	'HELP_FAQ_POSTING_WARNING_ANSWER'	=> 'In jedem Board gibt es eigene Regeln, die meistens von der Administration festgelegt werden. Wenn Sie gegen eine dieser Regeln verstoßen haben, kann sie Ihnen eine Verwarnung erteilen. Bitte beachten Sie, dass dies die Entscheidung der Administration dieses Boards ist und phpBB Limited nichts mit dieser Verwarnung zu tun hat. Kontaktieren Sie einen Administrator, sofern Sie sich die nicht sicher sind, wieso Sie verwarnt wurden.',
	'HELP_FAQ_POSTING_WARNING_QUESTION'	=> 'Weshalb wurde ich verwarnt?',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'	=> 'Ihre Suche lieferte zu viele Ergebnisse, somit konnte der Webserver sie nicht verarbeiten. Benutzen Sie die erweiterte Suche und geben Sie spezifischere Suchbegriffe ein oder beschränken Sie die Suche auf verschiedene Unterforen.',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'	=> 'Warum bekomme ich bei der Suche eine leere Seite?',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'	=> 'Sie können die Foren durchsuchen, indem Sie einen Suchbegriff in die Suchbox eingeben, die Sie in der Foren-Übersicht, der Foren- oder Themenansicht finden. Erweiterte Suchmöglichkeiten erhalten Sie, indem Sie den „Erweiterte Suche“-Link anklicken, der von jeder Seite des Forums aus verfügbar ist.',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'	=> 'Wie kann ich ein Forum oder mehrere Foren durchsuchen?',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'	=> 'Gehen Sie zur „Mitglieder“-Seite und klicken Sie auf „Nach einem Mitglied suchen“.',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'	=> 'Wie kann ich nach Mitgliedern suchen?',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'	=> 'Ihre Suche war möglicherweise zu allgemein gehalten und enthielt zu viele gängige Wörter, welche von phpBB nicht indiziert werden. Stellen Sie eine spezifischere Anfrage und benutzen Sie die Optionen, die Ihnen die erweiterte Suche bietet. Außerdem ist es natürlich auch möglich, dass Ihr(e) Suchbegriff(e) hier nirgends im Forum verwendet wurden. Prüfen Sie ggf. die Rechtschreibung der Begriffe!',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> 'Weshalb erhalte ich bei der Suche keine Ergebnisse?',
	'HELP_FAQ_SEARCH_OWN_ANSWER'	=> 'Ihre eigenen Beiträge können Sie sich anzeigen lassen, indem Sie „Eigene Beiträge“ im Schnellzugriff oben auf der Boardseite auswählen. Alternativ können Sie auch „Ihre Beiträge anzeigen“ in Ihrem persönlichen Bereich oder „Beiträge des Benutzers suchen“ auf Ihrer eigenen Profilseite verwenden. Benutzen Sie die erweiterte Suche, um nach von Ihnen erstellen Themen zu suchen. Tragen Sie dort die entsprechenden Optionen in die Suchmaske ein.',
	'HELP_FAQ_SEARCH_OWN_QUESTION'	=> 'Wie kann ich meine eigenen Beiträge und Themen finden?',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'	=> 'In der Beitragsansicht können zwei Bilder bei Ihrem Benutzernamen stehen. Eines dieser Bilder ist meist mit Ihrem Rang verknüpft: Oft sind dies Sterne, Kästchen oder Punkte, die Ihre Beitragszahl oder Ihren Status im Forum angeben. Das andere, meist größere, Bild wird auch als „Avatar“ bezeichnet. Es handelt sich hierbei in der Regel um ein persönliches Bild, welches von Benutzer zu Benutzer unterschiedlich ist.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=> 'In Ihrem persönlichen Bereich können Sie unter „Profil“ einen Avatar über eine der folgenden vier Methoden hinzufügen: Gravatar, Galerie, Remote oder Hochladen. Die Board-Administration kann bestimmen, ob und wie die Benutzer Avatare benutzen können. Wenn Sie keinen Avatar benutzen können, sollten Sie die Board-Administration kontaktieren.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> 'Wie verwende ich einen Avatar?',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'	=> 'Was sind das für Bilder, die bei meinem Benutzernamen angezeigt werden?',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=> 'Wenn Sie sich registriert haben, werden alle Ihre Einstellungen in der Datenbank des Boards gespeichert. Um diese zu ändern, gehen Sie in den „Persönlichen Bereich“; der Link dazu wird meist oben auf der Seite angezeigt, wenn Sie auf Ihren Benutzernamen klicken. Dort können Sie alle Ihre Einstellungen ändern.',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> 'Wie kann ich meine Einstellungen ändern?',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'	=> 'Nur registrierte Benutzer dürfen die foreninterne E-Mail-Funktion für Nachrichten an andere Benutzer nutzen, falls diese von der Board-Administration freigeschaltet wurde. Diese Maßnahme soll den Missbrauch dieses Systems durch Gäste verhindern.',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'	=> 'Wenn ich bei einem Benutzer auf den E-Mail-Link klicke, werde ich aufgefordert, mich anzumelden.',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'	=> 'In Ihrem persönlichen Bereich finden Sie in den Einstellungen eine Option „Meinen Online-Status während dieser Sitzung verbergen“. Wenn Sie diese Option einschalten, können nur Administratoren, Moderatoren und Sie selbst Ihren Online-Status sehen. Sie werden dann als unsichtbarer Besucher gezählt.',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'	=> 'Wie kann ich verhindern, dass mein Benutzername in der Online-Liste auftaucht?',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'	=> 'Meist hat die Board-Administration entweder Ihre Sprache nicht installiert oder niemand hat das Forum bislang in Ihre Sprache übersetzt. Fragen Sie ggf. einen Board-Administrator, ob er das Sprachpaket, das Sie benötigen, installieren kann. Falls es noch nicht existiert, würden wir uns freuen, wenn Sie es übersetzen würden. Weitere Informationen dazu können auf der Website von <a href="https://www.phpbb.com/">phpBB Limited</a> oder auf <a href="https://www.phpbb.de/">phpBB.de</a> gefunden werden.',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'	=> 'Meine Sprache steht auf diesem Board nicht zur Auswahl!',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'	=> 'Ränge, die unter Ihrem Benutzernamen stehen, zeigen an, wie viele Beiträge Sie bislang erstellt haben oder identifizieren bestimmte Benutzer wie Moderatoren und Administratoren. Normalerweise können Sie den Wortlaut eines Ranges nicht direkt ändern, da sie von der Board-Administration festgelegt wurden. Bitte schreiben Sie keine sinnlosen Beiträge, nur um Ihren Rang zu erhöhen — die meisten Foren dulden dieses Verhalten nicht und ein Moderator oder Administrator wird Ihren Rang unter Umständen einfach wieder zurücksetzen.',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'	=> 'Was ist mein Rang und wie kann ich ihn ändern?',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'	=> 'Wenn Sie sich sicher sind, dass Sie die Zeitzone richtig eingestellt haben und die Zeit trotzdem noch falsch ist, geht die Uhr des Servers vermutlich falsch. Kontaktieren Sie einen Administrator, damit er das Problem beheben kann.',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'	=> 'Ich habe die Zeitzone eingestellt, aber die Forenuhr geht immer noch falsch!',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'	=> 'Möglicherweise entspricht die angezeigte Zeit nicht Ihrer eigenen Zeitzone. In diesem Fall sollten Sie im „Persönlichen Bereich“ die für Sie passende Zeitzone (Mitteleuropäische Zeit, ...) festlegen. Die Zeitzone kann dabei nur von registrierten Benutzern geändert werden. Wenn Sie noch nicht registriert sind, ist dies ein guter Grund, dies jetzt zu tun.',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'	=> 'Die Forenuhr geht falsch!',
));