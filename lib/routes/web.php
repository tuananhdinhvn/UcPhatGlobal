<?php
Route::get('welcome', function () {
    return view('react');
});

Route::group(['namespace' => 'FrontEnd', 'middleware' => 'locale'], function () {
    
    // Ngôn ngữ
    Route::get('change-language/{language}', 'IndexController@changeLanguage')->name('user.change-language');

    // Index
    Route::group(['prefix' => '/'], function () {
        Route::get('/', 'IndexController@getIndex')->name('index');
    });

    Route::group(['prefix' => 'project'], function () {
        Route::get('/', 'IndexController@getProject')->name('project');
        Route::get('{id}', 'IndexController@getProjectDetail');
    });


    // Tin tức & hoạt động
    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', 'BlogController@getBlog')->name('blog');

        Route::get('{slug}.{id}', 'BlogController@getBlogDetail')->name('post');
    });

    Route::get('data-security', 'IndexController@secure');


    Route::group(['prefix' => 'project'], function () {
        Route::get('/', 'IndexController@getProject');

        // Save Customer contact
        Route::post('customer-contact', 'TemplateController@saveCustomerInfo');
    });
    
    // Danh mục Blog
    Route::get('{slug}.{id}', 'BlogController@getBlogCategory');
    
    //Bài viết chi tiết
    Route::get('{slug}/{slug_detail}.{id}', 'BlogController@getBlogDetail');

    // filter
    Route::get('project-filter', 'ProductController@filterProject');

    // Save normal customer data
    Route::post('save-data', 'ContactController@saveData');

   


    // Đăng ký thành viên
    Route::group(['prefix' => 'register'], function () {
        // Route::get('/', 'RegisterController@getRegister');
        // Route::post('/', 'RegisterController@postRegister');

        Route::get('confirm/{code}', 'RegisterController@confirmUser');
    });

    // Đăng nhập
    Route::group(['prefix' => 'login'], function () {
        Route::get('/', 'LoginController@getLogin');
        Route::post('/', 'LoginController@postLogin');
    });

    // // Lấy lại mật khẩu
    // Route::get('forgot-password', 'LoginController@forgotPassword');
    // Route::get('change-password/{code}', 'LoginController@rebornPassword');
    // Route::post('change-password/{code}', 'LoginController@postrebornPassword');

    // // Thông tin người dùng
    // Route::get('account', 'AccountUserController@getAccount')->middleware('AssetAccount');
    
    // Route::get('logout', 'LogoutController@logout');
});






//---------------------------------Admin zone--------------------------------//

