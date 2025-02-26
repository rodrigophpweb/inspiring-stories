<?php foreach ($schoolLevel as $level): ?>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="area-<?php echo $level['id']; ?>" value="<?php echo htmlspecialchars($level['level']); ?>">
        <label class="form-check-label" for="area-<?php echo $level['id']; ?>"><?php echo htmlspecialchars($level['level']); ?></label>
    </div>
<?php endforeach; ?>