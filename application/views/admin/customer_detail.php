<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-2xl">
            <div class="mb-6 flex space-x-2">
                <button onclick="location.href='<?= base_url('admin/profile') ?>'" class="flex-1 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">My Profile</button>
                <button onclick="location.href='<?= base_url('admin/customers') ?>'" class="flex-1 bg-red-500 text-white py-2 rounded-lg hover:bg-red-600">Customers</button>
                <button onclick="location.href='<?= base_url('admin/all_message_history') ?>'" class="flex-1 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">All Message History</button>
            </div>

            <div class="border border-gray-300 rounded-lg mb-4 p-4">
                <strong>Name: </strong> <?= $customer->name ?><br>
                <strong>Last Name: </strong> <?= $customer->last_name ?><br>
                <strong>Email: </strong> <?= $customer->email ?><br>
                <div class="mt-4 flex space-x-2">
                    <button onclick="location.href='<?= base_url('admin/delete_customer/' . $customer->id) ?>'" class="flex-1 bg-red-500 text-white py-2 rounded-lg hover:bg-red-600">DELETE USER</button>
                    <button onclick="location.href='<?= base_url('admin/edit_customer/' . $customer->id) ?>'" class="flex-1 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">EDIT USER</button>
                    <button onclick="location.href='<?= base_url('admin/customer_messages/' . $customer->id) ?>'" class="flex-1 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Show The User's Messages</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
