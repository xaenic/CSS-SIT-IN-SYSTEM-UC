<?php
$page_title = "Announcements";
$parent = [""];
require "core.php";
require '../shared/header.php';
if (!isset($_SESSION['email']))
    header('Location: /admin/login');
if (!isset($_SESSION['role']))
     header('Location: /admin/login');
$connect = connect($database);
try {
    $connect;
} catch (PDOException $e) {

    echo "Error: ." . $e->getMessage();

    return;
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $title = $_POST['title'];

    $status = $_POST['status'];
    $content = $_POST['content'];
    $visibility = $_POST['visibility'];


    $statment = $connect->prepare(
        "INSERT INTO announcement (title,content,status,visibility) VALUES ( :title, :content, :status,:visibility)"
    );
    $statment->execute(array(
        ':title' => $title,
        ':content' => $content,
        ':status' => $status,
        ':visibility' => $visibility,
    ));

    header('Location: /admin/announcement');
    exit();
}
$announcements = get_announcements($connect);




?>






<!-- implement a crud for student  yayawa last nalang ni wil ldo this later last na last najud ni-->
<div class="min-h-screen bg-gradient-to-t from-slate-900 to-gray-900  relative overflow-hidden ">
    <div id="modal" class="hidden  items-center justify-center bg-opacity-50 w-full h-full bg-black z-50 absolute p-10 bg-slate-800 mr-5">
    <form id="announcement" action="" method="post" class="p-10 bg-white rounded-md flex flex-col gap-3 text-sm relative">
        <div  id="close"class="cursor-pointer flex justify-end absolute right-5 top-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 15 15"><path fill="currentColor" d="M3.64 2.27L7.5 6.13l3.84-3.84A.92.92 0 0 1 12 2a1 1 0 0 1 1 1a.9.9 0 0 1-.27.66L8.84 7.5l3.89 3.89A.9.9 0 0 1 13 12a1 1 0 0 1-1 1a.92.92 0 0 1-.69-.27L7.5 8.87l-3.85 3.85A.92.92 0 0 1 3 13a1 1 0 0 1-1-1a.9.9 0 0 1 .27-.66L6.16 7.5L2.27 3.61A.9.9 0 0 1 2 3a1 1 0 0 1 1-1c.24.003.47.1.64.27"/></svg>
        </div>
        <h1 class="text-lg font-medium text-center">New Announcement</h1>
        <div class="flex flex-col gap-2">
            <label>Title</label>
            <div class="bg-slate-200 rounded-md border p-2 text-sm">
                <input id="title" class="outline-none bg-transparent w-full" type="text" placeholder="" name="title" />
            </div>
        </div>
        <div class="flex flex-col gap-2">
            <label>Visibility</label>
            <select id="visibility" name="visibility" class="bg-slate-200 outline-none border-none p-2 rounded-md">
                <option value="All">All</option>
                <option value="Staff">Staff</option>
                <option value="Student">Student</option>
            </select>
        </div>
        <div class="flex flex-col gap-2"> 
            <label>Content</label>
             <textarea name="content" id="editor" placeholder="Write your announcement" class="rounded-md text-sm" autofocus></textarea>
        </div>
        <div class="flex justify-end gap-2">
            <button type="button" id="saveDraftBtn" class="bg-slate-200 text-black px-3 p-2 rounded-md ">Save as Draft</button>
            <button type="button" id="publishBtn" class="bg-green-500 px-3 p-2 rounded-md text-white">Publish</button>
        </div>
        <input id="status" name="status" type="hidden" value="0"/>
    </form>

    </div>
    <!-- Sidebar -->
    <?php require '../shared/sidebar.php'; ?>
    <!-- Main Content -->

    <main class="flex-1 p-4 lg:ml-64  lg:pt-5 ">
        <?php require '../shared/topbar.php'; ?>
        <div class="text-white">
            <?php require './views/announcement.view.php'; ?>
        </div>
    </main>
</div>