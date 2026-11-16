function validateForm() {
    var name = document.getElementById("name").value.trim();
    var price = document.getElementById("price").value.trim();
    var id_c = document.getElementById("id_c").value.trim();
    var image = document.getElementById("image").value.trim();

    if (name === "" || price === "" || id_c === "" || image === "") {
        alert("All fields are required");
        return false;
    }
    var priceRegex = /^\d+(\.\d{1,2})?$/;
    if (!priceRegex.test(price)) {
        alert("Price must be a valid number with up to two decimal places");
        return false;
    }

    return true;
}
