<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
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

            <form action="<?= base_url('admin/update_customer/' . $customer->id) ?>" method="post" class="space-y-4">
                <div>
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" id="name" name="name" value="<?= set_value('name', $customer->name) ?>" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
                </div>

                <div>
                    <label for="last_name" class="block text-gray-700">Last Name</label>
                    <input type="text" id="last_name" name="last_name" value="<?= set_value('last_name', $customer->last_name) ?>" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
                </div>

                <div>
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" value="<?= set_value('email', $customer->email) ?>" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
                </div>

                <div>
                    <label for="password" class="block text-gray-700">Password (leave blank to keep current password)</label>
                    <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-indigo-500 text-white py-1 px-4 rounded-lg hover:bg-indigo-600">Update</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
