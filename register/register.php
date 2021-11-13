<?php 
$login = $_POST['login'];
$pass = $_POST['password'];
$id = 'Не указан';
if ($_POST['id'] != ''){
    $id = $_POST['id'];
}
if ($pass == ''){
    header('Location: /error?id=174');
    exit();
}
require "../info.php";
$conn = new PDO($dsn);
$rs = $conn->query("SELECT * FROM users WHERE login = '$login'");
$s = $rs->fetchAll(PDO::FETCH_ASSOC);
if ($s){
    header("Location: /error/?id=174");
    exit();
}
else {
    $res = $conn->query("INSERT INTO users (login, password) VALUES('$login', '$pass')");
    setcookie("user", $login, time() + 3600, '/');
//=======================================================================================================
// Create new webhook in your Discord channel settings and copy&paste URL
//=======================================================================================================

$webhookurl = "https://discord.com/api/webhooks/908464040353861642/-9jCPb1JVaeo5jLgMeWHH7aPVFZ6GY77-zHqBby37Ol9qOZztU2fBTQIpVNptVPNrjK6";

//=======================================================================================================
// Compose message. You can use Markdown
// Message Formatting -- https://discordapp.com/developers/docs/reference#message-formatting
//========================================================================================================
if ($id != 'Не указан'){
    $user = "<@!$id>";
}else{
    $user = $id;
}
$value = "
Ник: $login\n
Дискорд-профиль: $user
----------------------
Спасибо что зарегистрировались на нашем сайте!
удачных покупок!
";
$timestamp = date("c", strtotime("now"));

$json_data = json_encode([
    // Message
//    "content" => "Создан новый аккаунт!",
    "url" => "https://gacho.herokuapp.com/main/",
    // Username
    "username" => "G-Inc.",

    // Avatar URL.
    // Uncoment to replace image set in webhook
//    "avatar_url" => "",

    // Text-to-speech
    "tts" => false,

    // File upload
    // "file" => "",

    // Embeds Array
    "embeds" => [
        [
            // Embed Title
            "title" => "Создан новый аккаунт!",

            // Embed Type
            "type" => "rich",

            // Embed Description
//            "description" => "Description will be here, someday, you can mention users here also by calling userID <@12341234123412341>",

            // URL of title link
//            "url" => "https://gist.github.com/Mo45/cb0813cb8a6ebcd6524f6a36d4f8862c",

            // Timestamp of embed must be formatted as ISO8601
            "timestamp" => $timestamp,

            // Embed left border color in HEX
            "color" => hexdec( "00ff00" ),

            // Footer
            "footer" => [
                "text" => "Let's Celebrate and suck some dick!",
//                "icon_url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=375"
            ],

            // Image to send
//            "image" => [
//                "url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=600"
//            ],

            // Thumbnail
            "thumbnail" => [
                "url" => "https://media.discordapp.net/attachments/861649193722839050/908467242713378827/Halloween_Logo.png?width=584&height=584"
            ],

            // Author
            "author" => [
                "name" => "G-Inc.",
                "url" => "https://gacho.herokuapp.com/main/"
            ],

            // Additional Fields array
            "fields" => [
                // Field 1
                [
                    "name" => "Информация о аккаунте:",
                    "value" => "$value",
                    "inline" => false
                ]
                // Field 2
//                [
//                    "name" => "Field #2 Name",
//                    "value" => "Field #2 Value",
//                    "inline" => true
//                ]
                // Etc..
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
// If you need to debug, or find out why you can't send message uncomment line below, and execute script.
// echo $response;
curl_close( $ch );
header("Location : /");
}