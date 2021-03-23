<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * To generate specific templates for your pages you can use:
 * /mytheme/templates/page-mypage.twig
 * (which will still route through this PHP file)
 * OR
 * /mytheme/page-mypage.php
 * (in which case you'll want to duplicate this file and save to the above path)
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

 // Display all the possible roles you want to see in the table
$users = get_users( [ 'role__in' => [ 
    'singer',
    'choirBoss',
    'bookie',
    'conductor',
    'secretary',
    'noteHandler',
    'subscriber', 
    'author' 
    ] ] );

// Check if the user is a bookie
$bookie = current_user_can( 'bookie' );
$choirBoss = current_user_can( 'choirBoss' );
$conductor = current_user_can('conductor');

// Calculate birthday
function calculateBirthday($Personal_ID){
    $century = 0;
    $centuryIdentificator = (int) substr($Personal_ID, 0, 1);
    if ($centuryIdentificator < 3) {
        $century = 18;
    } elseif ($centuryIdentificator > 2 && $centuryIdentificator < 5) {
        $century = 19;
    } elseif ($centuryIdentificator > 4 && $centuryIdentificator < 7) {
        $century = 20;
    }
    $PersonalIdBirthInfo =  substr($Personal_ID, 1, 6);
    $birthYear = substr($PersonalIdBirthInfo, 0, 2);
    $birthMonth = substr($PersonalIdBirthInfo, 2, 2);
    $birthDay = substr($PersonalIdBirthInfo, 4, 2);


    $birthDate = $birthDay .'. '. $birthMonth . '. '  . $century . $birthYear;

    return $birthDate;
}


$context = Timber::context();

$context['users'] = $users;
$context['isABookie'] = $bookie;
$context['choirBoss'] = $choirBoss;
$context['conductor'] = $conductor;

$timber_post     = new Timber\Post();
$context['post'] = $timber_post;
Timber::render( array( 'pages/' . $timber_post->post_name . '.twig', 'page.twig' ), $context );
