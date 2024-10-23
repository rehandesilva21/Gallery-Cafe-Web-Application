const price = document.getElementById("price").innerHTML;
function openNav() {
    document.getElementById("profile").style.display = "block";
    document.getElementById("black").style.display = "block";

  }
  
  function closeNav() {
    document.getElementById("profile").style.display ="none";
    document.getElementById("black").style.display = "none";
   
  }
  function openNav1() {
    document.getElementById("cart").style.width = "1405px";
  }
  function closeCart() {
    document.getElementById("cart").style.width = "0";
  }
  
  
  function closeNav1() {
   
    document.getElementById("explore").style.width = "0";
    document.getElementById("favorite").style.width = "0";
    document.getElementById("cart").style.width = "0";
    document.getElementById("orders-container").style.width = "0";
    document.getElementById("search-results").style.width = "0";

    
  }
  function openExplore() {
    document.getElementById("explore").style.width = "100%";
    document.getElementById("favorite").style.width = "0";
    document.getElementById("orders-container").style.width = "0";
    document.getElementById("search-results").style.width = "0";
  }
  function openFav() {
    document.getElementById("favorite").style.width = "1405px";
    document.getElementById("orders-container").style.width = "0";
    document.getElementById("explore").style.width = "0";
    document.getElementById("search-results").style.width = "0";

  }

  function closeAll(){
    document.getElementById("explore").style.width = "0";
    document.getElementById("favorite").style.width = "0";
    document.getElementById("orders-container").style.width = "0";
    document.getElementById("search-results").style.width = "0";
   
  }
  function openoders(){
    document.getElementById("explore").style.width = "0";
    document.getElementById("favorite").style.width = "0";
    document.getElementById("orders-container").style.width = "1405px";
    document.getElementById("search-results").style.width = "0";

   





  }
  function openFilter() {
    document.getElementById("filter").style.width = "250px";

  }
  function closeFilter() {
    document.getElementById("filter").style.width = "0px";

  }
  document.getElementById('userInput').addEventListener('input', function() {
    const labelValue = parseInt(document.getElementById('price').textContent);
    const userInput = parseInt(this.value);
    

    if (!isNaN(userInput)) {
        
        const result = price * userInput;
        console.log(price);
        document.getElementById('price').textContent =  result;
    } else {
        document.getElementById('price').textContent = price;
    }
});
function openorder() {
  document.getElementById("filter1").style.display  = "block";
  document.getElementById("blackcont").style.display  = "block";
  
}
function closeorder() {
  document.getElementById("filter1").style.display  = "none";
  document.getElementById("blackcont").style.display  = "none";
  

}
function addtocart() {
  const button = document.getElementById('addcart');
            button.innerHTML = 'Added';
}





const button = document.getElementById('fav');
var button1 = true;

function fav(){
    if (button1){
      button.innerHTML = '<i class="fa-solid fa-heart"></i>';
      button1 =false;
    } else{
      button.innerHTML = '<i class="fa-regular fa-heart" ></i>';
      button1 =true;
    }
    
}

function addtocart() {
  const button = document.getElementById('addcart');
  const button1 = document.getElementById('badge1');
  var count = 1;

            button.innerHTML = 'Added';
            button1.innerHTML = count++;
}

var btncontainer = document.getElementById('sidenav');
var btns = document.getElementsByClassName('btn');

for (var i =0; i<btns.length;i++){
    btns [i].addEventListener('click',function(){
        var current = document.getElementsByClassName('active');
        current[0].className = current[0].className.replace (' active');
        this.className += ' active';
    })
}
function openSearch(){
  document.getElementById('search-results').style.display='block';
}