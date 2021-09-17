let products = [
    {
        name: "Čvarci Domaći",
        tag: "domaci",
        img: "img/shop/shop1.png",
        price: 50.0,
        inCart: 0
    },
    {
        name: "Čvarci Slavonski",
        img: "img/shop/shop2.png",
        tag: "slavonski",
        price: 80.0,
        inCart: 0

    },
    {
        name: "Čvarci Pileći",
        img: "img/shop/shop3.png",
        tag: "pileci",
        price: 60.0,
        inCart: 0

    },
    {
        name: "Čvarci Od Divljači",
        img: "img/shop/shop4.png",
        tag: "divljac",
        price: 100.0,
        inCart: 0

    }
]

let cartItems = null;
let cartToggle = false;

let carts = document.querySelectorAll('.add-to-cart');
let amounts = document.querySelectorAll('.quantity-input');
console.log(amounts);

for(let i = 0; i < carts.length; i++){
    carts[i].addEventListener('click', () => {
        cartAmount(products[i], amounts[i]);
        addCartItem(products[i]);
        

    })
}

function cartAmount(product, amount){
    let productAmount = localStorage.getItem("cartAmount");
    console.log(productAmount);
    console.log(amount.value);

    if(productAmount){
        productAmount = parseInt(productAmount);
        localStorage.setItem("cartAmount", productAmount + 1);
        document.querySelector(".cart-amount").textContent = productAmount + 1;
    }
    if(productAmount == null){
        localStorage.setItem("cartAmount", 1);
        document.querySelector(".cart-amount").textContent = 1;
    }

    addItems(product, amount);
}

function addItems(product, amount){

    cartItems = localStorage.getItem("itemsInCart");
    cartItems = JSON.parse(cartItems);

    if(cartItems){
        if(cartItems[product.tag] == undefined){
            cartItems = {
                ...cartItems,
                [product.tag]: product
            }
        }
        cartItems[product.tag].inCart = amount.value;
    }
    if(cartItems == null){
        product.inCart = amount.value;
        cartItems = {
            [product.tag]: product
        }
    }
    localStorage.setItem("itemsInCart", JSON.stringify(cartItems));
    console.log("My cart items are: ", cartItems);

    var button = document.getElementById("shop-button-"+product.tag);
    button.disabled = true;
    button.classList.remove("shop-button");
    button.classList.add("shop-button-disabled");


    var cart = document.getElementById("shopping-cart");
    if(!cartToggle)
    {
        cartToggle = true;
        cart.classList.toggle('show-cart');
    }
    
    
}


function addCartItem(product)
{
    const cartItem = document.createElement("div");



    cartItem.classList.add("shopping-cart-item");

    cartItem.style.display = "flex";
    cartItem.style.alignItems = "flex-start";
    cartItem.id = "cart-item-"+product.tag;

    cartItem.innerHTML = `
        <img src="${product.img}" class="cart-item-img img-fluid" alt="${product.name}">

            <div class="shopping-cart-item-info">
                <h3 class="shopping-cart-item-name">${product.name}</h3>
                <div class="cart-item-price">
                    <p>Cijena:</p>
                    <p class="price-in-cart">${product.price*product.inCart} kn</p>
                </div>
                <div class="cart-item-quantity">
                    <p>Količina:</p>
                    <p class="quantity-in-cart">${product.inCart}</p>
                </div>
            </div>

        <img src="img/shop/button_delete.svg" class="img-fluid" alt="Delete" id="remove-${product.tag}">

    </div>
    `;

    const cart = document.getElementById("shopping-cart-body");
    const cartButton = document.querySelector("#line");

    

    cart.insertBefore(cartItem, cartButton);

    const deleteButton = document.getElementById("remove-"+product.tag);

    deleteButton.addEventListener('click', () =>{

        removeFromCart(product); 
        
    });



}

window.onbeforeunload = function (e) {
    localStorage.clear();
};

function getOffset(el) {
    const rect = el.getBoundingClientRect();
    return {
      left: rect.left + window.scrollX,
      top: rect.top + window.scrollY
    };
  }

function ObjectLength( object ) {
    return Object.keys(object).length;
}

function removeFromCart(el)
{
    document.getElementById("cart-item-"+el.tag).remove();
    const cart = document.getElementById("shopping-cart");
    var itemToBeDeleted = cartItems[el.tag];

    console.log(cartItems);


    
    delete cartItems[el.tag];

    console.log(cartItems);

    var button = document.getElementById("shop-button-"+el.tag);
    button.disabled = false;
    button.classList.add("shop-button");
    button.classList.remove("shop-button-disabled");
    
    var cartAmount = localStorage.getItem("cartAmount");
    cartAmount--;

    localStorage.setItem("cartAmount",cartAmount);

    document.querySelector(".cart-amount").textContent = cartAmount;
    localStorage.setItem("itemsInCart", JSON.stringify(cartItems));

    if(ObjectLength(cartItems)==0)
    {
        cart.classList.toggle('show-cart');
    }

    
    
    

}

(function(){ 

    const cartInfo = document.getElementById("cart");
    const cart = document.getElementById("shopping-cart");

    cartInfo.addEventListener('click', () =>{

        if(cartItems!=null && ObjectLength(cartItems)!=0)
        {
            cart.classList.toggle('show-cart');
            if(cartToggle == false) cartToggle = true;
            else cartToggle = false;
            
        }

        
    });

})();