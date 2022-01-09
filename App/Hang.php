<!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title> Amazon</title>
       <link rel="stylesheet" href="../css/home.css">
       <link rel="shortcut icon" href="../images/logo-favicon.png">

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   </head>
   <body class="my-body">
       <!-- HEADER -->
             <div class="header d-flex">
                    <div class="header-left d-flex">
                         <img src="../images/logo.png" alt="">
                            <div class="texth9">
                              <img src="../images/outline_location_on_white_24dp.png" alt="">
                              <div class="deliver">
                                 <h9>Deliver to</h9>
                                 <h10>Vietnam</h10>
                               </div>
                            </div>   
                    </div>
                    <div class="header-middle">
                          <div class="box-mix d-flex">
                               <button>All<i class="fas fa-caret-down"></i></button>
                               <input type="text">
                               <div class="btn-search">
                                  <button><i class="fas fa-search"></i></button>
                               </div>
                          </div>
                    </div>
                    <div class="header-right d-flex">
                           <div class="logo-american d-flex">
                              <img src="../images/logo2.png" alt="">
                              <button><i class="fas fa-caret-down"></i></button>
                           </div>
                           <div class="signin">
                              <h9>Hello, <?php echo $_SESSION['name']; ?></h9>
                              <div class="text-account d-flex">
                                 <h10>Account & Lists</h10>
                                 <button onclick="menuToggle();"><i class="fas fa-caret-down"></i></button>
                              </div>
                           </div>
                           <div class="order">
                              <h9>Returns</h9>
                              <h10>& Orders</h10>
                           </div>
                           <div class="cart d-flex">
                              <i class="fas fa-baby-carriage"></i>
                              <h10>Cart</h10>
                           </div>
                    </div>
             </div>
   
    <!-- HEADER -->
   
   
   <!-- HEADER DOWN -->
             <div class="header-down w-100 d-flex">
                   <div class="menu-icon d-flex">
                     <button><i class="fas fa-bars"></i></button>
                     <h10>All</h10>
                   </div>
                   <div class="menu-icon" style="width:10%;">
                       <h10>Today's Deals</h10>
                   </div>
                   <div class="menu-icon" style="width:12%;">
                     <h10>Customer Service</h10>
                   </div>
                   <div class="menu-icon" style="width:6%;">
                      <h10>Registry</h10>
                   </div>
                   <div class="menu-icon" style="width:8%;">
                     <h10>Gift Cards</h10>
                   </div>
                   <div class="menu-icon" style="width:4%;">
                     <h10>Sell</h10>
                   </div>
                   <div class="menu-icon" style="width:15%;margin-left: 35rem;">
                      <h10>New Years,new deals</h10>
                   </div>
             </div>
            <!--CONTAINER-->
             <div class="container">
              <div class="oders">
               <ul style="text-align: center; width: 46px;">
                  <li><a href="">Orders</a></li>
                  <li><a href="">address</a></li>
                  <li><a href="">Cancelled Orders</a></li>
                  
               </ul>
            </div>
             </div>