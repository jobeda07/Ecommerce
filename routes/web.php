<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\authController;
use App\Http\Controllers\backend\userController;
use App\Http\Controllers\frontend\cardController;
use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\frontend\shopController;
use App\Http\Controllers\backend\SubcatController;
use App\Http\Controllers\backend\productController;
use App\Http\Controllers\backend\categoryController;
use App\Http\Controllers\backend\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


                             //frontend
Route::get('/',[homeController::class,'home'])->name('home');


                                       //shoppage

Route::get('shop-page',[shopController::class,'shop_page'])->name('shop.page');

                              //shopdetails
Route::get('shop-details',[shopController::class,'shop_details'])->name('shop.details');

                           //card
Route::get('card-page',[cardController::class,'card_page'])->name('card.page');
Route::get('checkout-page',[cardController::class,'checkout_page'])->name('checkout.page');



                      //authentication

Route::post('register',[authController::class,'register'])->name('register');
Route::post('login',[authController::class,'login'])->name('login');
Route::get('logout',[authController::class,'logout'])->name('logout');
Route::get('403',[authController::class,'four_three'])->name('403');


Route::group(['middleware'=>'admin'],function(){




                                    //backend-route
Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
                           //user
Route::get('user-create',[userController::class,'user_create'])->name('user.create');
Route::get('user-list',[userController::class,'user_list'])->name('user.list');


                               //category
Route::get('category-list',[categoryController::class,'category_list'])->name('category.list');
Route::get('category-create',[categoryController::class,'category_create'])->name('category.create');
Route::post('category-store',[categoryController::class,'category_store'])->name('category.store');
Route::get('category-editpage/{id}',[categoryController::class,'cat_edit'])->name('category.edit');
Route::put('category-update/{id}',[categoryController::class,'cat_update'])->name('category.update');
Route::get('category-delete/{id}',[categoryController::class,'cat_delete'])->name('category.delete');


                                //subcategory

Route::get('Subcategory-list',[SubcatController::class,'Subcat_list'])->name('Subcategory.list');
Route::get('Subcategory-create',[SubcatController::class,'Subcat_create'])->name('Subcat.create');
Route::post('Subcategory-store',[SubcatController::class,'Subcat_store'])->name('Subcat.store');
Route::get('Subcategory-edit/{id}',[SubcatController::class,'Subcat_edit'])->name('Subcat.edit');
Route::put('Subcategory-update/{id}',[SubcatController::class,'Subcat_update'])->name('Subcat.update');
Route::get('Subcategory-delete/{id}',[SubcatController::class,'Subcat_delete'])->name('Subcat.delete');


                          //product
 Route::get('product-list',[productController::class,'product_list'])->name('product.list');
 Route::get('product-create',[productController::class,'product_create'])->name('product.create');
 Route::post('product-store',[productController::class,'product_store'])->name('product.store');
 Route::get('product-edit/{id}',[productController::class,'product_edit'])->name('product.edit');
 Route::put('product-update/{id}',[productController::class,'product_update'])->name('product.update');
 Route::get('product-delete/{id}',[productController::class,'product_delete'])->name('product.delete');





                             

});
