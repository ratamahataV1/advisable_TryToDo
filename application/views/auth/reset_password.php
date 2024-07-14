<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h1 class="text-2xl font-bold mb-6 text-center">Reset Password</h1>
            <?php if ($this->session->flashdata('error')): ?>
                <div class="mb-4 text-red-600">
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('success')): ?>
                <div class="mb-4 text-green-600">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>
            <form action="<?= base_url('auth/reset_password/' . $token) ?>" method="post" class="space-y-4">
                <div>
                    <label for="password" class="block text-gray-700">New Password</label>
                    <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" required>
                </div>
                <div>
                    <label for="password_confirm" class="block text-gray-700">Confirm New Password</label>
                    <input type="password" id="password_confirm" name="password_confirm" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" required>
                    <p class="text-gray-600 text-sm">Password must be at least 6 characters long.</p>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-indigo-500 text-white py-1 px-4 rounded-lg hover:bg-indigo-600">Reset Password</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
