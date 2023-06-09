<link rel="stylesheet" href="./users_pagination.css">


<?php
require_once 'DB_con.php';

$limit = isset($_GET['limit']) ? $_GET['limit'] : 3;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;

$db = new DB_con();
$result = $db->fetchdata();

$total_records = $result->num_rows;
$total_pages = ceil($total_records / $limit);

$result = $db->fetchdata($start, $limit);


echo '<table class="table table-bordered mt-4">';
echo '<thead>';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>First Name</th>';
echo '<th>Last Name</th>';
echo '<th>Age</th>';
echo '<th>Action</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

while ($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['first_name'] . '</td>';
    echo '<td>' . $row['last_name'] . '</td>';
    echo '<td>' . $row['age'] . '</td>';
    echo '<td>';
    echo '<a href="edit_user.php?id=' . $row['id'] . '" class="btn btn-sm btn-edit">Edit</a> ';
    echo '<a href="delete_user.php?id=' . $row['id'] . '" class="btn btn-sm btn-delete">Delete</a>';
    echo '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
// echo '<nav aria-label="Page navigation example">';
// echo '<ul class="pagination justify-content-center">';
// for ($i = 1; $i <= $total_pages; $i++) {
//     echo '<a class="page-link " href="index.php?page=' . $i . '&limit=' . $limit . '">' . $i . '</a>';
// }
// echo '</ul>';
// echo '</nav>';
?>