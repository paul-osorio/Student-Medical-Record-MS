<?php
    // start session
    session_start();

    // connection
    include "./includes/db_con.php";

    $stud_id = $_SESSION['student_id'];

    if(empty($stud_id)){

        header("location: student-login.php");
        
    } else {

        $sel_stud = "SELECT *, LEFT(stud.middlename, 1) as `m_ini` FROM `students` stud
        JOIN `course` c
        ON stud.course = c.code
        WHERE `student_id` = '$stud_id'";
        $res_stud = mysqli_query($conn, $sel_stud);
    
        $stud_logged = mysqli_fetch_assoc($res_stud);
        
    }


?>
    
    <div class="sidebar position-fixed top-0 bottom-0" style=background:var(--primary-bg)> 
        <div class="d-flex flex-column justify-content-center align-items-center p-3">
            
          <div class="d-flex flex-column justify-content-center align-items-center mt-4 p-2">
            <i class="fa-solid fa-user"  style="font-size: var(--step-5);"></i>
            <p class="text-white my-3 text-center" style="font-size: var(--step--1);"><?=$stud_logged['lastname']?>, <?=$stud_logged['firstname']?> <?=$stud_logged['middlename']?> </p>
            <p class="text-white" style="font-size: var(--step--0)"> <?=$stud_logged['email']?> </p>
          </div>

        </div>
        <ul class="sidebar-menu p-3 m-0 mb-0">
            <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase text-light">Main</li>
            <li class="sidebar-menu-item has-dropdown">
                <a href="#">
                    <i class="ri-pages-line sidebar-menu-item-icon"></i>
                    <span class="text-light fs-6 ">Medical Status</span>
                    <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                </a>
                <ul class="sidebar-dropdown-menu">
                    <a href="./student-personal-info.php">
                    <li class="sidebar-dropdown-menu-item has-dropdown">
                           Personal Information
                            <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                        </li>
                    </a>
                    <a href="./student-medical-requirement.php">
                    <li class="sidebar-dropdown-menu-item has-dropdown">
                           Medical Requirements
                            <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                        </li>
                    </a>
                    <a href="./student-medical-history.php">
                    <li class="sidebar-dropdown-menu-item has-dropdown">
                            Medical History
                            <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                        </li>
                    </a>
                    <a href="./student-health-history.php">
                    <li class="sidebar-dropdown-menu-item has-dropdown">
                            Health History
                            <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                        </li>
                    </a>

                    <a href="./student-appointment.php">
                    <li class="sidebar-dropdown-menu-item has-dropdown">
                           Appointment
                            <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                        </li>
                    </a>

                </ul>
            </li>
            <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase text-white">Settings</li>
          
            <li class="sidebar-menu-item">
                <a href="./student-manage-account.php">
                    <i class="ri-calendar-line sidebar-menu-item-icon"></i>
                    <span class="text-light fs-6">Manage Account</span>
                </a>
            </li>
            <li class="sidebar-menu-item">
                <a href="./logout.php">
                    <i class="ri-calendar-line sidebar-menu-item-icon"></i>
                    <span class="text-light fs-6">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar-overlay"></div>
    <!-- end: Sidebar -->