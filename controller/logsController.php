<?php
// Connect to MySQL
require_once('../db-config.php');
print_r($conn);
// Get all data from tbl_bots table
$sql = 'SELECT * FROM tbl_logs ORDER BY created_at DESC limit 200';
$result = $conn->query($sql);
// Create DOM using query result
$dom = '';
if ($result->num_rows > 0) {
    $index = 1;
    while ($row = $result->fetch_assoc()) {
        $dateTime = new DateTime($row['created_at']);
        // $dateTime->setTimestamp((int) / 1000);

        // format the date as "YYYY-mm-dd HH:mm:ss.u"
        $dateTimeString = $dateTime->format('mm/dd/yy H:i');
        //$dateTimeString = substr($dateTimeString, 0, -3); // remove last 3 digits to get milliseconds only

        // $totalMilliseconds = (int)$row['created_at'];
        // $timestamp = round($totalMilliseconds / 1000);
        // $dateTimeString = date('Y-m-d H:i:s', $timestamp) . '.' . sprintf('%03d', $totalMilliseconds % 1000);

         $dom .= '<tr class="border border-solid border-gray-300">' .
            '<td class="py-[12px] px-[5px] text-left">' . $index . '</td>' .
            '<td class="py-[12px] px-[5px] text-center">' . $row['rank'] . '</td>' .
            '<td class="py-[12px] px-[5px] text-center">' . $row['rare_new'] . '</td>' .
            '<td class="py-[12px] px-[5px] text-left">' . $row['name'] . '</td>' .
            '<td class="py-[12px] px-[100px] text-center">' . $row['contract'] . '</td>' .
            '<td class="py-[12px] px-[5px] text-right">' . $row['balance'] . '</td>' .
            '<td class="py-[12px] px-[5px] text-right">' . $row['max_buy'] . '</td>' .
            '<td class="py-[12px] px-[5px] text-right">' . $row['max_tax'] . '</td>' .
            '<td class="py-[12px] px-[5px] text-right">' . $row['sell_tax'] . '</td>' .
            '<td class="py-[12px] px-[5px] text-right">' . $row['enable'] . '</td>' .
            '<td class="py-[12px] px-[5px] text-right">' . $row['ai_risk'] . '</td>' .
            '<td class="py-[12px] px-[30px] text-right">' . $dateTimeString  . '</td>' .
        '</tr>';
        $index ++;
    }
} else {
    $dom = '<tr class="border border-solid border-gray-300 text-center"><td colspan="12" class="py-[12px] px-[5px]">No data to display.</td></tr>';
}
echo $dom;
?>