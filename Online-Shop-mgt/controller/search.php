<?php
require_once('../model/employeeModel.php');

header('Content-Type: application/json');

if (isset($_GET['term'])) {
    $term = $_GET['term'];
    $employees = searchEmployee($term);
    echo json_encode($employees);
} else {
    echo json_encode([]);
}
?>