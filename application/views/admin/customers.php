<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
    .customer-details {
        display: none;
    }
    .customer-buttons .flex {
        display: flex;
        justify-content: space-between;
    }
    .customer-info {
        flex: 1;
        margin-right: 20px; 
    }
    .full-width-button {
        width: 100%; /* Makes the button take the full width of its container */
    }
</style>

</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-4xl">
            <div class="mb-6 flex space-x-2">
                <button onclick="location.href='<?= base_url('admin/profile') ?>'" class="flex-1 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">My Profile</button>
                <button onclick="location.href='<?= base_url('admin/customers') ?>'" class="flex-1 bg-red-500 text-white py-2 rounded-lg hover:bg-red-600">Customers</button>
                <button onclick="location.href='<?= base_url('admin/all_message_history') ?>'" class="flex-1 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">All Message History</button>
            </div>

            <?php foreach ($customers as $customer): ?>
                <div class="border border-gray-300 rounded-lg mb-4">
                    <div class="p-4 flex justify-between items-center cursor-pointer" onclick="toggleDetails(<?= $customer->id ?>)">
                        <span>Customer <?= $customer->name ?> <?= $customer->last_name ?></span>
                        <span>Last interactive date: <?= $customer->last_interaction ? date('d/m/Y', strtotime($customer->last_interaction)) : 'N/A' ?></span>
                    </div>
                    <div id="customer-details-<?= $customer->id ?>" class="customer-details p-4 flex">
                        <div class="flex flex-row items-center w-full">
                            <div class="customer-info border border-gray-300 rounded-lg p-4 flex-1">
                                <strong>Name: </strong> <?= $customer->name ?><br>
                                <strong>Last Name: </strong> <?= $customer->last_name ?><br>
                                <strong>Email: </strong> <?= $customer->email ?><br>
                            </div>
                            <div class="flex flex-col space-y-2 ml-4 customer-buttons">
                                <div class="flex space-x-2">
                                    <button onclick="location.href='<?= base_url('admin/delete_customer/' . $customer->id) ?>'" class="bg-red-500 text-white py-3 px-4 rounded-lg hover:bg-red-600">DELETE USER</button>
                                    <button onclick="location.href='<?= base_url('admin/edit_customer/' . $customer->id) ?>'" class="bg-blue-500 text-white py-3 px-4 rounded-lg hover:bg-blue-600">EDIT USER</button>
                                </div>
                                <button onclick="location.href='<?= base_url('admin/customer_messages/' . $customer->id) ?>'" class="bg-blue-500 text-white py-3 px-4 rounded-lg hover:bg-blue-600 full-width-button">Show The User's Messages</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script>
        function toggleDetails(customerId) {
            $('#customer-details-' + customerId).toggle();
        }
    </script>
</body>
</html>
