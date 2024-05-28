<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <!-- Bootstrap ICONS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

      <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

      <script src="ajax/ajax.js"></script>

</head>
<body>
  <div class="container my-5">
    <div class="d-flex justify-content-end">
      <!-- add user trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModel">
      <i class="bi bi-person-add"></i> Add user
      </button>

      <!-- add new user -->
      <div class="modal fade" id="addUserModel" tabindex="-1" aria-labelledby="addUserModelLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form id="user-form">
              <div class="modal-header">
                <h5 class="modal-title" id="deleteUserModelLabel">Add new user</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label for="firstname" class="form-label"><i class="bi bi-person"></i> Firstname</label>
                  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Jhon">
                </div>
                <div class="mb-3">
                  <label for="lastname" class="form-label"><i class="bi bi-person"></i> Lastname</label>
                  <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Doe">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label"><i class="bi bi-envelope"></i> Email address</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                  <label for="mobile" class="form-label"><i class="bi bi-phone"></i> Mobile</label>
                  <input type="text" class="form-control" id="mobile" name="mobile" placeholder="(+xx) xxx xxxx xxx">
                </div>
              </div>
              <div class="modal-footer">
                <input type="hidden" value="1" name="type">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="add-btn">Add</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- delete user model -->
      <!-- Modal -->
      <div class="modal fade" id="deleteUserModel" tabindex="-1" aria-labelledby="deleteUserModelLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="deleteUserModelLabel">Delete user</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            Are you sure you want to delete <span id="delete-user-id"></span> user?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-bs-dismiss="modal">No</button>
              <button type="button" class="btn btn-danger" id='delete-popup-user'>Yes</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  <table class="table my-5">
  <thead>
    <tr>
      <th scope="col"><input type="checkbox" name="" id=""></th>
      <th scope="col">USER_ID</th>
      <th scope="col">FIRST_NAME</th>
      <th scope="col">LAST_NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">MOBILE</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>

    <?php
    require "backend/dbConnection.php";
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<th scope='row'><input type='checkbox' name='id'></th>";
        echo "<td>" . $row['user_id'] . "</td>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['mobile'] . "</td>";
        echo "<td>";
        echo "<a href=".$row['user_id']."><span class='bi bi-pen text-primary'></span></a>";
        echo "&nbsp;";
        echo "|";
        echo "&nbsp;";
        echo "<a data-bs-toggle='modal' data-bs-target='#deleteUserModel' href='#deleteUserModel' data-id=" . $row['user_id'] . " id='delete-user' data-name=" . $row['first_name'] .'-' . $row['last_name'] .  "><span class='bi bi-trash text-danger'></span></a>";
        echo "</td>";
        echo "</tr>";
    }
    }
    else{
      echo "No recode found";
    }
    ?>
    
  </tbody>
</table>
  </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>