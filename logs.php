<?php
require_once('env.php');
?>

<!-- Sign In Page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telegram Messages - Logs</title>
    <!-- include Tailwind CSS stylesheet -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- include Tailwind CSS custom configration -->
    <script type="text/javascript" src="js/tailwind.config.js"></script>
    <!-- include jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- include Toastr Notification -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>
<body class="w-full h-screen bg-primary-normal font-[Inter]">
    <div class="flex">
        <!-- Main -->
        <div class="pt-3 w-[calc(100vw-80px)] h-screen ml-10">
            <!-- Round White Board -->
            <div class="h-[calc(100vh-0.9rem)] p-[32px] rounded-tl-[32px] rounded-bl-[32px] bg-white overflow-y-auto">
                <!-- Page Title Section -->
                <div class="flex justify-between">
                    <!-- Page Title -->
                    <h1 class="text-[30px] font-semibold">Message Logs</h1>
                    <!-- Language Button -->
                </div>
                <!-- Logs Table -->
                <div class="mt-10">
                    <table id="tbl-logs" class="w-full mt-5">
                        <thead class="bg-primary-normal text-white text-left">
                            <tr>
                                <th class="py-[12px] px-[5px] rounded-tl-[24px]">Index</th>
                                <th class="py-[12px] px-[5px] text-center">Rank</th>
                                <th class="py-[12px] px-[5px] text-center">Rare/New</th>
                                <th class="py-[12px] px-[5px] text-left">Name</th>
                                <th class="py-[12px] px-[100px] text-center">Contract</th>
                                <th class="py-[12px] px-[5px] text-right">Balance</th>
                                <th class="py-[12px] px-[5px] text-right">Max Buy</th>
                                <th class="py-[12px] px-[5px] text-right">Max Tax</th>
                                <th class="py-[12px] px-[5px] text-right">Sell Tax</th>
                                <th class="py-[12px] px-[5px] text-right">Enable</th>
                                <th class="py-[12px] px-[5px] text-right">AI Risk</th>
                                <th class="py-[12px] px-[30px] rounded-tr-[24px] text-right">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border border-solid border-gray-300 text-center"><td colspan="3" class="py-[12px] px-[40px]">No data to display.</td></tr>
                        </tbody>
                        <tfoot class="bg-primary-normal text-white text-center">
                            <tr><td colspan="12" class="py-[8px] px-[20px] rounded-bl-[24px] rounded-br-[24px]">Showing all activity logs.</td></tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom JS -->
    <script type="text/javascript" src="js/config.keys.js"></script>
    <script type="text/javascript" src="js/logs.js"></script>
</body>
</html>