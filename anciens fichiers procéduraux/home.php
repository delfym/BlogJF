<?php
require_once 'Model/ChapterManager.php';
require_once 'Model/CommentManager.php';
require 'Controller/ChapterController.php';
//require_once 'Controller/Controller.php';
/*
    $chapter = new \Controller\ChapterController();
    echo $chapter->home();
  */
try {
     if ($_GET == null) {
        $chapters = new Model\ChapterManager();
        $chapters = $chapters->getChapters();
        require_once 'View/pages/chaptersList.php';
    } else {
        $page = $_GET['p'];
        if ($page == 'chapter') {
            $id = htmlspecialchars($_GET['id']);
            $chapter = new Model\ChapterManager();
            $comments = new Model\CommentManager();
            $chapter = $chapter->getChapter($id);
            $comments = $comments->getComments($id);
            require_once 'View/pages/chapterView.php';
        }
    }
}
catch (Exception $e) {
    echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
}


/*
 *
    if ($_GET == null ){
        $chapters = new Model\ChapterManager();
        $chapters = $chapters->getChapters();
        require_once 'View/pages/chaptersList.php';
    } else {
        $p = $_GET['p'];
            if ($p == 'chapter') {
                $chapterPage = new \Controller\ChapterController();

        }
 */
/*
ob_start();
require_once 'Model/ChapterManager.php';

/*index.php
$chapters = new Model\ChapterManager();
$chapters = $chapters->getChapters();

//$chapter = $chapter->getChapter($_GET['id']);
foreach ($chapters as $chapter) {
echo '<div class ="frame2"><h5 id = title >' . $chapter['title'] . ' </h5> ' .
    '<article id = "comment" >' . $chapter['content'] . '<br/><br/></article> </div>';
}   */

/*
$chapter = new Model\ChapterManager();
$chapters = $chapter->getChapter(2);

echo '<div class ="frame2"><h5 id = title >' . $chapters['title'] . ' </h5> ' . '<article id = "comment" >' . $chapters['content'] . '<br/><br/></article> </div>';
$content = ob_get_clean();
require_once 'View/template.php';

if($action == null) {
        $chapters = new Model\ChapterManager();
        $chapters = $chapters->getChapters();
        require_once 'View/chaptersList.php';
    } elseif ($action == 'chapter') {
        $chapter = new Model\ChapterManager();
        $chapter = $chapter->getChapter($_GET['id']);
        require_once 'View/chapterView.php';
*/

/* try {
    if ($_GET == null ){
        $chapters = new Model\ChapterManager();
        $chapters = $chapters->getChapters();
        require_once 'View/pages/chaptersList.php';
    } else {
        $p = $_GET['p'];
            if ($p == 'chapter') {
                $id = htmlspecialchars($_GET['id']);
                $chapter = new Model\ChapterManager();
                $comments = new Model\CommentManager();
                $chapter = $chapter->getChapter($id);
                $comments = $comments->getComments($id);
                require_once 'View/pages/chapterView.php';
        }
    }
}
*/
