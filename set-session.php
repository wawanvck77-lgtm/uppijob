<?php
session_start();

$_SESSION["state"] = "start";

echo json_encode([
    "status" => "ok"
]);
