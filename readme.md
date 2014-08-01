# DWA15 Project 4

## YourPantry

YourPantry is an online pantry and recipe book for users to store and update their ingredients, favorite recipes, and recipes they'd like to try. Users can save all of their information so it's accessible upon login.

## Packages Used

[Pre](https://packagist.org/packages/paste/pre)

### Outside code

[Database of ingredients pulled from USDA](http://ndb.nal.usda.gov/ndb/search/list). I downloaded the file in Excel format and converted it to a CSV file so I could set the headers to match my database. I then referenced [Laravel Snippets](http://laravelsnippets.com/snippets/seeding-database-with-csv-files-cleanly) in order to write the code to seed the database with the data. I then ran the php artisan:seed db command and after a few hangups, got it working.

