<?php
require "dbConnection.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the data of the blog post with this ID to populate the update form
    // Example:
    $sql = "SELECT * FROM blog WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    // Now you can use $row to populate the form for updating
    ?>
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Update Blog</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }
            form {
                max-width: 600px;
                margin: 20px auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            h1 {
                text-align: center;
            }
            table {
                width: 100%;
            }
            th, td {
                padding: 10px;
            }
            input[type='text'],
            textarea {
                width: calc(100% - 20px);
                padding: 8px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                resize: vertical;
            }
            input[type='submit'] {
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                float: right;
            }
            input[type='submit']:hover {
                background-color: #45a049;
            }
            .btn{
                background: pink;
                padding: 5px;
                border-radius: 5px;
                text-decoration: none;
                color:#000000;
                letter-spacing:1px;
            }
        </style>
    </head>
    <body>
        <form action='' method='post'>
            <table>
                <h1>Update blog</h1>
                <tr>
                    <th>Title</th>
                    <td><input type='text' name='title' value="<?php echo $row['title']; ?>"></td>
                </tr>
                <tr>
                    <th>Content</th>
                    <td><textarea name='content' id='' cols='30' rows='10'><?php echo $row['content']; ?></textarea></td>
                </tr>
                <tr>
                    <td colspan='2'><input type='submit' name='submit' value='Update'></td>
                </tr>
            </table>
        </form>
    </body>
    </html>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $title = $_POST['title'];
        $content = $_POST['content'];

        // Update SQL query should use the new values from the form
        $sql = "UPDATE blog SET title='$title', content='$content' WHERE id=$id";
        if (isset($_POST['submit'])) {
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Record Updated successfully')</script>";
                 // Redirect to the retrieve page
                 header("Location: retrive_data.php");
                 exit();
            } else {
                $message = "Error: " . $sql . "<br>" . $conn->error;
                echo "<script>alert('$message');</script>";
            }
        }
    }

    $conn->close();
} else {
    echo "No ID provided for updating.";
}
?>
