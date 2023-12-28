<?php
$insert = false;
if (isset($_POST['name'])) {

    // database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bbc";

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sample data to be inserted
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $booking_type = $_POST['booking_type'];
    $date = $_POST['date'];

    // SQL query to insert data into the table
    $sql = "INSERT INTO `basanti` (`name`, `email`, `phone`, `booking_type`, `date`) VALUES ('$name', '$email', '$phone', '$booking_type', '$date')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // echo "New record created successfully";
        // echo $sql;

        //Flag for Success
        $insert == true;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- Swiper CSS -->

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Swiper JS -->
    <!--Font-awesome cdn link for icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Billiards Bar Cafe</title>
    <style>
        /* ===== Scrollbar CSS ===== */
        /* Firefox */
        * {
            scrollbar-width: auto;
            scrollbar-color: #e2db08 #ffffff;
        }

        /* Chrome, Edge, and Safari */
        *::-webkit-scrollbar {
            width: 8px;
            /* height: 5px; */
        }

        *::-webkit-scrollbar-track {
            background: #ffffff;
        }

        *::-webkit-scrollbar-thumb {
            background-color: #abda0f;
            border-radius: 5px;
            border: 3px groove #ffffff;
        }
    </style>
    <link rel="stylesheet" href="./index-f43426c4.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <!-- Hero Section  -->
    <section class="md:h-screen w-full flex justify-between items-center bg-gradient-to-r from-[#0f1f3f] via-[#070B12] to-[#0f1f3f]  flex-col mb:h-auto mb:w-full">
        <!-- Navbar Div  -->
        <div id="navdiv" class="w-full md:px-0 mb:py-0 mb:px-0 md:py-0 z-[554] transition-all ease-linear duration-300 bg-transparent shadow-[#FFFF00] sticky top-0">
            <nav class="nav flex flex-wrap items-center md:py-1 justify-between top-0 z-50 sticky bg-gradient-to-r from-[#0d1e3c] via-[#020c1d] to-[#020917] w-full mb:px-5 md:px-9">
                <div class="flex flex-no-shrink items-center md:mr-6 mb:py-3 md:py-3 text-white"><a href="./index.html">
                        <h2 class="text-[#FFFF00] font-Style font-[500] md:text-4xl mb:text-2xl">
                            BBC
                        </h2>
                    </a>
                </div>

                <input class="menu-btn hidden" type="checkbox" id="menu-btn" />
                <label class="menu-icon block cursor-pointer md:hidden px-2 py-4 relative select-none" for="menu-btn">
                    <span class="navicon bg-grey-darkest flex items-center relative text-3xl"></span>
                </label>

                <ul class="menu md:border-none flex justify-center items-center list-reset m-0 w-full md:w-auto md:space-x-7 mb:pb-5 md:pb-0">
                    <li class="text-center md:border-none no-underline">
                        <a href="index.html" class="block md:inline-block mb:no-underline px-4 py-3 no-underline text-white font-Poppins md:text-lg transition-all duration-300 ease-linear hover:text-[#FFFF00] mb:font-semibold mb:text-[#FFFF00]">
                            Home</a>
                    </li>

                    <li class=" text-center md:border-none">
                        <a href="./sevices.html" target="_blank" class="block md:inline-block px-4 py-3 no-underline text-white font-Poppins md:text-lg transition-all duration-300 ease-linear hover:text-[#FFFF00]">Services
                        </a>
                    </li>

                    <li class=" text-center md:border-none">
                        <a href="#aboutus" class="block md:inline-block px-4 py-3 no-underline text-white font-Poppins md:text-lg transition-all duration-300 ease-linear hover:text-[#FFFF00]">About
                            Us
                        </a>
                    </li>

                    <li class=" text-center md:border-none">
                        <a href="#contactus" class="block md:inline-block px-4 py-3 no-underline font-Poppins text-white md:text-lg transition-all duration-300 ease-linear hover:text-[#FFFF00]">Contact
                            Us
                        </a>
                    </li>
                    <li class=" text-center md:border-none">
                        <a href="#booktable" class="block md:inline-block mb:px-4 py-1 rounded-3xl no-underline font-Poppins text-white md:text-lg transition-all duration-300 ease-linear hover:text-[#FFFF00] border border-[#FFFF00]">
                            Book Now
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Hero Div  -->
        <div class="flex justify-center items-center md:pb-32 md:px-24 md:flex-row mb:flex-col mb:pt-6 mb:px-4 mb:gap-7">
            <!-- content div  -->
            <div class="md:text-start space-y-2 mb:text-center mb:py-3 md:py-0">
                <div class="flex items-center justify-center md:justify-start  space-x-2 py-2">
                    <p class="h-[0.11rem] w-10 bg-[#FFFF00]"></p>
                    <span class="font-Poppins font-extralight text-lg text-white">BBC</span>
                    <p class="h-[0.11rem] md:hidden w-10 bg-[#FFFF00]"></p>
                </div>
                <h2 class="md:text-7xl mb:text-5xl font-Style font-[500] text-[#FFFF00]">
                    Billiards Bar Cafe
                </h2>
                <p class="md:text-white mb:text-gray-300 font-Poppins teg py-2 mb:text-sm md:text-base mb:w-full md:w-[55%] mb:text-start">
                    Rack Up the Fun at Billiards Bar Cafe: Where Snooker, Party Vibes,
                    and Mouthwatering Delights Collide! Have Chill Bro !!
                </p>
                <ul class="text-white list-disc px-4 font-Poppins mb:text-sm mb:text-start">
                    <li>Indulge in a tantalizing array of mouthwatering dishes.</li>
                    <li>Host unforgettable celebrations at our venue.</li>
                    <li>Enjoy a game of snooker in a vibrant, social atmosphere.</li>
                </ul>
                <div class="text-white md:space-x-5 mb:space-x-3 md:py-4 mb:w-full mb:py-5">
                    <a href="#booktable"> <button class="py-2 px-6 font-Montserrat transition-all duration-300 ease-linear hover:bg-[#FFFF00] hover:text-black font-[500] border border-[#FFFF00] rounded-3xl text-white shadow-sm shadow-[#FFFF00] md:text-base mb:text-sm">
                            Book Now
                        </button></a>
                    <a href="#contactus"> <button class="py-2 px-6 font-Montserrat transition-all duration-300 ease-linear hover:bg-[#FFFF00] hover:text-black font-[500] border border-[#FFFF00] rounded-3xl text-white shadow-sm shadow-[#FFFF00] md:text-base mb:text-sm">
                            Contact Us
                        </button></a>
                </div>
            </div>

            <!-- img div  -->
            <div>
                <img class="md:h-[26rem] rounded-2xl mb:shadow-lg md:shadow-2xl md:shadow-[#ffff007d] mb:shadow-[#ffff007d] w-full" src="./assets/bbcheoimg-3884892a.jpg " alt="BBC" />
            </div>
        </div>
    </section>
    <!-- Our Services Section  -->

    <!-- Book A Table Section  -->
    <section id="booktable" class="text-gray-400 bg-gradient-to-l from-[#0f1f3f] via-[#070B12] to-[#0f1f3f] body-font  overflow-hidden">
        <div class="container md:px-5 mb:py-7 md:pt-10 md:pb-16 mx-auto">
            <div class="flex flex-col text-center w-full md:mb-12 mb:py-4 md:py-0">
                <h2 class="text-[#FFFF00] font-Style md:text-5xl mb:text-4xl">
                    Book The Table
                </h2>
                <p class="lg:w-2/3 py-2 text-white mb:text-sm font-Montserrat mx-auto leading-relaxed md:text-base mb:text-gray-400">
                    Secure your
                    spot at BBC -
                    Billiards Bar Cafe, Vijay Nagar's premier destination. Reserve a table effortlessly to relish
                    snooker,
                    exceptional dining, and a vibrant atmosphere, ensuring an unforgettable experience awaits you.</p>
            </div>
            <!--submit Message-->
            <?php
            if ($insert == true) {
                echo  "<p class='submitMsg'>Thanks For Choosing Us!!!<p>";
            }
            ?>
            <!--Book Table Form -->
            <form action="index.php" method="post" class="flex lg:w-[80%] w-full sm:flex-row flex-col mx-auto md:px-8 mb:px-4 sm:px-0 items-center sm:space-x-8 sm:space-y-0 space-y-4 md:space-x-5">
                <div class="dbl-field">
                    <!-- Name  -->
                    <div class="field relative sm:mb-0 flex-grow w-full md:space-y-1 mb:space-y-2">
                        <label for="name" class="leading-7 mb:textsm md:text-base font-Montserrat text-[#FFFF00]">Your
                            Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your Name" class="w-full bg-gray-800 bg-opacity-40 rounded border shadow shadow-yellow-300 border-[#FFFF00] focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" wtx-context="F5746E9C-F7EF-4713-82B4-23FD2B7FE126"  required>
                    </div>
                    <!--Email-->
                    <div class="field relative sm:mb-0 flex-grow w-full md:space-y-1 mb:space-y-2">
                        <label for="email" class="leading-7 mb:textsm md:text-base font-Montserrat text-[#FFFF00]">Your
                            Email</label>
                        <input type="text" id="email" name="email" autocomplete="off" placeholder="Enter your Email" class="w-full bg-gray-800 bg-opacity-40 rounded border shadow shadow-yellow-300 border-[#FFFF00] focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" wtx-context="F5746E9C-F7EF-4713-82B4-23FD2B7FE126" required>
                        <!-- Number  -->
                        <div class="relative sm:mb-0 flex-grow w-full md:space-y-1 mb:space-y-2">
                            <label for="phone" class="leading-7 text-base font-Montserrat text-[#FFFF00]">Your
                                Number</label>
                            <input type="text" id="phone" name="phone" autocomplete="off" placeholder="Enter your Number" class="w-full bg-gray-800 bg-opacity-40 rounded  border shadow shadow-yellow-300 border-[#FFFF00] focus:ring-2 focus:ring-yellow-300 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" wtx-context="73C8E723-2D75-4975-8755-266662ED9436" required>
                        </div>
                        <!--Boooking_type-->
                        <label for="booking_type" class="leading-7 text-base font-Montserrat text-[#FFFF00]">Booking For What</label>
                        <input type="text" name="booking_type" id="booking_type" placeholder="Booking For What" class="w-full bg-gray-800 bg-opacity-40 rounded  border shadow shadow-yellow-300 border-[#FFFF00] focus:ring-2 focus:ring-yellow-300 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" wtx-context="73C8E723-2D75-4975-8755-266662ED9436" required>
                        <!-- Select  -->
                        <!--  <div class="relative sm:mb-0 flex-grow w-full md:space-y-1 mb:space-y-2">
                            <label for="Section⭐" class="leading-7 text-base font-Montserrat text-[#FFFF00]">Booking For
                                What</label>
                            <input type="email" id="email" name="email" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" wtx-context="73C8E723-2D75-4975-8755-266662ED9436"> -->
                        <!--    <select name="booking_type" id="cars"
                                class="w-full bg-gray-800 py-[0.56rem] bg-opacity-40 rounded border shadow shadow-yellow-300 border-[#FFFF00] focus:ring-2 focus:border-[#FFFF00] focus:bg-transparent text-base outline-none text-gray-100 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                <option value="select" name="booking_type"
                                    class="text-white bg-black font-Montserrat border-2 focus:border-[#FFFF00]">select
                                </option>
                                <option value="For Party Booking" name="booking_type"
                                    class="text-white bg-black font-Montserrat border-2 focus:border-[#FFFF00]">For
                                    Party
                                    Booking</option>
                                <option value="For Snooker Booking" name="booking_type" class="text-white bg-black font-Montserrat">For
                                    Snooker
                                    Booking</option>
                                <option value="Birthday Party Booking" name="booking_type" class="text-white bg-black font-Montserrat">
                                    Birthday Party Booking</option>
                                <option value="Other Reason" name="booking_type" class="text-white bg-black font-Montserrat">Other
                                    Reason</option>
                            </select>
                        </div>-->
                        <!-- Date  -->
                        <div class="relative sm:mb-0 flex-grow w-full md:space-y-1 mb:space-y-2">
                            <label for="date" class="leading-7 text-base font-Montserrat text-[#FFFF00]">Choose Desired
                                Date</label>
                            <input type="text" id="date" name="date" placeholder="Choose Date" class="w-full bg-gray-800 bg-opacity-40 rounded border shadow shadow-yellow-300 border-[#FFFF00] focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" wtx-context="73C8E723-2D75-4975-8755-266662ED9436" required>
                        </div>
                        <!-- Button  -->
                        <div class="btn-area w-full flex justify-center items-center md:pr14 mb:py-3 mb:pb-3 md:py-0">
                            <button id="btn-snooker" type="submit" name="submit" class=" py-2 md:px-8 mb:px-3 font-Montserrat transition-all duration-300 ease-linear hover:bg-[#FFFF00] hover:text-black font-[500] border-2 border-[#FFFF00] rounded-xl text-white shadow shadow-[#ffff009e] md:text-base mb:text-sm">
                                Book Table
                            </button>
                        </div>
                    </div>
            </form>
        </div>
    </section>

    <!-- Slider Section⭐  -->
    <div class="py-10 bg-gradient-to-l from-[#0f1f3f] via-[#070B12] to-[#0f1f3f]  overflow-hidden">
        <div class="flex justify-center items-center flex-col pb-10">
            <h2 class="text-[#FFFF00] font-Style md:text-5xl mb:text-4xl">
                Our Happy Customers
            </h2>
            <span class="w-32 h-[0.18rem] bg-[#FFFF00] mt-3"></span>
        </div>
        <!-- Slider main container -->
        <div class="swiper w-full h-auto bg-gradient-to-l from-[#0f1f3f] via-[#111b2c] to-[#020B1B]">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div>
                        <img src="https://images.unsplash.com/photo-1692707549152-d074bf2e10a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw1fHx8ZW58MHx8fHx8&auto=format&fit=crop&w=500&q=60" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img src="https://images.unsplash.com/photo-1682685797741-f0213d24418c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHx8&auto=format&fit=crop&w=500&q=60" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img src="https://plus.unsplash.com/premium_photo-1692641346419-880bf39e8dd6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHx8&auto=format&fit=crop&w=500&q=60" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img src="https://images.unsplash.com/photo-1682686579688-c2ba945eda0e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHw2fHx8ZW58MHx8fHx8&auto=format&fit=crop&w=500&q=60" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img src="https://images.unsplash.com/photo-1692881552712-16930d442f1a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3fHx8ZW58MHx8fHx8&auto=format&fit=crop&w=500&q=60" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img src="https://images.unsplash.com/photo-1682685797898-6d7587974771?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxMXx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
                    </div>
                </div>
                ...
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div id="arrowleft" class="swiper-button-prev"></div>
            <div id="arrowright" class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </div>
    <!-- What Set Us Apart Section  -->

    <section class="text-gray-400  bg-gradient-to-r md:pt-7 from-[#0f1f3f] via-[#111b2c] to-[#020B1B] body-font  overflow-hidden">
        <div class="container md:px-5 pb-10 mx-auto">
            <div class="text-center mb-6">
                <h2 class="text-[#FFFF00] font-Style md:text-5xl mb:text-4xl">
                    What Set Us Apart
                </h2>
                <p class="mb:text-sm md:text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-white font-Montserrat mb:text-gray-400 py-3 italic">
                    At
                    Billiards Bar Cafe, we stand out with a dynamic fusion of entertainment and relaxation. Offering
                    premier
                    snooker facilities, exclusive party bookings, and an inviting cafe experience. Join us to experience
                    a
                    distinctive blend of leisure and excitement under one roof..</p>
            </div>
            <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                <div class="p-4 sm:w-1/2 w-full">
                    <div class="bg-gray-800 rounded flex p-4 h-full items-center shadow shadow-yellow-300">
                        <a href="./snooker/index.html"><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-[#FFFF00] w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium text-white font-Montserrat mb:text-sm md:text-base">Unrivaled
                                Snooker
                                Experience</span></a>
                    </div>
                </div>
                <div class="p-4 sm:w-1/2 w-full">
                    <div class="bg-gray-800 rounded flex p-4 h-full items-center shadow shadow-yellow-300">
                        <a href="./view_page/index_d.html"><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-[#FFFF00] w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium text-white font-Montserrat">Exclusive Party
                                Bookings</span></a>
                    </div>
                </div>
                <div class="p-4 sm:w-1/2 w-full">
                    <div class="bg-gray-800 rounded flex p-4 h-full items-center shadow shadow-yellow-300">
                        <a href="./view_page/index_d.html"><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-[#FFFF00] w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium text-white font-Montserrat">Captivating Cafe Ambiance
                            </span></a>
                    </div>
                </div>
                <div class="p-4 sm:w-1/2 w-full">
                    <div class="bg-gray-800 rounded flex p-4 h-full items-center shadow shadow-yellow-300">
                        <a href="./view_page/index_d.html"><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-[#FFFF00] w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium text-white font-Montserrat">Expertly Crafted
                                Menus</span></a>
                    </div>
                </div>
                <div class="p-4 sm:w-1/2 w-full">
                    <div class="bg-gray-800 transitionclass rounded flex p-4 h-full items-center  shadow shadow-yellow-300">
                        <a href="./view_page/index_d.html"> <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-[#FFFF00] w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium text-white font-Montserrat">Exceptional Culinary
                                Delights</span></a>
                    </div>
                </div>
                <div class="p-4 sm:w-1/2 w-full">
                    <div class="bg-gray-800 borderrotate rounded flex p-4 h-full items-center transition-all duration-300 ease-linear shadow shadow-yellow-300">
                        <a href="./view_page/index_d.html"> <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-[#FFFF00] w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium text-white font-Montserrat">Atmosphere of
                                Leisure</span></a>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center py-3">

                <a href="#booktable"> <button class="py-2 md:px-6 mb:px-3 font-Montserrat transition-all duration-300 ease-linear hover:bg-[#FFFF00] hover:text-black font-[500] border border-[#FFFF00] rounded-3xl text-white shadow-md shadow-[#ffff009e] md:text-lg mb:text-sm">
                        Book Now
                    </button></a>

            </div>
        </div>
    </section>

    <!-- About Us Section  -->
    <section id="aboutus" class="text-gray-400 bg-gradient-to-r from-[#0f1f3f] via-[#111b2c] to-[#020B1B] body-font  overflow-hidden">
        <div class="flex justify-center items-center flex-col pt-8">
            <h2 class="text-[#FFFF00] font-Style md:text-5xl mb:text-4xl">
                Who We Are
            </h2>
            <span class="w-24 h-[0.18rem] bg-[#FFFF00]"></span>
        </div>
        <div class="container mx-auto justify-center flex mb:px-2 md:px-5 mb:py-6 md:py-14 md:flex-row flex-col-reverse items-center">
            <div class="md:w-[50%] flex flex-col md:items-start md:text-left items-center text-center">

                <h2 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-[#FFFF00] font-Montserrat"> <span class="font-semibold md:text-5xl font-Style">BBC</span> - Billiards Bar Cafe

                </h2>
                <p class="mb-8 leading-relaxed md:w-[80%] font-Poppins mb:text-sm md:text-base">Copper mug try-hard
                    pitchfork
                    pour-over freegan heirloom
                    neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage
                    hot
                    chicken authentic tumeric truffaut hexagon try-hard chambray. <br> <br> Lorem ipsum dolor sit amet
                    consectetur, adipisicing elit. A cum labore dolor soluta corrupti facilis quasi error officiis
                    consectetur
                    impedit. </p>
                <div class="flex justify-center space-x-5">
                    <a href="#contactus"><button class=" text-white border shadow shadow-[#FFFF00] border-[#FFFF00] md:py-2 md:px-6 mb:py-2 mb:px-4 focus:outline-none hover:shadow-md transition-all duration-200 ease-linear hover:shadow-[#FFFF00] rounded-3xl md:text-base font-Poppins font-[500] mb:text-sm">Contact
                            Us</button></a>
                    <a href="#booktable"> <button class=" text-white border shadow shadow-[#FFFF00] border-[#FFFF00] md:py-2 md:px-6 mb:py-2 mb:px-4 focus:outline-none hover:shadow-md transition-all duration-200 md:text-base ease-linear hover:shadow-[#FFFF00] rounded-3xl font-Poppins font-[500] mb:text-sm">Book
                            Table</button></a>

                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full  w-full mb:py-7 md:py-0">
                <img class="md:h-[26rem] rounded-2xl mb:shadow-lg md:shadow-2xl md:shadow-[#ffff007d] mb:shadow-[#ffff007d] w-full" alt="hero" src="./assets/who_we_are.jpg">
            </div>
    </section>

    <!-- Contact Us Section  -->
    <section id="contactus" class="bg-gradient-to-r from-[#0f1f3f] via-[#111b2c] to-[#020B1B] relative  overflow-hidden">
        <div class="flex justify-center items-center flex-col pt-8">
            <h2 class="text-[#FFFF00] font-Style md:text-5xl mb:text-4xl">
                Contact Us
            </h2>
            <span class="w-24 h-[0.18rem] bg-[#FFFF00]"></span>
            <p class="lg:w-2/3 mx-auto leading-relaxed mb:px-2 md:text-base text-center text-gray-300 font-Poppins py-3 mb:text-sm">
                Feel Free To
                Contact Us Regarding Any Query, Question & Feedback.</p>
            <!-- /////////////  -->
            <div class="flex justify-center items-center py-5 mb:flex-col md:flex-row">
                <!-- div 1  -->
                <div class="flex flex-col justify-center items-center px-9 md:py-5 md:border-r-2 md:border-[#FFFF00]">
                    <div>
                        <img class="h-10" src="./assets/call-ded33231.png" alt="">
                    </div>
                    <span class="font-Montserrat font-semibold text-lg text-[#FFFF00] pt-3">PHONE</span>
                    <div class="font-Poppins text-white py-3 mb:text-base">
                        <a href="tel:8959281584">+91 8959281584</a> <br>
                        <a href="tel:7869321018">+91 7869321018</a>
                    </div>
                </div>
                <div class="w-full flex justify-center items-center pb-5 md:hidden">

                    <p class="w-36 pb-2 border-b border-white"></p>
                </div>
                <!-- div 1  -->
                <div class="flex flex-col justify-center items-center px-9 md:py-5 ">
                    <div>
                        <img class="h-12" src="./assets/location-3f514362.png" alt="">
                    </div>
                    <span class="font-Montserrat font-semibold text-lg text-[#FFFF00] pt-1">ADDRESS</span>
                    <div class="font-Poppins text-white py-3 text-center">
                        <p>Plot 18, Ratnalok colony, <br class="mb:hidden md:block"> BBC Billiards Bar Cafe, beside
                            Apolo premier,
                            <br class="mb:hidden md:block"> Vijay Nagar, Indore, Madhya Pradesh 452010
                        </p>
                    </div>
                </div>
                <div class="w-full flex justify-center items-center pb-5 md:hidden">
                    <p class="w-36 pb-2 border-b border-white"></p>
                </div>
                <!-- div 1  -->
                <div class="flex flex-col justify-center items-center px-9 md:py-5 md:border-l-2 md:border-[#FFFF00]">
                    <div>
                        <img class="h-11" src="./assets/mail-39509725.png" alt="">
                    </div>
                    <span class="font-Montserrat font-semibold text-lg text-[#FFFF00] pt-3">EMAIL</span>
                    <div class="font-Poppins text-white py-3 text-center">
                        <a href="https://mail.google.com/mail/u/0/?hl=en&tf=cm&fs=1&to=0810mrcs@gmail.com" target="_blank">info@bbccafe.in</a> <br>
                        <a href="https://mail.google.com/mail/u/0/?hl=en&tf=cm&fs=1&to=0810mrcs@gmail.com" target="_blank">support@bbccafe.in</a>
                    </div>
                </div>
            </div>



            <!-- /////////////  -->

        </div>
        <div class="container md:px-5 md:py-0 mx-auto mb:w-full">

            <div class="lg:w-1/2 md:w-2/3 mx-auto mb:w-full">
                <div class="flex flex-wrap -m-2">
                    <div class="p-2 w-1/2">
                        <div class="relative mb:w-full">
                            <label for="name" class="leading-7 text-base text-gray-300 font-Poppins">Your Name</label>
                            <input type="text" id="name" name="name" class="w-full bg-gray-800 bg-opacity-40 rounded border border-[#FFFF00] focus:border-[#FFFF00] focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                    </div>
                    <div class="p-2 w-1/2">
                        <div class="relative mb:w-full">
                            <label for="number" class="leading-7 text-base text-gray-300">Your Number</label>
                            <input type="text" id="number" name="number" class="w-full bg-gray-800 bg-opacity-40 rounded border border-[#FFFF00] focus:border-[#FFFF00] focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                    </div>
                    <div class="p-2 w-full">
                        <div class="relative mb:w-full">
                            <label for="message" class="leading-7 text-base text-gray-300">Your Message</label>
                            <textarea id="message" name="message" class="w-full bg-gray-800 bg-opacity-40 rounded border border-[#FFFF00] focus:border-[#FFFF00] focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 h-32 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                        </div>
                    </div>
                    <div class="flex justify-center items-center pt-3 pb-8 w-full">

                        <a href="#booktable"> <button class="py-2 md:px-6 mb:px-3 font-Montserrat transition-all duration-300 ease-linear hover:bg-[#FFFF00] hover:text-black font-[500] border border-[#FFFF00] rounded-3xl text-white shadow-md shadow-[#ffff009e] md:text-base mb:text-sm">
                                Book Now
                            </button></a>

                    </div>

                </div>
            </div>
        </div>

    </section>


    <!-- Testimonials text  -->
    <section class="text-gray-400 bg-gradient-to-l md:py-5 from-[#0f1f3f] via-[#13223a] to-[#0f1f3f] body-font overflow-hidden">
        <div class="flex justify-center items-center flex-col pt-8">
            <h2 class="text-[#FFFF00] font-Style md:text-5xl mb:text-4xl">
                Our Reviews
            </h2>
            <span class="w-32 h-[0.12rem] bg-[#FFFF00]"></span>
        </div>
        <div class=" md:px-10 mb:w-full py-10 gap-5">
            <div class="flex flex-wrap justify-center items-center md:-m-4 mb:w-full">
                <!-- 1st review  -->
                <div class="lg:w-1/3 mb:w-full lg:mb-0 mb-6 md:p-4">
                    <div class="h-full text-center mb:w-full">
                        <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-800 bg-gray-800 bg-opacity-10" src="https://images.unsplash.com/photo-1542596594-649edbc13630?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aGFwcHklMjBwZW9wbGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60">
                        <p class="leading-relaxed text-white font-Poppins md:text-base mb:text-sm mb:text-gray-300 mb:w-full">
                            Edison
                            bulb
                            retro cloud bread echo park, helvetica
                            stumptown taiyaki taxidermy
                            90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking
                            vinegar
                            cronut adaptogen squid fanny pack vaporware.</p>
                        <span class="inline-block h-1 w-10 rounded bg-yellow-300 mt-3 mb-2"></span>
                        <h2 class="text-white font-semibold title-font tracking-wider text-sm font-Montserrat">HOLDEN
                            CAULFIELD</h2>
                    </div>
                </div>
                <!-- 2nd review  -->
                <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
                    <div class="h-full text-center">
                        <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-800 bg-gray-800 bg-opacity-10" src="https://images.unsplash.com/photo-1524250502761-1ac6f2e30d43?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGhhcHB5JTIwcGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60">
                        <p class="leading-relaxed text-white font-Poppins md:text-base mb:text-sm mb:text-gray-300">
                            Edison bulb
                            retro cloud bread echo park, helvetica
                            stumptown taiyaki taxidermy
                            90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking
                            vinegar
                            cronut adaptogen squid fanny pack vaporware.</p>
                        <span class="inline-block h-1 w-10 rounded bg-yellow-300 mt-3 mb-2"></span>
                        <h2 class="text-white font-semibold title-font tracking-wider text-sm font-Montserrat">HOLDEN
                            CAULFIELD</h2>
                    </div>
                </div>
                <!-- 3rd review  -->
                <div class="lg:w-1/3 lg:mb-0 p-4">
                    <div class="h-full text-center">
                        <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-800 bg-gray-800 bg-opacity-10" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGhhcHB5JTIwcGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60">
                        <p class="leading-relaxed text-white font-Poppins md:text-base mb:text-sm mb:text-gray-300">
                            Edison bulb
                            retro cloud bread echo park, helvetica
                            stumptown taiyaki taxidermy
                            90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking
                            vinegar
                            cronut adaptogen squid fanny pack vaporware.</p>
                        <span class="inline-block h-1 w-10 rounded bg-yellow-300 mt-3 mb-2"></span>
                        <h2 class="text-white font-semibold title-font tracking-wider text-sm font-Montserrat">HOLDEN
                            CAULFIELD</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section  -->
    <hr class="bg-yellow-400 w-full text-yellow-400">

    <footer class="text-gray-400 bg-gradient-to-l from-[#0f1f3f] via-[#13223a] to-[#0f1f3f] body-font mb:w-fullm  overflow-hidden">
        <div class="container md:px-16 py-16 mx-auto flex md:justify-center md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col mb:px-0">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">

                    <span class="ml-3 text-6xl font-Style text-[#FFFF00]">BBC</span>
                </a>
                <span class="text-lg font-Poppins pt-3 text-white font-semibold">Billiards Bar Cafe</span>
                <p class="mt-3 text-sm text-slate-300 font-Poppins italic">Lorem ipsum, dolor sit amet consectetur
                    adipisicing
                    elit. Dolore, aliquam
                    tempora officiis ipsum similique qui ex doloribus id velit sint.</p>
            </div>
            <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class=" font-semibold text-[#FFFF00] text-xl font-Montserrat mb-3">Our Company</h2>
                    <nav class="list-none mb-10 space-y-2  font-Poppins">
                        <li>
                            <a class="text-white hover:text-white">Home</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-white">About Us</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-white">Contact Us</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-white">Book Table</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class=" font-semibold text-[#FFFF00] text-xl font-Montserrat mb-3">Our Services</h2>
                    <nav class="list-none mb-10 space-y-2 font-Poppins">
                        <li>
                            <a class="text-white hover:text-white">Party Bookings</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-white">Snooker Bookings</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-white">Food Orders</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-white">Custom Food Solutions</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class=" font-semibold text-[#FFFF00] text-xl font-Montserrat mb-3 text-center">Follow Us On</h2>
                    <div class="list-none w-full bgred-500 mb-10 flex flex-col justify-center items-center space-y-2 font-Poppins">
                        <ul>
                        <li class="bg-transparent hover:bg-slate-200 hover:text-slate-900 hover:rounded-lg hover:px-1.5 hover:py-1 px-1 py-2 font-semibold text-xl">
                                <a href="https://www.instagram.com/_chandrashekhar_08/"><i class="fa-brands fa-instagram"></i></a>
                            <li>
                            <li class="bg-transparent hover:bg-slate-200 hover:text-slate-900 hover:rounded-lg hover:px-1.5 hover:py-1  px-1 py-2 font-semibold text-xl">
                                <a href="https://twitter.com/i/flow/login"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li class="bg-transparent hover:bg-slate-200 hover:text-slate-900 hover:rounded-lg hover:px-1.5 hover:py-1 px-1 py-2 font-semibold text-xl">
                                <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                            </li>
                            <li class="bg-transparent hover:bg-slate-200 hover:text-slate-900 hover:rounded-lg hover:px-1.5 hover:py-1 px-1 py-2 font-semibold text-xl">
                                <a href="https://www.youtube.com/channel/UCF4jfT2811ghi2FF7w5ZWtA"><i class="fa-brands fa-youtube"></i>
                                </a>
                            </li>
                            <li class="bg-transparent hover:bg-slate-200 hover:text-slate-900 hover:rounded-lg hover:px-1.5 hover:py-1 px-1 py-2 font-semibold text-xl">
                                <a href="https://mail.google.com/mail/u/0/?hl=en&tf=cm&fs=1&to=0810mrcs@gmail.com"><i class="fa-regular fa-envelope"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-full mb:w-full md:px-4 mb:px-4">
                    <h2 class=" font-semibold text-[#FFFF00] text-xl font-Montserrat mb-3">Book A Table</h2>
                    <div class="list-none mb-0 py-2 space-y-2 font-Poppins w-full mb:px-4 md:px-0">
                        <div class="space-y-3 w-full">
                            <input type="text" class="bg-transparent py-2 px-4 mb:w-full border border-[#FFFF00] rounded-xl" placeholder="Your Name" name="name" id="">
                            <input type="text" class="bg-transparent py-2  mb:w-full px-4 border border-[#FFFF00] rounded-xl" placeholder="Your Number" name="number" id="">
                            <select name="type" class="bg-transparent text-slate-400 py-2 px-4 border  mb:w-full focus:border-yellow-600 border-[#FFFF00] rounded-xl w-60" id="cars" aria-placeholder="Select">
                                <option class="text-white bg-black font-Montserrat border-2 focus:border-[#FFFF00]" value="select">Select Booking Type</option>
                                <option class=" text-white bg-black font-Montserrat border-2 focus:border-[#FFFF00]" value="saab">Saab
                                </option>
                                <option class="text-white bg-black font-Montserrat border-2 focus:border-[#FFFF00]" value="
                                    mercedes">Mercedes</option>
                                <option class="text-white bg-black font-Montserrat border-2 focus:border-[#FFFF00]" value="
                                    audi">Audi</option>
                            </select>
                        </div>
                        <div class="py-2">
                            <a href="#booktable"> <button class="py-2 px-6 font-Montserrat transition-all duration-300 ease-linear hover:bg-[#FFFF00] hover:text-black font-[500] border border-[#FFFF00] rounded-3xl text-white shadow-sm shadow-[#FFFF00] md:text-base mb:text-sm">
                                    Book Now
                                </button> </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <p class="text-center text-gray-300 font-Poppins text-sm pb-2">2023 All Right Reserved: Made with ❤ For BBC</p>
    </footer>

    <!--Swiper Module-->
    <script type="module">
        // Initialize Swiper
        var swiper = new Swiper('.swiper', {
            slidesPerView: 3,
            spaceBetween: 0,
            parallax: true,
            autoplay: {
                delay: 2000,
            },
            loop: true,
            grabCursor: true,
            centeredSlides: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                },
            },
        });
    </script>
    <!--<script src="backendFiles/index.js"></script>
<script src="./backendFiles/index.js"></script>-->

    <!-- JS Scripts Here </> 👇 -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="index.js"></script>
</body>

</html>