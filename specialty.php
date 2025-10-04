<?php
// معالجة اختيار التخصص
if (isset($_POST['specialty'])) {
    $_SESSION['selected_specialty'] = $_POST['specialty'];
    header('Location: index.php?screen=search');
    exit();
}
?>

<!-- شاشة اختيار التخصص -->
<div class="screen active">
    <h2>اختر تخصص طبيبك</h2>
    <form method="POST" action="">
        <div class="specialty-grid">
            <?php
            $specialties = [
                'طبيب قلب', 'طبيب عظام', 'طبيب آذن', 'طبيب عيون',
                'طبيب باطنة', 'طبيب أطفال', 'طبيب جلدية', 'طبيب نفسي'
            ];
            
            foreach ($specialties as $specialty) {
                echo '<label class="specialty-item">';
                echo '<input type="radio" name="specialty" value="' . $specialty . '" required>';
                echo $specialty;
                echo '</label>';
            }
            ?>
        </div>
        <button type="submit" class="next-button">التالي</button>
    </form>
</div>