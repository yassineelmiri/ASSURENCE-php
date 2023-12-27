<?php
require(__DIR__ . "/../controllers/Client.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>article</title>
    <link rel="stylesheet" href="style/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="bg-gray-100">

        <div class="h-screen flex  bg-gray-200">
            <!-- Sidebar -->
            <div class=" bg-gray-800 text-white w-56 min-h-screen" id="sidebar">
                <!-- Your Sidebar Content -->
                <div class="p-4">
                    <div class="px-4 py-12 text-center border-b">
                        <h1 class="text-xl font-bold leading-none"><span class="text-yellow-700"> Gestion</span>
                            Assurence</h1>
                    </div>
                    <ul class="mt-4">
                        <li class="mb-2"><a href="insurer.php"
                                class="block hover:text-yellow-400 rounded-xl font-bold text-sm"><i
                                    class="fa-solid fa-house"></i> Assurence</a></li>
                        <hr><br>
                        <li class="mb-2"><a href="client.php"
                                class="block hover:text-yellow-400 rounded-xl font-bold text-sm"><i
                                    class="fa-solid fa-person"></i> Client</a></li>
                        <hr><br>
                        <li class="mb-2"><a href="article.php"
                                class="block hover:text-yellow-400 rounded-xl font-bold text-sm"><i
                                    class="fa-solid fa-newspaper"></i> Article</a></li>
                        <hr><br>
                        <li class="mb-2"><a href="claim.php"
                                class="block hover:text-yellow-400 rounded-xl font-bold text-sm"><i
                                    class="fa-solid fa-registered"></i> reclamation</a></li>
                        <hr><br>
                        <li class="mb-2"><a href="premium.php"
                                class="block hover:text-yellow-400 rounded-xl font-bold text-sm"><i
                                    class="fa-solid fa-money-bill"></i> Premium</a></li>
                        <hr><br>
                    </ul>
                </div>
            </div>

            <!-- Content -->
            <div class="flex-1 flex flex-col overflow-hidden">
                <!-- Navbar -->
                <div class="bg-white shadow">
                    <div class="container mx-auto">
                        <div class="flex justify-between items-center py-4 px-2">
                            <h1 class="text-xl font-semibold"> <img src="./img/icone.png" alt="icone" class="w-10">
                                ASSU</h1>

                            <button class="text-gray-500 hover:text-gray-600" id="open-sidebar">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Content Body -->
                <div class="flex-1 overflow-auto p-4">
                    <h1 class="text-3xl font-bold mb-8">Ajouter Client</h1>
                    <div class="w-full max-w-md mx-auto">
                        <form action="../app/controllers/Client.php" method="post" class="mb-8">
                            <input type="hidden" name="action" value="addClient">
                            <div class="grid grid-cols-1 gap-5">
                                <div>
                                    <label for="first_name"
                                        class="block text-sm font-medium text-gray-700">first_name</label>
                                    <input type="text" name="first_name" id="first_name" placeholder="Enter first_name"
                                        class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                                    <label for="last_name"
                                        class="block text-sm font-medium text-gray-700">last_name</label>
                                    <input type="text" name="last_name" id="last_name" placeholder="Enter last_name"
                                        class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                                    <label for="address" class="block text-sm font-medium text-gray-700">address</label>
                                    <input type="text" name="address" id="address" placeholder="Enter address"
                                        class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                                    <label for="date" class="block text-sm font-medium text-gray-700">date</label>
                                    <input type="text" name="date" id="date" placeholder="Enter date"
                                        class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                                </div>
                                <!-- Repeat similar structure for other input fields -->
                            </div>
                            <button type="submit" name="submit"
                                class="mt-4 bg-yellow-700 text-white py-2 px-4 rounded-md hover:bg-yellow-600">Submit</button>
                        </form>
                    </div>
                    <br>

                    <table class="min-w-full bg-white border border-gray-300 rounded-md">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b">ID</th>
                                <th class="py-2 px-4 border-b">first_name</th>
                                <th class="py-2 px-4 border-b">last_name</th>
                                <th class="py-2 px-4 border-b">address</th>
                                <th class="py-2 px-4 border-b">date</th>
                                <!-- Repeat for other headers -->
                                <th class="py-2 px-4 border-b">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($clients as $client): ?>
                                <tr>
                                    <td class="py-2 px-4 border-b">
                                        <?= $client['id'] ?>
                                    </td>
                                    <td class="py-2 px-4 border-b">
                                        <?= $client['first_name'] ?>
                                    </td>
                                    <td class="py-2 px-4 border-b">
                                        <?= $client['last_name'] ?>
                                    </td>
                                    <td class="py-2 px-4 border-b">
                                        <?= $client['address'] ?>
                                    </td>
                                    <td class="py-2 px-4 border-b">
                                        <?= $client['date'] ?>
                                    </td>

                                    <!-- Repeat for other data fields -->
                                    <td class="py-2 px-4 border-b flex space-x-2 items-center">

                                        <form action="../app/controllers/Client.php" method="post" class="ml-2">
                                            <input type="hidden" name="delete_id" value="<?= $client['id'] ?>">
                                            <input type="hidden" name="action" value="deleteClient">
                                            <button type="submit" name="deleteClient"
                                                class="bg-red-500 text-white py-1 px-3 rounded-md hover:bg-red-600 transition-all duration-200"
                                                onclick="return confirm('Are you sure you want to delete this address?')">Delete</button>
                                        </form>
                                        <button
                                            class="bg-green-500 text-white py-1 px-3 rounded-md hover:bg-yellow-600 transition-all duration-200"
                                            onclick="toggleeditClient(<?= $client['id'] ?>)">Edit</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <form action="" method="post" class="flex items-center space-x-2 "
                        id="editClient<?= $client['id'] ?>" style="display: none;">
                        <input type="hidden" name="action" value="editClient">
                        <input type="hidden" name="id" value="<?= $client['id'] ?>">
                        <input type="text" name="first_name" value="<?= $client['first_name'] ?>"
                            class="p-1 border border-gray-300 rounded-md">
                        <input type="text" name="last_name" value="<?= $client['last_name'] ?>"
                            class="p-1 border border-gray-300 rounded-md">
                        <input type="text" name="address" value="<?= $client['address'] ?>"
                            class="p-1 border border-gray-300 rounded-md">
                        <input type="text" name="date" value="<?= $client['date'] ?>"
                            class="p-1 border border-gray-300 rounded-md">
                        <!-- Repeat for other input fields -->

                        <button type="submit" name="editClient"
                            class="bg-green-500 text-white py-1 px-2 rounded-md hover:bg-green-600"
                            onclick="return confirm('Are you sure you want to edit this client?')">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleeditClient(insurerId) {
            const editClient = document.getElementById(`editClient${insurerId}`);
            editClient.style.display = (editClient.style.display === 'none' || editClient.style.display === '') ? 'flex' : 'none';
        }
    </script>



    </div>
</body>

</html>