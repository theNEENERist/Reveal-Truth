<?php $title = "Reveal - Contact Us" ?>
<?php include 'inc/preContent.php'?>

<section>
    <div class="content">
        <h3 id="contact">Contact Form</h3>
        
        <form class="contact" method="post" action="post/contacttest.php">
            <p class="text">
                (All fields with <strong>bold</strong> labels are required.)
            </p>
            <p class="text">
                <label for="name"><strong>Name</strong></label>
                <input type="text" id="name" name="name" required="" />
            </p>
            <p class="text">
                <label for="email"><strong>Email</strong></label>
                <input type="text" id="email" name="email" required="" />
            </p>
            <p class="text">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" />
            </p>
            <p class="text">
                <label for="comments"><strong>Comments</strong></label>
                <textarea id="comments" name="comments" required=""></textarea>
            </p>
            
            <div class="g-recaptcha" data-sitekey="6LciERYTAAAAACofLb2h1jcNEUjM8PVWPeWZDMw3"></div>
            
            <div class="submit">
                <button type="submit" name="submit">Submit</button>
            </div>
            
            <p class="response"></p>
        </form>
    </div>
</section>

<?php include 'inc/postContent.php'?>