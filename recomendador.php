<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['mood']) && !empty($_POST['mood'])) {
    $mood = htmlspecialchars($_POST['mood']);

    $songRecommendations = [
        "feliz" => [
            "songs" => ["Pharrell Williams - Happy"],
            "youtube" => "https://www.youtube.com/embed/ZbZSe6N_BXs?autoplay=1&mute=1"
        ],
        "triste" => [
            "songs" => ["Coldplay - Fix You"],
            "youtube" => "https://www.youtube.com/embed/k4V3Mo61fJM?autoplay=1&mute=1" 
        ],
        "energetico" => [
            "songs" => ["AC/DC - Thunderstruck"],
            "youtube" => "https://www.youtube.com/embed/v2AC41dglnM?autoplay=1&mute=1"
        ],
        "relajado" => [
            "songs" => ["Lamp - 恋は月の蔭に"],
            "youtube" => "https://www.youtube.com/embed/j2tZQ75uB0U?autoplay=1&mute=1"
        ],
        "inspirado" => [
            "songs" => ["06 Concerto No. 2 in G Minor, RV 315 Summer: III. Presto - Vivaldi: The Four Seasons"],
            "youtube" => "https://www.youtube.com/embed/tvrGBIfwhkI?autoplay=1&mute=1"
        ],
        "estresado" => [
            "songs" => ["Marconi Union - Weightless"],
            "youtube" => "https://www.youtube.com/embed/UfcAVejslrU?autoplay=1&mute=1"
        ]
    ];

    if ($mood && array_key_exists($mood, $songRecommendations)) {
        $recommendation = implode(", ", $songRecommendations[$mood]['songs']);
        $youtubeEmbed = $songRecommendations[$mood]['youtube'];
    } else {
        $recommendation = "Por favor, selecciona un estado de ánimo válido.";
        $youtubeEmbed = null;
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Recomendación de Canciones</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="https://png.pngtree.com/png-clipart/20221028/original/pngtree-music-logo-png-image_8736577.png">
</head>

<body>
    <div class="recommendation-container">
        <h1>Te recomendamos escuchar</h1>
        <h2><?php echo $recommendation; ?></h2>
        <?php if ($youtubeEmbed): ?>
            <iframe width="1052" height="592" src="<?php echo htmlspecialchars($youtubeEmbed); ?>"
                title="Video de Recomendación" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                    encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
            </iframe>
        <?php endif; ?>
        <a href="index.html"><p>Volver atrás</p></a>
    </div>
</body>

</html>