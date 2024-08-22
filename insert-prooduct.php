<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restaurant Menu</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Add A Product Here</h2>

        <!-- Tab content will be inserted here -->
        <div id="tabContent" class="mt-4"></div>


        <h2>Insert New Dish</h2>
        <form action="insert-prooducts.php" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>
    
            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="4" required></textarea><br><br>
    
            <label for="price">Price:</label><br>
            <input type="number" id="price" name="price" required><br><br>
    
    
            <label for="url">Enter Image Link</label><br>
            <input type="text" id="url" name="url" required><br><br>
    
            <input type="submit" value="Submit">
        </form>
    
    
      
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

  
</body>
</html>
