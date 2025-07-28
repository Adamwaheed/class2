<?php
// Blog Posts Array
$blogs = [
    [
        'title' => 'The Future of AI in Everyday Life',
        'author' => 'Adam Waheed',
        'date' => '2025-07-28',
        'excerpt' => 'Artificial intelligence is changing the way we live, from smart homes to personal assistants...',
        'link' => '#'
    ],
    [
        'title' => 'Why Minimalist Web Design Works',
        'author' => 'Fatima Noor',
        'date' => '2025-07-25',
        'excerpt' => 'Clean, uncluttered websites not only look better but also load faster and convert more visitors...',
        'link' => '#'
    ],
    [
        'title' => 'Top 5 Tips to Learn Programming Fast',
        'author' => 'Mohamed Zaid',
        'date' => '2025-07-20',
        'excerpt' => 'Learning to code can be overwhelming. These five tips will help you stay focused and motivated...',
        'link' => '#'
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blog Listing</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f0f2f5;
            padding: 40px;
        }
        .blog-post {
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 20px;
            border-left: 5px solid #007acc;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .blog-post h2 {
            margin-top: 0;
        }
        .meta {
            color: #777;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .excerpt {
            color: #333;
        }
        .read-more {
            display: inline-block;
            margin-top: 10px;
            color: #007acc;
            text-decoration: none;
            font-weight: bold;
        }
        .read-more:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h1>Latest Blog Posts</h1>

    <?php foreach ($blogs as $post): ?>
        <div class="blog-post">
            <h2><?= $post['title'] ?></h2>
            <div class="meta">By <?= $post['author'] ?> | <?= date('F j, Y', strtotime($post['date'])) ?></div>
            <p class="excerpt"><?= $post['excerpt'] ?></p>
            <a class="read-more" href="<?= $post['link'] ?>">Read more →</a>
        </div>
    <?php endforeach; ?>

</body>
</html>
