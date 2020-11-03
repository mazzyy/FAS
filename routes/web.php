<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::post('/creatCommettiee', 'HomeController@saveField');

Route::get('/sendMail', 'HomeController@sendEmail');


//super admin links
Route::group(['middleware' => 'App\Http\Middleware\SuperAdminMiddleware'], function()
{
    Route::match(['get', 'post'], '/admin_home', 'UserLogin@admin_page');
    Route::match( ['get', 'post'],'/committe-user-create', 'userCreation@send_email_to_reg_user');
    Route::get("/create_committie", function(){
        return view("user_screen.superAdmin-createComm")->with('role', 'Admin');;
     });
    
});

//committe Head Links
Route::group(['middleware' => 'App\Http\Middleware\committeeHeadMiddleware'], function()
{
    Route::match(['get', 'post'], '/ch_home', 'UserLogin@CM_head_page');  
    Route::get("/add_advisor", function(){
        return view('user_screen.committeeHead')->with('role', 'Committee Head');
     });
    Route::get("/add_std", function(){
        return view('user_screen.committeeHead')->with('role', 'Committee Head');
     });
     Route::match(['get', 'post'], 'std-email/import-std', 'CsvFile@csv_import')->name('import-std');
     Route::match(['get', 'post'], 'adv-email/import-advisor', 'CsvFile@csv_import')->name('import-advisor');
});


//committe Members Links
Route::group(['middleware' => 'App\Http\Middleware\CommitteeMemberMiddleware'], function()
{
    Route::match(['get', 'post'], '/cm_home', 'UserLogin@CommitteeMember');
    Route::get("/add_advisor", function(){
        return view('user_screen.cam-add-advisior')->with('role', 'Committee Member');
     });
    Route::get("/add_std", function(){
        return view('user_screen.com-add-std')->with('role', 'Committee Member');
     });
     Route::match(['get', 'post'], 'std-email/import-std', 'CsvFile@csv_import')->name('import-std');
     Route::match(['get', 'post'], 'adv-email/import-advisor', 'CsvFile@csv_import_advisor')->name('import-advisor');
     
     Route::get("/create-jury-team", 'getUser_By_Role@advisors');
     Route::post("/create_jury", 'creatingJuryGroup@create_group');


     Route::get("/create-std-team", 'getUser_By_Role@std');


     Route::match(['get', 'post'], '/jury-team-details/{teamID}', 'creatingJuryGroup@team_detail_page');
    
     
   
});

//Student Links
Route::group(['middleware' => 'App\Http\Middleware\StudentMiddleware'], function()
{ 
    // Route::match(['get', 'post'], '/advisor_idea', 'advisorIdea_controller@ad_ideas');  
    
    Route::match(['get', 'post'], '/    ', 'advisorideashare@ad_ideasshare'); 
    Route::match(['get', 'post'], '/st_home', 'UserLogin@Student');
    Route::match(['get', 'post'], '/req_std_for_group', 'Requests@StudentSendREQ');
    Route::match(['get', 'post'], '/std_all_req', 'Requests@StudentAllREQ');
  
});

//Advisor Links
Route::group(['middleware' => 'App\Http\Middleware\AdvisorMiddleware'], function()
{
    Route::match(['get', 'post'], '/ad_home', 'UserLogin@Advisor');
    Route::match(['get', 'post'], '/advisor_idea', 'advisorIdea_controller@ad_ideas');
    Route::match(['get', 'post'], "/uplaod_idea_form", 'advisorIdea_controller@uploadIdeaForm');
    Route::match(['get', 'post'], '/advisor_ideas', 'advisorIdea_controller@ad_ideasshare'); 
    
    Route::match(['get', 'post'], '/jury-team', 'myjuryteam@findjuryteam');
     
    
});

// Jury Links
Route::group(['middleware' => 'App\Http\Middleware\JuryMiddleware'], function()
{
    Route::match(['get', 'post'], '/jr_home', 'UserLogin@Jury');
    
});


Route::get('committeeHead', 'CsvFile@index');



//Route::get('committeeHead/export', 'CsvFile@csv_export')->name('export');

//create view myaccount
Route::get('/myaccount',function(){
    return view('user_screen.Myaccount');
});

//create route to change name
Route::post('/myaccount','MyAccount@changeName'); 

//create route to change password
Route::post('/myaccountpassword',"MyAccount@changePassword");

//create route to change image
Route::post('/myaccountimage',"MyAccount@changeImage");