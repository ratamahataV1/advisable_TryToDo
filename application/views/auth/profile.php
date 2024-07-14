<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <div class="mb-6 flex space-x-2">
                <button id="profile-btn" onclick="location.href='<?= base_url('auth/profile') ?>'" class="flex-1 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">My Profile</button>
                <button id="submit-form-btn" onclick="location.href='<?= base_url('auth/submit_form') ?>'" class="flex-1 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Submit New Form</button>
                <button id="message-history-btn" onclick="location.href='<?= base_url('auth/message_history') ?>'" class="flex-1 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Message History</button>
                <button id="logout-btn" onclick="location.href='<?= base_url('auth/logout') ?>'" class="flex-1 bg-red-500 text-white py-2 rounded-lg hover:bg-red-600">Logout</button>
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

            <form action="<?= base_url('auth/update_profile') ?>" method="post" class="space-y-4">
                <div>
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" id="name" name="name" value="<?= isset($user->name) ? set_value('name', $user->name) : '' ?>" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
                </div>

                <div>
                    <label for="last_name" class="block text-gray-700">Last Name</label>
                    <input type="text" id="last_name" name="last_name" value="<?= isset($user->last_name) ? set_value('last_name', $user->last_name) : '' ?>" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
                </div>

                <div>
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" value="<?= isset($user->email) ? set_value('email', $user->email) : '' ?>" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
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
