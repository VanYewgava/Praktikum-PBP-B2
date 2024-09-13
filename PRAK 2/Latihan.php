<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Sign On Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
            padding: 10px;
            text-align: left;
        }
        td {
            padding: 10px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        textarea {
            width: 100%;
            padding: 8px;
            margin: 4px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 10px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h2 style="text-align: center;">Student Sign On Form</h2>

<form action="process.php" method="POST">
    <table>
        <tr>
            <th>Username:</th>
            <td>
                <input type="text" name="username" required>
                <small>Note: Username cannot contain numbers</small>
            </td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>
                <input type="email" name="email" required>
                <small>Note: Email must contain @ followed by domain</small>
            </td>
        </tr>
        <tr>
            <th>Perguruan Tinggi:</th>
            <td><input type="text" name="university"></td>
        </tr>
        <tr>
            <th>Program Studi:</th>
            <td>
                <input type="radio" name="program_studi" value="Informatika" required> Informatika<br>
                <input type="radio" name="program_studi" value="Matematika" required> Matematika<br>
                <input type="radio" name="program_studi" value="Fisika" required> Fisika<br>
                <input type="radio" name="program_studi" value="Kimia" required> Kimia<br>
                <input type="radio" name="program_studi" value="Statistika" required> Statistika<br>
                <input type="radio" name="program_studi" value="Biologi" required> Biologi<br>
            </td>
        </tr>
        <tr>
            <th>Hobi:</th>
            <td>
                <input type="checkbox" name="hobi[]" value="Futsal"> Futsal<br>
                <input type="checkbox" name="hobi[]" value="Badminton"> Badminton<br>
                <input type="checkbox" name="hobi[]" value="Membaca"> Membaca<br>
                <input type="checkbox" name="hobi[]" value="Menulis"> Menulis<br>
                <input type="checkbox" name="hobi[]" value="Travelling"> Travelling<br>
            </td>
        </tr>
        <tr>
            <th>Password:</th>
            <td>
                <input type="password" name="password" required>
                <small>Hint: Password must be at least 8 characters long, contain 1 uppercase letter, 1 lowercase letter, and 1 number.</small>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <button type="submit">Submit</button>
            </td>
        </tr>
    </table>
</form>
<php>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $university = $_POST['university'];
    $program_studi = $_POST['program_studi'];
    $hobi = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : 'Tidak ada hobi yang dipilih';
    $password = $_POST['password'];

    // Validation
    $error = false;
    $errorMessage = "Error processing form:\n";

    // Validate Username (string only, no numbers)
    if (!preg_match("/^[a-zA-Z]*$/", $username)) {
        $error = true;
        $errorMessage .= "Username hanya boleh berisi huruf.\n";
    }

    // Validate Email (must contain @ and domain)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $errorMessage .= "Email tidak valid.\n";
    }

    // Validate Password (minimum 8 characters, 1 uppercase, 1 lowercase, 1 number)
    if (strlen($password) < 8 || !preg_match("/[A-Z]/", $password) || !preg_match("/[a-z]/", $password) || !preg_match("/[0-9]/", $password)) {
        $error = true;
        $errorMessage .= "Password harus minimal 8 karakter, mengandung 1 huruf besar, 1 huruf kecil, dan 1 angka.\n";
    }

    if ($error) {
        // Display detailed error message
        echo "<script>alert('$errorMessage'); window.history.back();</script>";
    } else {
        // Display success message and form data
        echo "<script>alert('Form submitted successfully!');</script>";
        echo "<h2>Display Detail Informasi Data</h2>";
        echo "Username: $username<br>";
        echo "Email: $email<br>";
        echo "University: $university<br>";
        echo "Program Studi: $program_studi<br>";
        echo "Hobbies: $hobi<br>";
    }
}
?>

</body>
</html>
