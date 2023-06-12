<?php


//question
//1.Explain what Laravel's query builder is and how it provides a simple and elegant way to interact with databases.

//answer 1.
Laravel's query builder is a feature that provides a simple and elegant way to interact with databases. It allows developers to build and execute database queries using a fluent and chainable interface. Instead of writing raw SQL queries, the query builder allows you to construct queries using PHP methods, making the code more readable and maintainable.

Here are some key features and benefits of Laravel's query builder:

Fluent Interface: The query builder uses a fluent interface, which means you can chain methods together to build complex queries in a readable and expressive manner. This allows for a more intuitive and natural way of constructing queries compared to writing raw SQL.

Parameter Binding: The query builder automatically handles parameter binding, which helps prevent SQL injection attacks. You can pass parameters to the query builder methods, and Laravel will handle their proper sanitization and binding in the generated SQL query.

Database Agnostic: Laravel's query builder is database agnostic, meaning it supports multiple database systems such as MySQL, PostgreSQL, SQLite, and SQL Server. It provides a consistent API for interacting with different databases, allowing you to switch between them easily without changing your code.

Eloquent Integration: The query builder is seamlessly integrated with Laravel's Eloquent ORM (Object-Relational Mapping). Eloquent models can use the query builder methods directly, making it easy to fetch, insert, update, and delete records using a fluent and consistent syntax.

Query Building Methods: The query builder offers a wide range of methods to handle various aspects of database querying, such as selecting specific columns, joining tables, applying conditions, grouping and ordering results, aggregating data, and more. This makes it a powerful tool for building complex queries without resorting to raw SQL.

Database Transactions: The query builder supports database transactions, allowing you to perform multiple database operations as an atomic unit. Transactions help maintain data integrity and consistency by ensuring that all changes are committed or rolled back as a single unit of work.


//question
//2.Write the code to retrieve the "excerpt" and "description" columns from the "posts" table using Laravel's query builder. Store the result in the $posts variable. Print the $posts variable.

//2.answer

use Illuminate\Support\Facades\DB;

$posts = DB::table('posts')
            ->select('excerpt', 'description')
            ->get();

print_r($posts);



//question
//3.Describe the purpose of the distinct() method in Laravel's query builder. How is it used in conjunction with the select() method?

//.3 answer


use Illuminate\Support\Facades\DB;

$uniqueNames = DB::table('users')
                ->select('name')
                ->distinct()
                ->get();



//question
//.4.Write the code to retrieve the first record from the "posts" table where the "id" is 2 using Laravel's query builder. Store the result in the $posts variable. Print the "description" column of the $posts variable.

//.4 answer   

use Illuminate\Support\Facades\DB;

$posts = DB::table('posts')
            ->where('id', 2)
            ->first();

if ($posts) {
    echo $posts->description;
} else {
    echo "No post found.";
}


//5.Write the code to retrieve the "description" column from the "posts" table where the "id" is 2 using Laravel's query builder. Store the result in the $posts variable. Print the $posts variable.

//.5 answer

use Illuminate\Support\Facades\DB;

$posts = DB::table('posts')
            ->where('id', 2)
            ->pluck('description');

print_r($posts);



//question
//6.Explain the difference between the first() and find() methods in Laravel's query builder. How are they used to retrieve single records?

//.6 answer

//first() Method:

The first() method is used to retrieve the first record that matches the query conditions.
It returns a single object representing the first record found.
The query builder orders the records based on the default or specified order.
If no matching record is found, it returns null.
Example usage: $record = DB::table('users')->where('active', true)->first();


//find() Method:

The find() method is used to retrieve a record by its primary key value.
It expects the primary key value as the parameter and fetches the record with that key.
It returns a single object representing the record found or null if no record is found.
Unlike the first() method, the find() method does not require any query conditions or ordering.
Example usage: $record = DB::table('users')->find(1);

//7.Write the code to retrieve the "title" column from the "posts" table using Laravel's query builder. Store the result in the $posts variable. Print the $posts variable.

