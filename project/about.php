<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Welcome to our online furniture shop, where we pride ourselves on offering more than just pieces of furniture – we provide an experience tailored to elevate your living spaces. What sets us apart is our unwavering commitment to quality, craftsmanship, and customer satisfaction. Whether you're furnishing a cozy apartment, a spacious family home, or a trendy office space, you can trust that our selection features pieces that seamlessly blend form and function to enhance your lifestyle.</p>
   
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p> recently purchased a sleek, modern coffee table from this online furniture shop, and I must say, I'm thoroughly impressed. The quality is top-notch, exactly as described on the website. The delivery was prompt, and the assembly instructions were straightforward. This coffee table has elevated the aesthetics of my living room, and I couldn't be happier with my purchase.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Johnathan H.</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>I recently revamped my bedroom decor, and I found the perfect piece on this website – a chic upholstered headboard. Not only does it look fabulous, but it's also incredibly comfortable. The ordering process was smooth, and the delivery was faster than I expected. I'm so pleased with my purchase, and I've already received compliments from friends and family.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Emily R.</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>As someone who values both style and functionality in furniture, I was thrilled to discover this online shop. I ordered a stylish bookshelf for my home office, and it's an absolute gem. The craftsmanship is superb, and it adds a touch of sophistication to the room. From browsing the website to receiving the item, the entire process was seamless. I'll definitely be a repeat customer</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>David L.</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>I've been on the hunt for a statement piece for my living room, and I stumbled upon this online furniture store. I decided to take a chance and ordered a stunning accent chair, and I'm delighted with my choice. The chair arrived promptly, and it was even more beautiful in person. It's comfortable, well-made, and adds a pop of color to my space. I'm thoroughly impressed and will definitely be shopping here again.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Olivia W.</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>I'm not one to usually leave reviews, but I had such a positive experience with this furniture store that I felt compelled to share. I bought a gorgeous recliner for my man cave, and it's exceeded my expectations in every way. The comfort level is outstanding, and the design complements the space perfectly. Kudos to the team for their excellent customer service and hassle-free delivery.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Michael S.</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>I couldn't be happier with my experience shopping at this online furniture store. I purchased a stylish dining table for my apartment, and it's truly transformed my dining area. The quality is exceptional, and the design is exactly what I was looking for. From browsing the website to the delivery process, everything was seamless. I highly recommend this store to anyone in search of high-quality furniture with a touch of elegance.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sarah M.</h3>
      </div>

   </div>

</section>


<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>