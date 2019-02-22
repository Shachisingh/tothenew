<html>
    <head>
        <title>Insert Form Data In SQL Using PDO</title>
        <style>
           
            *,::after,::before{
                margin: 0;
                padding: 0;
            }

            body{
                background: rgba(44, 62, 80, 1);
                margin: 0px;
                padding: 0px;
            }

            .main{
                display : flex;
                justify-content: center;
                margin-top:200px;;  
            }

            form{
                display : flex;
                align-items: center;
                justify-content: center;
                flex-flow: column wrap; 
                padding: 20px;
                border: 3px solid black;
                border-radius: 10px;
                width : 350px;
                background-color: black;  
            }

            input{
                text-align: center;
                width: 200px;
                height: 50px;
                border: 2px solid #1a73e8;
                outline: none;
                border-radius: 30px;
                margin-bottom: 10px;
                font-size: 15px;
                background-color: black;
                color: white;
            }

            input[type="submit"]:hover{
                border-color: #30e648;
                background-color: #30e648;
            }

            input:focus{
                border-color: #30e648;
                width: 300px; 
                font-size: 25px;
                transition: 0.3s ease-in-out;
            }

        </style>

        <script>

            function validateEmail(emailField){
                var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                if (reg.test(emailField.value) == false) 
                {
                    alert('Invalid Email Address');
                    return false;
                }
                return true;
            }

            function validatePhone(phoneField){
                if(phoneField.value.length != 10)
                {
                    alert("Invalid Phone Number");
                    return false;
                }
                return true;
            }

            function checkForm(){
                var e = document.getElementById('email');
                var p = document.getElementById('phone');
                var ea = validateEmail(e);
                var pa = validatePhone(p);
                return ea&&pa;
            }
        </script>
    </head>
    
    <body>
        <div class="main">
            
            <form action="./ques1b.php" method="POST" onsubmit="return checkForm()">
                <input type="text" name="first_name" id="first_name" placeholder="First name" required autocomplete="off">
                
                <input type="text" name="last_name" id="last_name" placeholder="Last name" required autocomplete="off">
                
                <input type="email" name="email" id="email" placeholder="Email" required autocomplete="off">

                <input type="number" name="phone" id="phone" placeholder="Phone number" required autocomplete="off">

                <input type="submit" value="submit" name="submit">
            </form>
        </div>    
    </body>
</html>
