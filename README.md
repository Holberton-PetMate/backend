<p align="center">
<img src="src/petmate-isologo2.png" alt="petmate-isologo" width=40% heigth=40% >
</p>

<h2 align="center">MVP Cohort #18 - Holberton School Uruguay</h2>

<p align="center"> We are a group of students from Holberton School Uruguay. For our MVP, we decided to create <strong>PetMate</strong>, an intelligent solution that automates the feeding of your pet. With PetMate, we aim to simplify and optimize this task mainly for pet owners who spend a large part of their time away from home.

<p align="center">Discover more about us in our <a href="http://www.petmate.tech/">PetMate</a> page :)</p>

## About this repository

<p align="center">In this part of our proyect we have to define what needs to be done. First we had to decide which language and framework we were going to use. Finally the decision was PHP and Laravel. This is because we have some experience inside the group about the tools and we found that it simplified the work a lot and its documentation and usage were very clear. We were quickly able to create migrations, controllers, seeders, routes, models, autenticathion, etc. Secondly, we had to define a database structure with their tables, relationships and dependencies of them. In this repo we have created seven tables including a pivot table, but excluding the tables that are native to Laravel 9. </p>
<p align="center">Our tables: </p>

* Users Table: this table contains information about each user who owns our product. Users will register in our software for the first time, and then they will log in with their email and password.

* Feeders Table: this table has the information about the feeders that each user owns. This table represents the physical product that we sell.

* Foods Table: This is a table for our clients where they can personalize their own foods with their calories, proteins, vitamines, etc.

* Feeding Times Table: this is the table that we use to set the time when you want to feed your pet.

* Records Table: this is a table that notifies the user about the status of the feeder. The status could be a warning, a notification that the food was served correctly or a notification that something went wrong.

* Days Table: this is the table used to create the graph about how much food your pet has ingested during the day.

* Feeder User Table: This is only the pivot table used for the many-to-many relationship between the users table and the feeders table.


## Docker
<p align="center">If you want to use this repository with the correct versions, packages and dependencies we have created some shortcuts that will help you. We have created a Makefile that will do all the work for you. Read about <a href="https://makefiletutorial.com">Makefile tutorial</a> to understand about this</p>
<p align="center">On your terminal run this commands: </p>

* build: Builds the Pet Mate Docker container.

* stop: Stops the Pet Mate Docker container.

* up: Starts the Pet Mate Docker container in detached mode.

* composer-update: Runs composer update inside the Pet Mate Docker container to update the application's dependencies.

* data: Executes the php artisan migrate --force and php artisan db:seed --force commands inside the Pet Mate Docker container to create and seed the application's database.

## Language and framework
<p align="left"> <a href="https://www.w3schools.com/php/php_intro.asp" target="_blank" rel="noreferrer"> <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" alt="php" width="80" height="80"/> </a> <a href="https://laravel.com/docs/10.x" target="_blank" rel="noreferrer"> <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" alt="laravel" width="80" height="80"/> <a/> </p>

## Host
<a href="https://cloud.google.com/?hl=en">
	<img src="src/google-cloud-logo.png" width="80"></img>
</a>
<a href="https://get.tech/">
	<img src="src/tech-domains-logo.png" width="80"></img>
</a>

<br>

## Back-end developers

<a href="https://www.linkedin.com/in/facundo-blanco-0534ba229/">Facundo Blanco</a>


<p align="center">
	<a><img src="https://apply.holbertonschool.com/holberton-logo.png" alt="Holberton logo" width=18% heigth=18%></img></a>
</p>

<p align="center">Montevideo, Uruguay</p>
