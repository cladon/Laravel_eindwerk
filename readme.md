# Eindwerk Donald Claessens - Syntra

Dit eindwerk is gemaakt met laravel 5 in combinatie met jquery. Als basis vertrek ik uit een Laravel 5 installatie met een integratie van Bootstrap 3 en met javascript plugins.

Demo  http://l5start.mrakodol.info/

## Eindwerk met als basisLaravel 5.0 en Boostrap 3
* [Kenmerken](#feature1)
* [Vereisten](#feature2)
* [Installatie](#feature3)
* [Bijkomende informatie](#feature4)
* [Schermafdrukken](#feature5)

<a name="feature1"></a>
## Kenmerken:
* Laravel 5.0
* Twitter Bootstrap 3.2.0

* Back-end

	* Gebruikersbeheer.
	* Beheer leerplannen.
	* Beheer JAL-Doelen.

* Front-end

	* Login
	* Scherm om de JAL-Doelen te updaten

* Integratie van 

	* Datatables - Plugin voor jquery - https://www.datatables.net/

-----
<a name="feature2"></a>
##Vereisten

	PHP >= 5.5.0
    MYSQL of andere database voorzien door laravel
-----
<a name="feature3"></a>
##Hoe installeren:
* [Stap 1: Downloaden van de code](#step1)
* [Stap 2: Gebruik composer om de benodigde componenten te installeren](#step2)
* [Stap 3: Maak de database](#step3)
* [Stap 4: Installeren van ...](#step4)
* [Stap 5: Startpagina](#step5)

-----
<a name="step1"></a>
### Stap 1: Code installeren - Downloaden van de  repository

    https://github.com/cladon/laravel_eindwerk

Uitpakken in een htdocs folder naar keuze.

-----
<a name="step2"></a>
### Stap 2: Installeren van componeneten 

Geef in de dos-prompt het volgende commando in:

    composer install
    
om de componenten en andere pakketten omgesomt in composer.json te installeren.

-----
<a name="step3"></a>
### Stap 3: Aanmaken database

Maak een database aan naar keuze in editeer het bestand ... \config\database.php met de juiste gegevens. Importeer het sql bestand wat je kan vinden in de map database.

-----

<a name="step4"></a>
### Stap 4: Startpagina

Er zijn twee standaard gebruikers voorzien namelijk:

Administraor

    Gebruiker: admin@admin.com
    Paswoord: admin
    
Of gebruiker

    Gebruiker: user@user.com
    Paswoord: user

-----
<a name="feature4"></a>
## Bijkomende informatie

Idee en oorsprong - 1 - [mrakodol's Laravel-5-Bootstrap-Starter-Site](https://github.com/mrakodol/Laravel-5-Bootstrap-3-Starter-Site)
Idee en oorsprong - 2 - [andrewelkins's Laravel-4-Bootstrap-Starter-Site](https://github.com/andrewelkins/Laravel-4-Bootstrap-Starter-Site)
Idee en oorsprong - 3 - [brunogaspar's laravel-starter-kit](https://github.com/brunogaspar/laravel-starter-kit)

<a name="feature5"></a>
##Schermafdrukken
* Index
![Index](http://i62.tinypic.com/6jev43.jpg)

* Login 
![Login](http://i58.tinypic.com/517j0o.jpg)

* Dashbord administrator
![DashAdmin](http://i61.tinypic.com/alno0o.jpg)

* Lijst met gebruikers
![Lijstgebruikers](http://i57.tinypic.com/14jtbbm.jpg)

* Gebruikers wijzigen
![Wijziggebruiker](http://i60.tinypic.com/zkshtf.jpg)

* Leerplannen --> Doelen
![doelen](http://i57.tinypic.com/69njv6.jpg)

* Dashbord gebruiker
![DashAdmin](http://i62.tinypic.com/ayx82o.jpg)

* Wijzigen JAL-Doelen
![WijzigJal](http://i58.tinypic.com/x3v9jo.jpg)