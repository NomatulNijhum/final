   <?php




use RealRashid\SweetAlert\Facades\Alert;
//USER_Login
Route::get('/users','UserController@abc')->name('abc');




///
Route::get('/price/{appointment_id}','PriceController@priceindex')->name('priceindex');

// ///payments
// Route::get('/addpayment','PaymentController@index')->name('addpayment');
// Route::post('/addpayment_create','PaymentController@addpayment_create')->name('addpayment_create');

Route::get('stripe', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');







Route::get('/addroomtype','RoomAllotmentController@addroomtype')->name('addroomtype');
Route::post('/RoomType_create','RoomAllotmentController@RoomType_create')->name('RoomType_create');






///RoomAllocation

//Route::get('/addroom','RoomAllotmentController@index')->name('addroom');
//Route::post('/addroom/create','RoomAllotmentController@create')->name('room_create');
Route::get('/roomallocation/{room_allotment_id}','RoomAllotmentController@single_roomallocation')->name('single_roomallocation');
Route::get('/deleteroomallocation/{room_allotment_id}','RoomAllotmentController@deleteroomallocation')->name('deleteroomallocation');
Route::post('/allroomallocation/update','RoomAllotmentController@update')->name('roomallocation_update');





Route::get('/array/register','RegistrationController@index')->name('register_index');//homepage
Route::post('/register/create','RegistrationController@create')->name('register_create');
//Route::get('/register_one','RegistrationController@register_one')->name('register_one');
//Route::get('/register_one_create','RegistrationController@register_one_create')->name('register_one_create');




///


Route::get('/dashboard','DashboardhomeController@index')->name('index');
Route::get('/onedayperformance','DashboardhomeController@onedayperformance')->name('onedayperformance');

Route::get('/ourdoctors', 'HmsfrontendController@frontendindex')->name('frontendindex');

/////


Route::get('profiles','ProfileController@edit')->name('profiles');
Route::post('profile_update','ProfileController@update');

Route::get('logout','ProfileController@logout');
Route::post('dashboard','ProfileController@verify');
Route::get('/home', 'ProfileController@home');
Route::get('/password', 'ProfileController@resetPassword');
Route::post('/change-password/{id}', 'ProfileController@password');








Route::get('/appointment','HmsfrontendController@index')->name('appointment');
Route::get('/appointmentview','HmsfrontendController@viewindex')->name('viewindex');

Route::post('/appointment/create','HmsfrontendController@create')->name('appointment_create');
Route::get('/allappointment','HmsfrontendController@allappointment')->name('allappointment');
Route::post('/appointment/update','HmsfrontendController@update')->name('appointment_update');

Route::get('/allappointment/{appointment_id}','HmsfrontendController@single_appointment')->name('single_appointment');
Route::get('/deleteappointment/{appointment_id}','HmsfrontendController@deleteappointment')->name('deleteappointment');
Route::get('/SendPrescription/{appointment_id}','HmsfrontendController@single_prescription')->name('single_prescription');
Route::post('/newprescription_create','HmsfrontendController@newprescription_create')->name('newprescription_create');

Route::get('/addroomservice/{appointment_id}','HmsfrontendController@single_roomservice')->name('single_roomservice');
Route::post('/newroomservice_create','HmsfrontendController@newroomservice_create')->name('newroomservice_create');
Route::get('/allroom','HmsfrontendController@allroom')->name('allroom');

Route::get('/add_case_study/{appointment_id}','HmsfrontendController@single_casestudy')->name('single_casestudy');
Route::post('/add_case_study_create','HmsfrontendController@add_case_study_create')->name('add_case_study_create');
Route::get('/allcasestudy','HmsfrontendController@allcasestudy')->name('allcasestudy');


Route::get('/add_case_study/{appointment_id}','HmsfrontendController@single_casestudy')->name('single_casestudy');





Route::get('/allprescription','HmsfrontendController@allprescription')->name('allprescription');
Route::get('/deleteprescription/{prescription_id}','HmsfrontendController@deleteprescription')->name('deleteprescription');


////viewPrescription

 // Route::get('/allprescription/{appointment_id}','HmsfrontendController@single_prescription_view')->name('single_prescription_view');

Route::get('createprescription/pdf/{prescription_id}','HmsfrontendController@createprescription')->name('createprescription');
Route::get('createbill/pdf/{price_id}','PaymentController@createbill')->name('createbill');



//CasestudyController

//Route::get('/add_case_study','CasestudyController@index')->name('add_case_study');
//Route::post('/add_case_study/create','CasestudyController@create')->name('add_case_study_create');
Route::get('/allcasestudy/{casestudie_id}','CasestudyController@next_casestudy')->name('next_casestudy');
Route::get('/deletecasestudy/{casestudie_id}','CasestudyController@deletecasestudy')->name('deletecasestudy');
Route::post('/casestudy/update','CasestudyController@update')->name('casestudy_update');
//Route::get('/add_prescription','CasestudyController@prescriptionindex')->name('prescriptionindex');

/////case_study_update




//billsend

Route::get('/bill/{appointment_id}','HmsfrontendController@single_bill')->name('single_bill');
Route::post('/bill_create','HmsfrontendController@bill_create')->name('bill_create');
Route::get('/bill/{price_id}','HmsfrontendController@billindex')->name('billindex');
Route::get('/allbill','HmsfrontendController@allbill')->name('allbill');
Route::get('/allbill/{price_id}','HmsfrontendController@next_bill')->name('next_bill');
// Route::post('/price/update','PaymentController@update')->name('bill_update');













//
Route::post('/save-user', 'TblUserController@index');
Route::post('/user-login', 'TblUserController@login_user');
Route::get('/user-profile', 'TblUserController@user_profile');
Route::get('/logout', 'TblUserController@user_logout');
Route::get('/edit-profile/{user_id}', 'TblUserController@edit_profile');
Route::get('/change-profile', 'TblUserController@user_change');
Route::post('/update-profile/{user_id}', 'TblUserController@update_profile');
Route::post('/change-designation/{user_id}', 'TblUserController@change_designation');

///bloodbank
//Route::get('/bloodbank/about','BloodbankController@about')->name('about');
//Route::get('/bloodbank/userregistration','TblUserController@index')->name('index');
//Route::post('/bloodbank/userregistration/create','TblUserController@create')->name('userregistration_create');

//publiccontroller

Route::get('/bloodbank', 'TblAdminController@home');
Route::get('/login-user', 'TblAdminController@login_user');
Route::get('/donar-view', 'TblAdminController@donar');
Route::get('/registration-form', 'TblAdminController@registration');
//Route::get('/about-us', 'TblAdminController@about');
Route::get('/community', 'TblAdminController@community_page');
Route::get('/details', 'TblAdminController@details_page');
 


//Post related routing-------------------------------
Route::post('/create-post/{user_id}', 'TblPostController@index');
Route::post('/post-create/{user_id}', 'TblPostController@post_create');

//Admin related routing-----------------------------------
Route::get('/login-admin', 'TblPostController@login_page');
Route::post('/admin-panel', 'TblPostController@login_admin');
Route::get('/admin-profile', 'TblPostController@admin_profile');
Route::get('/profile-edit/{admin_id}', 'TblPostController@edit_profile');
Route::get('/admin-change-profile', 'TblPostController@admin_change');
Route::post('/profile-update/{admin_id}', 'TblPostController@profile_update');
Route::get('/all-donar', 'TblPostController@all_donar');
Route::get('/all-user', 'TblPostController@all_user');
Route::get('/ban-donar/{user_id}', 'TblPostController@ban_donar');
Route::get('/ban-user/{user_id}', 'TblPostController@ban_user');
Route::get('/create-admin', 'TblPostController@admin_registration');
Route::post('/admin-save', 'TblPostController@save_admin');





////////////////////////


////Dashboardhome

////Dashboardhome

Route::get('/role','RoleController@index')->name('role_index');//role
Route::post('/role/create','RoleController@create')->name('role_create');//homepage
Route::get('/allrole','RoleController@allrole')->name('allrole');
Route::get('/allrole/{role_id}','RoleController@single_role')->name('single_role');
Route::get('/deleterole/{role_id}','RoleController@deleterole')->name('deleterole');

Route::post('/role/update','RoleController@update')->name('role_update');






//department

Route::get('/Department','DepartmentController@index')->name('Department');
Route::post('/Department/create','DepartmentController@create')->name('Department_create');
Route::get('/alldepartment','DepartmentController@alldepartment')->name('alldepartment');
Route::get('/alldepartment/{department_id}','DepartmentController@single_department')->name('single_department');
Route::get('/deletedepartment/{department_id}','DepartmentController@deletedepartment')->name('deletedepartment');

Route::post('/Department/update','DepartmentController@update')->name('Department_update');


///






//Doctor

Route::get('/doctor','DoctorController@index')->name('doctor');
Route::post('/doctor/create','DoctorController@create')->name('doctor_create');
Route::get('/alldoctor','DoctorController@alldoctor')->name('alldoctor');

Route::get('/alldoctor/{doctor_id}','DoctorController@single_doctor')->name('single_doctor');
Route::get('/deletedoctor/{doctor_id}','DoctorController@deletedoctor')->name('deletedoctor');

Route::get('create/pdf/{doctor_id}','DoctorController@createpdf')->name('createpdf');

Route::post('/doctor/update','DoctorController@update')->name('doctor_update');

//Patients
// //Patients
// Route::get('/patient','PatientController@index')->name('patient');
// Route::post('/patient/create','PatientController@create')->name('patient_create');
// Route::get('/allpatient','PatientController@allpatient')->name('allpatient');
// Route::get('/patientdetails','PatientController@patientdetails')->name('patientdetails');
// Route::get('/allpatient/{patient_id}','PatientController@single_patient')->name('single_patient');
// Route::get('/deletepatient/{patient_id}','PatientController@deletepatient')->name('deletepatient');
Route::get('/allprescription/{prescrip_id}','PatientController@next_prescription')->name('next_prescription');
Route::post('/prescription/update','PatientController@update')->name('newprescription_update');












//Appointment













//Schedules

Route::get('/schedule','ScheduleController@index')->name('schedule');
Route::post('/schedule/create','ScheduleController@create')->name('schedule_create');
Route::get('/allschedule','ScheduleController@allschedule')->name('allschedule');
Route::get('/allschedule/{schedule_id}','ScheduleController@single_schedule')->name('single_schedule');
Route::get('/deleteschedule/{schedule_id}','ScheduleController@deleteschedule')->name('deleteschedule');
Route::post('/schedule/update','ScheduleController@update')->name('schedule_update');






















//Birthreport
Route::get('/Birthreport','BirthreportController@index')->name('Birthreport');
Route::post('/Birthreport/create','BirthreportController@create')->name('Birthreport_create');
Route::get('/allBirthreport','BirthreportController@allbirthreport')->name('allbirthreport');
Route::get('/allBirthreport/{birthreport_id}','BirthreportController@single_birthreport')->name('single_birthreport');
Route::get('/deletebirthreport/{birthreport_id}','BirthreportController@deletebirthreport')->name('deletebirthreport');
Route::post('/allBirthreport/update','BirthreportController@update')->name('birthreport_update');




Route::get('createbirth_pdf/pdf/{birthreport_id}','BirthreportController@createbirth_pdf')->name('createbirth_pdf');
Route::get('createdeath_pdf/pdf/{deathreport_id}','DeathreportController@createdeath_pdf')->name('createdeath_pdf');
Route::get('createopration_pdf/pdf/{operationreport_id}','OperationreportController@createopration_pdf')->name('createopration_pdf');
Route::get('createinvestigation_pdf/pdf/{investigation_id}','InvestigationController@createinvestigation_pdf')->name('createinvestigation_pdf');





//Deathreport



Route::get('/Deathreport','DeathreportController@index')->name('Deathreport');
Route::post('/Deathreport/create','DeathreportController@create')->name('Deathreport_create');
Route::get('/allDeathreports','DeathreportController@alldeathreport')->name('alldeathreport');
Route::get('/allDeathreports/{deathreport_id}','DeathreportController@single_deathreport')->name('single_deathreport');
Route::get('/deletedeathreport/{deathreport_id}','DeathreportController@deletedeathreport')->name('deletedeathreport');
Route::post('/allDeathreports/update','DeathreportController@update')->name('deathreport_update');











//Operation Report

Route::get('/Operation','OperationreportController@index')->name('Operationreport');
Route::post('/Operation/create','OperationreportController@create')->name('Operationreport_create');
Route::get('/alloperationreport','OperationreportController@alloperationreport')->name('alloperationreport');
Route::get('/alloperationreport/{operationreport_id}','OperationreportController@single_operationreport')->name('single_operationreport');
Route::get('/deleteoperationreport/{operationreport_id}','OperationreportController@deleteoperationreport')->name('deleteoperationreport');
Route::post('/alloperationreport/update','OperationreportController@update')->name('Operationreport_update');












//investigationReport

Route::get('/Investigation','InvestigationController@index')->name('Investigation');
Route::post('/Investigation/create','InvestigationController@create')->name('Investigation_create');
Route::get('/allinvestigation','InvestigationController@allinvestigation')->name('allinvestigation');
Route::get('/allinvestigation/{investigation_id}','InvestigationController@single_investigation')->name('single_investigation');
Route::get('/deleteinvestigation/{investigation_id}','InvestigationController@deleteinvestigation')->name('deleteinvestigation');
Route::post('/allinvestigation/update','InvestigationController@update')->name('Investigation_update');




//addmedicine

Route::get('/addmedicine','MedicineController@index')->name('addmedicine');
Route::post('/addmedicine/create','MedicineController@create')->name('addmedicine_create');
Route::get('/allmedicine','MedicineController@allmedicine')->name('allmedicine');
Route::get('/allmedicine/{medicine_id}','MedicineController@single_Medicine')->name('single_Medicine');
Route::get('/deleteMedicine/{medicine_id}','MedicineController@deleteMedicine')->name('deleteMedicine');
Route::post('/addmedicine/update','MedicineController@update')->name('medicine_update');


//addnotice

Route::get('/Notice','NoticeController@index')->name('Notice');
Route::post('/Notice/create','NoticeController@create')->name('Notice_create');
Route::get('/allnotice','NoticeController@allnotice')->name('allnotice');
Route::get('/allnotice/{notice_id}','NoticeController@single_notice')->name('single_notice');
Route::get('/deletenotice/{notice_id}','NoticeController@deletenotice')->name('deletenotice');
Route::post('/allnotice/update','NoticeController@update')->name('notice_update');



///////

Route::get('/home', function ()

 {
    return view('home');
});




Route::get('/', function ()

 {

    return view('welcome');
});


Auth::routes(['verify'=>true]);
