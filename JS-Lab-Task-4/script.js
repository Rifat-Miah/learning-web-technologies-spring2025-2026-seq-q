let unitPrice = 1000;

let qtyInput = document.getElementById("qty");
let totalBox = document.getElementById("total");

qtyInput.addEventListener("input", calculateTotal);

function calculateTotal(){

    let quantity = qtyInput.value;

    if(quantity < 0){
        quantity = 0;
        qtyInput.value = 0;
        alert("Quantity cannot be negative");
    }

    let total = unitPrice * quantity;

    totalBox.value = total;

    if(total > 1000){
        alert("Congratulations! You are eligible for a gift coupon.");
    }
}