<?php
$site = [
    'name' => 'Ashraya Foundation',
    'title' => 'Ashraya Oldage Home',
    'tagline' => 'Care for Senior Citizen • Dignity for Senior Citizens',
    'address' => 'Ashraya Orphanage Home, Katiganikaluva Village, Anantapur (M),, Anantapur, India, 515722',
    'phone' => '+91 90000 92181',
    'email' => 'asrayahome@gmail.com',
    'whatsapp' => '919000092181',
];

$bank = [
    'bank_name' => 'YOUR BANK NAME',
    'account_name' => 'ASHRAYA FOUNDATION',
    'account_number' => '000000000000',
    'ifsc' => 'YOUR IFSC CODE',
    'branch' => 'YOUR BRANCH',
];

function e($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}
?>