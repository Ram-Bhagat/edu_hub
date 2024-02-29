<footer>
  <div class="footer_bcg">
    <div class="container">
      <div class="row padingtb50">
        <div class="col-md-3">
          <div class="footer_inner">
            <img src="images\Logo.svg" alt="">
            <address>Theodore Lowe, Ap #867-859 Sit Rd, Azusa New York</address>
            <div class="contact1">
              <a href="tel:(702) 123-1478">(702) 123-1478</a>
              <a href="mailto:info@company.com">info@company.com</a>
            </div>
            <ul class="social_icon">
              <li>
                <a href="">
                  <i class="fa-brands fa-facebook"></i>
                </a>
              </li>
              <li>
                <a href="">
                  <i class="fa-brands fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="">
                  <i class="fa-brands fa-linkedin"></i>
                </a>
              </li>
              <li>
                <a href="">
                  <i class="fa-brands fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="">
                  <i class="fa-brands fa-youtube"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer_inner">
            <h4>Company</h4>
            <ul class="links">
              <li>
                <a href="about.php">About Us</a>
              </li>
              <li>
                <a href="blog.php">Blog</a>
              </li>
              <li>
                <a href="faq.php">FAQ</a>
              </li>
              <li>
                <a href="">Instructor</a>
              </li>
              <li>
                <a href="">Become A Teacher</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer_inner">
            <h4>Categories</h4>
            <ul class="links">
              <li>
                <a href="">About Us</a>
              </li>
              <li>
                <a href="">Resource Center</a>
              </li>
              <li>
                <a href="">Careers</a>
              </li>
              <li>
                <a href="">Instructor</a>
              </li>
              <li>
                <a href="">Become A Teacher</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer_inner">
            <h4>Get in touch!</h4>
            <p>Fusce varius, dolor tempor interdum tristiquei bibendum.</p>
            <form>
              <input type="email" placeholder="Email" id="mail">
              <input type="submit" value="Subscribe" id="sub">
            </form>
          </div>
        </div>
      </div>
      <div class="footer_bottom">
        <p>© 2022 <span> edhub </span>All Rights Reserved by site </p>
        <ul class="terms">
          <li>
            <a href="">Privacy Policy</a>
          </li>
          <li>
            <a href="">Terms of Use</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<script>
  ///navbar fixed
  window.onscroll = function() {
    fixFunction()
  };

  function fixFunction() {
    if (document.documentElement.scrollTop > 50) {
      document.getElementById("nav").style.position = "fixed";
      document.getElementById("nav").style.top = "0px";
    } else {
      document.getElementById("nav").style.position = "static";
    }
  } //end
</script>
<!-----slider link-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-----slider link end-->
<!--tabs-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<!--testimonial-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
  //testimonial
  $(document).ready(function() {
    $("#testimonial-slider").owlCarousel({
      items: 3,
      itemsDesktop: [1000, 2],
      itemsDesktopSmall: [980, 1],
      itemsTablet: [768, 1],
      pagination: true,
      navigation: false,
      navigationText: ["", ""],
      autoPlay: true
    });
  });
</script>
<script>
  function getuid() {
    document.getElementById('all').id = 'pag2';
  }
</script>
<script>
  ///accordian
  $(document).ready(function() {
    $('.accordion-list > li > .answer').hide();
    $('.accordion-list > li').click(function() {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active").find(".answer").slideUp();
      } else {
        $(".accordion-list > li.active .answer").slideUp();
        $(".accordion-list > li.active").removeClass("active");
        $(this).addClass("active").find(".answer").slideDown();
      }
      return false;
    });
  });
</script>


<script>
  //cart


  let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let products = [
    {
        id: 1,
        name: 'PRODUCT NAME 1',
        image: '7-370x450.jpg',
        price: 120
    },
    {
        id: 2,
        name: 'PRODUCT NAME 2',
        image: '8-370x450.jpg',
        price: 120
    },
    {
        id: 3,
        name: 'PRODUCT NAME 3',
        image: '10-370x450.jpg',
        price: 220
    },
    {
        id: 4,
        name: 'PRODUCT NAME 4',
        image: '11-370x450.jpg',
        price: 123
    },
    {
        id: 5,
        name: 'PRODUCT NAME 5',
        image: '12-370x450.jpg',
        price: 320
    },
    {
        id: 6,
        name: 'PRODUCT NAME 6',
        image: '15-370x450.jpg',
        price: 200
    }
];
let listCards  = [];
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img id="imgo" src="images/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString()}</div>
            <button  onclick=" addToCard(${key}) ">Add To Card</button>`;
        list.appendChild(newDiv);
    })
}


initApp();
function addToCard(key){

    if(listCards[key] == null){
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
        
    }
 
    reloadCard();
}
// function store(key){
//   var imgsrc = document.getElementById("imgo").getAttribute("src");
//   var titles = document.getElementByClass("title").innerText;
//   var rate = document.getElementByClass("price").innerText;
//   alert(imgsrc);
 
//     // var merge = "source = "+imgsrc+ "title = "+titles+ "price = "+rate;
//     // document.cookie = "product1 = "+merge+; "max-age = "+60*60*24*2;

// }

function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="images/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}

</script>




</body>
</html>