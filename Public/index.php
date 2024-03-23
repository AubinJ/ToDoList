    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ToDoList</title>
    </head>

    <body>

        <!-- Modale d'inscription -->

        <section class="flex flex-col items-center pt-6" id="modalSubscription">
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">Create an
                        account
                    </h1>
                    <div class="space-y-4 md:space-y-6">
                        <div>
                            <label for="firstName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                            <input type="text" name="firstName" id="firstNameRegister" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Georges" required="">
                        </div>
                        <div>
                            <label for="lastName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                            <input type="text" name="lastName" id="lastNameRegister" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Brassens" required="">
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address</label>
                            <input type="email" name="email" id="emailRegister" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="GeorgesBrassens@hotmail.fr" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="passwordRegister" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Confirm Password</label>
                            <input type="password" name="passwordBis" id="verifPasswordRegister" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <button onclick="handleRegister()" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create an account</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">Already have an account?
                            <!-- Utilisation de la fonction tailwind data-modal pour afficher et cacher les modals -->
                            <a class="font-medium text-blue-600 hover:underline dark:text-blue-500" href="#" id="switchToLogin">Sign in here</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modale Sign In -->

        <section class="flex flex-col items-center pt-6 hidden" id="modalLogin">
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">Sign in
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="POST" id="formLogin">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address</label>
                            <input type="mail" name="email" id="emailLogin" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="GeorgesBrassens@hotmail.fr" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="passwordLogin" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <button class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </section>



        <!-- Modale de la To do List -->

        <ul class="bg-white shadow overflow-hidden sm:rounded-md max-w-sm mx-auto mt-16 hidden" id="modalTdl">
            <li>
                <div class="px-4 py-5 sm:px-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Item 1</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Description for Item 1</p>
                    </div>
                    <div class="mt-4 flex items-center justify-between">
                        <p class="text-sm font-medium text-gray-500">Status: <span class="text-green-600">Active</span></p>
                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Edit</a>
                    </div>
                </div>
            </li>
            <li class="border-t border-gray-200">
                <div class="px-4 py-5 sm:px-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Item 2</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Description for Item 2</p>
                    </div>
                    <div class="mt-4 flex items-center justify-between">
                        <p class="text-sm font-medium text-gray-500">Status: <span class="text-red-600">Inactive</span></p>
                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Edit</a>
                    </div>
                </div>
            </li>
            <li class="border-t border-gray-200">
                <div class="px-4 py-5 sm:px-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Item 3</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Description for Item 3</p>
                    </div>
                    <div class="mt-4 flex items-center justify-between">
                        <p class="text-sm font-medium text-gray-500">Status: <span class="text-yellow-600">Pending</span></p>
                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Edit</a>
                    </div>
                </div>
            </li>
        </ul>
    </body>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./Assets/Js/script.js"></script>

    </html>