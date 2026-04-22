<?php
session_start();

if (!isset($_SESSION["logged_user"])) {
    header("Location: login.php");
    exit();
}

$user = $_SESSION["logged_user"];

/* Create product array */
if (!isset($_SESSION["products"])) {
    $_SESSION["products"] = [];
}

/* ADD PRODUCT */
if (isset($_POST["add"]) && $user["role"] == "admin") {
    $_SESSION["products"][] = [
        "name" => $_POST["pname"],
        "price" => $_POST["price"]
    ];
}

/* DELETE PRODUCT */
if (isset($_GET["delete"]) && $user["role"] == "admin") {
    array_splice($_SESSION["products"], $_GET["delete"], 1);
}
/* EDIT LOAD */
$editIndex = -1;
$editProduct = ["name" => "", "price" => ""];

if (isset($_GET["edit"]) && $user["role"] == "admin") {
    $editIndex = $_GET["edit"];
    $editProduct = $_SESSION["products"][$editIndex];
}

/* UPDATE PRODUCT */
if (isset($_POST["update"]) && $user["role"] == "admin") {
    $index = $_POST["index"];

    $_SESSION["products"][$index]["name"] = $_POST["pname"];
    $_SESSION["products"][$index]["price"] = $_POST["price"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <style>
        body { font-family: Arial; }

        .main {
            width: 900px;
            margin: auto;
            border: 2px solid black;
        }

        .header {
            padding: 10px;
            display: flex;
            justify-content: space-between;
        }

        .content {
            padding: 20px;
        }

        .footer {
            text-align: center;
            padding: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>

<body>

<div class="main">

    <div class="header">
        <h2><span style="color:green;">Shop</span>BD</h2>
        <div>
            <a href="index.php">Home</a> |
            <a href="products.php">Products</a> |
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <hr>
    

    <div class="content">

        <h3>Product Page</h3>

        <!-- ADMIN ADD FORM -->
        <?php if ($user["role"] == "admin") { ?>
        <form method="post">

            <input type="hidden" name="index" value="<?php echo $editIndex; ?>">

            Name: 
            <input type="text" name="pname" 
            value="<?php echo $editProduct["name"]; ?>">

            Price: 
            <input type="text" name="price" 
            value="<?php echo $editProduct["price"]; ?>">

            <?php if ($editIndex == -1) { ?>
                <input type="submit" name="add" value="Add">
            <?php } else { ?>
                <input type="submit" name="update" value="Update">
            <?php } ?>

        </form>
        <br>
<?php } ?>

        <!-- PRODUCT LIST -->
        <table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <?php if ($user["role"] == "admin") echo "<th>Action</th>"; ?>
            </tr>

            <?php foreach ($_SESSION["products"] as $key => $p) { ?>
            <tr>
                <td><?php echo $p["name"]; ?></td>
                <td><?php echo $p["price"]; ?></td>

                <?php if ($user["role"] == "admin") { ?>
                <td>
                    <a href="products.php?edit=<?php echo $key; ?>">Edit</a> |
                    <a href="products.php?delete=<?php echo $key; ?>">Delete</a>
                </td>
                <?php } ?>
            </tr>
            <?php } ?>

        </table>

    </div>

    <hr>

    <div class="footer">
        Copyright © 2026
    </div>

</div>

</body>
</html>