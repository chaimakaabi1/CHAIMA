<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_abonnement_index' => [[], ['_controller' => 'App\\Controller\\AbonnementController::index'], [], [['text', '/abonnement/']], [], [], []],
    'app_abonnement_new' => [[], ['_controller' => 'App\\Controller\\AbonnementController::new'], [], [['text', '/abonnement/new']], [], [], []],
    'app_abonnement_show' => [['idAbonnement'], ['_controller' => 'App\\Controller\\AbonnementController::show'], [], [['variable', '/', '[^/]++', 'idAbonnement', true], ['text', '/abonnement']], [], [], []],
    'app_abonnement_edit' => [['idAbonnement'], ['_controller' => 'App\\Controller\\AbonnementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idAbonnement', true], ['text', '/abonnement']], [], [], []],
    'app_abonnement_delete' => [['idAbonnement'], ['_controller' => 'App\\Controller\\AbonnementController::delete'], [], [['variable', '/', '[^/]++', 'idAbonnement', true], ['text', '/abonnement']], [], [], []],
    'generate_abonnement_pdf' => [['id'], ['_controller' => 'App\\Controller\\AbonnementController::generateAbonnementPDF'], [], [['text', '/generate-pdf'], ['variable', '/', '[^/]++', 'id', true], ['text', '/abonnement/abonnement']], [], [], []],
    'app_admin_index' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin/']], [], [], []],
    'app_admin_new' => [[], ['_controller' => 'App\\Controller\\AdminController::new'], [], [['text', '/admin/new']], [], [], []],
    'app_admin_show' => [['id'], ['_controller' => 'App\\Controller\\AdminController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin']], [], [], []],
    'app_admin_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin']], [], [], []],
    'app_admin_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin']], [], [], []],
    'admin_dashboard' => [[], ['_controller' => 'App\\Controller\\AdminDashboardController::index'], [], [['text', '/admin/dashboard/home']], [], [], []],
    'admin_dashboard_students' => [[], ['_controller' => 'App\\Controller\\AdminDashboardController::listStudents'], [], [['text', '/admin/dashboard/students']], [], [], []],
    'admin_dashboard_reclamation' => [[], ['_controller' => 'App\\Controller\\AdminDashboardController::listreclamation'], [], [['text', '/admin/dashboard/reclamation']], [], [], []],
    'admin_dashboard_donation' => [[], ['_controller' => 'App\\Controller\\AdminDashboardController::listdonation'], [], [['text', '/admin/dashboard/donation']], [], [], []],
    'admin_dashboard_students_new' => [[], ['_controller' => 'App\\Controller\\AdminDashboardController::newStudent'], [], [['text', '/admin/dashboard/students/new']], [], [], []],
    'admin_dashboard_students_show' => [['id'], ['_controller' => 'App\\Controller\\AdminDashboardController::showStudent'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/students']], [], [], []],
    'admin_dashboard_reclamation_show' => [['id'], ['_controller' => 'App\\Controller\\AdminDashboardController::showReclamation'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/reclamation']], [], [], []],
    'admin_dashboard_donation_show' => [['id'], ['_controller' => 'App\\Controller\\AdminDashboardController::showdonation'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/donation']], [], [], []],
    'admin_dashboard_students_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminDashboardController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/students']], [], [], []],
    'admin_dashboard_students_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminDashboardController::deleteStudent'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/students']], [], [], []],
    'admin_dashboard_students_toggle_active' => [['id'], ['_controller' => 'App\\Controller\\AdminDashboardController::toggleActive'], [], [['text', '/toggle-active'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/students']], [], [], []],
    'admin_dashboard_instructors' => [[], ['_controller' => 'App\\Controller\\AdminDashboardController::listInstructors'], [], [['text', '/admin/dashboard/instructors']], [], [], []],
    'admin_dashboard_instructors_new' => [[], ['_controller' => 'App\\Controller\\AdminDashboardController::newInstructor'], [], [['text', '/admin/dashboard/instructors/new']], [], [], []],
    'admin_dashboard_instructors_show' => [['id'], ['_controller' => 'App\\Controller\\AdminDashboardController::showInstructor'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/instructors']], [], [], []],
    'admin_dashboard_instructors_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminDashboardController::editInstructor'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/instructors']], [], [], []],
    'admin_dashboard_instructors_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminDashboardController::deleteInstructor'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/instructors']], [], [], []],
    'admin_dashboard_instructors_toggle_active' => [['id'], ['_controller' => 'App\\Controller\\AdminDashboardController::toggleActiveInstructor'], [], [['text', '/toggle-active'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/instructors']], [], [], []],
    'admin_dashboard_admins' => [[], ['_controller' => 'App\\Controller\\AdminDashboardController::listAdmins'], [], [['text', '/admin/dashboard/admins']], [], [], []],
    'admin_dashboard_admins_new' => [[], ['_controller' => 'App\\Controller\\AdminDashboardController::newAdmin'], [], [['text', '/admin/dashboard/admins/new']], [], [], []],
    'admin_dashboard_admins_show' => [['id'], ['_controller' => 'App\\Controller\\AdminDashboardController::showAdmin'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/admins']], [], [], []],
    'admin_dashboard_admins_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminDashboardController::editAdmin'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/admins']], [], [], []],
    'admin_dashboard_admins_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminDashboardController::deleteAdmin'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/admins']], [], [], []],
    'admin_dashboard_admins_toggle_active' => [['id'], ['_controller' => 'App\\Controller\\AdminDashboardController::toggleActiveAdmin'], [], [['text', '/toggle-active'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/admins']], [], [], []],
    'admin_dashboard_profile' => [[], ['_controller' => 'App\\Controller\\AdminDashboardController::viewProfile'], [], [['text', '/admin/dashboard/profile']], [], [], []],
    'admin_dashboard_admins_send_verification_code' => [['id'], ['_controller' => 'App\\Controller\\AdminDashboardController::sendVerificationCode'], [], [['text', '/send-verification-code'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/admins']], [], [], []],
    'admin_dashboard_admins_enter_verification_code' => [['id'], ['_controller' => 'App\\Controller\\AdminDashboardController::enterVerificationCode'], [], [['text', '/enter-verification-code'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/admins']], [], [], []],
    'admin_dashboard_admins_verify_account' => [['id'], ['_controller' => 'App\\Controller\\AdminDashboardController::verifyAccount'], [], [['text', '/verify-account'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/dashboard/admins']], [], [], []],
    'app_course_index_admin' => [[], ['_controller' => 'App\\Controller\\AdminDashboardController::indexadmin'], [], [['text', '/admin/dashboard/gerercourse']], [], [], []],
    'app_cmntt_index' => [[], ['_controller' => 'App\\Controller\\AdminDashboardController::listComments'], [], [['text', '/admin/dashboard/ListComments']], [], [], []],
    'list_postss' => [[], ['_controller' => 'App\\Controller\\AdminDashboardController::listPosts'], [], [['text', '/admin/dashboard/listPosts']], [], [], []],
    'statistiques_reclamations' => [[], ['_controller' => 'App\\Controller\\AdminDashboardController::countReclamations'], [], [['text', '/admin/dashboard/statistiques-reclamations']], [], [], []],
    'app_calendar' => [[], ['_controller' => 'App\\Controller\\CalendarController::index'], [], [['text', '/calendar']], [], [], []],
    'app_chapitre_index' => [['courseId'], ['_controller' => 'App\\Controller\\ChapitreController::index'], [], [['variable', '', '[^/]++', 'courseId', true], ['text', '/chapitre/bycourse']], [], [], []],
    'app_course_notifyStudents' => [['courseId'], ['_controller' => 'App\\Controller\\ChapitreController::notifyStudents'], [], [['text', '/notifyStudents'], ['variable', '', '[^/]++', 'courseId', true], ['text', '/chapitre/bycourse']], [], [], []],
    'app_course_ch_pdf' => [['courseId'], ['_controller' => 'App\\Controller\\ChapitreController::downloadPDFCourse'], [], [['text', '/pdf'], ['variable', '', '[^/]++', 'courseId', true], ['text', '/chapitre/bycourse']], [], [], []],
    'app_chapitre_error' => [[], ['_controller' => 'App\\Controller\\ChapitreController::error'], [], [['text', '/chapitre/chapitre/error']], [], [], []],
    'app_chapitre_new' => [['courseId'], ['_controller' => 'App\\Controller\\ChapitreController::new'], [], [['variable', '', '[^/]++', 'courseId', true], ['text', '/chapitre/new']], [], [], []],
    'app_chapitre_show' => [['id'], ['_controller' => 'App\\Controller\\ChapitreController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/chapitre']], [], [], []],
    'app_chapitre_edit' => [['id'], ['_controller' => 'App\\Controller\\ChapitreController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/chapitre']], [], [], []],
    'app_chapitre_edit_complete' => [['id', 'query'], ['_controller' => 'App\\Controller\\ChapitreController::complete'], [], [['variable', '=', '[^/]++', 'query', true], ['text', '/edit/complete&q'], ['variable', '/', '[^/]++', 'id', true], ['text', '/chapitre']], [], [], []],
    'app_chapitre_delete' => [['id'], ['_controller' => 'App\\Controller\\ChapitreController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/chapitre']], [], [], []],
    'app_chapitre_upload' => [['id'], ['_controller' => 'App\\Controller\\ChapitreController::upload'], [], [['text', '/edit/upload'], ['variable', '/', '[^/]++', 'id', true], ['text', '/chapitre']], [], [], []],
    'app_chapitre_edit_quizz' => [['id'], ['_controller' => 'App\\Controller\\ChapitreController::editQuizz'], [], [['text', '/edit/quizz'], ['variable', '/', '[^/]++', 'id', true], ['text', '/chapitre']], [], [], []],
    'app_course_viewer' => [['id'], ['_controller' => 'App\\Controller\\ChapitreController::viewCourse'], [], [['text', '/view'], ['variable', '/', '[^/]++', 'id', true], ['text', '/chapitre']], [], [], []],
    'app_chatgpt' => [[], ['_controller' => 'App\\Controller\\ChatgptController::index'], [], [['text', '/chatgpt']], [], [], []],
    'send_chat' => [[], ['_controller' => 'App\\Controller\\ChatgptController::chat'], [], [['text', '/chat']], [], [], []],
    'app_cmnt_index' => [[], ['_controller' => 'App\\Controller\\CmntController::index'], [], [['text', '/cmnt/']], [], [], []],
    'app_cmnt_new' => [['id'], ['_controller' => 'App\\Controller\\CmntController::new'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cmnt/new']], [], [], []],
    'app_cmnt_show' => [['id'], ['_controller' => 'App\\Controller\\CmntController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cmnt']], [], [], []],
    'app_cmnt_edit' => [['id'], ['_controller' => 'App\\Controller\\CmntController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/cmnt']], [], [], []],
    'app_cmnt_delete' => [['id'], ['_controller' => 'App\\Controller\\CmntController::deleteCmnt'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cmnt/deletcmnt']], [], [], []],
    'app_course_index' => [[], ['_controller' => 'App\\Controller\\CourseController::index'], [], [['text', '/course/']], [], [], []],
    'app_course_indexcatalogue' => [[], ['_controller' => 'App\\Controller\\CourseController::catalogue'], [], [['text', '/course/catalogue']], [], [], []],
    'app_course_new' => [[], ['_controller' => 'App\\Controller\\CourseController::new'], [], [['text', '/course/new']], [], [], []],
    'app_course_search' => [[], ['_controller' => 'App\\Controller\\CourseController::searchCourses'], [], [['text', '/course/courses/search']], [], [], []],
    'app_course_show' => [['courseId'], ['_controller' => 'App\\Controller\\CourseController::show'], [], [['variable', '/', '[^/]++', 'courseId', true], ['text', '/course']], [], [], []],
    'app_course_edit' => [['courseId'], ['_controller' => 'App\\Controller\\CourseController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'courseId', true], ['text', '/course']], [], [], []],
    'app_course_delete' => [['courseId'], ['_controller' => 'App\\Controller\\CourseController::delete'], [], [['variable', '/', '[^/]++', 'courseId', true], ['text', '/course']], [], [], []],
    'app_course_deleteprof' => [['courseId'], ['_controller' => 'App\\Controller\\CourseController::deletelelprof'], [], [['variable', '/', '[^/]++', 'courseId', true], ['text', '/course']], [], [], []],
    'app_course_pdf' => [['id'], ['_controller' => 'App\\Controller\\CourseController::generatePdf'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/course/course/pdf']], [], [], []],
    'app_donation_index' => [[], ['_controller' => 'App\\Controller\\DonationController::index'], [], [['text', '/donation/']], [], [], []],
    'app_donation_new' => [[], ['_controller' => 'App\\Controller\\DonationController::new'], [], [['text', '/donation/new']], [], [], []],
    'app_donation_show' => [['id'], ['_controller' => 'App\\Controller\\DonationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/donation']], [], [], []],
    'app_donation_edit' => [['id'], ['_controller' => 'App\\Controller\\DonationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/donation']], [], [], []],
    'app_donation_delete' => [['id'], ['_controller' => 'App\\Controller\\DonationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/donation']], [], [], []],
    'app_donation_search' => [[], ['_controller' => 'App\\Controller\\DonationController::search'], [], [['text', '/donation/donation/search']], [], [], []],
    'app_instructor_index' => [[], ['_controller' => 'App\\Controller\\InstructorController::index'], [], [['text', '/instructor/']], [], [], []],
    'app_instructor_new' => [[], ['_controller' => 'App\\Controller\\InstructorController::new'], [], [['text', '/instructor/new']], [], [], []],
    'app_instructor_show' => [['id'], ['_controller' => 'App\\Controller\\InstructorController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/instructor']], [], [], []],
    'app_instructor_edit' => [['id'], ['_controller' => 'App\\Controller\\InstructorController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/instructor']], [], [], []],
    'app_instructor_delete' => [['id'], ['_controller' => 'App\\Controller\\InstructorController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/instructor']], [], [], []],
    'instructor_dashboard' => [[], ['_controller' => 'App\\Controller\\InstructorDashboardController::instructordash'], [], [['text', '/instructor/dashboard/home']], [], [], []],
    'instructor_dashboard_profile' => [[], ['_controller' => 'App\\Controller\\InstructorDashboardController::viewProfile'], [], [['text', '/instructor/dashboard/profile']], [], [], []],
    'instructor_dashboard_send_verification_code' => [['id'], ['_controller' => 'App\\Controller\\InstructorDashboardController::sendVerificationCode'], [], [['text', '/send-verification-code'], ['variable', '/', '[^/]++', 'id', true], ['text', '/instructor/dashboard/instructor']], [], [], []],
    'instructor_dashboard_enter_verification_code' => [['id'], ['_controller' => 'App\\Controller\\InstructorDashboardController::enterVerificationCode'], [], [['text', '/enter-verification-code'], ['variable', '/', '[^/]++', 'id', true], ['text', '/instructor/dashboard/instructor']], [], [], []],
    'instructor_dashboard_verify_account' => [['id'], ['_controller' => 'App\\Controller\\InstructorDashboardController::verifyAccount'], [], [['text', '/verify-account'], ['variable', '/', '[^/]++', 'id', true], ['text', '/instructor/dashboard/instructor']], [], [], []],
    'instructor_dashboard_edit' => [['id'], ['_controller' => 'App\\Controller\\InstructorDashboardController::editInstructor'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/instructor/dashboard']], [], [], []],
    'app_review_index_prof' => [[], ['_controller' => 'App\\Controller\\InstructorDashboardController::index'], [], [['text', '/instructor/dashboard/review']], [], [], []],
    'app_payment_index' => [[], ['_controller' => 'App\\Controller\\Payment1Controller::index'], [], [['text', '/payment1/']], [], [], []],
    'app_payment_new' => [[], ['_controller' => 'App\\Controller\\Payment1Controller::new'], [], [['text', '/payment1/new']], [], [], []],
    'app_payment_show' => [['id'], ['_controller' => 'App\\Controller\\Payment1Controller::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/payment1']], [], [], []],
    'app_payment_edit' => [['id'], ['_controller' => 'App\\Controller\\Payment1Controller::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/payment1']], [], [], []],
    'app_payment_delete' => [['id'], ['_controller' => 'App\\Controller\\Payment1Controller::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/payment1']], [], [], []],
    'payment' => [[], ['_controller' => 'App\\Controller\\PaymentController::index'], [], [['text', '/payment']], [], [], []],
    'checkout' => [[], ['_controller' => 'App\\Controller\\PaymentController::checkout'], [], [['text', '/checkout']], [], [], []],
    'success_url' => [[], ['_controller' => 'App\\Controller\\PaymentController::successUrl'], [], [['text', '/success-url']], [], [], []],
    'cancel_url' => [[], ['_controller' => 'App\\Controller\\PaymentController::cancelUrl'], [], [['text', '/cancel-url']], [], [], []],
    'list' => [[], ['_controller' => 'App\\Controller\\PostController::index'], [], [['text', '/list']], [], [], []],
    'list_front' => [[], ['_controller' => 'App\\Controller\\PostController::listPosts'], [], [['text', '/listFont']], [], [], []],
    'app_post_new' => [[], ['_controller' => 'App\\Controller\\PostController::new'], [], [['text', '/newPost']], [], [], []],
    'postDetails' => [['id'], ['_controller' => 'App\\Controller\\PostController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/getPost']], [], [], []],
    'app_post_edit' => [['id'], ['_controller' => 'App\\Controller\\PostController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/editPost']], [], [], []],
    'app_post_delete' => [['id'], ['_controller' => 'App\\Controller\\PostController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deletepost']], [], [], []],
    'app_prof' => [[], ['_controller' => 'App\\Controller\\ProfController::index'], [], [['text', '/prof']], [], [], []],
    'prof_see_reviews' => [[], ['_controller' => 'App\\Controller\\ProfController::seereviews'], [], [['text', '/revieww']], [], [], []],
    'prof_see_stat' => [[], ['_controller' => 'App\\Controller\\ProfController::statistics'], [], [['text', '/profstatistique']], [], [], []],
    'mystudents' => [[], ['_controller' => 'App\\Controller\\ProfController::listStudents'], [], [['text', '/mystudents']], [], [], []],
    'prof_dashboard_profile' => [[], ['_controller' => 'App\\Controller\\ProfController::viewProfile'], [], [['text', '/profile']], [], [], []],
    'app_progresss' => [[], ['_controller' => 'App\\Controller\\ProfController::progresss'], [], [['text', '/progress']], [], [], []],
    'app_reclamation_index' => [[], ['_controller' => 'App\\Controller\\ReclamationController::index'], [], [['text', '/reclamation/']], [], [], []],
    'app_reclamation_new' => [[], ['_controller' => 'App\\Controller\\ReclamationController::new'], [], [['text', '/reclamation/new']], [], [], []],
    'app_reclamation_show' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation']], [], [], []],
    'app_reclamation_edit' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation']], [], [], []],
    'app_reclamation_delete' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation']], [], [], []],
    'app_reclamation_search' => [[], ['_controller' => 'App\\Controller\\ReclamationController::search'], [], [['text', '/reclamation/reclamation/search']], [], [], []],
    'send_email' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::sendEmail'], [], [['text', '/send_email'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation']], [], [], []],
    'mark_as_processed' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::markAsProcessed'], [], [['text', '/mark_as_processed'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register/student']], [], [], []],
    'app_register_instructor' => [[], ['_controller' => 'App\\Controller\\RegistrationController::registerInstructor'], [], [['text', '/register/instructor']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_send_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::sendEmail'], [], [['text', '/send/email']], [], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'app_review_index' => [[], ['_controller' => 'App\\Controller\\ReviewController::index'], [], [['text', '/review/']], [], [], []],
    'app_review_new' => [[], ['_controller' => 'App\\Controller\\ReviewController::new'], [], [['text', '/review/new']], [], [], []],
    'app_show_reviews' => [['courseId'], ['_controller' => 'App\\Controller\\ReviewController::showReviews'], [], [['variable', '/', '[^/]++', 'courseId', true], ['text', '/review/show_reviews']], [], [], []],
    'app_review_show_student' => [['courseId'], ['_controller' => 'App\\Controller\\ReviewController::showreviewstudent'], [], [['variable', '/', '[^/]++', 'courseId', true], ['text', '/review/showreviewstudnet']], [], [], []],
    'app_review_show' => [['reviewid'], ['_controller' => 'App\\Controller\\ReviewController::show'], [], [['variable', '/', '[^/]++', 'reviewid', true], ['text', '/review']], [], [], []],
    'app_review_edit' => [['reviewid'], ['_controller' => 'App\\Controller\\ReviewController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'reviewid', true], ['text', '/review']], [], [], []],
    'app_review_delete' => [['reviewid'], ['_controller' => 'App\\Controller\\ReviewController::delete'], [], [['variable', '/', '[^/]++', 'reviewid', true], ['text', '/review']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_review_stat' => [[], ['_controller' => 'App\\Controller\\StatistiqueController::statistics'], [], [['text', '/statistique']], [], [], []],
    'app_student_index' => [[], ['_controller' => 'App\\Controller\\StudentController::index'], [], [['text', '/student/']], [], [], []],
    'app_student_new' => [[], ['_controller' => 'App\\Controller\\StudentController::new'], [], [['text', '/student/new']], [], [], []],
    'app_student_show' => [['id'], ['_controller' => 'App\\Controller\\StudentController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/student']], [], [], []],
    'app_student_edit' => [['id'], ['_controller' => 'App\\Controller\\StudentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/student']], [], [], []],
    'app_student_delete' => [['id'], ['_controller' => 'App\\Controller\\StudentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/student']], [], [], []],
    'student_dashboard' => [[], ['_controller' => 'App\\Controller\\StudentDashboardController::index'], [], [['text', '/student/dashboard/home']], [], [], []],
    'student_dashboard_profile' => [[], ['_controller' => 'App\\Controller\\StudentDashboardController::viewProfile'], [], [['text', '/student/dashboard/profile']], [], [], []],
    'student_dashboard_send_verification_code' => [['id'], ['_controller' => 'App\\Controller\\StudentDashboardController::sendVerificationCode'], [], [['text', '/send-verification-code'], ['variable', '/', '[^/]++', 'id', true], ['text', '/student/dashboard/student']], [], [], []],
    'student_dashboard_enter_verification_code' => [['id'], ['_controller' => 'App\\Controller\\StudentDashboardController::enterVerificationCode'], [], [['text', '/enter-verification-code'], ['variable', '/', '[^/]++', 'id', true], ['text', '/student/dashboard/student']], [], [], []],
    'student_dashboard_verify_account' => [['id'], ['_controller' => 'App\\Controller\\StudentDashboardController::verifyAccount'], [], [['text', '/verify-account'], ['variable', '/', '[^/]++', 'id', true], ['text', '/student/dashboard/student']], [], [], []],
    'student_dashboard_edit' => [['id'], ['_controller' => 'App\\Controller\\StudentDashboardController::editStudent'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/student/dashboard']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '2fa_login' => [[], ['_controller' => 'scheb_two_factor.form_controller::form'], [], [['text', '/2fa']], [], [], []],
    '2fa_login_check' => [[], [], [], [['text', '/2fa_check']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_random_card' => [[], ['_controller' => 'App\\Controller\\CourseController::randomCard'], [], [['text', '/random_card']], [], [], []],
    'app_default_route' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_calendar_load_events' => [[], ['_controller' => 'App\\Controller\\CalendarController::loadEvents'], [], [['text', '/calendar/load-events']], [], [], []],
];
