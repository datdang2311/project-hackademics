<?php include('../header.php');
include('../../config/config.php');
?>

    <div class="container">
        <form action="#" method="post">
            <table>
                <tr>
                    <td>
                        <label for="user">User</label>
                    </td>
                    <td><input type="text" id="user" name="user" placeholder="Nhập tên đăng nhập"/></td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password</label>
                    </td>
                    <td><input type="password" id="password" name="password" placeholder="Nhập mật khẩu"/></td>
                </tr>
                <tr>
                    <td colspan="2"><a href="register.php">Chưa có tài khoản, đăng ký ở đây</a></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" name="login">Login</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>


<?php
if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];

    login($connection, $user, $password);
}
?>

<?php include('../footer.php'); ?>