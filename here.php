<?php
// function check_login($pdo)
// {
//   if (isset($_SESSION['USERS_ID'])) {
//     $id = $_SESSION['USERS_ID'];
//     $query = "SELECT * FROM users WHERE USERS_ID = :id LIMIT 1";

//     $stmt = $pdo->prepare($query);
//     $stmt->bindParam(':id', $id, PDO::PARAM_INT);
//     $stmt->execute();

//     $user_data = $stmt->fetch(PDO::FETCH_ASSOC);

//     if ($user_data) {
//       return $user_data;
//     }
//   }
//   // Redirect to login
//   header("Location: login.php");
//   // exit();
// }

session_start();
include("includes/dbh.inc.php");
include("functions.php");
check_login($pdo);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inventory Managment - Dashboard</title>
  <!--TailwindCSS-->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
  <!--custom CSS-->
  <link rel="stylesheet" href="styles/main.css" />
  <style>
    .active-link {
      background-color: rgb(34 197 94);
      color: #000;
    }
  </style>
</head>

<body>
  <!--Body wrapper-->
  <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800">
    <!--Side Navigation-->
    <div class="overflow-y-scroll fixed top-0 bottom-0 left-0 h-full min-h-screen w-72 bg-white px-6 py-3 shadow-sm hidden lg:block z-50" id="sidenav">
      <div class="relative">
        <div class="absolute top-2 right-0 text-lg text-gray-500 cursor-pointer block lg:hidden" id="closeNav">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </div>
      </div>

      <div class="h-16 items-center pl-4">
        <div class="mt-1 logo_area text-xl font-bold uppercase text-gray-600 flex items-center justify-start">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
          </svg>
          <span class="ml-2">inventory</span>
        </div>
      </div>

      <div id="sidenav_menu_wrap">
        <ul class="pl-0 m-0 list-none space-y-5" id="sidenav_menu">
          <li>
            <a href="#" class="capitalize flex items-center justify-start py-2 pl-4 text-lg rounded-xl hover:bg-green-500 hover:text-white transition text-green-500 font-semibold">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
              </svg>
              <span class="ml-2">dashboard</span>
            </a>
          </li>

          <li>
            <a href="#" class="capitalize flex items-center justify-start py-2 pl-4 text-lg rounded-xl hover:bg-green-500 hover:text-white transition text-gray-500 font-semibold">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
              </svg>
              <span class="ml-2">Maintenance</span>
            </a>
          </li>

          <li>
            <a href="#" class="capitalize flex items-center justify-start py-2 pl-4 text-lg rounded-xl hover:bg-green-500 hover:text-white transition text-gray-500 font-semibold">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
              </svg>
              <span class="ml-2">Distribution</span>
            </a>
          </li>

          <li>
            <a href="#" class="capitalize flex items-center justify-start py-2 pl-4 text-lg rounded-xl hover:bg-green-500 hover:text-white transition text-gray-500 font-semibold">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
              </svg>
              <span class="ml-2">Technician</span>
            </a>
          </li>

          <li>
            <a href="#" class="capitalize flex items-center justify-start py-2 pl-4 text-lg rounded-xl hover:bg-green-500 hover:text-white transition text-gray-500 font-semibold">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>
              <span class="ml-2">Assets</span>
            </a>
          </li>

          <li>
            <a href="#" class="capitalize flex items-center justify-start py-2 pl-4 text-lg rounded-xl hover:bg-green-500 hover:text-white transition text-gray-500 font-semibold">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </svg>
              <span class="ml-2">Profile</span>
            </a>
          </li>

          <li>
            <a href="#" class="capitalize flex items-center justify-start py-2 pl-4 text-lg rounded-xl hover:bg-green-500 hover:text-white transition text-gray-500 font-semibold">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
              </svg>
              <span class="ml-2">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!--/page content-->
    <div id="content" class=""></div>
  </div>

  <!--Scripts-->
  <script src="js/app.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const sidebarLinks = document.querySelectorAll(".fixed a");
      const contentArea = document.getElementById("content");

      // Function to load content from PHP files and mark the active link
      function loadContentAndSetActiveLink(url, linkElement) {
        fetch(url)
          .then((response) => {
            if (!response.ok) {
              throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.text();
          })
          .then((html) => {
            contentArea.innerHTML = html;
            setActiveLink(linkElement);
          })
          .catch((error) => {
            contentArea.innerHTML = `<p>Error loading the content: ${error.message}</p>`;
          });
      }

      // Function to set the active link
      function setActiveLink(activeLink) {
        sidebarLinks.forEach((link) => {
          link.classList.remove("active-link");
        });
        if (activeLink) {
          activeLink.classList.add("active-link");
        }
      }

      sidebarLinks.forEach((link) => {
        link.addEventListener("click", function(e) {
          e.preventDefault();
          const contentName =
            this.querySelector("span:nth-child(2)").textContent.toLowerCase();
          // Construct the URL for the PHP file
          const url = `${contentName}.php`; // Adjust this as needed based on your server setup
          loadContentAndSetActiveLink(url, this);
        });
      });

      // Load dashboard.php as the default content and mark the Dashboard link as active on page load
      const defaultContentUrl = "dashboard.php"; // Ensure this URL is correct based on your server setup
      const dashboardLink = document.querySelector(
        'a[href="#"]:nth-child(2)'
      ); // Adjust the selector as needed
      loadContentAndSetActiveLink(defaultContentUrl, dashboardLink);
    });
  </script>
</body>

</html>