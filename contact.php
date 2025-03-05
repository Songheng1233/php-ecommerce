<h1>contact  us</h1>

<section class="collection bg-light position-relative py-5">
    <div class="container">
      <div class="row">
        <div class="title-xlarge text-uppercase txt-fx domino">Collection</div>
        <div class="collection-item d-flex flex-wrap my-5">
          <div class="col-md-6 column-container">
            <div class="image-holder">
              <img src="images/single-image-2.jpg" alt="collection" class="product-image img-fluid">
            </div>
          </div>
          <div class="col-md-6 column-container bg-white">
            <div class="collection-content p-5 m-0 m-md-5">
              <h3 class="element-title text-uppercase">Contact Me Now</h3>
              <p>

              <form action="process_contact.php" method="post">
                <P><input type="text" name="name" placeholder="Your Name" required></P>
                <p><input type="email" name="email" placeholder="Your Email" required></p>
                <p><textarea name="message" placeholder="Your Message" required></textarea></p>
                <button>Submit
                  
                </button></form></p>

             
              
  </section>




<?php 
        if (isset($_GET['status']) && $_GET['status'] == "success") {
            echo '<p class="success">Your message has been sent!</p>';
        } elseif (isset($_GET['status']) && $_GET['status'] == "error") {
            echo '<p class="error">Something went wrong. Please try again.</p>';
        }
    ?>
   

</body>
</html>

        
       
        
       