# ourtvtime
##current beta http://ourtvtime.com
##daily builds http://robojosh.com/tvtimedev/
##episode example (playback interface) http://ourtvtime.com/americangods/episode1.html
setup database currently mysql - willing to change
setup dynamic div blocks.




This can be seen as 3 core pieces of work

1. User interface.
    ##should be the first landing main page which has "latest movies" and "latest tv episodes"
    ##on clicking "more" next to movies it will bring up the main movies page which splits movies in to catagories "scifi, action, family etc." each catagory gets a row.
    ##on clicking more tv shows it has a similar page tv shows in to catagories
    ##on clicking an actual tv show episodes, it will bring up the playback page. with other episodes listed in a row below the playback
    ##on clicking a movie, it goes to the movie playback page.
    example so far:


![operations](https://github.com/joshjames/ourtvtime/blob/master/main_page.png "Main Page Layout")

To Do for User Interface.

    1. create connection string to Movie & Tv_shows database
    2. create loop for num rows of movies that populates the Movies Row DIV (for now just query all movies in movie database)
    3. create a loop for num rows of tv_shows database
    4. build a simple "add media form page" use database layout for input, checkbox for movie or tv_show... need to think about how to add an episode. guess a "belongs" 
    5. expand out on the playback index.php page to read from the main browse page, pass content and populate field
    6. media will be on an s3 bucket, im creating that bucket now it will be media.ourtvtime.com/0011_XXYYZZ.mp4 as content is databased filenames will be matched with thier id 0011 for movies 0022 for tv shows


##2. Database and queries
    ##below is some basic examples of the queries to catagories the movies and show in the U.I
    ##database design is important, as well as views for movie data, images, file references and info, we will be using mysql.
    ##current database design is in the repo.

    ##TO DO for database and queries
    1. finish database and table design
    2. create relationships and views
    3. contruct all necassary queries
    4. upload some content and data

![operations](https://github.com/joshjames/ourtvtime/blob/master/ui.png "Main Page Layout")

##3. back end, administration and file management
## this part involves a lot of work and current design looks like this:
 TO do for back end.

    1. build the back end as per design.


![operations](https://github.com/joshjames/ourtvtime/blob/master/backendarchitecture.png "Back End Architecture")


##4 the omni search!

as part of the above design there is a need for an omni search.
this search queries furk and yts.ag api for content but will use IMDB as its reference or other movie database api.
also a tv database query, this is where we get our content as well as information, posters, cover images and more.
the api logic will operate a bit like this.

        QUERY: the matrix.

            Node.js api

            listen to webservice call.

            take input.
            
            search imdb give live or fast results first showing the covers, title and year

            user selects the movie they were after.

            passes metadata back to the API.

            which checks furk first using advanced filtering.
            if no results or no confidence
            checks yify api.
            if no results
            will try an index of torrent rss/search engines.

            if still no results. inform user movie/show has been queued for advanced deep search.

            query passes to a page for manual checking by me.
