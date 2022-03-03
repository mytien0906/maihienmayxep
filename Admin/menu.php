<div class="theme-setting-wrapper">
  <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
  <div id="theme-settings" class="settings-panel">
    <i class="settings-close mdi mdi-close"></i>
    <p class="settings-heading">SIDEBAR SKINS</p>
    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
      <div class="img-ss rounded-circle bg-light border mr-3"></div>
      Light
    </div>
    <div class="sidebar-bg-options" id="sidebar-dark-theme">
      <div class="img-ss rounded-circle bg-primary border mr-3"></div>
      Dark
    </div>
    <p class="settings-heading mt-2">HEADER SKINS</p>
    <div class="color-tiles mx-0 px-4">
      <div class="tiles light"></div>
      <div class="tiles dark"></div>
      <div class="tiles default"></div>
    </div>
  </div>
</div>
<div id="right-sidebar" class="settings-panel">
  <i class="settings-close mdi mdi-close"></i>
  <ul class="nav nav-tabs" id="setting-panel" role="tablist">
    <li class="nav-item">
      <a
        class="nav-link active"
        id="todo-tab"
        data-toggle="tab"
        href="#todo-section"
        role="tab"
        aria-controls="todo-section"
        aria-expanded="true"
        >TO DO LIST</a
      >
    </li>
    <li class="nav-item">
      <a
        class="nav-link"
        id="chats-tab"
        data-toggle="tab"
        href="#chats-section"
        role="tab"
        aria-controls="chats-section"
        >CHATS</a
      >
    </li>
  </ul>
  <div class="tab-content" id="setting-content">
    <div
      class="tab-pane fade show active scroll-wrapper"
      id="todo-section"
      role="tabpanel"
      aria-labelledby="todo-section"
    >
      <div class="add-items d-flex px-3 mb-0">
        <form class="form w-100">
          <div class="form-group d-flex">
            <input
              type="text"
              class="form-control todo-list-input"
              placeholder="Add To-do"
            />
            <button
              type="submit"
              class="add btn btn-primary todo-list-add-btn"
              id="add-task"
            >
              Add
            </button>
          </div>
        </form>
      </div>
      <div class="list-wrapper px-3">
        <ul class="d-flex flex-column-reverse todo-list">
          <li>
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox" />
                Team review meeting at 3.00 PM
              </label>
            </div>
            <i class="remove mdi mdi-close-circle-outline"></i>
          </li>
          <li>
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox" />
                Prepare for presentation
              </label>
            </div>
            <i class="remove mdi mdi-close-circle-outline"></i>
          </li>
          <li>
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox" />
                Resolve all the low priority tickets due today
              </label>
            </div>
            <i class="remove mdi mdi-close-circle-outline"></i>
          </li>
          <li class="completed">
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox" checked />
                Schedule meeting for next week
              </label>
            </div>
            <i class="remove mdi mdi-close-circle-outline"></i>
          </li>
          <li class="completed">
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox" checked />
                Project review
              </label>
            </div>
            <i class="remove mdi mdi-close-circle-outline"></i>
          </li>
        </ul>
      </div>
      <div class="events py-4 border-bottom px-3">
        <div class="wrapper d-flex mb-2">
          <i class="mdi mdi-circle-outline text-primary mr-2"></i>
          <span>Feb 11 2018</span>
        </div>
        <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
        <p class="text-gray mb-0">build a js based app</p>
      </div>
      <div class="events pt-4 px-3">
        <div class="wrapper d-flex mb-2">
          <i class="mdi mdi-circle-outline text-primary mr-2"></i>
          <span>Feb 7 2018</span>
        </div>
        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
        <p class="text-gray mb-0">Call Sarah Graves</p>
      </div>
    </div>
    <!-- To do section tab ends -->
    <div
      class="tab-pane fade"
      id="chats-section"
      role="tabpanel"
      aria-labelledby="chats-section"
    >
      <div
        class="d-flex align-items-center justify-content-between border-bottom"
      >
        <p
          class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0"
        >
          Friends
        </p>
        <small
          class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal"
          >See All</small
        >
      </div>
      <ul class="chat-list">
        <li class="list active">
          <div class="profile">
            <img src="./images/faces/face1.jpg" alt="image" /><span
              class="online"
            ></span>
          </div>
          <div class="info">
            <p>Thomas Douglas</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">19 min</small>
        </li>
        <li class="list">
          <div class="profile">
            <img src="./images/faces/face2.jpg" alt="image" /><span
              class="offline"
            ></span>
          </div>
          <div class="info">
            <div class="wrapper d-flex">
              <p>Catherine</p>
            </div>
            <p>Away</p>
          </div>
          <div class="badge badge-success badge-pill my-auto mx-2">4</div>
          <small class="text-muted my-auto">23 min</small>
        </li>
        <li class="list">
          <div class="profile">
            <img src="./images/faces/face3.jpg" alt="image" /><span
              class="online"
            ></span>
          </div>
          <div class="info">
            <p>Daniel Russell</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">14 min</small>
        </li>
        <li class="list">
          <div class="profile">
            <img src="./images/faces/face4.jpg" alt="image" /><span
              class="offline"
            ></span>
          </div>
          <div class="info">
            <p>James Richardson</p>
            <p>Away</p>
          </div>
          <small class="text-muted my-auto">2 min</small>
        </li>
        <li class="list">
          <div class="profile">
            <img src="./images/faces/face5.jpg" alt="image" /><span
              class="online"
            ></span>
          </div>
          <div class="info">
            <p>Madeline Kennedy</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">5 min</small>
        </li>
        <li class="list">
          <div class="profile">
            <img src="./images/faces/face6.jpg" alt="image" /><span
              class="online"
            ></span>
          </div>
          <div class="info">
            <p>Sarah Graves</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">47 min</small>
        </li>
      </ul>
    </div>
    <!-- chat tab ends -->
  </div>
