<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


    <link href="/css/simple_Cart.css" rel="stylesheet">
    <script src="jquery.smartCart.min.js"></script>

    <title>Orçamento</title>

    <style>

@font-face {
    font-family: 'GilroyRegular';
    src: url('/fonts/Gilroy-Regular.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'GilroyLight';
    src: url('/fonts/Gilroy-Light.ttf') format('opentype');
    font-weight: normal;
    font-style: normal;
}


@font-face {
    font-family: 'GilroyBold';
    src: url('/fonts/Gilroy-ExtraBold.otf') format('opentype');
    font-weight: normal;
    font-style: normal;
}

:root {

    --blueeagles: #075aa8;
    --darkblueeagles: #002858;
    --lightblue: #365d9e;
    --darkblue: #002858;
    --extralightblue: rgb(44, 85, 172);
    
}

/* ⠀⠀⠀⢀⣠⣤⣶⣶⣶⣶⣤⣄⡀
⠀⠀⠀⣠⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣶⡀
⠀⠀⣼⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⠀⣴⡟⠋⠉⠛⠉⠁⠀⠀⠈⠙⢿⣿⣿⡿⠏
⠀⠹⡇⠐⠒⠛⣷⠀⠀⣾⢛⣛⢓⣻⠏
⠰⠂⠃⠈⠈⠁⠀⠀⠀⠀⠘⠓⠉⢸⣶
⠀⠀⠀⠀⠀⠀⠠⠤⣤⠦⠀⠀⠀⠘⠉
⠀⠀⠀⠀⠀⠤⠤⠤⠤⠤⠤⣤⣾
⠀⠀⠀⠀⠀⠀⠀⠒⠛⠓⣲⣿⡇
⠀⠀⠀⠀⠀⠹⣿⣶⣶⣾⣿⠿
*/


        * {

            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Gilroy;
        }

        body {

            background-image: url(images/Background.png);
            background-repeat: no-repeat;
            background-size: cover;

        }

        header {

            width: 100%;
            height: 640px;
        }

        

        .container {

            max-width: 1680px;
            margin: 0 auto;
            width: 100%;
            
        }

        .nav-logo {

            display: flex;
        }

       

        .logo {

            padding: 21px 0 10px 0px;
            display: flex;
            width: 100%;
        }

        .nav-btn {

            display: flex;
            width: 620px;
        }

        ul {

            width: 100%;
            display: flex;
            padding: 25px 0 10px 0px;

        }

        .text {

            text-decoration: none;
            list-style: none;
            margin-left: 20px;
            color: white;
            font-size: 20px;
            width: 100%;
            font-weight: 600;
            border:  rgb(88, 118, 133) 1px;
            padding: 5px;
            border-radius: 5px;
            transition: transform;
            font-family: GilroyBold;


        }

        nav a {

            margin-left: 10px;
        }

       

        nav img {

            width: 22px;
            
        }

        .ytb {

            position: relative;
            top: 3px;
        }

        .face {

            position: relative;
            left: 5px;
        }

        li {

            list-style: none;
            transition: transform 0.5s;

            
        }

        li:hover {

            position: relative;
            top: 2px;

            
        }

        .CTA {

            width: 100%;
            margin-left: 100px;
            margin-top: 180px;
            display: flex;
            flex-wrap: wrap;

        }

        .input-btn {

            display: initial;
            width: 60%;
        }

        .input-btn input {

            width: 400px;
            height: 50px;
            margin-top: 5px;
            margin-bottom: 5px;
            border-radius: 5px;
            border: none;
            font-size: 20px;
            padding: 20px;
            outline: none;
            font-family: Gilroy;
            font-weight: bold;
            color: var(--lightblue);
            
        }

        

        .input-btn input::placeholder {

            font-size: 20px;
        }

        .input-btn button {

            text-decoration: none;
            position: relative;
            bottom: 2px;
            color: white;
            transition: all 800ms cubic-bezier(0.87, 1, .275, 2);
            width: 250px;
            height: 40px;
            border-radius: 5px;
            border: none;
            text-decoration: none;
            padding: 10px;
            font-size: 15px;
            background-color: var(--darkblueeagles);
            margin-left: 5px;
            font-weight: 600;


        }

  
 

        

        .input-btn button:hover {

            background-color:  var(--lightblue);
            color: white;
            cursor: pointer;



        }

        .input-btn h1 {

            color: white;
            font-size: 60px;
            width: 500px;
            font-family: GilroyBold;
        }

        .input-btn h3 {
            
            position: relative;
            left: 10px;
            margin-top: 5px;
            color: white;
            font-size: 20px;
            font-family: Gilroy;
        }

        .mockup-image {

            position: relative;
            bottom: 120px;
            right: 210px;
            
        }

        .mockup-image img {

            width: 650px;
            
            
        }

        section {
max-width: 1860px;
border-radius: 10px;
height: 1100px;
width: 100%;
margin: 0 auto;
position: relative;
bottom: 30px;
background-color: #fafafa;

}

         section h2 {

            text-align: center;
            font-family: GilroyBold;
            color: var(--blueeagles);
            font-size: 27px;
            padding-top: 12px;
         }

         section p {

            text-align: center;
            margin-top: 5px;
            font-size: 22px;
            color: var(--lightblue);
            font-family: GilroyRegular;
         }

         .hidden {

            color: white;
         }

         

         

         .cards-produtos {

            max-width: 1800px;
            width: 1800px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            margin-top: 30px;
            margin-left: 28px;
            float: left;
            align-items: center;
            justify-content: center;
         }

         .card-single {

            padding: 20px;
            text-align: center;
            color: white;
            height: 385px;
            border-radius: 10px;
            box-shadow: var(--darkblue) 3px 3px 3px 3px;
            width: 15%;
            background-color: var(--lightblue);
            margin: 5px;
            transition: all 500ms linear;
            

         }

         .card-single p {

            position: relative;
            bottom: 10px;
            width: 100%;
            


         }

         .card-single h4 {


            font-size: 20px;
            text-align: center;

         }

         .card-single h6 {

            font-size: 22px;
            color: #e0e0e0;
            font-family: Gilroy;
            font-weight: normal;
            position: relative;
            top: 15px;

         }

         .card-single img {

            width: 50px;
            position: relative;
            margin-top: 10px;
            margin-bottom: 15px;
            
         }

         .card-single button {

            background-color: rgb(35, 212, 35);
            color: white;
            font-weight: bold;
            font-family: GilroyBold;
            width: 100px;
            padding: 5px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            position: relative;
            top: 20px;
         }

         .card-single button:hover {

            background-color: rgb(22, 139, 22);

         }

       

         .card-single:hover {

            background-color: var(--darkblueeagles);

            
         }

         input[type="number"] {

            width: 45px;
            position: relative;
            outline: none;
            border-radius: 5px;
            height: 25px;
            text-align: right;
            top: 20px;
            margin-left: 10px;
            font-size: 15px;
         }

         .cart {

            width: 30px;
         }


         .cart {

            position: relative;
            list-style: none;

         }

         .cart1 {

            width: 28px;
         }

         nav {

top: 0;
right: 0;
left: 0;
display: flex;
width: 470px;
}




nav li span {

padding-left: 38px;
bottom: 15px;
}

li a {

padding: 5px;
text-decoration: none;;
}



.cart a {

color: white;
cursor: pointer;
text-decoration: none;
}
         


    </style>
</head>
<body>
    <header>
        <div class="container">

            <div class="nav-logo">
            <div class="logo">
                <img src="https://static.wixstatic.com/media/0c951b_93a6980f1e2a4767a5c11a7dd72fb7b3~mv2.png/v1/fill/w_177,h_59,al_c,q_85,usm_0.66_1.00_0.01/Logo%20branco_Prancheta%201%20(1).webp" alt="">

            </div>

            <div class="nav-btn">

                <nav>
                    <ul>
                        <li><a href="#"><img class="face" src="images/facebook-logo.png" alt=""></a></li>
                        <li><a href="#"><img src="images/instagram (1).png" alt=""></a></li>
                        <li><a href="#"><img src="images/linkedin.png" alt=""></a></li>
                        <li><a href="#"><img class="ytb" src="images/youtube (2).png" alt=""></a></li>
                        <li><a class="text" href="#">INICIO</li></a>
                        <li><a class="text" href="#">FALE CONOSCO</li></a>
                        <li class="cart"><a href="#"><img class="cart1" src="images/shopping-cart.png" alt=""><span>0</span></a></li>
                        

                    </ul>
                </nav>

            </div>
        </div>

            <div class="CTA">
                <div class="input-btn from-left">
                    <h1>Digital Customer Experience</h1>
                    <input type="email" placeholder="Email">
                     <a href=""><button type="submit" onclick="cart()">FAÇA SUA COTAÇÃO</button></a>
                        <h3>Entraremos em Contato</h3>
                        <li class="totalCost"><span>0</span></li>



                </div>

                <div class="mockup-image" id="mockup-animation" style="display:none;">
                    <img src="images/mockupeagles.png" alt="">
                </div>
            </div>
        </div>
    </header>

    <section>

    <div class="products-section">

        <div class="cta-first">
       <h2>SELECIONE SEUS PRODUTOS</h2>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis unde nesciunt sunt consequatur ex esse, laudantium doloremque sit aperiam.</p>
    </div>

    </div>

    <div class="cards-produtos" id="mockup-animation">
        <div class="card-single">
            <div class="sc-product-item">
            <h4 data-name="product_name">Card</h4>
            <img data-name="product_image" src="images/image.png" alt="">
            <p class="hidden" data-name="product_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, soluta? Soluta perferendis nam deserunt</p>
            <h6>R$ 129.68</h6>
            <div>
                <div class="form-group2">
                  <input class="sc-cart-item-qty" name="product_quantity" min="1" value="1" type="number">
                </div>
                <strong class="price pull-left"></strong>
                <input name="product_price" value="129.68" type="hidden" />
                <input name="product_id" value="10" type="hidden" />
                <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Adicionar</button>
              </div>
        </div>
    </div>
       
        
            <div class="card-single">
                <div class="sc-product-item">
                <h4 data-name="product_name">Vídeo</h4>
                <img data-name="product_image" src="images/video.png" alt="">
                <p class="hidden" data-name="product_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, soluta? Soluta perferendis nam deserunt</p>
                <h6>R$ 129.68</h6>
                <div>
                    <div class="form-group2">
                      <input class="sc-cart-item-qty" name="product_quantity" min="1" value="1" type="number">
                    </div>
                    <strong class="price pull-left"></strong>
                    <input name="product_price" value="129.68" type="hidden" />
                    <input name="product_id" value="10" type="hidden" />
                    <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Adicionar</button>
                  </div>
            </div>
        </div>
        <div class="card-single">
            <div class="sc-product-item">
            <h4 data-name="product_name">Redes Sociais</h4>
            <img data-name="product_image" src="images/marketing-de-midia-social.png" alt="">
            <p class="hidden" data-name="product_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, soluta? Soluta perferendis nam deserunt</p>
            <h6>R$ 129.68</h6>
            <div>
                <div class="form-group2">
                  <input class="sc-cart-item-qty" name="product_quantity" min="1" value="1" type="number">
                </div>
                <strong class="price pull-left"></strong>
                <input name="product_price" value="129.68" type="hidden" />
                <input name="product_id" value="10" type="hidden" />
                <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Adicionar</button>
              </div>
        </div>
    </div>
        <div class="card-single">
            <div class="sc-product-item">
            <h4 data-name="product_name">E-mail Marketing</h4>
            <img data-name="product_image" src="images/marketing-de-email.png" alt="">
            <p class="hidden" data-name="product_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, soluta? Soluta perferendis nam deserunt</p>
            <h6>R$ 129.68</h6>
            <div>
                <div class="form-group2">
                  <input class="sc-cart-item-qty" name="product_quantity" min="1" value="1" type="number">
                </div>
                <strong class="price pull-left"></strong>
                <input name="product_price" value="129.68" type="hidden" />
                <input name="product_id" value="10" type="hidden" />
                <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Adicionar</button>
              </div>
        </div>
    </div>
        <div class="card-single">
            <div class="sc-product-item">
            <h4 data-name="product_name">Site</h4>
            <img data-name="product_image" src="images/mapa-do-site.png" alt="">
            <p class="hidden" data-name="product_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, soluta? Soluta perferendis nam deserunt</p>
            <h6>R$ 129.68</h6>
            <div>
                <div class="form-group2">
                  <input class="sc-cart-item-qty" name="product_quantity" min="1" value="1" type="number">
                </div>
                <strong class="price pull-left"></strong>
                <input name="product_price" value="129.68" type="hidden" />
                <input name="product_id" value="10" type="hidden" />
                <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Adicionar</button>
              </div>
        </div>
    </div>
        <div class="card-single">
            <div class="sc-product-item">
            <h4 data-name="product_name">Ads</h4>
            <img data-name="product_image" src="images/midia-social.png" alt="">
            <p class="hidden" data-name="product_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, soluta? Soluta perferendis nam deserunt</p>
            <h6>R$ 129.68</h6>
            <div>
                <div class="form-group2">
                  <input class="sc-cart-item-qty" name="product_quantity" min="1" value="1" type="number">
                </div>
                <strong class="price pull-left"></strong>
                <input name="product_price" value="129.68" type="hidden" />
                <input name="product_id" value="10" type="hidden" />
                <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Adicionar</button>
              </div>
        </div>
    </div>

        </div>

        <aside class="col-md-5"> 
            <!-- Paypal Submit URL : https://www.paypal.com/cgi-bin/webscr --> 
            <!-- Paypal Sandbox Submit URL: https://www.sandbox.paypal.com/cgi-bin/webscr --> 
            
            <!-- Paypal Cart submit form -->
            <form action="https://www.paypal.com/cgi-bin/webscr" method="POST">
              <!-- SmartCart element -->
              <div id="smartcart"></div>
              
              <!-- Paypal required info, Please update based on your details -->
              <input name="business" value="dipumedayil@gmail.com" type="hidden">
              <input name="currency_code" value="USD" type="hidden">
              <input name="return" value="http://www.yourdomain.com/yoursuccessurl" type="hidden">
              <input name="cancel_return" value="http://www.yourdomain.com/yourcancelurl" type="hidden">
              <input name="cmd" value="_cart" type="hidden">
              <input name="upload" value="1" type="hidden">
            </form>
          </aside>

          <form class="contact-form" action="contactform.php" method="POST">
              <input type="text" name="name" placeholder="Nome Completo">
              <input type="text" name="mail" placeholder="Seu E-mail">
              <input type="text" name="subject" placeholder="Subject">
              <textarea name="message" placeholder="Mensagem"></textarea>
              <button type="submit" name="submit">ENVIAR</button>
          </form>



    </div>

   
</section>

<!-- Include SmartCart -->
<script src="dist/js/jquery.smartCart.min.js" type="text/javascript"></script>

<script src="js/bootstrap.bundle.min.js"></script>
    
  
    <script>





        $('#smartcart').smartCart();

        
        $( document ).ready(function() {
             setTimeout(carregar, 100);
        });

        
        function carregar() {
            $('#mockup-animation').fadeIn(2000);
            $('#single-card').fadeIn(2000);

        }


        

    



        </script>
</body>
</html>