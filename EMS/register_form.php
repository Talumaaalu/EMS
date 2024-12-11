<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class ="content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                    <form action="conectR.php" class ="form-group" method="POST">
                        <div class="form-group">
                            <label for="username">Username: </label>
                            <input type="text"
                                   id="username"
                                   name="username"
                                   class="form-control"
                                   value="<?php if (isset($username)) echo $username; ?>"
                                   >
                            <span class="error">
                                <?php if (isset($errors['username'])) echo $errors['username']; ?>
                            </span>
                        </div>
                        <div class="form-group">
    <label for="name">Full Name: </label>
    <input type="text" id="name" name="name" class="form-control" value="<?php if (isset($formdata['name'])) echo $formdata['name']; ?>">
    <span class="error"><?php if (isset($errors['name'])) echo $errors['name']; ?></span>
</div>
<div class="form-group">
    <label for="email">Email: </label>
    <input type="email" id="email" name="email" class="form-control" value="<?php if (isset($formdata['email'])) echo $formdata['email']; ?>">
    <span class="error"><?php if (isset($errors['email'])) echo $errors['email']; ?></span>
</div>
                        <div class="form-group">
                            <label for="password">Password: </label>
                            <input type="password"
                                   id="password"
                                   name="password"
                                   class="form-control"
                                   value=""
                                   >
                            <span class="error">
                                <?php if (isset($errors['password'])) echo $errors['password']; ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="cpassword">Confirm Password: </label>
                            <input type="password"
                                   id="cpassword"
                                   name="cpassword"
                                   class="form-control"
                                   value=""
                                   >
                            <span class="error">
                                <?php if (isset($errors['cpassword'])) echo $errors['cpassword']; ?>
                            </span>
                        </div>
                        <div class="form-group">
        <label for="user_type">Register As: </label>
        <select id="user_type" name="user_type" class="form-control">
            <option value="user" <?php if (isset($formdata['user_type']) && $formdata['user_type'] == 'user') echo 'selected'; ?>>User</option>
            <option value="admin" <?php if (isset($formdata['user_type']) && $formdata['user_type'] == 'admin') echo 'selected'; ?>>Admin</option>
        </select>
        <span class="error"><?php if (isset($errors['user_type'])) echo $errors['user_type']; ?></span>
    </div>
    <div class="form-group">
    <label for="active">Active: </label>
    <select id="active" name="active" class="form-control">
        <option value="1" <?php if (isset($formdata['active']) && $formdata['active'] == '1') echo 'selected'; ?>>Yes</option>
        <option value="0" <?php if (isset($formdata['active']) && $formdata['active'] == '0') echo 'selected'; ?>>No</option>
    </select>
    <span class="error"><?php if (isset($errors['active'])) echo $errors['active']; ?></span>
</div>
<div class="form-group"> <!--agree terms--> <input type="checkbox" name="agree_terms" value="1"id="agree_terms"> <label for="agree_terms"> I agree to the <a href="terms.php" target="_blank">Terms and Conditions</a> </label> <span class="error"> <?php if (isset($errors['agree_terms'])) echo $errors['agree_terms']; ?></span> </div>

                        <button type="submit" class = "btn btn-primary" value="register" name="register">Register</button>
                    </form>
                </div>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
