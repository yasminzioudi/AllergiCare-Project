function validateForm() {
    var nom = document.getElementById("nom").value.trim();

    if (nom === "") {
        alert("Nom is required!");
        return false;
    }
    var firstThreeChars = nom.slice(0, 3);
    if (!/^[a-zA-Z]{3}$/.test(firstThreeChars)) {
        alert("The first three characters must be alphabetic!");
        return false;
    }
    return true;
}