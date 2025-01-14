<?php
$json = file_get_contents('dados.json');

$data = json_decode($json, true);

$valid_revenues = [];
$min_revenue = PHP_FLOAT_MAX;
$max_revenue = PHP_FLOAT_MIN;
$total_revenue = 0;

foreach ($data as $day) {
    $revenue = $day['valor'];
    if ($revenue > 0) {
        $valid_revenues[] = $revenue;
        if ($revenue < $min_revenue) {
            $min_revenue = $revenue;
        }
        if ($revenue > $max_revenue) {
            $max_revenue = $revenue;
        }
        $total_revenue += $revenue;
    }
}

$average_revenue = $total_revenue / count($valid_revenues);

$days_above_average = 0;
foreach ($valid_revenues as $revenue) {
    if ($revenue > $average_revenue) {
        $days_above_average++;
    }
}

echo "Minimum revenue: R$" . number_format($min_revenue, 2, ',', '.') . "\n";
echo "Maximum revenue: R$" . number_format($max_revenue, 2, ',', '.') . "\n";
echo "Number of days with revenue above the average: " . $days_above_average . "\n";
?>
