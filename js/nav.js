const createNav = () =>{
    let nav = document.querySelector('.navbar');
    nav.innerHTML=`
    <div id=div1>
      <img src="./image/brandlogo.png" class="logo" alt="">
       <nav class="nav-list">
          <ul id="menu">
          <li class="li-menu"><a href="Profound.php" class="link">Home</a></li>
          <li class="li-menu"><a href="Women.php" class="link">Women</a></li>
          <li class="li-menu"> <a href="Man.php" class="link">Man</a></li>
          <li class="li-menu"><a href=" javascript:pageScroll()" class="link">About</a></li>
          <li class="li-menu"><a href="ContactUs.php" class="link">Contact</a></li>
             
             </ul>
      </nav>
      <a href="Login.php"><img src="./icons/user.png" alt=""  class="user"></a>
      <a href="ShoppingBag.php"><img src="./icons/bag.png" alt=""  class="bag"></a>
  


    </div>
    `;
}
createNav();
function pageScroll(){
  window.scrollTo(0,document.body.scrollHeight);
}


