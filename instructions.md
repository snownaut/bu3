We have two pages:
- the home page, with a search and list of movies
- the single item page, where we can see the details about one movie

We will use a TV shows API to make things a bit more dynamic:
https://www.tvmaze.com/api#show-search

Tasks: 
- create a new repository (invite your coworker)
- create a first commit with the initial HTML/CSS
- make the home page dynamic: search = load the tv shows list
--> https://api.tvmaze.com/search/shows?q={search-query}

- make the single page dynamic: when page loads get the query string and fetch the single movie info
--> https://api.tvmaze.com/shows/{movieID} (139)

For the single item page: 
- we need a link with a query string:
/single-item.html?movieid={movieID}
- on the single item page, get this id by using window.location.search
- then you can the id to load a single movie info 



home page: 
fetch /search/shows?q=:query
    --> foreach, display the list of tv shows

single page
fetch /shows/:id
    --> display the info for a single show (no foreach)