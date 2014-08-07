# DWA15 Project 4

## MyPantry

MyPantry is an online pantry and recipe book for users to store and update their ingredients, favorite recipes, and recipes they'd like to try. Users can save all of their information so it's accessible upon login. The site can be accessed here: [MyPantry](http://www.mypantry.gopagoda.com).

I may have bitten off more than I could chew with this project. I was hoping to do more than a CRUD application but time and knowledge limitations have set me back.

The original project spec was as follows:
* User authentication
* Site will hold a database of thousands of ingredients, queryable by the user's input
* User will be able to save ingredients in a 'pantry' (represented by a pivot table between the user and ingredients)
* User will be able to search for recipes based on ingredients in their 'pantry' using a websearch API
* User will be able to 'favorite' receipes, storing their links in another pivot table
* At some point in the future, users will be able to mass-input ingredients, as from receipts

I have had trouble getting the pre-filled database to work on PagodaBox. It works in the development environment, however. As a result, the production application is mostly a CRUD app. Users can enter ingredients to be saved in the database, add links to their favorite recipes, and update/delete either table as required.

Login Information:
Username: admin
Password: 12345

### Packages Used

[Pre](https://packagist.org/packages/paste/pre)

### Outside code

[Database of ingredients pulled from USDA](http://ndb.nal.usda.gov/ndb/search/list). I downloaded the file in Excel format and converted it to a CSV file so I could set the headers to match my database. I then referenced [Laravel Snippets](http://laravelsnippets.com/snippets/seeding-database-with-csv-files-cleanly) in order to write the code to seed the database with the data. I then ran the php artisan:seed db command and after a few hangups, got it working.

