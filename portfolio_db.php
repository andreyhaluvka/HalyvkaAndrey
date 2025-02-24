<?php

$link = false;

function openDB()
{
    global $link;

    $link = mysqli_connect("localhost", "root", "", "halyavka_portfolio");
    mysqli_query($link, "SET NAMES UTF8");
}

function closeDB()
{
    global $link;
    $link = false;
}

function getLanguages()
{
    global $link;
    openDB();

    $result = mysqli_query($link, "SELECT * FROM languages");

    closeDB();
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getContacts()
{
    global $link;
    openDB();

    $result = mysqli_query($link, "SELECT * FROM contacts");

    closeDB();
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getImages($db)
{
    global $link;
    openDB();

    $result = mysqli_query($link, "SELECT * FROM $db");
    if ($result->num_rows > 0) {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);

        while ($row = $result->fetch_assoc()) {

            $imageType = finfo_buffer($finfo, $row['img'], FILEINFO_MIME_TYPE);


            $imageBase64 = base64_encode($row['img']);
            $images[] = [
                'id' => $row['id'],
                'src' => 'data:' . $imageType . ';base64,' . $imageBase64,
                'type' => $imageType
            ];
        }

        finfo_close($finfo);
    } else {
        $images = [];
    }

    closeDB();
    return $images;
}

?>