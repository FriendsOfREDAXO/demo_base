REDAXO Demo Base - Changelog
======================

### Version 2.6.5

*Updates:*

* YForm-Version auf 3.0 angepasst (#68, @GianlucaScarciolla)

### Version 2.6.4

*Updates:*

* YForm-Version auf 3.0-beta6 angepasst

### Version 2.6.3

*Updates:*

* Packages in `package.yml` angepasst (#66)
* Information zum Umgang mit `package.setup.yml` ergänzt (#67)

### Version 2.6.2

*Updates:*

* Datenbankstruktur korrigiert
* Fehlerprüfungen hinzugefügt
* Versionen aktualisiert

### Version 2.6.1

*Updates:*

* Structure-version angepasst für den Installationsprozess

### Version 2.6

*Updates:*

* Dateigröße der Demo durch Komprimierung der Fotos drastisch reduziert
* Onlinedatum und Offlinedatum für Artikel eingebaut
* Diverse Bugs (PHP-Modul, Downloads-Modul, Clearing der Sidebar, Medientyp fullscreen)

### Version 2.6

*Updates:*

* Dateigröße der Demo durch Komprimierung der Fotos drastisch reduziert
* Onlinedatum und Offlinedatum für Artikel eingebaut
* Diverse Bugs (PHP-Modul, Downloads-Modul, Clearing der Sidebar, Medientyp fullscreen)

### Version 2.5

*Updates:*

* Automatisches Setup der Demo-Website

### Version 2.4

*Updates:*

* Kompatibilität mit dem aktuellen Redactor-Addon
* Code an verschiedenen Stellen verbessert
* Anpassungen im Footer (Verlinkung, Styles)
* Favicon und Touch-Icon
* Dependencies der verwendeten AddOns

### Version 2.3

*Updates:*

* Dependencies der verwendeten AddOns
* Aktiv-Status in Footer-Linkliste
* Bug und Optimierung bei Responsive-Navigation

### Version 2.2

*Updates:*

* Externe Links im neuen Fenster angepasst
* Dependencies auf markitup und redactor2 angepasst
* Anforderungen an Core/Addons angepasst: REDAXO 5.2, YForm 2, Sprog

### Version 2.1

*Neu:*

* Hinweis auf Iconpicker-AddOn. Modul mit den drei Teaserkästen und Icons für das AddOn vorbereitet.
* Demo für die Updates von rex_markitup und rex_redactor2 angepasst.
* Textile als Pflicht-AddOn entfernt und Module angepasst für den in rex_markitup enthaltenen Textile-Parser.
* SliceUI als Pflicht-AddOn entfernt.

### Version 2.0

*Neu:*

* Mehrsprachigkeit! Die Demo mit allen Erklärungen ist komplett zweisprachig: deutsch und englisch. Vielen Dank an schuer für die Übersetzungen.
* Die Demo zeigt natürlich auch, wie man in REDAXO mit mehreren Sprachen arbeiten kann.
* Die Demo zog in den Github-Account von FriendsOfREDAXO um.


*Bugfixes:*

* Auch die von YForm angelegten Tabellen wurden auf InnoDB umgestellt.
* Die Abstände im Home-Slider wurden in der Mobil-Ansicht optimiert.
* Das Logo ist nun als SVG eingebunden.

### Version 1.2

* Update auf REDAXO 5.1. Dadurch werden auch neue Felder in der Datenbank angelegt, so dass ein neuer Export der Demo nötig wurde.
* Lizenzinformationen hinzugefügt in der Datei LICENSE.md

### Version 1.1

*Neu:*

* Die REDAXO-Demo kann nun auch in einem Unterverzeichnis laufen, sowohl mit yRewrite als auch ohne
* Beispiel für Breadcrumb-Navigation
* optional Hintergrundfarbe für einige Module

*Bugfixes/Optimierungen für:*

* fehlerhafter Link im Download-Modul
* Bild einfügen im Redactor und Markitup-Modul
* fehlerhafte Footer-Links, bei denen der verlinkte Artikel gelöscht wurde
* Parallax auf Mobilgeräten
* Standard-Abdunkelung des Header-Fotos
