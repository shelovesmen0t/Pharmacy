<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    <link rel="stylesheet" href="edit.css" />
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
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
      <a class="active">Registration</a>
      <a>API</a>
      <a>Route of Administration</a>
      <a>Clinical Instructions(EN)</a>
      <a>Clinical Instructions(TH)</a>
      <a>Reference</a>
      <a>Logistics</a>
      <a>DDI</a>
      <a>Compatibility</a>
      <a>Company Note</a>
    </div>

    <div class="registration">
      
    </div>

    <div class="api">
      
    </div>

    <!-- ---------------------------------------------- -->
    <div class="detail">

      <p>ข้อมูลทั่วไป</p>
      <div class="detail-row">
        
        <!-- Dosage Form -->
        <div class="form-group">
          <label>Dosage Form :</label>
          <select class="dropdown">
            <option value="">-- Select Dosage Form --</option>
            <option>AEROSAL</option>
            <option>AEROSAL, FOAM</option>
            <option>AEROSAL, METERED</option>
            <option>AEROSAL, POWDER</option>
            <option>AEROSAL, SPRAY</option>
            <option>BAR, CHEWABLE</option>
            <option>BEAD</option>
            <option>BEAD, IMPLANT, EXTENDED RELEASE</option>
            <option>BLOCK</option>
            <option>CAPSULE</option>
            <option>CAPSULE, COATED</option>
            <option>CAPSULE, COATED PELLETS</option>
            <option>CAPSULE, COATED, EXTENDED RELEASE</option>
            <option>CAPSULE, GALATIN COATED</option>
            <option>CAPSULE, LIQUID FILLED</option>
            <option>CEMENT</option>
            <option>CIGARETTE</option>
            <option>CLOTH</option>
            <option>CONCENTRATE</option>
            <option>CONE</option>
            <option>CONE, EXTENDED RELEASE</option>
            <option>CREAM</option>
            <option>CREAM, AUGMENTED</option>
            <option>CRYSTAL</option>
            <option>CULTURE</option>
            <option>DIAPHRAGM</option>
          </select>
        </div>

        <!-- Effective Date -->
        <div class="form-group">
          <label>Effective Date :</label>
          <div class="input-box">
            <input type="date" value="2023-02-23">
          </div>
        </div>

        <!-- End Date -->
        <div class="form-group">
          <label>End Date :</label>
          <div class="input-box">
            <input type="date" value="2030-02-23">
          </div>
        </div>

        <!-- Storage -->
        <div class="form-group">
          <label>Storage Condition :</label>
          <select class="dropdown">
            <option value="">-- Select Dosage Form --</option>
            <option>Freezed : minus 20 degrees C to minus 40 degrees c</option>
            <option>Room : below 30 degrees C</option>
            <option>Refrigerated : 2 degrees C to 8 degrees C</option>
          </select>
        </div>
      </div>

      <p>รูปภาพยา ใส่ได้สูงสุด 3 รูป</p>
      <div class="button">
        <button class="upload">Upload</button>
        <button class="delete">delete</button>
      </button>
      </div>

       <div class="img">
    
        <div class="card">
          <div class="img-placeholde"></div>
          <button class="delete">Delete</button>
        </div>

        <div class="card">
          <div class="img-placeholde"></div>
          <button class="delete">Delete</button>
        </div>

        <div class="card">
          <div class="img-placeholde"></div>
          <button class="delete">Delete</button>
        </div>

      </div>

    </div>

    

    <script>

        function showMenu(menuId) {

            // ซ่อนทั้งหมด
            let contents = document.querySelectorAll('.content');

            contents.forEach(content => {
                content.style.display = 'none';
            });

            // แสดงอันที่กด
            document.getElementById(menuId).style.display = 'block';
        }

        // เปิดหน้าแรกอัตโนมัติ
        showMenu('home');

    </script>

  </body>
</html>
