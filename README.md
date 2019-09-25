# Richtig guten Code schreiben
## Sebastian Bergmann

> Was macht sauberen Code aus? Wie wird Code richtig gut? Und wie schreibt man richtig guten Code? In diesem Workshop lernt Ihr das nicht nur, sondern Ihr könnt es auch direkt in die Praxis umsetzen! Zunächst demonstriert Sebastian Bergmann den Einsatz von Domain-Driven Design und Test-Driven Development, natürlich nicht ohne auch über Themen wie Clean Code oder die SOLID-Prinzipien zu sprechen. Danach arbeitet Ihr in Paaren und setzt das Gelernte in die Praxis um. Wir schließen den Tag ab mit einer Review-Runde, in der Ihr Feedback zu Eurem Code bekommt. Um von diesem Workshop wirklich profitieren zu können, bringst Du bitte Dein eigenes Laptop mit Deiner gewohnten Entwicklungsumgebung mit. Neben IDE (oder Texteditor) brauchst Du eine aktuelle Version von PHP und PHPUnit. Frameworks oder Third-Party-Code wird nicht benötigt.
>
> https://thephp.cc/termine/2019/09/symfony-live-berlin/richtig-guten-code-schreiben

Code written for/during the "Richtig guten Code schreiben" workshop at SymfonyLive Berlin 2019.

This is example code that is not production-ready. It is intended for studying and learning purposes.

(c) 2019 thePHP.cc. All rights reserved.

### How-To

* `php tools/phpab -o src/autoload.php src`: Autoloader generieren
* `php tools/phpunit`: Tests ausführen
* `php tools/psalm`: Type Checker ausführen
* `php tools/php-cs-fixer fix`: Code formattieren
