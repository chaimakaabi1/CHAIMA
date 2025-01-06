<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/abonnement' => [[['_route' => 'app_abonnement_index', '_controller' => 'App\\Controller\\AbonnementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/abonnement/new' => [[['_route' => 'app_abonnement_new', '_controller' => 'App\\Controller\\AbonnementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/new' => [[['_route' => 'app_admin_new', '_controller' => 'App\\Controller\\AdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/dashboard/home' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/dashboard/students' => [[['_route' => 'admin_dashboard_students', '_controller' => 'App\\Controller\\AdminDashboardController::listStudents'], null, ['GET' => 0], null, false, false, null]],
        '/admin/dashboard/reclamation' => [[['_route' => 'admin_dashboard_reclamation', '_controller' => 'App\\Controller\\AdminDashboardController::listreclamation'], null, ['GET' => 0], null, false, false, null]],
        '/admin/dashboard/donation' => [[['_route' => 'admin_dashboard_donation', '_controller' => 'App\\Controller\\AdminDashboardController::listdonation'], null, ['GET' => 0], null, false, false, null]],
        '/admin/dashboard/students/new' => [[['_route' => 'admin_dashboard_students_new', '_controller' => 'App\\Controller\\AdminDashboardController::newStudent'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/dashboard/instructors' => [[['_route' => 'admin_dashboard_instructors', '_controller' => 'App\\Controller\\AdminDashboardController::listInstructors'], null, ['GET' => 0], null, false, false, null]],
        '/admin/dashboard/instructors/new' => [[['_route' => 'admin_dashboard_instructors_new', '_controller' => 'App\\Controller\\AdminDashboardController::newInstructor'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/dashboard/admins' => [[['_route' => 'admin_dashboard_admins', '_controller' => 'App\\Controller\\AdminDashboardController::listAdmins'], null, ['GET' => 0], null, false, false, null]],
        '/admin/dashboard/admins/new' => [[['_route' => 'admin_dashboard_admins_new', '_controller' => 'App\\Controller\\AdminDashboardController::newAdmin'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/dashboard/profile' => [[['_route' => 'admin_dashboard_profile', '_controller' => 'App\\Controller\\AdminDashboardController::viewProfile'], null, null, null, false, false, null]],
        '/admin/dashboard/gerercourse' => [[['_route' => 'app_course_index_admin', '_controller' => 'App\\Controller\\AdminDashboardController::indexadmin'], null, ['GET' => 0], null, false, false, null]],
        '/admin/dashboard/ListComments' => [[['_route' => 'app_cmntt_index', '_controller' => 'App\\Controller\\AdminDashboardController::listComments'], null, ['GET' => 0], null, false, false, null]],
        '/admin/dashboard/listPosts' => [[['_route' => 'list_postss', '_controller' => 'App\\Controller\\AdminDashboardController::listPosts'], null, ['GET' => 0], null, false, false, null]],
        '/admin/dashboard/statistiques-reclamations' => [[['_route' => 'statistiques_reclamations', '_controller' => 'App\\Controller\\AdminDashboardController::countReclamations'], null, null, null, false, false, null]],
        '/calendar' => [[['_route' => 'app_calendar', '_controller' => 'App\\Controller\\CalendarController::index'], null, null, null, false, false, null]],
        '/chapitre/chapitre/error' => [[['_route' => 'app_chapitre_error', '_controller' => 'App\\Controller\\ChapitreController::error'], null, null, null, false, false, null]],
        '/chatgpt' => [[['_route' => 'app_chatgpt', '_controller' => 'App\\Controller\\ChatgptController::index'], null, null, null, false, false, null]],
        '/chat' => [[['_route' => 'send_chat', '_controller' => 'App\\Controller\\ChatgptController::chat'], null, ['POST' => 0], null, false, false, null]],
        '/cmnt' => [[['_route' => 'app_cmnt_index', '_controller' => 'App\\Controller\\CmntController::index'], null, ['GET' => 0], null, true, false, null]],
        '/course' => [[['_route' => 'app_course_index', '_controller' => 'App\\Controller\\CourseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/course/catalogue' => [[['_route' => 'app_course_indexcatalogue', '_controller' => 'App\\Controller\\CourseController::catalogue'], null, ['GET' => 0], null, false, false, null]],
        '/course/new' => [[['_route' => 'app_course_new', '_controller' => 'App\\Controller\\CourseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/course/courses/search' => [[['_route' => 'app_course_search', '_controller' => 'App\\Controller\\CourseController::searchCourses'], null, ['GET' => 0], null, false, false, null]],
        '/donation' => [[['_route' => 'app_donation_index', '_controller' => 'App\\Controller\\DonationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/donation/new' => [[['_route' => 'app_donation_new', '_controller' => 'App\\Controller\\DonationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/donation/donation/search' => [[['_route' => 'app_donation_search', '_controller' => 'App\\Controller\\DonationController::search'], null, ['GET' => 0], null, false, false, null]],
        '/instructor' => [[['_route' => 'app_instructor_index', '_controller' => 'App\\Controller\\InstructorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/instructor/new' => [[['_route' => 'app_instructor_new', '_controller' => 'App\\Controller\\InstructorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/instructor/dashboard/home' => [[['_route' => 'instructor_dashboard', '_controller' => 'App\\Controller\\InstructorDashboardController::instructordash'], null, ['GET' => 0], null, false, false, null]],
        '/instructor/dashboard/profile' => [[['_route' => 'instructor_dashboard_profile', '_controller' => 'App\\Controller\\InstructorDashboardController::viewProfile'], null, null, null, false, false, null]],
        '/instructor/dashboard/review' => [[['_route' => 'app_review_index_prof', '_controller' => 'App\\Controller\\InstructorDashboardController::index'], null, ['GET' => 0], null, false, false, null]],
        '/payment1' => [[['_route' => 'app_payment_index', '_controller' => 'App\\Controller\\Payment1Controller::index'], null, ['GET' => 0], null, true, false, null]],
        '/payment1/new' => [[['_route' => 'app_payment_new', '_controller' => 'App\\Controller\\Payment1Controller::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/payment' => [[['_route' => 'payment', '_controller' => 'App\\Controller\\PaymentController::index'], null, null, null, false, false, null]],
        '/checkout' => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\PaymentController::checkout'], null, null, null, false, false, null]],
        '/success-url' => [[['_route' => 'success_url', '_controller' => 'App\\Controller\\PaymentController::successUrl'], null, null, null, false, false, null]],
        '/cancel-url' => [[['_route' => 'cancel_url', '_controller' => 'App\\Controller\\PaymentController::cancelUrl'], null, null, null, false, false, null]],
        '/list' => [[['_route' => 'list', '_controller' => 'App\\Controller\\PostController::index'], null, ['GET' => 0], null, false, false, null]],
        '/listFont' => [[['_route' => 'list_front', '_controller' => 'App\\Controller\\PostController::listPosts'], null, ['GET' => 0], null, false, false, null]],
        '/newPost' => [[['_route' => 'app_post_new', '_controller' => 'App\\Controller\\PostController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/prof' => [[['_route' => 'app_prof', '_controller' => 'App\\Controller\\ProfController::index'], null, null, null, false, false, null]],
        '/revieww' => [[['_route' => 'prof_see_reviews', '_controller' => 'App\\Controller\\ProfController::seereviews'], null, ['GET' => 0], null, false, false, null]],
        '/profstatistique' => [[['_route' => 'prof_see_stat', '_controller' => 'App\\Controller\\ProfController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/mystudents' => [[['_route' => 'mystudents', '_controller' => 'App\\Controller\\ProfController::listStudents'], null, ['GET' => 0], null, false, false, null]],
        '/profile' => [[['_route' => 'prof_dashboard_profile', '_controller' => 'App\\Controller\\ProfController::viewProfile'], null, null, null, false, false, null]],
        '/progress' => [[['_route' => 'app_progresss', '_controller' => 'App\\Controller\\ProfController::progresss'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/reclamation/search' => [[['_route' => 'app_reclamation_search', '_controller' => 'App\\Controller\\ReclamationController::search'], null, ['GET' => 0], null, false, false, null]],
        '/register/student' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/register/instructor' => [[['_route' => 'app_register_instructor', '_controller' => 'App\\Controller\\RegistrationController::registerInstructor'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/send/email' => [[['_route' => 'app_send_email', '_controller' => 'App\\Controller\\RegistrationController::sendEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/review' => [[['_route' => 'app_review_index', '_controller' => 'App\\Controller\\ReviewController::index'], null, ['GET' => 0], null, true, false, null]],
        '/review/new' => [[['_route' => 'app_review_new', '_controller' => 'App\\Controller\\ReviewController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/statistique' => [[['_route' => 'app_review_stat', '_controller' => 'App\\Controller\\StatistiqueController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/student' => [[['_route' => 'app_student_index', '_controller' => 'App\\Controller\\StudentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/student/new' => [[['_route' => 'app_student_new', '_controller' => 'App\\Controller\\StudentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/student/dashboard/home' => [[['_route' => 'student_dashboard', '_controller' => 'App\\Controller\\StudentDashboardController::index'], null, null, null, false, false, null]],
        '/student/dashboard/profile' => [[['_route' => 'student_dashboard_profile', '_controller' => 'App\\Controller\\StudentDashboardController::viewProfile'], null, null, null, false, false, null]],
        '/2fa' => [[['_route' => '2fa_login', '_controller' => 'scheb_two_factor.form_controller::form'], null, null, null, false, false, null]],
        '/2fa_check' => [[['_route' => '2fa_login_check'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/random_card' => [[['_route' => 'app_random_card', '_controller' => 'App\\Controller\\CourseController::randomCard'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_default_route', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/calendar/load-events' => [[['_route' => 'app_calendar_load_events', '_controller' => 'App\\Controller\\CalendarController::loadEvents'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|bonnement/(?'
                        .'|([^/]++)(?'
                            .'|(*:36)'
                            .'|/edit(*:48)'
                            .'|(*:55)'
                        .')'
                        .'|abonnement/([^/]++)/generate\\-pdf(*:96)'
                    .')'
                    .'|dmin/(?'
                        .'|([^/]++)(?'
                            .'|(*:123)'
                            .'|/edit(*:136)'
                            .'|(*:144)'
                        .')'
                        .'|dashboard/(?'
                            .'|students/([^/]++)(?'
                                .'|(*:186)'
                                .'|/(?'
                                    .'|edit(*:202)'
                                    .'|toggle\\-active(*:224)'
                                .')'
                                .'|(*:233)'
                            .')'
                            .'|reclamation/([^/]++)(*:262)'
                            .'|donation/([^/]++)(*:287)'
                            .'|instructors/([^/]++)(?'
                                .'|(*:318)'
                                .'|/(?'
                                    .'|edit(*:334)'
                                    .'|toggle\\-active(*:356)'
                                .')'
                                .'|(*:365)'
                            .')'
                            .'|admins/([^/]++)(?'
                                .'|(*:392)'
                                .'|/(?'
                                    .'|e(?'
                                        .'|dit(*:411)'
                                        .'|nter\\-verification\\-code(*:443)'
                                    .')'
                                    .'|toggle\\-active(*:466)'
                                    .'|send\\-verification\\-code(*:498)'
                                    .'|verify\\-account(*:521)'
                                .')'
                                .'|(*:530)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|hapitre/(?'
                        .'|bycourse([^/]++)(?'
                            .'|(*:577)'
                            .'|/(?'
                                .'|notifyStudents(*:603)'
                                .'|pdf(*:614)'
                            .')'
                        .')'
                        .'|new([^/]++)(*:635)'
                        .'|([^/]++)(?'
                            .'|(*:654)'
                            .'|/(?'
                                .'|edit(?'
                                    .'|(*:673)'
                                    .'|/(?'
                                        .'|complete&q\\=([^/]++)(*:705)'
                                        .'|upload(*:719)'
                                        .'|quizz(*:732)'
                                    .')'
                                .')'
                                .'|view(*:746)'
                            .')'
                            .'|(*:755)'
                        .')'
                    .')'
                    .'|mnt/(?'
                        .'|new/([^/]++)(*:784)'
                        .'|([^/]++)(?'
                            .'|(*:803)'
                            .'|/edit(*:816)'
                        .')'
                        .'|deletcmnt/([^/]++)(*:843)'
                    .')'
                    .'|ourse/(?'
                        .'|([^/]++)(?'
                            .'|(*:872)'
                            .'|/edit(*:885)'
                            .'|(*:893)'
                        .')'
                        .'|course/pdf/([^/]++)(*:921)'
                    .')'
                .')'
                .'|/d(?'
                    .'|onation/([^/]++)(?'
                        .'|(*:955)'
                        .'|/edit(*:968)'
                        .'|(*:976)'
                    .')'
                    .'|eletepost/([^/]++)(*:1003)'
                .')'
                .'|/instructor/(?'
                    .'|([^/]++)(?'
                        .'|(*:1039)'
                        .'|/edit(*:1053)'
                        .'|(*:1062)'
                    .')'
                    .'|dashboard/(?'
                        .'|instructor/([^/]++)/(?'
                            .'|send\\-verification\\-code(*:1132)'
                            .'|enter\\-verification\\-code(*:1166)'
                            .'|verify\\-account(*:1190)'
                        .')'
                        .'|([^/]++)/edit(*:1213)'
                    .')'
                .')'
                .'|/payment1/([^/]++)(?'
                    .'|(*:1245)'
                    .'|/edit(*:1259)'
                    .'|(*:1268)'
                .')'
                .'|/getPost/([^/]++)(*:1295)'
                .'|/editPost/([^/]++)(*:1322)'
                .'|/re(?'
                    .'|clamation/([^/]++)(?'
                        .'|(*:1358)'
                        .'|/(?'
                            .'|edit(*:1375)'
                            .'|send_email(*:1394)'
                            .'|mark_as_processed(*:1420)'
                        .')'
                        .'|(*:1430)'
                    .')'
                    .'|set\\-password/reset(?:/([^/]++))?(*:1473)'
                    .'|view/(?'
                        .'|show(?'
                            .'|_reviews/([^/]++)(*:1514)'
                            .'|reviewstudnet/([^/]++)(*:1545)'
                        .')'
                        .'|([^/]++)(?'
                            .'|(*:1566)'
                            .'|/edit(*:1580)'
                            .'|(*:1589)'
                        .')'
                    .')'
                .')'
                .'|/student/(?'
                    .'|([^/]++)(?'
                        .'|(*:1624)'
                        .'|/edit(*:1638)'
                        .'|(*:1647)'
                    .')'
                    .'|dashboard/(?'
                        .'|student/([^/]++)/(?'
                            .'|send\\-verification\\-code(*:1714)'
                            .'|enter\\-verification\\-code(*:1748)'
                            .'|verify\\-account(*:1772)'
                        .')'
                        .'|([^/]++)/edit(*:1795)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1837)'
                    .'|wdt/([^/]++)(*:1858)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1905)'
                            .'|router(*:1920)'
                            .'|exception(?'
                                .'|(*:1941)'
                                .'|\\.css(*:1955)'
                            .')'
                        .')'
                        .'|(*:1966)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        36 => [[['_route' => 'app_abonnement_show', '_controller' => 'App\\Controller\\AbonnementController::show'], ['idAbonnement'], ['GET' => 0], null, false, true, null]],
        48 => [[['_route' => 'app_abonnement_edit', '_controller' => 'App\\Controller\\AbonnementController::edit'], ['idAbonnement'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        55 => [[['_route' => 'app_abonnement_delete', '_controller' => 'App\\Controller\\AbonnementController::delete'], ['idAbonnement'], ['POST' => 0], null, false, true, null]],
        96 => [[['_route' => 'generate_abonnement_pdf', '_controller' => 'App\\Controller\\AbonnementController::generateAbonnementPDF'], ['id'], null, null, false, false, null]],
        123 => [[['_route' => 'app_admin_show', '_controller' => 'App\\Controller\\AdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        136 => [[['_route' => 'app_admin_edit', '_controller' => 'App\\Controller\\AdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        144 => [[['_route' => 'app_admin_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        186 => [[['_route' => 'admin_dashboard_students_show', '_controller' => 'App\\Controller\\AdminDashboardController::showStudent'], ['id'], ['GET' => 0], null, false, true, null]],
        202 => [[['_route' => 'admin_dashboard_students_edit', '_controller' => 'App\\Controller\\AdminDashboardController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        224 => [[['_route' => 'admin_dashboard_students_toggle_active', '_controller' => 'App\\Controller\\AdminDashboardController::toggleActive'], ['id'], ['POST' => 0], null, false, false, null]],
        233 => [[['_route' => 'admin_dashboard_students_delete', '_controller' => 'App\\Controller\\AdminDashboardController::deleteStudent'], ['id'], ['POST' => 0], null, false, true, null]],
        262 => [[['_route' => 'admin_dashboard_reclamation_show', '_controller' => 'App\\Controller\\AdminDashboardController::showReclamation'], ['id'], ['GET' => 0], null, false, true, null]],
        287 => [[['_route' => 'admin_dashboard_donation_show', '_controller' => 'App\\Controller\\AdminDashboardController::showdonation'], ['id'], ['GET' => 0], null, false, true, null]],
        318 => [[['_route' => 'admin_dashboard_instructors_show', '_controller' => 'App\\Controller\\AdminDashboardController::showInstructor'], ['id'], ['GET' => 0], null, false, true, null]],
        334 => [[['_route' => 'admin_dashboard_instructors_edit', '_controller' => 'App\\Controller\\AdminDashboardController::editInstructor'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        356 => [[['_route' => 'admin_dashboard_instructors_toggle_active', '_controller' => 'App\\Controller\\AdminDashboardController::toggleActiveInstructor'], ['id'], ['POST' => 0], null, false, false, null]],
        365 => [[['_route' => 'admin_dashboard_instructors_delete', '_controller' => 'App\\Controller\\AdminDashboardController::deleteInstructor'], ['id'], ['POST' => 0], null, false, true, null]],
        392 => [[['_route' => 'admin_dashboard_admins_show', '_controller' => 'App\\Controller\\AdminDashboardController::showAdmin'], ['id'], ['GET' => 0], null, false, true, null]],
        411 => [[['_route' => 'admin_dashboard_admins_edit', '_controller' => 'App\\Controller\\AdminDashboardController::editAdmin'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        443 => [[['_route' => 'admin_dashboard_admins_enter_verification_code', '_controller' => 'App\\Controller\\AdminDashboardController::enterVerificationCode'], ['id'], ['GET' => 0], null, false, false, null]],
        466 => [[['_route' => 'admin_dashboard_admins_toggle_active', '_controller' => 'App\\Controller\\AdminDashboardController::toggleActiveAdmin'], ['id'], ['POST' => 0], null, false, false, null]],
        498 => [[['_route' => 'admin_dashboard_admins_send_verification_code', '_controller' => 'App\\Controller\\AdminDashboardController::sendVerificationCode'], ['id'], ['POST' => 0], null, false, false, null]],
        521 => [[['_route' => 'admin_dashboard_admins_verify_account', '_controller' => 'App\\Controller\\AdminDashboardController::verifyAccount'], ['id'], ['POST' => 0], null, false, false, null]],
        530 => [[['_route' => 'admin_dashboard_admins_delete', '_controller' => 'App\\Controller\\AdminDashboardController::deleteAdmin'], ['id'], ['POST' => 0], null, false, true, null]],
        577 => [[['_route' => 'app_chapitre_index', '_controller' => 'App\\Controller\\ChapitreController::index'], ['courseId'], ['GET' => 0], null, false, true, null]],
        603 => [[['_route' => 'app_course_notifyStudents', '_controller' => 'App\\Controller\\ChapitreController::notifyStudents'], ['courseId'], ['GET' => 0], null, false, false, null]],
        614 => [[['_route' => 'app_course_ch_pdf', '_controller' => 'App\\Controller\\ChapitreController::downloadPDFCourse'], ['courseId'], ['GET' => 0], null, false, false, null]],
        635 => [[['_route' => 'app_chapitre_new', '_controller' => 'App\\Controller\\ChapitreController::new'], ['courseId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        654 => [[['_route' => 'app_chapitre_show', '_controller' => 'App\\Controller\\ChapitreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        673 => [[['_route' => 'app_chapitre_edit', '_controller' => 'App\\Controller\\ChapitreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        705 => [[['_route' => 'app_chapitre_edit_complete', '_controller' => 'App\\Controller\\ChapitreController::complete'], ['id', 'query'], ['GET' => 0], null, false, true, null]],
        719 => [[['_route' => 'app_chapitre_upload', '_controller' => 'App\\Controller\\ChapitreController::upload'], ['id'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        732 => [[['_route' => 'app_chapitre_edit_quizz', '_controller' => 'App\\Controller\\ChapitreController::editQuizz'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        746 => [[['_route' => 'app_course_viewer', '_controller' => 'App\\Controller\\ChapitreController::viewCourse'], ['id'], ['GET' => 0], null, false, false, null]],
        755 => [[['_route' => 'app_chapitre_delete', '_controller' => 'App\\Controller\\ChapitreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        784 => [[['_route' => 'app_cmnt_new', '_controller' => 'App\\Controller\\CmntController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        803 => [[['_route' => 'app_cmnt_show', '_controller' => 'App\\Controller\\CmntController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        816 => [[['_route' => 'app_cmnt_edit', '_controller' => 'App\\Controller\\CmntController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        843 => [[['_route' => 'app_cmnt_delete', '_controller' => 'App\\Controller\\CmntController::deleteCmnt'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        872 => [[['_route' => 'app_course_show', '_controller' => 'App\\Controller\\CourseController::show'], ['courseId'], ['GET' => 0], null, false, true, null]],
        885 => [[['_route' => 'app_course_edit', '_controller' => 'App\\Controller\\CourseController::edit'], ['courseId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        893 => [
            [['_route' => 'app_course_delete', '_controller' => 'App\\Controller\\CourseController::delete'], ['courseId'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_course_deleteprof', '_controller' => 'App\\Controller\\CourseController::deletelelprof'], ['courseId'], ['POST' => 0], null, false, true, null],
        ],
        921 => [[['_route' => 'app_course_pdf', '_controller' => 'App\\Controller\\CourseController::generatePdf'], ['id'], null, null, false, true, null]],
        955 => [[['_route' => 'app_donation_show', '_controller' => 'App\\Controller\\DonationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        968 => [[['_route' => 'app_donation_edit', '_controller' => 'App\\Controller\\DonationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        976 => [[['_route' => 'app_donation_delete', '_controller' => 'App\\Controller\\DonationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1003 => [[['_route' => 'app_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1039 => [[['_route' => 'app_instructor_show', '_controller' => 'App\\Controller\\InstructorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1053 => [[['_route' => 'app_instructor_edit', '_controller' => 'App\\Controller\\InstructorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1062 => [[['_route' => 'app_instructor_delete', '_controller' => 'App\\Controller\\InstructorController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1132 => [[['_route' => 'instructor_dashboard_send_verification_code', '_controller' => 'App\\Controller\\InstructorDashboardController::sendVerificationCode'], ['id'], ['POST' => 0], null, false, false, null]],
        1166 => [[['_route' => 'instructor_dashboard_enter_verification_code', '_controller' => 'App\\Controller\\InstructorDashboardController::enterVerificationCode'], ['id'], ['GET' => 0], null, false, false, null]],
        1190 => [[['_route' => 'instructor_dashboard_verify_account', '_controller' => 'App\\Controller\\InstructorDashboardController::verifyAccount'], ['id'], ['POST' => 0], null, false, false, null]],
        1213 => [[['_route' => 'instructor_dashboard_edit', '_controller' => 'App\\Controller\\InstructorDashboardController::editInstructor'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1245 => [[['_route' => 'app_payment_show', '_controller' => 'App\\Controller\\Payment1Controller::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1259 => [[['_route' => 'app_payment_edit', '_controller' => 'App\\Controller\\Payment1Controller::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1268 => [[['_route' => 'app_payment_delete', '_controller' => 'App\\Controller\\Payment1Controller::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1295 => [[['_route' => 'postDetails', '_controller' => 'App\\Controller\\PostController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1322 => [[['_route' => 'app_post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1358 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1375 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1394 => [[['_route' => 'send_email', '_controller' => 'App\\Controller\\ReclamationController::sendEmail'], ['id'], ['POST' => 0], null, false, false, null]],
        1420 => [[['_route' => 'mark_as_processed', '_controller' => 'App\\Controller\\ReclamationController::markAsProcessed'], ['id'], ['POST' => 0], null, false, false, null]],
        1430 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1473 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1514 => [[['_route' => 'app_show_reviews', '_controller' => 'App\\Controller\\ReviewController::showReviews'], ['courseId'], ['GET' => 0], null, false, true, null]],
        1545 => [[['_route' => 'app_review_show_student', '_controller' => 'App\\Controller\\ReviewController::showreviewstudent'], ['courseId'], ['GET' => 0], null, false, true, null]],
        1566 => [[['_route' => 'app_review_show', '_controller' => 'App\\Controller\\ReviewController::show'], ['reviewid'], ['GET' => 0], null, false, true, null]],
        1580 => [[['_route' => 'app_review_edit', '_controller' => 'App\\Controller\\ReviewController::edit'], ['reviewid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1589 => [[['_route' => 'app_review_delete', '_controller' => 'App\\Controller\\ReviewController::delete'], ['reviewid'], ['POST' => 0], null, false, true, null]],
        1624 => [[['_route' => 'app_student_show', '_controller' => 'App\\Controller\\StudentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1638 => [[['_route' => 'app_student_edit', '_controller' => 'App\\Controller\\StudentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1647 => [[['_route' => 'app_student_delete', '_controller' => 'App\\Controller\\StudentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1714 => [[['_route' => 'student_dashboard_send_verification_code', '_controller' => 'App\\Controller\\StudentDashboardController::sendVerificationCode'], ['id'], ['POST' => 0], null, false, false, null]],
        1748 => [[['_route' => 'student_dashboard_enter_verification_code', '_controller' => 'App\\Controller\\StudentDashboardController::enterVerificationCode'], ['id'], ['GET' => 0], null, false, false, null]],
        1772 => [[['_route' => 'student_dashboard_verify_account', '_controller' => 'App\\Controller\\StudentDashboardController::verifyAccount'], ['id'], ['POST' => 0], null, false, false, null]],
        1795 => [[['_route' => 'student_dashboard_edit', '_controller' => 'App\\Controller\\StudentDashboardController::editStudent'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1837 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1858 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1905 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1920 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1941 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1955 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1966 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
