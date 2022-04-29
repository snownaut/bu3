
- Part 1 :

	1. Import the 'movie_db.sql' file into PHPMYADMIN.

	2. Create a page 'movies.php'.
	This page will display all the movies (poster first, then title and views).
	
	3. Create/edit a page 'movie.php'.
	This page is a descriptive page for each movie. It'll display the poster, the title, the release year but also the director's name.
	This page will have to use the GET method to get the id of the movie you want to display.
	So in your adress bar it'll look like this : 'localhost/movie.php?id=1'
	You have to get the id of the movie to know which movie to display.
	
	5. Edit the page 'movies.php'
	Make the title of each movie clickable. It'll redirect to the related descriptive movie page.

- Part 2

	1. Create a page 'directors.php'
	This page will display all the directors. 
	For each directors, you have to display : Picture, name, nationality and number of movies.
	
	2. Create a page 'director.php'.
	This page is a descriptive page for each director. It'll display the picture, name and nationality of the director.
	It'll also display ALL the movies from this director (at least the title).
	This page will have to use the GET method to get the id of the director you want to display.
	So in your adress bar it'll look like this : 'localhost/director.php?id=1'

- Part 3 :
	1. Create a new page 'new-movie.php'

	2. Create a form on this page to ask for every movie's information (title, views, poster and director_id).

	3. When submitting the form you should : 
		- Make sure every input is not empty.
		- Save the movie inside the DB.
	At the end, this form should be used to insert new movie in the DB.

- Part 4 :
	If you have time, do the same to add a new director

- Part 5 :
	Add different pages in the navigation menu.
	
- Part 4 :

	1. edit 'movies.php' page
	User should now be able to sort the result by title or views. 
