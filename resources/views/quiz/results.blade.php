<?php
    dd($answers)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Квиз Завршен</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-green-400 to-green-600 flex items-center justify-center h-screen">

<div class="w-full max-w-md bg-white shadow-md rounded-lg p-6 text-center">
    <h2 class="text-xl font-bold mb-4">Честитки!</h2>
    <p>Го завршивте вашиот квиз за кариерен пат.</p>

    <!-- Display Answers -->
    <ul class="mt-4 text-left">
        @foreach($answers as $step => $answerId)
            <li><strong>Прашање {{ $step }}:</strong> Одговор ID: {{ $answerId }}</li>
        @endforeach
    </ul>

    <a href="/" 
       class="mt-6 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
       Назад кон Почеток
    </a>
</div>

</body>
</html>