//Admin
Route::group(['namespace' => 'admin'], function () {
    Route::group(['prefix' => 'admin'], function () {
        //Login - Logout
        Route::get('/', function () {
            return redirect('admin/login');
        })->name('admin.login.form');

        Route::get('login', 'AdminBaseController@getLogin')->middleware('CheckLogin');
        Route::post('login', 'AdminBaseController@postLogin');

        Route::get('logout', 'AdminBaseController@getLogout');

        // Stop guest entry dashboard
        Route::get('classify', 'AdminBaseController@classifyUser')->middleware('CheckLogout');

        //Dashboard
        Route::get('dashboard', 'DashboardController@getDashboard')->middleware('CheckLogout');


        //Customer
        Route::group(['prefix' => 'customer'], function () {
            Route::get('/', 'CustomerController@getCustomer')->middleware('CheckLogout')->name('admin.customer');
            
            Route::get('detail/{id}', 'CustomerController@getCustomerDetail')->middleware('CheckLogout');
            Route::post('detail/{id}', 'CustomerController@postCustomerDetail');

            Route::get('delete/{id}', 'CustomerController@deleteCustomer')->middleware('CheckLogout');

            Route::get('check/{id}', 'CustomerController@checkCustomer')->middleware('CheckLogout');
        });


        //Timeline
        Route::group(['prefix' => 'timeline'], function () {
            Route::get('/', 'EventController@showTimeline')->middleware('CheckLogout')->name('admin.timeline');
            Route::get('add', 'EventController@addTimeline')->middleware('CheckLogout');
            Route::post('add', 'EventController@postaddTimeline');

            Route::get('edit/{id}', 'EventController@editTimeline')->middleware('CheckLogout');
            Route::post('edit/{id}', 'EventController@posteditTimeline');

            Route::get('show/{id}', 'EventController@checkshowTimeline')->middleware('CheckLogout');

            Route::get('delete/{id}', 'EventController@deleteTimeline')->middleware('CheckLogout');
        });


        //Blog Category
        Route::group(['prefix' => 'blogcat'], function () {
            Route::get('/', 'BlogCategoryController@getBlogCat')->middleware('CheckLogout');

            Route::get('add', 'BlogCategoryController@addBlogCat')->middleware('CheckLogout');
            Route::post('add', 'BlogCategoryController@postaddBlogCat');

            Route::get('edit/{id}', 'BlogCategoryController@editBlogCat')->middleware('CheckLogout');
            Route::post('edit/{id}', 'BlogCategoryController@posteditBlogCat');

            Route::get('delete/{id}', 'BlogCategoryController@deleteBlogCat')->middleware('CheckLogout');
        });

        //News - tin tức
        Route::group(['prefix' => 'news'], function () {
            Route::get('/', 'BlogController@getNews')->middleware('CheckLogout');
            
            Route::get('add', 'BlogController@addNews')->middleware('CheckLogout');
            Route::post('add', 'BlogController@postaddNews');

            Route::get('edit/{id}', 'BlogController@editNews')->middleware('CheckLogout');
            Route::post('edit/{id}', 'BlogController@posteditNews');

            Route::get('delete/{id}', 'BlogController@deleteBlog')->middleware('CheckLogout');

            Route::get('show/{id}', 'BlogController@checkshowBlog')->middleware('CheckLogout');
        });


        // Project admin
        Route::group(['prefix' => 'project'], function () {
            Route::get('/', 'ProjectController@getProject')->name('admin.project')->middleware('CheckLogout');
            
            Route::get('add', 'ProjectController@addProject')->middleware('CheckLogout')->name('admin.project.add');
            Route::post('add', 'ProjectController@postaddProject');

            Route::get('detail/{id}', 'ProjectController@getProjectDetail')->middleware('CheckLogout');
            Route::post('detail/{id}', 'ProjectController@postProjectDetail');
            
            Route::get('show-progress/{id}', 'ProjectController@checkshowProgress')->middleware('CheckLogout');

            Route::get('show/{id}', 'ProjectController@checkshowProject')->middleware('CheckLogout');

            Route::get('delete/{id}', 'ProjectController@deleteProject')->middleware('CheckLogout');
			
			
			

            // Project location
            Route::group(['prefix' => 'location'], function () {
                Route::get('/', 'ProjectController@getProjectLocation')->name('admin.project.location')->middleware('CheckLogout');
                
                Route::get('add', 'ProjectController@addProjectLocation')->name('admin.project.location.add')->middleware('CheckLogout');
                Route::post('add', 'ProjectController@postaddProjectLocation');

                Route::get('edit/{id}', 'ProjectController@editProjectLocation')->middleware('CheckLogout');
                Route::post('edit/{id}', 'ProjectController@posteditProjectLocation');

                Route::get('delete/{id}', 'ProjectController@deleteLocation')->middleware('CheckLogout');
            });

            // Project major
            Route::group(['prefix' => 'major'], function () {
                Route::get('/', 'ProjectController@getProjectMajor')->name('admin.project.major')->middleware('CheckLogout');

                Route::get('show/{id}', 'ProjectController@checkshowProjectMajor')->middleware('CheckLogout');

                Route::get('add', 'ProjectController@addProjectMajor')->name('admin.project.major.add')->middleware('CheckLogout');
                Route::post('add', 'ProjectController@postaddProjectMajor');

                Route::get('edit/{id}', 'ProjectController@editProjectMajor')->middleware('CheckLogout');
                Route::post('edit/{id}', 'ProjectController@posteditProjectMajor');

                Route::get('delete/{id}', 'ProjectController@deleteMajor')->middleware('CheckLogout');

                
            });
        });


        

        //Template small part
        Route::group(['namespace' => 'layout'], function () {
            // Why us process
            Route::group(['prefix' => 'process'], function () {
                Route::get('add', 'LayoutHomepageController@getaddProcess')->middleware('CheckLogout');
                Route::post('add', 'LayoutHomepageController@postaddProcess')->middleware('CheckLogout');

                Route::get('edit/{id}', 'LayoutHomepageController@geteditProcess')->middleware('CheckLogout');
                Route::post('edit/{id}', 'LayoutHomepageController@posteditProcess');

               // Delete process slide
               Route::get('edit/{id}/{idImg}', "LayoutHomepageController@deleteProcessSlide")->middleware('CheckLogout');
            });

            
            Route::group(['prefix' => 'template'], function () {
                // Delete process
                Route::get('whyus/process/delete/{id}', 'LayoutHomepageController@deleteProcess')->middleware('CheckLogout');
                

                Route::get('whyus', 'LayoutHomepageController@getWhyUs')->middleware('CheckLogout')->name('admin.template.whyus');
                Route::post('whyus', 'LayoutHomepageController@postWhyUs')->middleware('CheckLogout');
                Route::get('whyus/delete/{id}', 'LayoutHomepageController@getdeleteImage')->middleware('CheckLogout');

				// Why us - technology
                Route::get('whyus/tech/edit/{id}', 'LayoutHomepageController@geteditTech')->middleware('CheckLogout');

                // Why us - company profile
                Route::get('whyus/profile/add', 'LayoutHomepageController@getaddProfile')->middleware('CheckLogout');
                Route::post('whyus/profile/add', 'LayoutHomepageController@postaddProfile')->middleware('CheckLogout');

                Route::get('whyus/profile/edit/{id}', 'LayoutHomepageController@geteditProfile')->middleware('CheckLogout');

                Route::get('whyus/profile/delete/{id}', 'LayoutHomepageController@getdeleteProfile')->middleware('CheckLogout');
				
                // Customer - Partner
                Route::get('whyus/addcust', 'LayoutHomepageController@getaddImage')->middleware('CheckLogout')->name('admin.template.whyus.addcust');
                Route::post('whyus/addcust', 'LayoutHomepageController@postaddImage')->middleware('CheckLogout');

                Route::get('whyus/editcust/{id}', 'LayoutHomepageController@geteditImage')->middleware('CheckLogout');
                Route::post('whyus/editcust/{id}', 'LayoutHomepageController@posteditImage')->middleware('CheckLogout');
                // End Customer - Partner

                // Company member
                Route::get('whyus/addmember', 'LayoutHomepageController@getaddImage')->middleware('CheckLogout');
                Route::post('whyus/addmember', 'LayoutHomepageController@postaddImage')->middleware('CheckLogout');

                Route::get('whyus/editmember/{id}', 'LayoutHomepageController@geteditImage')->middleware('CheckLogout');
                Route::post('whyus/editmember/{id}', 'LayoutHomepageController@posteditImage')->middleware('CheckLogout');
                // End Company member

                // start service
                Route::get('service', 'LayoutHomepageController@getService')->middleware('CheckLogout')->name('admin.template.service');
                Route::post('service', 'LayoutHomepageController@postService')->middleware('CheckLogout');

                Route::get('service/addslide', 'LayoutHomepageController@getServiceSlide')->middleware('CheckLogout');
                Route::post('service/addslide', 'LayoutHomepageController@postServiceSlide')->middleware('CheckLogout');

                Route::get('service/editslide/{id}', 'LayoutHomepageController@geteditServiceSlide')->middleware('CheckLogout');
                Route::post('service/editslide/{id}', 'LayoutHomepageController@posteditServiceSlide')->middleware('CheckLogout');
                // end service


                // Delete service slide
                Route::get('service/delete-slide-service/{id}', "LayoutHomepageController@deletServiceSlide")->middleware('CheckLogout');

                Route::get('project', 'LayoutHomepageController@getProject')->middleware('CheckLogout')->name('admin.template.project');
                Route::post('project', 'LayoutHomepageController@postProject')->middleware('CheckLogout');

                Route::get('achievement', 'LayoutHomepageController@getAchievement')->middleware('CheckLogout')->name('admin.template.achievement');
                Route::post('achievement', 'LayoutHomepageController@postAchievement')->middleware('CheckLogout');

                Route::get('social', 'LayoutHomepageController@getSocial')->middleware('CheckLogout')->name('admin.template.social');
                Route::post('social', 'LayoutHomepageController@postSocial')->middleware('CheckLogout');
                Route::get('social/delete/{id}', 'LayoutHomepageController@deleteSocial')->middleware('CheckLogout');
                Route::get('social/show/{id}', 'LayoutHomepageController@checkshowSocial')->middleware('CheckLogout');
				
				
				//------ Cert & CSR -------//
                Route::get('csr/add', 'LayoutHomepageController@addCSR')->middleware('CheckLogout');
                
                Route::get('csr/edit/{id}', 'LayoutHomepageController@editCSR')->middleware('CheckLogout')->name('admin.template.csr.edit');
              
				Route::get('social/add', 'LayoutHomepageController@addSocialSlide')->middleware('CheckLogout');
            });
        });


         



        // Social
        Route::group(['namespace' => 'layout'], function () {
            Route::group(['prefix' => 'social'], function () {
                Route::get('/', 'LayoutHomepageController@getSocial')->middleware('CheckLogout')->name('admin.social');

                Route::get('add', 'LayoutHomepageController@addSocialItem')->middleware('CheckLogout')->name('admin.social.add');
                Route::post('add', 'LayoutHomepageController@postaddSocialItem');
                
                Route::get('detail/{id}', 'LayoutHomepageController@getSocialDetail')->middleware('CheckLogout');
                Route::post('detail/{id}', 'LayoutHomepageController@postSocialDetail');

                Route::get('delete/{id}', 'LayoutHomepageController@deleteSocial')->middleware('CheckLogout');

                Route::get('show/{id}', 'LayoutHomepageController@checkshowSocial')->middleware('CheckLogout');
            });
        });
        
       

        //Event
        Route::group(['prefix' => 'event'], function () {
            Route::get('/', 'EventController@showEvent')->middleware('CheckLogout')->name('admin.event');

            Route::get('add', 'EventController@addEvent')->middleware('CheckLogout')->name('admin.event.add');
            Route::post('add', 'EventController@postaddEvent')->middleware('CheckLogout');

            Route::get('detail/{id}', 'EventController@editEvent')->middleware('CheckLogout')->name('admin.event.edit');
            Route::post('detail/{id}', 'EventController@posteditEvent')->middleware('CheckLogout');

            Route::get('delete/{id}', 'EventController@deleteEvent')->middleware('CheckLogout');

            Route::get('check-show/{id}', 'EventController@checkEvent')->middleware('CheckLogout');
        });

        //Order
        Route::group(['prefix' => 'order'], function () {
            Route::get('/', 'OrderController@getOrder')->middleware('CheckLogout');

            Route::get('detail/{id}', 'OrderController@getOrderDetail')->middleware('CheckLogout');
            Route::post('detail/{id}', 'OrderController@updateOrder');

            Route::get('delete/{id}', 'OrderController@deleteOrder')->middleware('CheckLogout');
        });

        





        //Product
        Route::group(['prefix' => 'product'], function () {
            Route::get('/', 'ProductController@getProduct')->middleware('CheckLogout')->name('admin.product');

            Route::get('add', 'ProductController@addProduct')->middleware('CheckLogout')->name('admin.product.add');
            Route::post('add', 'ProductController@postaddProduct');
            
            Route::get('add/procat-child/{idprocat}', 'ProductController@ajaxProcatChild')->middleware('CheckLogout');

            Route::post('upload-submit', "ProductController@postsubmit")->middleware('CheckLogout');
            // Route::get('delete-submit-photo', "ProductController@deletesubmit")->middleware('CheckLogout');
       
            Route::get('detail/{id}', 'ProductController@getProductDetail')->middleware('CheckLogout');
            Route::get('detail/{id}/procat-child/{idprocat}', 'ProductController@ajaxeditProcatChild')->middleware('CheckLogout');
            Route::post('detail/{id}', 'ProductController@postProductDetail');

            Route::get('delete/{id}', 'ProductController@deleteProduct')->middleware('CheckLogout');

            Route::get('show/{id}', 'ProductController@checkshowProduct')->middleware('CheckLogout');

            Route::get('filter-procat-child/{idprocat}', 'ProductController@getFilterProcatChild')->middleware('CheckLogout');
        });


        // Nation
        Route::group(['prefix' => 'nation'], function () {
            Route::get('/', 'ProductCategoryController@getProductCat')->name('admin.nation')->middleware('CheckLogout');
            
            Route::get('add', 'ProductCategoryController@addProductCat')->middleware('CheckLogout');
            Route::post('add', 'ProductCategoryController@postaddProductCat');

            Route::get('edit/{id}', 'ProductCategoryController@editProductCat')->middleware('CheckLogout');
            Route::post('edit/{id}', 'ProductCategoryController@posteditProductCat');

            Route::get('delete/{id}', 'ProductCategoryController@deleteProductCat')->middleware('CheckLogout');
        });


        


        // Images
        Route::group(['namespace' => 'layout'], function () {
            Route::group(['prefix' => 'image'], function () {
                Route::get('/', 'LayoutHomepageController@getLayoutHomepage')->middleware('CheckLogout');
                Route::post('/', 'LayoutHomepageController@postLayoutHomepage')->middleware('CheckLogout');

                Route::get('add', 'LayoutHomepageController@getaddImage')->name('admin.addImage')->middleware('CheckLogout');
                Route::post('add', 'LayoutHomepageController@postaddImage')->middleware('CheckLogout');

                Route::get('edit/{id}', 'LayoutHomepageController@geteditImage')->name('admin.editImage')->middleware('CheckLogout');
                Route::post('edit/{id}', 'LayoutHomepageController@posteditImage')->middleware('CheckLogout');

                Route::get('edit-number/{id}', 'LayoutHomepageController@geteditNumber')->middleware('CheckLogout');
                Route::post('edit-number/{id}', 'LayoutHomepageController@posteditNumber')->middleware('CheckLogout');

                Route::get('delete/{id}', 'LayoutHomepageController@getdeleteImage')->name('admin.deleteImage')->middleware('CheckLogout');
        
                Route::get('show/{id}', 'LayoutHomepageController@getshowImage')->name('admin.showImage')->middleware('CheckLogout');
            });
        });

        


        //Template
        Route::group(['namespace' => 'layout'], function () {
            Route::group(['prefix' => 'layout'], function () {

                Route::get('product', 'LayoutProductController@getLayoutProduct');
                Route::post('product', 'LayoutProductController@postLayoutProduct');

                Route::get('contact', 'LayoutContactController@getLayoutContact');
                Route::post('contact', 'LayoutContactController@postLayoutContact');
                
                Route::get('footer', 'LayoutFooterController@getLayoutFooter');
                Route::post('footer', 'LayoutFooterController@postLayoutFooter');
            });
        });


        //Static page
        Route::group(['prefix' => 'static'], function () {

            Route::get('gioi-thieu', 'StaticPageController@getGioithieu')->middleware('CheckLogout');
            Route::post('gioi-thieu', 'StaticPageController@postGioithieu');

        });        


        //About
        Route::group(['prefix' => 'about'], function () {
            Route::get('/', 'BlogController@getBlog')->middleware('CheckLogout');
            
            Route::get('add', 'BlogController@addBlog')->middleware('CheckLogout');
            Route::post('add', 'BlogController@postaddBlog');

            Route::get('edit/{id}', 'BlogController@editBlog')->middleware('CheckLogout');
            Route::post('edit/{id}', 'BlogController@posteditBlog');

            Route::get('delete/{id}', 'BlogController@deleteBlog')->middleware('CheckLogout');

            // Route::get('show/{id}', 'BlogController@checkshowBlog')->middleware('CheckLogout');
        });



   

        //Setting
        Route::get('setting', 'SettingControllerler@getSetting')->middleware('CheckLogout');
        Route::post('setting', 'SettingControllerler@postgetSetting');

        //Decentralize
        Route::group(['prefix' => 'users'], function () {
            Route::get('/', 'DecentralizeController@getUser')->middleware('CheckLogout');

            Route::get('add', 'DecentralizeController@addUser')->middleware('CheckLogout');
            Route::post('add', 'DecentralizeController@postaddUser');

            Route::get('edit/{id}', 'DecentralizeController@editUser')->middleware('CheckLogout');
            Route::post('edit/{id}', 'DecentralizeController@posteditUser');

            Route::get('delete/{id}', 'DecentralizeController@deleteUser')->middleware('CheckLogout');
        });

       
        //Profile user
        Route::get('profile', 'ProfileController@getProfile')->middleware('CheckLogout');
        Route::post('profile', 'ProfileController@postProfile')->middleware('CheckLogout');

        Route::get('profile/change-password', 'ProfileController@getChangePass')->name('admin.updatePassword')->middleware('CheckLogout');
        Route::post('profile/change-password', 'ProfileController@postChangePass');
        
        
    });
});