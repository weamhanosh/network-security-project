<?php
function random_string($length) {
    $key = '';
    $keys = range('a', 'z');

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}

for ($i = 0; $i < 1; $i++) {
    $to = random_string(rand(6,10)) . "@post.bgu.ac.il";
    echo $to;
    echo "\n";
    $subject = 'החלפת סיסמא ארגונית פעם בשנה Changing Your Organizational Password';
    $message = 'שלום רב,

        הגיע הזמן להחלפה השנתית של הסיסמא הארגונית.

        נא לבצע החלפת סיסמא ארגונית עד ה - 1.8.2020

        למען הסר ספק באמיתות הודעה זו, ניתן לראות בקשה זו בהודעות באתר הבית של האוניברסיטה.

    לפרטים מלאים ואופן החלפת הסיסמא נא לעיין במסמכים המצורפים, בעברית ובאנגלית.


    בברכה,

    שמואל גרובר
    ממ"ח מערך המחשוב


    Hello,

        Please change your organizational password by 1.8.2020.

    The authenticity of this message can be verified by finding the contents on the University home page under Announcements.

    Full details and instructions on how to change your organizational password are in the links provided, as PDF documents in Hebrew and English.

    Sincerely,

    Shmuel Gruber
    Director, Computation Center


    =====================================================================
    צפיה במסמכים מצורפים

    View attached documents

    http://mass.bgu.ac.il/npdf.php?fn=0-2ec3ee49c7d07e4f86330.pdf

    http://mass.bgu.ac.il/npdf.php?fn=1-2ec3ee49c7d07e4f86330.pdf


    =====================================================================
    אפשרות חלופית לצפיה ושמירה של המסמכים המצורפים

    Additional option for viewing and saving the attached documents

    http://mass.bgu.ac.il/nm.php?mm=2ec3ee49c7d07e4f86330
    ';

    $send = mail($to, $subject, $message);
    if($send) {
        echo "email sent\n";
    } else {
        print_r( 'Mailer error: ' . error_get_last());
    }
}
?>
