<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Evaluation</title>
</head>

<body>
    
    <?php
    $années = [];
    $films = [
        ['titre' => 'Le Parrain', 'annee' => '1972', 'duree' => '2h55min', 'synopsis'=>"En 1945, à New York, les Corleone sont une des cinq familles de la mafia. Don Vito Corleone, 'parrain' de cette famille, marie sa fille à un bookmaker. Sollozzo, ' parrain ' de la famille Tattaglia, propose à Don Vito une association dans le trafic de drogue, mais celui-ci refuse. Sonny, un de ses fils, y est quant à lui favorable.
        Afin de traiter avec Sonny, Sollozzo tente de faire tuer Don Vito, mais celui-ci en réchappe. Michael, le frère cadet de Sonny, recherche alors les commanditaires de l'attentat et tue Sollozzo et le chef de la police, en représailles.
        Michael part alors en Sicile, où il épouse Apollonia, mais celle-ci est assassinée à sa place. De retour à New York, Michael épouse Kay Adams et se prépare à devenir le successeur de son père..."],
        ['titre' => 'The Dark Knight', 'annee' => '2008', 'duree' => '2h32min','synopsis'=>"Dans ce nouveau volet, Batman augmente les mises dans sa guerre contre le crime. Avec l'appui du lieutenant de police Jim Gordon et du procureur de Gotham, Harvey Dent, Batman vise à éradiquer le crime organisé qui pullule dans la ville. Leur association est très efficace mais elle sera bientôt bouleversée par le chaos déclenché par un criminel extraordinaire que les citoyens de Gotham connaissent sous le nom de Joker."],
        ['titre' => '12 Hommes en colère', 'annee' => '1957', 'duree' => '1h36min','synopsis'=>"Un jeune homme d'origine modeste est accusé du meurtre de son père et risque la peine de mort. Le jury composé de douze hommes se retire pour délibérer et procède immédiatement à un vote : onze votent coupable, or la décision doit être prise à l'unanimité. Le juré qui a voté non-coupable, sommé de se justifier, explique qu'il a un doute et que la vie d'un homme mérite quelques heures de discussion. Il s'emploie alors à les convaincre un par un."],
        ['titre' => 'Le Seigneur des anneaux:Le Retour du roi', 'annee' => '2003', 'duree' => '3h21min','synopsis'=>"Les armées de Sauron ont attaqué Minas Tirith, la capitale de Gondor. Jamais ce royaume autrefois puissant n'a eu autant besoin de son roi. Mais Aragorn trouvera-t-il en lui la volonté d'accomplir sa destinée ?
        Tandis que Gandalf s'efforce de soutenir les forces brisées de Gondor, Théoden exhorte les guerriers de Rohan à se joindre au combat. Mais malgré leur courage et leur loyauté, les forces des Hommes ne sont pas de taille à lutter contre les innombrables légions d'ennemis qui s'abattent sur le royaume...
        Chaque victoire se paye d'immenses sacrifices. Malgré ses pertes, la Communauté se jette dans la bataille pour la vie, ses membres faisant tout pour détourner l'attention de Sauron afin de donner à Frodon une chance d'accomplir sa quête.
        Voyageant à travers les terres ennemies, ce dernier doit se reposer sur Sam et Gollum, tandis que l'Anneau continue de le tenter..."],
        ['titre' => 'Les Evadés', 'annee' => '1994', 'duree' => '2h22min','synopsis'=>"Red, condamné à perpétuité, et Andy Dufresne, un gentil banquier injustement condamné pour meurtre, se lient d'une amitié inattendue qui va durer plus de vingt ans. Ensemble, ils découvrent l'espoir comme l'ultime moyen de survie. Sous des conditions terrifiantes et la menace omniprésente de la violence, les deux condamnés à perpétuité récupèrent leurs âmes et retrouvent la liberté dans leurs cœurs."],
        ['titre' => "Le Seigneur des anneaux : La Communauté de l'anneau ", 'annee' => '2001', 'duree' => '2h01min','synopsis'=>"Dans ce chapitre de la trilogie, le jeune et timide Hobbit, Frodon Sacquet, hérite d'un anneau. Bien loin d'être une simple babiole, il s'agit de l'Anneau Unique, un instrument de pouvoir absolu qui permettrait à Sauron, le Seigneur des ténèbres, de régner sur la Terre du Milieu et de réduire en esclavage ses peuples. À moins que Frodon, aidé d'une Compagnie constituée de Hobbits, d'Hommes, d'un Magicien, d'un Nain, et d'un Elfe, ne parvienne à emporter l'Anneau à travers la Terre du Milieu jusqu'à la Crevasse du Destin, lieu où il a été forgé, et à le détruire pour toujours. Un tel périple signifie s'aventurer très loin en Mordor, les terres du Seigneur des ténèbres, où est rassemblée son armée d'Orques maléfiques... La Compagnie doit non seulement combattre les forces extérieures du mal mais aussi les dissensions internes et l'influence corruptrice qu'exerce l'Anneau lui-même.
        L'issue de l'histoire à venir est intimement liée au sort de la Compagnie."],
        ['titre' => "Le Seigneur des anneaux : Les Deux Tours ", 'annee' => '2002', 'duree' => '2h59min','synopsis'=>"Après la mort de Boromir et la disparition de Gandalf, la Communauté s'est scindée en trois. Perdus dans les collines d'Emyn Muil, Frodon et Sam découvrent qu'ils sont suivis par Gollum, une créature versatile corrompue par l'Anneau. Celui-ci promet de conduire les Hobbits jusqu'à la Porte Noire du Mordor. A travers la Terre du Milieu, Aragorn, Legolas et Gimli font route vers le Rohan, le royaume assiégé de Theoden. Cet ancien grand roi, manipulé par l'espion de Saroumane, le sinistre Langue de Serpent, est désormais tombé sous la coupe du malfaisant Magicien. Eowyn, la nièce du Roi, reconnaît en Aragorn un meneur d'hommes. Entretemps, les Hobbits Merry et Pippin, prisonniers des Uruk-hai, se sont échappés et ont découvert dans la mystérieuse Forêt de Fangorn un allié inattendu : Sylvebarbe, gardien des arbres, représentant d'un ancien peuple végétal dont Saroumane a décimé la forêt..."],
    ];
    foreach ($films as $film) {
        $années[] = $film['annee'];
    }
    ?>

    <header  style="text-align :center;">
    <h2>Années des films repertoriées : </h2>
        <ul style="display: inline;">
            <?php
            foreach ($années as $année) {
                echo '<li><a href="http://localhost/' . $_SERVER['SCRIPT_NAME'] . '/?annee=' . $année . '">' . $année . '</a></li>';
            }
            ?>
        </ul>
        <ul>
    </header>

    <main style="text-align :center;">
        <h2> Films répertoiriés :</h2>
        <?php
        foreach ($films as $film) {

            if (empty($_GET['annee']) || $_GET['annee'] === $film['annee'])
                echo '<p> <b>Titre</b> :' . $film['titre'] . '<br><b>Année de sortie</b>:' . $film['annee'] . '<br><b>Durée</b>:' . $film['duree'] . '<br><b>Synopsis</b> :'. $film['synopsis'].'</p>';

        }
        ?>
        </ul>
    </main>
    <footer>

    </footer>
</body>

</html>