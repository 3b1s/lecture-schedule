<?php
// Enable error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Schedule array
$schedule = [
    'الأحد' => [
        ['time' => '9:00-9:45', 'name' => 'اللغة العربية', 'lecturer' => 'م.د. إلهام روكان عبد'],
        ['time' => '10:00-10:45', 'name' => 'تاريخ العلاقات الدولية', 'lecturer' => 'أ.د. عبدالغني محمد عبدالعزيز'],
        ['time' => '11:00-11:45', 'name' => 'الأنظمة السياسية والدستورية المقارنة', 'lecturer' => 'أ.د. محمد شطب'],
        ['time' => '12:00-12:45', 'name' => 'المدخل لدراسة القانون', 'lecturer' => 'أ.م. رياض ناظم'],
    ],
    'الاثنين' => [],
    'الثلاثاء' => [],
    'الأربعاء' => [],
    'الخميس' => [],
    'الجمعة' => [],
    'السبت' => [],
];

// Arabic days of the week
$days = ['الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت'];

// Determine the selected day or current day
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['selected_day'])) {
    $selectedDay = $_POST['selected_day'];
} else {
    $currentDayIndex = date('w'); // 0 (Sunday) to 6 (Saturday)
    $selectedDay = $days[$currentDayIndex];
}

// Get the selected day's schedule
$todaySchedule = $schedule[$selectedDay] ?? [];
$currentDay = $selectedDay;
