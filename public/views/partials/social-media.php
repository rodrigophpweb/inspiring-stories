<?php
    $socialLinks = [
        'facebook'  =>  'Facebook',
        'instagram' =>  'Instagram',
        'linkedin'  =>  'LinkedIn',
        'tiktok'    =>  'TikTok'
    ];
?>

<?php foreach ($socialLinks as $id => $label): ?>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-<?php echo $id; ?>"><i class="bi bi-<?php echo $id; ?>"></i></span>
        <input type="text" class="form-control" placeholder="https://<?php echo $id; ?>.com" aria-label="<?php echo $label; ?>" aria-describedby="basic-<?php echo $id; ?>">
    </div>
<?php endforeach; ?>