</div>
<!-- partial -->
<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">
        <i class="mdi mdi-home menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a
        class="nav-link"
        data-toggle="collapse"
        href="#ui-basic"
        aria-expanded="false"
        aria-controls="ui-basic"
      >
        <i class="mdi mdi-compass menu-icon"></i>
        <span class="menu-title">Quản Lý Dịch Vụ</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="dan-muc-cap-1.php"
              >Quản Lý Cấp 1</a
            >
          </li>
          <li class="nav-item"><a class="nav-link" href="san-pham.php">Sản Phẩm</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a
        class="nav-link"
        data-toggle="collapse"
        href="#ui-advanced"
        aria-expanded="false"
        aria-controls="ui-advanced"
      >
        <i class="mdi mdi-layers menu-icon"></i>
        <span class="menu-title">Quản Lý Bài Viết</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-advanced">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="cong-trinh.php">Công trình</a></li>
          <li class="nav-item"><a class="nav-link" href="video.php">Video</a></li>
          <li class="nav-item"><a class="nav-link" href="dich-vu.php">Dịch Vụ</a></li>
          <li class="nav-item"><a class="nav-link" href="tin-tuc.php">Tin tức</a></li>
          <li class="nav-item"><a class="nav-link" href="tieu-chi.php">Tiêu Chí</a></li>
          <li class="nav-item"><a class="nav-link" href="chi-nhanh.php">Chi Nhánh</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a
        class="nav-link"
        data-toggle="collapse"
        href="#form-elements"
        aria-expanded="false"
        aria-controls="form-elements"
      >
        <i class="mdi mdi-view-headline menu-icon"></i>
        <span class="menu-title">Quản Lý Nhận Tin</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="#">Đăng Kí Nhận Tin</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a
        class="nav-link"
        data-toggle="collapse"
        href="#editors"
        aria-expanded="false"
        aria-controls="editors"
      >
        <i class="mdi mdi-pencil-box-outline menu-icon"></i>
        <span class="menu-title">Quản Lý Trang Tĩnh</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="editors">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="gioi-thieu.php">Giới Thiệu</a></li>
          <li class="nav-item"><a class="nav-link" href="lienhe.php">Liên Hệ</a></li>
          <li class="nav-item"><a class="nav-link" href="footer.php">Footer</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a
        class="nav-link"
        data-toggle="collapse"
        href="#charts"
        aria-expanded="false"
        aria-controls="charts"
      >
        <i class="mdi mdi-chart-pie menu-icon"></i>
        <span class="menu-title">Quản Lý Hình Ảnh Video</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="charts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="logo.php">Logo</a></li>
          <li class="nav-item"><a class="nav-link" href="slide.php">Slideshow</a></li>
          <li class="nav-item"><a class="nav-link" href="doi-tac.php">Đối tác</a></li>
          <li class="nav-item"><a class="nav-link" href="mang-xh.php">Mang Xa Hoi</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a
        class="nav-link"
        data-toggle="collapse"
        href="#tables"
        aria-expanded="false"
        aria-controls="tables"
      >
        <i class="mdi mdi-grid-large menu-icon"></i>
        <span class="menu-title">Quản Lý User</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="tables">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="thongtinadmin.php">Thông tin admin</a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="thiet_lap_thong_tin.php">
        <i class="mdi mdi-bell menu-icon"></i>
        <span class="menu-title">Thiết Lập Thông Tin</span>
      </a>
    </li>
  </ul>
</nav>
