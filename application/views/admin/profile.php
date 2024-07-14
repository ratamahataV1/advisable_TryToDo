<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <div class="mb-6 flex space-x-2">
                <button onclick="location.href='<?= base_url('admin/profile') ?>'" class="flex-1 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">My Profile</button>
                <button onclick="location.href='<?= base_url('admin/customers') ?>'" class="flex-1 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Customers</button>
                <button onclick="location.href='<?= base_url('admin/all_message_history') ?>'" class="flex-1 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">All Message History</button>
                <button onclick="location.href='<?= base_url('admin/logout') ?>'" class="flex-1 bg-red-500 text-white py-2 rounded-lg hover:bg-red-600">Logout</button>
            </div>

            <?php if ($this->session->flashdata('success')): ?>
                <div class="mb-4 text-green-600">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('error')): ?>
                <div class="mb-4 text-red-600">
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('admin/update_profile') ?>" method="post" class="space-y-4">
                <div>
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" id="name" name="name" value="<?= isset($admin->name) ? set_value('name', $admin->name) : '' ?>" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
                </div>

                <div>
                    <label for="last_name" class="block text-gray-700">Last Name</label>
                    <input type="text" id="last_name" name="last_name" value="<?= isset($admin->last_name) ? set_value('last_name', $admin->last_name) : '' ?>" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
                </div>

                <div>
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" value="<?= isset($admin->email) ? set_value('email', $admin->email) : '' ?>" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
                </div>

                <div>
                    <label for="password" class="block text-gray-700">Password (leave blank to keep current password)</label>
                    <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
                </div>

                <button type="submit" class="w-full bg-indigo-500 text-white py-2 rounded-lg hover:bg-indigo-600">Update</button>
            </form>
        </div>
    </div>
</body>
</html>
