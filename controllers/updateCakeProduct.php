<?php

@include './../config/Database.php';

if (isset($_GET['edit'])) {
    $id = intval($_GET['edit']); // Ensure $id is an integer
 
    // Fetch product data to pre-fill the form
    $select = $conn->prepare("SELECT * FROM cakeproducts WHERE id = ?");
    $select->bind_param("i", $id);
    $select->execute();
    $result = $select->get_result();
 
    if ($result->num_rows > 0) {
       $row = $result->fetch_assoc();
    } else {
       echo "Product not found!";
       exit;
    }
 }
 
 if (isset($_POST['update_product'])) {
    $product_name = $_POST['product_name'];
    $sub_product_name = $_POST['sub_product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = 'uploaded_img/' . $product_image;

    if (empty($product_name) && empty($sub_product_name) && empty($product_price) && empty($product_image)) {
        $message[] = 'Please fill out atleast one field!';
    } else {
        if (!empty($product_image)) {
            // Validate and update with a new image
            $allowed_extensions = ['jpg', 'jpeg', 'png'];
            $file_extension = pathinfo($product_image, PATHINFO_EXTENSION);

            if (in_array(strtolower($file_extension), $allowed_extensions)) {
                move_uploaded_file($product_image_tmp_name, $product_image_folder);

                $update = "UPDATE cakeproducts SET product_name='$product_name', sub_product_name='$sub_product_name', product_price='$product_price', product_image='$product_image' WHERE id='$id'";
            } else {
                $message[] = 'Invalid image format. Only JPG, JPEG, and PNG are allowed.';
            }
        } else {
            // Update without changing the image
            $update = "UPDATE cakeproducts SET product_name='$product_name', sub_product_name='$sub_product_name', product_price='$product_price' WHERE id='$id'";
        }

        $upload = mysqli_query($conn, $update);

        if ($upload) {
            header('location:cakeProductController.php');
        } else {
            $message[] = 'Failed to update the product';
        }
    }
}
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin | Update Cake Page</title>


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

<div class="admin-product-form-container centered">

   <?php
      
      $select = mysqli_query($conn, "SELECT * FROM cakeproducts WHERE id = $id");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <div class="flex justify-center items-center min-h-screen bg-gray-50 p-4">
   <form action="" method="post" enctype="multipart/form-data" 
      class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
      <h3 class="text-2xl font-semibold text-center mb-4 uppercase text-gray-800">Update the Cake Product</h3>
      <select name="product_name" 
            class="flex w-full mb-4 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
            <option value="Regular Cakes">Regular Cakes</option>
            <option value="Gourmet Cakes">Gourmet Cakes</option>
            <option value="Gateaux Cakes">Gateaux Cakes</option>
            <option value="Normal Cakes">Normal Cakes</option>
         </select>
      <input type="text" name="sub_product_name" value="<?php echo $row['sub_product_name']; ?>" 
         placeholder="Enter the sub product name" 
         class="w-full mb-4 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
      <input type="number" min="0" name="product_price" value="<?php echo $row['product_price']; ?>" 
         placeholder="Enter the product price" 
         class="w-full mb-4 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
      <input type="file" name="product_image" accept="image/png, image/jpeg, image/jpg" 
         class="w-full mb-4 p-2 border border-gray-300 rounded-lg focus:outline-none">
      <input type="submit" value="Update Product" name="update_product" 
         class="w-full bg-amber-800 text-white py-2 rounded-lg hover:bg-amber-900 cursor-pointer">
      <a href="cakeProductController.php" 
         class="block mt-4 text-center bg-amber-500 text-white py-2 rounded-lg hover:bg-amber-600">Go Back</a>
   </form>
</div>
   


   <?php }; ?>

   

</div>



</body>
</html>