<?php
$pattern = '/\w+\..{2,3}(?:\..{2,3})?(?:$|(?=\/))/i';

echo "Masukan File : ";
$isi = trim(fgets(STDIN));
$file = file_get_contents($isi);
$pecah = explode("\r\n", $file);
foreach ($pecah as $number => $fix)
{
    $data = "result.txt";

    if (preg_match($pattern, $fix, $matches) === 1) {

        echo $number + 1 .". ". $matches[0] . PHP_EOL;
        file_put_contents($data, PHP_EOL . $matches[0], FILE_APPEND);

    }


}
