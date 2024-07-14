<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit New Message</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-2xl">
            <div class="mb-6 flex space-x-2">
                <button onclick="location.href='<?= base_url('auth/profile') ?>'" class="flex-1 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">My Profile</button>
                <button onclick="location.href='<?= base_url('auth/submit_form') ?>'" class="flex-1 bg-red-500 text-white py-2 rounded-lg hover:bg-red-600">Submit New Message</button>
                <button onclick="location.href='<?= base_url('auth/message_history') ?>'" class="flex-1 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Message History</button>
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

            <form action="<?= base_url('auth/submit_message') ?>" method="post" class="space-y-4">
                <div>
                    <label for="message" class="block text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="10" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" required></textarea>
                </div>
                <button type="submit" class="w-full bg-indigo-500 text-white py-2 rounded-lg hover:bg-indigo-600">Send</button>
                <!-- <div class="flex justify-end">
                    <button type="submit" class="bg-indigo-500 text-white py-1 px-4 rounded-lg hover:bg-indigo-600">Send</button>
                </div> -->
            </form>
        </div>
    </div>
</body>
</html>
