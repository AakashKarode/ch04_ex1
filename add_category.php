<?php
$category = filter_input(INPUT_POST, 'category');
     require_once('database.php');
     {
      $query = 'INSERT INTO categories
                      (categoryName)
                VALUES
                      (:category)';
       $statement = $db->prepare($query);
       $statement->bindValue(':category', $category);
       $statement->execute();
       $statement->closeCursor();

        include('index.php');
      }
?>           