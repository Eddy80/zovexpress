let cart = {

} 

/*
document.click = event => {

    alert(4);

    if (event.target.classlist.contains('plus'))
        plusFunction(event.target.dataset.id);
    if (event.target.classlist.contains('minus'))
        minusFunction(event.target.dataset.id);
    
    
    console.log(event.target.dataset.id);

}
*/

const plusFunction = (id,title) =>{
    if(typeof cart[id] === 'undefined') {
        addFunction(id, title);
        return true;
    }

    let count = $("div#cartgoodcount").text();
    cart[id]['count'] = Number(cart[id]['count'])+Number(count);
    // renderCart(id);
    saveCartToLocalStorage();
}

const minusFunction = (id) =>{
    if ( cart[id]['count']-1 == 0){
        deleteFunction(id);
        return true;
    }

    cart[id]['count']--;
    saveCartToLocalStorage();
    //renderCart(id);
}

const addFunction = (id, title) =>{

    let count = $("div#cartgoodcount").text();

    cart[id] =  { 
                    "name": title,
                    "count":count
                }


    //$("#addtocart").removeClass("enabledAddToCardButton");
//    $("#addtocart").addClass("disabledAddToCardButton");

   // showCartPopUp();

   saveCartToLocalStorage();
}

const deleteFunction = (id) =>{
    delete cart[id];
    //renderCart(ud);
}

const renderCart = (id) =>{
    console.log(cart);
}

const incCount = (totalCount) => {

    let count = $("div#cartgoodcount").text();
   
    if (count<totalCount)
        count++;
    $("div#cartgoodcount").text(count);

}

const decCount = () => {

    let count = $("div#cartgoodcount").text();
    if (count>0)
        count--;
    $("div#cartgoodcount").text(count);

}

const loadCart = () => {
    if (localStorage.getItem('cart')) {
        cart = JSON.parse(localStorage.getItem('cart'));
       // showMiniCart();
       $('#cartlength').text(Object.keys(cart).length);
    }
}



const showMiniCart = () => {
    var out = "";
    for (var key in cart){
        out += '<button data-id="key" class="del-goods">x</button>'
        out += key = '  ---  ' +cart[key][name]+'count:'+cart[key][count]+ '<br>';
    }

    

    $('#minicart').html(out);
    $('.del-goods').on('click', delGoods);

}

const saveCartToLocalStorage = () => {
    localStorage.setItem('cart', JSON.stringify(cart));
    //console.log(Object.keys(cart).length);
    $('#cartlength').text(Object.keys(cart).length);
}

//renderCart();