//.7 answer
use Illuminate\Support\Facades\DB;

$posts = DB::table('posts')
            ->pluck('title');

print_r($posts);


//8.Write the code to insert a new record into the "posts" table using Laravel's query builder. Set the "title" and "slug" columns to 'X', and the "excerpt" and "description" columns to 'excerpt' and 'description', respectively. Set the "is_published" column to true and the "min_to_read" column to 2. Print the result of the insert operation.

//8. answer
use Illuminate\Support\Facades\DB;

$result = DB::table('posts')->insert([
    'title' => 'X',
    'slug' => 'X',
    'excerpt' => 'excerpt',
    'description' => 'description',
    'is_published' => true,
    'min_to_read' => 2
]);

print_r($result);


//9.Write the code to update the "excerpt" and "description" columns of the record with the "id" of 2 in the "posts" table using Laravel's query builder. Set the new values to 'Laravel 10'. Print the number of affected rows.
//9. answer
use Illuminate\Support\Facades\DB;

$affectedRows = DB::table('posts')
                ->where('id', 2)
                ->update([
                    'excerpt' => 'Laravel 10',
                    'description' => 'Laravel 10'
                ]);

echo "Number of affected rows: " . $affectedRows;


//10.Write the code to delete the record with the "id" of 3 from the "posts" table using Laravel's query builder. Print the number of affected rows.
//10.answer
use Illuminate\Support\Facades\DB;

$affectedRows = DB::table('posts')
                ->where('id', 3)
                ->delete();

echo "Number of affected rows: " . $affectedRows;


//11.Explain the purpose and usage of the aggregate methods count(), sum(), avg(), max(), and min() in Laravel's query builder. Provide an example of each.
//11.answer



use Illuminate\Support\Facades\DB;
$count = DB::table('users')->count();
sum(): It calculates the sum of a specific column's values in the query result.



use Illuminate\Support\Facades\DB;
$totalAmount = DB::table('orders')->sum('amount');
avg(): It calculates the average value of a specific column in the query result.



use Illuminate\Support\Facades\DB;
$averagePrice = DB::table('products')->avg('price');
max(): It retrieves the maximum value of a specific column in the query result.



use Illuminate\Support\Facades\DB;
$maxPrice = DB::table('products')->max('price');
min(): It retrieves the minimum value of a specific column in the query result.



use Illuminate\Support\Facades\DB;
$minPrice = DB::table('products')->min('price');






//12.Describe how the whereNot() method is used in Laravel's query builder. Provide an example of its usage.
//12.answer

use Illuminate\Support\Facades\DB;

$users = DB::table('users')
            ->whereNot('status', 'active')
            ->get();


//13.Explain the difference between the exists() and doesntExist() methods in Laravel's query builder. How are they used to check the existence of records?
//13.answer

exists() method:
The exists() method is used to check if any records exist in the specified table that match the given conditions.
It returns true if at least one record exists and false if no matching records are found.
Example usage: DB::table('users')->where('status', 'active')->exists();


doesntExist() method:
The doesntExist() method is used to check if no records exist in the specified table that match the given conditions.
It returns true if no matching records are found and false if at least one record exists.
Example usage: DB::table('users')->where('status', 'active')->doesntExist();


//14.Write the code to retrieve records from the "posts" table where the "min_to_read" column is between 1 and 5 using Laravel's query builder. Store the result in the $posts variable. Print the $posts variable.

//14.answer
use Illuminate\Support\Facades\DB;

$posts = DB::table('posts')
            ->whereBetween('min_to_read', [1, 5])
            ->get();

print_r($posts);



//15.Write the code to increment the "min_to_read" column value of the record with the "id" of 3 in the "posts" table by 1 using Laravel's query builder. Print the number of affected rows.
//15.answer
use Illuminate\Support\Facades\DB;

$affectedRows = DB::table('posts')
                ->where('id', 3)
                ->increment('min_to_read');

echo "Number of affected rows: " . $affectedRows;
