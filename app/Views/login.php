<!DOCTYPE html>
<html>
<head>
<title>Product Card</title>
</head>
<body>

    <div class="product-card" style="width: 250px; margin: 20px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s; border-radius: 5px;">
        <div style="border: 2px solid #ddd; padding: 5px; border-radius: 5px 5px 0 0;"> <img src="<?= base_url('assets/your_image.jpg') ?>" alt="Product Image" style="width: 100%; border-radius: 5px 5px 0 0;"></div>
        <div style="padding: 16px; border: 2px solid #ddd; border-top: none; border-radius: 0 0 5px 5px;">
            <h4 style="margin-bottom: 5px;">Product Name</h4>
            <p style="margin-bottom: 10px;">Product Description</p>
            <p style="font-weight: bold; margin-bottom: 15px;">$19.99</p> 
            <button style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; cursor: pointer;">Buy Now</button>
        </div>
    </div>

    <style>
        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
    </style>

</body>
</html>