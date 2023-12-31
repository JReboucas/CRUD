<?php  session_start(); ?>
<div class="bg-sidebar vh-100 w-50 position-fixed">
            <div class="log d-flex justify-content-between">
                <h1 class="E-classe text-start text-white ms-3 ps-1 mt-3 h6 fw-bold">E-classe</h1>
                <i class="far fa-times h4 me-3 close align-self-end d-md-none"></i>
            </div>
            <div class="img-admin d-flex flex-column align-items-center text-center gap-2">
                <img class="rounded-circle" src="../assets/img/img-admin.jpeg" alt="img-admin" height="120" width="120">
                <h2 class="h6 fw-bold text-white"><?php echo $_SESSION['name']; ?></h2>
                <span class="h7 admin-color text-white">admin</span>
            </div>
            <div class=" bg-list d-flex flex-column align-items-center fw-bold gap-2 mt-4 ">
                <ul class="d-flex flex-column list-unstyled">
                        <li class="h7"><a class="nav-link text-white" href="dashboard.php"><i
                            class="fal fa-home-lg-alt me-2 text-white"></i> <span>Home</span></a></li>
                    <li class="h7"><a class=" nav-link text-white" href="course.php"><i
                                class="fal fa-bookmark me-2 text-white"></i> <span>Cursos</span></a></li>
                    <li class="h7"><a class=" nav-link text-white" href="students_list.php"><i
                                class="far fa-graduation-cap me-2 text-white"></i> <span>Estudantes</span></a></li>
                    <li class="h7"><a class=" nav-link text-white" href="payment_details.php"><i
                                class="fal fa-usd-square me-2 text-white"></i> <span>Pagamentos</span></a></li>
                    <li class="h7"><a class=" nav-link text-white" href=""><i
                                class="fal fa-file-chart-line me-2 text-white"></i> <span>Reportar</span></a></li>
                    <li class="h7"><a class=" nav-link text-white" href=""><i
                                class="fal fa-sliders-v-square me-2 text-white"></i> <span>Configurações</span></a></li>
                </ul>
                <ul class="logout d-flex justify-content-start list-unstyled">
                    <li class=" h7"><a class="nav-link text-white" href="../index.php"><span>Logout</span><i
                                class="fal fa-sign-out-alt ms-2"></i></a></li>
                </ul>
            </div>

        </div>