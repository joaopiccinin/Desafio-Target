<?php
$data = json_decode(file_get_contents('faturamento.json'), true);
$revenues = $data['daily_revenues'];

$valid_revenues = array_filter($revenues, fn($revenue) => $revenue > 0);

$min_revenue = min($valid_revenues);
$max_revenue = max($valid_revenues);

$average = array_sum($valid_revenues) / count($valid_revenues);

$days_above_average = count(array_filter($valid_revenues, fn($revenue) => $revenue > $average));

echo "Lowest revenue: {$min_revenue}\n";
echo "Highest revenue: {$max_revenue}\n";
echo "Days with revenue above average: {$days_above_average}\n";
?>
