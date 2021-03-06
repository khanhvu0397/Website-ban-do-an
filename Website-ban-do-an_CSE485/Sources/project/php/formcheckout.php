<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="../css/form.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container bg-light">
        <h1 class="text-success text-center">
            Form Validation
        </h1>
        <div class="col-md-8 m-auto d-block">
            <form action="#" onsubmit="return validation()">
                <div class="form-group">
                    <label>UserName: </label>
                    <input type="text" name="user" class="form-control" id="user" autocomplete="off">
                    <span id="username" class="text-danger font-weight-bold"></span>
                </div>
                <div class="form-group">
                    <label>PassWord: </label>
                    <input type="password" name="pass" class="form-control" id="pass" autocomplete="off">
                    <span id="passwords" class="text-danger font-weight-bold"></span>
                </div>
                <div class="form-group">
                    <label>Confirm Password: </label>
                    <input type="password" name="conpass" class="form-control" id="conpass" autocomplete="off">
                    <span id="confrpass" class="text-danger font-weight-bold"></span>
                </div>
                <div class="form-group">
                    <label>Mobile Number: </label>
                    <input type="text" name="mobile" class="form-control" id="mobileNumber" autocomplete="off">
                    <span id="mobile" class="text-danger font-weight-bold"></span>
                </div>
                <div class="form-group">
                    <label>Email: </label>
                    <input type="email" name="email" class="form-control" id="emails" autocomplete="off">
                    <span id="emailids" class="text-danger font-weight-bold"></span>
                </div>
                <input  type="submit" name="submit" value="Submit" class="btn btn-success" autocomplete="off">
            </form>
        </div>
    </div>
    <script type="text/javascript">
        /*--------------------------------------------------------------------------------*/
        /*  Kiem Tra Thong Tin Nhap vao Form */
        function validation() {
            var user = document.getElementById("user").value;
            var pass = document.getElementById("pass").value;
            var confirmpass = document.getElementById("conpass").value;
            var mobileNumber = document.getElementById("mobileNumber").value;
            var emails = document.getElementById("emails").value;
            /*--------------------------------------------------------------------------------*/
            /*  Kiem Tra Xem UserName Co Rong, qua it hay qua nhieu ky tu , khong duoc la so  */

            if (user == '') {
                document.getElementById("username").innerHTML = "**** Please Fill The UserName Field! ****";
                return false;
            }
            if ((user.length <=
                    2) || (user.length >= 20)) {
                document.getElementById("username").innerHTML = "**** User Length Must Be Beetween 2 and 20! ****";
                return false;
            }
            if (!isNaN(user)) {
                document.getElementById("username").innerHTML = "**** Only Characters are alowwed! ****";
                return false;
            }

            /*--------------------------------------------------------------------------------*/
            /*  Kiem Tra Xem Password Co Rong, qua it hay qua nhieu ky tu , pass va confirm pass giong nhau */
            if (pass == '') {
                document.getElementById("passwords").innerHTML = "**** Please Fill The PassWord Field! ****";
                return false;
            }
            if ((pass.length <=
                    5) || (pass.length >= 20)) {
                document.getElementById("passwords").innerHTML = "**** User PassWord Must Be Beetween 5 and 20! ****";
                return false;
            }
            if (pass != confirmpass) {
                document.getElementById("confrpass").innerHTML = "**** PassWord Are Not Matching! ****";
                return false;
            }
            if (confirmpass == '') {
                document.getElementById("confrpass").innerHTML = "**** Please Fill The ConfirmPassWord Field! ****";
                return false;
            }



            /*--------------------------------------------------------------------------------*/
            /*  Kiem Tra Xem MobileNumber Co Rong, phai la so , du 10 so   */
            if (mobileNumber == '') {
                document.getElementById("mobile").innerHTML = "**** Please Fill The MobileNumber Field! ****";
                return false;
            }
            if (isNaN(mobileNumber)) {
                document.getElementById("mobile").innerHTML = "**** Only Number Are Allowed ****";
                return false;
            }
            if (mobileNumber != 10) {
                document.getElementById("mobile").innerHTML = "**** Mobile Numbers Must be 10 number! ****";
                return false;
            }

            /*--------------------------------------------------------------------------------*/
            /*  Kiem Tra Xem Email Co Rong, vi tri '@' , '.' co dung vi tri ko  */
            if (emails == '') {
                document.getElementById("emailids").innerHTML = "**** Please Fill The Emails Field ! ****";
                return false;
            }
            if (emails.indexOf('@') <=
                0) {
                document.getElementById("emailids").innerHTML = "**** @ Invalid Posittion !   ****";
                return false;
            }
            if ((emails.charAt(emails.length - 4) != '.') && (emails.charAt(emails.length - 3) != '.')) {
                document.getElementById("emailids").innerHTML = "**** . Invalid Posittion !   ****";
                return false;
            }
        }
    </script>
</body>

</html>
