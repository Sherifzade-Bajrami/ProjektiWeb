const createFooter = () => {
    let footer = document.querySelector('footer');

    footer.innerHTML = `
    <div class="footer-content">
    <img src="./image/logo1.png" class="logo1" alt="">
    <div class="footer-ul-container">
        <ul class="category">
            <li class="category-title">Men</li>
            <li><a href="T-Shirts.php" class="footer-link">T-Shirts</a></li>
                <li><a href="#"class= "footer-link">Shirts</a></li>
                <li><a href="Jeans.php" class="footer-link">Jeans</a></li>
                <li><a href="#" class="footer-link">Jacket</a></li>
                <li><a href="#" class="footer-link">Coat</a></li>
                <li><a href="#" class="footer-link">Shoes</a></li>

        </ul>
        <ul class="category">
            <li class="category-title">Women</li>
               <li><a href="#" class="footer-link">T-Shirts</a></li>
                <li><a href="#"class= "footer-link">Shirts</a></li>
                <li><a href="#" class="footer-link">Jeans</a></li>
                <li><a href="#" class="footer-link">Jacket</a></li>
                <li><a href="#" class="footer-link">Coat</a></li>
                <li><a href="#" class="footer-link">Shoes</a></li>
                <li><a href="#" class="footer-link">Bag</a></li>

        </ul>
    </div>
   
   </div>
   <p class="footer-title">About Us</p>
   <p class="info">Profound është një nga kompanitë më të mëdha ndërkombëtare të modës dhe i përket Inditex,
       një nga grupet më të mëdha të shpërndarjes në botë. Klienti është në qendër të modelit tonë unik 
       të biznesit, i cili përfshin dizajnin, prodhimin, shpërndarjen dhe shitjet, përmes rrjetit tonë të gjerë
       të shitjes. Profound ka një përkushtim të vazhdueshëm ndaj klientëve të saj në mbarë botën për të ofruar
       një përvojë të shkëlqyer klienti për të gjithë. Si pjesë e këtyre përpjekjeve, ne jemi të përkushtuar
       të ofrojmë një faqe interneti që është e aksesueshme për audiencën më të gjerë të mundshme, pavarësisht
       nga teknologjia apo aftësia.</p>
       <p class="info">support email - profound.clothing@gmail.com</p>
         <p class="info"> telephone - 180 00 00 001</p>
         <div class="social-media">
             <a href="#" class="social-link">Facebook</a>
             <a href="#" class="social-link">Instagram</a>
         </div>
     `
    ;
}

createFooter();