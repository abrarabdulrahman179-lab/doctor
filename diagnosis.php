<?php
// معالجة اختيار التشخيص
if (isset($_POST['diagnosis'])) {
    $_SESSION['selected_diagnosis'] = $_POST['diagnosis'];
    header('Location: index.php?screen=specialty');
    exit();
}
?>

<!-- شاشة التشخيص -->
<div class="screen active">
    <h2>تشخيص المرض</h2>
    <form method="POST" action="">
        <div class="diagnosis-options">
            <label class="option-item">
                <input type="radio" name="diagnosis" value="نقص دم" required>
                نقص دم
            </label>
            <label class="option-item">
                <input type="radio" name="diagnosis" value="ارتفاع الضغط">
                ارتفاع الضغط
            </label>
            <label class="option-item">
                <input type="radio" name="diagnosis" value="السكري">
                السكري
            </label>
        </div>
        <button type="submit" class="next-button">Next</button>
    </form>
</div>