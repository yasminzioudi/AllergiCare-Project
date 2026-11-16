<?php
require_once '../config.php';

try {
    $pdo = config::getConnexion();

    $query = $pdo->query('SELECT * FROM product');

    if ($query) {
        
     
$result = $query->fetchAll();

        if (is_array($result) && count($result) > 0) {
            ?>
            <!DOCTYPE html>
            <html lang=
            <!DOCTYPE "en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Product List</title>
                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
                <style>
                        .nav-btn{
                            float: inline-end;
                            bottom: 45px;
                            position: relative;
                            justify-content: center;
                            display: flex;
                            column-gap: 20px;
                        }
                        .supprime {
                            width: 150px;
                            height: 40px;
                            cursor: pointer;
                            display: flex;
                            align-items: center;
                            background: red;
                            border: none;
                            border-radius: 5px;
                            box-shadow: 1px 1px 3px rgba(0,0,0,0.15);
                            background: #e62222;
                        }

                        .supprime, .supprime span {
                            transition: 200ms;
                        }

                        .supprime .text {
                            transform: translateX(10px);
                            color: white;
                            font-weight: bold;
                        }

                        .supprime .icon {
                            position: absolute;
                            border-left: 1px solid #c41b1b;
                            transform: translateX(100px);
                            height: 40px;
                            width: 40px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                        }

                        .supprime svg {
                            width: 15px;
                            fill: #eee;
                        }

                        .supprime:hover {
                            background: #ff3636;
                        }

                        .supprime:hover .text {
                            color: transparent;
                        }

                        .supprime:hover .icon {
                            width: 150px;
                            border-left: none;
                            transform: translateX(0);
                        }

                        .supprime:focus {
                            outline: none;
                        }

                        .supprime:active .icon svg {
                            transform: scale(0.8);
                        }
                        .quantity-input.mw-40{
                            max-width:40px;
                        }
                        .panier{
                            width: 200px;
                            height: 40px;
                            cursor: pointer;
                            display: flex;
                            align-items: center;
                            border: none;
                            border-radius: 5px;
                            box-shadow: 1px 1px 3px rgba(0,0,0,0.15);
                            background: #007bff;
                        }

                        .panier, .panier span {
                            transition: 200ms;
                        }

                        .panier .text {
                            transform: translateX(8px);
                            color: white;
                            font-weight: bold;
                        }

                        .panier .icon {
                            position: absolute;
                            border-left: 1px solid #ffffff;
                            transform: translateX(145px);
                            height: 40px;
                            width: 40px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                        }

                        .panier svg {
                            width: 18px;
                            fill: #eee;
                        }

                        .panier:hover {
                            background: #007bff;
                        }

                        .panier:hover .text {
                            color: transparent;
                        }

                        .panier:hover .icon {
                            width: 150px;
                            border-left: none;
                            transform: translateX(15px);
                        }

                        .panier:focus {
                            outline: none;
                        }

                        .panier:active .icon svg {
                            transform: scale(0.8);
                        }
                        table tbody tr{
                            text-align:center;
                        }
                       /* .ajout {
                            border: 2px solid #ffc107;
                            background-color: #ffc107;
                            border-radius: 0.5em;
                            padding: 0.4em 1.2em 0.4em 1em;
                            transition: all ease-in-out 0.2s;
                            font-size: 16px;
                        }*/
                        .voir{
                            padding: 0.4em 1.2em 0.4em 1em;
                            transition: all ease-in-out 0.2s;
                            font-size: 16px; 
                        }
                       /* .ajout span {
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            color: #fff;
                            font-weight: 600;
                        }

                        .ajout:hover {
                            background-color: #ffc107bf;
                        }
                        .ajout a:hover{
                            text-decoration:none;
                        }*/
                        .center-cell{
                            display:inline-block;
                            margin:auto;
                            float: left;
                        }
                </style>

            </head>
            <body>

                <div class="container mt-5">
                    <h2>Liste des produits</h2>
                    <div class="nav-btn">
                   
                 
                    
                    </a>
                    </button>
                    <a href="panier.php" class="btn btn-primary voir"><i class="fa-solid fa-shopping-cart"></i> Voir le panier<span id="cartItemCount"></span></a>
                    </div>

                    <table class="table table-bordered">

                        <tbody>
                            <?php foreach ($result as $product) { ?>
                                <tr>
                                    <td>#<?php echo $product['id']; ?></td>
                                    <td><?php echo $product['name']; ?></td>
                                    <td><?php echo $product['price']; ?> TND</td>
                                    <td>
                                        <input type="number" min="1" value="1" class="quantity-input mw-40" name="quantity" id="quantity-input-<?php echo $product['id']; ?>">
                                    </td>
                                    <td  class="center-cell">
                                    <button class="noselect panier" onclick="selectProduct(<?php echo $product['id']; ?>)"><span class="text">Ajouter au panier</span><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg></span></button>
                                    </td>
                                   
                                   
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>




         

                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                <script>
                function deleteProduct(productId) {
                    var modal = document.createElement('div');
                    modal.className = 'modal';

                    modal.innerHTML = `
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Confirmation de suppression</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Êtes-vous sûr de vouloir supprimer ce produit ?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                    <button type="button" class="btn btn-danger" onclick="confirmDelete(${productId})">Confirmer</button>
                                </div>
                            </div>
                        </div>
                    `;


                    $(modal).modal('show');
                }
                function confirmDelete(productId) {
                    $.ajax({
                        type: 'POST',
                        url: '../Controller/delete.php', 
                        data: { productId: productId },
                        success: function(response) {
                            console.log(response);

                            $('.modal').modal('hide');

                            alert('Produit supprimé avec succès!');
                            location.reload();
                        },
                        error: function(error) {
                            console.error('Erreur lors de la suppression du produit :', error);
                        }
                    });
                }
                function selectProduct(productId) {
                    var quantity = $('#quantity-input-' + productId).val();

                    $.ajax({
                        type: 'POST',
                        url: '../Controller/select.php',
                        data: { productId: productId, quantity: quantity }, 
                        success: function(response) {
                            console.log(response);
                            alert('Produit ajouté au panier avec succès!');
                            updateCartCount();

                        },
                        error: function(error) {
                            console.error('Erreur lors de la sélection du produit :', error);
                        }
                    });
                }
                function updateCartCount() {
                    $.ajax({
                        type: 'GET',
                        url: '../Controller/cartCount.php',
                        success: function(response) {
                            $('#cartItemCount').text(' (' + response + ')');
                        },
                        error: function(error) {
                            console.error('Erreur lors de la récupération du nombre d\'articles dans le panier :', error);
                        }
                    });
                }


               </script>

            </body>
            </html>
        
          


        
<?php
        } else {
            
        
echo "No products found.";
        }
    } else {
        echo "Error in the database query.";
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>