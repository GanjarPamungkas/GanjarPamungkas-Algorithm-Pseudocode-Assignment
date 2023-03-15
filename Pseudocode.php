<?php
$ordered_items = array();
$continue_ordering = true;

while ($continue_ordering) {
    echo "Please select your menu:\n";
    echo "1. Fried rice\n";
    echo "2. Grilled chicken\n";
    echo "3. Burger\n";
    $menu_choice = readline("Enter menu choice: ");

    if ($menu_choice == 1) {
        array_push($ordered_items, "Fried rice");
    } elseif ($menu_choice == 2) {
        array_push($ordered_items, "Grilled chicken");
    } elseif ($menu_choice == 3) {
        array_push($ordered_items, "Burger");
    } else {
        echo "Invalid menu choice\n";
    }

    $continue_input = readline("Do you want to continue ordering? (Y/N) ");
    if ($continue_input != "Y") {
        $continue_ordering = false;
    }
}

echo "Your ordered items:\n";
foreach ($ordered_items as $item) {
    echo $item . "\n";
}
?>
