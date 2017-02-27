<?php
// Get the product data
$category = filter_input(INPUT_POST, 'category', FILTER_VALIDATE_INT);
$name = filter_input(INPUT_POST, 'name');


// Validate inputs
if ($category_id == null || $category_id == false ||
        $code == null || $name == null ) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Add the product to the database  
    $query = 'INSERT INTO categories
                 (categoryName)
              VALUES
                 (:category)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category);
    
    
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('index.php');
}
?>