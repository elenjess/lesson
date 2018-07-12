<?php
$family = [
	[ 'name' => 'ben']
];

$html = '<ul>';
foreach ($family as  $member) {
	$html .= '<li>name: '.$member['name'].'</li>';
}
$html .= '</ul>';
echo json_encode($html);