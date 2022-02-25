<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatNext?</title>
    <link rel="stylesheet" href="fstyle.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
           <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path> -->
            </svg>
            <img class="title" src = "WhatNext.png">

          </a>
          <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a href="Home.html" class="mr-5 hover:text-gray-900">Home</a>
            <a href="form.html" class="mr-5 hover:text-gray-900">Form</a>
          </nav>
  
          <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
              <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
  
            <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
              <div class="border-t border-gray-200"></div>
            </div>
          </div>
          
          <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
              <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                 <!-- <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                  <p class="mt-1 text-sm text-gray-600">
                    Use a permanent address where you can receive mail.
                  </p>
                </div>
              </div>
              <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="#" method="POST">
                  <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                      <div class="grid grid-cols-6 gap-6">
-->
                       

                                        
                <form action="insert.php" method="POST">

              <div class="col-span-6 sm:col-span-3">
              <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
              <input type="text" name="name" id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-4">
              <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
              <input type="text" name="email" id="email" autocomplete="given-email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-5">
              <label for="gpa" class="block text-sm font-medium text-gray-700">Total GPA</label>
              <input type="interger" name="gpa" id="gpa" autocomplete="given-gpa" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-6">
              <label for="grescore" class="block text-sm font-medium text-gray-700">GRE Score</label>
              <input type="interger" name="grescore" id="grescore" autocomplete="given-grescore" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-7">
              <label for="tofelscore" class="block text-sm font-medium text-gray-700">Tofel Score</label>
              <input type="interger" name="tofelscore" id="tofelscore" autocomplete="given-tofelscore" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              


              <br/>
              <div class="submitformat">
              <input type="submit" name="submit" value="Submit" onclick="window.location='form.html';" value="click here">
              <div>               
              </form>

          <!--
                        <div class="col-span-6 sm:col-span-3">
                          <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                          <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-6 sm:col-span-4">
                          <label for="email_address" class="block text-sm font-medium text-gray-700">Phone number</label>
                          <input type="text" name="email_address" id="email_address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-6 sm:col-span-3">
                          <label for="country" class="block text-sm font-medium text-gray-700">Country / Region</label>
                          <select id="country" name="country" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option>Andhra</option>
                            <option>Telangana</option>
                            <option></option>
                          </select>
                        </div>
          
                        <div class="col-span-6">
                          <label for="street_address" class="block text-sm font-medium text-gray-700">Aadhar number</label>
                          <input type="text" name="street_address" id="street_address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                          <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                          <input type="text" name="city" id="city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                          <label for="state" class="block text-sm font-medium text-gray-700">State / Province</label>
                          <input type="text" name="state" id="state" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                          
                          
                        </div>
                      </div>
                    </div>               
 
            
                  <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" 
                  onclick="window.location='insert.php';" value="click here">
                        Save
                    </button>
                      <link href="insert.php">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
-->
   
          
      </header>
      <footer class="text-gray-600 body-font">

        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">WhatNext</span>
          </a>
          <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2021  WhatNext</p>
        
        </div>
        
      </footer>
      
    
</body>
</html>