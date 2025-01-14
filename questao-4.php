<?php
$revenues = [
    "SP" => 67836.43,
    "RJ" => 36678.66,
    "MG" => 29229.88,
    "ES" => 27165.48,
    "Outros" => 19849.53
];

$total_revenue = array_sum($revenues);

$percentages = array_map(fn($value) => ($value / $total_revenue) * 100, $revenues);

foreach ($revenues as $state => $value) {
    $percentage = $percentages[$state];
    echo "$state: R$" . number_format($value, 2, ',', '.') . " (" . number_format($percentage, 2, ',', '.') . "%)\n";
}
?>
