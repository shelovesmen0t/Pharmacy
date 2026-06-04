<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    <link rel="stylesheet" href="edit.css" />
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>

  <!-- สำหรับ component ต่างๆ -->
  <link rel="stylesheet" href="../../components/registration/registration.css" />
  <link rel="stylesheet" href="../../components/api/api.css" />
  <link rel="stylesheet" href="../../components/admin-route/admin-route.css" />
  <link rel="stylesheet" href="../../components/instructions-en/instructions-en.css" />
  <link rel="stylesheet" href="../../components/instructions-th/instructions-th.css" />
  <link rel="stylesheet" href="../../components/reference/reference.css" />
  <link rel="stylesheet" href="../../components/logistics/logistics.css" />
  <link rel="stylesheet" href="../../components/ddi/ddi.css" />
  <link rel="stylesheet" href="../../components/compatibility/compatibility.css" />
  <link rel="stylesheet" href="../../components/company-note/company-note.css" />

  </head>
  <body>
    <div id="navbar"></div>
  <script src="../../components/nav.js"></script>

  <div class ="container">
    <div>
      <p><span style="font-weight:bold; font-size: 32px; padding-right: 20px;">Drug Edit</span>แก้ไขข้อมูลยา</p>
    </div>

    <div class="edit-box">
      <div class="edit-topic">
          <div class="edit-topic-left">
          <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#4671DE">
            <path d="M560-80v-123l221-220q9-9 20-13t22-4q12 0 23 4.5t20 13.5l37 37q8 9 12.5 20t4.5 22q0 11-4 22.5T903-300L683-80H560Zm300-263-37-37 37 37ZM620-140h38l121-122-18-19-19-18-122 121v38ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v120h-80v-80H520v-200H240v640h240v80H240Zm280-400Zm241 199-19-18 37 37-18-19Z"/>
          </svg>
          <p>แก้ไขข้อมูล</p>
        </div>
        <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#2063b8"><path d="M348.5-291.5Q360-303 360-320t-11.5-28.5Q337-360 320-360t-28.5 11.5Q280-337 280-320t11.5 28.5Q303-280 320-280t28.5-11.5Zm0-160Q360-463 360-480t-11.5-28.5Q337-520 320-520t-28.5 11.5Q280-497 280-480t11.5 28.5Q303-440 320-440t28.5-11.5Zm0-160Q360-623 360-640t-11.5-28.5Q337-680 320-680t-28.5 11.5Q280-657 280-640t11.5 28.5Q303-600 320-600t28.5-11.5ZM440-280h240v-80H440v80Zm0-160h240v-80H440v80Zm0-160h240v-80H440v80ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Z"/></svg>
          <p>Checklist</p>
        </a>
      </div>
      
      <div class="edit-content">
        <div class="top">
          <div class="content-left">
            <p>version : 1</p>
            <p>DrugNet ID : 123</p>
            <p>Company ID : 456</p>
            <p>Company Name : บริษัท เอบี</p>
            <p>Registration ID : 234</p>
          </div>
          <div class="content-mid">
            <p>Registration Code : 1C 19/61(NB)</p>
            <p>Trade Name(TH) : ไฮบอร์</p>
            <p>Trade Name(EN) : Hibor</p>
            <p>Status : <span style="color: #31b870;">ENTERING DATA</span></p>
          </div>
        </div>

        <div class="bottom">
          <p>(หากกรอกข้อมูล Trade Name(TH) , Trade Name(EN) ผิด กรุณาติดต่อ ศูนย์เภสัชสนเทศ dicpsu@gmail.com)</p>
        </div>
        
        <div class="pic-right">

        </div>
      </div>
    </div>

    <div class="edit-under-box">
      <a href="" class="refresh">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8b931"><path d="M480-160q-134 0-227-93t-93-227q0-134 93-227t227-93q69 0 132 28.5T720-690v-110h80v280H520v-80h168q-32-56-87.5-88T480-720q-100 0-170 70t-70 170q0 100 70 170t170 70q77 0 139-44t87-116h84q-28 106-114 173t-196 67Z"/></svg>
        <p>Refresh</p>
      </a>
      <a href="" class="save">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M840-680v480q0 33-23.5 56.5T760-120H200q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h480l160 160Zm-80 34L646-760H200v560h560v-446ZM565-275q35-35 35-85t-35-85q-35-35-85-35t-85 35q-35 35-35 85t35 85q35 35 85 35t85-35ZM240-560h360v-160H240v160Zm-40-86v446-560 114Z"/></svg>
        <p>Save</p>
      </a>
    </div>

    <div class="edit-line"></div>

    <div class="edit-menu">
      <a onclick="showMenu('registration')" id="menu-registration">Registration</a>
      <a onclick="showMenu('api')" id="menu-api">API</a>
      <a onclick="showMenu('admin-route')" id="menu-admin-route">Route of Administration</a>
      <a onclick="showMenu('instructions-en')" id="menu-instructions-en">Clinical Instructions(EN)</a>
      <a onclick="showMenu('instructions-th')" id="menu-instructions-th">Clinical Instructions(TH)</a>
      <a onclick="showMenu('reference')" id="menu-reference">Reference</a>
      <a onclick="showMenu('logistics')" id="menu-logistics">Logistics</a>
      <a onclick="showMenu('ddi')" id="menu-ddi">DDI</a>
      <a onclick="showMenu('compatibility')" id="menu-compatibility">Compatibility</a>
      <a onclick="showMenu('company-note')" id="menu-company-note">Company Note</a>
    </div>

    <div id="registration" class="route">
      <?php include '../../components/registration/registration.html'; ?>
    </div>

    <div id="api" class="route">
      <?php include '../../components/api/api.html'; ?>
    </div>

    <div id="admin-route" class="route">
      <?php include '../../components/admin-route/admin-route.html'; ?>
    </div>

    <div id="instructions-en" class="route">
      <?php include '../../components/instructions-en/instructions-en.html'; ?>
    </div>

    <div id="instructions-th" class="route">
      <?php include '../../components/instructions-th/instructions-th.html'; ?>
    </div>

    <div id="reference" class="route">
      <?php include '../../components/reference/reference.html'; ?>
    </div>

    <div id="logistics" class="route">
      <?php include '../../components/logistics/logistics.html'; ?>
    </div>

    <div id="ddi" class="route">
      <?php include '../../components/ddi/ddi.html'; ?>
    </div>

    <div id="compatibility" class="route">
      <?php include '../../components/compatibility/compatibility.html'; ?>
    </div>

    <div id="company-note" class="route">
      <?php include '../../components/company-note/company-note.html'; ?>
    </div>

  </div>

    <!-- ---------------------------------------------- -->
    <script>

        function showMenu(menuId) {

            let contents = document.querySelectorAll('.route');
            contents.forEach(content => {
                content.style.display = 'none';
            });

            const targetElement = document.getElementById(menuId);
            if (targetElement) {
                targetElement.style.display = 'block';
            }

            document.querySelectorAll('.edit-menu a').forEach(item => {
                item.classList.remove('active');
            });
            const activeLink = document.getElementById('menu-' + menuId);
            if (activeLink) {
                activeLink.classList.add('active');
            }

            sessionStorage.setItem('activeMenu', menuId);
        }

        const savedMenu = sessionStorage.getItem('activeMenu') || 'registration';
        showMenu(savedMenu);

    </script>

  </body>
</html>
