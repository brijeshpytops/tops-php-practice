<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            background: pink;
            padding: 5px;
            border-radius: 5px;
            text-decoration: none;
            color: #000000;
            letter-spacing: 1px;
            margin: 2px;
        }
        #action {
            display: flex;
        }
    </style>
</head>
<body>
    <h1>Blog Posts</h1>
    <table>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Action</th>
        </tr>
        <?php
        require "dbConnection.php";

        // Query to retrieve all blog posts
        $sql = "SELECT id, title, content FROM blog";
        $result = $conn->query($sql);

        // Check if there are rows in the result set
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["title"] . "</td>";
                echo "<td>" . $row["content"] . "</td>";
                echo "<td id='action'>";
                // Edit button with ID passed in URL
                echo "<a href='update_data.php?id=" . $row["id"] . "' class='btn'>✏️</a>";
                // Delete button with ID passed in URL
                echo "<a href='delete_data.php?id=" . $row["id"] . "' class='btn'>🗑️</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No blog posts found.</td></tr>";
        }

        // Close the database connection
        $conn->close();
        ?>
    </table>
</body>
</html>
