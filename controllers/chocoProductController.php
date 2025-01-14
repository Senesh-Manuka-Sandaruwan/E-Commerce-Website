<?php

@include './../config/Database.php';

if (isset($_POST['add_product'])) {
   $product_name = $_POST['product_name'];
   $sub_product_name = $_POST['sub_product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/' . $product_image;

   // Check if inputs are empty
   if (empty($product_name) || empty($sub_product_name) || empty($product_price) || empty($product_image)) {
       $message[] = 'Please fill out all fields';
   } else {
       // Check if the uploaded_img folder exists, if not, create it
       if (!is_dir('uploaded_img')) {
           mkdir('uploaded_img', 0777, true);
       }

       // Move the uploaded file
       if (move_uploaded_file($product_image_tmp_name, $product_image_folder)) {
           $insert = "INSERT INTO chocolateproducts (product_name, sub_product_name, product_price, product_image) VALUES ('$product_name', '$sub_product_name', '$product_price', '$product_image')";
           $upload = mysqli_query($conn, $insert);

           if ($upload) {
               $message[] = 'New product added successfully';
           } else {
               $message[] = 'Failed to add product to the database';
           }
       } else {
           $message[] = 'Failed to upload the image. Please check folder permissions or file path.';
       }
   }
}





if (isset($_GET['delete'])) {
   $id = intval($_GET['delete']);

   // Get the image file name from the database
   $query = mysqli_query($conn, "SELECT product_image FROM chocolateproducts WHERE id = $id");
   $row = mysqli_fetch_assoc($query);
   $image_file = 'uploaded_img/' . $row['product_image'];

   // Delete the product from the database
   $delete_query = "DELETE FROM chocolateproducts WHERE id = $id";
   if (mysqli_query($conn, $delete_query)) {
       // Delete the image file
       if (file_exists($image_file)) {
           unlink($image_file);
       }
       header('location:chocoProductController.php');
   } else {
       echo "Failed to delete the product!";
   }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin | Chocolate Page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

<script type="text/javascript">
<?php

if (isset($message)) {
    foreach ($message as $msg) {
        echo "alert(" . json_encode($msg) . ");";
    }
}
?>
</script>


<?php include '../header.php'; ?>

<div class="container mx-auto p-4">
   <div class="flex justify-center mt-10">
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" 
         class="bg-gray-100 p-6 rounded-lg shadow-md w-full max-w-md">
         <h3 class="text-2xl font-semibold text-center mb-4 uppercase text-gray-800">Add a New Chocolate Product</h3>
         <select name="product_name" 
            class="w-full mb-4 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
            <option value="Dairy Milk Chocolates">Dairy Milk Chocolates</option>
            <option value="KitKat Chocolates">KitKat Chocolates</option>
            <option value="Mars Chocolates">Mars Chocolates</option>
            <option value="Twix Chocolates">Twix Chocolates</option>
            <option value="Twix Chocolates">Snickers Chocolates</option>
            <option value="Twix Chocolates">Milka Chocolate</option>
            <option value="Twix Chocolates">Ferrero Rocher Chocolate</option>
            <option value="Twix Chocolates">Toblerone Chocolate</option>
         </select>
         <input type="text" placeholder="Enter sub product name" name="sub_product_name" 
            class="w-full mb-4 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
         <input type="number" placeholder="Enter product price" name="product_price" 
            class="w-full mb-4 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" 
            class="w-full mb-4 p-2 border border-gray-300 rounded-lg focus:outline-none">
         <input type="submit" class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600 cursor-pointer" 
            name="add_product" value="Add Product">
      </form>
   </div>
</div>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM chocolateproducts");
   
   ?>
 <div class="container mx-auto p-4 mt-10">
   <div class="overflow-x-auto">
      <table class="table-auto w-full border-collapse border border-gray-300 text-center">
         <thead>
            <tr class="bg-gray-100">
               <th class="border border-gray-300 px-4 py-2">Product Image</th>
               <th class="border border-gray-300 px-4 py-2">Product Name</th>
               <th class="border border-gray-300 px-4 py-2">Sub Product Name</th>
               <th class="border border-gray-300 px-4 py-2">Product Price</th>
               <th class="border border-gray-300 px-4 py-2">Action</th>
            </tr>
         </thead>
         <tbody>
            <?php while($row = mysqli_fetch_assoc($select)){ ?>
            <tr class="hover:bg-gray-50">
               <td class="border border-gray-300 px-4 py-2">
                  <img src="uploaded_img/<?php echo htmlspecialchars($row['product_image']); ?>" 
                     class="w-16 h-16 mx-auto rounded-md" alt="Product Image">
               </td>
               <td class="border border-gray-300 px-4 py-2"><?php echo $row['product_name']; ?></td>
               <td class="border border-gray-300 px-4 py-2"><?php echo $row['sub_product_name']; ?></td>
               <td class="border border-gray-300 px-4 py-2">LKR.<?php echo $row['product_price']; ?>/-</td>
               <td class="border border-gray-300 px-4 py-2 space-x-2">
                  <a href="chocoProductController.php?delete=<?php echo $row['id']; ?>" 
                     class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</a>
                  <a href="updateChocoProduct.php?edit=<?php echo $row['id']; ?>" 
                     class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Edit</a>
               </td>
            </tr>
            <?php } ?>
         </tbody>
      </table>
   </div>
</div>



</body>
</html>

