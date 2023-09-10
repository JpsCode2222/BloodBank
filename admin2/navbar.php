
<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="assets/images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?php echo $_SESSION['admin']?></span>
                  <span class="text-secondary text-small">Admin</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Doner</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account-plus menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic3">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add_doner.php">Add Doner</a></li>
                  <li class="nav-item"> <a class="nav-link" href="doner_list.php">Doner List</a></li>
                  <li class="nav-item"> <a class="nav-link" href="search_doner.php">Search Doner Details</a></li>
                  <li class="nav-item"> <a class="nav-link" href="doner_rlist.php">Doner Request List</a></li>
                  <li class="nav-item"> <a class="nav-link" href="web_doner_list1.php">Web Doner List</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Blood Donation</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-water menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="donate_blood_to_patient.php">Donate To Patient</a></li>
                  <li class="nav-item"> <a class="nav-link" href="donate_list.php">Donate List</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="history.php">
                <span class="menu-title">History</span>
                <i class="mdi mdi-clock menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="request_list.php">
                <span class="menu-title">Contact Request List</span>
                <i class="mdi mdi-send menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic123" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Campaign</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-calendar-multiple menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic123">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add_new_campain.php">Add Campaign</a></li>
                  <li class="nav-item"> <a class="nav-link" href="campain_list.php">Campaign List</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Print</span>
                <i class="menu-arrow"></i>
                <i class="mdi  mdi-note menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic1">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="print.php">Print Records</a></li>
                  <li class="nav-item"> <a class="nav-link" href="cirtificate_list.php">Print Cirtificate</a></li>
                  <li class="nav-item"> <a class="nav-link" href="print_donate_to_patient.php">Print Donate To Patient List</a></li>
                </ul>
                <div id="btn_upword" style="position: fixed;bottom: 10px;right: 0px;z-index: 99999;">
                  <a href="#top123"><i class="fas fa-arrow-alt-circle-up h2 mt-2 text-dark"></i></a>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="download_records.php">
                <span class="menu-title">Download Records</span>
                <i class="mdi mdi-download menu-icon"></i>
              </a>
            </li>
            </li>
          </ul>
        </nav>