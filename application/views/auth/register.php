<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h1 class="text-2xl font-bold mb-6 text-center">Registry Page</h1>
            <?php if (validation_errors()): ?>
                <div class="mb-4 text-red-600">
                <?php echo validation_errors(); ?>
                </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('success')): ?>
                <div class="mb-4 text-green-600">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>
            <form action="<?php echo site_url('auth/register'); ?>" method="POST" class="space-y-4">
                <div>
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" required>
                </div>
                <div>
                    <label for="last_name" class="block text-gray-700">Last Name</label>
                    <input type="text" id="last_name" name="last_name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" required>
                </div>
                <div>
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" required>
                </div>
                <div>
                    <label for="password" class="block text-gray-700">Pass</label>
                    <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" required>
                    <p class="text-gray-600 text-sm">Password must be at least 6 characters long.</p>
                </div>
                <div>
                    <label for="password_confirm" class="block text-gray-700">Retype Pass</label>
                    <input type="password" id="password_confirm" name="password_confirm" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" required>
                </div>
                <button type="submit" class="w-full bg-indigo-500 text-white py-2 rounded-lg hover:bg-indigo-600">Registry</button>
            </form>
        </div>
    </div>
</body>
</html>
