
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panier</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <style>
            .close-icon {
                cursor: pointer;
                color: red;
                font-size: 1.2em;
                float: inline-end;
            }
            
            .titre{
                float: inline-end;
                bottom: 45px;
                position: relative;
            }
            .container .rows{
                margin-top:5%;
            }
            .center{
                text-align:center;
            }
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
        </style>
    </head>
<?php
session_start();

if (isset($_SESSION['selectedProducts']) && !empty($_SESSION['selectedProducts'])) {
    $selectedProducts = $_SESSION['selectedProducts'];
?>


    <body>

    <div class="container mt-5">
        <nav>
            <h2>Panier</h2>
            <h2 class="titre"><a href="listProduct.php">Liste de produits</a></h2>
        </nav>
        <div class="rows">
            <?php foreach ($selectedProducts as $key => $product): ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <i class="fas fa-times close-icon" onclick="removeProduct(<?php echo $key; ?>)"></i>
                        <div class="row col-8">
                            <div class="col-md-6">
                                <h5 class="card-title" style="font-size: 1.5em;"><?php echo $product['name']; ?></h5>
                                <p class="card-text" style="font-size: 1em;"><?php echo $product['quantity']; ?></p>
                            </div>
                            <div class="col-md-6 text-right">
                                <p class="card-title" style="font-size: 1.5em;">Prix unitaire: <?php echo $product['price']; ?> TND</p>
                                <h5 class="card-text" style="font-size: 1.5em;">Total: <?php echo $product['price'] * $product['quantity']; ?> </h5>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>     
    </div>
    <form action="..\controller\addcom.php" method="post">
                <div class="container"><div id="totalSum"  class="row" style="font-size: 2em; margin-bottom: 10px; justify-content:center"></div></div>
                <input type="text" name="inpTot" id="inpTot" style="display:none;" value="">
    <div class="container mt-3">
        <div class="text-center">
            <button class="btn btn-danger" onclick="cancelOrder()">Annuler</button>
            <button class="btn btn-success" data-toggle="modal" data-target="#orderModal" type="submit"> Commander</button>
        </div>
    </div>
    </form>

    <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderModalLabel">Passer la commande</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="orderForm">
                        <div class="form-group">
                            <label for="email">Adresse e-mail:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-success" onclick="placeOrder()">Valider</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function removeProduct(key) {
            $.ajax({
                type: 'POST',
                url: '../Controller/remove_panier.php', 
                data: { key: key },
                success: function(response) {
                    console.log(response);
                    location.reload();
                },
                error: function(error) {
                    console.error('Error removing the product:', error);
                }
            });
        }
        function cancelOrder() {
            $.ajax({
                type: 'POST',
                url: '../Controller/cancel_order.php',
                success: function(response) {
                    console.log(response);
                    location.reload();
                },
                error: function(error) {
                    console.error('Error cancelling the order:', error);
                }
            });
        }

        function placeOrder() {
            var email = $('#email').val();

            $.ajax({
                type: 'POST',
                url: '../Controller/place_order.php', 
                data: { email: email },
                success: function(response) {
                    console.log(response);
                    $('#orderModal').modal('hide');
                    alert('Order placed successfully!');
                },
                error: function(error) {
                    console.error('Error placing the order:', error);
                }
            });
        }
        function updateTotalSum() {
            var totalSum = 0;

            <?php foreach ($selectedProducts as $product): ?>
                totalSum += <?php echo $product['price'] * $product['quantity']; ?>;
            <?php endforeach; ?>

            document.getElementById('totalSum').innerHTML = 'Total à payer: ' + totalSum.toFixed(2) + ' TND';
            document.getElementById('inpTot').value = totalSum.toFixed(2);
        }

        window.onload = updateTotalSum;

    </script>

</body>
</html>

<?php
} else {
    echo '<div class="center"><img src="../Assets/panier.jpg" alt="Empty Cart" style="width:40%; "></div><div class="center"><button class="liste"><a href="listProduct.php"><span><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><style>svg{fill:#ffffff;margin-right:10px;}</style><path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/></svg> Liste des produits</span></a></button></div>';
}
?>
