<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    <link rel="stylesheet" href="edit.css" />
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

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

    <div class="box"> 
      <div class="topic">
        <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#4671DE">
          <path d="M560-80v-123l221-220q9-9 20-13t22-4q12 0 23 4.5t20 13.5l37 37q8 9 12.5 20t4.5 22q0 11-4 22.5T903-300L683-80H560Zm300-263-37-37 37 37ZM620-140h38l121-122-18-19-19-18-122 121v38ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v120h-80v-80H520v-200H240v640h240v80H240Zm280-400Zm241 199-19-18 37 37-18-19Z"/>
        </svg>
        <p>แก้ไขข้อมูล</p>
      </div>
      <div class="content">
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
          <p></p>
          <p></p>
        </div>
        <div class="pic-right">

        </div>
      </div>
    </div>

    <div class="line"></div>

    <div class="menu">
      <a onclick="showMenu('registration')">Registration</a>
      <a onclick="showMenu('api')">API</a>
      <a onclick="showMenu('admin-route')">Route of Administration</a>
      <a onclick="showMenu('instructions-en')">Clinical Instructions(EN)</a>
      <a onclick="showMenu('instructions-th')">Clinical Instructions(TH)</a>
      <a onclick="showMenu('reference')">Reference</a>
      <a onclick="showMenu('logistics')">Logistics</a>
      <a onclick="showMenu('ddi')">DDI</a>
      <a onclick="showMenu('compatibility')">Compatibility</a>
      <a onclick="showMenu('company-note')">Company Note</a>
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

    <!-- ---------------------------------------------- -->
    

    

    <script>

        function showMenu(menuId) {

            // ซ่อนทั้งหมด
            let contents = document.querySelectorAll('.route');

            contents.forEach(content => {
                content.style.display = 'none';
            });

            // แสดงอันที่กด
            document.getElementById(menuId).style.display = 'block';
        }

        // เปิดหน้าแรกอัตโนมัติ
        showMenu('registration');

    </script>

  </body>
</html>
