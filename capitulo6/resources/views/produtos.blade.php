<!doctype html>
<html lang="pt">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0,
         maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>::: Loja Laravel :::</title>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <style>
         .btn-product {
         width: 100%;
         }
      </style>
   </head>
   <body>
      <form method="post" id="produtos" action="/comprarproduto">
         {{ csrf_field() }}
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="col-sm-12">
                     <h1>
                        <span style="color: #f4645f;">
                           <svg version="1.1"
                              xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                              x="0px" y="0px" width="84.1px" height="57.6px"
                              viewBox="0 0 84.1 57.6" enable-background="new 0 0 84.1 57.6"
                              xml:space="preserve">
                              <defs></defs>
                              <path fill="#FB503B" d="M83.8,26.9c-0.6-0.6-8.3-10.3-9.6-11.9c-1.4-1.6-2-1.3-2.9-
                                 1.2s-10.6,1.8-11.7,1.9c-1.1,0.2-1.8,0.6-1.1,1.6
                                 c0.6,0.9,7,9.9,8.4,12l-25.5,6.1L21.2,1.5c-0.8-1.2-1-1.6-2.8-1.5C16.6,0.1,2.5,1.3
                                 ,1.5,1.3c-1,0.1-2.1,0.5-1.1,2.9
                                 c1,2.4,17,36.8,17.4,37.8c0.4,1,1.6,2.6,4.3,2c2.8-0.7,12.4-3.2,17.7-4.6c2.8,5,8.4
                                 ,15.2,9.5,16.7c1.4,2,2.4,1.6,4.5,1
                                 c1.7-0.5,26.2-9.3,27.3-9.8c1.1-0.5,1.8-0.8,1-1.9c-0.6-0.8-7-9.5-10.4-14c2.3-
                                 0.6,10.6-2.8,11.5-3.1C84.2,28,84.4,27.5,83.8,26.9z
                                 M37.5,36.4c-0.3,0.1-14.6,3.5-15.3,3.7c-0.8,0.2-0.8,0.1-0.8-0.2C21.2,39.6,4.4,4.
                                 8,4.1,4.4c-0.2-0.4-0.2-0.8,0-0.8
                                 c0.2,0,13.5-1.2,13.9-1.2c0.5,0,0.4,0.1,0.6,0.4c0,0,18.7,32.3,19,32.8C38,36.1,37.
                                 8,36.3,37.5,36.4z M77.7,43.9
                                 c0.2,0.4,0.5,0.6-0.3,0.8c-0.7,0.3-24.1,8.2-24.6,8.4c-0.5,0.2-0.8,0.3-1.4-0.6s-
                                 8.2-14-8.2-14L68.1,32c0.6-0.2,0.8-0.3,1.2,0.3
                                 C69.7,33,77.5,43.6,77.7,43.9z M79.3,26.3c-0.6,0.1-9.7,2.4-9.7,2.4l-7.5-10.2c-
                                 0.2-0.3-0.4-0.6,0.1-0.7c0.5-0.1,9-1.6,9.4-1.7
                                 c0.4-0.1,0.7-0.2,1.2,0.5c0.5,0.6,6.9,8.8,7.2,9.1C80.3,26,79.9,26.2,79.3,26.
                                 3z"></path>
                           </svg>
                           Loja Laravel 
                        </span>
                        de Mouse para Gamers
                     </h1>
                     <br/>
                  </div>
                  <div class="col-sm-6 col-md-4">
                     <div class="thumbnail">
                        <h4 class="text-center"><span class="label label-info">Laravel 1</span></h4>
                        <img src="http://assets.razerzone.com/eeimages/products/13785/razer-naga-2014-right-03.png" class="img-responsive">
                        <div class="caption">
                           <div class="row">
                              <div class="col-md-6 col-xs-6">
                                 <h3>Game 1</h3>
                              </div>
                              <div class="col-md-6 col-xs-6 price">
                                 <h3>
                                    <label style="color: #f4645f;">R$ 649,99</label>
                                 </h3>
                              </div>
                           </div>
                           <p>Melhor mouse para Game Laravel 1 - <strong>8GB</strong></p>
                           <p>
                           <label style="color: #f4645f;">Quantidade:</label>
                           <input type="number" name="quantidade[]" value="0" />
                           </p>
                           <div class="row">
                              <div class="col-md-6">
                                 <a class="btn btn-primary btn-product"><span
                                    class="glyphicon glyphicon-thumbs-
                                    up"></span> Like</a>
                              </div>
                              <div class="col-md-6">
                                 <a href="#" onClick="document.
                                    getElementById('produtos').submit();" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Comprar</a>
                              </div>
                           </div>
                           <p></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                     <div class="thumbnail">
                        <h4 class="text-center"><span class="label label-info">Laravel 2</span></h4>
                        <img src="http://assets.razerzone.com/eeimages/products/13785/razer-naga-2014-right-03.png" class="img-responsive">
                        <div class="caption">
                           <div class="row">
                              <div class="col-md-6 col-xs-6">
                                 <h3>Game 2</h3>
                              </div>
                              <div class="col-md-6 col-xs-6 price">
                                 <h3>
                                    <label style="color: #f4645f;">R$ 749,99</label>
                                 </h3>
                              </div>
                           </div>
                           <p>Melhor mouse para Game Laravel 2 - <strong>16GB</strong> </p>
                           <p>
                           <label style="color: #f4645f;">Quantidade:</label>
                           <input type="number" name="quantidade[]" value="0" />
                           </p>
                           <div class="row">
                              <div class="col-md-6">
                                 <a class="btn btn-primary btn-product">
                                    <span class="glyphicon glyphicon-thumbs-up"></span> Like
                                 </a>
                              </div>
                              <div class="col-md-6">
                                 <a href="#" onClick="document.getElementById('produtos').submit();" class="btn btn-success btn-product">
                                 <span class="glyphicon glyphicon-shopping-cart"></span> Comprar</a>
                              </div>
                           </div>
                           <p></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                     <div class="thumbnail">
                        <h4 class="text-center"><span class="label label-
                           info">Laravel 3</span></h4>
                        <img src="http://assets.razerzone.com/eeimages/products/13785/razer-naga-2014-right-03.png" class="img-responsive">
                        <div class="caption">
                           <div class="row">
                              <div class="col-md-6 col-xs-6">
                                 <h3>Game 3</h3>
                              </div>
                              <div class="col-md-6 col-xs-6 price">
                                 <h3>
                                    <label style="color: #f4645f;">R$ 749,00</label>
                                 </h3>
                              </div>
                           </div>
                           <p>Melhor mouse para Game Laravel 3 - <strong>32GB</strong> </p>
                           <p>
                           <label style="color: #f4645f;">Quantidade:</label>
                           <input type="number" name="quantidade[]" value="0" />
                           </p>
                           <div class="row">
                              <div class="col-md-6">
                                 <a class="btn btn-primary btn-product"><span class="glyphicon glyphicon-thumbs-up"></span> Like</a>
                              </div>
                              <div class="col-md-6">
                                 <a href="#" onClick="document.getElementById('produtos').submit();" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Comprar
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </form>