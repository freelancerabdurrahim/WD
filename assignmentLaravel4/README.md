# migrationassignment (Migration | Seeds | Factory)
<!-- [Live Link](https://bmi-calculator-ostad.netlify.app) -->

The migrationassignment is a simple Laravel project. Migration | Seeds | Factory.

And it's assignment projects of PHP and Larvel of OSTAD.

![Laravel Properly Installed](https://raw.githubusercontent.com/ahmmedsabbirbd/migrationassignment/master/public/assets/documentation/wellcome.png)

## Table of Contents

- [Description](#description)
- [Features](#features)
- [Demo](#demo)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Laravel Migration Concepts](#Laravel-Migration-Concepts)
- [Usage](#usage)
- [API Documentation](#api-documentation)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Description

The migrationassignment is a simple Laravel project and updated versioin. I include Routing practice, Folder Structure, and Laravel Installation.

## Features
| Key Features                | Description                                                  |
| ---------------------------| ------------------------------------------------------------ | 
|  Migration  | create new table, add new column, drop column |
|  Factory    | factory create with [Faker](https://github.com/fzaninotto/Faker) |
|  Seeders    | real data added with custom json file, add faker fake data |


## Demo
Project Home Page

[![Demo Video](https://raw.githubusercontent.com/ahmmedsabbirbd/migrationassignment/master/public/assets/documentation/wellcome.png)](https://youtu.be/RYAh3rSyWHs)

## Technologies Used

List the technologies, libraries, frameworks, or languages that you used to build your project. You can also provide links to their official websites or documentation.

- Laravel
- MYSQL
## Installation

Clone the repository to your local machine

bash

    git clone https://github.com/ahmmedsabbirbd/migrationassignment.git

Open Project folder:

bash

     cd migrationassignment

Install the necessary dependencies by running the following command in the project directory:

bash

     composer install

This will install all the required packages and dependencies needed to run the project.
Create a .env file in the root of the project and add the required environment variables. These variables may include database credentials, API keys, and other configuration details. You can find the list of required environment variables in the project's README.md file.
Start the development server by running the following command:

bash

    php artisan serve

This will start the server and the application will be available at http://localhost:8000/.

Note: If you encounter any issues while installing or running the project locally, please refer to the project's documentation or reach out to the project maintainers for assistance.

## Laravel Migration Concepts

1. ## Task 1:
     `Create a new Laravel project named "MigrationAssignment" using the Laravel command-line interface.`
     ![crate CLI laravel project](https://raw.githubusercontent.com/ahmmedsabbirbd/migrationassignment/master/public/assets/documentation/task-subline-1.png)

2. ## Task 2:
     `Within the project, create a new migration file named "create_products_table" that will be responsible for creating a table called "products" in the database. The "products" table should have the following columns:

     id: an auto-incrementing integer and primary key.
     name: a string column to store the product name.
     price: a decimal column to store the product price.
     description: a text column to store the product description.
     created_at: a timestamp column to store the creation date and time.
     updated_at: a timestamp column to store the last update date and time.`
     ![create new migration file](https://raw.githubusercontent.com/ahmmedsabbirbd/migrationassignment/master/public/assets/documentation/task-subline-2.png)

3. ## Task 3:
     `After creating the migration file, run the migration to create the "products" table in the database.`
     ![crate CLI laravel project](https://raw.githubusercontent.com/ahmmedsabbirbd/migrationassignment/master/public/assets/documentation/wellcome.png)

4. ## Task 4:
     `Modify the existing migration file "create_products_table" to add a new column called "quantity" to the "products" table. The "quantity" column should be an integer column and allow null values.`
     ![add new column](https://raw.githubusercontent.com/ahmmedsabbirbd/migrationassignment/master/public/assets/documentation/task-subline-4.png)

5. ## Task 5:
     `Create a new migration file named "add_category_to_products_table" that will be responsible for adding a new column called "category" to the "products" table. The "category" column should be a string column with a maximum length of 50 characters.`
     ![add new column](https://raw.githubusercontent.com/ahmmedsabbirbd/migrationassignment/master/public/assets/documentation/task-subline-5.png)

6. ## Task 6:
     `After creating the new migration file, run the migration to add the "category" column to the "products" table.`
     ![migration](https://raw.githubusercontent.com/ahmmedsabbirbd/migrationassignment/master/public/assets/documentation/wellcome.png)

7. ## Task 7:
     `Create a new migration file named "create_orders_table" that will be responsible for creating a table called "orders" in the database. The "orders" table should have the following columns:

     id: an auto-incrementing integer and primary key.
     product_id: an unsigned integer column to establish a foreign key relationship with the "id" column of the "products" table.
     quantity: an integer column to store the quantity of products ordered.
     created_at: a timestamp column to store the creation date and time.
     updated_at: a timestamp column to store the last update date and time`
     ![crate CLI laravel project](https://raw.githubusercontent.com/ahmmedsabbirbd/migrationassignment/master/public/assets/documentation/task-subline-7.png)

8. ## Task 6:
     `After creating the migration file for the "orders" table, run the migration to create the "orders" table in the database.`
     ![migration](https://raw.githubusercontent.com/ahmmedsabbirbd/migrationassignment/master/public/assets/documentation/wellcome.png)
 

## Usage

### Getting Started
To get started with migrationassignment, you will need to follow the installation instructions in the previous section.

## API Documentation
Did not Provide any API

## Contributing

Contributions to our project are welcome and encouraged! To get started, please read our CONTRIBUTING.md file, which outlines our guidelines for contributing, reporting issues, and suggesting new features.

1. ### In general, contributors can help by:
    Reporting bugs or issues they encounter.
    Fixing bugs or implementing new features.
    Providing feedback and suggestions for improving the project.
    Writing tests and improving documentation.

2. ### To contribute to the project, please follow these steps:
    Fork the repository on GitHub.
    Create a new branch with a descriptive name for your contribution.
    Make your changes and test them thoroughly.
    Create a pull request to merge your changes back into the main branch of the project.
    Wait for your changes to be reviewed and merged.

    Please note that all contributions are subject to our code of conduct, and we ask that all contributors follow our guidelines for contributing. If you have any questions or concerns, please don't hesitate to reach out to the project maintainers.

    We appreciate your interest in contributing to our project and look forward to working with you!

## License
Any one use it

## Contact

If you have any questions, feedback, or suggestions, feel free to contact us using the following methods:

- Email: ahmmedsabbirbd@gmail.com
- Linkdin: [ahmmedsabbirbd](https://www.linkedin.com/in/ahmmedsabbirbd/)
- Website: [Portfolio](https://sabbir-me.netlify.app)

We appreciate your interest in our project and look forward to hearing from you!