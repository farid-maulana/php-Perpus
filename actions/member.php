<?php
date_default_timezone_set("Asia/Jakarta");

function getDataMember()
{
    $members = array(
        array(
            'name' => 'Farlan',
            'phone_number' => '085823723432',
            'address' => 'Jl. Kita Berbeda Meskipun Saling Sayang',
            'photo_profile' => 'assets/images/photo/user.png',
            'registration_date' => date('d F Y'),
        ),
        array(
            'name' => 'Laravelo',
            'phone_number' => '082344523743',
            'address' => 'Jl. Menuju Kebaikan',
            'photo_profile' => 'assets/images/photo/user.png',
            'registration_date' => date('d F Y'),
        ),
    );

    return $members;
}

function showMembers($members)
{
    if ($members == null)
    {
        $members = getDataMember();
    }

    $view = include 'members/index.php';
    return $view;
}

function createNewMember()
{
    $view = include 'members/create.php';
    return $view;
}

function storeNewMember()
{
    $members = getDataMember();

    // Check directory is exist
    $directory = "assets/images/photo/";
    if(!is_dir($directory)) {
        mkdir($directory);
    }

    // Upload image
    $fileTempName = $_FILES['photo_profile']['tmp_name'];
    $fileDestination = $directory . basename($_FILES["photo_profile"]["name"]);
    move_uploaded_file($fileTempName, $fileDestination);

    $data = array(
        'name' => $_POST['name'],
        'phone_number' => $_POST['phone_number'],
        'address' => $_POST['address'],
        'photo_profile' => $fileDestination,
        'registration_date' => date('d F Y')
    );
    
    array_push($members, $data);

    return showMembers($members);
}

function editMember($id)
{
    $members = getDataMember();

    $member = $members[$id];

    $view = include 'members/edit.php';
    return $view;
}

function updateMember($id)
{
    $members = getDataMember();

    // Check directory is exist
    $directory = "assets/images/photo/";
    if(!is_dir($directory)) {
        mkdir($directory);
    }

    // Upload image
    $fileTempName = $_FILES['photo_profile']['tmp_name'];
    $fileDestination = $directory . basename($_FILES["photo_profile"]["name"]);
    move_uploaded_file($fileTempName, $fileDestination);

    $data = array(
        'name' => $_POST['name'],
        'phone_number' => $_POST['phone_number'],
        'address' => $_POST['address'],
        'photo_profile' => $fileDestination,
        'registration_date' => date('d F Y')
    );
    
    $members[$id] = $data;

    return showMembers($members);
}

function deleteMember($id)
{
    $members = getDataMember();

    \array_splice($members, $id, 1);

    showMembers($members);
}
?>