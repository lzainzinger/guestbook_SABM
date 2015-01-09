# guestbook_SABM
MEDT _ Aufgabe: Gästebuch

Erstellen Sie ein Gästebuch mit einfacher Funktionalität (Anzeigen aller Einträge, Erstellen eines neuen Eintrages).

Das Gästebuch besteht aus 3 Komponenten:

Die Datenbank speichert alle Einträge (Autor, Datum, Überschrift, Text).
Die Wahl der Datenbank bleibt Ihnen überlassen. Verwenden Sie ein ORM System um mit der Datenbank zu kommunizieren.
Das WebService stellt eine Schnittstelle zur Datenbank dar (verwenden Sie ein ORM System!) und implementiert die folgenden beiden Endpunkte:
GET  /guestbook liefert alle Einträge des Gästebuchs zurück (als JSON oder XML).
POST /guestbook erstellt einen neuen Eintrag und liefert dessen ID zurück (als HTTP-Location-Header).

Das Frontend verwendet das WebService zur Anzeige der Daten.
lädt die Einträge aus dem Gästebuch mittels jQuery aus dem WebService und zeigt diese an.
erstellt einen neuen Eintrag und zeigt eine aktualisierte Liste an.
achten Sie auf ein ansprechendes Design - verwenden Sie Bootstrap/CSS

Dokumentieren Sie den eigenen Code sowie sämtliche Konfigurationsschritte die zum Betrieb des Gästebuchs notwendig sind.
