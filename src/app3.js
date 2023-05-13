if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}


var popisJela = {
    "Čvarci domaći": "dodajDomaci",
    "Čvarci slavonski": "dodajSlavonski",
    "Pileći čvarci": "dodajPileci",
    "Čvarci od divljači": "dodajDivlji"
  };

function isNumber(evt) {
    // Samo ASCII vrijenosti od 49 (Dec -> 1) do 57 (Dec->9)
    var ASCIIValue = (evt.which) ? evt.which : evt.keyCode
    if (ASCIIValue < 49 || ASCIIValue > 57){
        return false;
    }
    return true;
}



function ready() {
    var removeCartItemButtons = document.getElementsByClassName('brisanje-artikla');
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i];
        button.addEventListener('click', removeCartItem);
        
    }

  /*  var quantityInputs = document.getElementsByClassName('cart-quantity-input');
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i];
        input.addEventListener('change', quantityChanged);
    }*/

    let kosaraIkona = document.querySelector("#kosara-ikonica");
    kosaraIkona.addEventListener("click", minicartIconClicked);
    

    //let addToCartButtons = document.querySelector(".shop-item-button");
    addToCartButtons = document.getElementsByClassName('shop-item-button');
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i];
        button.addEventListener('click', addToCartClicked);
         
    }

    //document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)
}

/*function purchaseClicked() {
    alert('Thank you for your purchase')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    while (cartItems.hasChildNodes()) {
        cartItems.removeChild(cartItems.firstChild)
    }
    updateCartTotal()
}*/

function removeCartItem(event) {
    var buttonClicked = event.target;
    let nazivObrisanogArtikla = buttonClicked.parentElement.getElementsByClassName('naziv-kupljenog-artikla')[0].innerText;
    //console.log(popisJela[nazivObrisanogArtikla]);
    buttonId = popisJela[nazivObrisanogArtikla];
    document.getElementById(buttonId).disabled = false;
    document.getElementById(buttonId).classList.toggle('shop-button-pritisnuto');
    
    buttonClicked.parentElement.remove();
    
    showQuantity();
}


function minicartIconClicked(event) {
    event.preventDefault();
    event.target.className = "";
    let minicartPos = document.querySelector(".minicart-position");
    minicartPos.classList.toggle('minicart-position-unvisible');
}


function addToCartClicked(event) {
    
    event.preventDefault();
    let button = event.target;
    var shopItem = button.parentElement;
    var title = shopItem.getElementsByClassName('shop-item-naziv')[0].innerText;
    var price = shopItem.getElementsByClassName('shop-item-cijena')[0].innerText;
    var quantity = shopItem.getElementsByClassName('shop-item-quantity')[0].value;
    var imageSrc = shopItem.getElementsByClassName('shop-item-slika')[0].src;

    //event.target.className = "";
    event.target.classList.toggle('shop-button-pritisnuto');
    
    button.disabled = true;

    addItemToCart(title, price, imageSrc,quantity);
    
    
    

    
   // updateCartTotal()
}

function addItemToCart(title, price, imageSrc,quantity) {
   
    var cartRow = document.createElement('article');
    cartRow.classList.add('minicart-sadrzaj');
    var cartItems = document.getElementsByClassName('article-place')[0];
    var product=parseFloat(price) * parseFloat(quantity);
    product=product.toFixed(2);
    p=product.toString();
   /* var cartItemNames = cartItems.getElementsByClassName('naziv-kupljenog-artikla');
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert('This item is already added to the cart');
            return
        }
    }*/
    var cartRowContents = `
    
    <img class="slika-cvarci" src="${imageSrc}" alt="Slika kupljenog artikla" aria-label="Artikl za kupiti" loading="lazy">
    <div class="kupljeni-cvarci-info">
        <h3 class="naziv-kupljenog-artikla">${title}</h3>
        <p class="paragraf-cijena">Cijena: <span class="cijena-kupljenog-artikla">${p}</span></p>
        <p class="paragraf-kolicina">Količina: <span class="kolicina-kupljenog-artikla">${quantity}</span></p>
    </div>
    <img class="brisanje-artikla"  src="images/button-delete.png" alt="Izbrisi artikl">

`;
    cartRow.innerHTML = cartRowContents;
   // const cart=document.getElementById('minicart');
   // const total=document.getElementById('minicart-button-div');
    //cart.insertBefore(cartItems,total);
    cartItems.append(cartRow);
    cartRow.getElementsByClassName('brisanje-artikla')[0].addEventListener('click', removeCartItem);
    //cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
     showQuantity();
}

/*function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('$', ''))
        var quantity = quantityElement.value
        total = total + (price * quantity)
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('cart-total-price')[0].innerText = '$' + 
    
}
*/

function showQuantity(){
    const total =[];
    const items=document.querySelectorAll(".paragraf-cijena");
    items.forEach(function(item){
        total.push(item.textContent);
    });

    document.getElementById("količina").textContent=total.length;
}