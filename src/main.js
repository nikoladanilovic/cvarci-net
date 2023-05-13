

let quantityFields = document.getElementsByClassName('item-quantity');

// Onemogućava se unos broja 0 i slova
function isNumber(evt) {
    // Samo ASCII vrijenosti od 49 (Dec -> 1) do 57 (Dec->9)
    var ASCIIValue = (evt.which) ? evt.which : evt.keyCode
    if (ASCIIValue < 49 || ASCIIValue > 57){
        return false;
    }
    return true;
}

// textInput -> predstavlja input unutar kojeg je unešen broj kilograma željenih čvaraka
// price -> predstavlja cijenu po kilogramu čvaraka
/*function staviUKosaricu(button,textInput, price){
    // dohvaćanje broja kilograma čvaraka
    let quantity = textInput.value

    // onemogućavanje button-a
    button. disabled = true;
    button.style.background = '#E5E5E5';
    button.style.color = '#9093A6';

    //Provjera da je korisnik unio broj
    if(quantity == null){
        alert("Niste unijeli nikakvu količinu")
    }else{
        console.log(`Količina:${quantity} \nCijena po kilogramu:${price} \nZa platiti:${quantity*price}`);
    }
    */

//}
(function removeClicked(){
    var removecartItemButtons=document.getElementsByClassName('brisanje-artikla')
    for(var i=0;i<removecartItemButtons.length;i++){
        var button=removecartItemButtons[i]
        button.addEventListener('click',function(event){
            var buttonClicked=event.target
            buttonClicked.parentElement.remove()
        })
    }
})();

(function addToCartClicked(){
   // let quantity = textInput.value
    var addToCartButtons = document.getElementsByClassName('shop-item-button')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', function(event){
            var button = event.target
            var shopItem = button.parentElement
            var title = shopItem.getElementsByClassName('shop-item-naziv')[0].innerText
            var price = shopItem.getElementsByClassName('shop-item-cijena')[0].innerText
     //       let quantity=shopItem.getElementsByClassName('item-quantity')[0].innerText
            var imageSrc = shopItem.getElementsByClassName('shop-item-slika')[0].src
            addItemToCart(title, price, imageSrc)
        })
    }
})();

function addItemToCart(title, price, imageSrc) {
    

     var cartRow = document.createElement('article');
    cartRow.classList.add('minicart-sadrzaj');
    var cartItems = document.getElementsByClassName('minicart')[0];
    var cartItemNames = cartItems.getElementsByClassName('cart-item-naziv');
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert('This item is already added to the cart')
            return
        }
    }
    var cartRowContents = `
            <img class="slika-cvarci" src="${imageSrc}" alt="Slika kupljenog artikla" aria-label="Artikl za kupiti" loading="lazy">
            <div class="kupljeni-cvarci-info">
                <h3 class="naziv-kupljenog-artikla">${title}</h3>
                <p class="paragraf-cijena">Cijena: <span class="cijena-kupljenog-artikla">${price}</span></p>
                <p class="paragraf-kolicina">Količina: <span class="kolicina-kupljenog-artikla">1</span></p>
            </div>
            <img class="brisanje-artikla"  src="images/button-delete.png" alt="Izbrisi artikl">

    `;
    cartRow.innerHTML = cartRowContents;
    cartItems.append(cartRow);
    cartRow.getElementsByClassName('brisanje-artikla')[0].addEventListener('click', removeClicked);

   /* function showTotals(){

        const total =[];
        const items=document.querySelectorAll(".paragraf-cijena");
        items.forEach(function(item){
            total.push(parseFloat(item.textContent));
        });
    
        //const totalMoney = total.reduce(function(total,item){
          //  total += item;
            //return total;
        //}, 0);
        //const finalMoney=totalMoney.toFixed(2);
        //document.getElementById("cart-total").textContent=finalMoney;
        //document.querySelector(".item-total").textContent=finalMoney;
        document.getElementById("količina").textContent=total.length;
    }*/
}





function totalCost(event){
    let quantity = event.target
    quantity_parent = quantity.parentElement.parentElement
    price_field = quantity_parent.getElementsByClassName('item-price')[0]
    total_field = quantity_parent.getElementsByClassName('total-price')[0]
    price_field_content = price_field.innerText.replace('$', '')
    total_field.children[0].innerText = '$' +  quantity.value * price_field_content
    grandTotal()
    if(isNaN(quantity.value)|| quantity.value <= 0){
        quantity.value = 1
    }
}
