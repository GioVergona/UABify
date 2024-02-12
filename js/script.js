// script.js

if (typeof jQuery === 'undefined') {
    console.error('jQuery is not loaded!');
} else {
    $(document).ready(function () {
        // Show the dropdown menu when hovering over the "Menu" link or the dropdown menu itself
        $('.dropdown').on('mouseenter', function () {
            $(this).find('.dropdown-menu').slideDown();
        });
    
        // Hide the dropdown menu when mouse leaves the dropdown
        $('.dropdown').mouseleave(function () {
            $(this).find('.dropdown-menu').slideUp();
        });
    
        // Close the dropdown menu when clicking outside of it
        $(document).click(function (e) {
            if (!$(e.target).closest('.dropdown').length) {
                $('.dropdown-menu').slideUp();
            }
        });
    });    
       
    
}

async function register(){
    var form = await fetch("index.php?action=register");
    var resposta = await form.text();
    document.getElementById("main_menu").innerHTML = resposta;
    document.getElementById("foot").style.display = "none";
}

async function login(){
    var form = await fetch("index.php?action=login");
    var resposta = await form.text();
    document.getElementById("main_menu").innerHTML = resposta;
    document.getElementById("foot").style.display = "none";

}

async function show_products(id){
    var products = await fetch ("index.php?action=products&category_id="+id);
    var resposta = await products.text();
    document.getElementById("main_menu").innerHTML = resposta;
}

async function show_details(id){
    var details = await fetch ("index.php?action=product_details&product_id="+id);
    var resposta = await details.text();
    document.getElementById("main_menu").innerHTML = resposta;
}

async function changeQuantity(amount) {
    var quantityInput = document.getElementById('quantity');
    var currentQuantity = parseInt(quantityInput.value, 10);
    var newQuantity = currentQuantity + amount;
    if (newQuantity >= 1) {
        quantityInput.value = newQuantity;
    }else{
        // If newQuantity is less than 1, set the quantity to 1
        quantityInput.value = 1;
    }
}

async function changeQuantityInCart(amount, id, price) {
    var quantityInput = document.getElementById('quantity');
    var currentQuantity = parseInt(quantityInput.value, 10);
    var newQuantity = currentQuantity + amount;

    if (newQuantity >= 1) {
        quantityInput.value = newQuantity;
        await fetch("index.php?action=add_cart&quantity=" + amount + "&productId=" + id + "&price=" + price);
    }else{
        // If newQuantity is less than 1, set the quantity to 1
        quantityInput.value = 1;
    }
    var page = await fetch("index.php?action=update_footer");
    var response = await page.text();
    document.getElementById('foot').innerHTML=response;
    page = await fetch ("index.php?action=cart_summary");
    text = await page.text();
    document.getElementById('main_menu').innerHTML=text;
}

async function removeProduct(id) {
    // Fetch to remove the product from the cart
    await fetch ("index.php?action=remove_product&product="+id);

    // Update the cart summary
    var page = await fetch ("index.php?action=cart_summary");
    var text = await page.text();
    document.getElementById('main_menu').innerHTML=text;
    page = await fetch("index.php?action=update_footer");
    response = await page.text();
    document.getElementById('foot').innerHTML=response;
}

async function addCart(id, price) {

    document.cookie = "amplitude_testuab.cat=value; path=/; samesite=None; secure";
    document.cookie = "amplitude_id_5d7f4b37b72ef9106d98490e7071b8a7=value; domain=tdiw-i4.deic-docencia.uab.cat; path=/; samesite=None; Secure";

    var quantity = document.getElementById('quantity').value;
    var page = await fetch("index.php?action=add_cart&quantity=" + quantity + "&productId=" + id + "&price=" + price);
    var response = await page.text();
    document.getElementById('responseMessage').innerHTML = response;

    page = await fetch("index.php?action=update_footer");
    response = await page.text();
    document.getElementById('foot').innerHTML=response;
    
}

async function cartSummary() {
    try {
        var cart = await fetch("index.php?action=cart_summary");
        if (!cart.ok) {
            throw new Error(`Failed to fetch: ${cart.status} ${cart.statusText}`);
        }

        var resposta = await cart.text();
        document.getElementById("main_menu").innerHTML = resposta;

        // Remove the footer once you're on the cart summary page
        document.getElementById("foot").style.display = "none";
        
    } catch (error) {
        console.error("Error:", error);
    }
}

async function finishPayment() {
    // Update UI immediately
    document.getElementById("main_menu").innerHTML = "Loading...";
    var page = await fetch("index.php?action=payment");
    var response = await page.text();

    // Update UI with the final response
    document.getElementById("main_menu").innerHTML = response;
}

async function editProfile(){
    var page = await fetch("index.php?action=edit_profile");
    var response = await page.text();
    document.getElementById("main_menu").innerHTML = response;
    document.getElementById("foot").style.display = "block";

}

async function logout(){
    var page = await fetch("index.php?action=logout");
    var response = await page.text();
    document.getElementById("body").innerHTML = response;
}

async function clearCart(){
    var page = await fetch("index.php?action=clear_cart");
    var response = await page.text();
    document.getElementById("main_menu").innerHTML = response;
    page = await fetch("index.php?action=update_footer");
    response = await page.text();
    document.getElementById('foot').innerHTML=response;
}

async function listPurchases(){
    var page = await fetch("index.php?action=list_purchases");
    var response = await page.text();
    document.getElementById("main_menu").innerHTML = response;
    document.getElementById("foot").style.display = "block";
}

async function search(){
    var text = document.getElementById("searched_product").value;
    var page = await fetch("index.php?action=search&searched_product="+text);
    var response = await page.text();
    document.getElementById("main_menu").innerHTML = response;
    document.getElementById("foot").style.display = "block";
}

document.addEventListener("DOMContentLoaded", function () {
    var successMessage = document.getElementById('success-message');

    if (successMessage) {
        successMessage.style.display = 'block';
        
        setTimeout(function () {
            successMessage.style.opacity = '0'; // Set opacity to 0 to start the transition
        }, 3000);
    }
});

document.addEventListener("DOMContentLoaded", function () {
    var successMessage = document.getElementById('insuccess-message');

    if (successMessage) {
        successMessage.style.display = 'block';
        
        setTimeout(function () {
            successMessage.style.opacity = '0'; // Set opacity to 0 to start the transition
        }, 3000);
    }
});

