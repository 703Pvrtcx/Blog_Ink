<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="/app.css">
</head>

<body>
<a href="/" >Go Back</a>
    <?php foreach($posts as $post) : ?>   
        <article>
            <?= $post; ?>
        </article>    
    <?php endforeach; ?>
</body>