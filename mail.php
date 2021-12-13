$name = $_Post['user_name'];
$name = $_Post['user_phone'];
$name = $_Post['user_email'];

$mail → isSMTP();
$mail → Host = 'smtp.mail.ru';

$mail → SMTAuth = 'true';
$mail → Username = 'maxxx899ttr@mail.ru';
$mail → Password = '12max23max';

$mail → SMIPSecure = 'ssl';
$mail → post = '465';
$mail → setFrom =('maxxx899ttr@mail.ru');
$mail → addAddress = ('maxxx999tte@gmail.com');