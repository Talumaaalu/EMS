<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>
        <?php 
       require 'connection.php'; // Same directory

        require 'utils/styles.php'; //css links. file found in utils folder
        require 'utils/scripts.php';
        
        // Check for form submission
        if(filter_has_var(INPUT_POST, 'submit')){
            $title = $_POST['title'];
            $message = $_POST['message'];

            // Check required fields
            if(!empty($message) && !empty($title)){
                // Ensure MySQLi connection is used
                require_once 'utils/connection.php'; // Include the connection file

                // Insert data into the database
                $qry = "INSERT INTO contact (title, message) VALUES ('$title', '$message')";
                mysqli_query($con, $qry); // Using MySQLi connection $con
                echo "<script>window.alert('Your message has been sent!');</script>";
            } else {
                echo "<script>window.alert('Please fill all the fields!');</script>";
            }
        }
        ?>
    </head>
    <body>
        <?php require 'utils/header.php'; ?> <!--header content. file found in utils folder-->

        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Contact Us</h1><!--body content title-->
                </div>
            </div>

            <div class="container">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>

            <div class="container">
                <div class="col-md-6 contacts">
                    <h1><span class="glyphicon glyphicon-user"></span> Jullian Engracio</h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: julzengracio@yahoo.ie<br>
                        <span class="glyphicon glyphicon-link"></span> Facebook: www.facebook.com/julzengracio<br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 08712345678
                    </p>
                </div>
                <div class="col-md-6">
                    <form action="connection.php" method="post">
                        <div class="form-group">
                            <label for="Title">Title:</label>
                            <input type="text" name="title" id="Title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Comment">Message:</label>
                            <textarea id="Comment" rows="10" name="message" class="form-control"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-default pull-right">Send</button>
                    </form>
                </div>
            </div>

        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?> <!--footer content. file found in utils folder-->
    </body>
</html>
