<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h1 class="text-2xl font-bold mb-6 text-center">Lost Pass?</h1>
            <p class="mb-4 text-center">Enter your email and we will send you a link to generate your pass again.</p>
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
            <form action="<?= base_url('auth/forgot_password') ?>" method="post" class="space-y-4">
                <div>
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" required>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-indigo-500 text-white py-1 px-4 rounded-lg hover:bg-indigo-600">Remind Me</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
