
<div>
    <?php if (!empty($errorMessage)) : ?>
        <p class="alert error"> <?php echo $errorMessage ?> </p>
    <?php endif; ?>
</div>

<div>
    <?php if (!empty($successMessage)) : ?>
        <p class="alert success"> <?php echo $successMessage ?> </p>
    <?php endif; ?>
</div>