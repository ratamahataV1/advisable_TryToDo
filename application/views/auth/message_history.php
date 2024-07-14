<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message History</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .hidden {
            display: none;
        }
    </style>
    <script>
        function toggleMessage(id) {
            const message = document.getElementById(id);
            if (message.classList.contains('hidden')) {
                message.classList.remove('hidden');
            } else {
                message.classList.add('hidden');
            }
        }
    </script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-2xl">
            <div class="mb-6 flex space-x-2">
                <button onclick="location.href='<?= base_url('auth/profile') ?>'" class="flex-1 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">My Profile</button>
                <button onclick="location.href='<?= base_url('auth/submit_form') ?>'" class="flex-1 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Submit New Form</button>
                <button onclick="location.href='<?= base_url('auth/message_history') ?>'" class="flex-1 bg-red-500 text-white py-2 rounded-lg hover:bg-red-600">Message History</button>
            </div>

            <?php foreach ($messages as $index => $message): ?>
                <div class="border border-gray-300 rounded-lg mb-4">
                    <div class="p-4 flex justify-between items-center cursor-pointer" onclick="toggleMessage('message-<?= $index ?>')">
                        <span>Message <?= $index + 1 ?></span>
                        <span><?= date('d/m/Y', strtotime($message->created_at)) ?></span>
                    </div>
                    <div id="message-<?= $index ?>" class="p-4 hidden border-t border-gray-300">
                        <strong>Message:</strong>
                        <p><?= $message->message ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
