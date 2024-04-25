<?php

require 'REQUIRED/config.php';

$id = $_GET['id'];
$stmt = $con->prepare("SELECT * FROM events WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $date = date('d-m-Y', strtotime($row['date']));
    echo '<h1>' . $row['naam'] . '</h1>
    <div class="event-content">
        <div class="event-info">
            <h2>Evenement Informatie</h2>
            <p><strong>Datum:</strong> ' . $date . '</p>
            <p><strong>Locatie:</strong> ' . $row['locatie'] . '</p>
            <p><strong>Status:</strong> <span class="status-badge status-' . $row['status'] . '">' . $row['status'] . '</span></p>
        </div>
        <div class="event-actions">
            <h2>Acties</h2>';
    if ($row['userid'] == $_SESSION['id']) {
        echo '<a href="edit-event?id=' . $row['id'] . '" class="btn btn-secondary">Bewerk</a>';
        echo '<a href="delete-event?id=' . $row['id'] . '" class="btn btn-danger">Verwijder</a>';
    }
    echo '</div>
    </div>';
} else {
    echo '<h1>Evenement niet gevonden</h1>';
}

?>