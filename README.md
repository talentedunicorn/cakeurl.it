Cakeurl.it
==========

A URL shortener with cakePHP. 
Still in development. 

Install instructions
--------------------
* Install cakePHP v.2.3.4 then copy the files into the cloned directory (Try not to overwrite the existing files/folder). To "safely" copy using the `cp` command do: 
	cp -r -n 'source_directory' 'cakeurl.it'
* Create a database named `cakeurl` (MySQL recommended)
* Import schema file to database from `app/Config/Schema/db_cakeurlit.sql`
* Setup database configurations in the file `app/Config/database.php` NOTE: Rename it first *Refer to the [cakePHP documentation here](http://book.cakephp.org/2.0/en/getting-started.html#cake-database-configuration) for this*
* Enjoy!

To improve
---------
* Add link status checking before creating shortlinks
* Improve UI
