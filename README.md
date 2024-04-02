# php-oop-1

1. Creare un file index.php in cui è definita una classe ‘Movie’

* all'interno della classe sono dichiarate delle variabili d'istanza
* all'interno della classe è definito un costruttore
* all'interno della classe è definito almeno un metodo
* vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

## Bonus 1

* Modificare la classe Movie in modo che accetti piú di un genere.

## Bonus 2

1. Creare un layout completo per stampare a schermo una lista di movies.

1. Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice:

* creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
* mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una *rtella dedicata che possiamo chiamare Models/
* organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.

## Bonus 3

Fate della composizione creando una nuova classe Director, questa classe gestirà il regista del film, avrà bisogno di questi attributi:
nome
cognome
nazionalità
Fate quindi in modo che il movie possa avere un nuovo attributo "$director" di classe Director e che sia richiesto dal costructor (modificato)
