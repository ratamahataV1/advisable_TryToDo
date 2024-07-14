<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Messages</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .message-details {
            display: none;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-4xl">
            <div class="mb-6 flex space-x-2">
                <button onclick="location.href='<?= base_url('admin/profile') ?>'" class="flex-1 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">My Profile</button>
                <button onclick="location.href='<?= base_url('admin/customers') ?>'" class="flex-1 bg-red-500 text-white py-2 rounded-lg hover:bg-red-600">Customers</button>
                <button onclick="location.href='<?= base_url('admin/all_message_history') ?>'" class="flex-1 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Message History</button>
            </div>

            <?php foreach ($messages as $message): ?>
                <div class="border border-gray-300 rounded-lg mb-4">
                    <div class="p-4 flex justify-between items-center cursor-pointer" onclick="toggleDetails(<?= $message->id ?>)">
                        <span>Message <?= $message->id ?></span>
                        <span>Last interactive date: <?= isset($message->created_at) ? date('d/m/Y', strtotime($message->created_at)) : 'N/A' ?></span>
                    </div>
                    <div id="message-details-<?= $message->id ?>" class="message-details p-4 flex">
                        <div class="flex flex-row w-full">
                            <div class="flex-1 border border-gray-300 rounded-lg p-4 mr-4">
                                <strong>USER</strong><br>
                                <strong>Name: </strong> <?= $message->user_name ?><br>
                                <strong>Last Name: </strong> <?= $message->user_last_name ?><br>
                                <strong>Email: </strong> <?= $message->user_email ?><br>
                            </div>
                            <div class="flex-1 border border-gray-300 rounded-lg p-4">
                                <strong>Message</strong><br>
                                <?= $message->message ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script>
        function toggleDetails(messageId) {
            $('#message-details-' + messageId).toggle();
        }
    </script>
</body>
</html>
