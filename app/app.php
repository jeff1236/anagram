<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/AnagramGenerator.php";

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));


    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->get("/view_matches", function() use($app) {
        $input = $_GET['main_word'];
        $input2 = $_GET['array_of_words'];
        $input2_array = array();
        $input2_array = explode(" ", $input2);
        $anagram = new AnagramGenerator;

        $matched_words = array();
        $un_matched_words = array();
        $matched_words = $anagram->makeAnagram($input, $input2_array)[0];
        $un_matched_words = $anagram->makeAnagram($input, $input2_array)[1];

        return $app['twig']->render('view_matches.html.twig', array('matches' => $matched_words, 'nonmatches' => $un_matched_words));
    });
    return $app;
?>
