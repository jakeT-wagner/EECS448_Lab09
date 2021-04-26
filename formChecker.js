
function validate() {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    var re = /\S+@\S+\.\S+/; //https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript
    let val = re.test(email);
    if (!val) {
        alert("Invalid email");
        return false;
    }
    let numSeeds = document.getElementById("seedAmt").value;
    if (isNaN(numSeeds)) {
        alert("Seed amount must be a number");
        return false;
    }
    else {
        if (numSeeds < 0) {
            alert("Seed amount must be non-negative");
            return false;
        }
    }
    let numShovels = document.getElementById("shovAmt").value;
    if (isNaN(numShovels)) {
        alert("Shovel amount must be a number");
        return false;
    }
    else {
        if (numShovels < 0) {
            alert("Shovel amount must be non-negative");
            return false;
        }
    }
    let numMulch = document.getElementById("mlchAmt").value;
    if (isNaN(numMulch)) {
        alert("Mulch amount must be a number");
        return false;
    }
    else {
        if (numMulch < 0) {
            alert("Mulch amount must be non-negative");
            return false;
        }
    }
    if (num)
    return val;
}