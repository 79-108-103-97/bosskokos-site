<?php
return array(
    'catalog/category/([0-9]+)/page-([0-9]+)'      =>'catalog/category/$1/$2',           //actionCategory CatalogController ([a-z]+)
    'catalog/category/([0-9]+)'                    =>'catalog/category/$1',              //actionCategory CatalogController
    'catalog/page-([0-9]+)'                        =>'catalog/index/$1',                 //actionIndex CatalogController
    'catalog'                                      =>'catalog/index',                    //actionIndex CatalogController

    'promotions'                                   =>'promotions/index',                 //actionIndex PromotionsController

    'delivery'                                     =>'delivery/index',                   //actionIndex DeliveryController

    'reviews'                                      =>'reviews/index',                    //actionIndex ReviewsController

    'about-us'                                     =>'aboutUs/index',                    //actionIndex AboutUsController

    'basket/delete_one/([0-9]+)'                   =>'basket/deleteOne/$1',              //actionDeleteOne BasketController
    'basket/delete/([0-9]+)'                       =>'basket/delete/$1',                 //actionDelete BasketController
    'basket/add/([0-9]+)'                          =>'basket/add/$1',                    //actionAdd BasketController

    'basket/addCountProductAjax/([0-9]+)/([0-9]+)' =>'basket/addCountProductAjax/$1/$2', //actionAddCountProductAjax BasketController
    'basket/countAjax/'                            =>'basket/countAjax/',                //actionCountAjax BasketController
    'basket/totalPriceAjax/'                       =>'basket/totalPriceAjax/',           //actionTotalPriceAjax BasketController
    'basket/deleteOneAjax/([0-9]+)'                =>'basket/deleteOneAjax/$1',          //actionDeleteOneAjax BasketController
    'basket/addOneAjax/([0-9]+)'                   =>'basket/addOneAjax/$1',             //actionAddOneAjax BasketController
    'basket/addAjax/([0-9]+)'                      =>'basket/addAjax/$1',                //actionAddAjax BasketController
    'basket/checkout'                              =>'basket/checkOut',
    'basket'                                       =>'basket/index',                     //actionIndex BasketController


    'admin/login'                                  =>'admin/login',                      //actionLogin AdminController
    'admin/settings'                               =>'admin/settings',                   //actionSettings AdminController
    'admin/logout'                                 =>'admin/logout',                     //actionLogout AdminController
    'admin/category/change/([0-9]+)'               =>'admin/categoryChange/$1',          //
    'admin/category/delete/([0-9]+)'               =>'admin/categoryDelete/$1',          //
    'admin/category/add'                           =>'admin/categoryAdd',                //
    'admin/category'                               =>'admin/category',
    'admin/product/change/([0-9]+)'                =>'admin/productChange/$1',          //
    'admin/product/delete/([0-9]+)'                =>'admin/productDelete/$1',          //
    'admin/product/add'                            =>'admin/productAdd',                //
    'admin/product'                                =>'admin/product',
    'admin'                                        =>'admin/index',                      //actionIndex AdminController

    ''                                             =>'home/index',                       //actionIndex HomeController
);