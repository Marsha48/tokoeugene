<!DOCTYPE html>
<html>

<head>
    <title> halaman login </title>
</head>

<body>
    <form action="validasi.php" method="POST">
        <h1> selamat datang ! </h1>
        <table>
            <tr>
                <td> username </td>
                <td> <input type="text" name="username"> </td>
            </tr>
            <tr>
                <td> password </td>
                <td> <input type="password" name="password"> </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">LOGIN</button>
                    <button type="reset">CLEAR</button>
                </td>
            </tr>
        </table>
</body>

</html>