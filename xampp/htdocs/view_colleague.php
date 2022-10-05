<?php // All pages must include 'inc_head.php' at the start, and 'inc_tail.php' at the end ?>

<!-- page head -->
<?php include_once('includes\inc_head.php');?>

<!-- page specific code here -->
<?php include_once('includes\inc_access_admins.php'); // logged in admins only ?>

<h1>View Colleagues</h1>
List of users and colleagues.
Many features are not yet implemented.

<?php
    // create an html table of users
    function create_table_users(){
        global $db;
        $self = htmlspecialchars($_SERVER['PHP_SELF']);

        echo '<table class="table table-sm table-bordered">
                <tr>
                    <th>Actions</th>
                    <th>ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                </tr>';

        // database query
        $query = "select * from users;";
        $user_result = mysqli_query($db, $query) or die("Error: " . mysqli_error($db));
        
        // have results?
        if(mysqli_num_rows($user_result) > 0){
            // output data of each row
            while($user_row = mysqli_fetch_assoc($user_result)) {
                echo PHP_EOL . '<tr>';
                echo '<td>
                        <a href="' . $self . '?action=delete&id=' . $user_row['id'] . '">Delete</a>
                        <a href="' . $self . '?action=view&id='   . $user_row['id'] . '">View</a>
                      </td>';
                echo '<td>' . $user_row['id'] . '
                      </td>';

                // get PERSONAL row from fk_personal in db_user
                if(isset($user_row['fk_personal'])){
                    $fk_personal = $user_row['fk_personal'];
    
                    // database query
                    $query = "select * from personal where id='$fk_personal';";
                    $personal_result = mysqli_query($db, $query) or die("Error: " . mysqli_error($db));
    
                    if(mysqli_num_rows($personal_result) > 0){
                        $pers_row = mysqli_fetch_assoc($personal_result);
                        // output data
                        echo '<td>' . $pers_row['first_name'] . '</td>
                              <td>' . $pers_row['last_name']  . '</td>';
                    }
                }
                echo '<td>' . $user_row['email'] . '</td>';
                // end of table row
                echo '</tr>';
            }
        }
        echo '</table>';
    }
    // create table
    create_table_users();
?>

<!-- page tail -->
<?php include_once('includes\inc_tail.php');?>