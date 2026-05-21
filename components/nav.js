fetch("../../components/nav.html")
  .then(response => response.text())
  .then(data => {
    document.getElementById("navbar").innerHTML = data;

    // ย้าย .container เข้า #main-content
    const mainContent = document.getElementById("main-content");
    const containers = document.querySelectorAll("body > .container");
    containers.forEach(container => {
      mainContent.appendChild(container);
    });

    document.getElementById("menuBtn").addEventListener("click", () => {
      document.getElementById("sidebar").classList.add("open");
      document.getElementById("overlay").classList.add("open");
    });

    document.getElementById("overlay").addEventListener("click", closeSidebar);

    function closeSidebar() {
      document.getElementById("sidebar").classList.remove("open");
      document.getElementById("overlay").classList.remove("open");
    }
  });

const link = document.createElement("link");
link.rel = "stylesheet";
link.href = "../../components/nav.css";
document.head.appendChild(link);