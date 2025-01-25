# Products

## Overview
This is a Laravel-based web application designed to manage products efficiently. The system allows users to perform CRUD (Create, Read, Update, Delete) operations on product data. It leverages Laravel's robust framework features for scalability and maintainability.

## Features
- Product listing with dynamic views
- Create, edit, and delete product records
- Validation for form submissions
- Organized file structure and MVC architecture

## Installation

### Prerequisites
Make sure the following tools are installed on your system:
- PHP >= 8.0
- Composer
- MySQL or other supported databases
- Node.js and npm/yarn

### Steps
1. **Clone the repository:**
   ```bash
   git clone <repository-url>
   cd Products
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install
   ```

3. **Set up environment variables:**
   Copy the `.env.example` file and rename it to `.env`. Configure the database and other environment variables:
   ```bash
   cp .env.example .env
   ```

4. **Generate the application key:**
   ```bash
   php artisan key:generate
   ```

5. **Run database migrations:**
   ```bash
   php artisan migrate
   ```

6. **Start the development server:**
   ```bash
   php artisan serve
   ```
   The application will be available at `http://localhost:8000`.

## Project Structure

### Key Directories
- **`app/Models`**: Contains the models - `Product.php`, `Category.php`.
- **`app/Http/Controllers`**:
  
  `ProductCrudController.php` - This is a Laravel Backpack CRUD controller for managing products. Here's what it does:

#### Core Functionality:
- Handles product management (create, read, update, delete, list, show)
- Uses Backpack CRUD framework
- Validates requests using ProductRequest

#### Operations:

- List: Displays products in table
- Show: Detailed view of single product
- Create: Add new products
- Update: Edit existing products
- Delete: Remove products

#### Setup:

- Links to Product model
- Sets admin route
- Configures entity names

The controller uses a reusable getFieldsData() method to maintain consistent field definitions across different operations while allowing context-specific display variations.

  `CategoryCrudController.php` - This is a CategoryCrud controller that manages CRUD operations for categories using Laravel Backpack.
  
#### Key functions:

- Lists categories with name column
- Creates categories with name field
- Updates existing categories
- Deletes categories
- Shows individual category details

#### The controller:

- Links to Category model
- Sets admin route for categories
- Uses CategoryRequest for validation
- Supports standard CRUD operations (List, Create, Update, Delete, Show)

- **`routes/web.php`**: Defines the web routes for the application.
- **`resources/views`**: Contains Blade templates for views.
- **`database/migrations`**: Defines the database structure.

### Routes
All product-related routes are defined using Laravel's resource routes in `routes/web.php`:
```php
Route::resource('products', ProductCrudController::class);
```

## Usage

### Accessing the Application
1. Open the application in your browser at `http://localhost:8000`.
2. Navigate to `/admin`

### Adding a New Category
- Click the "+Add Category" button.
- Fill out the name of the category and submit.

### Adding a New Product
- Click the "+Add Product" button.
- Fill out the form and submit.

### Editing or Deleting Products
- Use the "Edit" or "Delete" buttons next to each product in the listing.

### Preview
- You can view each product separately.

### Search
- A product can be searched for by its name
- A category can be searched for by its name
