<?php
// Basic Information
$basic_info = [
    'name' => 'Adam Waheed',
    'age' => 40,
    'profession' => 'Software Engineer',
    'location' => 'Maldives'
];

// Education History
$educations = [
    [
        'degree' => 'BSc in Computer Science',
        'institution' => 'Maldives National University',
        'year' => '2008 - 2012'
    ],
    [
        'degree' => 'MSc in Software Engineering',
        'institution' => 'University of Malaysia',
        'year' => '2013 - 2015'
    ],
    [
        'degree' => 'PhD in Artificial Intelligence',
        'institution' => 'Harvard University',
        'year' => '2016 - 2020'
    ],
    [
        'degree' => 'Certified Scrum Master',
        'institution' => 'Scrum Alliance',
        'year' => '2021'
    ]
];

// Work Experience
$experience = [
    [
        'role' => 'Backend Developer',
        'company' => 'Tech Solutions Pvt Ltd',
        'years' => '2015 - 2018'
    ],
    [
        'role' => 'Lead Software Engineer',
        'company' => 'Global Softwares',
        'years' => '2018 - Present'
    ],
    [
        'role' => 'Scrum Master',
        'company' => 'Global Softwares',
        'years' => '2019 - Present'
    ]
];

// Contact Info
$contact = [
    'email' => 'adam@example.com',
    'phone' => '+960 777 0000',
    'linkedin' => 'https://linkedin.com/in/adamwaheed'
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f4f4f4; }
        .section { background: #fff; padding: 20px; margin-bottom: 20px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .section h2 { border-bottom: 1px solid #ccc; padding-bottom: 10px; }
        .item { margin-bottom: 10px; }
        .label { font-weight: bold; }
    </style>
</head>
<body>

<div class="section">
    <h2>Basic Information</h2>
    <div class="item"><span class="label">Name:</span> <?= $basic_info['name'] ?></div>
    <div class="item"><span class="label">Age:</span> <?= $basic_info['age'] ?></div>
    <div class="item"><span class="label">Profession:</span> <?= $basic_info['profession'] ?></div>
    <div class="item"><span class="label">Location:</span> <?= $basic_info['location'] ?></div>
</div>

<div class="section">
    <h2>Education</h2>
    <?php foreach ($educations as $education): ?>
        <div class="item">
            <div class="label"><?= $education['degree'] ?></div>
            <div><?= $education['institution'] ?> (<?= $education['year'] ?>)</div>
        </div>
    <?php endforeach; ?>
</div>

<div class="section">
    <h2>Experience</h2>
    <?php foreach ($experience as $exp): ?>
        <div class="item">
            <div class="label"><?= $exp['role'] ?></div>
            <div><?= $exp['company'] ?> (<?= $exp['years'] ?>)</div>
        </div>
    <?php endforeach; ?>
</div>

<div class="section">
    <h2>Contact Information</h2>
    <div class="item"><span class="label">Email:</span> <?= $contact['email'] ?></div>
    <div class="item"><span class="label">Phone:</span> <?= $contact['phone'] ?></div>
    <div class="item"><span class="label">LinkedIn:</span> <a href="<?= $contact['linkedin'] ?>" target="_blank"><?= $contact['linkedin'] ?></a></div>
</div>

</body>
</html>
