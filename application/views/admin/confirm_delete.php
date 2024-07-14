<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Delete</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <p class="text-center mb-6">Are you sure you want to delete this user?</p>
            <div class="flex justify-center space-x-4">
                <button onclick="location.href='<?= base_url('admin/confirm_delete/' . $customer_id) ?>'" class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600">YES</button>
                <button onclick="location.href='<?= base_url('admin/customers') ?>'" class="bg-gray-300 text-gray-700 py-2 px-4 rounded-lg hover:bg-gray-400">NO</button>
            </div>
        </div>
    </div>
</body>
</html>
