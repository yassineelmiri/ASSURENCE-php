<?php
require(__DIR__ . "/../controllers/Insurer.php");
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
                <div class="bg-gray-800 text-white shadow">
                    <div class="container mx-auto">
                        <div class="flex justify-between items-center py-4 px-2">
                            <h1 class="text-xl font-semibold"> <img src="./img/icone.png" alt="icone" class="w-10">
                                MAR</h1>

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
                    <h1 class="text-3xl font-bold mb-8">Welcome : Yassine</h1>
                    <div class="grid grid-cols-2 gap-5">
                        <img src="./img/img.jpg" alt="Assurance Protection Image" class="img-with-movement">
                        <p class="items-center mt-12">La Banque du Maroc envisage de se positionner sur le marché des assurances, cherchant ainsi à
                            diversifier ses activités. Consciente des opportunités qu'offre ce secteur en pleine
                            expansion, elle a sollicité notre expertise pour le développement de la partie digitale et
                            métier de cette nouvelle orientation. Notre mission consistera à créer une infrastructure
                            robuste et des solutions innovantes, permettant à la Banque du Maroc de s'adapter
                            efficacement à ce marché et de proposer des services d'assurance modernes et adaptés aux
                            besoins de sa clientèle. Nous sommes ravis de participer à cette initiative stratégique et
                            sommes convaincus que notre collaboration contribuera au succès de cette nouvelle aventure.
                        </p>
                    </div>
                    <h3 class="text-3xl mb-8"> Assurence</h3>
                    <button onclick="toggleAddInsurerSection()"
                        class="bg-gray-800 text-white py-2 px-4 rounded-md hover:bg-gray-400 mb-4">Ajouter
                        Assurance</button>
                    <form action="../app/controllers/Insurer.php" method="post" class="mb-8" id="addInsurerSection"
                        style="display: none;">
                        <input type="hidden" name="action" value="addInsurer">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">name</label>
                                <input type="text" name="name" id="name" placeholder="Enter first_name"
                                    class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                                <label for="address" class="block text-sm font-medium text-gray-700">address</label>
                                <input type="text" name="address" id="address" placeholder="Enter address"
                                    class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                            </div>
                            <!-- Repeat similar structure for other input fields -->
                        </div>
                        <button type="submit" name="submit"
                            class="mt-4 bg-yellow-700 text-white py-2 px-4 rounded-md hover:bg-yellow-600">Submit</button>
                    </form>
                    <br>

                    <table class="min-w-full bg-white border border-gray-300 rounded-md">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b">ID</th>
                                <th class="py-2 px-4 border-b">name</th>
                                <th class="py-2 px-4 border-b">address</th>
                                <!-- Repeat for other headers -->
                                <th class="py-2 px-6 border-b">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($insurers as $insurer): ?>
                                <tr>
                                    <td class="py-2 px-4 border-b">
                                        <?= $insurer['id'] ?>
                                    </td>
                                    <td class="py-2 px-4 border-b">
                                        <?= $insurer['name'] ?>
                                    </td>
                                    <td class="py-2 px-4 border-b">
                                        <?= $insurer['address'] ?>
                                    </td>

                                    <!-- Repeat for other data fields -->
                                    <td class="py-2 px-4 border-b flex space-x-2 items-center">

                                        <form action="../app/controllers/Insurer.php" method="post" class="ml-2">
                                            <input type="hidden" name="delete_id" value="<?= $insurer['id'] ?>">
                                            <input type="hidden" name="action" value="deleteInsurer">
                                            <button type="submit" name="delete"
                                                class="bg-red-500 text-white py-1 px-3 rounded-md hover:bg-red-600 transition-all duration-200"
                                                onclick="return confirm('Are you sure you want to delete this address?')">Delete</button>

                                        </form>
                                        <button
                                            class="bg-green-500 text-white py-1 px-3 rounded-md hover:bg-yellow-600 transition-all duration-200"
                                            onclick="toggleeditInsurer(<?= $insurer['id'] ?>)">Edit</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <form action="" method="post" class="flex items-center space-x-2" id="editInsurer<?= $insurer['id'] ?>"
            style="display: none;">
            <input type="hidden" name="action" value="editInsurer">
            <input type="hidden" name="id" value="<?= $insurer['id'] ?>">
            <input type="text" name="name" value="<?= $insurer['name'] ?>"
                class="p-1 border border-gray-300 rounded-md">
            <input type="text" name="address" value="<?= $insurer['address'] ?>"
                class="p-1 border border-gray-300 rounded-md">
            <!-- Repeat for other input fields -->
            <button type="submit" name="edit" class="bg-green-500 text-white py-1 px-2 rounded-md hover:bg-green-600"
                onclick="return confirm('Are you sure you want to edit this insurer?')">Edit</button>
        </form>
        <script>
            function toggleeditInsurer(insurerId) {
                const editInsurer = document.getElementById(`editInsurer${insurerId}`);
                editInsurer.style.display = (editInsurer.style.display === 'none' || editInsurer.style.display === '') ? 'flex' : 'none';
            }
        </script>


    </div>

    <style>
        .img-with-movement {
            transition: transform 0.3s ease-in-out, border-radius 0.3s ease-in-out;
            border-radius: 20px;
            /* Adjust the border-radius value as needed */
        }

        .img-with-movement:hover {
            transform: scale(1.0);
            border-radius: 50%;
            /* Adjust the border-radius value as needed */
        }
    </style>
    <script>
        function toggleAddInsurerSection() {
            const addInsurerSection = document.getElementById('addInsurerSection');
            addInsurerSection.style.display = (addInsurerSection.style.display === 'none' || addInsurerSection.style.display === '') ? 'block' : 'none';
        }

        function toggleeditInsurer(insurerId) {
            const editInsurer = document.getElementById(`editInsurer${insurerId}`);
            editInsurer.style.display = (editInsurer.style.display === 'none' || editInsurer.style.display === '') ? 'flex' : 'none';
        }
    </script>
</body>

</html>