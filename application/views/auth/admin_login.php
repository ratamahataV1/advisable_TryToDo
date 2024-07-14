<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
    <div class="absolute top-0 right-0 m-4">
            <button onclick="location.href='<?= base_url('auth/login') ?>'" class="bg-gray-200 text-gray-700 py-1 px-4 rounded-lg hover:bg-gray-300">For Customer</button>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h1 class="text-2xl font-bold mb-6 text-center">Login Into Your Account</h1>
            <h2 class="text-xl mb-4 text-center">Admin</h2>
            <?php if ($this->session->flashdata('error')): ?>
                <div class="mb-4 text-red-600">
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php endif; ?>
            <form action="<?= base_url('auth/admin_login') ?>" method="post" class="space-y-4">
                <div>
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" required>
                </div>
                <div>
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" required>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-indigo-500 text-white py-1 px-4 rounded-lg hover:bg-indigo-600">OK</button>
                </div>
                <!-- <button type="submit" class="w-full bg-indigo-500 text-white py-2 rounded-lg hover:bg-indigo-600">OK</button> -->
            </form>
            <div class="mt-4 text-center">
                <a href="<?= base_url('auth/forgot_password') ?>" class="text-indigo-500 hover:underline">Lost My Pass</a>
            </div>
        </div>
    </div>
</body>
</html>
