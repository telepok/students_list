//function addEmail ($db) {
//    $rows = $db->fetchAll();
//    $letter = array ('a','b','c','d','e','f','g','h','i','j','k','l','m','o','p','q','r','s','t','u','v','w','x','y'.'z');
//    $domains = array ('mail.ru','gmail.com', 'yandex.ru');
////    echo $mailbox;
//    foreach ($rows as $row) {
//        $mailbox = '';
//        for ($i=1; $i <= 5; $i++) {
//            $mailbox .= $letter[array_rand($letter)];
//        }
//        $mailbox .= '@'.$domains[array_rand($domains)];
//        echo $row['last_name']."\n";
//        $db->update($row['first_name'],$row['last_name'],$row['groupNumber'],$row['rating'],$mailbox);
//    }
//}
