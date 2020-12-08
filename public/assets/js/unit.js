let cart = {

} 

let favorite = {

} 

/*
document.click = event => {

    if (event.target.classlist.contains('plus'))
        plusFunction(event.target.dataset.id);
    if (event.target.classlist.contains('minus'))
        minusFunction(event.target.dataset.id);  
    
    console.log(event.target.dataset.id);
}
*/

const plusFunction = (id,title, price) =>{
    if(typeof cart[id] === 'undefined') {
        addFunction(id, title, price);
        return true;
    }

    let count = $("div#cartgoodcount").text();
    cart[id]['count'] = Number(cart[id]['count'])+Number(count);

    saveCartToLocalStorage();
    maincart();
}

const minusFunction = (id) =>{
    if ( cart[id]['count']-1 == 0){
        deleteFunction(id);
        return true;
    }

    cart[id]['count']--;
    saveCartToLocalStorage();
    maincart();
}

const addFunction = (id, title, price) =>{

    let count = $("div#cartgoodcount").text();

    cart[id] =  { 
                    "name": title,
                    "price": price,
                    "count":count
                }


    //$("#addtocart").removeClass("enabledAddToCardButton");
//    $("#addtocart").addClass("disabledAddToCardButton");

   saveCartToLocalStorage();
   maincart();
}

const deleteFunction = (id) =>{
    delete cart[id];
    saveCartToLocalStorage();
    maincart();
}

function deleteAllFunction(){
    for (let key in cart)
        delete cart[key];
    saveCartToLocalStorage();
    maincart();
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
        $('#cartlength').text(Object.keys(cart).length);
    }
}



const saveCartToLocalStorage = () => {
    localStorage.setItem('cart', JSON.stringify(cart));
    $('#cartlength').text(Object.keys(cart).length);
}
