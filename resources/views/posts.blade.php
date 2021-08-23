<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="/app.css">
</head>

<body>

    <?php foreach($posts as $post) : ?>   
        <article style="border: 1px solid grey;">
            <h1> 
                <a href="/posts/<?= $post->slug; ?>">
                     <?= $post->title; ?>
                </a>
              
            </h1>
         
            <div>  
                <p><?= $post->slug; ?></p> 
                <?= $post->date; ?>
            </div>
              <h4><?= $post->excerpt; ?></h4>
           
        </article> 
        
    <?php endforeach; ?>
</body>