<?php
include('../header.php');
include('../../config/config.php')
/**
 * Created by PhpStorm.
 * User: Dang Quoc Dat
 * Date: 2/19/2017
 * Time: 11:43 PM
 */

?>

    <div class="container">
        <form action="#" method="post">
            <table>
                <tr>
                    <td colspan="2" style="text-align: center"><h3>Register</h3></td>
                </tr>
                <tr>
                    <td><label for="username">Username</label></td>
                    <td><input type="text" name="username" id="username" placeholder="Nhập tên đăng nhập" required/>
                    </td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input type="password" name="password" id="password" placeholder="Nhập mật khẩu" required/></td>
                </tr>
                <tr>
                    <td><label for="passwordRetype">Retype Password</label></td>
                    <td><input type="password" name="passwordRetype" id="passwordRetype"
                               placeholder="Nhập lại mật khẩu" required/></td>
                </tr>
                <tr>
                    <td><label for="fullname">Fullname</label></td>
                    <td><input type="text" name="fullname" id="fullname" placeholder="Nhập họ tên" required/></td>
                </tr>
                <tr>
                    <td><label for="address">Address</label></td>
                    <td><textarea type="text" name="address" id="address" placeholder="Nhập địa chỉ"
                                  required></textarea></td>
                </tr>
                <tr>
                    <td><label for="dob">DOB</label></td>
<!--                    date-date-format : format khi hiển thị -->
                    <td><input type="text" name="dob" id="dob" placeholder="Chọn ngày sinh"  data-date-format="dd/mm/yyyy" required/></td>
                </tr>
                <tr>
                    <td><label>Gender</label></td>
                    <td>
                        <label for="male">Male</label> <input type="radio" name="gender" id="male" value="1" checked/>
                        <label for="female">Female</label> <input type="radio" name="gender" id="female" value="0"/>
                    </td>
                </tr>
                <tr>
                    <td><label for="phone">Phone</label></td>
                    <td><input type="tel" name="phone" id="phone" placeholder="Nhập số điện thoại" required/></td>
                </tr>
                <tr>
                    <td><label>Avatar</label></td>
                    <td><input type="file" name="avatar" id="avatar"/></td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="register" id="register">Register</button>
                    </td>
                    <td>
                        <button type="button" onclick="history.go(-1)">Back</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>


<?php
include('../footer.php');
?>


    <script>
        $(function(){
            $('#register').click(function(){
                $.ajax({
                    url:"../../controller/testAjax.php",
                    method: "POST",
                    contentType : "application/json",
                    success: function(result){
                        var obj = JSON.parse(result);
                        console.log(obj);
                    }
                    error:function(status,statusTxt,response){
                        console.log(status.status+"----"+response);
                    }
                })
            });
        });
    </script>

<?php
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordRetype = $_POST['passwordRetype'];

    if($password!=$passwordRetype){

    }


    $fullName = $_POST['fullname'];
    $address = $_POST['address'];

    $DOB = date_format(DateTime::createFromFormat("d/m/Y", $_POST['dob']), "Y-m-d");

    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $avatar = $_POST['avatar'];

//    register($connection,$username,$password,)
}
?>