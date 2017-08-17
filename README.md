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


Inline-style: 
![operations](https://github.com/joshjames/ourtvtime/blob/master/main_page.png "Main Page Layout")

##2. Database and queries
    ##below is some basic examples of the queries to catagories the movies and show in the U.I
    ##database design is important, as well as views for movie data, images, file references and info, we will be using mysql.
    ##current database design is in the repo.
Inline-style: 
![operations](https://github.com/joshjames/ourtvtime/blob/master/ui.png "Main Page Layout")

##3. back end, administration and file management
## this part involves a lot of work and current design looks like this:

Inline-style: 
![operations](https://github.com/joshjames/ourtvtime/blob/master/backendarchitecture.png "Back End Architecture")