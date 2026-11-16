<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <style>
                            .liste {
                                border: 2px solid #0069d9;
                                background-color: #007bff;
                                border-radius: 0.5em;
                                padding: 0.4em 1.2em 0.4em 1em;
                                transition: all ease-in-out 0.2s;
                                font-size: 16px;
                            }

                            .liste span {
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                color: #fff;
                                font-weight: 600;
                            }

                            .liste:hover {
                                background-color: #0069d9;
                            }
                            .liste a:hover{
                                text-decoration:none;
                            }
                            .nav-btn{
                                float: inline-end;
                                bottom: 45px;
                                position: relative;
                                justify-content: center;
                                display: flex;
                                column-gap: 20px;
                            }
    </style>
    <div class="container mt-5">
            <h2>Ajouter un produit</h2>
            <div class="nav-btn">
                    <button class="liste">
                    <a href="listProduct.php">
                    <span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><style>svg{fill:#ffffff;margin-right:10px;}</style><path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/></svg> Liste des produits
                    </span>
                    </a>
                    </button>
            </div>        
            <form action="addproduct.php" method="post">
            <div class="form-group">
                <label for="name">Nom de produit:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="price">Prix(en TND):</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter le produit</button>
        </form>
    </div>

    <?php
    require_once '../config.php';

    try {
        $pdo = config::getConnexion();

        if (isset($_POST['name']) && isset($_POST['price'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];

            $query = $pdo->prepare('INSERT INTO product (name, price) VALUES (:name, :price)');
            $query->bindParam(':name', $name);
            $query->bindParam(':price', $price);

            if ($query->execute()) {
                echo '<p class="alert alert-success col-10">Product added successfully!</p>';
            } else {
                echo '<p class="alert alert-danger col-10">Error adding product.</p>';
            }
        }
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <style>
        .alert{
            display: flex;
            justify-content: center;
            margin-left: 9.2%;
            margin-top: 20px;
        }
        .titre{
            float: inline-end;
            bottom: 45px;
            position: relative;
        }
    </style>

</body>
</html>