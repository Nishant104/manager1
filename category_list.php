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
     $category = $statement1->fetch();
     $category_name = $category['categoryName'];
     $statement1->closeCursor();
     

// Get all categories
$queryAllCategories = 'SELECT * FROM categories_guitar1
                       ORDER BY categoryID';
$statement = $db->prepare($queryAllCategories);
$statement->execute();
$categories_guitar1 = $statement2->fetchAll();
$statement2->closeCursor();

// Get products for selected category
$queryProducts = 'Select * FROM products
               WHERE categoryID  = :category_id             
               ORDER BY productID';
               
 $statement3 = $db->prepare($queryProducts);
 $statement3->bindValue(':category_id'; $category_id);
 $statement3->execute();
 $product_guitar1 = $statement3->fetchAll();
 $statement3->closeCursor();
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
