<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-xs mx-auto">
        <h1 class="text-xl font-bold mb-4 text-center">LOGIN INTO YOUR ACCOUNT</h1>
        <h2 class="text-lg font-semibold mb-4 text-center">CUSTOMER</h2>
        <?php if ($this->session->flashdata('error')): ?>
                <div class="mb-4 text-red-600">
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php endif; ?>
        <?= form_open('auth/login'); ?>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Pass</label>
                <input type="password" name="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">OK</button>
            </div>
        <?= form_close(); ?>
        <div class="flex justify-between mt-4">
            <a href="<?= site_url('auth/forgot_password'); ?>" class="text-sm text-blue-500 hover:text-blue-700">Lost My Pass</a>
            <a href="<?= site_url('auth/register'); ?>" class="text-sm text-blue-500 hover:text-blue-700">New Account</a>
        </div>
    </div>
    <div class="absolute top-0 right-0 mt-4 mr-4">
        <a href="<?= site_url('auth/admin_login'); ?>" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">For ADMIN</a>
    </div>
</body>
</html>
