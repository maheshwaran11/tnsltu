<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php include './../includes.php' ?>
    </head>
    <body>
        <div class="form-wrapper">
            <div class="form formLogin">
                <div class="error"></div>
                <h3>Login</h3>
                <div class="field-wrapper">
                    <label>Username</label>
                    <input type="text" class="username" name="username" placeholder="Enter the username"/>
                </div>
                <div class="field-wrapper">
                    <label>Password</label>
                    <input type="password" class="password" name="password"  placeholder="********"/>
                </div>
                <div class="btn-wrapper">
                    <input type="button" class="button btnLogin" name="btnLogin" value="Login" />
                </div>
            </div>
        </div>
    </body>

    <script>
        $(function(){
            $error_empty = "Please enter the credentials properly.";
            $error_invalid = "Invalid credentials";
            $('.btnLogin').on('click', function(){
                $('.error').html('');
                $username = $('.username').val();
                $password = $('.password').val();

                if($username == '' || $password == '') {
                    $('.error').html('<div>'+$error_empty+'</div>');
                
                } else {
                    $.ajax({
                    type: "POST",
                    url: "./services/login.php",
                    data: {username: $username, password: $password},
                    dataType: "JSON",
                    success: function (response) {
                        console.log(response);
                        if(response.status === 1) {
                            console.log('success');
                            window.location.href = "./dashboard.php";
                        } else {
                            $('.error').html('<div>'+response.info+'</div>');
                        }
                    }
                });
                }
            })
        });
    </script>
</html>