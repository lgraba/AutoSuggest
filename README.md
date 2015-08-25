# AutoSuggest
An auto-suggesting dropdown in PHP

## Dependencies
+ PHP
+ [Faker](https://github.com/fzaninotto/Faker)
+ [Typeahead.js](https://github.com/twitter/typeahead.js)

## Development Progress
0. Used composer in composer.json to install Faker
1. Used Faker in seed.php to produce a database with 10000 username records
2. Created users.php to take in a $_GET query and, fetching an associative array of usernames like that query, output encoded JSON
3. Initialized Bower and installed Typeahead.js. Connected Bower to Composer for single command installation/update