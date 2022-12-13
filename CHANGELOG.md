# REDAXO Demo Base - Changelog


## Version 3.0.1 – 13.12.2022

### Bugfixes

* Verwendete AddOns aktualisiert zwecks Kompatibilität mit PHP 8.2


## Version 3.0.0 – 05.01.2022

### Breaking changes

* Der **Redactor**-Editor wurde ausgewechselt: Es wird nun die aktuelle [Version 3](https://github.com/FriendsOfREDAXO/redactor) mit der Bezeichnung `redactor` verwendet. Die vorherige Version `redactor2` wird bereits seit einiger Zeit nicht weiterentwickelt.
* **YForm** auf Version 4 aktualisiert. Diese bringt ein paar Änderungen mit, die jedoch für die Demo nicht relevant sind.

### Features

* Verwendung der neuen Mediatypen, die mit REDAXO 5.13 eingeführt wurden (z. B. `rex_media_small`)

### Bugfixes

* Navigation korrigiert: Der versehentlich deaktivierte Bereich »Templates« ist nun wieder vorhanden ([#82](https://github.com/FriendsOfREDAXO/demo_base/issues/82))
* Diverse kleine Inhaltskorrekturen ([#82](https://github.com/FriendsOfREDAXO/demo_base/issues/82))


## Version 2.10.1 – 06.10.2021

### Bugfixes

* Fehler bei der Installation behoben, wenn zuvor das Developer-AddOn aktiviert war


## Version 2.10.0 – 29.09.2021

### Features

* Anpassung für den Dark Mode (REDAXO 5.13)


## Version 2.9.1 – 27.02.2021

### Features

* Hinweis auf die Demo-Seite nach Installation des AddOns
* Mehrsprachige Seitentitel


## Version 2.8.2 – 27.02.2021

### Bugfixes

* ID der Trennline im Modul »03 . Text mit Bild (1 - 3 Spalten)« korrigiert ([#76](https://github.com/FriendsOfREDAXO/demo_base/issues/76))
* Verwendete AddOns aktualisiert
* Links ins Forum korrigiert, so dass sie nun auf den Slack-Chat zeigen
* Link auf die Lieblinge auf redaxo.org korrigiert


## Version 2.8.0 – 18.03.2020

### Features

* Installation über die Konsole mittels `demo_base:install`

### Bugfixes

* Anpassungen für REDAXO 5.10


## Version 2.7.0 – 06.02.2020

### Features

* Neue Importdatei mit vollständigem Unicode-Zeichensatz (utf8mb4) für REDAXO 5.9 hinzugefügt. Bestehende Importdatei (utf8) für REDAXO 5.9 aktualisiert.
* Importfunktion aktualisiert
* REDAXO-Mindestversion auf 5.9.0 angehoben
* READMEs nach Sprachen aufgeteilt
* Upgrade auf jQuery 3.4.1 ([#73](https://github.com/FriendsOfREDAXO/demo_base/issues/73))  
  jQuery Migrate hinzugefügt, um Kompatibilität mit prettyPhoto zu erhalten.
* Update auf YForm 3.3.1
* Update auf MarkItUp 3.3.4

### Bugfixes 

* Prüfung von Online-Datum aus Metainfos korrigiert ([#74](https://github.com/FriendsOfREDAXO/demo_base/issues/74))  


## Version 2.6.6

* Kleine Bugfixes (#70, #71), Aktualisierungen von REDAXO und den AddOns


## Version 2.6.5

* YForm-Version auf 3.0 angepasst (#68, @GianlucaScarciolla)


## Version 2.6.4

* YForm-Version auf 3.0-beta6 angepasst


## Version 2.6.3

* Packages in `package.yml` angepasst (#66)
* Information zum Umgang mit `package.setup.yml` ergänzt (#67)


## Version 2.6.2

* Datenbankstruktur korrigiert
* Fehlerprüfungen hinzugefügt
* Versionen aktualisiert


## Version 2.6.1

* Structure-version angepasst für den Installationsprozess


## Version 2.6

* Dateigröße der Demo durch Komprimierung der Fotos drastisch reduziert
* Onlinedatum und Offlinedatum für Artikel eingebaut
* Diverse Bugs (PHP-Modul, Downloads-Modul, Clearing der Sidebar, Medientyp fullscreen)


## Version 2.6

* Dateigröße der Demo durch Komprimierung der Fotos drastisch reduziert
* Onlinedatum und Offlinedatum für Artikel eingebaut
* Diverse Bugs (PHP-Modul, Downloads-Modul, Clearing der Sidebar, Medientyp fullscreen)


## Version 2.5

* Automatisches Setup der Demo-Website


## Version 2.4

* Kompatibilität mit dem aktuellen Redactor-Addon
* Code an verschiedenen Stellen verbessert
* Anpassungen im Footer (Verlinkung, Styles)
* Favicon und Touch-Icon
* Dependencies der verwendeten AddOns


## Version 2.3

* Dependencies der verwendeten AddOns
* Aktiv-Status in Footer-Linkliste
* Bug und Optimierung bei Responsive-Navigation


## Version 2.2

* Externe Links im neuen Fenster angepasst
* Dependencies auf markitup und redactor2 angepasst
* Anforderungen an Core/Addons angepasst: REDAXO 5.2, YForm 2, Sprog


## Version 2.1

* Hinweis auf Iconpicker-AddOn. Modul mit den drei Teaserkästen und Icons für das AddOn vorbereitet.
* Demo für die Updates von rex_markitup und rex_redactor2 angepasst.
* Textile als Pflicht-AddOn entfernt und Module angepasst für den in rex_markitup enthaltenen Textile-Parser.
* SliceUI als Pflicht-AddOn entfernt.


## Version 2.0

### Neu

* Mehrsprachigkeit! Die Demo mit allen Erklärungen ist komplett zweisprachig: deutsch und englisch. Vielen Dank an schuer für die Übersetzungen.
* Die Demo zeigt natürlich auch, wie man in REDAXO mit mehreren Sprachen arbeiten kann.
* Die Demo zog in den Github-Account von FriendsOfREDAXO um.

### Bugfixes

* Auch die von YForm angelegten Tabellen wurden auf InnoDB umgestellt.
* Die Abstände im Home-Slider wurden in der Mobil-Ansicht optimiert.
* Das Logo ist nun als SVG eingebunden.


## Version 1.2

* Update auf REDAXO 5.1. Dadurch werden auch neue Felder in der Datenbank angelegt, so dass ein neuer Export der Demo nötig wurde.
* Lizenzinformationen hinzugefügt in der Datei LICENSE.md


## Version 1.1

### Neu

* Die REDAXO-Demo kann nun auch in einem Unterverzeichnis laufen, sowohl mit yRewrite als auch ohne
* Beispiel für Breadcrumb-Navigation
* optional Hintergrundfarbe für einige Module

### Bugfixes/Optimierungen

* fehlerhafter Link im Download-Modul
* Bild einfügen im Redactor und Markitup-Modul
* fehlerhafte Footer-Links, bei denen der verlinkte Artikel gelöscht wurde
* Parallax auf Mobilgeräten
* Standard-Abdunkelung des Header-Fotos
