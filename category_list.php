<?php
require_once('database.php');

// Get category ID
 if (!isset ($category_id) {
   $category_id = filter_input(INPUT_GET, 'category_id',
                               FILTER_VALIDATE_INT);
   if category_id == NULL $category_id == FALSE) {
     $category_id = 1;
     
   }
 
 }
     
  // the name of the selected category 
     $querycateogy = 'SELECT * FROM categories_guitar1
                      WHERE categoryID = :category_id';
     $statement1 = $db->prepare($queryCategory);
     $statement1->bindValue(':category_id', $category_id');
     $statement->excecute();

// Get all categories
$queryAllCategories = 'SELECT * FROM categories_guitar1
                       ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories_guitar1 = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<header><h1>Product Manager</h1></header>
<main>
    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
        
        <!-- add code for the rest of the table here -->
    
    </table>

    <h2>Add Category</h2>
    
    <!-- add code for the form here -->
    
    <br>
    <p><a href="index.php">List Products_guitar1</a></p>

    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>
